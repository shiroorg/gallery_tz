<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Template_ViewAdmin
{

    public function action_index()
    {
        if ($this->request->method() == Request::POST) {

            $data = Arr::extract($_POST, ['name', 'url']);
            if ($_FILES['img']['name'] != NULL) {
                $directory = $_SERVER['DOCUMENT_ROOT'] . URL::base() . DIRECTORY_SEPARATOR . "media" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR;
                $img = $this->_save_image($_FILES['img'], $directory);
            } else {
                $img = 'null';
            }
            Arr::set_path($data, 'img', $img);

            $gallery = ORM::factory('Gallery');
            try {
                $gallery->values($data);
                $gallery->save();
                echo "<p class=\"bg-success\">Баннер успешно загружен!</p>";
            } catch (ORM_Validation_Exception $e) {
                echo "<p class=\"bg-alert\">Во время загрузки произошла ошибка! (Убедитесь что у вас есть права на папку...)</p>";
            }
        }

        $this->template->title = __('Admin :: Управление баннерами');
        $Gallery_List = ORM::factory('Gallery')->find_all();
        $this->content = View::factory($this->view_path)->bind('gallery', $Gallery_List);


    }

    protected function _save_image($image, $directory) {

        if(!file_exists($directory)){
            mkdir($directory,0777);
        }
        $small = $directory . "small" . DIRECTORY_SEPARATOR;
        if(!file_exists($small)){
            mkdir($small,0777);
        }
        $big = $directory . "big" . DIRECTORY_SEPARATOR;
        if(!file_exists($big)){
            mkdir($big,0777);
        }
        $filename = strtolower(Text::random('alnum', 20)) . '.jpg';

        if (
            !Upload::valid($image) OR
            !Upload::not_empty($image) OR
            !Upload::type($image, array('jpg', 'jpeg', 'png'))
        ) {
            return FALSE;
        }

        try {
            if ($file = Upload::save($image, NULL, $big)) {
                Image::factory($file)->save($big . $filename);
                Image::factory($file)
                    ->resize(100, 100, Image::AUTO)
                    ->save($small . $filename);
                unlink($file);
            }
            return $filename;
        } catch (ErrorException $e) {
            return FALSE;
        }
    }

    public function before()
    {
        /**
         * Http Auth
         * login: admin
         * password: admin
         */
        if (!isset($_SERVER['PHP_AUTH_USER']))
        {
            header("WWW-Authenticate: Basic realm=\"Private Area\"");
            header("HTTP/1.0 401 Unauthorized");
            die("Sorry - you need valid credentials to be granted access!\n");
        }
        else
        {
            if (($_SERVER['PHP_AUTH_USER'] == 'ivan') && ($_SERVER['PHP_AUTH_PW'] == 'ivan'))
            {

            }
            else
            {
                header("WWW-Authenticate: Basic realm=\"Private Area\"");
                header("HTTP/1.0 401 Unauthorized");
                die("Sorry - you need valid credentials to be granted access!\n");
            }
        }
        parent::before(); // TODO: Change the autogenerated stub
    }
}

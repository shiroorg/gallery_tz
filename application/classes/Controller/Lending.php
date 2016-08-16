<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Lending extends Template_ViewPublic
{

    public $template = 'lending';

    public function before()
    {
        parent::before();
    }

    public function action_index()
    {

        $banner = ORM::factory('Gallery')->order_by('view', 'ASC')->find();
        if ($banner->loaded()) {

            $Cookie = Cookie::get('is_unique');
            $Cookie = json_decode($Cookie ,true);
            if (!isset($Cookie[$banner->id]) or ($_SERVER["REMOTE_ADDR"] != $Cookie[$banner->id])) {
                $banner->set('unique', $banner->unique + 1);
                $Cookie[$banner->id] = $_SERVER["REMOTE_ADDR"];
                $Cookie = json_encode($Cookie);
                Cookie::set('is_unique', $Cookie);
            }
            $banner->set('view', $banner->view + 1);
            $banner->save();
        }
        $this->template->title = __('Добро пожаловать');
        $this->content = View::factory($this->view_path)->bind('banner', $banner);

    }
}

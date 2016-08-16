<?php defined('SYSPATH') or die('No direct script access.');

class Template_ViewPublic extends Controller_Template {
    
    public $template = 'frontend', $view_path, $skin;
    public $content, $user, $additional_script = [], $additional_style = [];



    public function before()
    {
        $this->template = Kohana::$config->load('application')->get('skin_frontend') . DIRECTORY_SEPARATOR . $this->template;

        parent::before();


        $this->skin = Kohana::$config->load('application')->get('skin');

        $this->view_path = implode(DIRECTORY_SEPARATOR, [
            Kohana::$config->load('application')->get('skin_frontend'),
            strtolower(Request::$initial->controller()),
            strtolower(Request::$initial->action()),
        ]);
    }


    public function after()
    {
        # Подключение js application
        if($js_application = file_get_contents('media/frontend/app/bootstrap.json'))
        {
            $controller = strtolower(Request::$current->controller());
            $action = strtolower(Request::$current->action());

            $scripts = Arr::path(json_decode($js_application, true), "{$controller}.{$action}");

            if(is_array($scripts) && count($scripts) > 0)
            {
                // Add additional scripts
                foreach(Arr::get($scripts, 'additional') as $script)
                    array_push($this->additional_script, $script);


                // Add main scripts
                foreach(Arr::get($scripts, 'main') as $script)
                    array_push($this->additional_script, "media/frontend/app/{$controller}/{$action}/{$script}.js");
            } 
            
        }


        # Загрузка контента
        $this->template->content = $this->content;



        # Подключаем доп скрипты
        $this->template->additional_script = $this->additional_script;



        # Подключаем доп стили
        $this->template->additional_style = $this->additional_style;


        parent::after();
    }
}
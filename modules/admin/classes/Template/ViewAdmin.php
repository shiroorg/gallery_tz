<?php defined('SYSPATH') or die('No direct script access.');

class Template_ViewAdmin extends Controller_Template {

    public $template = 'admin', $view_path, $skin;
    public $content, $user, $additional_script = [], $additional_style = [];

    public function before()
    {
        $this->template = Kohana::$config->load('application')->get('skin_admin') . DIRECTORY_SEPARATOR . $this->template;
        parent::before();
        $this->skin = Kohana::$config->load('application')->get('skin_admin');
        $this->view_path = implode(DIRECTORY_SEPARATOR, [
            Kohana::$config->load('application')->get('skin_admin'),
            strtolower(Request::$initial->controller()),
            strtolower(Request::$initial->action()),
        ]);
    }


    public function after()
    {
        
        $this->template->content = $this->content;
        $this->template->additional_script = $this->additional_script;
        $this->template->additional_style = $this->additional_style;
        parent::after();
    }
}
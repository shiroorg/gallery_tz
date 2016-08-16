<?php defined('SYSPATH') or die('No direct script access.');

class Template_ViewLending extends Controller_Template {

    public $template = 'lending';
    public $content, $additional_script = [], $additional_style = [];



    public function before()
    {
        parent::before();
    }


    public function after()
    {
        # Загрузка контента
        $this->template->content = $this->content;



        # Подключаем доп скрипты
        $this->template->additional_script = $this->additional_script;



        # Подключаем доп стили
        $this->template->additional_style = $this->additional_style;


        parent::after();
    }
}
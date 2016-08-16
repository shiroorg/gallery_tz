<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Banner extends Template_JsonPublic {

    public function action_click() {
        if ($this->request->method() == Request::POST) {
            $data = Arr::extract($_POST, ['id']);
            $banner = ORM::factory('Gallery')->where('id', '=', $data['id'])->find();
            if($banner->loaded()) {
                try {
                    $banner->set('click', $banner->click+1);
                    $banner->update();
                    $this->status = true;
                } catch (ORM_Validation_Exception $e) {
                    echo Debug::vars($e->errors()); die();
                }
            }
        }
    }
}
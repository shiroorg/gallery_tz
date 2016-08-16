<?php defined('SYSPATH') or die('No direct script access.');

class Template_JsonPublic extends Controller {

    public $status = false, $message, $data;

    public function before()
    {
        parent::before();
    }


    public function after()
    {
        $result = [
            'status'    => $this->status,
            'message'   => $this->message,
            'data'      => $this->data,
        ];

        $this->response->headers('Content-Type', 'application/json');
        $this->response->body(json_encode($result));

        parent::after();
    }
}
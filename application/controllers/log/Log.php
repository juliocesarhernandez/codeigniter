<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 02/08/2016
 * Time: 04:55 PM
 */
require APPPATH.'/controllers/BaseController.php';
require APPPATH.'/controllers/Api.php';
Class Log extends BaseController
{
    public function listar()
    {
        $api = new Api();
        $data['logs'] = $api->logs_get();
        return $this->load->view($this->template,
            [
                'content' => $this->load->view('log/log', $data, true)
            ]
        );
    }
}
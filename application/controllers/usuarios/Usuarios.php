<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 10:22 PM
 */
require APPPATH.'/controllers/BaseController.php';
Class Usuarios extends BaseController
{
    public function __construct(){
        parent::__construct();
        $this->load->model("usuarios/Usuarios_model", "usuariosModel");
    }

    public function index(){

        $data = array("titulo" => "Registrar usuarios");
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view("usuarios/alta", $data);

        /*return $this->load->view($this->template,
            [
                'content'     => $this->load->view('usuarios/alta', $data, true),
                'javascripts' => $this->getJavascripts(),
            ]
        );*/
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 10:22 PM
 */
Class Usuarios extends CI_Controller
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
    }
}
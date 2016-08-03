<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 06:44 PM
 */
require APPPATH.'/controllers/BaseController.php';
class Register extends BaseController
{
    public function __construct(){
        parent::__construct();
        $this->load->model("Register_model", "registerModel");
    }

    public function index(){

        $data = array("titulo" => "Formulario para obtener una api key");
        $this->load->helper('form');
        $this->load->helper('url');
        return $this->load->view($this->template,
            [
                'content' => $this->load->view('obtener_api_key', $data, true)
            ]
        );
    }

    public function newApiKey()
    {
        $generate = $this->registerModel->new_api_key($level = false,$ignore_limits = false,$is_private_key = false,$ip_addresses = "");
        if($generate){
            //imprimimos de mala manera la api key para poder utilizarla.
            echo $generate;
        }else{
            show_404("Ha ocurrido un error");
        }
    }
}
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
        //$this->load->view("register_view", $data);
    }

    public function newApiKey()
    {
        if($this->input->post("miApiKey") != "")
        {
            //creamos una api key de forma super sencilla
            /*
             * level a false
             * ignore_limits a false, as� pueden acceder sin l�mites
             * is_private_key a false, la api es p�blica
             * al ser p�blica, ip_addresses no debe contener ninguna ip para poder acceder
             */
            $generate = $this->registerModel->new_api_key($level = false,$ignore_limits = false,$is_private_key = false,$ip_addresses = "");
            if($generate){
                //imprimimos de mala manera la api key para poder utilizarla, est� claro que esto hay que cambiarlo
                echo $generate;
            }else{
                show_404("Ha ocurrido un error");
            }
        }else{
            show_404("Ha ocurrido un error");
        }
    }
}
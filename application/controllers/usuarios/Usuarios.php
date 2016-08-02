<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 10:22 PM
 */
require APPPATH.'/controllers/BaseController.php';
require APPPATH.'controllers/dashboard/Dashboard.php';
Class Usuarios extends BaseController
{
    public function __construct(){
        parent::__construct();
        $this->load->model("usuarios/Usuarios_model", "usuariosModel");
        $this->load->model("Api_model", "apiModel");
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

    public function registrar()
    {
        $request = file_get_contents('php://input');

        $request = explode('&', $request);
        $arrayKey = explode('=', $request[0]);
        //$miApiKey = $arrayKey[1];

        $arrayEmail = explode('=', $request[1]);
        $email = $arrayEmail[1];

        $arrayPassword = explode('=', $request[2]);
        $password = $arrayPassword[1];

        if($email != '' && $password != ''){

            $generate = $this->apiModel->new_api_key($level = false,$ignore_limits = false,$is_private_key = false,$ip_addresses = "");
            if($generate){
                $new_user = $this->usuariosModel->registrar($email, $password);
                if($new_user === false){
                    //$this->response(array("status" => "failed"));
                }else{
                    echo 'API KEY' . $generate;
                    $tablero  = new Dashboard();
                    $tablero->index();
                    //$this->response(array("status" => "success"));
                }
            }else{
                show_404("Ha ocurrido un error");
            }
        }else{
            show_404("Ha ocurrido un error");
        }
    }
}
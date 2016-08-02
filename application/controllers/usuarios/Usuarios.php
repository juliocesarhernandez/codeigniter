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
        $miApiKey = $arrayKey[1];

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
                    //$this->response(array("status" => "success"));
                }
            }else{
                show_404("Ha ocurrido un error");
            }
        }else{
            show_404("Ha ocurrido un error");
        }

        /*if($this->input->post("miApiKey") != "")
        {
            //creamos una api key de forma super sencilla
            /*
             * level a false
             * ignore_limits a false, as? pueden acceder sin l?mites
             * is_private_key a false, la api es p?blica
             * al ser p?blica, ip_addresses no debe contener ninguna ip para poder acceder
             */
          /*  $generate = $this->registerModel->new_api_key($level = false,$ignore_limits = false,$is_private_key = false,$ip_addresses = "");
            if($generate){
                //imprimimos de mala manera la api key para poder utilizarla, est? claro que esto hay que cambiarlo
                echo $generate;
            }else{
                show_404("Ha ocurrido un error");
            }
        }else{
            show_404("Ha ocurrido un error");
        }*/
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 06:51 PM
 */
//debemos colocar esta l�nea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');
class Api extends REST_Controller
{
    //con esto limitamos las consultas y los permisos a la api
    protected $methods = array(
        'users_get' => array('level' => 0),//para acceder a users_get debe tener level 1 y no hay limite de consultas por hora
        'user_get' => array('level' => 0, 'limit' => 10),//user_get sólo level 0, pero máximo 10 consultas por hora
        'posts_user_get' => array('level' => 0, 'limit' => 10),//se necesita level 0 y sólo se pueden hacer 10 consultas por hora
        'new_user_post' => array('level' => 1),//se necesita level 1, no hay limite de peticiones
        'user_post' => array('level' => 1, 'limit' => 5),//se necesita level 1 y 5 peticiones
        'logs_get' => array('level' => 0),
    );

    //obtener datos de un usuario
    public function user_get()
    {
        if(!$this->get("id")){
            $this->response(NULL, 400);
        }
        $this->load->model("api_model");
        $user = $this->api_model->get($this->get("id"));
        if($user){
            $this->response($user, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    public function posts_user_get()
    {
        if(!$this->get("id")){
            $this->response(NULL, 400);
        }
        $this->load->model("api_model");
        $posts = $this->api_model->posts($this->get("id"));
        if($posts){
            $this->response($posts, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    public function new_user_post()
    {
        if($this->post("username") && $this->post("password")){
            $this->load->model("api_model");
            $new_user = $this->api_model->create_user($this->post("username"),$this->post("password"));
            if($new_user === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    }

        public function user_post()
    {
        $this->load->model("api_model");
        $result = $this->api_model->update($this->post("id"), array(
            "email" => $this->post("email"),
            "password" => $this->post("password")
        ));

        if($result === false){
            $this->response(array("status" => "failed"));
        }else{
            $this->response(array("status" => "success"));
        }
    }

    public function users_get()
    {
        $this->load->model("api_model");
        $users = $this->api_model->get_all();

        return $users;
        /*if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }*/
    }

    public function logs_get()
    {
        $this->load->model("api_model");
        $log = $this->api_model->get_log();

        return $log;
    }
}
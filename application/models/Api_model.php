<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 09:50 PM
 */
class Api_model extends CI_Model
{
    public function get($id){
        $this->db->select("email,register_date");
        $query = $this->db->get_where("users", array("id" => $id));
        if($query->num_rows() == 1){
            return $query->row();
        }
    }

    public function get_all(){
        $this->load->database();

        $query = $this->db->get("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    public function posts($id){
        $this->db->where("user_id", $id);
        $query = $this->db->get("messages_api");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    public function create_user($username,$password){
        $data = array(
            "username" => $username,
            "password" => $password
        );
        return $this->db->insert("users", $data);
    }

    //guardamos la nueva api key en la tabla keys
    public function new_api_key($level, $ignore_limits, $is_private_key, $ip_addresses)
    {
        $this->load->database();
        //generamos la key
        $key = $this->generate_token();
        //comprobamos si existe
        $check_exists_key = $this->db->get_where("keys", array("key" => $key));

        //mientras exista la clave en la base de datos buscamos otra
        while ($check_exists_key->num_rows() > 0) {
            $key = "";
            $key = $this->generate_token();
        }
        //creamos el array con los datos
        $data = array(
            "key" => $key,
            "level" => $level,
            "ignore_limits" => $ignore_limits,
            "is_private_key" => $is_private_key,
            "ip_addresses" => $ip_addresses
        );

        $this->db->insert("keys", $data);
        return $key;
    }

    //https://gist.github.com/jeffreybarke/5347572
    //autor jeffreybarke
    private function generate_token($len = 40)
    {
        //un array perfecto para crear claves
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
        );

        shuffle($chars);
        $num_chars = count($chars) - 1;
        $token = '';

        for ($i = 0; $i < $len; $i++) {
            $token .= $chars[mt_rand(0, $num_chars)];
        }

        return $token;
    }
}
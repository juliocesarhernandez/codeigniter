<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 10:27 PM
 */
Class Usuarios_model extends CI_Model
{
    protected $table = 'users';
    public $email = '';
    public $password = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function registrar($email, $password)
    {
        $this->email = $email;
        $this->password = $password;

        $this->db->insert($this->table, $this);
    }

    public function listar()
    {
        return $this->db->get($this->table);
    }
}
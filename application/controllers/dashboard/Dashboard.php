<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 02/08/2016
 * Time: 02:44 PM
 */
require_once APPPATH.'/controllers/BaseController.php';
Class Dashboard extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->load->view($this->template,
            [
                'content'     => $this->load->view('dashboard/dashboard', [], true)
            ]
        );
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: hernandezmoreno@gmail.com
 * Date: 01/08/2016
 * Time: 11:25 PM
 */
Class BaseController extends CI_Controller
{
    /*protected $stylesheets = [];
    protected $javascripts = [];
    protected $localStylesheets = [];
    protected $localJavascripts = [];*/
    protected $template = null;

    public function __construct()
    {
        parent::__construct();

        if (is_null($this->template)) {
            $this->template = 'layouts/master';
        }
    }

    /*protected function getStylesheets()
    {
        return array_merge($this->stylesheets, $this->localStylesheets);
    }

    protected function getJavascripts()
    {
        return array_merge($this->javascripts, $this->localJavascripts);
    }*/
}
<?php
class Contactos extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model("contacto_model");
    }

    public function index()
    {
        redirect("contactos/agregar");
    }

    public function agregar()
    {
        $this->load->view("principal/contactos");
    }
}
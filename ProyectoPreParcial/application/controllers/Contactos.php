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
        $this->load->library("form_validation");
        $this->form_validation->set_rules("apellido","apellido","trim|strtolower|required");
        $this->form_validation->set_rules("nombre","nombre","trim|strtolower|required");
        $this->form_validation->set_rules("telefono","telefono","trim|strtolower|required");
        $this->form_validation->set_rules("email","email","valid_email|required");
        if($this->form_validation->run() == false){
            $this->load->view("contactos/agregar");
        }
        else{
            $datos = [];
            $datos["apellido"] = set_value("apellido");
            $datos["nombre"] = set_value("nombre");
            $datos["email"] = set_value("email");
            $datos["telefono"] = set_value("telefono");
            if($this->contacto_model->nuevo($datos))
            {
                $this->session->set_flashdata("respuesta","Contacto agregado!!");
                redirect("contactos/listar");
            }
            else
            {
                $this->session->set_flashdata("respuesta","Ocurrio un error vuelva a intentarlo");
                redirect("contactos/agregar");
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuario_model');
	}

	public function index()
	{
		redirect('auth/acceder');
	}
	public function acceder()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("usuario", "usuario", "trim|strtolower|required");
		$this->form_validation->set_rules("contrasena", "contrasena", "required");

		if ($this->form_validation->run() == FALSE) {
			$this->load->view("login");
		} else {
			$usuario = set_value("usuario");
			$contrasena = set_value("contrasena");
			if ($usuario_id = $this->usuario_model->check_login($usuario, $contrasena)) {
				$usuario = $this->usuario_model->get_usuario($usuario_id);
				$this->session->set_userdata("usuario_id", $usuario_id);
				$this->session->set_userdata("usuario", $usuario["usuario"]);
				redirect("contactos");
			} else {
				$this->session->set_flashdata("auth","acceso denegado");
				redirect("auth/acceder");
			}
		}
	}

	public function salir()
	{
		$this->session->sess_destroy();
		redirect("auth/acceder");
	}

	public function cambiarcontraseña()
	{
		$this->load->view("resetcontraseña");
	}
}

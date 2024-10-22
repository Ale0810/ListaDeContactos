<?php
class Usuario_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $tabla = "usuarios";
    private $usuario_id = "usuario_id";

    public function get_usuario($id)
    {
        $this->db->select("*");
        $this->db->where($this->usuario_id, $id);
        $query = $this->db->get($this->tabla);
        return $query->row_array();
    }

    public function check_login($usuario, $contrasena)
    {
        $this->db->select("usuario_id");
        $this->db->where("usuario", $usuario);
        $this->db->where("contrasena", md5($contrasena));
        $query = $this->db->get($this->tabla);
        if ($query->num_rows() > 0) {
            $tmp = $query->row_array();
            return $tmp["usuario_id"];
        } else {
            return false;
        }
    }
}
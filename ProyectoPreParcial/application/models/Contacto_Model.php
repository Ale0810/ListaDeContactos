<?php
class Contacto_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    private $tabla = "contactos";
    private $contacto_id = "contacto_id";
    public function nuevo($datos = [])
    {
        $this->db->insert($this->tabla, $datos);
        return $this->db->insert_id();
    }

    public function listar($usuario_id)
    {
        $this->db->where("usuario_id",$usuario_id);
        $query = $this->db->get($this->tabla);
        return $query->result_array();
    }
}
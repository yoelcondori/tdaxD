<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	public function logear($email, $password)
    {
        $this->db->select("u.*,t.denominacion");
        $this->db->join("tipousuario t", "t.id = u.idtipousuario");
        $this->db->where('u_correo', $email);
        $this->db->where('u_pass', $password);
        $resultados = $this->db->get("usuarios u");
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }
    }
}

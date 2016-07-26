<?php

class Model_Logueo extends CI_Model {
    public function __construc(){
    parent::__construct();
}

public function usuario_por_nombre_contrasena($correo, $contrasena){
      $this->db->select('*');
      $this->db->from('doctor');
      $this->db->where('correo', $correo);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }

    }
?>
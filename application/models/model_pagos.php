<?php
class Model_pagos extends CI_Model{
    function insertar($data) {
        $this->db->insert('pago', $data);
    }
    function getAll(){
        $query=$this->db->get('pagos');
        return $query->result();
    }
    
    public function getPagos() {
        $this->db->order_by('fecha', 'asc');
        $pagos=$this->db->get('pago');
        
        if($pagos->num_rows()>0){
            return $pagos->result();
        }
    }
}
 ?>
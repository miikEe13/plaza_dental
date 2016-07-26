<?php
class Model_tratamiento extends CI_Model{
 //////////*******INSERTAR DATOS******///////////////
    
    function insertar($data) {
        $this->db->insert('tratamiento', $data);
    }
    
     function insertarAsignar($data) {
        $this->db->insert('doctor_paciente_tratamiento', $data);
    }
    
    //////////////*******OBTENER DATOS**//////////
    function getAll(){
        $query=$this->db->get('tratamiento');
        return $query->result();
    }
    function getId_docpac($id_doctor, $id_paciente) {
        $query = $this->db->query("SELECT `doctor_paciente`.`id` FROM `doctor_paciente`
WHERE `id_doctor`='$id_doctor' AND `id_paciente`='$id_paciente' ");
        return $query->row();
    }
    
    public function getTratamiento() {
        $this->db->order_by('nombre', 'asc');
        $tratamientos=$this->db->get('tratamiento');
        
        if($tratamientos->num_rows()>0){
            return  $tratamientos->result();
        }
    }
    
    public function obtenerPacientes($id_doctor) {
        $query = $this->db->query("SELECT `paciente`.`id`, paciente.nombre, `paciente`.`apellido_paterno`, `paciente`.`apellido_materno`
            FROM `paciente`, `doctor`, `doctor_paciente`
            WHERE `doctor_paciente`.`id_doctor`= `doctor`.`id`
            AND `doctor_paciente`.`id_paciente`=`paciente`.`id`
            AND `id_doctor`=$id_doctor");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}
 ?>
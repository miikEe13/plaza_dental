<?php

class Model_Doctor extends CI_Model {

    function insertar($data) {
        $this->db->insert('doctor', $data);
    }

    function getAll() {
        $query = $this->db->get('doctor');
        return $query->result();
    }

    public function getDentistas() {
        $this->db->order_by('nombre', 'asc');
        $dentsta = $this->db->get('doctor');

        if ($dentsta->num_rows() > 0) {
            return $dentsta->result();
        }
    }

    function insertarDoctorPaciente($data) {
        $this->db->insert('doctor_paciente', $data);
    }

    public function getDoctorPaciente() {
       
        $DoctorPaciente = $this->db->query('SELECT doctor_paciente.id, doctor_paciente.id_doctor, doctor_paciente.id_paciente,
            doctor.nombre AS d_nombre, doctor.apellido_paterno AS d_paterno, doctor.apellido_materno AS d_materno,
            paciente.nombre AS p_nombre, paciente.apellido_paterno AS p_paterno, paciente.apellido_materno AS p_materno, `fecha_registro`
            FROM doctor_paciente, doctor, paciente
            WHERE doctor_paciente.id_doctor = doctor.id
            AND doctor_paciente.id_paciente = paciente.id
            ORDER BY doctor.`id`');

        if ($DoctorPaciente->num_rows() > 0) {
            return $DoctorPaciente->result();
        }
        
        
    }
public function getDoctorPaciente2($id_doctor, $id_paciente) {
       
        $DoctorPaciente = $this->db->query("SELECT * FROM `doctor_paciente` WHERE id_doctor='$id_doctor' AND id_paciente = '$id_paciente'");

        if ($DoctorPaciente->num_rows() > 0 ) {
            return null;
        }else{
            return 1;
        }
        
        
    }
    
    
}

?>
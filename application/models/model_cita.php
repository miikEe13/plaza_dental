<?php

class Model_cita extends CI_Model {

    function insertar($data) {
        $this->db->insert('cita', $data);
    }

    function getAll() {
        $query = $this->db->get('cita');
        return $query->result();
    }

//    public function getCitas() {
//        $this->db->order_by('hora', 'asc');
//        $citas=$this->db->get('cita');
//        
//        if($citas->num_rows()>0){
//            return $citas->result();
//        }
//    }
    public function getCitas() {
        $dental = $this->db->query("SELECT cita.id,
            doctor.nombre AS d_nombre, doctor.apellido_paterno AS d_paterno, doctor.apellido_materno AS d_materno,
            paciente.nombre AS p_nombre, paciente.apellido_paterno AS p_paterno, paciente.apellido_materno AS p_materno,
            fecha, hora
            from doctor_paciente, doctor, paciente, cita
            WHERE cita.id_doctor_paciente = doctor_paciente.id
            AND doctor_paciente.id_doctor=doctor.id
            AND doctor_paciente.id_paciente= paciente.id
            order by fecha, hora ASC");

        if ($dental->num_rows() > 0) {
            return $dental->result();
        }
    }

    public function getIdDoctorPaciente($id_doctor, $id_paciente) {
        $doctor_paciente = $this->db->query(" SELECT  `doctor_paciente`.`id`
            FROM `doctor_paciente`, doctor, paciente
            WHERE `doctor_paciente`.`id_paciente`=paciente.`id`
            AND `doctor_paciente`.`id_doctor`=doctor.`id`
            AND id_doctor=$id_doctor
            AND id_paciente=$id_paciente");
        
        if ($doctor_paciente->num_rows() > 0){
            return $doctor_paciente->result();
        }
    }

}

?>
   
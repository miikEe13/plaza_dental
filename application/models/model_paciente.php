<?php

class Model_Paciente extends CI_Model {

//////*****INSERTAR DATOS********/////////////
    function insertar($data) {
        $this->db->insert('paciente', $data);
    }

    function insertarHistorial($data) {
        $this->db->insert('historial_clinica_paciente', $data);
    }

    function insertarAnalisisFacial($data) {
        $this->db->insert('analisis_facial', $data);
    }

    function insertarAnalisisDental($data) {
        $this->db->insert('analisis_dental', $data);
    }

    function insertarAnalisisOclusal($data) {
        $this->db->insert('analisis_oclusal', $data);
    }

    function insertarDesviacion($data) {
        $this->db->insert('desviacion', $data);
    }

    ///////************** OBTENER TODOS LOS DATOS*******/////////

    function getAll() {
        $query = $this->db->get('paciente');
        return $query->result();
    }

    public function getPacientes() {
        $this->db->order_by('nombre', 'asc');
        $pacientes = $this->db->get('paciente');

        if ($pacientes->num_rows() > 0) {
            return $pacientes->result();
        }
    }

    public function get_Historial() {
        $query = $this->db->query("SELECT `historial_clinica_paciente`.`id`,
`historial_clinica_paciente`.`id_paciente`,
`paciente`.`nombre`, paciente.`apellido_paterno`, paciente.`apellido_materno`,
`historial_clinica_paciente`.`enfermedad_padecida`,
`historial_clinica_paciente`.`tratamientos`,
`historial_clinica_paciente`.`tratamiento_actual`,
`historial_clinica_paciente`.`hospitalizaciones`, 
`historial_clinica_paciente`.`intervencion_quirurjica`,
historial_clinica_paciente.`problema_respiratorio`, 
historial_clinica_paciente.`extirpacion_amigdalas`, 
historial_clinica_paciente.`edad_extirpacion`, 
historial_clinica_paciente.`fuma_bebidas_alcoholicas`,
historial_clinica_paciente.`alergias`, 
historial_clinica_paciente.`traumatismos_fracturas`, 
historial_clinica_paciente.`enfermedades_sistemicas`, 
historial_clinica_paciente.`menarca`, 
historial_clinica_paciente.`ultimo_periodo`, 
historial_clinica_paciente.`depresion`,
historial_clinica_paciente.`observacion`
FROM `paciente`, historial_clinica_paciente
WHERE paciente.`id`=historial_clinica_paciente.`id_paciente`");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function getAnalisisDental() {
        $dental = $this->db->query("SELECT `analisis_dental`.`id`,`analisis_dental`.`id_paciente`, 
                nombre, `apellido_paterno`, `apellido_materno`, 
                `gingival`, `mucosas`, `amigdalas`, `paladar`, `piso_boca`, `frenillos`, `lengua`,
                `tipo_denticion`, `higiene_bucal`, `observaciones`
                FROM `paciente`, `analisis_dental`
                WHERE `analisis_dental`.`id_paciente`= `paciente`.`id`
                ORDER BY id ASC");

        if ($dental->num_rows() > 0) {
            return $dental->result();
        }
    }

    public function getAnalisisOclusal() {
        $oclusal = $this->db->query("SELECT `analisis_oclusal`.`id`, `analisis_oclusal`.`id_paciente`,
            nombre, `apellido_paterno`, `apellido_materno`,
            `clase_molar_d`, `clase_molar_i`, `clase_canina_d`, clase_canina_i, `sobremordida_h`,
            `sobremordida_v`, maxima_apertura, `interferencia`, `lado_balance`, `lado_trabajo`,  dolor_muscular, control_sintomas, dolor_articular
            FROM  `paciente`, `analisis_oclusal`
            WHERE `analisis_oclusal`.`id_paciente`= `paciente`.`id`
            ORDER BY `analisis_oclusal`.`id` ASC"
        );

        if ($oclusal->num_rows() > 0) {
            return $oclusal->result();
        }
    }

    public function getDesviacion() {
        $desviacion = $this->db->query("SELECT `desviacion`.`id`, `desviacion`.`id_paciente`,
            nombre, `apellido_paterno`, `apellido_materno`,
            `oclusion_apertura`, `oclusion_cierre`, `terapias`, `luxacion`,
            `habitos_p`, `frecuencia`, `tono_muscular_perioral`, `tono_muscular_facial`
            FROM  `paciente`, `desviacion`
            WHERE `desviacion`.`id_paciente`= `paciente`.`id`
            ORDER BY `desviacion`.`id` ASC");

        if ($desviacion->num_rows() > 0) {
            return $desviacion->result();
        }
    }

    public function getAnalisisFacial() {
        $facial = $this->db->query(
                "SELECT `analisis_facial`.`id`, `analisis_facial`.`id_paciente`,
                nombre, `apellido_paterno`, `apellido_materno`,
                `somatotipo`, `linea_media`, `biotipo_facial`, `simetria_facial`, `perfil`,
                `forma_facial`, `nariz`, `tercio_facial_superior`, `tercio_facial_medio`, `tercio_facial_inferior`,
                `postura_labial`, `labio_superior`, `labio_inferior`
                FROM `paciente`, `analisis_facial`
                WHERE `analisis_facial`.`id_paciente`= `paciente`.`id`
                ORDER BY id ASC"
        );

        if ($facial->num_rows() > 0) {
            return $facial->result();
        }
    }

    public function getHistorialClinico() {
        $this->db->order_by('id', 'asc');
        $historial = $this->db->get('historial_clinica_paciente');

        if ($historial->num_rows() > 0) {
            return $historial->result();
        }
    }

///////////******************OBTENER UNA FILA DE DATOS********/////////
    function getOnerow($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('paciente');
        return $query->row();
    }

//    function getOnerowHistorial($id) {
//        $this->db->where('id', $id);
//        $query = $this->db->get('historial_clinica_paciente');
//        return $query->row();
//    }
//    public function getHistorial2() { Funciona pero para el caso n
//
//        $this->db->select('*');
//        $this->db->from('historial_clinica_paciente');
//        $this->db->join('paciente', '`historial_clinica_paciente`.`id_paciente`=`paciente`.`id`');
//        $query = $this->db->get();
//        if ($query->num_rows() > 0) {
//            return $query->result();
//        }
//    }
    public function getHistorial3($id) {
        $query = $this->db->query("SELECT `historial_clinica_paciente`.`id`,
`historial_clinica_paciente`.`id_paciente`, 
`paciente`.`nombre`, paciente.`apellido_paterno`, paciente.`apellido_materno`,
`historial_clinica_paciente`.`enfermedad_padecida`, `historial_clinica_paciente`.`tratamientos`,
`historial_clinica_paciente`.`tratamiento_actual`, `historial_clinica_paciente`.`hospitalizaciones`, 
`historial_clinica_paciente`.`intervencion_quirurjica`, historial_clinica_paciente.`problema_respiratorio`, 
historial_clinica_paciente.`extirpacion_amigdalas`, historial_clinica_paciente.`edad_extirpacion`, 
historial_clinica_paciente.`fuma_bebidas_alcoholicas`, historial_clinica_paciente.`alergias`, 
historial_clinica_paciente.`traumatismos_fracturas`, historial_clinica_paciente.`enfermedades_sistemicas`, 
historial_clinica_paciente.`menarca`, historial_clinica_paciente.`ultimo_periodo`, 
historial_clinica_paciente.`depresion`, historial_clinica_paciente.`observacion`
FROM `paciente`, historial_clinica_paciente
WHERE paciente.`id`=historial_clinica_paciente.`id_paciente`
AND `historial_clinica_paciente`.`id`=$id");
        return $query->row();
    }
    function getOnerowAnalisisFacial($id) {
        $query = $this->db->query("SELECT `analisis_facial`.`id`, `analisis_facial`.`id_paciente`,
nombre, `apellido_paterno`, `apellido_materno`,
`somatotipo`, `linea_media`, `biotipo_facial`, `simetria_facial`, `perfil`,
`forma_facial`, `nariz`, `tercio_facial_superior`, `tercio_facial_medio`, `tercio_facial_inferior`,
`postura_labial`, `labio_superior`, `labio_inferior`
FROM `paciente`, `analisis_facial`
WHERE `analisis_facial`.`id_paciente`= `paciente`.`id`
AND analisis_facial.id=$id
");
        return $query->row();
    }
    function getOnerowAnalisisDental($id) {
        $query = $this->db->query("SELECT `analisis_dental`.`id`,`analisis_dental`.`id_paciente`, 
nombre, `apellido_paterno`, `apellido_materno`, 
`gingival`, `mucosas`, `amigdalas`, `paladar`, `piso_boca`, `frenillos`, `lengua`,
`tipo_denticion`, `higiene_bucal`, `observaciones`
FROM `paciente`, `analisis_dental`
WHERE `analisis_dental`.`id_paciente`= `paciente`.`id`
and analisis_dental.id=$id
");
        return $query->row();
    }
    function getOnerowAnalisisOclusal($id) {
        $query = $this->db->query("SELECT `analisis_oclusal`.`id`, `analisis_oclusal`.`id_paciente`,
nombre, `apellido_paterno`, `apellido_materno`,
`clase_molar_d`, `clase_molar_i`, `clase_canina_d`, `sobremordida_h`
`sobremordida_v`, maxima_apertura, `interferencia`, `lado_balance`, `lado_trabajo`, dolor_muscular, control_sintomas, dolor_articular
FROM  `paciente`, `analisis_oclusal`
WHERE `analisis_oclusal`.`id_paciente`= `paciente`.`id`
AND analisis_oclusal.id=$id
ORDER BY `analisis_oclusal`.`id` ASC ");
        return $query->row();
    }
    function getOnerowDesviacion($id) {
        $query = $this->db->query("SELECT `desviacion`.`id`, `desviacion`.`id_paciente`,
nombre, `apellido_paterno`, `apellido_materno`,
`oclusion_apertura`, `oclusion_cierre`, `terapias`, `luxacion`,
`habitos_p`, `frecuencia`, `tono_muscular_perioral`, `tono_muscular_facial`
FROM  `paciente`, `desviacion`
WHERE `desviacion`.`id_paciente`= `paciente`.`id`
AND desviacion.id=$id
ORDER BY `desviacion`.`id` ASC");
        return $query->row();
    }

    
    //////////////////////******* EDITAR****///////////////////////////////////
    
    function updatePaciente($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('paciente', $data);
    }
    function updateHistorial($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('historial_clinica_paciente', $data);
    }
    function updateAnalisisFacial($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('analisis_facial', $data);
    }
    function updateAnalisisDental($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('analisis_dental', $data);
    }
    function updateAnalisisOclusal($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('analisis_oclusal', $data);
    }
     function updateDesviacion($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('desviacion', $data);
    }
    
//////////////***********eliminar************//////////////////////////////////
    function eliminarPaciente($id){
        $this->db->where('id', $id);
        $this->db->delete('paciente');
    }
    function eliminarHistorial($id){
        $this->db->where('id', $id);
        $this->db->delete('historial_clinica_paciente');
    }
     function eliminarAnalisisDental($id){
        $this->db->where('id', $id);
        $this->db->delete('analisis_dental');    
    }
    function eliminarAnalisisFacial ($id){
        $this->db->where('id', $id);
        $this->db->delete('analisis_facial');
    }
     function eliminarAnalisisOclusal ($id){
        $this->db->where('id', $id);
        $this->db->delete('analisis_oclusal');
    }
    function eliminarDesviacion($id){
        $this->db->where('id', $id);
        $this->db->delete('desviacion');
    }
    
    
    
}

?>
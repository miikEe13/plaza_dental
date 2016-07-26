<?php

class tratamiento extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_cita');
        $this->load->model('model_paciente');
        $this->load->model('model_doctor');
        $this->load->model('model_tratamiento');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('email');
    }
///////////******Vistas*****//////////
    public function Index() {
        $data['titulo'] = 'Tratamiento';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Tratamiento/Index");
        $this->load->view("Plantilla/Footer");
    }

    public function Registro() {
       
        if ($this->session->userdata('logueado')) {
            $data = array();
            $data['nombre'] = $this->session->userdata('nombre');
            $data['titulo'] = 'tratamiento';
            $this->load->view("Plantilla/Head", $data);
            $this->load->view("Plantilla/Menu");
            $this->load->view("Tratamiento/Guardar/Registro");
            $this->load->view("Plantilla/Footer");
        } else {
            redirect('login/iniciar_sesion');
        }
    }

    public function Asignar_tratamiento() {
        $data['pacientes'] = $this->model_paciente->getPacientes();
        $data['dent'] = $this->model_doctor->getDentistas();
        $data['tratamiento'] = $this->model_tratamiento->getTratamiento();
        
        $data['titulo'] = 'tratamiento';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Tratamiento/Guardar/Asignar_tratamiento");
        $this->load->view("Plantilla/Footer");
    }
//////////////////*********REGISTRAR DATOS*****************////////////////////
    
    public function agregarTratamiento() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'costo' => $this->input->post('costo'),
            'tipo' => $this->input->post('tipo')
        );
       ;
        $this->model_tratamiento->insertar($data);
         $this->session->set_flashdata('correcto', '¡Tratamientio registrado correctamente!');
         redirect(base_url() . 'tratamiento/Registro');
    }
    
    public function asignarTramiento(){
        $id_doctor = $this->input->post('id_dentista');
        $id_paciente = $this->input->post('id_paciente');
        $this->load->model('model_tratamiento');
        $id_doctor_paciente = $this->model_tratamiento->getId_docpac($id_doctor, $id_paciente);
               
        $data = array(
            'id_doctor_paciente' => $id_doctor_paciente->id,
            'id_tratamiento' => $this->input->post('id_tratamiento'),
            'fecha_inicio' => $this->input->post('fecha_inicio'),
            'fecha_fin' => $this->input->post('fecha_fin')
        );
       $this->model_tratamiento->insertarAsignar($data);
         $this->session->set_flashdata('correcto', '¡Tratamientio asignado correctamente!');
         redirect(base_url() . 'tratamiento/Registro');
    }
    
    public function comboboxPaciente() {
        $id_doctor = $this->input->post('id_dentista');
        if($id_doctor){
            $this->load->model('model_tratamiento');
            $pacientes = $this->model_tratamiento->obtenerPacientes($id_doctor);
            echo '<option selected="TRUE">--Seleccione una opcion--</option>';
            foreach($pacientes as $fila){
                echo '<option value="'. $fila->id .'">'. $fila->nombre .'</option>';
            }
        }  else {
            echo '<option selected="TRUE">--Seleccione una opcion--</option>';
        }
    }
}

?>
        
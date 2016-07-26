<?php

class Doctor extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_doctor');
        $this->load->model('model_paciente');
    }
////////////////////*********VISTAS**********//////////////
    public function Index() {
        $data['titulo'] = 'Doctor';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Index");
        $this->load->view("Plantilla/Footer");
    }

    public function Registro() {
        $data['titulo'] = 'Doc';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Registrar/Registro");
        $this->load->view("Plantilla/Footer");
    }

    public function Asignar_pac() {
        $this->load->model('model_doctor');

        $this->load->model('model_paciente');
        $data['pacientes'] = $this->model_paciente->getPacientes();
        $data['dent'] = $this->model_doctor->getDentistas();
        $data['titulo'] = 'Pacientes Asignados';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Registrar/Asignar_pac");
        $this->load->view("Plantilla/Footer");
    }

 ///////////////**************REGISTRAR DATOS***********////////////
    public function AgregarDoctor() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'especialidad' => $this->input->post('especialidad'),
            'cedula' => $this->input->post('cedula'),
            'celular' => $this->input->post('celular'),
            'contrasena' => $this->input->post('contrasena')
                
        );
        $this->model_doctor->insertar($data);
         $this->session->set_flashdata('correcto', '¡Doctor registrado correctamente!');
        redirect(base_url() . 'Doctor/Registro');
    }

    public function AgregarDoctorPaciente() {
       
        
        
        $id_doctor=$this->input->post('id_dentista');
        $id_paciente=$this->input->post('id_paciente');
        $doctorpacientes=$this->model_doctor->getDoctorPaciente2($id_doctor, $id_paciente);
        if ($doctorpacientes==1) {
             $data = array(
            'id_doctor' => $this->input->post('id_dentista'),
            'id_paciente' => $this->input->post('id_paciente'),
            'fecha_registro' => $this->input->post('fecha_registro')
        );
        $this->model_doctor->insertarDoctorPaciente($data);
        $this->session->set_flashdata('correcto', '¡Empleado registrado correctamente!');
        redirect(base_url() . 'Doctor/Asignar_pac');
        }else{
             $this->session->set_flashdata('incorrecto', '¡Ya existe un Paciente asignado a este doctor!');
             redirect(base_url() . 'Doctor/Asignar_pac');
        }
       
    }
    
///////************VISTAS REPORTES************///////////
    
    public function Asignar_pacInf() {
        $this->load->model('model_doctor');
        $data['query'] = $this->model_doctor->getDoctorPaciente();
      
        $data['titulo'] = 'Pacientes Asignados';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Reportes/Asignar_pacInf");
        $this->load->view("Plantilla/Footer");
    }
    
    public function DoctorInf() {
        $this->load->model('model_doctor');
        $data['query'] = $this->model_doctor->getDentistas();
      
        $data['titulo'] = 'Doctores';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Reportes/DoctorInf");
        $this->load->view("Plantilla/Footer");
    }
    
    
///////////**********Vista Editar*********////////
    
    public function editarDoctor(){
        $data['titulo'] = 'Editar Doctor';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Editar/EditarDoctor");
        $this->load->view("Plantilla/Footer");
        
    }
     public function editarAsignarDoctorPaciente(){
         $data['pacientes'] = $this->model_paciente->getPacientes();
        $data['dent'] = $this->model_doctor->getDentistas();
        $data['titulo'] = 'Editar Doctor';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Editar/Editar_Asignar_pac");
        $this->load->view("Plantilla/Footer");
        
    }
    
}
?>
        

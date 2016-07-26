<?php
class Doctores extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_doctor');
    }
    public function Index(){
        $data['titulo']='Doctor';
        $this->load->view("Plantilla/Head", $data);
         $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Index");
        $this->load->view("Plantilla/Footer");
    }

public function Registro() {
        $data['titulo']='Doc';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Registro");
        $this->load->view("Plantilla/Footer");
    }

    public function Asignar_pac() {
        $data['titulo']='Doc';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Doctor/Asignar_pac");
        $this->load->view("Plantilla/Footer");
    }
        
    public function AgregarDoctor(){
        $data=array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'especialidad' => $this->input->post('especialidad'),
            'cedula' => $this->input->post('cedula'),
            'celular' => $this->input->post('celular')
                
        );
        $this->model_doctor->insertar($data);
        redirect(base_url().'Doctores/Registro');
    }
    
    
    

}
        
?>
        
        
<?php

class Login extends CI_Controller {

function __construct() {
        parent::__construct();
        $this->load->model('model_cita');
        $this->load->model('model_paciente');
        $this->load->model('model_doctor');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('email');
    }
    
    public function Index() {
        $data['titulo'] = 'Logueo';
        $this->load->view("Plantilla/Head", $data);
        $data['error'] = $this->session->flashdata('error');
        $this->load->view("Login/Index");
        $this->load->view("Plantilla/Footer");
    }

    public function iniciar_sesion() {
        $data = array();
        $data['titulo'] = 'Logueo';
  
        $this->load->view("Plantilla/Head", $data);
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('Login/Index');
        $this->load->view("Plantilla/Footer");
    }

    public function iniciar_sesion_post() {
        if ($this->input->post()) {
            $correo = $this->input->post('email');
            $contrasena = $this->input->post('password');
            $this->load->model('model_logueo');
            $usuario = $this->model_logueo->usuario_por_nombre_contrasena($correo, $contrasena);
            if ($usuario) {
                $usuario_data = array(
                    'id' => $usuario->id,
                    'nombre' => $usuario->nombre,
                    'apellido_paterno' => $usuario->apellido_paterno,
                    'apellido_materno' => $usuario->apellido_materno,
                    'especialidad' => $usuario->especialidad,
                    'correo' => $usuario->correo,
                    'logueado' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                redirect('Cita/CitaInf');
            } else {
                $this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');

                redirect('login/iniciar_sesion');
            }
        } else {
            $this->iniciar_sesion();
        }
    }

    public function logueado() {
        if ($this->session->userdata('logueado')) {
            $data = array();
            $data['nombre'] = $this->session->userdata('nombre');
            $data['titulo'] = 'Logueo';
            $this->load->view("Plantilla/Head", $data);
             $this->load->view("Plantilla/Menu");
            $this->load->view('Login/logueado');
            $this->load->view("Plantilla/Footer");
        } else {
            redirect('login/iniciar_sesion');
        }
    }
    public function nombre() {
        $data['nombre'] = $this->session->userdata('nombre');
        echo $nombre;
    }
    public function cerrar_sesion() {
        $usuario_data = array(
            'logueado' => FALSE
        );
        $this->session->set_userdata($usuario_data);
        redirect('login/iniciar_sesion');
    }

}

?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cita extends CI_Controller {

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
        $data['titulo'] = 'Agenda';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Citas/Index");
        $this->load->view("Plantilla/Footer");
    }

    public function Cita() {
        $data['titulo'] = '';
        $this->load->model('model_doctor');
        $this->load->model('model_paciente');
        $data['pacientes'] = $this->model_paciente->getPacientes();
        $data['dent'] = $this->model_doctor->getDentistas();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Citas/Cita");
        $this->load->view("Plantilla/Footer");
    }

    public function CitaInf() {
        $data['titulo'] = ' Cta Información';
        $data['query'] = $this->model_cita->getCitas();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Citas/CitaInf");
        $this->load->view("Plantilla/Footer");
    }

    public function agendarCitas() {
        $data['titulo'] = 'Enviar correo';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Citas/EnviarCorreo");
        $this->load->view("Plantilla/Footer");
    }

    public function registraCita() {
            
//        $id_doctor= $this->input->post('id_dentista');
//        $id_paciente=$this->input->post('id_paciente');
        $id_doctor=1;
        $id_paciente3;
        $id_paciente_doctor= $this->model_cita->getIdDoctorPaciente($id_doctor, $id_paciente);
//            $data = array(
//            'id_doctor' => $this->input->post('id_dentista'),
//            'id_paciente' => $this->input->post('id_paciente'),
//            'fecha_registro' => $this->input->post('fecha_registro')
//        );
//        $this->model_doctor->insertarDoctorPaciente($data);
//        redirect(base_url() . 'Doctor/Asignar_pac');
    
    }
    
    public function enviar() {
        /*
         * Cuando cargamos una librería
         * es similar a hacer en PHP puro esto:
         * require_once("libreria.php");
         * $lib=new Libreria();
         */

        //Cargamos la librería email
        $this->load->library('email');

        /*
         * Configuramos los parámetros para enviar el email,
         * las siguientes configuraciones es recomendable
         * hacerlas en el fichero email.php dentro del directorio config,
         * en este caso para hacer un ejemplo rápido lo hacemos 
         * en el propio controlador
         */
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'antiguo.sg1.sga@gmail.com'; // correo sin espacio
$config['smtp_pass'] = 'powerm12';
$config['smtp_timeout'] = '7';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'text'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not


        //Establecemos esta configuración
        $this->email->initialize($config);

        //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('antiguo.sg1.sga@gmail.com', 'Miguel Angel Ramirez Medel');

        /*
         * Ponemos el o los destinatarios para los que va el email
         * en este caso al ser un formulario de contacto te lo enviarás a ti
         * mismo
         */
        $this->email->to($this->input->post("email"), $this->input->post("nombre"));

        //Definimos el asunto del mensaje
        $this->email->subject($this->input->post("asunto"));

        //Definimos el mensaje a enviar
        $this->email->message(
                "Email: " . $this->input->post("email") .
                " Nombre: " . $this->input->post("nombre") .
                " Mensaje: " . $this->input->post("mensaje")
        );

        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if ($this->email->send()) {
            $this->session->set_flashdata('envio', 'Email enviado correctamente');
             echo ($this->email->print_debugger());
        } else {
            $this->session->set_flashdata('envio', 'No se a enviado el email');
            echo ($this->email->print_debugger());
        }
echo ($this->email->print_debugger());
      redirect(base_url("Cita/agendarCitas"));
      echo ($this->email->print_debugger());
    }

}

?>
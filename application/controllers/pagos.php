<?php

class Pagos extends CI_Controller {
   
      function __construct() {
        parent::__construct();
        $this->load->model('model_pagos');
    }


    public function Index() {
        $data['titulo'] = 'Pagos';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Pagos/Index");
        $this->load->view("Plantilla/Footer");
    }

public function Registro() {
        $data['titulo']='Pagos';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pagos/Registro");
        $this->load->view("Plantilla/Footer");
    }

       public function PagosInf() {
        $data['titulo'] = ' Pagos Registrados';
        $data['query'] = $this->model_pagos->getPagos();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pagos/PagosInf");
        $this->load->view("Plantilla/Footer");
    
    }
        }

?>
    
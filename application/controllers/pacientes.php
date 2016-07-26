<?php

class Pacientes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_paciente');
    }

    public function Index() {
        $data['titulo'] = 'Pacientes';
        $data['query'] = $this->model_paciente->getAll();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Registrar/Index");
        $this->load->view("Plantilla/Footer");
    }

    public function Paciente() {
        $data['nombre'] = $this->session->userdata('nombre');
        $data['titulo'] = 'Agenda';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Registrar/Paciente");
        $this->load->view("Plantilla/Footer");
    }

    public function Analisis_facial() {
        $this->load->model('model_paciente');
        $pacientes['pacientes'] = $this->model_paciente->getPacientes();

        $data['titulo'] = 'Agenda';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Registrar/Analisis_facial", $pacientes);
        $this->load->view("Plantilla/Footer");
    }

    public function Historial_clinico() {

        $this->load->model('model_paciente');
        $pacientes['pacientes'] = $this->model_paciente->getPacientes();

        $data['titulo'] = 'Agenda';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Registrar/Historial_clinico", $pacientes);
        $this->load->view("Plantilla/Footer");
    }

    public function Analisis_dental() {
        $this->load->model('model_paciente');
        $pacientes['pacientes'] = $this->model_paciente->getPacientes();

        $data['titulo'] = 'Agenda';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Registrar/Analisis_dental", $pacientes);
        $this->load->view("Plantilla/Footer");
    }

    public function Analisis_oclusal() {
        $this->load->model('model_paciente');
        $pacientes['pacientes'] = $this->model_paciente->getPacientes();

        $data['titulo'] = 'Agenda';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Registrar/Analisis_oclusal", $pacientes);
        $this->load->view("Plantilla/Footer");
    }

    public function Desviacion() {
        $this->load->model('model_paciente');
        $pacientes['pacientes'] = $this->model_paciente->getPacientes();

        $data['titulo'] = 'Agenda';
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Registrar/Desviacion", $pacientes);
        $this->load->view("Plantilla/Footer");
    }

///////////////////***************REGISTRAR***********////////////
    public function AgregarPacientes() {

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'direccion' => $this->input->post('direccion'),
            'sexo' => $this->input->post('sexo'),
            'estado_civil' => $this->input->post('estado_civil'),
            'ocupacion' => $this->input->post('ocupacion'),
            'grado_escolar' => $this->input->post('grado_escolar'),
            'telefono' => $this->input->post('telefono'),
            'celular' => $this->input->post('celular'),
        );
        $this->model_paciente->insertar($data);
        $this->session->set_flashdata('correcto', '¡Paciente registrado correctamente!');
        redirect(base_url() . 'Pacientes/Paciente');
    }

    public function AgregarHistorialPacientes() {
        $data = array(
            'id_paciente' => $this->input->post('id_paciente'),
            'emfermedad_padecida' => $this->input->post('emfermedad_padecida'),
            'tratamientos' => $this->input->post('tratamientos'),
            'tratamiento_actual' => $this->input->post('tratamiento_actual'),
            'hospitalizaciones' => $this->input->post('hospitalizaciones'),
            'intervencion_quirurjica' => $this->input->post('intervencion_quirurjica'),
            'problema_respiratorio' => $this->input->post('problema_respiratorio'),
            'extirpacion_amigdalas' => $this->input->post('extirpacion_amigdalas'),
            'edad_extirpacion' => $this->input->post('edad_extirpacion'),
            'fuma_bebidas_alcoholicas' => $this->input->post('fuma_bebidas_alcoholicas'),
            'alergias' => $this->input->post('alergias'),
            'traumatismos_fracturas' => $this->input->post('traumatismos_fracturas'),
            'enfermedades_sistemicas' => $this->input->post('enfermedades_sistemicas'),
            'menarca' => $this->input->post('menarca'),
            'ultimo_periodo' => $this->input->post('ultimo_periodo'),
            'depresion' => $this->input->post('depresion'),
            'observacion' => $this->input->post('observacion')
        );
        $this->model_paciente->insertarHistorial($data);
        $this->session->set_flashdata('correcto', '¡Paciente registrado correctamente!');
        redirect(base_url() . 'Pacientes/Historial_clinico');
    }

    public function AgregarAnalsisfacial() {
        $data = array(
            'id_paciente' => $this->input->post('id_paciente'),
            'somatotipo' => $this->input->post('somatotipo'),
            'linea_media' => $this->input->post('linea_media'),
            'biotipo_facial' => $this->input->post('biotipo_facial'),
            'simetria_facial' => $this->input->post('simetria_facial'),
            'forma_facial' => $this->input->post('forma_facial'),
            'nariz' => $this->input->post('nariz'),
            'tercio_facial_superior' => $this->input->post('tercio_facial_superior'),
            'tercio_facial_medio' => $this->input->post('tercio_facial_medio'),
            'postura_labial' => $this->input->post('tercio_facial_inferior'),
            'tercio_facial_inferior' => $this->input->post('postura_labial'),
            'labio_superior' => $this->input->post('labio_superior'),
            'labio_inferior' => $this->input->post('labio_inferior')
        );
        $this->model_paciente->insertarAnalisisFacial($data);
        $this->session->set_flashdata('correcto', '¡Paciente registrado correctamente!');
        redirect(base_url() . 'Pacientes/Analisis_facial');
    }

    public function AgregarAnalisisdental() {
        $data = array(
            'id_paciente' => $this->input->post('id_paciente'),
            'gingival' => $this->input->post('gingival'),
            'mucosas' => $this->input->post('mucosas'),
            'amigdalas' => $this->input->post('amigdalas'),
            'paladar' => $this->input->post('paladar'),
            'piso_boca' => $this->input->post('piso_boca'),
            'frenillos' => $this->input->post('frenillos'),
            'lengua' => $this->input->post('lengua'),
            'tipo_denticion' => $this->input->post('tipo_denticion'),
            'higiene_bucal' => $this->input->post('higiene_bucal'),
            'observaciones' => $this->input->post('observaciones')
        );
        $this->model_paciente->insertarAnalisisDental($data);
        $this->session->set_flashdata('correcto', '¡Paciente registrado correctamente!');
        redirect(base_url() . 'Pacientes/Analisis_dental');
    }

    public function AgregarAnalisisoclusal() {
        $data = array(
            'id_paciente' => $this->input->post('id_paciente'),
            'clase_molar_d' => $this->input->post('clase_molar_d'),
            'clase_molar_i' => $this->input->post('clase_molar_i'),
            'clase_canina_d' => $this->input->post('clase_canina_d'),
            'clase_canina_i' => $this->input->post('clase_canina_i'),
            'sobremordida_h' => $this->input->post('sobremordida_h'),
            'sobremordida_v' => $this->input->post('sobremordida_v'),
            'maxima_apertura' => $this->input->post('maxima_apertura'),
            'interferencia' => $this->input->post('interferencia'),
            'lado_balance' => $this->input->post('lado_balance'),
            'lado_trabajo' => $this->input->post('lado_trabajo'),
            'dolor_muscular' => $this->input->post('dolor_muscular'),
            'control_sintomas' => $this->input->post('control_sintomas'),
            'dolor_articular' => $this->input->post('dolor_articular')
        );
        $this->model_paciente->insertarAnalisisOclusal($data);
        $this->session->set_flashdata('correcto', '¡Paciente registrado correctamente!');
        redirect(base_url() . 'Pacientes/analisis_oclusal');
    }

    public function AgregarDesviacion() {
        $data = array(
            'id_paciente' => $this->input->post('id_paciente'),
            'oclusion_apertura' => $this->input->post('oclusion_apertura'),
            'oclusion_cierre' => $this->input->post('oclusion_cierre'),
            'terapias' => $this->input->post('terapias'),
            'luxacion' => $this->input->post('luxacion'),
            'habitos_p' => $this->input->post('habitos_p'),
            'frecuencia' => $this->input->post('frecuencia'),
            'tono_muscular_perioral' => $this->input->post('tono_muscular_perioral'),
            'tono_muscular_facial' => $this->input->post('tono_muscular_facial')
        );
        $this->model_paciente->insertarDesviacion($data);
        $this->session->set_flashdata('correcto', '¡Paciente registrado correctamente!');
        redirect(base_url() . 'Pacientes/desviacion');
    }

/////////********REPORTES***************////////////////////
    public function PacientesInf() {
        $data['titulo'] = 'Pacientes Información';
        $data['query'] = $this->model_paciente->getAll();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Reportes/PacientesInf");
        $this->load->view("Plantilla/Footer");
    }

    public function Analisis_dentalInf() {
        $data['titulo'] = 'Pacientes Información';
        $data['query'] = $this->model_paciente->getAnalisisDental();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Reportes/Analisis_dentalInf");
        $this->load->view("Plantilla/Footer");
    }

    public function DesviacionInf() {
        $data['titulo'] = 'Pacientes Información';
        $data['query'] = $this->model_paciente->getDesviacion();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Reportes/DesviacionInf");
        $this->load->view("Plantilla/Footer");
    }

    public function Analisis_oclusalInf() {
        $data['titulo'] = 'Pacientes Información';
        $data['query'] = $this->model_paciente->getAnalisisOclusal();
      
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Reportes/Analisis_oclusalInf");
        $this->load->view("Plantilla/Footer");
    }

    public function Historial_clinicoInf() {
        $data['titulo'] = 'Pacientes Información';
        $data['query'] = $this->model_paciente->get_Historial();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Reportes/Historial_clinicoInf");
        $this->load->view("Plantilla/Footer");
    }

    public function Analisis_facialinf() {
        $data['titulo'] = 'Pacientes Información';
        $data['query'] = $this->model_paciente->getAnalisisFacial();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Reportes/Analisis_facialinf");
        $this->load->view("Plantilla/Footer");
    }

////////////////*************VISTAS EDITAR*************/////////////////
    function EditarPacientes($id) {
        $data['titulo'] = 'Editar Pacientes Información';
        $row = $this->model_paciente->getOnerow($id);
        $data['r'] = $row;
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Editar/EditarPaciente");
        $this->load->view("Plantilla/Footer");
    }

    function EditarHistorialClinico($id) {
        $this->load->model('model_paciente');

        $data['titulo'] = 'Editar Historial';

        $row = $this->model_paciente->getHistorial3($id);
        $data['r'] = $row;

        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Editar/EditarHistorialClinico");
        $this->load->view("Plantilla/Footer");
    }

    function EditarAnalisisFacial($id) {
        $data['titulo'] = 'Editar Historial';

        $row = $this->model_paciente->getOnerowAnalisisFacial($id);
        $data['r'] = $row;
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Editar/Editar_Analisis_Facial");
        $this->load->view("Plantilla/Footer");
    }

    function EditarAnalisisDental($id) {
        $this->load->model('model_paciente');
        $data['titulo'] = 'Editar Historial';
        $row = $this->model_paciente->getOnerowAnalisisDental($id);
        $data['r'] = $row;

        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Editar/Editar_Analisis_dental");
        $this->load->view("Plantilla/Footer");
    }

    function EditarAnalisisOclusal($id) {
        $data['titulo'] = 'Editar Historial';

        $row = $this->model_paciente->getOnerowAnalisisOclusal($id);
        $data['r'] = $row;
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Editar/Editar_Analisis_oclusal");
        $this->load->view("Plantilla/Footer");
    }

    function EditarDesviacion($id) {
        $data['titulo'] = 'Editar Historial';
        $data['query'] = $this->model_paciente->getDesviacion();
        $row = $this->model_paciente->getOnerowDesviacion($id);
        $data['r'] = $row;
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Pacientes/Editar/Editar_Desviacion");
        $this->load->view("Plantilla/Footer");
    }

/////////////////**********UPDATE************////////
    function editarPaciente() {

        $id = $this->input->post('id');
        echo $id;
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'direccion' => $this->input->post('direccion'),
            'sexo' => $this->input->post('sexo'),
            'estado_civil' => $this->input->post('estado_civil'),
            'ocupacion' => $this->input->post('ocupacion'),
            'grado_escolar' => $this->input->post('grado_escolar'),
            'telefono' => $this->input->post('telefono'),
            'celular' => $this->input->post('celular')
        );
        print_r($data);
        $this->model_paciente->updatePaciente($id, $data);
        $this->session->set_flashdata('correcto', '¡Paciente editado correctamente!');
        redirect(base_url() . 'Pacientes/PacientesInf');
    }

    function updateHistorial() {
        $id = $this->input->post('id');
        $data = array(
            
            'enfermedad_padecida' => $this->input->post('enfermedad_padecida'),
            'tratamientos' => $this->input->post('tratamientos'),
            'tratamiento_actual' => $this->input->post('tratamiento_actual'),
            'hospitalizaciones' => $this->input->post('hospitalizaciones'),
            'intervencion_quirurjica' => $this->input->post('intervencion_quirurjica'),
            'problema_respiratorio' => $this->input->post('problema_respiratorio'),
            'extirpacion_amigdalas' => $this->input->post('extirpacion_amigdalas'),
            'edad_extirpacion' => $this->input->post('edad_extirpacion'),
            'fuma_bebidas_alcoholicas' => $this->input->post('fuma_bebidas_alcoholicas'),
            'alergias' => $this->input->post('alergias'),
            'traumatismos_fracturas' => $this->input->post('traumatismos_fracturas'),
            'enfermedades_sistemicas' => $this->input->post('enfermedades_sistemicas'),
            'menarca' => $this->input->post('menarca'),
            'ultimo_periodo' => $this->input->post('ultimo_periodo'),
            'depresion' => $this->input->post('depresion'),
            'observacion' => $this->input->post('observacion')
        );
        $this->model_paciente->updateHistorial($id, $data);
        $this->session->set_flashdata('correcto', '¡Paciente editado correctamente!');
        redirect(base_url() . 'Pacientes/Historial_clinicoInf');
    }

    function updateAnalisisFacial() {
        $id = $this->input->post('id');
        $data = array(
            
            'somatotipo' => $this->input->post('somatotipo'),
            'linea_media' => $this->input->post('linea_media'),
            'biotipo_facial' => $this->input->post('biotipo_facial'),
            'simetria_facial' => $this->input->post('simetria_facial'),
            'forma_facial' => $this->input->post('forma_facial'),
            'nariz' => $this->input->post('nariz'),
            'tercio_facial_superior' => $this->input->post('tercio_facial_superior'),
            'tercio_facial_medio' => $this->input->post('tercio_facial_medio'),
            'postura_labial' => $this->input->post('tercio_facial_inferior'),
            'tercio_facial_inferior' => $this->input->post('postura_labial'),
            'labio_superior' => $this->input->post('labio_superior'),
            'labio_inferior' => $this->input->post('labio_inferior')
        );
        $this->model_paciente->updateAnalisisFacial($id, $data);
        $this->session->set_flashdata('correcto', '¡Paciente editado correctamente!');
        redirect(base_url() . 'Pacientes/Analisis_facialinf');
    }

    function updateAnalisisDental() {
        $id = $this->input->post('id');
        $data = array(
            
            'gingival' => $this->input->post('gingival'),
            'mucosas' => $this->input->post('mucosas'),
            'amigdalas' => $this->input->post('amigdalas'),
            'paladar' => $this->input->post('paladar'),
            'piso_boca' => $this->input->post('piso_boca'),
            'frenillos' => $this->input->post('frenillos'),
            'lengua' => $this->input->post('lengua'),
            'tipo_denticion' => $this->input->post('tipo_denticion'),
            'higiene_bucal' => $this->input->post('higiene_bucal'),
            'observaciones' => $this->input->post('observaciones')
        );
        
        $this->model_paciente->updateAnalisisDental($id, $data);
        $this->session->set_flashdata('correcto', '¡Paciente editado correctamente!');
        redirect(base_url() . 'Pacientes/Analisis_dentalInf');
    }

    function updateAnalisisOclusal() {
        $id = $this->input->post('id');
        $data = array(
            
            'clase_molar_d' => $this->input->post('clase_molar_d'),
            'clase_molar_i' => $this->input->post('clase_molar_i'),
            'clase_canina_d' => $this->input->post('clase_canina_d'),
            'clase_canina_i' => $this->input->post('clase_canina_i'),
            'sobremordida_h' => $this->input->post('sobremordida_h'),
            'sobremordida_v' => $this->input->post('sobremordida_v'),
            'maxima_apertura' => $this->input->post('maxima_apertura'),
            'interferencia' => $this->input->post('interferencia'),
            'lado_balance' => $this->input->post('lado_balance'),
            'lado_trabajo' => $this->input->post('lado_trabajo'),
            'dolor_muscular' => $this->input->post('dolor_muscular'),
            'control_sintomas' => $this->input->post('control_sintomas'),
            'dolor_articular' => $this->input->post('dolor_articular')
        );
        $this->model_paciente->updateAnalisisOclusal($id, $data);
        $this->session->set_flashdata('correcto', '¡Paciente editado correctamente!');
        redirect(base_url() . 'Pacientes/Analisis_oclusalInf');
    }

    function updateDesviacion() {
        $id = $this->input->post('id');
        $data = array(
            
            'oclusion_apertura' => $this->input->post('oclusion_apertura'),
            'oclusion_cierre' => $this->input->post('oclusion_cierre'),
            'terapias' => $this->input->post('terapias'),
            'luxacion' => $this->input->post('luxacion'),
            'habitos_p' => $this->input->post('habitos_p'),
            'frecuencia' => $this->input->post('frecuencia'),
            'tono_muscular_perioral' => $this->input->post('tono_muscular_perioral'),
            'tono_muscular_facial' => $this->input->post('tono_muscular_facial')
        );
        $this->model_paciente->updateDesviacion($id, $data);
        $this->session->set_flashdata('correcto', '¡Paciente editado correctamente!');
        redirect(base_url() . 'Pacientes/DesviacionInf');
    }

///////////////*********ELIMINAR*******************//////////////////////
    function eliminarPacientes($id) {
        echo $id;
        $this->model_paciente->eliminarPaciente($id);
        redirect(base_url() . 'Pacientes/PacientesInf');
    }

    function eliminarHistorialPaciente($id) {
        echo $id;
        $this->model_paciente->eliminarHistorial($id);
        redirect(base_url() . 'Pacientes/Historial_clinicoInf');
    }

    function eliminarAnalisisDental($id) {
        echo $id;
        $this->model_paciente->eliminarAnalisisDental($id);
        redirect(base_url() . 'Pacientes/Analisis_dentalInf');
    }

    function eliminarAnalisisOclusal($id) {
        echo $id;
        $this->model_paciente->eliminarAnalisisOclusal($id);
        redirect(base_url() . 'Pacientes/Analisis_oclusalInf');
    }

    function eliminarAnalisisFacial($id) {
        echo $id;
        $this->model_paciente->eliminarAnalisisFacial($id);
        redirect(base_url() . 'Pacientes/Analisis_facialinf');
    }

    function eliminarDesviacion($id) {
        echo $id;
        $this->model_paciente->eliminarDesviacion($id);
        redirect(base_url() . 'Pacientes/DesviacionInf');
    }

}

?>
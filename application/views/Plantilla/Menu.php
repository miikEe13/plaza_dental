<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dental Araucarias</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paciente<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url()?>Pacientes/Paciente">Historia Clinica  </a></li>
            <li><a href="<?php echo base_url()?>Pacientes/Historial_clinico">Ficha Medica</a></li>
            <li><a href="<?php echo base_url()?>Pacientes/Analisis_facial">Analisis Facial</a></li>
            <li><a href="<?php echo base_url()?>Pacientes/Analisis_dental">Analisis Dental</a></li>
           <li><a href="<?php echo base_url()?>Pacientes/Analisis_oclusal">Analisis Oclusal</a></li>
           <li><a href="<?php echo base_url()?>Pacientes/Desviacion">Desviacion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="">Mostar Informacion</a></li>
            
            <li role="separator" class="divider"></li>
           </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doctor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url()?>Doctor/Registro">Registrar Doctor</a></li>
           <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url()?>Doctor/Asignar_pac">Asignar pacientes</a></li>
                        
          </ul>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pago<span class="caret"></span></a>
          <ul class="dropdown-menu">
         <li><a href="<?php echo base_url()?>Pagos/Registro">Registrar Pago</a></li>
            <li role="separator" class="divider"></li>
         <li><a href="<?php echo base_url()?>Pagos/">Pagos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url()?>Cita/Cita">Registrar Cita</a></li>
            <li><a href="<?php echo base_url()?>Cita/agendarCitas">Enviar correo </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url()?>Cita/CitaInf">Agenda</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tratamiento<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url()?>tratamiento/Registro">Registrar</a></li>
            <li><a href="<?php echo base_url()?>Tratamiento/">Tratamiento</a></li>
            <li role="separator" class="divider"></li>
             <li><a href="<?php echo base_url()?>Tratamiento/Asignar_tratamiento"> Asignar tratamiento</a></li>
            
          </ul>
        </li>
       
      </ul>
<!--      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
<p class="navbar-text navbar-right">Bienvenido<a href="#" class="navbar-link"> <?php  ($this->session->userdata());  $nombre = $this->session->userdata('nombre'); 
 $id=$data['id'] = $this->session->userdata('id');
echo $id." ".$nombre; 

?></a></p>
      <p class="navbar-text navbar-right"> <a href="<?php echo base_url() ?>login/cerrar_sesion"> Cerrar sesión </a></p>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

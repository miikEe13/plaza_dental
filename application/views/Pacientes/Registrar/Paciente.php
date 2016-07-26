<div class="col-lg-12">
    <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
      
    <?php
    }
    ?>
    <h1 class=" text-center text-success">Informacion básica del paciente</h1>
        
        <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="AgregarPacientes" enctype="multipart/form-data" >
<!--            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">×</span></button> 
                    <center>   <strong>Holy guacamole!</strong> </center> 
             </div>-->
                <div class="panel panel-success">
                    <div class="panel-heading center-block">
                        <h3 class="panel-title text-center"><?php
                            if (isset($id)) {
                                echo "Modificar";
                            } else {
                                echo "Registrar";
                            }
                            ?> los datos en el siguiente formulario</h3>    
                    </div>
                    <div class="panel-body">
                        <div style="" class="col-lg-6">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Apellido Paterno</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="fecha" name="apellido_paterno" placeholder="Apellido Paterno" value=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Apellido Materno</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno " aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Correo</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="correo" placeholder="@hotmail.com" aria-describedby="sizing-addon2"  minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha de Nacimiento</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Direccion</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="direccion" placeholder="Direccion" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                        
                        </div>
                        <div style="" class="col-lg-6">

                            <div class="form-group">
                                <label class="col-sm-3 control-label"name="maxima_apertura" >Sexo</label> 
                                <div class="col-sm-8">
                                    <select class="form-control" name="sexo">
                                        <option selected="TRUE" disabled="true">--Seleccione una opcion--</option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"name="maxima_apertura" >Estado Civil</label> 
                                <div class="col-sm-8">
                                    <select class="form-control" name="estado_civil" required>
                                        <option selected="TRUE" disabled="true">--Seleccione una opcion--</option>
                                        <option>Soltero</option>
                                        <option>Casado</option>
                                        <option>Union libre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ocupacion</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Ocupacion" id="ocupacion" name="ocupacion" value=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"name="maxima_apertura" >Nivel Academico</label> 
                                <div class="col-sm-8">
                                    <select class="form-control" name="grado_escolar">
                                        <option selected="TRUE" disabled="true">--Seleccione una opcion--</option>
                                        <option>Primaria</option>
                                        <option>Secundaria</option>
                                        <option>Bachillerato</option>
                                        <option>Licenciatura</option>
                                        <option>Postgrado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Telefono</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" placeholder="telefono" id="telefono" name="telefono" value="" maxlength="10" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Celular</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="fecha" name="celular" placeholder="celular" value="" minlength="5" maxlength="10"  required>
                                </div>
                            </div>
 
                            <div class="form-group">
                                   <div class="col-sm-2 col-md-offset-7">
                                    <button type="submit" class="btn btn-success" value="upload" > <span class="glyphicon glyphicon-floppy-disk"></span><?php
                                        if (isset($id)) {
                                            echo "Editar";
                                        } else {
                                            echo " Registrar ";
                                        }
                                        ?> Datos</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-offset-7">

                                    <a href="<?php echo base_url() ?>Pacientes/PacientesInf"><button  type="button" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-search"></span> Pacientes             </button></a>                                    </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 
            </div>


        </form>
    </div>
</div>
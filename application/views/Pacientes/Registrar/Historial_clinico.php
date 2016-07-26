<div class="col-lg-12">
    <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
   
    <?php
    }
    ?>
    <h1 class="text-capitalize text-center text-success">Historial clinico </h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="AgregarHistorialPacientes" enctype="multipart/form-data" >
            <div class="col-lg-12">

                <div class="panel panel-success">
                    <div class="panel-heading center-block">
                        <h3 class="panel-title text-center"><?php if (isset($id)) {
    echo "Modificar";
} else {
    echo "Registrar";
} ?> los datos en el siguiente formulario</h3>    
                    </div>
                    <div class="panel-body">

                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"name="maxima_apertura" > Paciente</label> 
                                <div class="col-sm-8">
                                    <select class="form-control" name="id_paciente">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <?php
                                         print_r($pacientes);
                                        foreach ($pacientes as $i) {
                                            echo '<option value="'.$i->id.'">' . $i->nombre.' '.$i->apellido_paterno.' '.$i->apellido_materno .'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label">Enfermedad Padecida</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="enfermedad_padecida" placeholder="Enfermedad Padecida"   aria-describedby="sizing-addon2" value="" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tratamientos</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tratamientos" placeholder="Tratamientos" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tratamimento actual</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Tratamientos Actual"  id="tratamientos_actual" name="tratamiento_actual" value=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Hospitalizaciones</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="hospitalizaciones" placeholder="Hospitalizaciones" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Intervencion Quirurjica</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="intervecion_quirurjica" placeholder="Intervecion Quirurjica" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Problemas Respiratorios</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="problema_respiratorio" placeholder="Problemas Respiratorios" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Extirpacion Amigdalas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="extirpacion_amigdalas" placeholder="Extirpacion Amigdalas" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  >
                                </div>
                            </div>

                        </div>
                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Edad de extirpacion</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="edad_extirpacion" placeholder="Edad de extirpacion" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fuma o Bebidas alcoholicas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fuma_bebidas_alcoholicas" placeholder="Fuma o Bebidas alcoholicas" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alergias</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Alergias" id="alergias" name="alergias" value=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Traumatismos o fracturas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="fecha" name="traumatismos_fracturas" value="" placeholder="Traumatismos o fracturas" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Enfermedades sistemicas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Enfermedades sistemicas" id="enfermedades_sistemicas" name="enfermedades_sistemicas" value=""  >
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Menarca</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Menarca" id="Ultimo_periodo" name="menarca" value="" >
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Ultimo periodo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Ultimo periodo" id="Ultimo_periodo" name="ultimo_periodo" value="" >
                                </div>
                            </div>  
                           
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Depresion</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Depresion" id="depresion" name="depresion" value="">
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Observacion</label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control" placeholder="observaciones" name="observacion" rows="3"> </textarea>
<!--                                    <input type="text" class="form-control" placeholder="Observaciones" id="observacion" name="observacion" value=""  required>-->
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-4 col-md-offset-7">
                                    <button type="submit" class="btn btn-success" value="upload" > <span class="glyphicon glyphicon-floppy-disk"></span><?php if (isset($id)) {
                                            echo "Editar";
                                        } else {
                                            echo " Registrar ";
                                        } ?> Datos</button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-2 col-md-offset-7">

                                    <a href="<?php echo base_url() ?>Pacientes/Historial_clinicoInf"><button  type="button" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-search"></span> Pacientes             </button></a>                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 

        </form>
    </div>
</div>
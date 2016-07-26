<div class="col-lg-12">
  
    <h1 class="text-capitalize text-center text-success">Desviación en apertura y cierre</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="AgregarDesviacion" enctype="multipart/form-data" >
            <div class="col-lg-12">

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
                                <label class="col-sm-3 control-label"> Paciente</label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="id_paciente">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                         <?php
                                        foreach ($pacientes as $i) {
                                            echo '<option value="'.$i->id.'">' . $i->nombre.' '.$i->apellido_paterno.' '.$i->apellido_materno .'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Apertura Oclusion  </label>
                                <div class="col-sm-8">
                                    <select class="form-control"name="oclusion_apertura">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <option>Derecha</option>
                                        <option>Izuierda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Cierre Oclusion </label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="oclusion_cierre">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <option>Derecha</option>
                                        <option>Izuierda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label"> Terapias </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="terapias" placeholder="Terapia o especialista para tratar molestias" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                            <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label"> Luxacion </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="luxacion" placeholder="Luxacion del disco articular" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                            </div>
                          </div>
                        <div style="" class="col-lg-6">
                         <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label"> Habitos permiciosos</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="habitos_p" placeholder="Habitos permiciosos" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label">Frecuencia</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="frecuencia" placeholder="Fecuencia, Intensidad y duración" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label">Tono Muscular Perioral</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tono_muscular_perioral" placeholder="Tono Muscular Perioral" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label">Tono Muscular Facial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tono_muscular_facial" placeholder="Tono Muscular Facial " aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>



                            <div class="form-group">
                                <div class="col-sm-4 col-md-offset-7">
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

                                    <a href="<?php echo base_url() ?>Pacientes/DesviacionInf"><button  type="button" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-search"></span> Pacientes             </button></a>                                    </div>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 

        </form>
    </div>
</div>

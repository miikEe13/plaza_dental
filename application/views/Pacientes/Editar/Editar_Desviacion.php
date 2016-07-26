<div class="col-lg-12">
    <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
       
    <?php
    }
    ?>
    <h1 class="text-capitalize text-center text-success">Desviación en apertura y cierre</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="<?php echo base_url() ?>pacientes/updateDesviacion" enctype="multipart/form-data" >
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
                                <label class="col-sm-3 control-label">ID</label>
                                <div class="col-sm-8">
                                    <input  readonly="true" type="text" class="form-control" name="id" placeholder="Paciente"   aria-describedby="sizing-addon2" value="<?php echo $r->id ?>" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength=""  required>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Paciente</label>
                                <div class="col-sm-8">
                                    <input  readonly="true" type="text" class="form-control" name="nombre" placeholder="Paciente"   aria-describedby="sizing-addon2" value="<?php echo $r->nombre ?>" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Apellido Paterno</label>
                                <div class="col-sm-8">
                                    <input readonly="true" type="text" class="form-control" name="apellido_paterno" placeholder="Paciente"   aria-describedby="sizing-addon2" value="<?php echo $r->apellido_paterno ?>" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Apellido Materno</label>
                                <div class="col-sm-8">
                                    <input readonly="true" type="text" class="form-control" name="apellido_materno" placeholder="Paciente"   aria-describedby="sizing-addon2" value="<?php echo $r->apellido_materno ?>" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Apertura Oclusion  </label>
                                <div class="col-sm-8">
                                    <select class="form-control"name="oclusion_apertura">
                                       <?php 
                                       $seleccionado= $r->oclusion_apertura;
                                       $combo=array("Derecha","Izquierda");
                                       foreach ($combo as $key => $value) {
                                               
                                                 if ($value==$seleccionado) {
                                                     echo "<option value='".$value."'"; 
                                                     echo "SELECTED";
                                                     echo">".$value."</option>";
                                                 }  else {
                                                   echo"  <option>$value</option>";
                                                 }
                                                                    } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Cierre Oclusion </label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="oclusion_cierre">
                                         <?php 
                                       $seleccionado= $r->oclusion_cierre;
                                       $combo=array("Derecha","Izquierda");
                                       foreach ($combo as $key => $value) {
                                               
                                                 if ($value==$seleccionado) {
                                                     echo "<option value='".$value."'"; 
                                                     echo "SELECTED";
                                                     echo">".$value."</option>";
                                                 }  else {
                                                   echo"  <option>$value</option>";
                                                 }
                                                                    } ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label"> Terapias </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="terapias" placeholder="Terapia o especialista para tratar molestias" aria-describedby="sizing-addon2" value="<?php echo $r-> terapias?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                            <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label"> Luxacion </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="luxacion" placeholder="Luxacion del disco articular" aria-describedby="sizing-addon2" value="<?php echo $r->luxacion?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                            </div>
                          </div>
                        <div style="" class="col-lg-6">
                         <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label"> Habitos permiciosos</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="habitos_p" placeholder="Habitos permiciosos" aria-describedby="sizing-addon2" value="<?php echo $r->habitos_p?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label">Frecuencia</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="frecuencia" placeholder="Fecuencia, Intensidad y duración" aria-describedby="sizing-addon2" value="<?php echo $r->frecuencia?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label">Tono Muscular Perioral</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tono_muscular_perioral" placeholder="Tono Muscular Perioral" aria-describedby="sizing-addon2" value="<?php echo $r->tono_muscular_perioral?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="observacion" class="col-sm-3 control-label">Tono Muscular Facial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tono_muscular_facial" placeholder="Tono Muscular Facial " aria-describedby="sizing-addon2" value="<?php echo $r->tono_muscular_facial?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
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

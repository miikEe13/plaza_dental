<div class="col-lg-12">
    <h1 class="text-center text-success">Analisis oclusal y funcional de ATM </h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="<?php echo base_url() ?>pacientes/updateAnalisisOclusal" enctype="multipart/form-data" >
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
                                <label class="col-sm-3 control-label">Clase Molar Derecha</label>
                                <div class="col-sm-8">
                                    <select class="form-control"name="clase_molar_d">
                                        
                                       <?php 
                                       $seleccionado= $r->clase_molar_d;
                                       $combo=array("Derecha 1","Derecha 2","Derecha 3");
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
                                <label class="col-sm-3 control-label">Clase Molar Izquierda</label>
                                <div class="col-sm-8">
                                    <select class="form-control"name="clase_molar_i">
                                        <?php 
                                       $seleccionado= $r->clase_molar_i;
                                       $combo=array("Izquierda 1","Izquierda 2","Izquierda 3");
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
                                <label class="col-sm-3 control-label"> Clase Canina Derecha</label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="clase_canina_d" >
                                         <?php 
                                       $seleccionado= $r->clase_canina_d;
                                       $combo=array("Derecha 1","Derecha 2","Derecha 3");
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
                                <label class="col-sm-3 control-label"> Clase Canina Izquierda</label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="clase_canina_i" >
                                        <?php 
                                       $seleccionado= $r->clase_canina_i;
                                       $combo=array("Izquierda 1","Izquierda 2","Izquierda 3");
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
                                <label class="col-sm-3 control-label"> Sobremordida Horizontal</label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="sobremordida_h">
                                        <?php 
                                       $seleccionado= $r->sobremordida_h;
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
                                <label class="col-sm-3 control-label"> Sobremordida Vertical</label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="sobremordida_v">
                                       <?php 
                                       $seleccionado= $r->sobremordida_v;
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
                                <label class="col-sm-3 control-label"name="maxima_apertura" > Máxima Apertura</label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="maxima_apertura">
                                       <?php 
                                       $seleccionado= $r->maxima_apertura;
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
                                <label class="col-sm-3 control-label"name="interferencia" > Interferiencias</label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="interferencia">
                                       <?php 
                                       $seleccionado= $r->interferencia;
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

                        </div>
                        <div style="" class="col-lg-6">

                            <div class="form-group">
                                <label class="col-sm-3 control-label"name="lado_balance" >Lado de Balance </label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="lado_balance">
                                         <?php 
                                       $seleccionado= $r->lado_balance;
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
                                <label class="col-sm-3 control-label"name="lado_trabajo" >Lado de Trabajo </label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="lado_trabajo">
                                         <?php 
                                       $seleccionado= $r->lado_trabajo;
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
                                <label class="col-sm-3 control-label"name="mordida" >Tipo de Mordida </label> 
                                <div class="col-sm-8">
                                    <select class="form-control"name="mordida">
                                        <?php 
                                       $seleccionado= $r->mordida;
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
                                <label for="observacion" class="col-sm-3 control-label">Dolor Muscular </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="dolor_muscular" placeholder="Dolor muscular a la palpitacion" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">control de sintomas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="control_sintomas" placeholder="Hace algo para controlar los sitomas de dolor y rigidez muscular" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Dolor Articular</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="dolor_articular" placeholder="Dolor Articular" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
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

                                    <a href="<?php echo base_url() ?>Pacientes/Analisis_oclusalInf"><button  type="button" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-search"></span> Pacientes             </button></a>                                    </div>
                            </div>
                            
                              
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 

        </form>
    </div>
</div>

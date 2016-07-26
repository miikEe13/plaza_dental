<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class=" text-center text-success">Informacion básica del paciente</h1>
            <form  accept-charset="utf-8" class="form-horizontal" method="post" action="<?php echo base_url() ?>pacientes/editarPaciente" >
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
                                        <input readonly="true" type="text" class="form-control" name="id" placeholder="Nombre" aria-describedby="sizing-addon2" value="<?php echo $r->id ?>" minlength="5" title="Campo Obligatorio 6echo $r->nombre?0 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nombre</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-describedby="sizing-addon2" value="<?php echo $r->nombre ?>" minlength="5" title="Campo Obligatorio 6echo $r->nombre?0 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Apellido Paterno</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"  name="apellido_paterno" placeholder="Apellido Paterno" value="<?php echo $r->apellido_paterno ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Apellido Materno</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno " aria-describedby="sizing-addon2" value="<?php echo $r->apellido_materno ?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Correo</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="correo" placeholder="@hotmail.com" aria-describedby="sizing-addon2" value="<?php echo $r->correo ?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Fecha de Nacimiento</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" aria-describedby="sizing-addon2" value="<?php echo $r->fecha_nacimiento ?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Direccion</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="direccion" placeholder="Direccion" aria-describedby="sizing-addon2" value="<?php echo $r->direccion ?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                    </div>
                                </div>
                            </div>
                            <div style="" class="col-lg-6">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"name="sexo" >Sexo</label> 
                                    <div class="col-sm-8">
                                        <select class="form-control" name="sexo">
                                            <?php
                                            $seleccionado = $r->sexo;
                                            $combo = array("Masculino", "Femenino");
                                            foreach ($combo as $key => $value) {
                                                if ($value == $seleccionado) {
                                                    echo "<option value='" . $value . "'";
                                                    echo "SELECTED";
                                                    echo">" . $value . "</option>";
                                                } else {
                                                    echo"  <option>$value</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"name="maxima_apertura" >Estado Civil</label> 
                                    <div class="col-sm-8">
                                        <select class="form-control" name="estado_civil">
                                           <?php
                                            $seleccionado = $r->estado_civil;
                                            $combo = array("Soltero", "Casado", "Union libre");
                                            foreach ($combo as $key => $value) {
                                                if ($value == $seleccionado) {
                                                    echo "<option value='" . $value . "'";
                                                    echo "SELECTED";
                                                    echo">" . $value . "</option>";
                                                } else {
                                                    echo"  <option>$value</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Ocupacion</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Ocupacion" id="ocupacion" name="ocupacion" value="<?php echo $r->ocupacion ?>"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"name="maxima_apertura" >Nivel Academico</label> 
                                    <div class="col-sm-8">
                                        <select class="form-control" name="grado_escolar">
                                            <option selected="TRUE" value="<?php $r->grado_escolar ?>"><?php echo $r->grado_escolar ?></option>
                                            <?php
                                            $seleccionado = $r->estado_civil;
                                            $combo = array("Secundaria", "Bachillerato", "Licenciatura", "Postgrado");
                                            foreach ($combo as $key => $value) {
                                                if ($value == $seleccionado) {
                                                    echo "<option value='" . $value . "'";
                                                    echo "SELECTED";
                                                    echo">" . $value . "</option>";
                                                } else {
                                                    echo"  <option>$value</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Telefono</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" placeholder="telefono" id="telefono" name="telefono" value="<?php echo $r->telefono ?>" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Celular</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="fecha" name="celular" placeholder="celular" value="<?php echo $r->celular ?>" minlength="5" maxlength="10"  required>
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
</div>
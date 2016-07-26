<div class="col-lg-12">
     <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
      
    <?php
    }
    ?>
    <h1 class="text-capitalize text-center text-success">Dentista</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="AgregarDoctor" enctype="multipart/form-data" >
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
                                <label  class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Apellido Materno</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Apellido Paterno</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="fecha" name="apellido_paterno" placeholder="Apellido Paterno"  value=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Especialidad</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="especialidad" name="especialidad"  placeholder= "especialidad" value=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Cédula</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula"  value=""  required>
                                </div>
                            </div>
                           
                        </div>
                        <div style="" class="col-lg-6">

                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Celular</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular"  value=""  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Correo</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="correo" placeholder="@hotmail.com" aria-describedby="sizing-addon2"  minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Contraseña</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="contraseña" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Confirmar Contraseña</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="contrasena" placeholder="contraseña" oninput="check(this)" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                 <script language='javascript' type='text/javascript'>
                                function check(input) {
                                    if (input.value != document.getElementById('password').value) {
                                        input.setCustomValidity('La contraseña no coinciden.');
                                    } else {
                                        // input is valid -- reset the error message
                                        input.setCustomValidity('');
                                    }
                                }
                            </script>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-4 col-md-offset-8">
                                    <button type="submit" class="btn btn-success" value="upload" > <span class="glyphicon glyphicon-floppy-disk"></span><?php
                                        if (isset($id)) {
                                            echo "Editar";
                                        } else {
                                            echo " Registrar ";
                                        }
                                        ?> Datos</button>
                                </div>
                                                           </div
                                                            <div class="form-group">
                                <div class="col-sm-2 col-md-offset-8">
                                    <a href="<?php echo base_url() ?>Doctor/DoctorInf"><button  type="button" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-search"></span> Doctores</button></a></div>
                            </div>
                        </div>


                    </div>
                </div> 
            </div>
        </form>
    </div> 


</div>

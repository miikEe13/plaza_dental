    <h1 class="text-capitalize text-center text-success">Asignar Paciente </h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="AgregarDoctorPaciente" enctype="multipart/form-data" >
            <div class="col-lg-12">

                <div class="panel panel-success">
                    <div class="panel-heading center-block">
                        <h3 class="panel-title text-center"><?php if (isset($id)) {
    echo "Modificar";
} else {
    echo "Registrar";
} ?> los datos en el siguiente formuario</h3>    
                    </div>
                    <div class="panel-body">
                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Dentista</label>
                                <div class="col-sm-8">
                                    <select class="form-control"name="id_dentista">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <?php
 print_r($dent);
                                        foreach ($dent as $i) {
                                            echo '<option value="' . $i->id . '">' . $i->nombre . ' ' . $i->apellido_paterno . ' ' . $i->apellido_materno . '</option>';
                                        }
                                        ?>
                                    </select>                                        </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Paciente</label>
                                <div class="col-sm-8">                                   <select class="form-control"name="id_paciente">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <?php
                                        
                                        foreach ($pacientes as $i) {
                                            echo '<option value="' . $i->id . '">' . $i->nombre . ' ' . $i->apellido_paterno . ' ' . $i->apellido_materno . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label for="fecha" class="col-sm-3 control-label">Fecha</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="fecha" name="fecha_registro" value="<?php //if (isset($fecha)) { echo $fecha; } ?>"  required>
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
                        </div>


                    </div>
                </div> 
            </div>
            </form>
    </div> 


</div>

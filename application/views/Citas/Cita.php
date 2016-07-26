<div class="col-lg-12">
    <h1 class="text-capitalize text-center text-success centered">Agendar citas</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="registrar" enctype="multipart/form-data" >
            <div class="col-lg-12">

                <div class="panel panel-success">
                    <div class="panel-heading center-block">
                        <h3 class="panel-title text-center">Registrar los datos en el siguiente formulario</h3>    
                    </div>
                    <div class="panel-body">
                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Dentista</label>
                                <div class="col-sm-8">
                                    <select class="form-control"name="id_dentista" id="id_dentista">
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
                                <div class="col-sm-8">                                
                                    <select class="form-control"name="id_paciente" id="id_paciente">
                                        <option selected="TRUE">--Seleccione una opcion--</option>

                                    </select>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $("#id_dentista").change(function () {
                                                $("#id_dentista option:selected").each(function () {
                                                    id_dentista = $('#id_dentista').val();
                                                    $.post("<?php echo base_url(); ?>tratamiento/comboboxPaciente", {
                                                        id_dentista: id_dentista
                                                    }, function (data) {
                                                        $("#id_paciente").html(data);
                                                    });
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fecha" class="col-sm-3 control-label">Fecha</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php
                                        if (isset($fecha)) {
                                            echo $fecha;
                                        }
                                        ?>"  required>
                                </div>
                            </div>
                        </div>
                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Hora</label>
                                <div class="col-sm-8">
                                    <select class="form-control"name="hora">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <option>9:00</option>
                                        <option>9:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                        <option>18:30</option>
                                        <option>19:00</option>
                                        <option>19:30</option>
                                        <option>20:00</option>
                                        <option>20:30</option>
                                    </select>
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
                        </div>
                    </div> 
                </div>
            </div> 

        </form>
    </div>
</div>



<?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
       <script> </script>
    <?php
    }
    ?>
    </div>

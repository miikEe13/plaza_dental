<div class="col-lg-12">
    <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
       
    <?php
    }
    ?>
    <h1 class="text-capitalize text-center text-success"> Analisis Dental</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="AgregarAnalisisdental" enctype="multipart/form-data" >
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
                                    <select class="form-control"name="id_paciente">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <?php
                                        foreach ($pacientes as $i) {
                                            echo '<option value="' . $i->id . '">' . $i->nombre . ' ' . $i->apellido_paterno . ' ' . $i->apellido_materno . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Gingival</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="gingival" placeholder="Gingival"   aria-describedby="sizing-addon2" value="" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="10"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Mucosas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mucosas" placeholder="Mucosas" aria-describedby="sizing-addon2" value="<?php if (isset($autor)) {
                                            echo $autor;
                                        } ?>" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Amigdalas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Amigdalas"  id="amigdalas" name="amigdalas" value=""  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Paladar</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="paladar" placeholder="Paladar" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Piso boca</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="piso_boca" placeholder="Piso Boca" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>



                        </div>
                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Frenillos</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="frenillos" placeholder="Frenillos" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Lengua</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="lengua" placeholder="Lengua" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Tipo Dentición</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tipo_denticion" placeholder="Tipo Detinción" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Higiene Bucal </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="higiene_bucal" placeholder="Higiene Bucal" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Observaciones</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Observaciones" id="fecha" name="observaciones" value=""  required>
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

                                    <a href="<?php echo base_url() ?>Pacientes/Analisis_DentalInf"><button  type="button" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-search"></span> Pacientes             </button></a>                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 

        </form>
    </div>
</div>
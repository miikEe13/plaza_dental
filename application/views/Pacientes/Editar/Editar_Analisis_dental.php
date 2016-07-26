<div class="col-lg-12">
    
    <h1 class="text-capitalize text-center text-success"> Analisis Dental</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="<?php echo base_url() ?>pacientes/updateAnalisisDental" enctype="multipart/form-data" >
            <div class="col-lg-12">

                <div class="panel panel-success">
                    <div class="panel-heading center-block">
                        <h3 class="panel-title text-center">Modificar los datos en el siguiente formulario</h3>    
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
                                    <input  readonly="true" type="text" class="form-control" name="nombre" placeholder="Paciente"   aria-describedby="sizing-addon2" value="<?php echo $r->nombre?>" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength=""  required>
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
                                <label class="col-sm-3 control-label">Gingival</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="gingival" placeholder="Gingival"   aria-describedby="sizing-addon2" value="<?php echo $r-> gingival?>" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="10"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Mucosas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mucosas" placeholder="Mucosas" aria-describedby="sizing-addon2" value="<?php echo $r-> mucosas?>" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Amigdalas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Amigdalas"  id="amigdalas" name="amigdalas" value="<?php echo $r-> amigdalas?>"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Paladar</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="paladar" placeholder="Paladar" aria-describedby="sizing-addon2" value="<?php echo $r-> paladar?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Piso boca</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="piso_boca" placeholder="Piso Boca" aria-describedby="sizing-addon2" value="<?php echo $r-> piso_boca?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>



                        </div>
                        <div style="" class="col-lg-6">
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Frenillos</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="frenillos" placeholder="Frenillos" aria-describedby="sizing-addon2" value="<?php echo $r-> frenillos?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Lengua</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="lengua" placeholder="Lengua" aria-describedby="sizing-addon2" value="<?php echo $r-> lengua?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Tipo Dentición</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tipo_denticion" placeholder="Tipo Detinción" aria-describedby="sizing-addon2" value="<?php echo $r-> tipo_denticion?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Higiene Bucal </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="higiene_bucal" placeholder="Higiene Bucal" aria-describedby="sizing-addon2" value="<?php echo $r-> higiene_bucal?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Observaciones</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Observaciones" id="fecha" name="observaciones" value="<?php echo $r-> observaciones?>"  required>
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
<div class="col-lg-12">
                <h1 class="text-capitalize text-center text-success"> Analisis Facial</h1>
                <div class="row">
                    <form  accept-charset="utf-8" class="form-horizontal" method="post" action="<?php echo base_url() ?>pacientes/updateAnalisisFacial" enctype="multipart/form-data" >
                        <div class="col-lg-12">
                        
                        <div class="panel panel-success">
                            <div class="panel-heading center-block">
                                <h3 class="panel-title text-center"><?php if(isset($id)){echo "Modificar";}else{ echo "Registrar ";}?>los datos en el siguiente formulario</h3>    
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
                                        <label class="col-sm-3 control-label">Somatipo</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="somatotipo" placeholder="Somatipo"   aria-describedby="sizing-addon2" value="<?php echo $r->somatotipo?>" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Linea Media</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="linea_media" placeholder="Correspondencia Linea Media Facia/Dental" aria-describedby="sizing-addon2" value="<?php echo $r->linea_media?>" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Biotipo</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Biotipo"  id="biotipo" name="biotipo_facial" value="<?php echo $r->biotipo_facial?>" >
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label  class="col-sm-3 control-label">Simetría Facial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="simetria_facial" placeholder="Simetría Facial" aria-describedby="sizing-addon2" value="<?php echo $r->simetria_facial?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50" >
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label  class="col-sm-3 control-label">Perfil </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="perfil" placeholder="Perfil" aria-describedby="sizing-addon2" value="<?php echo $r->perfil?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Forma Facial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="forma_facial" placeholder="Forma Facial" aria-describedby="sizing-addon2" value="<?php echo $r->forma_facial?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50" >
                                        </div>
                                    </div>
                                   
                                </div>
                                <div style="" class="col-lg-6">
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Nariz</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nariz" placeholder="Nariz" aria-describedby="sizing-addon2" value="<?php echo $r->nariz?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Tercio Facial Superior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tercio_facial_superior" placeholder="Tercio Facial Superior" aria-describedby="sizing-addon2" value="<?php echo $r->tercio_facial_superior?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Tercio Facial Medio </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tercio_facial_medio" placeholder="Tercio Facial Medio" aria-describedby="sizing-addon2" value="<?php echo $r->tercio_facial_medio?>" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label f class="col-sm-3 control-label">Tercio Facial Inferior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Tercio Facial Inferior " id="inferior" name="tercio_facial_inferior" value="<?php echo $r->tercio_facial_inferior?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_solicitud" class="col-sm-3 control-label">Postura Labial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Postura Labial" id="postura_labial" name="postura_labial" value="<?php echo $r->postura_labial?>"  required>
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                            <label for="fecha_solicitud" class="col-sm-3 control-label">Labio Superior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Labio Superior" id="labio_superior" name="labio_superior" value="<?php echo $r->labio_superior?>"  required>
                                        </div>
                                          </div>  
                                    <div class="form-group">
                                        <label for="fecha_solicitud" class="col-sm-3 control-label">Labio Inferior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Labio Inferior" id="labio_inferior" name="labio_inferior" value="<?php echo $r->labio_inferior?>"  required>
                                        </div>
                                    </div>
                                    
                                                                       
                                        
                                  

                                    <div class="form-group">
                                        <div class="col-sm-4 col-md-offset-7">
                                            <button type="submit" class="btn btn-success" value="upload" > <span class="glyphicon glyphicon-floppy-disk"></span><?php if(isset($id)){echo "Editar";}else{ echo " Registrar " ;}?> Datos</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                <div class="col-sm-2 col-md-offset-7">

                                    <a href="<?php echo base_url() ?>Pacientes/Analisis_facialInf"><button  type="button" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-search"></span> Pacientes             </button></a>                                    </div>
                            </div>
                                </div>
                            </div> 
                        </div>
                        </div> 
                        
                    </form>
                </div>
            </div>

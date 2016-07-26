 <div class="col-lg-12">
     <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
      
    <?php
    }
    ?>
                <h1 class="text-capitalize text-center text-success"> Analisis Facial</h1>
                <div class="row">
                    <form  accept-charset="utf-8" class="form-horizontal" method="post" action="AgregarAnalsisfacial" enctype="multipart/form-data" >
                        <div class="col-lg-12">
                        
                        <div class="panel panel-success">
                            <div class="panel-heading center-block">
                                <h3 class="panel-title text-center"><?php if(isset($id)){echo "Modificar";}else{ echo "Registrar ";}?>los datos en el siguiente formulario</h3>    
                            </div>
                            <div class="panel-body">
                                <div style="" class="col-lg-6">
                                    <div class="form-group">
                                <label class="col-sm-3 control-label" > Paciente</label> 
                                <div class="col-sm-8">
                                    <select class="form-control" name="id_paciente">
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
                                        <label class="col-sm-3 control-label">Somatipo</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="somatotipo" placeholder="Somatipo"   aria-describedby="sizing-addon2" value="" minlength="5"  title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Linea Media</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="linea_media" placeholder="Correspondencia Linea Media Facia/Dental" aria-describedby="sizing-addon2" value="<?php if(isset($autor)){echo $autor;}?> " minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Biotipo</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Biotipo"  id="biotipo" name="biotipo_facial" value="" >
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label  class="col-sm-3 control-label">Simetría Facial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="simetria_facial" placeholder="Simetría Facial" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50" >
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label  class="col-sm-3 control-label">Perfil </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="perfil" placeholder="Perfil" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Forma Facial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="forma_facial" placeholder="Forma Facial" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50" >
                                        </div>
                                    </div>
                                   
                                    
                                    
                                    
   
                                </div>
                                <div style="" class="col-lg-6">
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Nariz</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nariz" placeholder="Nariz" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Tercio Facial Superior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tercio_facial_superior" placeholder="Tercio Facial Superior" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Tercio Facial Medio </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tercio_facial_medio" placeholder="Tercio Facial Medio" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label f class="col-sm-3 control-label">Tercio Facial Inferior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Tercio Facial Inferior " id="inferior" name="tercio_facial_inferior" value="" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_solicitud" class="col-sm-3 control-label">Postura Labial</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Postura Labial" id="postura_labial" name="postura_labial" value=""  required>
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                            <label for="fecha_solicitud" class="col-sm-3 control-label">Labio Superior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Labio Superior" id="labio_superior" name="labio_superior" value=""  required>
                                        </div>
                                          </div>  
                                    <div class="form-group">
                                        <label for="fecha_solicitud" class="col-sm-3 control-label">Labio Inferior</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Labio Inferior" id="labio_inferior" name="labio_inferior" value=""  required>
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

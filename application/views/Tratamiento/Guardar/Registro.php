<div class="col-lg-12">
    <h1 class="text-capitalize text-center text-success">Tratamientos</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="agregarTratamiento" enctype="multipart/form-data" >
            <div class="col-lg-12">

                <div class="panel panel-success">
                    <div class="panel-heading center-block">
                        <h3 class="panel-title text-center">Registrar los datos en el siguiente formulario</h3>    
                    </div>
                    <div class="panel-body">
                        <div style="" class="col-lg-6">
                                                <div class="form-group">
                                <label class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Costo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="costo" name="costo" placeholder="Costo" value=""  required>
                                </div>
                            </div>        
                        </div>
                        
                        <div style="" class="col-lg-6">
                                   <div class="form-group">
                                <label for="observacion" class="col-sm-3 control-label">Tipo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="tipo" placeholder="Tipo" aria-describedby="sizing-addon2" value="" minlength="5" title="Campo Obligatorio 50 Caracteres Maximo, Minimo 5 " maxlength="50"  required>
                                </div>
                            </div>

                                    

                                    <div class="form-group">
                                        <div class="col-sm-4 col-md-offset-7">
                                            <button type="submit" class="btn btn-success" value="upload" > <span class="glyphicon glyphicon-floppy-disk"></span>Registrar Datos</button>
                                        </div>
                                    </div>
                                </div>
                    </div> 
                    
                </div>
            </div> 

        </form>
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


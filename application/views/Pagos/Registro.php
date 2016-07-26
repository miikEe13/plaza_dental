<div class="col-lg-12">
    <h1 class="text-capitalize text-center text-success">Pago</h1>
    <div class="row">
        <form  accept-charset="utf-8" class="form-horizontal" method="post" action="" enctype="multipart/form-data" >
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
                                <label class="col-sm-3 control-label"name="sobremordida_vertical"> Doctor</label> 
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <option>Estrella</option>
                                        <option>Esmeralda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"name="maxima_apertura" > Paciente</label> 
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <option>Sandy</option>
                                        <option>cindy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"name="interferiencias" > Tratamiento</label> 
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option selected="TRUE">--Seleccione una opcion--</option>
                                        <option>braquets transparentes</option>
                                        <option>braquets fiero</option>
                                    </select>
                                </div>
                            </div>
                            


                            
                        </div>
                        <div style="" class="col-lg-6">
                                   <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="fecha" placeholder="Fecha" aria-describedby="sizing-addon2" value="<?php if (isset($autor)) {
    echo $autor;
} ?>" minlength="5" title="Campo Obligatorio 60 Caracteres Maximo, Minimo 5 " maxlength="60" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-sm-3 control-label">Cantidad </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="<?php if (isset($fecha)) {
    echo $fecha;
} ?>"  required>
                                </div>
                            </div>

                                   
                                </div>
                         <div class="form-group">
                                        <div class="col-sm-4 col-md-offset-7">
                                            <button type="submit" class="btn btn-success" value="upload" > <span class="glyphicon glyphicon-floppy-disk"></span><?php if(isset($id)){echo "Editar";}else{ echo " Registrar ";}?> Datos</button>
                                        </div>
                                    </div>
                    </div> 
                </div>
            </div> 

        </form>
    </div>

</div>
<div class="container-fluid">
    <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
      
    <?php
    }
    ?>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center alert-success">Pacientes Información basica</h1>
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed"> 
                <thead class=""> 
                    <tr class='success' > 
                        <th>#</th> 
                        <th>nombre</th> 
                        <th>apellido Paterno</th>
                        <th>Apellido Materno</th> 
                        <th>Correo</th> 
                        <th>Fecha de Nacimiento</th> 
                        <th>Dirección</th> 
                        <th>Sexo</th>
                        <th>Estado Civil</th> 
                        <th>Ocupación</th> 
                        <th>Grado Escolar</th> 
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Editar</th>
                        <th>Eliminar</th>

                    </tr> 
                </thead> 
                <tbody class="table-responsive" id="sizing-addon3">  
                    <?php
                    foreach ($query as $row) {
                        echo " <tr class=''> ";
                        echo " <th scope='row' class=''>$row->id</th> ";
                        echo "<td>$row->nombre</td> ";
                        echo "<td class=''>$row->apellido_paterno</td> ";
                        echo "<td>$row->apellido_materno</td> ";
                        echo "<td class='' >$row->correo</td> ";
                        echo "<td>$row->fecha_nacimiento</td> ";
                        echo "<td class=''>$row->direccion</td> ";
                        echo "<td>$row->sexo</td> ";
                        echo "<td class=''>$row->estado_civil</td> ";
                        echo "<td>$row->ocupacion</td> ";
                        echo "<td class=''>$row->grado_escolar</td> ";
                        echo "<td>$row->telefono</td> ";
                        echo "<td class=''>$row->celular</td> ";
                        echo "<td> <a href='" . site_url('pacientes/EditarPacientes/' . $row->id) . "'><button  type='button' class='btn btn-primary'><span class='glyphicon glyphicon glyphicon-refresh'></span></button></a>  </td> ";
                        echo "<td> <a onclick='if(confirma() == false) return false' href='" . site_url('pacientes/eliminarPacientes/'.$row->id ). "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span></button></a>  </td> ";
//                        echo "<td> <button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash' data-toggle='modal' data-target='#myModal'></span></button> </td> ";
                        echo " </tr> ";
                    }
                    ?>
                </tbody> 
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
function confirma(){
 if (confirm("¡Si este paciente tiene registros asociados no se podra llevar acabo la operación! ¿Está seguro que desea eliminar este Paciente?")){ 
 alert("El registro ha sido eliminado.")                                                                                                                                                                                                                                                                                                                                                                                                                                                                  }
 else { 
 return false
 }
}
</script>
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="status"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="formEstatus" action="" method="POST" >
                <div class="modal-header danger">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center>   <h4 class="modal-title" >Eliminar paciente</h4> </center>
                </div>
                <div class="modal-body" >
                     The form is placed inside the body of modal 
                    <h4 class=""> ¡Si este paciente tiene registros asociados no se podra llevar acabo la operación! ¿Está seguro que desea eliminar este Paciente? </h4>
                </div>
                <div class="modal-footer">
                    <div class="form-group "> 
                        <div class="col-sm-8 col-md-offset-4">
                            //<?php
//                            echo "<a href='" . site_url('pacientes/eliminarPacientes/'.$row->id ). "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span> Eliminar</button></a>"
//                            ?>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>-->
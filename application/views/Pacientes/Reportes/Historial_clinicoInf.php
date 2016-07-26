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
        <div class="">
            <h1 class="text-center alert-success">Ficha Médica</h1>
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 

                <thead> 
                    <tr class='success'> 
                        <th>id historial</th>
                        <th>id paciente</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Enfermedad Padecida</th> 
                        <th>tratamientos</th>
                        <th>Tratamiento Actual</th> 
                        <th>Hospitalizaciones</th> 
                        <th>Intervencion Quirurjica</th> 
                        <th>Problema Respiratorio</th> 
                        <th>Extirpacion Amigdalas</th>
                        <th>Edad Extirpacion</th> 
                        <th>Fuma o Ingieres Bebidas Alcoholicas</th> 
                        <th>Alergias</th> 
                        <th>Traumatismos Fracturas</th> 
                        <th>Enfermedades Sistemicas</th>
                        <th>Menarca</th>
                        <th>Ultimo Periodo</th>
                        <th>Depresion</th>
                        <th>Observacion</th>
                        <th>Editar</th>

                    </tr> 
                </thead> 
                <tbody>  
                    <?php
                    foreach ($query as $row) {
                        echo " <tr class=''> ";
                        echo " <th scope='row' class=''>$row->id</th> ";
                        echo " <th scope='row' class=''>$row->id_paciente</th> ";
                        echo " <th scope='row' class=''>$row->nombre</th> ";
                        echo " <th scope='row' class=''>$row->apellido_paterno</th> ";
                        echo " <th scope='row' class=''>$row->apellido_materno</th> ";
                        echo "<td>$row->enfermedad_padecida</td> ";
                        echo "<td>$row->tratamientos</td> ";
                        echo "<td>$row->tratamiento_actual</td> ";
                        echo "<td class='' >$row->hospitalizaciones</td> ";
                        echo "<td>$row->intervencion_quirurjica</td> ";
                        echo "<td class=''>$row->problema_respiratorio</td> ";
                        echo "<td>$row->extirpacion_amigdalas</td> ";
                        echo "<td class=''>$row->edad_extirpacion</td> ";
                        echo "<td class=''>$row->fuma_bebidas_alcoholicas</td> ";
                        echo "<td class=''>$row->alergias</td> ";
                        echo "<td class=''>$row->traumatismos_fracturas</td> ";
                        echo "<td class=''>$row->enfermedades_sistemicas</td> ";
                        echo "<td class=''>$row->menarca</td> ";
                        echo "<td class=''>$row->ultimo_periodo</td> ";
                        echo "<td class=''>$row->depresion</td> ";
                        echo "<td class=''>$row->observacion</td> ";
                        echo "<td> <a href='" . site_url('pacientes/EditarHistorialClinico/' . $row->id) . "'><button  type='button' class='btn btn-primary'><span class='glyphicon glyphicon glyphicon-refresh'></span></button></a>  </td> ";
//                        echo "<td> <button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash' data-toggle='modal' data-target='#myModal'></span></button> </td> ";
                       echo "<td> <a onclick='if(confirma() == false) return false' href='" . site_url('pacientes/eliminarHistorialPaciente/'.$row->id ). "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span></button></a>  </td> ";
//                      
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
                            <?php
                            echo "<a href='" . site_url('pacientes/eliminarPacientes/'.$row->id ). "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span> Eliminar</button></a>"
                            ?>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>-->


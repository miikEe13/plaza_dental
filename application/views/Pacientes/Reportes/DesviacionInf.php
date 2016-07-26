<div class="container">
      <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
       
    <?php
    }
    ?>
    <div class="row ">
        <div class="">
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 
                <h1 class="text-center alert-success">Analisis Desviación</h1>
                <thead> 
                    <tr class='success'> 
                        <th>Folio</th> 
                         <th>Nombre</th> 
                        <th>apellido Paterno</th>
                        <th>Apellido Materno</th> 
                        <th>oclusion Apertura</th> 
                        <th>oclusion Cierre</th>
                        <th>Terapias</th> 
                        <th>Luxacion</th> 
                        <th>Habitos Pemisiosos</th> 
                        <th>Frecuencia</th> 
                        <th>Tono Muscular Perioral</th>
                        <th>tono muscular facial</th> 
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr> 
                </thead> 
                <tbody>  
                    <?php
                    foreach ($query as $row) {
                        echo " <tr class=''> ";
                        echo " <th scope='row' class=''>$row->id</th> ";
                        echo "<td class=''>$row->nombre</td> ";
                        echo "<td class=''>$row->apellido_paterno</td> ";
                        echo "<td>$row->apellido_materno</td> ";
                        echo "<td>$row->oclusion_apertura</td> ";
                        echo "<td class=''>$row->oclusion_cierre</td> ";
                        echo "<td>$row->terapias</td> ";
                        echo "<td class='' >$row->luxacion</td> ";
                        echo "<td>$row->habitos_p</td> ";
                        echo "<td class=''>$row->frecuencia</td> ";
                        echo "<td>$row->tono_muscular_perioral</td> ";
                        echo "<td class=''>$row->tono_muscular_facial</td> ";
                        echo "<td> <a href='" . site_url('pacientes/EditarDesviacion/' . $row->id) . "'><button  type='button' class='btn btn-primary'><span class='glyphicon glyphicon glyphicon-refresh'></span></button></a>  </td> ";
//                        echo "<td> <a href='" . site_url('') . "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span></button></a>  </td> ";
                        echo "<td> <a onclick='if(confirma() == false) return false' href='" . site_url('pacientes/eliminarDesviacion/'.$row->id ). "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span></button></a>  </td> ";
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

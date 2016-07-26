<div class="container-fluid">
       <?php $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <script type="text/javascript">alert('<?php echo $correcto?>');</script>
  
    <?php
    }
    ?>
    <div class="row ">
        <div class="col-lg-12">
            <h1 class="text-center alert-success">Ficha Médica</h1>
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 
                <thead class="centered"> 
                    <tr class='success'> 
                        <th class="centered">Folio</th> 
                        <th>Nombre</th> 
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th> 
                        <th class="centered">somatotipo</th> 
                        <th>linea media</th>
                        <th>biotipo facial</th> 
                        <th>Simetria</th>
                        <th>perfil</th> 
                        <th>forma_facial</th> 
                        <th>nariz</th> 
                        <th>tercio facial superior</th>
                        <th>tercio Facial medio</th> 
                        <th>tercio facial inferior</th> 
                        <th>postura labial</th> 
                        <th>labio Superior</th> 
                        <th>labio inferior</th> 
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
                        echo "<td>$row->somatotipo</td> ";
                        echo "<td class=''>$row->linea_media</td> ";
                        echo "<td>$row->biotipo_facial</td> ";
                        echo "<td class='' >$row->simetria_facial</td> ";
                        echo "<td>$row->perfil</td> ";
                        echo "<td class=''>$row->forma_facial</td> ";
                        echo "<td>$row->nariz</td> ";
                        echo "<td class=''>$row->tercio_facial_superior</td> ";
                        echo "<td>$row->tercio_facial_medio</td> ";
                        echo "<td>$row->tercio_facial_inferior</td> ";
                        echo "<td class=''>$row->postura_labial</td> ";
                        echo "<td class=''>$row->labio_superior</td> ";
                        echo "<td class=''>$row->labio_inferior</td> ";
                        echo "<td> <a href='" . site_url('pacientes/EditarAnalisisFacial/' . $row->id) . "'><button  type='button' class='btn btn-primary'><span class='glyphicon glyphicon glyphicon-refresh'></span></button></a>  </td> ";
//                      echo " <td><a data-toggle='modal' href='#myModal' class='btn btn-danger btn-large'>X</a></td>";
////                        echo "<td> <button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash' data-toggle='modal' data-target='#myModal'></span></button> </td> ";
                         echo "<td> <a onclick='if(confirma() == false) return false' href='" . site_url('pacientes/eliminarAnalisisFacial/'.$row->id ). "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span></button></a>  </td> ";
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
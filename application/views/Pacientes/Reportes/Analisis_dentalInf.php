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
                <h1 class="text-center alert-success">Analisis Dental</h1>
                <thead> 
                    <tr class='success'> 
                        <th>Folio</th> 
                        <th>nombre</th> 
                        <th>apellido Paterno</th>
                        <th>Apellido Materno</th> 
                        <th>Gingival</th> 
                        <th>Mucosas</th>
                        <th>Amigdalas</th> 
                        <th>Paladar</th> 
                        <th>Piso Boca</th> 
                        <th>Frenillos</th> 
                        <th>Lengua</th>
                        <th>Tipo de Denticion</th> 
                        <th>Higiene Bucal</th> 
                        <th>Observaciones</th>
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
                        echo "<td>$row->gingival</td> ";
                        echo "<td class=''>$row->mucosas</td> ";
                        echo "<td>$row->amigdalas</td> ";
                        echo "<td class='' >$row->paladar</td> ";
                        echo "<td>$row->piso_boca</td> ";
                        echo "<td class=''>$row->frenillos</td> ";
                        echo "<td>$row->lengua</td> ";
                        echo "<td class=''>$row->tipo_denticion</td> ";
                        echo "<td>$row->higiene_bucal</td> ";
                        echo "<td class=''>$row->observaciones</td> ";
                        echo "<td> <a href='" . site_url('pacientes/EditarAnalisisDental/' . $row->id) . "'><button  type='button' class='btn btn-primary'><span class='glyphicon glyphicon glyphicon-refresh'></span></button></a>  </td> ";
                       echo "<td> <a onclick='if(confirma() == false) return false' href='" . site_url('pacientes/eliminarAnalisisDental/'.$row->id ). "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span></button></a>  </td> ";
//                        echo "<td> <button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash' data-toggle='modal' data-target='#myModal'></span></button> </td> ";
//                       
                        echo " </tr> ";
                    }
                    ?>
                </tbody> 
            </table>

        </div>

    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="status"  aria-hidden="true">
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
                    <!-- The form is placed inside the body of modal -->
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
</div>

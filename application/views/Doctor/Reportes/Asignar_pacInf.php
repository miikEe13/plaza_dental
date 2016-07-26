<div class="container">
    <div class="row ">
        <div class="">
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 
                <h1 class="text-center alert-success"> Pacientes Asignados </h1>
                <thead> 
                    <tr class='success'> 
                        <th>Folio</th>
                        <th class="centered">Doctor</th> 
                        <th>Paciente</th> 
                        <th>Fecha Registro</th>
                    </tr> 
                </thead> 
                <tbody>  
                    <?php
                    foreach ($query as $row) {
                        echo " <tr class=''>";
                        echo " <th scope='row' class=''>$row->id</th>";
                        echo "<td>$row->d_nombre $row->d_paterno $row->d_materno</td>";
                        echo "<td class=''>$row->p_nombre $row->p_paterno $row->p_materno</td>";
                        echo "<td>$row->fecha_registro</td> ";
                        echo " </tr> ";
                    }
                    ?>
                </tbody> 
            </table>

        </div>

    </div>
</div>


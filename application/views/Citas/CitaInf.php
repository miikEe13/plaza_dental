<div class="container">
    <div class="row ">
        <div class="">
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 
                <h1 class="text-center alert-success">Citas del Día</h1>
                <thead> 
                    <tr class='success'> 
                        <th>Folio</th>
                        <th>Doctor Nombre</th>
                        <th>Doctor Paterno</th>
                        <th scope="">Doctor Materno</th>
                        <th>Paciente Nombre</th>
                        <th>Paciente paterno</th>
                        <th>Paciente Materno</th>
                        <th>Fecha</th> 
                        <th>Hora</th>
                        <th>Editar</th> 
                        <th>Eliminar</th>
                    </tr> 
                </thead> 
                <tbody>  
                    <?php
                    foreach ($query as $row) {
                        echo " <tr class=''> ";
                        echo " <td scope='row' class=''>$row->id</td> ";
                        echo "<td>$row->d_nombre</td> ";
                        echo "<td class=''>$row->d_paterno</td> ";
                        echo "<td>$row->d_materno</td> ";
                        echo "<td>$row->p_nombre</th> ";
                        echo "<td>$row->p_paterno</td> ";
                        echo "<td class=''>$row->p_materno</td> ";
                        echo "<td scope='row' class=''>$row->fecha</td> ";
                        echo "<td scope='row' class=''>$row->hora</td> ";
                        echo "<td scope='row' class=''></td> ";
                        echo "<td scope='row' class=''></td> ";
                         echo " </tr class=''> ";
                    }
                    ?>
                </tbody> 
            </table>

        </div>

    </div>
</div>


<div class="container">
    <div class="row ">
        <div class="">
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 
                <h1 class="text-center alert-success"> Especialistas </h1>
                <thead> 
                    <tr class='success'> 
                        <th>Folio</th>
                        <th class="centered">Doctor</th> 
                        <th>Paterno</th> 
                        <th>Materno</th>
                        <th>Especialidad</th>
                        <th>Cedula</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                    </tr> 
                </thead> 
                <tbody>  
                    <?php
                    foreach ($query as $row) {
                        echo " <tr class=''>";
                        echo " <th scope='row' class=''>$row->id</th>";
                        echo "<td>$row->nombre</td>";
                        echo "<td class=''>$row->apellido_paterno</td>";
                        echo "<td>$row->apellido_materno</td> ";
                        echo "<td>$row->especialidad</td> ";
                        echo "<td>$row->cedula</td> ";
                        echo "<td>$row->celular</td> ";
                        echo "<td>$row->correo</td> ";
                        echo "<td>$row->contrasena</td> ";
                               echo " </tr> ";
                    }
                    ?>
                </tbody> 
            </table>

        </div>

    </div>
</div>
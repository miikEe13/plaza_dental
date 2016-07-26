
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 
                <h1 class="text-center alert-success">Ficha Médica</h1>
                <thead> 
                    <tr class='success'> 
                        <th>Folio</th> 
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
                    </tr> 
                </thead> 
                <tbody>  
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
                        echo " </tr> ";
                    }
                    ?>
                </tbody> 
            </table>

        </div>

    </div>

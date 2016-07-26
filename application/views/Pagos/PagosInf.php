<div class="container">
    <div class="row ">
        <div class="">
            <table class="table table-responsive table-striped table-bordered table-hover table-condensed "> 
                <h1 class="text-center alert-success">Pagos Registrado</h1>
                <thead> 
                    <tr class='success'> 
                        <th>Folio</th>
                        <th>Fecha</th> 
                        <th>cantidad</th> 
                        <th>id_doctor_paciente_tratamiento</th>
                    </tr> 
                </thead> 
                <tbody>  
                    <?php
                    foreach ($query as $row) {
                        echo " <tr class=''> ";
                        echo " <th scope='row' class=''>$row->id</th> ";
                        echo "<td>$row->fecha</td> ";
                        echo "<td class=''>$row->cantidad</td> ";
                        echo "<td>$row->id_doctor_paciente_tratamiento</td> ";
                    }
                    ?>
                </tbody> 
            </table>

        </div>

    </div>
</div>


<div class="col-lg-12">
    <h1 class="text-capitalize text-center text-success centered">Correo recordatorio</h1>
    <div class="row">
        <!--<form  accept-charset="utf-8" class="form-horizontal" method="post" action="" enctype="multipart/form-data" >-->
            <div class="col-lg-12">

                <div class="panel panel-success">
                    <div class="panel-heading center-block">
                        <h3 class="panel-title text-center"> Agregar los datos en el siguiente formulario</h3>    
                    </div>
                    <div class="panel-body">
                        <h2>Contacto</h2>
                        <form action="<?= base_url("Cita/enviar") ?>" method="post">
                         <br/>   Correo electronico: <input type="email" name="email" /><br/>
                         <br/>    Nombre: <input type="text" name="nombre" /><br/> 
                         <br/>  Asunto: <input type="text" name="asunto" value="Recordatorio Cita" /> <br/>
                          <br/>  Mensaje: <textarea name="mensaje">le recordamos que su cita es este proximo</textarea><br/>
                            <input type="submit" name="submit" value="Enviar"/>
                        </form>
                        <?php
                        if ($this->session->flashdata('envio')) {
                            echo $this->session->flashdata('envio');
                        }
                        ?>
                    </div> 
                </div>
            </div> 

        
    </div>
</div>
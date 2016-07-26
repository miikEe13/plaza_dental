<div class="container">
    <div class="row">
        <div class="col-xs-12">
             
            <img src="<?php echo base_url()."assets/imagenes/diente.png" ?>" class="center-block" style="width:500px;height:200px;" alt="">
              
        <div class="col-md-4 col-md-offset-4">
            <br>
            
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Porfavor Ingrese su correo y contraseña </h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url() ?>login/iniciar_sesion_post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                </label>
                            </div>
                           
                            <!-- Change this to a button or input when using this as a form -->
                           <br />
       <input type="submit" class="btn btn-lg btn-success btn-block" value="Iniciar sesión" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
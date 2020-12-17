<?php  Themes::getThemeHeader();?>
<div class="container">
       <div class="row mt-5 pt-5">
        <div class="col-lg-5">
            <div class="card card-login">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="login" name="signin-form" method="post">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="username" class="form-control" pattern="[a-zA-Z0-9]+" required>
                        </div>    
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Ingresar" >
                        </div>
                        <p>¿No tienes una cuenta? <a href="registrar">Regístrate ahora</a>.</p>
                    </form>
                    <div class="text-center">
                        <!--<a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
                    </div>
                </div>
                <div class="card-footer">
                    <?php echo $login_msj; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body p-5">
                    <h5 class="card-title text-center">DCGrupos</h5>
                    <p class="card-text pt-5">Aun no tiene una cuenta de DCGrupos?, <a href="registrar">registrese</a> ahora y empiece a disfrutar de nuestros servicios</p>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php Themes::getThemeFooter(); ?>
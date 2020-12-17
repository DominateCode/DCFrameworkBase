<?php  Themes::getThemeHeader(); ?>
<div class="container my-5">
    <div class="card card-login">
            <div class="card-header">Registrate</div>
                <div class="card-body">
                    <form action="registrar" method="post">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirmar Contraseña</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            <input type="reset" class="btn btn-default" value="Borrar">
                        </div>
                        <p>¿Ya tienes una cuenta? <a href="login">Ingresa aquí</a>.</p>
                    </form>
                    <div class="text-center">
                        <!--<a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
                    </div> 
                </div>
                <div class="card-footer">
                    <?php echo $registrar_msj; ?>
                </div>
            </div>

</div>
    <?php Themes::getThemeFooter(); ?>
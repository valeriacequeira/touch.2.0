<!-- formulario de registro -->
<?php 

include_once('funciones.php');

if ($_POST){

    $errores = validarRegistro($_POST);

    if (count($errores) == 0) {
       
        $usuario = buscarPorEmail($_POST ["emaiI"]);
        var_dump($usuario);

        if ($usuario != null) {
            $errores[] = "El mail ya se encuentra registrado.";
        }  else {
            $foto = armarImagen($_FILES["foto"]);
            $usuario = armarUsuario($_POST, $foto);
            guardarUsuario($usuario);

            header("Location:form_login.php");
            exit;
        }
    }
}
 ?>
<?php include_once("encabezado.php"); ?>
    <!-- body  -->
    <body>
        <ul>
            
            <?php if (isset($errores)): ?>
                <?php foreach ($errores as $key => $error): ?>
                    <li class= "alert alert-danger"><?=$error?></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>        
        
        
    	<div class="container h-100">
    		<div class="d-flex justify-content-center h-100">
    			<div class="user_card">
    				<div class="d-flex justify-content-center">
    					<div class="brand_logo_container">
    						<img src="imagen/logo_circulo.jpg" class="brand_logo" alt="Logo">
    					</div>
    				</div>
    				<div class="d-flex justify-content-center form_container">
    					
                        <form action="" method="post" enctype="multipart/form-data">
          <!-- input nombre -->
    						<div class="input-group mb-3">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-user"></i></span>
    							</div>
    							<input type="text" name="nombre" class="form-control input_user" value="" <?php persistir("nombre")?> placeholder= "Nombre y Apellido">
    						</div>
          <!-- input mail -->
                <div class="input-group mb-3">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                   <input type="text" name="email" class="form-control input_user" value=""<?=persistir("email")?> placeholder="Escribe tu Email">
                </div>


                <!-- input contraseña -->
                <div class="input-group mb-2">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="contrasena" class="form-control input_pass" value="" placeholder="Contraseña">
                </div>

            <!-- input confirmar contraseña -->
    						<div class="input-group mb-2">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-key"></i></span>
    							</div>
    							<input type="password" name="recontra" class="form-control input_pass" value="" placeholder="Confirmar Contraseña">
    						</div>

            <!--input foto-->

                           <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-images"></i></span>
                                </div>
                                <input type="file" name="foto" class="form-control input_pass" value="" placeholder="Selecionar Archivo">
                            </div>



            <!-- Recordarme -->
    						<div class="form-group">
    							<div class="custom-control custom-checkbox">
    								<input type="checkbox" class="custom-control-input" id="customControlInline">
    								<label class="custom-control-label" for="customControlInline">Recordarme</label>
    							</div>
    						</div>
    					<div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">Iniciar Sesión</button>
                    </div>
                        </form>
    				</div>

        <!-- iniciar sesion -->
    				

    				<div class="mt-4">
    					<div class="d-flex justify-content-center links">
    						¿No tienes cuenta? <a href="form_registro.php" class="ml-2">Registrate</a>
    					</div>
    					<div class="d-flex justify-content-center links">
    						<a href="#">¿Olvidaste tu contraseña?</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>





   

  </body>
</html>

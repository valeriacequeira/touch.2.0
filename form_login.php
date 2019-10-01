
<?php 


require_once("funciones.php");

// constata que el mail este registrado y que coincidan las contraseñas

if ($_POST) {
    $errores = validarlogin($_POST);
var_dump($errores);
    if (count($errores)==0) {
        
        $usuario = buscarPorEmail($_POST["email"]);
        inicioSesion($usuario);

        header("Location:perfil.php");
    }
}


require_once("encabezado.php");
 ?>




    </head>

    <!-- body  -->
    <body>
    	<div class="container h-100">
    		<div class="d-flex justify-content-center h-100">
    			<div class="user_card">
    				<div class="d-flex justify-content-center">
    					<div class="brand_logo_container">
    						<img src="imagen/logo_circulo.jpg" class="brand_logo" alt="Logo">
    					</div>
    				</div>
    				<div class="d-flex justify-content-center form_container">
    					<form action="form_login.php" method="post">
    						<div class="input-group mb-3">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-user"></i></span>
    							</div>
    							<input type="email" name="email" class="form-control input_user" value="" placeholder="usuario">
    						</div>
    						<div class="input-group mb-2">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-key"></i></span>
    							</div>
    							<input type="password" name="contrasena" class="form-control input_pass" value="" placeholder="Contraseña">
    						</div>
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

<!-- comineza  footer -->

<?php require_once("footer.php"); ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

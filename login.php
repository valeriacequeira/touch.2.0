<?php 

require_once("funciones.php");

// constata que el mail este registrado y que coincidan las contraseñas

if ($_POST) {
	$errores = validarlogin($_POST);

	if (count($errores)==0) {
		$usuario = buscarPorMail($_POST["email"]);
		inicioSesion($usuario);

		header("Location:perfil.php");
	}
}

 ?>
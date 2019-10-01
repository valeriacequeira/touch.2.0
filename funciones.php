
<?php 

session_start();

function validarRegistro($datos){
	$errores = [];
	if ($datos) {
		if(strlen($datos["nombre"])==0) {
			$errores[] = "El campo nombre se encuentra vacio.";			
		}
	    if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
		$errores[] = "El email tiene un formato incorrecto.";
	}
	    if (strlen($datos["contrasena"])<=8) {
	  	$errores[] ="La contrasena tiene menos de 8 caracteres.";
	  }

	    if ($datos["contrasena"] != $datos["recontra"]) {
		$errores[] = "Las contrasenas no coinciden";
	}
	
	if ($_FILES != null){
		if ($_FILES["foto"]["error"]!=0) {
			$errores["foto"] = "No recibi la imagen.";
		}
    

    
    $nombimg = $_FILES["foto"]["name"];
    $ext = pathinfo($nombimg, PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext !="jpeg" && $ext != "png"){
    	$errores["foto"] = "La extension del archivo es incorrecto";
    }
  }
 }
 return $errores;
}

//validar login

 function validarLogin($datos){
 	$errores = [];
 	$usuario = buscarPorEmail($datos["email"]);
 	if($usuario == null){
 		$errores[]= "Usuario no se encuentra registrado";
 	}
    if (password_verify($datos["contrasena"], $usuario["contrasena"])== false) {
    	$errores[]= "La contrasena es incorrecta";
    }
 	return $errores;
 }

 // armar usuario

 function armarUsuario($datos,$imagen){

 	$contraHash = password_hash($datos["contrasena"], PASSWORD_DEFAULT);

    $usuario =[
       "nombre" => $datos["nombre"],
       "email" => $datos["email"],
       "contrasena" => $contraHash,
       "foto" => $imagen,
    ];
  return $usuario;
 }


 // guardar usuario

 function guardarUsuario($usuario){
 	$json = json_encode($usuario);
 	file_put_contents("usuarioas.json",$json. PHP_EOL, FILE_APPEND);
 }

 function persistir($input){
 	if(isset($_POST[$input])){
 		return $_POST[$input];
 	}
 }

 // traer base de datos

 function abrirBaseDatos(){
 	if(file_exists("usuarioas.json")){
 		$baseDatosJson = file_get_contents("usuarioas.json");
 		$baseDatosJson = explode(PHP_EOL, $baseDatosJson); 
 		array_pop($baseDatosJson);

 		foreach ($baseDatosJson as $usuario) {
 			$arrayUsuario[]= json_decode($usuario,true);			
 		}
 	    return $arrayUsuario;
 	}else{
 		return null;
 	}
 }
 function buscarPorEmail($email){
 	$baseDeDatos = abrirBaseDatos();
 	
 	foreach ($baseDeDatos as $numero => $usuario) {
 		if ($email === $usuario["email"]) {
 			return $usuario;
 		}
 }
 	return null;
 
 }

 
 function armarImagen($imagen){
 	$nombre = $_FILES["foto"]["name"];
 	$ext = pathinfo($nombre, PATHINFO_EXTENSION);


 	
 	$archivoOrigen = $_FILES["foto"]["tmp_name"];
 	$rutaDestino = dirname(__file__);
 	$rutaDestino = $rutaDestino."/fotosPerfil/";
 	$nombreImg = uniqid();
 	$rutaDestino = $rutaDestino . $nombreImg . "." . $ext;
 	move_uploaded_file($archivoOrigen, $rutaDestino);
 	return $nombreImg . "." . $ext;
 }


 // inicio sesion

 function inicioSesion($usuario){
 	$_SESSION["nombre"] = $usuario["nombre"];
 	$_SESSION["email"] = $usuario["email"];
 	$_SESSION["contrasena"] = $usuario["contrasena"];
 	$_SESSION["foto"] = $usuario["foto"];
 }
 ?>
<?php

class Validador{
     public function validarRegistro($datos){
     $errores = [];
     if ($datos) {
      if (strlen($datos["nombre"])==0) {
        $errores[] = "El campo nombre se encuentra vacio";
      }

      if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email tiene un formato incorrecto";
      }
      if (strlen($datos["contrasena"])<=6) {
        $errores[] ="La contraseña tiene menos de 6 caracteres";
      }
      if ($datos["contrasena"] != $datos["confirmar"]) {
        $errores[] = "Las contraseñas no coinciden";
      }
      // En esta seccion utilizo la  variable FILES para validar que la imagen que caegó el usuario haya llegado de forma correcta y tenga la extension correspondiente.
        if ($_FILES != null){
        if ($_FILES["foto"]["error"]!=0){
           $errores["foto"] = "No recibi la imagen";
        }
        $nombimg = $_FILES["foto"]["name"];
        $ext = pathinfo($nombimg, PATHINFO_EXTENSION);
        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
          $errores["foto"] = "La extension del archivo es incorrecto";
        }
      }
    }
    return $errores;
  }
  public function validarLogin($usuario,$datos){
    $errores = [];
       if ($usuario == null) {
       $errores[] = "Usuario no se encuentra registrado";
    }  if (password_verify($datos["contrasena"], $usuario["contrasena"]) == false) {
        $errores[] = "La contrasenia es incorrecta";
      }
    // La funcion retorna los errores
    return $errores;
  }
  public function inicioSesion($usuario,$datos){
    $_SESSION["nombre"] = $usuario["nombre"];
    $_SESSION["contrasena"] = $usuario["contrasena"];
    $_SESSION["email"] = $usuario["email"];
    $_SESSION["foto"] = $usuario["foto"];
    if (isset($datos["recordar"])) {
      //cookies
      setcookie("email",$usuario["email"],time()+3600);
      setcookie("contrasena",$datos["contrasena"],time()+3600);
    }
  }
  // public function validarContra($datos, $usuario){
  //   if(password_verify($datos["contrasenia"], $usuario["contrasena"]) == false){
  //   $errores[] = "El contrasena es incorrecto";
  // }
  // // La funcion retorna los errores
  // return $errores;
  // }
  //}

  // Utilizando la funcion buscarPorEmail la cual me va a devolver toda la informacion del usuario (nombre, apellido, email, avatar) en forma de array que en este caso se lojara en la variable $usuario.
  // En este if evaluo si la funcion buscarPorEmail no me trajo ningun usuario le voy a retornar que no e encontro ningun usuario.

  // En este if utilizando la funcion password_verify le paso lo ingresado por el usuario en el formulario y lo que se encuentra en la posicion contrasenia del usuario buscado. Esta funcion retorna true si ambas contraseñas coinciden y false si no coin ciden. En caso de ser false retornara que la contraseña es incorrecta.

?>

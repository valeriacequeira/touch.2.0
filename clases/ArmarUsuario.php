<?php
class ArmarUsuario{
  public static function armarImagen($imagen){
      $nombre = $imagen["foto"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
      $archivoOrigen = $imagen["foto"]["tmp_name"];
      $rutaDestino = dirname(__DIR__);
    $rutaDestino = $rutaDestino."/fotos/";
      $nombreImg = uniqid();
      $rutaDestino = $rutaDestino.".".$nombreImg.".".$ext;
      move_uploaded_file ($archivoOrigen, $rutaDestino);
      return $nombreImg.".".$ext;
  }
  public static function armarUsuario($datos, $imagen){
    $contraHash = password_hash($datos["contrasena"], PASSWORD_DEFAULT);
    $usuario = new Usuario($datos["nombre"], $datos["email"], $contraHash,  $imagen);
    return $usuario;
  }
}

//PSF IMG: Aca se guarda el nombre con el que, el usuario subio su archivo en la variable nombre para despues, utilizando la funcion pathinfo poder extraer la extension del archivo.
//EXT: En la variable $archivoOrigen se guarda el archivo temporal en donde se encuentra guardaba la imagen en el servidor.
// IMG:La variable $rutaDestino va a contener toda la ruta hasta la carpeta donde guardaremos la imagen que suba el usuario.
//* La funcion dirname(__DIR__) nos va a devolver la ruta exacta hasta la carpeta raiz del archivo que estamos utilizando en este momento.
//* A esa ruta le agregué la carpeta fotos que va a ser la carpeta donde se guardaran estas imagenes
//RUTA: Utilizando la funcion uniqid() php va a crearle un nombre unico a mi imagen
//* En esta parte voy a guardar la ruta final de mi archivo que va a ser la ruta hastala carpeta fotos y ahi voy a ponerle el nombre creado en el paso anterios y ponerle la extension del archivo que la separe en los primeros pasos.
//RUTADEST: Voy a subir el archivo que se encuentra en el tmp_name(que se guardo en la variable $archivoOrigen) en la ruta final creada en el paso anterior.
// MOVE_La funcion retornara el nombre final de la imagen con su extension.

 ?>

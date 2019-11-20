<?php
  session_star();
  require_once('clases/ArmarUsuario.php');
  //require_once('clases/BaseDatos.php');
  require_once('clases/cookies.php');
  require_once('clases/BaseMYSQL.php');
  require_once('clases/Usuario.php');
  require_once('clases/Validador.php');

  $validador = new Validador();

$bd= 'Touch2.0';
$host = 'localhost';
$puerto= 3306;
$usuario= 'root';
$contrasena = '';

$baseDeDatos = BaseMYSQL::conexion($bd, $host, $puerto, $usuario, $contrasena);
// var_dump($baseDeDatos);




 ?>

<?php //base de datos//
  class BaseMYSQL extends BaseDatos{

  public static function conexion($bd, $host, $puerto, $usuario, $contrasena){
  //$dsn = "mysql::host=$host;bdname=$bd;port=$puerto";
  try {
   $dsn = "mysql::host=$host;dbname=$db;port=$puerto";
   $pdo = new PDO($dsn, $usuario, $contrasena);
   return $pdo;
 }
   catch (\Exception $e){
   return $e->getmessage();

}
//buscar por email
static public function buscarporemail($ususario, $pdo, $email){
  $sql = "SELECT * from $usuario WHERE email = :email";
  $query = $pdo->prepare($sql);
  $query->bindvalue(':email', $email);
  $query->execute();
  $usuario = $query->fetchALL(PDO::FETCH_ASSOC);
  return $usuario;
}
//guardar usuario
  static public function guardarUsuario($pdo, $usuario, $busqueda){
  $consulta = "INSERT INTO usuarios VALUES(defaul, :nombre, :email, :contrasena, :foto)";
  $insertarusuario = $pdo->prepare($consulta);
  $insertarusuario->bindvalue(':nombre', $usuario->getnombre());
  $insertarusuario->bindvalue(':email', $usuario->getemail());
  $insertarusuario->bindvalue(':contrasena', $usuario->getcontrasena());
  $insertarusuario->bindvalue(':foto', $usuario->getfoto());
  $insertarusuario->execute();
  }
}
?>

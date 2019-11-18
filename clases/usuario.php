<?php

class usuario {
    private $nombre;
    private $email;
    private $contrasena;
    private $foto;

public function _construct($nombre, $email, $contrasena, $foto ){
  $this->nombre = $nombre;
  $this->email = $email;
  $this->contrasena = $contrasena;
  $this->foto = $foto;
}
/**get y set **/
 public function getnombre(){
 return $this->nombre;
}
  public function setnombre($nombre){
  $this->nombre = $nombre;
  return $this;
}

 public function getemail(){
 return $this->email;
 }
  public function setemail($email){
  $this ->email =$email ;
  return $this;
}

 public function getcontrasena()
{  return $this->contrasena;
}
 public function setcontrasena($contrasena)
{   $this-> = $contrasena;
    return $this;
}

public function getfoto(){
return $this->foto;
}
  public function setfoto(){
  $this->foto = $foto;
  return $foto;
   }
}

 ?>

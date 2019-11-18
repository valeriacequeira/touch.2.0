<?php
class cookie{
  public function login($datos){
  setcookie('email', $datos["email"], time())+3600;
  }
}

 ?>

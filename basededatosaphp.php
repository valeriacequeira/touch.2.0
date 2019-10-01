<?php 

 function abrirBaseDatos(){
 	if (file_exists("usuarios,json")) {
 			$baseDatosJson= file_get_contents("usuarios.json");
 			echo "1-<pre>";
 			var_dump($baseDatosJson);
 			echo "</pre> <br>";
 			
 			$baseDatosJson= explode(PHP_EOL, $baseDatosJson);
 			echo "2- <pre>";
 			var_dump($baseDatosJson);
 			echo "</pre> <br>";

 			 //sacar el ultimo (vacio)
 			array_pop($baseDatosJson);
 			echo "3- <pre>";
 			var_dump($baseDatosJson);
 			echo "</pre> <br>"; 

            foreach ($baseDatosJson as $usuarios) {
            	$arrayUsuarios[]= json_decode($usuarios,true);
            }

 			echo "4- <pre>";
 			var_dump($arrayUsuarios);
 			echo "</pre> <br>";	
 			
 			return $arrayUsuarios;	
 	   }else{
 			return null;
 		}
}

var_dump(abrirBaseDatos());
 ?>
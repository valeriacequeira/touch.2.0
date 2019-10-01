<?php 

if (file_exists("usuarios.json")) {
	$json = file_get_contents("usuarios.json");

	$datosArray = explode(PHP_EOL, $json);
	array_pop($datosArray);
	foreach ($datosArray as $nuemro => $json) {
		$arrayUsuarios[] = json_decode($json,true);
	}

}else{
	echo "El archivo no existe.";
}

 ?>
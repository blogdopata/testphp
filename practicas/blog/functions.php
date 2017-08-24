<?php 

function conexcion($bd_cofing){

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=blog_practica','root','');
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function limpiarData($datos){
	$datos = trim($datos); 
	$datos  = stripslashes($datos);
	$datos  = htmlspecialchars($datos);
	return $datos;
}


 ?>
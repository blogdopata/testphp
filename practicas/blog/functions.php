<?php 

function conexcion($bd_cofing){

	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'],$bd_config['user'],$bd_pass['pass']);
		return $conexion;

	}catch (PDOException $e) {
		return false;
	}
}

function limpiarData($datos){
	$datos = trim($datos); 
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}
function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 0;
}
function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0 ;
}



 ?>
<?php 
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location:error.php');
}

if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
	$busqueda = limpiarData($_GET['busqueda']);

	$statement = $conexion->prepare(
		'SELECT * FROM articulos WHERE titulo like :busqueda or texto LIKE :busqueda'
		);
	$statement-> execute(array(':busqueda'=>"%$busqueda%"));
	$resultados = $statement->fetchAll();

	if (empty($resultados)) {
		$titulo = 'No se encontraron artiuclos con el resultado ' . $busqueda;
	}else{
		$titulo = 'Resultado de la busqueda:' . $busqueda ;
	}
 } else {
 	 header('Location:index.php');
 }
 require 'views/buscar.view.php';
?>
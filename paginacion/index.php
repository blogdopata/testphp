<?php 
try {
	$conexion = new PDO('mysql:host=localhost;dbname=paginacion','root','');
		



} catch (PDOException $e) {
	echo "ERROR:  " . $e->getMessage();
	die();
}

// ver si la variable pagina esta seteada 
//significa que si ttiene valor
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina']:1;

$postPorPagina = 10 ;
$inicio = ($pagina>1) ? ($pagina*$postPorPagina - $postPorPagina) : 0 ;

$articulos =  $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * from articulos limit $inicio,$postPorPagina");

$articulos->execute();
$articulos = $articulos->fetchAll();

print_r($articulos);

if(!$articulos){
	header('locaion:http://localhost/testPHP/paginacion/');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];
//echo $totalArticulos cantidad d articulos;

$numeroPaginas = ceil($totalArticulos/$postPorPagina);

echo $numeroPaginas;

require 'index_view.php';

?>
<?php 
session_start();
//  if ($_SESSION) --> existe una sesion
if ($_SESSION){
	$nombre = $_SESSION['nombre'];
	echo "<h1> Hola , $nombre";
} else{
	echo "NO ha iniciado sesiòn";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina2</title>
</head>
<body>
	
	<a href="cerrar.php">Cerrar sesiòn</a>
</body>
</html>
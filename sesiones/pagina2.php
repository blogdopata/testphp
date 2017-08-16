<?php 
session_start();
//  if ($_SESSION) --> existe una sesion
if (!empty($_SESSION)){
	$nombre = $_SESSION['nombre'];
	$edad = $_SESSION['edad'];
	echo "<h1> Hola , $nombre <br/>" ;
	echo "<h2> d edad: $edad</h2>";
	print_r($_SESSION);

	

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
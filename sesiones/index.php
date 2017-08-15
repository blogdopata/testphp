<?php 
session_start();

$_SESSION['nombre'] = 'Victor';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SESSION</title>
</head>
<body>
	<h1>Pagina inicio</h1>
	<p></p>
	<a href="pagina2.php">Go page 2</a>
</body>
</html>
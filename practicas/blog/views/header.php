<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog Test</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo RUTA; ?>css/style.css">
</head>
<body>
<header>
	<div class="contenedor">
		<div class="logo izquierda">
			<p><a href="<?php echo RUTA;?>">TestPHP</a></p>
		</div>

		<div class="derecha">
			<form name="busqueda" class="buscar"action="<?php echo RUTA;?>/buscar.php" method="get">
				<input type="text" name="busqueda" placeholder="Buscar">	
				<button type="submit" class="icono fa fa-search"></button>
			</form>
			<nav class="menu">
				<ul>
					<li>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#"><i class="icono fa fa-envelope"></i></a>	</li>
				</ul>

			</nav>
		</div>
	</div>
</header>
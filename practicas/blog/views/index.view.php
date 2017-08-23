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

<?php require 'views/header.php'; ?>
<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Titulo del articulo</h2>
			<p class="fecha"></p>1 de Enero del  2016
			<div class="thumb">
				<a href="#"><img src="<?php echo RUTA;?>/imagenes/1.png" alt=""></a>
			<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, tempora!</p>
			<a href="#" class="continuar">Continuar leyendo</a>

			</div>

		</article>
	</div>

	<div class="post">
		<article>
			<h2 class="titulo">Titulo del articulo</h2>
			<p class="fecha"></p>1 de Enero del  2016
			<div class="thumb">
				<a href="#"><img src="<?php echo RUTA;?>/imagenes/1.png" alt=""></a>
			<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, tempora!</p>
			<a href="#" class="continuar">Continuar leyendo</a>

			</div>

		</article>
	</div>

	<?php require 'paginacion.php'; ?>
</div>

<?php require 'views/footer.php'; ?>
	
</body>
</html>
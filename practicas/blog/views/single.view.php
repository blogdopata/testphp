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
			</div>
			<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ullam dicta sed, asperiores eos quo sint quibusdam ad, impedit qui dolore repellat, error repellendus laborum unde. Enim voluptatum totam maiores? <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quibusdam amet cumque consequuntur eos vel eveniet sapiente fugit nobis sequi quos iusto necessitatibus nesciunt voluptatem laboriosam vitae, rerum quo harum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit obcaecati assumenda quo ut quod culpa cupiditate atque, ipsa nostrum, consequuntur minima rerum. Praesentium eaque, iste culpa aut optio nobis harum.</p>

		</article>
	</div>



<?php require 'views/footer.php'; ?>
	
</body>
</html>
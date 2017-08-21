<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galeria</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<body>
<header>
	<div class="contenedor">
		<h1 class="titulo">Subir foto</h1>
	</div>
</header>	
<div class="contenedor">
	<form action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]) ; ?>" class="formulario" method="post" enctype="multipart/form-data">
		<label for="foto">Selecciona tu foto</label>
		<input type="file" id="foto" name="foto">
		
		<label for="titulo">Titulo d la foto</label>
		<input type="text" id="titulo" name="titulo">

		<label for="texto">Descripciòn</label>
		<textarea name="texto" id="texto" placholder="ingresa una descripcion"></textarea>

		<input type="submit" class="submit" valu="Subir foto">

	</form>



</div>
<footer>
	<p class="copyright">Galeria Creada por Victor Caballero</p>

</footer>



	
</body>
</html>
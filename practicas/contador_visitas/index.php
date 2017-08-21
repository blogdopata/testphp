<?php 

function contar_users(){
	$archivo = 'contador.txt';
	if(file_exists($archivo)){
		// trae el contenido d $archivo a la var cuenta
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta);
		return $cuenta;

	}else {
		// Crea un nuevo archivo 
		file_put_contents($archivo, 1);
		return 1;
	}
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Contador d visitas</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<h1>Contador de visitas</h1>
 	<div class="visitantes">
 		<p class="numero"><?php echo   contar_users() ; ?></p>
 		<p class="texto">Visitas</p>
 	</div>
 </body>
 </html>
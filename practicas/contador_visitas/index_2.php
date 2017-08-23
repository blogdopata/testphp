<?php 
function contar_user(){
$archivo = "cuenta.txt";

if(file_exists($archivo)){
	$cuenta = file_get_contents($archivo)+1;
	file_put_contents($archivo, $cuenta);
	return $cuenta;
}else{
	$cuenta = file_put_contents($archivo, 1);
	return $cuenta;
}
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Conta</title>
 	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<h1>Contador de visitas</h1>
 	<div class="visitantes">
 		<p class="numero"><?php echo   contar_user() ; ?></p>
 		<p class="texto">Visitas</p>
 	</div>
 </body>
 </html>
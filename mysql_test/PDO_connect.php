<?php 
$id = $_GET['id'];

// USAR METODO QUERY CUANDO NO SE USE VARIBALES QUE EL CLIENTE PUEDA MODIFICAR
echo "esta es la IDE $id <br/>" ;
try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root','');
	/*echo "Nos conectamos chicho <br/>";*/

	/* $resultados = $conexion->query('INSERT into usuarios values (null,"kaike","kaike@yahoo.es")')*/

	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id =$id") ;

	foreach ($resultados as $fila) {
		 echo $fila['id'] .' - '. $fila['nombre'] . 'con mail: ' . $fila['email'] .'<br/>';
	}

} catch (PDOException $e) {
	echo "ERROR:" . $e->getMessage(); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TEST MYSQL</title>
</head>
<body>
	
</body>
</html>
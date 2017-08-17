<?php 

/* YA NO FUNCION PARA PHP VERSION 7 */
$miConexion = mysql_connect('localhost','root','') or die('No se pudo conectar a la BD');

mysql_select_db('prueba_consola', $miConexion);

// `puedes ejecutar cualquier consulta
$resultados=mysql_query('SELECT * FROM usuarios');

// $fila = mysql_fetch_object($resultados);
// echo $fila->nombre;

while($filta=mysql_fetch_object($resultados)){
	echo $fila->nombre;
	echo "<br/> "
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
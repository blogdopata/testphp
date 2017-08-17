<?php 

$id= $_GET['id'];
try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root','');
	// Prepared Statemens (evitar q el user inyecte codigo)

	$statement=$conexion->prepare('select * from usuarios');
	$statement->execute();
	
	$resultados = $statement->fetchall();
	foreach ($resultados as $fila) {
		echo $fila['nombre'] . '<br>' ;
		# code...
	}

} catch (PDOException $e) {
	echo "ERROR:" . $e->getMessage(); 
}



//  Para listar el contenido de nuestra BD 
// metodo fetch trae un valor - fetch all traer todo

// $id= $_GET['id'];
// try {
// 	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root','');
// 	// Prepared Statemens (evitar q el user inyecte codigo)

// 	$statement=$conexion->prepare('select * from usuarios');
// 	$statement->execute(
// 		array(':id' => $id)
// 		);
// 	$resultados = $statement->fetchAll();
		
// 		foreach ($resultados as $usuarios) {
// 			echo $usuarios['nombre'] . '<br/>';
// 		}
	


// } catch (PDOException $e) {
// 	echo "ERROR:" . $e->getMessage(); 
//}

// ----------------------*-------------------
// Para traer un solo valor d ela BD usando 
// placeholder 

// $id= $_GET['id'];
// try {
// 	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root','');
// 	// Prepared Statemens (evitar q el user inyecte codigo)

// 	$statement=$conexion->prepare('select * from usuarios where id= :id');
// 	$statement->execute(
// 		array(':id' => $id)
// 		);
// 	$resultados = $statement->fetch();
// 	 echo '<pre>';
// 	 print_r($resultados);
// 	 echo "</pre>'";	
	


// } catch (PDOException $e) {
// 	echo "ERROR:" . $e->getMessage(); 
// }



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
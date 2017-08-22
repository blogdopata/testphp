<?php 

function conexion($bdatos,$usuario,$pass){

	try {
		$conexion = new PDO("mysql:local=localhost;dbname=$bdatos",$usuario,$pass);
		return $conexion;
	} catch (PDOException $e) {
		
		return false;
	}

}


 ?>
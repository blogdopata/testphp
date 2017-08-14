<?php 
	function areaTriangle($base, $altura){
		$resutaldo = ($base* $altura)/2;
		
		return $resutaldo;
	}

	function mostrar($resultado){
		echo '<h1>' . $resultado . '</h1>';
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>

<?php 

	$resultado = areaTriangle(10,15);
	mostrar($resultado);
	
?>


</body>
</html>
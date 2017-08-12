<?php 


	function suma($num1, $num2){
		$resutaldo = $num1 + $num2;
		
		return $resutaldo;
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

	
	$resultado = suma(10,15);

	echo $resultado + 5;



?>
</body>
</html>
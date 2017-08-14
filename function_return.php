<?php 
	function suma($num1, $num2){
		$resutaldo = $num1 + $num2;
		
		return $resutaldo;
	}
	function saludo($nam1){

		return "SALUDO $nam1";
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

	echo "$resultado" + 5 . "<br />"; 

	echo saludo("victor") . '<br/>';
	echo saludo("jose") . '<br/>';
?>


</body>
</html>
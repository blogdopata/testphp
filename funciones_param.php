<?php 
	function saludo( $user){
		echo "Saludo, $user! ";
	}

	function suma($num1, $num2){
		$resutaldo = $num1 + $num2;
		echo $resutaldo;
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
	saludo("jose");
	echo "<br />";
	suma(4,4);
	echo "<br />";
	suma(2,3);
	echo "<br />";
	suma(10,5);

?>
</body>
</html>
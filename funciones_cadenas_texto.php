<?php 
	$texto = '<b> hola</b>' . ' <br />';
	$texto2 = "  GeNTE";
	echo htmlspecialchars($texto); // , muestra *caractecres del html
	echo trim($texto2) . '<br/>'; // elmina spacios en blanco
	echo strlen($texto2) . '<br/>'; //cuenta caracteres
	echo substr($texto2, 1,2). '<br/>'; // de donde inicia a donde termina
	echo strtoupper($texto2). '<br/>';// a mayucuslas
	echo strtolower($texto2). '<br/>';//a  minusculas
	echo strpos($texto2,'e'). '<br/>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>

<?php 

	
?>


</body>
</html>
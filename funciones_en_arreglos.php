<?php 
	$amigo = array(
		'telef'=> 656565,
		'edad' => 20,
		'pais'=>'Peru'
		);
	extract($amigo); // permite estraer valores del aarray y mostrarlos indepedientemente 
	//echo $pais;
/* ---------------------  */
	$ultim_valor = array_pop($amigo); //retira el ultimo valor del array

	foreach ($amigo as $data) {
		echo $data . '<br/>';
	}

	echo join(' - ',$amigo); //separa elementos con guion del array o lo que le pongas

	$semana = array(
      "Lunes",
      "Martes",
      "Miercoles",
      "Jueves"
);
	$semana_rev = array_reverse($semana);

	echo join (' - ', $semana_rev);
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
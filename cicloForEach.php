<?php 
	 $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

	 $alejandro = array(
	 	'tel' => 993644747,
	 	'edad' => 20,
	 	'pais' => "perukistan"
	 	);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>
<h1>Meses</h1>
	<ul>
		<?php 
		foreach ($meses as $mes) {
			echo '<li>' . $mes . '</li>';
		}

		foreach ($alejandro as $dato => $valor) {
			 echo '<li>' . $dato . ' : ' . $valor. '</li>';
		}
		?>
	</ul>

</body>
</html>
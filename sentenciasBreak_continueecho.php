<?php 
	 $paises = array(
	 	'Mex',
	 	'Per',
	 	'Col',
	 	'Ven',
	 	'Uru',
	 	'Chi',
	 	'Esp'
	 	);

	 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>
<h1>Paises</h1>
	<ul>
		<?php 
		foreach ($paises as $pais) {
			
			if($pais == 'Per'){
				break;
			}
			echo '<li>' . $pais . '</li>';
		}
 	// BREAK CORTA EL CICLO  Y SALE
		
		?>
	</ul>

	<h1> Paises Latam</h1>
	<?php 
	// CONTINUE SALTA EL CICLO PASANDO A LA SGT ITERACION
		foreach ($paises as $pais) {
			if ($pais == 'Esp'){
				continue;
			}
			echo $pais . '<br />';
			
		}
	?>

</body>
</html>
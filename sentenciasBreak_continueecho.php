<?php 
	 $paises = array(
	 	'Mex',
	 	'Per',
	 	'Col',
	 	'Ven',
	 	'Uru',
	 	'Chi'
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
			echo '<li>' . $pais . '</li>';
			if($pais == 'Per'){
				break;
			}
		}

		
		?>
	</ul>

</body>
</html>
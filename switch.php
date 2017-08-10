
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>

<?php 
$mes ="eneero";

switch ($mes){
	case 'diciembre':
		echo "feliz navi";
	case 'enero':
		echo "feliz enero";
	break;

	default:
	// se ejecuta si no hay ningun case
	echo "este mes no celebramos ";
}


?>

</body>
</html>
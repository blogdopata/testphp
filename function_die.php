<?php
// FUNCTION DIE NOS SIRVE MATAR LA EJECUCION DE LA PAGINA X COMPLETO
echo "Soy un ECO";
//var_dump($variable); 

// SE ESTILA USARLA PARA VER COMO VA CIERTA EJECUCIO HASTA ESE PUNTO

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TEST</title>
</head>
<body>
	ESTE TEXTO NO VA A SALIR XQ  USAS DIE 
	ME MATASTE 
<?php die();?>
<h1>haha</h1>
</body>
</html>

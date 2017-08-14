<?php
$errores = '';
if(isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$mail = $_POST['correo'];

//si no esta vacia la var $nombre
	if(!empty($nombre)){
		$nombre = trim($nombre);/*quita space in-fin*/
	/*	$nombre = htmlspecialchars($nombre);*/
		$nombre = stripslashes($nombre);/*quita \ /*/
/*filter_var() Remueve la inyeccion d etiquetas pero deja los caractecres*/
		$nombre=filter_var($nombre,FILTER_SANITIZE_STRING);
			echo "tu nombre es : $nombre <br/>";
	}else {
		$errores.= 'Por favor agrega un nombre <br/> ';
	}

	if(!empty($mail)){
/*FILTER_SANITIZE_EMAIL --> Remove all illegal characters from email*/
		$mail=filter_var($mail,FILTER_SANITIZE_EMAIL);

/*FILTER_VALIDATE_EMAIL --> verifica que tenga el @*/
		if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
			$errores .= 'Xfa ingresa un mail valido <br />';
		}else{
			echo  "tu email es : $mail <br/>";
		}
			
	}else{
		$errores .= 'Por favor add un mail' ;
	}
		
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TEST</title>
<style>
	.error{
		color: red;
	}

</style>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
	<input placeholder="Nombre" type="text" name="nombre">
 	<br>
 	<input placeholder="Correo" type="text" name="correo">
	<br>
	<!-- Si no esta vacion nuestra var $errores ejecuta lo de dentro del if -->
	<?php if(!empty($errores)):?>
		<div class="error">
			<?php echo $errores; ?>
		</div>

	<?php endif;?>


	<input type="submit" name="submit" vale="enviar">
</form>

</body>
</html>
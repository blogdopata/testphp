<?php 

$errores = "";
$enviado = "";

// Si esta definida
if(isset($_POST['submit'])){
	
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$mensaje = $_POST['mensaje'];

	if(!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
		echo "$nombre  <br />";
	}else{
		echo "Ingresa algun nombre <br />";
		$errores.= "Debe Ingresar un nombre valido <br/>";
	}

	if(!empty($mail)){
		$mail = filter_var($mail,FILTER_SANITIZE_EMAIL);

		if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
			echo "ingrese un email valido con @";
			$errores.="ingrese un email valido con @ <br/>";
		}	
		echo "Email a enviar $mail <br/>"  ;
	}else {
		echo "No ha ingresado nada en email<br />";
			$errores.="No ha ingresado nada en email <br/>";
	}
	if(empty($mensaje)){
		echo "ingrese algun mensaje";
		$errores.= "ingrese algun mensaje <br>";
	}else{
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripcslashes($mensaje);

		echo "Mensaje a enviar: $mensaje <br/> ";;
	}
	// if($errores){ si hay errores EJECUTA} 

	//if(!$errores){ Si NO HAY ERRORES EJECUTA}
	if(empty($errores)){ // valida si es 1 - 0 , true or false
		echo "listo para enviar"	;
		$enviar_a = "vcaballero_c@usmp.pe";
		$asunto = "Web - EPCIS - Consula";
		$msjPreparado = "De: $nombre con email ( $mail )";
		$msjPreparado.= "Tengo la siguiente duda : $mensaje";

	 mail($enviar_a, $asunto, $msjPreparado);

		$enviado = 'true';
	}

}



require 'index_view.php';

$cadena_equipo = implode(" - ", $_POST);
echo $cadena_equipo;

 ?>

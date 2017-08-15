<?php 
// Comprobar si el formulario fue SEND
//mediante el name del submit
$errores ="";
$enviado ="";
// si submit existe realizar el bloque
if(isset($_POST['submit'])){
	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];
	$mensaje= $_POST['mensaje']
	;
// si la variable nombre NO esta vacia ejecuta
// empty ($nombre )  --> SI ESTA VACIA , al negarlo le decimos si no esta VACIA EJECUTA

  
	if(!empty($nombre)){
		$nombre =  trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
	}else{
		$errores.="Por favor ingresa un nombre<br/>";
	}
// si la variable $correo no esta vacia ejecuta
// Si la variable tiene contenido  == !empty($correo)
	if(!empty($correo)){
		$correo= filter_var($correo,FILTER_SANITIZE_EMAIL);
		if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			$errores .="Por favor ingrese un Correo Valido <br />";
		}

	}else{
		$errores .= "Por favor ingresa un correo <br/>";
	}
// si la variable $mensaje no este vacia ejecuta
	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripcslashes($mensaje);
	} else{
		$errores .= "Por favor Ingreesa el MSJ";
	}
// Preguntando si no hay errrores
	if(!$errores){
		$enviar_a = 'vcaballeroc@usmp.pe';
		$asunto = 'Correo envaido desde MiSite.com';
		$mensaje_preparado	= "DE: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " .$mensaje;
		echo "se envio";
// Falta subir archivos a un hosting
		//mail($enviar_a, $asunto, $mensaje_preparado);

	/* con esta linea mostraremos el msj d enviado*/
		$enviado = 'true';
	}

}

require 'index_view.php';

 ?>

<?php
/* FORMAS PARA VALIDAD FORMULARIOS 
FORMA 1 PARA VALIDAR DEJA EL ACTION SIN VINCULADO
*/
if($_POST){
 echo $_POST['nombre'];
 }

 // LA 2da en el action pon index.php
 
 /* 3era forma
 agregar al action 
 action= "<?php echo htmlspecialchars$_SERVER[PHP_SELF]);?>"
lo que hace es traer la ruta actual del archivo que se esta ejecutando. en este caso INDEX.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TEST</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	<input placeholder="Nombre" type="text" name="nombre">
 	<br>
 	<label for="hombre">Hombre</label>
 	<input type="radio" name="sexo" id="hombre" value="hombre">
 		<br>
 	<label for="mujer">Mujer</label>
 	<input type="radio" name="sexo" id="mujer" value="mujer">
		<br>
	<select name="year" id="year">
		<option value="2000">2000</option>
		<option value="2001">2001</option>
		<option value="2002">2002</option>
		<option value="2003">2003</option>
	</select>
		<br>
	<label for="terminos">Aceptar los Terminos?</label>
	<input type="checkbox" name="terminos" id="terminos" value="ok">
	<br>
	<input type="submit" vale="enviar">
</form>

</body>
</html>

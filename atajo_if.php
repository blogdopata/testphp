
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>

<?php 
// Operador ternario
// en el parentesis la condicion
//? --> lo que la condicion cumple 
// :  lo que la condicion no cumple


$edad = (isset($edad)) ? $edad :'El usuario no puso edad' ;

echo 'Edad: ' .$edad;
 


// ISSET($edad) devuelve true o false
// si es que la varable a sido seteada (q se le a asignado valor o no) 
// el isset a hacer un true o un false :D dependiendo si tiene algo establecido 

?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>

<?php 

/* operadores de comparacio
==   Igualdad
< Menos q
> Mayor q
<= Menor igual q 
>= Mayor igual q 
!= DIfrente 
! Negacion 
-------------------------
operadores logicos
&& - AND --->    evalua  que se cumpla las condiciones propuestas
|| - or --> evalua que se cumpla una de las condiciones
XOR ---> Evanlua que se cumpla solo una de la condciones
*/
$name =  'Carlos';
$edad =  18;
	if($edad>17 && $name == 'Carlos'){
		echo "puede comprar" . '<br />';
	}
	if($edad == 17 or $name != 'Carlos'){
		echo "no largo";
	} 
 /*
	if( condicion){

	}else if( condicion 2){

	}
	else{
		echo print
	}
	*/

?>

</body>
</html>
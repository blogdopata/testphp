<?php 
$var="";

if(!isset($var)){
	echo "dentro de isset :" . var_dump(isset($var)) .  " <br/>";

}

if($var){
	echo "dentro d if(Svar) ". var_dump(isset($var)) .  " <br/>";
}

if (!$var) {
	echo "dentro d if(!Svar) ". var_dump(isset($var)) .  "<br/>";
}
if(empty($var)){
	echo "EStoy en blanco detro  del empity". var_dump(isset($var)) ;
}

if(empty(!$var)){
	echo "TEngo content dentro de !!empity ". var_dump(isset($var)) ;

}
?>


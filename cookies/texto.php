<?php 
// si existe la variable $_COOKIE['font-size']
if(isset($_COOKIE['font-size'])){
	
	$tamano = $_COOKIE['font-size'];
	$color = $_COOKIE['colorG'];

}else {
	$tamano =  '20px';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>texto</title>
	<style>
		p{
			font-size: <?php echo $tamano ;?> ;
			background-color: <?php echo $color;?> ;
		}
	</style>
</head>
<body>
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dolorum delectus rerum voluptatum, deserunt recusandae iusto repellendus officiis, quod sint earum nemo, quisquam adipisci magnam dignissimos possimus. Iusto, laborum, minus!</p>
</body>
</html>
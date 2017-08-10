
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTPHP</title>
</head>
<body>
<pre>
<?php 
	$members =  array(
		"victor","jose","juan","pedro","ivan"
		);
	print_r($members);
	
?>
</pre>
<ul>
	<?php 
		foreach ($members as $member) {
			echo '<li>' . $member . '</li>';
			
		}
	?>
    
</ul>

<ul>
	<?php 
		sort($members);
		foreach ($members as $member) {
			echo '<li>' . $member . '</li>';
		}
		
	?>

</ul>

</body>
</html>
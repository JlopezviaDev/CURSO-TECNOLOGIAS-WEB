
<pre>
<?php 
	print_r($_POST);
	$base = $_POST["base"];
	$altura = $_POST["altura"];
	$area = $base * $altura;
?>
<div id="contenedor1">
	<?php
	echo "El área del rectángulo calculada con base " .$base. " y altura " .$altura. " es " .$area;
	?>
</div>
</pre>
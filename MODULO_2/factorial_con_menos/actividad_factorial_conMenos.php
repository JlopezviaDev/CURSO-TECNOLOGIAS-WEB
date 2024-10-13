<pre>
<?php 
	print_r($_POST);
	$numero = $_POST["numero"];
	$factorial = $_numero;
?>
<br>
<br>
<?php
	for($i=($_factorial-1); $i<1; $i--){
		$factorial = $factorial * $i;
	}
	echo "El Factorial del númnero introducido es igual a " .$factorial;
?>
</pre>

<br>
<br>
<a href="actividad_factorial.html">Vuelve a introducir un número</a>

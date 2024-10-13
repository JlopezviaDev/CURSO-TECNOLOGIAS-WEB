<pre>
<?php 
	print_r($_POST);
	$numero = $_POST["numero"];
	$factorial = 1;
?>
<br>
<br>
<?php
	for($i=1; $i<=$numero; $i++){
		$factorial = $factorial * $i;
	}
	echo "El Factorial del númnero introducido es igual a " .$factorial;
?>
</pre>

<br>
<br>
<a href="actividad_factorial.html">Vuelve a introducir un número</a>
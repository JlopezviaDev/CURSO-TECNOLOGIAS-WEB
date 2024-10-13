
<pre>
<?php 
	print_r($_POST);
	$edad = $_POST["edad"];	
?>
<br>
<br>
<?php
	if(($edad >= 0) and ($edad < 30)) { 
		echo "la edad introducida " .$edad. " corresponde a una persona joven."; } 
	elseif (($edad >= 30) and ($edad < 120)) { 
		echo "la edad introducida " .$edad. " corresponde a una persona madura."; }
	else {
		echo "debes introducir una edad correcta";
	}
?>
</pre>

<br>
<br>
<a href="actividad4_a.html">Vuelve a introducir tu edad</a>

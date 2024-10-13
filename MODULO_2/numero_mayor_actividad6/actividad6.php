<pre>
<?php 
	print_r($_POST);
	$tablaNumeros = array();
	$tablaNumeros[0] = "$_POST[num1]";
	$tablaNumeros[1] = "$_POST[num2]";
	$tablaNumeros[2] = "$_POST[num3]";
	$tablaNumeros[3] = "$_POST[num4]";
?>
<br>
<br>
<?php
	$mayor=max($tablaNumeros);	
	echo "el número mayor es el " .$mayor;
		
		
?>
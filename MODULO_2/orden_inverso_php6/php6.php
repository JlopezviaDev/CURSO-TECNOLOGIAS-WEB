<pre>
<?php 
	print_r($_POST);
	$tablaNumeros = array();
	$tablaNumeros[0] = "$_POST[num1]";
	$tablaNumeros[1] = "$_POST[num2]";
	$tablaNumeros[2] = "$_POST[num3]";
	$tablaNumeros[3] = "$_POST[num4]";
	$tablaNumeros[4] = "$_POST[num5]";
	$tablaNumeros[5] = "$_POST[num6]";
?>
<br>
<br>
<?php
	for($i=(count($tablaNumeros)-1); $i>=0; $i--){
		echo $tablaNumeros[$i] ."<br>";	
	}
?>
</pre>

<br>
<br>
<a href="php6.html">Vuelve a introducir los números</a>
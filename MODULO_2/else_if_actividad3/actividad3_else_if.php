
<pre>
<?php 
	print_r($_POST);
	$numEntradas = $_POST["numEntradas"];
	$precioEntrada = $_POST["precioEntrada"];
?>
<br>
<br>
<?php
	if( $numEntradas == 1) { 
		echo "El precio de tu entrada es de " .$precioEntrada. "€"; 
	} elseif ($numEntradas == 2) { 
		echo "El precio de tus 2 entradas es de " .$precioEntrada*$numEntradas*0.9. "€";
	} elseif ($numEntradas == 3) { 
		echo "El precio de tus 3 entradas es de " .$precioEntrada*$numEntradas*0.85. "€"; 
	} elseif ($numEntradas == 4) { 
		echo "El precio de tus 4 entradas es de " .$precioEntrada*$numEntradas*0.80. "€";  
	} elseif ($numEntradas >= 5) { 
		echo "El precio de tus " .$numEntradas. " entradas es de " .$precioEntrada*$numEntradas*0.75. "€"; 
	} else {
		echo "introduce un número de entradas válido";
	}
?>


</pre>

<pre>
<?php 
	print_r($_POST);
	$numEntradas = $_POST["numEntradas"];
	$precioEntrada = $_POST["precioEntrada"];
?>
<br>
<br>
<?php
		switch(true){
	
	case( $numEntradas == 1) : 	echo "El precio de tu entrada es de " .$precioEntrada. "€"; 
				break;
	case($numEntradas == 2) :	echo "El precio de tus 2 entradas es de " .$precioEntrada*$numEntradas*0.9. "€";
				break;
	case($numEntradas == 3) :	echo "El precio de tus 3 entradas es de " .$precioEntrada*$numEntradas*0.85. "€"; 
				break;
	case($numEntradas == 4) :	echo "El precio de tus 4 entradas es de " .$precioEntrada*$numEntradas*0.80. "€"; 
				break;
	case($numEntradas >= 5) :	echo "El precio de tus " .$numEntradas. " entradas es de " .$precioEntrada*$numEntradas*0.75. "€"; 
				break;
	default : 		echo "introduce un número de entradas válido";
	}
?>


</pre>
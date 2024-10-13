
<pre>
<?php 
	print_r($_POST);
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$suma = $num1 + $num2;

	echo "La suma de " .$num1. " y " .$num2. " es " .$suma;
?>
<br>
<?php
	if($num1 > $num2) { 
		echo $num1. " es mayor que " .$num2; 
	} elseif ($num1 == $num2) { 
		echo $num1. " es igual a " .$num2; 
	} else {
		echo $num1. " es menor a " .$num2; 
	}
?>


</pre>
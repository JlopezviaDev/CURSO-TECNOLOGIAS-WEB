
<pre>
<?php 
	print_r($_POST);
	$nota_num = $_POST["nota_num"];

	echo "La nota numérica introducida es " .$nota_num;
?>
<br>
<?php
	if(($nota_num >= 19) and ($nota_num <= 20)) { 
		echo $nota_num. " corresponde a la letra A."; 
	} elseif (($nota_num > 15) and ($nota_num < 19)) { 
		echo $nota_num. " corresponde a la letra B."; 
	} elseif (($nota_num > 11) and ($nota_num < 16)) { 
		echo $nota_num. " corresponde a la letra C."; 
	} elseif (($nota_num > 8) and ($nota_num < 12)) { 
		echo $nota_num. " corresponde a la letra D."; 
	} elseif (($nota_num >= 0) and ($nota_num < 9)) { 
		echo $nota_num. " corresponde a la letra E."; 
	} else {
		echo "La nota introducida no es válida.";
	}
?>


</pre>
<pre>
<?php 
	print_r($_POST);
?>
</pre>
<h1>Utilizando el FOR y el IF:</h1>
<?php
	//con for e if
	$numDatos = count($_POST);
	$datos = array();
	for ($i=1; $i<=$numDatos; $i++){
		$datos[]=$_POST['dato'.$i];
	}
	"<br>";
	$mayor = $datos[0];
	for ($i=0; $i<count($datos); $i++) {
			if ($mayor<$datos[$i]){
				$mayor=$datos[$i];	
		}
	}	
		 echo "el número mayor es el " .$mayor. "<br>";
	
?>
<hr>
<br>
<h1>Utilizando la Función "max" built-in de PHP:</h1>
<?php
	//con max
	$numDatos = count($_POST);
	$datos = array();
	for ($i=1; $i<=$numDatos; $i++){
		$datos[]=$_POST['dato'.$i];
	}
	
	$mayor=max($datos);	
	echo "el número mayor es el " .$mayor;
	
?>

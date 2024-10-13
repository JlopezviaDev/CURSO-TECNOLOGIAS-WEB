<pre>
<?php
	print_r($_POST);
?>
</pre>
<h2>1ª opción usando el propio $_POST</h2>
<?php
	for ($i=count($_POST);$i>0;$i--) {
		echo $_POST['dato'.$i].'<br>';
	}
?>
<h2>2ª opción, generando un array que copie los datos de $_POST</h2>
<?php
$numDatos = count($_POST);
$datos = array();
//con el primer FOR introducimos los datos el el array
for ($i=1;$i<=$numDatos;$i++) {
	$datos[]=$_POST['dato'.$i];
}
//con el segundo FOR escribimos los elementos del array ordenados a la inversa
for ($i=(count($datos)-1);$i>=0;$i--) {
	echo $datos[$i].'<br>';
}
?>
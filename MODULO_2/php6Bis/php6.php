<pre>
<?php
	print_r($_POST);
?>
</pre>
<h2>Usando el propio $_POST</h2>
<?php
	for ($i=count($_POST);$i>0;$i--) {
		echo $_POST['dato'.$i].'<br>';
	}
?>
<h2>Generar un array que copie los datos de $_POST</h2>
<?php
$numDatos = count($_POST);
$datos = array();
for ($i=1;$i<=$numDatos;$i++) {
	$datos[]=$_POST['dato'.$i];
}
for ($i=(count($datos)-1);$i>=0;$i--) {
	echo $datos[$i].'<br>';
}
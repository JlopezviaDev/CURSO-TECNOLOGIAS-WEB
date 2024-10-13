<pre>
<?php
// print_r($_POST);
$coches = $_POST['coches'];
//print_r($coches);
foreach ($coches as $coche) {
	if (!empty($coche['marca'])) {
		echo $coche['marca'].' '.$coche['modelo'].' '.$coche['cambio'].' ';
		if (isset($coche['combustible'])) {
			foreach ($coche['combustible'] as $comb) {
				switch ($comb) {
					case 'G':
						echo 'Gasolina ';
						break;
					case 'D':
						echo 'Diesel ';
						break;
					case 'H':
						echo 'Híbrido ';
						break;
					case 'E':
						echo 'Eléctrico ';
						break;
					default:
						echo 'Combustible desconocido ';
	
				}
			}
		}
		echo '<br>';
		
	} else {
		echo 'No hay marca<br>';
	}
}
?>
</pre>
<h1>Primer Coche:</h1>
<?php
$coche1 = [
	'Marca' => 'Audi',
	'Modelo' => 'A4',
	'Combustible' => 'Gasolina',
	'Cambio' => 'Automático'
];
echo '<pre>';
print_r($coche1);
echo '</pre>';
foreach ($coche1 as $key => $val) {
	echo $key.': '.$val.'<br>';
}
?>
<hr>
<h1>Segundo Coche:</h1>	
<?php
$coche2 = [
	'Marca' => 'BMW',
	'Modelo' => 'X5',
	'Combustible' => 'Diesel',
	'Cambio' => 'Automático'
];
echo '<pre>';
print_r($coche2);
echo '</pre>';
foreach ($coche2 as $key => $val) {
	echo $key.': '.$val.'<br>';
}
?>
<hr>
<h1>Tercer Coche:</h1>	
<?php
$coche3 = [
	'Marca' => 'Mitsubishi',
	'Modelo' => 'Outlander',
	'Combustible' => 'Híbrido-Enchufable',
	'Cambio' => 'Automático'
];
echo '<pre>';
print_r($coche3);
echo '</pre>';
foreach ($coche3 as $key => $val) {
	echo $key.': '.$val.'<br>';
}
?>
<hr>
<h1>Cuarto Coche:</h1>	
<?php
$coche4 = [
	'Marca' => 'Volvo',
	'Modelo' => 'XC90',
	'Combustible' => 'Gasolina',
	'Cambio' => 'Manual'
];
echo '<pre>';
print_r($coche4);
echo '</pre>';
foreach ($coche4 as $key => $val) {
	echo $key.': '.$val.'<br>';
}
?>
<hr>
<h1>Array coches ce cada array:</h1>	
<?php
$coches = array();
$coches[] = $coche1;
$coches[] = $coche2;
$coches[] = $coche3;
$coches[] = $coche4;
echo '<pre>';
print_r($coches);
echo '</pre>';

foreach ($coches as $key => $coche) {
	echo $coche['Marca'].' '.$coche['Modelo'].' '.$coche['Combustible'].' '.$coche['Cambio'].'<br>';
}
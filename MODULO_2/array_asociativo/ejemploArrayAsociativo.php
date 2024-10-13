<pre>
<?php
print_r($_POST);
?>
</pre>


<h1>Primer Coche:</h1>
<?php
$coche1 = [
	$_POST["c1c1"] => $_POST["c1v1"],
	$_POST["c1c2"] => $_POST["c1v2"],
	$_POST["c1c3"] => $_POST["c1v3"],
	$_POST["c1c4"] => $_POST["c1v4"]
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
	$_POST["c2c1"] => $_POST["c2v1"],
	$_POST["c2c2"] => $_POST["c2v2"],
	$_POST["c2c3"] => $_POST["c2v3"],
	$_POST["c2c4"] => $_POST["c2v4"]
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
	$_POST["c3c1"] => $_POST["c3v1"],
	$_POST["c3c2"] => $_POST["c3v2"],
	$_POST["c3c3"] => $_POST["c3v3"],
	$_POST["c3c4"] => $_POST["c3v4"]
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
	$_POST["c4c1"] => $_POST["c4v1"],
	$_POST["c4c2"] => $_POST["c4v2"],
	$_POST["c4c3"] => $_POST["c4v3"],
	$_POST["c4c4"] => $_POST["c4v4"]
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

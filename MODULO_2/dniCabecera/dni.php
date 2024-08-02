<?php
include '../comun/libreria.php';
			
cabecera('Comprobación la letra del DNI','');			
if (isset($_POST['numDNI'])) {
	$numDNI = $_POST['numDNI'];
} else {
	$numDNI = 0;
}
$letra = isset($_POST['letra']) ? $_POST['letra'] : 'No existe';
if (($numDNI>0) &&($numDNI<=99999999)) {
	$resto = $numDNI % 23;
	$letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H','L','C', 'K', 'E'];
	$letraVerdadera = $letras[$resto];
	if (strtoupper($letra)==$letraVerdadera) {
		echo 'La letra es correcta';
	} else {
		echo 'La letra es incorrecta. La verdadera es '.$letraVerdadera;
	}
} else {
	echo 'El número del DNI está fuera de rango';
}
pie();
?>
		
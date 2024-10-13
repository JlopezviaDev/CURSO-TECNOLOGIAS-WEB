
<pre>
<?php 
	print_r($_POST);
	$dniNum = $_POST["dniNum"];	
	$dniLetra = $_POST["dniLetra"];
	$letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
?>
<br>
<br>
<?php
	if(($dniNum <= 0) or ($dniNum > 99999999)) { 
		echo "El número de DNI introducido " .$dniNum. " no es válido."; } 
	else {
		$posicionLetra = $dniNum % 23;
		$letraCalculada = $letras[$posicionLetra];
		if($letraCalculada == $dniLetra){
			echo "El número y la letra de DNI son correctos.";
		}else {
			echo " la letra indicada no es correcta.";	
		}
	}
?>
</pre>

<br>
<br>
<a href="actividad5_dni.html">Vuelve a introducir tus datos del DNI</a>
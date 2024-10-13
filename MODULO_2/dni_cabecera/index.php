<?php
include '../comun/libreria.php';
cabecera("Comprobación letra del DNI",'');
?>
	<form action="dni.php" method="post">
		Indica el número del DNI <input type="number" name="numDNI">
		Indica la letra <input type="text" name="letra">
		<input type="submit" value="Comprobar letra">
	</form>
<?php
 pie();
?>
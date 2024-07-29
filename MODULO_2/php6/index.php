<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="formulario.css">
</head>
<body>
	<form action="php6.php" method="post">
<?php
//Indica el dato 6 <input type="text" name="dato6"><br>
$numDatos = $_POST['numDatos'];
for ($i=1;$i<=$numDatos;$i++) {
   echo 'Indica el dato'.$i.' <input type="text" name="dato'.$i.'"><br>';
}
?>
		<input type="submit" value="Orden inverso">
	</form>
</body>
</html>

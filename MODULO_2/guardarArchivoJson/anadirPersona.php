<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../php.css">
</head>
<body>	
	<pre>
	<?php
	//Recuperar los datos del JSON
	$fichero = file_get_contents('personas.json');
	//Convertir los datos en formato json a un array de php
	$personas = json_decode($fichero,true);
	echo '$personas antes de añadir:<br>';
	print_r($personas);
	//Creamos el array de la persona a añadir.
	$persona = array(
		'Nombre' => $_POST['nombre'],
		'Apellido1' => $_POST['Apellido1'],
		'Apellido2' => $_POST['Apellido2'],
		'Telefono' => $_POST['telefono']
	);
	//Añadimos la personas al array de personas.
	$personas[]=$persona;
	echo '$personas después de añadir una persona<br>';
	print_r($personas);
	//convertimos el array en formato JSON
	$personasJSON=json_encode($personas);
	//Escribir el JSON en el archivo personas.json
	file_put_contents("personas.json",$personasJSON);
   ?>
	</pre>
</body>
</html>
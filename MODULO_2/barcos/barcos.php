<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div id="contenedor1">
		Hola 
		<?php 
			//print_r($_POST);
			echo $_POST['nombre']; 	
			echo " ";
			echo $_POST['apellido']; 	
		?>
		.
		<br>
		Tu fecha de nacimiento es: 
		<?php 
			echo $_POST['fecha_nacimiento']; 
		?> 
		<br>
		Tu género es:
		<?php
			echo $_POST['genero'];
		?>
	</div>	
	<br>
	<hr>
	<br>
	<div id="contenedor2">
		Como datos de contacto tuyos nos figuran:
		<ul>
			<li><?php echo $_POST['correo'];
				?></li>
			<li><?php echo $_POST['telefono'];
				?></li>
			<li><?php echo $_POST['direccion'];
				?></li>
		</ul>
	</div>
	<br>
	<hr>
	<br>
	<div id="contenedor3">
		Tu lista de barcos deseados es:
		<br>
		<?php
			//print_r($_POST);
			$barcos = $_POST['barcos'];
			//print_r($barcos);
			foreach ($barcos as $barcos) {
				if (!empty($barcos['tipo'])) {
					echo $barcos['tipo'].' '.$barcos['marca'].' '.$barcos['eslora'].'<br>';
				} else {
					echo 'No hay barco'.'<br>';
				}
			}
		?>
	</div>
	<br>
	<div id="contenedor4">
		Posees la siguiente titulacion:
		<?php
			echo $_POST['titulaciones'];
		?>
	</div>
	<br>
	<div id="contenedor5">
		Quieres adquirir tu barco en régimen de:
		<?php
			$modalidad = $_POST['modalidad'];
			//print_r($barcos);
			foreach ($modalidad as $moda) {
				if (!empty($modalidad['ALQUILER'])) {
					echo $modalidad['ALQUILER'];
				} else {
					echo $modalidad['COMPRA'];
				}
			}
			
		?>
	</div>

	<pre>
	<?php
		//print_r($_POST);
	?>
	</pre>
	</body>
</html>










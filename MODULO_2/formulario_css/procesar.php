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
	<hr>
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
	<hr>

	<pre>
	<?php
		print_r($_POST);
	?>
	</pre>
	</body>
</html>

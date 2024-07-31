<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formulario recogida de datos</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<h2>Expediente del Alumno:</h2> 		
	<?php 
	$alumnos = $_POST['alumnos'];
	echo "<h1>".$alumnos['nombre']." ".$alumnos['ape1']." ".$alumnos['ape2']."</h1>";	
	?>
	<fieldset>
		<div class="contenedor">    
			<?php 
				"<ul>";
				echo 'Idiomas que habla el alumno: ';
			if (isset($alumnos['idiomas'])) {
				foreach ($alumnos['idiomas'] as $idi) {
					switch ($idi) {
						case 'ES':
							echo "<li>".'Castellano'."</li>";
							break;
						case 'CA':
							echo "<li>".'Catalán'."</li>";
							break;
						case 'FR':
							echo "<li>".'Francés'."</li>";
							break;
						case 'EN':
							echo "<li>".'Inglés'."</li>";
							break;
						default:
							echo 'Idioma desconocido ';
						}	
					}
				}
			"</ul>";
			?> 
		</div>	
		<br>
		<div class="contenedor">
			<?php 
				echo 'La actitud del alumno durante la clase es: ';
						if (isset($alumnos['actitud'])) {
							foreach ($alumnos['actitud'] as $act) {
								switch ($act) {
									case 'buena':
										echo 'Buena ';
										break;
									case 'normal':
										echo 'Normal ';
										break;
									case 'mala':
										echo 'Mala ';
										break;
									case 'deficiente':
										echo 'Deficiente ';
										break;
									default:
										echo 'Actitud no evaluada ';
							}	
							}
						}
			?>

		</div>
		<br>
		<div class="contenedor">
			<?php
				"<ul>";
				echo 'Ejercicio nº 1 '."<br>";				
				if (isset($alumnos['nombreEjercicio1'])) {
					echo "<li>".'Nombre del ejercicio: '.$alumnos['nombreEjercicio1']."</li>";
				} else {
					echo 'No hay ejercicio'."<br>";
				}

				if (isset($alumnos['notaEjercicio1'])) {
					echo "<li>".'Nota del ejercicio: '.$alumnos['notaEjercicio1']."</li>";
				} else {
					echo 'no hay nota evaluada'."<br>";
				}
				if (isset($alumnos['comentario1'])) {
					echo "<li>".'Comentario del ejercicio: '.$alumnos['comentario1']."</li>";
				} else {
					echo 'no hay comentario'."<br>";
				}
				"</ul>";

			?>

		</div>
		<br>
		<div class="contenedor">
			<?php 
				"<ul>";
				echo 'Ejercicio nº 2 '."<br>";				
				if (isset($alumnos['nombreEjercicio2'])) {
					echo "<li>".'Nombre del ejercicio: '.$alumnos['nombreEjercicio2']."</li>";
				} else {
					echo 'No hay ejercicio'."<br>";
				}

				if (isset($alumnos['notaEjercicio2'])) {
					echo "<li>".'Nota del ejercicio: '.$alumnos['notaEjercicio2']."</li>";
				} else {
					echo 'no hay nota evaluada'."<br>";
				}
				if (isset($alumnos['comentario2'])) {
					echo "<li>".'Comentario del ejercicio: '.$alumnos['comentario2']."</li>";
				} else {
					echo 'no hay comentario'."<br>";
				}
				"</ul>";

			?>

		</div>
		<br>
		<div class="contenedor">
			<?php 
				"<ul>";
				echo 'Ejercicio nº 3 '."<br>";
				if (isset($alumnos['nombreEjercicio3'])) {
					echo "<li>".'Nombre del ejercicio: '.$alumnos['nombreEjercicio3']."</li>";
				} else {
					echo 'No hay ejercicio'."<br>";
				}

				if (isset($alumnos['notaEjercicio3'])) {
					echo "<li>".'Nota del ejercicio: '.$alumnos['notaEjercicio3']."</li>";
				} else {
					echo 'no hay nota evaluada'."<br>";
				}
				if (isset($alumnos['comentario3'])) {
					echo "<li>".'Comentario del ejercicio: '.$alumnos['comentario3']."</li>";
				} else {
					echo 'no hay comentario'."<br>";
				}
				"<ul>";

			?>

		</div>
	</fieldset>	
		
</body>
</html>
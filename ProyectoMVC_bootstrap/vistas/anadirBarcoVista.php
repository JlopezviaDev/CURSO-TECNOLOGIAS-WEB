<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Añadir Barco');
?>
<form action="anadirBarco2Controlador.php" method="POST" enctype="multipart/form-data">
	<label class="form-label">Astillero:</label><input class="form-control" type="text" name="astillero"><br>
	<label class="form-label">Modelo:</label><input class="form-control" type="text" name="modelo"><br>
	<label class="form-label">Descripción:</label><textarea class="form-control" name="descripcion"></textarea><br>
	<label class="form-label">Puerto:</label>
	<select class="form-select" aria-label="Default select example" name="Puerto">
		<?php
		foreach ($listaPuertos as $clave => $valor) {
			echo '<option value="'.$clave.'">'.$valor.'</option>';
		}
		?>
	</select><br>
	<hr>
	<span>Sube una foto:</span>
	<input type="file" name="fichero1" />
	<hr>
	<input class="btn btn-success" type="submit" value="Enviar" name="botonSubmit">
</form>



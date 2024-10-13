<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Añadir Puertos');
?>
<form action="anadirPuerto2Controlador.php" method="POST">
	<label class="form.label">Nombre del Puerto: </label><input class="form-control" type="text" name="nombrePuerto"><br>
	<input class="btn btn-success" type="submit" value="Añadir Puerto">
</form>
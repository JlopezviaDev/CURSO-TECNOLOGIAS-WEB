<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Modifica el Puerto');
?>
<form action="modificarPuerto2Controlador.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<label class="form-label">Nombre del Puerto: </label><input class="form-control" type="text" name="nombrePuerto" value="<?php echo $nombrePuerto ?>"><br>
	<input class="btn btn-warning" type="submit" value="Modificar Puerto">
</form>
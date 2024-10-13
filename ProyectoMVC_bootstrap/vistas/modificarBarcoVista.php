<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Modificar Barco');
echo '<h1>Modificar Barco '.$barco->getModelo().'</h1>';
echo '<hr>';
?>
<form action="modificarBarco2Controlador.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" value='<?php echo $id ?>' name='id'>
	<input type="hidden" name='foto' value=<?php echo $barco->getFoto(); ?>>
	<label class="form-label">Astillero:</label><input class="form-control" type="text" name="astillero" 
									        value="<?php echo $barco->getAstillero(); ?>"
									 ><br>
	<label class="form-label">Modelo:</label><input class="form-control" type="text" name="modelo"
									   value="<?php echo $barco->getModelo(); ?>"
									 ><br>

	<label class="form-label">Descripción:</label><textarea class="form-control" name="descripcion"><?php echo $barco->getDescripcion(); ?></textarea><br>
	<label class="form-label">Puerto:</label>
	<select class="form-select" name="puerto">
		<?php
		foreach ($listaPuertos as $clave => $valor) {
			if ($barco->getIdPuerto()==$clave) {
				echo '<option value="'.$clave.'" selected>'.$valor.'</option>';
			} else {
				echo '<option value="'.$clave.'">'.$valor.'</option>';			
			}		
		} 
		?>
	</select><br>
	<input class="btn btn-warning" type="submit" value="Guardar" name="botonSubmit">
</form>

<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Modificar perfil','estilos.css','');
//echo '<pre>';
//print_r($perf);
//echo '</pre>';
?>
	<form action="modificarPerfil2Controlador.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name='id' value=<?php echo $id; ?>> 
		<input type="hidden" name='foto' value=<?php echo $perf->getFoto(); ?>> 
		<label>Nombre: </label><input type="text" name="nombre" value="<?php echo $perf->getNombre(); ?>"><br>
		<label>Apellido 1: </label><input type="text" name="ape1" value="<?php echo $perf->getApe1(); ?>"><br>
		<label>Año de nacimiento: </label><input type="text" name="year"value="<?php echo $perf->getYear(); ?>"><br>
		<label>Orientación: </label>
		<?php 
				
			$checked = in_array('H', $perf->getOrientacion()) ? 'checked' : '';
		?>
		<input type="checkbox" value="H" name="orientacion[]" <?php echo $checked; ?>>Heterosexual
		<?php 	
			$checked = in_array('G', $perf->getOrientacion()) ? 'checked' : '';
		?>	
		<input type="checkbox" value="G" name="orientacion[]" <?php echo $checked; ?>>Gay
		<?php 		
			$checked = in_array('L', $perf->getOrientacion()) ? 'checked' : '';
		?>	
		<input type="checkbox" value="L" name="orientacion[]"  <?php echo $checked; ?>>Lesbiana
		<?php 		
			$checked = in_array('B', $perf->getOrientacion()) ? 'checked' : '';
		?>			
		<input type="checkbox" value="B" name="orientacion[]" <?php echo $checked; ?>>Bisexual<br>
		<label>Genero: </label>
		<?php 		
			$checked = $perf->getGenero()=='Hombre' ? 'checked' : '';
		?>			
		<input type="radio" value="Hombre" name="genero" <?php echo $checked; ?>>Hombre
		<?php 		
			$checked = $perf->getGenero()=='Mujer' ? 'checked' : '';
		?>			
		<input type="radio" value="Mujer" name="genero" <?php echo $checked; ?>>Mujer
		<?php 		
			$checked =$perf->getGenero()=='Otro' ? 'checked' : '';
		?>				
		<input type="radio" value="Otro" name="genero"  <?php echo $checked; ?>>Otro
		<hr>
		<img src='../datos/imgperfiles/<?php echo $perf->getFoto(); ?>'>
		<span>Modifica tu foto de perfil:</span>
        <input type="file" name="fichero1" />
		<hr>
		<div class="aficion">
			<h2>Música</h2>
			<input type="hidden" name="aficiones[0][nombre]" value="Música">
			Comentarios:
			<textarea name="aficiones[0][comentario]" placeholder="Comentarios">
				<?php echo  $perf->getAficiones()[0]['comentario']?>
			</textarea>
		</div>
		<div class="aficion">
			<h2>Cine</h2>
			<input type="hidden" name="aficiones[1][nombre]" value="Cine">
			Comentarios:
			<textarea name="aficiones[1][comentario]" placeholder="Comentarios">
				<?php echo  $perf->getAficiones()[1]['comentario']?>
			</textarea>
		</div>
		<div class="aficion">
			<h2>Deportes</h2>
			<input type="hidden" name="aficiones[2][nombre]" value="Deportes">
			Comentarios:
			<textarea name="aficiones[2][comentario]" placeholder="Comentarios">
				<?php echo  $perf->getAficiones()[2]['comentario']?>
			</textarea>
		</div>
		<div class="aficion">
			<h2>Lectura</h2>
			<input type="hidden" name="aficiones[3][nombre]" value="Lectura">
			Comentarios:
			<textarea name="aficiones[3][comentario]" placeholder="Comentarios">
				<?php echo  $perf->getAficiones()[3]['comentario']?>
			</textarea>
		</div>
		<div class="aficion">
			<h2>Otras</h2>
			<input type="hidden" name="aficiones[4][nombre]" value="Otras">
			Comentarios:
			<textarea name="aficiones[4][comentario]" placeholder="Comentarios">
				<?php echo  $perf->getAficiones()[4]['comentario']?>
			</textarea>
		</div>
		
	<br><input type="submit" value="Guardar" name="botonSubmit">	
	</form>
<?php
pie();
?>
<?php
require_once __DIR__.'/../../comun/libreria.php';		
cabecera('Añadir un perfil','estilos.css','');			
?>
	<form action="anadirPerfil2Controlador.php" method="post" enctype="multipart/form-data">
		<label>Nombre: </label><input type="text" name="nombre"><br>
		<label>Apellido 1: </label><input type="text" name="ape1"><br>
		<label>Año de nacimiento: </label><input type="text" name="year"><br>
		<label>Orientación: </label>
		<input type="checkbox" value="H" name="orientacion[]">Heterosexual
		<input type="checkbox" value="G" name="orientacion[]">Gay
		<input type="checkbox" value="L" name="orientacion[]">Lesbiana
		<input type="checkbox" value="B" name="orientacion[]">Bisexual<br>
		<label>Genero: </label>
		<input type="radio" value="Hombre" name="genero">Hombre
		<input type="radio" value="Mujer" name="genero">Mujer
		<input type="radio" value="Otro" name="genero">Otro
		<hr>
		<span>Sube tu foto de perfil:</span>
        <input type="file" name="fichero1" />
		<hr>
		<div class="aficion">
			<h2>Musica</h2>
			<input type="hidden" name="aficiones[0][nombre]" value="Música">
			Comentarios:
			<textarea name="aficiones[0][comentario]" placeholder="Comentarios"></textarea>
		</div>
		<div class="aficion">
			<h2>Cine</h2>
			<input type="hidden" name="aficiones[1][nombre]" value="Cine">
			Comentarios:
			<textarea name="aficiones[1][comentario]" placeholder="Comentarios"></textarea>
		</div>
		<div class="aficion">
			<h2>Deportes</h2>
			<input type="hidden" name="aficiones[2][nombre]" value="Deportes">
			Comentarios:
			<textarea name="aficiones[2][comentario]" placeholder="Comentarios"></textarea>
		</div>
		<div class="aficion">
			<h2>Lectura</h2>
			<input type="hidden" name="aficiones[3][nombre]" value="Lectura">
			Comentarios:
			<textarea name="aficiones[3][comentario]" placeholder="Comentarios"></textarea>
		</div>
		<div class="aficion">
			<h2>Otras</h2>
			<input type="hidden" name="aficiones[4][nombre]" value="Otras">
			Comentarios:
			<textarea name="aficiones[4][comentario]" placeholder="Comentarios"></textarea>
		</div>
				
		
	<br><input type="submit" value="Enviar" name="botonSubmit">	
	</form>

<?php
pie();
?>
		
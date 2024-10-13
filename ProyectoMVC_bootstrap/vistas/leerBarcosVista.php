<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Barcos de Ocasión');
?>

<hr>

<?php
echo '<ul class="list-group">';
foreach ($barcos as $clave => $barco) {
	echo '<li class="list-group-item">';
	echo '<img src="./datos/imgpeques/'.$barco->getFoto().'" style="width:75px">'; 
	echo '<a href="controladores/leerBarcoControlador.php?id='.$clave.'">';
	echo $barco->getModelo();
	echo '</a>';
	echo '<a class="btn btn-danger" href="controladores/borrarBarcoControlador.php?id='.$clave.'">Eliminar</a>';
	echo '<a class="btn btn-warning" href="controladores/modificarBarco1Controlador.php?id='.$clave.'">Editar</a>';
	echo '</li>';
}
echo '</ul>';
?>

<hr>
<br>
<div>
	<ul class="list-group">
		<li class="list-group-item"><a class="btn btn-success" href="controladores/anadirBarco1Controlador.php">Añadir Barco</a></li>
		<li class="list-group-item"><a class="btn btn-info" href="controladores/leerPuertosControlador.php">Gestionar Puertos</a></li>
	</ul>
</div>	

	
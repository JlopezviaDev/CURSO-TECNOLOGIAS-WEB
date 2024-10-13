<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Listado de Puertos');
echo '<ul class="list-group">';
echo '<li class="list-group-item"><a class="btn btn-success" href="anadirPuerto1Controlador.php">Añadir Puerto</a></li>';
echo '<li class="list-group-item"><a class="btn btn-info" href="../index.php">Gestionar barcos</a></li>';

echo '</ul>';
echo '<ul class="list-group">';
foreach ($listaPuertos as $clave => $valor) {
	echo '<li class="list-group-item">';
	echo $valor;
	echo '<a class="btn btn-danger" href="borrarPuertoControlador.php?id='.$clave.'">Eliminar</a>';
	echo '<a class="btn btn-warning" href="modificarPuerto1Controlador.php?id='.$clave.'">Editar</a>';
	echo '</li>';
}
echo '</ul>';
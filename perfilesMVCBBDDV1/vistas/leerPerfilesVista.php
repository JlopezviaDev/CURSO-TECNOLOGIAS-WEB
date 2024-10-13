<?php
require_once '../comun/libreria.php';
cabecera('Leer perfiles','estilos.css','');
echo '<ul class="menu">';
echo '<li><a href="controladores/anadirPerfil1Controlador.php">Añadir perfil</a></li>';
echo '</ul>';
//Recorremos el array $perfiles
echo '<ul class="listaPersonas">';
foreach ($perfiles as $clave => $perf) {
	echo '<li>';
	echo '<img src="./datos/imgperfiles/'.$perf->getFoto().'" style="width:75px;">';
	echo '<a href="controladores/leerPerfilControlador.php?id='.$clave.'">';
	echo $perf->getNombre().' '.$perf->getApe1();
	echo '</a>';
	echo '<a class="boton" href="controladores/borrarPerfilControlador.php?id='.$clave.'"> Eliminar </a>';
	echo '<a class="boton" href="controladores/modificarPerfil1Controlador.php?id='.$clave.'"> Editar </a>';

	echo '</li>';
}
echo '</ul>';
pie();
<?php
require_once '../../comun/libreria.php';
cabecera('Leer perfil','estilos.css','');
echo '<pre>';
print_r($perf);
echo '</pre>';
echo '<h1>Perfil de '.$perf->getNombre().' '.$perf->getApe1().'</h1>';
echo '<h1>Año de nacimiento: '.$perf->getYear().'</h1>';
echo '<img src="../datos/imgperfiles/'.$perf->getFoto().'">';
echo 'A continuación las aficiones:';
foreach ($perf->getAficiones() as /*$clau =>*/ $afi) {
	echo '<br><strong>Afición'.$afi['nombre'].'</strong>: '.$afi['comentario'];
}
pie();
<?php
require_once __DIR__.'/../../comun/libreria.php';
cabecera('Barco de ocasión');
echo '<h1>Barco '.$barco->getModelo().'</h1>';
echo '<hr>';
echo '<br>';
echo 'Astillero: '.$barco->getAstillero().'<br>'.'<br>';
echo 'Descripción: '.$barco->getDescripcion().'<br>'.'<br>';
echo 'Puerto: '.$literalPuerto.'<br>'.'<br>';
echo '<img src="../datos/imgpeques/'.$barco->getFoto().'" style="width:300px;">';
?>
<div>
	<ul class="list-group">
		<li class="list-group-item"><a class="btn btn-info" href="../index.php">Gestionar barcos</a></li>
	</ul>


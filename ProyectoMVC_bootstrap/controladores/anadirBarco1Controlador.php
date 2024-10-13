<?php
require_once __DIR__.'/../modelos/puertosClass.php';

$puertosObj = new puertos();
$listaPuertos = $puertosObj->getPuertos();
//echo '<pre>';
//print_r($listaPuertos);
//echo '</pre>';
require_once __DIR__.'/../vistas/anadirBarcoVista.php';
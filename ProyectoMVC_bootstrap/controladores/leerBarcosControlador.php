<?php
require_once __DIR__.'/../modelos/barcosArchivadosClass.php';
require_once __DIR__.'/../modelos/barcoClass.php';
$barcosObj = new barcosArchivados();
$barcos = $barcosObj->getBarcos();
//echo '<pre>';
//print_r($barcos);
//echo '</pre>';
require_once __DIR__.'/../vistas/leerBarcosVista.php';
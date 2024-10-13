<?php
require_once __DIR__.'/../modelos/barcosArchivadosClass.php';
require_once __DIR__.'/../modelos/barcoClass.php';
require_once __DIR__.'/../modelos/puertosClass.php';

$barcosObj = new barcosArchivados();
$id=$_GET['id'];
$barco = $barcosObj->getBarco($id);

$puertosObj = new puertos();
$idPuerto = $barco->getIdPuerto();
$literalPuerto = $puertosObj->getPuerto($idPuerto);

//echo '<pre>';
//print_r($barco);
//echo '</pre>';
require_once __DIR__.'/../vistas/leerBarcoVista.php';
<?php
require_once __DIR__.'/../modelos/barcosArchivadosClass.php';
require_once __DIR__.'/../modelos/barcoClass.php';
require_once __DIR__.'/../modelos/puertosClass.php';

$puertosObj = new puertos();
$listaPuertos = $puertosObj->getPuertos();

$barcosObj = new barcosArchivados();
$id=$_GET['id'];
$barco = $barcosObj->getBarco($id);
require_once __DIR__.'/../vistas/modificarBarcoVista.php';

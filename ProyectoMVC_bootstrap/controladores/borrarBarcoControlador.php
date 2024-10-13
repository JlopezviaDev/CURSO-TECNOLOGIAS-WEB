<?php
require_once __DIR__.'/../modelos/barcosArchivadosClass.php';
require_once __DIR__.'/../modelos/barcoClass.php';
$barcosObj = new barcosArchivados();
$id = $_GET['id'];
$barcosObj->borrarBarco($id);
header('Location: ../index.php');
<?php
require_once __DIR__.'/../modelos/puertosClass.php';
$puertosObj = new puertos();
$listaPuertos = $puertosObj->getPuertos();
require_once __DIR__.'/../vistas/leerPuertosVista.php';
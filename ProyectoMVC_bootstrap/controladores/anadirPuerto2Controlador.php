<?php
require_once __DIR__.'/../modelos/puertosClass.php';
$puertosObj = new puertos();
$puertosObj->anadirPuerto($_POST['nombrePuerto']);
header('Location: leerPuertosControlador.php');

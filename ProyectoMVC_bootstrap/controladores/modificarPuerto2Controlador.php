<?php
require_once __DIR__.'/../modelos/puertosClass.php';
$puertosObj = new puertos();
$puertosObj->modificarPuerto($_POST['id'],$_POST['nombrePuerto']);
header('Location: leerPuertosControlador.php');

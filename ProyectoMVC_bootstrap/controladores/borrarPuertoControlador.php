<?php
require_once __DIR__.'/../modelos/puertosClass.php';
$puertosObj = new puertos();
$id = $_GET['id'];
$puertosObj->borrarPuerto($id);
header('Location: leerPuertosControlador.php');
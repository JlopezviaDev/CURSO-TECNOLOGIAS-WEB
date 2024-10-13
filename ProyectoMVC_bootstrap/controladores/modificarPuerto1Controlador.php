<?php
require_once __DIR__.'/../modelos/puertosClass.php';
$puertosObj = new puertos();
$id=$_GET['id'];
$nombrePuerto = $puertosObj->getPuerto($id);
require_once __DIR__.'/../vistas/modificarPuertoVista.php';

<?php
require_once __DIR__.'/../modelos/perfilClass.php';
require_once __DIR__.'/../modelos/perfilesArchivadosClass.php';
$perfilesObj = new perfilesArchivados();
//recuperamos el id pasado por parametro
$id = $_GET['id'];
$perf = $perfilesObj->getPerfil($id);
require_once __DIR__.'/../vistas/modificarPerfilVista.php';

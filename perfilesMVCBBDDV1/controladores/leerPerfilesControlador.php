<?php
require_once __DIR__.'/../modelos/perfilesArchivadosClass.php';
require_once __DIR__.'/../modelos/perfilClass.php';
$perfilesObj = new perfilesArchivados();
$perfiles = $perfilesObj->getPerfiles();
//echo '<pre>';
//print_r($perfiles);
//echo '</pre>';
require_once __DIR__.'/../vistas/leerPerfilesVista.php';
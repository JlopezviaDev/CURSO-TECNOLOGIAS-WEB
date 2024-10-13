<?php
//require_once 'perfilClass.php';
require_once __DIR__.'/../modelos/perfilClass.php';
require_once __DIR__.'/../modelos/perfilesArchivadosClass.php';
//instanciamos la clase perfilesArchivados creando el objeto $perfilesObj
$perfilesObj = new perfilesArchivados();
//recuperamos el id pasado por parametro
$id = $_GET['id'];
//Llamamos al metodo borrarPerfil.
$perfilesObj->borrarPerfil($id);
header('Location: ../index.php');
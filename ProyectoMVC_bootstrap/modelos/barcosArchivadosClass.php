<?php
require_once 'connectClass.php';
class barcosArchivados extends connect {
	private $bd;
	private $barcos = [];
	//definimos el contruct que recupera todas los barcos de la base de datos
	function __construct() {
		$this->bd = connect::conexion();
		$sql = 'SELECT * FROM Barcos_Barcos';
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->barcos[$fila['id']] = new Barco($fila['Astillero'],$fila['Modelo'],$fila['Descripcion'],$fila['id_Puerto'],$fila['foto']);
		}
	}
	function getBarcos() {
		return $this->barcos;
	}
	function getBarco($id) {
		return $this->barcos[$id];
	}
	
	function anadirBarco($barco) {
		$sql = "INSERT INTO `Barcos_Barcos`  (`id`, `Astillero`, `Modelo`, `Descripcion`, `id_Puerto`,`foto`) 
 				VALUES 
 					(NULL,
  					 '".$barco->getAstillero()."',
  					 '".$barco->getModelo()."',
  					 '".$barco->getDescripcion()."',
					 '".$barco->getIdPuerto()."',
  					 '".$barco->getFoto()."')";
		$query = $this->bd->query($sql);
	}
	function borrarBarco($id) {
		/*$sql='DELETE FROM `Barcos_Dosis_abono` WHERE id_planta='.$id;
		$query = $this->bd->query($sql);
		$sql='DELETE FROM `Plantas_Floracion` WHERE id_planta='.$id;
		$query = $this->bd->query($sql);*/
		$sql='DELETE FROM `Barcos_Barcos` WHERE id='.$id;
		$query = $this->bd->query($sql);	
	}
	function modificarBarco($barco,$id) {
		$sql = "UPDATE `Barcos_Barcos` 
				SET `Astillero` = '".$barco->getAstillero()."',
    			    `Modelo` = '".$barco->getModelo()."',
    				`Descripcion` = '".$barco->getDescripcion()."', 
    				`id_Puerto` = '".$barco->getIdPuerto()."',
					`foto` = '".$barco->getFoto()."'
				WHERE `Barcos_Barcos`.`id` = ".$id;
		$query = $this->bd->query($sql);	
	}
}


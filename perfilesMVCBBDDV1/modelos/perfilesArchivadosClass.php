<?php
require_once 'connectClass.php';
class perfilesArchivados extends connect {
	private $bd;
	private $perfiles = [];
	function __construct() {
		$this->bd =connect::conexion();
		//echo __DIR__;
		$sql='SELECT * FROM PERF_perfiles';
		$query = $this->bd->query($sql);
		while ($fila = $query->fetch_assoc()) {
			//echo '<pre>';
			//print_r($fila);
			//echo '</pre>';
			$orientacion = $this->generarArrayOrientacion($fila['idPerf']);
			$aficiones = $this->generarArrayAficiones($fila['idPerf']);
		   $this->perfiles[$fila['idPerf']] = new Perfil($fila['nombre'], $fila['ape1'], $fila['year'],$orientacion, $fila['genero'], $fila['foto'],$aficiones);
		}
	}
	function getPerfiles() {
		return $this->perfiles;
	}
	function getPerfil($id) {
		return $this->perfiles[$id];
	}
	function anadirPerfil($perfil) {
		$sql="INSERT INTO `PERF_perfiles` (`idPerf`, `nombre`, `ape1`, `year`, `genero`, `foto`) 
			  VALUES (NULL, '".$perfil->getNombre()."', '".$perfil->getApe1()."', '".$perfil->getYear()."', '".$perfil->getGenero()."', '".$perfil->getFoto()."')";
		$query =$this->bd->query($sql);
		$idPerf = $this->bd->insert_id;
		foreach ($perfil->getOrientacion() as $ori) {
			$sql = "INSERT INTO `PERF_perfOri` (`idPerfOri`, `codigo`, `idPerf`) 
                                        VALUES (NULL, '".$ori."', '".$idPerf."')";
			$query = $this->bd->query($sql);	
		}
		foreach ($perfil->getAficiones() as $afi) {
			$sql = "INSERT INTO `PERF_perfAfi` (`idPerfAfi`, `idPerf`, `codigo`, `comentario`) 
									VALUES (NULL, '".$idPerf."', '".$afi['codigo']."', '".$afi['comentario']."')";
			$query = $this->bd->query($sql);	
		}		
	}
	function modificarPerfil($id,$perfil) {
		$sql="UPDATE `PERF_perfiles` 
				SET `nombre` = '".$perfil->getNombre()."',
    				`ape1` = '".$perfil->getApe1()."', 
    				`year` = '".$perfil->getYear()."', 
    				`genero` = '".$perfil->getGenero()."', 
    				`foto`='".$perfil->getFoto()."'
			  WHERE `PERF_perfiles`.`idPerf` = ".$id;
		$query = $this->bd->query($sql);
		$sql="DELETE FROM `PERF_perfOri` WHERE `idPerf`=".$id;
		$query = $this->bd->query($sql);
		foreach ($perfil->getOrientacion() as $ori) {
			$sql = "INSERT INTO `PERF_perfOri` (`idPerfOri`, `codigo`, `idPerf`) 
                                        VALUES (NULL, '".$ori."', '".$id."')";
			$query = $this->bd->query($sql);	
		}
		$sql="DELETE FROM `PERF_perfAfi` WHERE `idPerf`=".$id;
		$query = $this->bd->query($sql);
		foreach ($perfil->getAficiones() as $clave => $afi) {
			$sql = "INSERT INTO `PERF_perfAfi` (`idPerfAfi`, `idPerf`, `idAficion`, `comentario`) 
									VALUES (NULL, '".$id."', '".$clave."', '".$afi['comentario']."');";
			$query = $this->bd->query($sql);	
		}			
	}
	function borrarPerfil($id) {
		$sql="DELETE FROM `PERF_perfAfi` WHERE `idPerf`=".$id;
		$query = $this->bd->query($sql);
		$sql="DELETE FROM `PERF_perfOri` WHERE `idPerf`=".$id;
		$query = $this->bd->query($sql);
		$sql="DELETE FROM `PERF_perfiles` WHERE `idPerf`=".$id;
		$query = $this->bd->query($sql);			
	}
	private function generarArrayOrientacion($idPerf) {
		$orientacion = [];
		$sql = "SELECT * FROM PERF_perfOri WHERE idPerf=".$idPerf;
		$queryOrientacion =$this->bd->query($sql);
		while ($ori = $queryOrientacion->fetch_assoc()) {
		 	$orientacion[] = $ori['codigo']; 	
		}
		return $orientacion;
	}
	private function generarArrayAficiones($idPerf) {
		$aficiones = [];
		$sql = "SELECT PERF_aficiones.codigo,nombre,comentario 
				FROM PERF_perfAfi,PERF_aficiones 
				WHERE PERF_perfAfi.codigo=PERF_aficiones.codigo 
				  and idPerf=".$idPerf;
		$queryAficiones = $this->bd->query($sql);
		while ($afi = $queryAficiones->fetch_assoc()) {
		 	$aficiones[$afi['codigo']]['nombre'] = $afi['nombre']; 		
		 	$aficiones[$afi['codigo']]['comentario'] = $afi['comentario']; 				
		}
		return $aficiones;
	}	
}


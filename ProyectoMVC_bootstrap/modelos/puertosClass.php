<?php
require_once 'connectClass.php';
class puertos extends connect {
	private $bd;
	private $puertos = [];
	function __construct() {
		$this->bd=connect::conexion();
		$sql = 'SELECT * FROM `Barcos_Puerto`';
		$query = $this->bd->query($sql);
		while ($fila = $query->fetch_assoc()) {
			$this->puertos[$fila['id_Puerto']] = $fila['Puerto'];
		}
	}
	function getPuertos() {
		return $this->puertos;
	}
	function getPuerto($id) {
		return $this->puertos[$id];
	}
	function anadirPuerto($nombrePuerto) {
		$sql="INSERT INTO `Barcos_Puerto` (`id_Puerto`, `Puerto`)
                              VALUES (NULL, '".$nombrePuerto."')";
		$query = $this->bd->query($sql);
	}
	function borrarPuerto($id) {
		$sql="DELETE FROM Barcos_Puerto 
              WHERE `Barcos_Puerto`.`id_Puerto` =".$id;
		$query = $this->bd->query($sql);
	}
	function modificarPuerto($id,$nombrePuerto) {
		$sql="UPDATE `Barcos_Puerto`
	   SET `Puerto` ='".$nombrePuerto."'
	   WHERE `Barcos_Puerto`.`id_Puerto` =".$id;
		$query = $this->bd->query($sql);
	}

}
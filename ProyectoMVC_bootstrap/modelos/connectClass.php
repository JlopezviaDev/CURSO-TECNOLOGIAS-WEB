<?php
class connect {
	public function conexion() {
		$cnx = new mysqli('localhost:3306', 'jlopezvia_dev', 'B6_sd63f9', 'Nascor_proyecto');
		//$cnx->set_charset("utf-8");
		return $cnx;
	}
} 
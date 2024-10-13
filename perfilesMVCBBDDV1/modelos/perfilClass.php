<?php
class Perfil {
    // Propiedades del perfil
    private $nombre;
    private $ape1;
    private $year;
    private $orientacion;
    private $genero;
    private $foto;
    private $aficiones;

    // Constructor
    public function __construct($nombre, $ape1, $year = null, $orientacion = [], $genero = null, $foto = null, $aficiones = []) {
        $this->nombre = $nombre;
        $this->ape1 = $ape1;
        $this->year = $year;
        $this->orientacion = $orientacion;
        $this->genero = $genero;
        $this->foto = $foto;
        $this->aficiones = $aficiones;
    }

    // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getApe1() {
        return $this->ape1;
    }

    public function getYear() {
        return $this->year;
    }

    public function getOrientacion() {
        return $this->orientacion;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getAficiones() {
        return $this->aficiones;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApe1($ape1) {
        $this->ape1 = $ape1;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setOrientacion($orientacion) {
        if(is_array($orientacion)) {
            $this->orientacion = $orientacion;
        } else {
            throw new Exception("Orientacion debe ser un array.");
        }
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setAficiones($aficiones) {
        if(is_array($aficiones)) {
            $this->aficiones = $aficiones;
        } else {
            throw new Exception("Aficiones debe ser un array.");
        }
    }
	
}
?>

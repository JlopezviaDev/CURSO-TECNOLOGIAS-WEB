 <?php
class Barco {
    // Propiedades privadas
    private $astillero;
    private $modelo;
    private $descripcion;
    private $id_Puerto;
	private $foto;

    // Constructor
    public function __construct($astillero, $modelo, $descripcion, $id_Puerto,$foto) {
        $this->astillero = $astillero;
        $this->modelo = $modelo;
        $this->descripcion = $descripcion;
        $this->id_Puerto = $id_Puerto;
		$this->foto = $foto;
    }

    // Getters
    public function getAstillero() {
        return $this->astillero;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getIdPuerto() {
        return $this->id_Puerto;
    }
	public function getFoto() {
        return $this->foto;
    }
	

    // Setters
    public function setAstillero($astillero) {
        $this->astillero = $astillero;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setIdPuerto($id_Puerto) {
        $this->id_Puerto = $id_Puerto;
    }
	public function setFoto($foto) {
        $this->foto = $foto;
    }
	
}
?>

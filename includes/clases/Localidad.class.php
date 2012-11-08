<?php

require_once("LocalidadBD.class.php");

class Localidad extends LocalidadBD {

	function Localidad($id_localidad="", $nombre="") {
		$this->id_localidad = $id_localidad;
		$this->nombre = $nombre;
	}
	
	function setId($id_localidad) {
		$this->id_localidad = $id_localidad;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function getId() {
		return $this->id_localidad;
	}

	function getNombre() {
		return $this->nombre;
	}
	
}

?>
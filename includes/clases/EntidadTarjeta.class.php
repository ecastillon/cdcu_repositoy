<?php

require_once("EntidadTarjetaBD.class.php");

class EntidadTarjeta extends EntidadTarjetaBD {

	function EntidadTarjeta($id_entidad="", $id_tarjeta="") {
		$this->id_entidad = $id_entidad;
		$this->id_tarjeta = $id_tarjeta;
	}
	
	function setIdEntidad($id_entidad) {
		$this->id_entidad = $id_entidad;
	}

	function setIdTarjeta($id_tarjeta) {
		$this->id_tarjeta = $id_tarjeta;
	}

	function getIdEntidad() {
		return $this->id_entidad;
	}

	function getIdTarjeta() {
		return $this->id_tarjeta;
	}
}

?>
<?php

require_once("AsientosBD.class.php");

class Asientos extends AsientosBD {

	function Asientos($id_asiento="", $fila="", $columna="", $id_localidad="", $estado="", $observacion="") {
		$this->id_asiento = $id_asiento;
		$this->fila = $fila;
		$this->columna = $columna;
		$this->id_localidad = $id_localidad;
		$this->estado = $estado;
		$this->observacion = $observacion;
	}
	
	function setId($id_asiento) {
		$this->id_asiento = $id_asiento;
	}

	function setFila($fila) {
		$this->fila = $fila;
	}

	function setColumna($columna) {
		$this->columna = $columna;
	}

	function setIdLocalidad($id_localidad) {
		$this->id_localidad = $id_localidad;
	}
	
	function setEstado($estado) {
		$this->estado = $estado;
	}

	function setObservacion($observacion) {
		$this->observacion = $observacion;
	}

	function getId() {
		return $this->id_asiento;
	}

	function getFila() {
		return $this->fila;
	}

	function getColumna() {
		return $this->columna;
	}

	function getIdLocalidad() {
		return $this->id_localidad;
	}
	
	function getEstado() {
		return $this->estado;
	}

	function getObservacion() {
		return $this->observacion;
	}
	
}

?>
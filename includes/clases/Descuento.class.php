<?php

require_once("DescuentoBD.class.php");

class Descuento extends DescuentoBD {

	function Descuento($id_descuento="", $id_tarjeta="", $descuento="", $motivo="",$fecha_descuento="") {
		$this->id_descuento = $id_descuento;
		$this->id_tarjeta = $id_tarjeta;
		$this->descuento = $descuento;
		$this->motivo = $motivo;
		$this->fecha_descuento = $fecha_descuento;
	}
	
	function setId($id_descuento) {
		$this->id_descuento = $id_descuento;
	}

	function setIdTarjeta($id_tarjeta) {
		$this->id_tarjeta = $id_tarjeta;
	}

	function setDescuento($descuento) {
		$this->descuento = $descuento;
	}

	function setMotivo($motivo) {
		$this->motivo = $motivo;
	}
	
	function setFechaDescuento($fecha_descuento) {
		$this->fecha_descuento = $fecha_descuento;
	}

	function getId() {
		return $this->id_descuento;
	}

	function getIdTarjeta() {
		return $this->id_tarjeta;
	}

	function getDescuento() {
		return $this->descuento;
	}

	function getMotivo() {
		return $this->motivo;
	}
	
	function getFechaDescuento() {
		return $this->fecha_descuento;
	}
	
}

?>
<?php

require_once("TarjetaBD.class.php");

class Tarjeta extends TarjetaBD {

	function Tarjeta($id_tarjeta="", $id_asiento="", $id_socio="", $estado="", $id_plan="") {
		$this->id_tarjeta = $id_tarjeta;
		$this->id_asiento = $id_asiento;
		$this->id_socio = $id_socio;
		$this->estado = $estado;
		$this->id_plan = $id_plan;
	}
	
	function setIdTarjeta($id_tarjeta) {
		$this->id_tarjeta = $id_tarjeta;
	}

	function setIdAsiento($id_asiento) {
		$this->id_asiento = $id_asiento;
	}

	function setIdSocio($id_socio) {
		$this->id_socio = $id_socio;
	}

	function setEstado($estado) {
		$this->estado = $estado;
	}
	
	function setIdPlan($id_plan) {
		$this->id_plan = $id_plan;
	}

	function getIdTarjeta() {
		return $this->id_tarjeta;
	}

	function getIdAsiento() {
		return $this->id_asiento;
	}

	function getIdSocio() {
		return $this->id_socio;
	}

	function getIdPlan() {
		return $this->id_plan;
	}
	
}
?>
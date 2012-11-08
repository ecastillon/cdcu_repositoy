<?php

require_once("PlanBD.class.php");

class Plan extends PlanBD {

	function Plan($id_plan="", $nombre_plan="", $tipo_plan="", $valor="", $fecha="") {
		$this->id_plan = $id_plan;
		$this->nombre_plan = $nombre_plan;
		$this->tipo_plan = $tipo_plan;
		$this->valor = $valor;
		$this->fecha = $fecha;
	}
	
	function setId($id_plan) {
		$this->id_plan = $id_plan;
	}
	
	function setNombrePlan($nombre_plan) {
		$this->nombre_plan = $nombre_plan;
	}

	function setTipoPlan($tipo_plan) {
		$this->tipo_plan = $tipo_plan;
	}
	
	function setValor($valor) {
		$this->valor = $valor;
	}
	
	function setFecha($fecha) {
		$this->fecha = $fecha;
	}
	
	function getId() {
		return $this->id_plan;
	}
	
	function getNombrePlan() {
		return $this->nombre_plan;
	}

	function getTipoPlan() {
		return $this->tipo_plan;
	}
	
	function getValor() {
		return $this->valor;
	}
	
	function getFecha() {
		return $this->fecha;
	}
}
	
?>
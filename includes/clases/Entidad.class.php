<?php

require_once("EntidadBD.class.php");

class Entidad extends EntidadBD {

	function Entidad($id_entidad="", $nombre_entidad="", $fono_entidad="", $direccion_entidad="", $email_entidad="", $tipo_entidad="", $id_socio_titular="") {
		$this->id_entidad = $id_entidad;
		$this->nombre_entidad = $nombre_entidad;
		$this->fono_entidad = $fono_entidad;
		$this->direccion_entidad = $direccion_entidad;
		$this->email_entidad = $email_entidad;
		$this->tipo_entidad = $tipo_entidad;
		$this->id_socio_titular = $id_socio_titular;
	}
	
	function setId($id_entidad) {
		$this->id_entidad = $id_entidad;
	}
	
	function setNombreEntidad($nombre_entidad) {
		$this->nombre_entidad = $nombre_entidad;
	}

	function setFono($fono_entidad) {
		$this->fono_entidad = $fono_entidad;
	}
	
	function setDireccion($direccion_entidad) {
		$this->direccion_entidad = $direccion_entidad;
	}
	
	function setEmail($email_entidad) {
		$this->email_entidad = $email_entidad;
	}
	
	function setTipoEntidad($tipo_entidad) {
		$this->tipo_entidad = $tipo_entidad;
	}
	
	function setIdSocioTitular($id_socio_titular) {
		$this->id_socio_titular = $id_socio_titular;
	}
	
	function getId() {
		return $this->id_entidad;
	}
	
	function getNombreEntidad() {
		return $this->nombre_entidad;
	}

	function getFono() {
		return $this->fono_entidad;
	}
	
	function getDireccion() {
		return $this->direccion_entidad;
	}
	
	function getEmail() {
		return $this->email_entidad;
	}
	
	function getTipoEntidad() {
		return $this->tipo_entidad;
	}
	
	function getIdSocioTitular() {
		return $this->id_socio_titular;
	}
}
	
?>
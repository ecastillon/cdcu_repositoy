<?php

require_once("PagoBD.class.php");

class Pago extends PagoBD {

	function Pago($id_pago="", $id_tarjeta="", $fecha_pago="", $valor_pago="", $forma_pago="", $nro_documento="", $banco="", $fecha_documento="", $id_usuario="", $nro_comprobante="") {
		$this->id_pago = $id_pago;
		$this->id_tarjeta = $id_tarjeta;
		$this->fecha_pago = $fecha_pago;
		$this->valor_pago = $valor_pago;
		$this->forma_pago = $forma_pago;
		$this->nro_documento = $nro_documento;
		$this->banco = $banco;
		$this->fecha_documento = $fecha_documento;
		$this->id_usuario = $id_usuario;
		$this->nro_comprobante = $nro_comprobante;
	}
	
	function setId($id_pago) {
		$this->id_pago = $id_pago;
	}
	
	function setIdTarjeta($id_tarjeta) {
		$this->id_tarjeta = $id_tarjeta;
	}

	function setFechaPago($fecha_pago) {
		$this->fecha_pago = $fecha_pago;
	}
	
	function setValorPago($valor_pago) {
		$this->valor_pago = $valor_pago;
	}
	
	function setFormaPago($forma_pago) {
		$this->forma_pago = $forma_pago;
	}
	
	function setNroDocumento($nro_documento) {
		$this->nro_documento = $nro_documento;
	}
	
	function setBanco($banco) {
		$this->banco = $banco;
	}
	
	function setFechaDocumento($fecha_documento) {
		$this->fecha_documento = $fecha_documento;
	}
	
	function setIdUsuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}
	
	function setNroComprobante($nro_comprobante) {
		$this->nro_comprobante = $nro_comprobante;
	}
	
	function getId() {
		return $this->id_pago;
	}
	
	function getIdTarjeta() {
		return $this->id_tarjeta;
	}

	function getFechaPago() {
		return $this->fecha_pago;
	}
	
	function getValorPago() {
		return $this->valor_pago;
	}
	
	function getFormaPago() {
		return $this->forma_pago;
	}
	
	function getNroDocumento() {
		return $this->nro_documento;
	}
	
	function getBanco() {
		return $this->banco;
	}
	
	function getFechaDocumento() {
		return $this->fecha_documento;
	}
	
	function getIdUsuario() {
		return $this->id_usuario;
	}
	
	function getNroComprobante() {
		return $this->nro_comprobante;
	}
}
	
?>
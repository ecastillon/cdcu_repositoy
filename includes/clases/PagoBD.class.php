<?php

require_once("BaseDatos.class.php");

class PagoBD extends BaseDatos {

	function PagoBD() {
	}
	
	function save() {
		$sql = "INSERT INTO pago (id_tarjeta, fecha_pago, valor_pago, forma_pago, nro_documento, banco, fecha_documento, id_usuario, nro_comprobante) VALUES (".$this->id_tarjeta.",'".$this->fecha_pago."',".$this->valor_pago.",".$this->forma_pago.",'". $this->nro_documento."','".$this->banco."','".$this->fecha_documento."',".$this->id_usuario.",".$this->nro_comprobante.")";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}
	
	function delete() {
		$sql = "DELETE FROM pago WHERE id_pago = ".$this->id_pago;
		return $this->deletebd($sql);
	}
	
	function update() {
		$sql = "UPDATE pago SET id_tarjeta = ".$this->id_tarjeta.", fecha_pago = '".$this->fecha_pago."', valor_pago = ".$this->valor_pago.", forma_pago = ".$this->forma_pago.", nro_documento = '". $this->nro_documento."', banco = '".$this->banco."', fecha_documento = '".$this->fecha_documento."', id_usuario = ".$this->id_usuario.", nro_comprobante = ".$this->nro_comprobante." WHERE id_pago = ".$this->id_pago;
		return $this->updatebd($sql);
	}
	
	function getPagos() {
		$sql = "SELECT * FROM pago";
		$pagos = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$pagos[] = new Pago($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $pagos;
	}
	
	function getPago($id_pago="") {
		$sql = "SELECT * FROM pago WHERE id_pago = ".$id_pago.";";
		$this->connectClass();
		$index = $this->query($sql);
		$pago = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$pago = new Pago($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $pago;
	}
}

?>
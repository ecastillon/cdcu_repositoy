<?php

require_once("BaseDatos.class.php");

class DescuentoBD extends BaseDatos {

	function DescuentoBD() {
	}

	function save() {
		$sql = "INSERT INTO descuento (id_tarjeta, descuento, motivo, fecha_descuento) VALUES (".$this->id_tarjeta.",".$this->descuento.",'".$this->motivo."','".$this->fecha_descuento."')";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}

	function delete() {
		$sql = "DELETE FROM descuento WHERE id_descuento = ".$this->id_descuento;
		return $this->deletebd($sql);
	}

	function update() {
		$sql = "UPDATE descuento SET descuento = ".$this->descuento.", motivo = '".$this->motivo."', fecha_descuento = '".$this->fecha_descuento."' WHERE id_descuento = ".$this->id_descuento;
		return $this->updatebd($sql);
	}

	function getDescuentos() {
		$sql = "SELECT * FROM descuento";
		$descuentos = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$descuentos[] = new Descuento($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $descuentos;
	}

	function getDescuento($id_descuento="") {
		$sql = "SELECT * FROM descuento WHERE id_descuento = ".$id_descuento.";";
		$this->connectClass();
		$index = $this->query($sql);
		$descuento = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$descuento = new Descuento($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $descuento;
	}

}

?>
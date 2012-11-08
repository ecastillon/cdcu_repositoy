<?php

require_once("BaseDatos.class.php");

class TarjetaBD extends BaseDatos {

	function TarjetaBD() {
	}

	function save() {
		$sql = "INSERT INTO tarjeta (id_asiento, id_socio, estado) VALUES (".$this->id_asiento.",".$this->id_socio.",".$this->estado.",".$this->id_plan.")";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}

	function delete() {
		$sql = "DELETE FROM tarjeta WHERE id_tarjeta = ".$this->id_tarjeta;
		return $this->deletebd($sql);
	}

	function update() {
		$sql = "UPDATE tarjeta SET id_asiento = ".$this->id_asiento.", id_socio = ".$this->id_socio.", estado = ".$this->estado.", id_plan = ".$this->id_plan." WHERE id_tarjeta = ".$this->id_tarjeta;
		return $this->updatebd($sql);
	}

	function getTarjetas() {
		$sql = "SELECT * FROM tarjeta";
		$tarjetas = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$tarjetas[] = new Tarjeta($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $tarjetas;
	}

	function getTarjeta($id_tarjeta="") {
		$sql = "SELECT * FROM tarjeta WHERE id_tarjeta = ".$id_tarjeta.";";
		$this->connectClass();
		$index = $this->query($sql);
		$tarjeta = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$tarjeta = new Tarjeta($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $tarjeta;
	}
	
	function getTarjetaActiva($id_socio="") {
		$sql = "SELECT * FROM tarjeta WHERE id_socio = ".$id_socio." AND estado = 1;";
		$this->connectClass();
		$index = $this->query($sql);
		$tarjeta = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$tarjeta = new Tarjeta($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $tarjeta;
	}

}

?>
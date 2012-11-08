<?php

require_once("BaseDatos.class.php");

class AsientosBD extends BaseDatos {

	function AsientosBD() {
	}

	function save() {
		$sql = "INSERT INTO asientos (fila, columna, id_localidad, estado, observacion) VALUES ('".$this->fila."',".$this->columna.",".$this->id_localidad.",'".$this->observacion."')";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}

	function delete() {
		$sql = "DELETE FROM asientos WHERE id_asiento = ".$this->id_asiento;
		return $this->deletebd($sql);
	}

	function update() {
		$sql = "UPDATE asientos SET fila = '".$this->fila."', columna = ".$this->columna.", id_localidad = ".$this->id_localidad.", estado = ".$this->estado.", observacion = '".$this->observacion."' WHERE id_asiento = ".$this->id_asiento;
		return $this->updatebd($sql);
	}

	function getAsientos() {
		$sql = "SELECT * FROM asientos";
		$asientos = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$asientos[] = new Asientos($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $asientos;
	}

	function getAsiento($id_asiento="") {
		$sql = "SELECT * FROM asientos WHERE id_asiento = ".$id_asiento.";";
		$this->connectClass();
		$index = $this->query($sql);
		$asiento = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$asiento = new Asiento($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $asiento;
	}

}

?>
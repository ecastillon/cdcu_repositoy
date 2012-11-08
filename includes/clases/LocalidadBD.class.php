<?php

require_once("BaseDatos.class.php");

class LocalidadBD extends BaseDatos {

	function LocalidadBD() {
	}

	function save() {
		$sql = "INSERT INTO localidad (nombre) VALUES ('".$this->nombre."')";
		if(!$this->insertbd($sql)) {
			return false;
		}
		return true;
	}

	function delete() {
		$sql = "DELETE FROM localidad WHERE id_localidad = ".$this->id_localidad;
		return $this->deletebd($sql);
	}

	function update() {
		$sql = "UPDATE localidad SET nombre = '".$this->nombre."' WHERE id_localidad = ".$this->id_localidad;
		return $this->updatebd($sql);
	}

	function getLocalidades() {
		$sql = "SELECT * FROM localidad";
		$localidades = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$localidades[] = new Localidad($row[$i++],$row[$i++]);
		}
		$this->close();
		return $localidades;
	}

	function getLocalidad($id_localidad="") {
		$sql = "SELECT * FROM localidad WHERE id_localidad = ".$id_localidad.";";
		$this->connectClass();
		$index = $this->query($sql);
		$localidad = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$localidad = new Localidad($row[$i++],$row[$i++]);
		}
		$this->close();
		return $localidad;
	}

}

?>
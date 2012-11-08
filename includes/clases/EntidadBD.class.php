<?php

require_once("BaseDatos.class.php");

class EntidadBD extends BaseDatos {

	function EntidadBD() {
	}
	
	function save() {
		$sql = "INSERT INTO entidad (nombre_entidad, fono_entidad, direccion_entidad, email_entidad, tipo_entidad, id_socio_titular) VALUES ('".$this->nombre_entidad."','".$this->fono_entidad."','".$this->direccion_entidad."','".$this->email_entidad."',". $this->tipo_entidad.",".$this->id_socio_titular.")";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}
	
	function delete() {
		$sql = "DELETE FROM entidad WHERE id_entidad = ".$this->id_entidad;
		return $this->deletebd($sql);
	}
	
	function update() {
		$sql = "UPDATE entidad SET nombre_entidad = '".$this->nombre_entidad."', fono_entidad = '".$this->fono_entidad."', direccion_entidad = '".$this->direccion_entidad."', email_entidad = '".$this->email_entidad."', tipo_entidad = ". $this->tipo_entidad.", id_socio_titular = ".$this->id_socio_titular."  WHERE id_entidad = ".$this->id_entidad;
		return $this->updatebd($sql);
	}
	
	function getEntidades() {
		$sql = "SELECT * FROM entidad";
		$entidades = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$entidades[] = new Entidad($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $entidades;
	}
	
	function getEntidad($id_entidad="") {
		$sql = "SELECT * FROM entidad WHERE id_entidad = ".$id_entidad.";";
		$this->connectClass();
		$index = $this->query($sql);
		$entidad = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$entidad = new Entidad($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $entidad;
	}
}

?>
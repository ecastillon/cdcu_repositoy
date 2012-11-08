<?php

require_once("BaseDatos.class.php");

class EntidadTarjetaBD extends BaseDatos {

	function EntidadTarjetaBD() {
	}

	function save() {
		$sql = "INSERT INTO entidad_tarjeta (id_entidad, id_tarjeta) VALUES (".$this->id_entidad.",".$this->id_tarjeta.")";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}

	function delete() {
		$sql = "DELETE FROM entidad_tarjeta WHERE id_entidad = ".$this->id_entidad." AND id_tarjeta = ".$this->id_tarjeta;
		return $this->deletebd($sql);
	}
}

?>
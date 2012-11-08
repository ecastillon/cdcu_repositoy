<?php

require_once("BaseDatos.class.php");

class SocioBD extends BaseDatos {

	function SocioBD() {
	}
	
	function save() {
		$sql = "INSERT INTO socio (rut_socio, nombres, apellido_paterno, apellido_materno, direccion, telefono_movil, telefono_fijo, fecha_inscripcion, email, estado, fecha_nacimiento, password) VALUES ('".$this->rut_socio."','".$this->nombres."','".$this->apellido_paterno."','".$this->apellido_materno."','".$this->direccion."','".$this->telefono_movil."','".$this->telefono_fijo."','".$this->fecha_inscripcion."','".$this->email."',".$this->estado.",'".$this->fecha_nacimiento."','".$this->password."')";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}
	
	function delete() {
		$sql = "DELETE FROM socio WHERE id_socio = ".$this->id_socio;
		return $this->deletebd($sql);
	}
	
	function update() {
		$sql = "UPDATE socio SET rut_socio = '".$this->rut_socio."', nombres = '".$this->nombres."', apellido_paterno = '".$this->apellido_paterno."', apellido_materno = '".$this->apellido_materno."', direccion = '".$this->direccion."', telefono_movil = '".$this->telefono_movil."', telefono_fijo = '".$this->telefono_fijo."', fecha_inscripcion = '".$this->fecha_inscripcion."', email = '".$this->email."', estado = ".$this->estado.", fecha_nacimiento = '".$this->fecha_nacimiento."', password = '".$this->password ."' WHERE id_socio = ".$this->id_socio;
		return $this->updatebd($sql);
	}
	
	function getSocios() {
		$sql = "SELECT * FROM socio";
		$socios = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$socios[] = new Socio($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $socios;
	}
	
	function getSocio($id_socio="") {
		$sql = "SELECT * FROM socio WHERE id_socio = ".$id_socio.";";
		$this->connectClass();
		$index = $this->query($sql);
		$socio = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$socio = new Socio($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $socio;
	}
}

?>
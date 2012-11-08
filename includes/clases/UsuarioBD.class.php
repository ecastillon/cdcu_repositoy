<?php

require_once("BaseDatos.class.php");

class UsuarioBD extends BaseDatos {

	function UsuarioBD() {
	}

	function save() {
		$sql = "INSERT INTO usuario (nombres, apellidos, nivel_acceso, rut_usuario, password) VALUES ('".$this->nombres."','".$this->apellidos."',".$this->nivel_acceso.",'".$this->rut_usuario."','".$this->password."')";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}

	function delete() {
		$sql = "DELETE FROM usuario WHERE id_usuario = ".$this->id_usuario;
		return $this->deletebd($sql);
	}

	function update() {
		$sql = "UPDATE usuario SET nombres = '".$this->nombres."', apellidos = '".$this->apellidos."', nivel_acceso = ".$this->nivel_acceso.", rut_usuario = '".$this->rut_usuario."', password = '".$this->password."' WHERE id_usuario = ".$this->id_usuario;
		return $this->updatebd($sql);
	}

	function getUsuarios() {
		$sql = "SELECT * FROM usuario";
		$usuarios = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$usuarios[] = new Usuario($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $usuarios;
	}

	function getUsuario($id_usuario="") {
		$sql = "SELECT * FROM usuario WHERE id_usuario = ".$id_usuario;
		$this->connectClass();
		$index = $this->query($sql);
		$usuario = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$usuario = new Usuario($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $usuario;
	}
	
	function login() {
		$sql = "SELECT id_usuario FROM usuario WHERE rut_usuario = '".$this->rut_usuario."' AND password = '".$this->password."'";
		$this->connectClass();
		$index = $this->query($sql);
		if($row = $this->fetch($index))
		{	$this->setId($row[0]);
			$this->close();
			return true;
		}
		$this->close();
		return false;
	}

}

?>
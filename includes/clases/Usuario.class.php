<?php

require_once("UsuarioBD.class.php");

class Usuario extends UsuarioBD {

	function Usuario($id_usuario="", $nombres="", $apellidos="", $nivel_acceso="", $rut_usuario="", $password="") {
		$this->id_usuario = $id_usuario;
		$this->nombres = $nombres;
		$this->apellidos = $apellidos;
		$this->nivel_acceso = $nivel_acceso;
		$this->rut_usuario = $rut_usuario;
		$this->password = $password;
	}
	
	function setId($id_usuario) {
		$this->id_usuario = $id_usuario;
	}

	function setNombres($nombres) {
		$this->nombres = $nombres;
	}

	function setApellidos($apellidos) {
		$this->apellidos = $apellidos;
	}

	function setNivelAcceso($nivel_acceso) {
		$this->nivel_acceso = $nivel_acceso;
	}
	
	function setRutUsuario($rut_usuario) {
		$this->rut_usuario = $rut_usuario;
	}
	
	function setPassword($password) {
		$this->password = $password;
	}

	function getId() {
		return $this->id_usuario;
	}

	function getNombres() {
		return $this->nombres;
	}

	function getApellidos() {
		return $this->apellidos;
	}

	function getNivelAcceso() {
		return $this->nivel_acceso;
	}
	
	function getRutUsuario() {
		return $this->rut_usuario;
	}
	
	function getPassword() {
		return $this->password;
	}
	
}

?>
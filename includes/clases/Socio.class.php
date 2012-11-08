<?php

require_once("SocioBD.class.php");

class Socio extends SocioBD {

	function Socio($id_socio="", $rut_socio="", $nombres="", $apellido_paterno="", $apellido_materno="", $direccion="", $telefono_movil="", $telefono_fijo="", $fecha_inscripcion="", $email="", $estado="", $fecha_nacimiento="", $password="") {
		$this->id_socio = $id_socio;
		$this->rut_socio = $rut_socio;
		$this->nombres = $nombres;
		$this->apellido_paterno = $apellido_paterno;
		$this->apellido_materno = $apellido_materno;
		$this->direccion = $direccion;
		$this->telefono_movil = $telefono_movil;
		$this->telefono_fijo = $telefono_fijo;
		$this->fecha_inscripcion = $fecha_inscripcion;
		$this->email = $email;
		$this->estado = $estado;
		$this->fecha_nacimiento = $fecha_nacimiento;
		$this->password = $password;
	}
	
	function setId($id_socio) {
		$this->id_socio = $id_socio;
	}
	
	function setRut($rut_socio) {
		$this->rut_socio = $rut_socio;
	}

	function setNombres($nombres) {
		$this->nombres = $nombres;
	}
	
	function setApellidoPaterno($apellido_paterno) {
		$this->apellido_paterno = $apellido_paterno;
	}
	
	function setApellidoMaterno($apellido_materno) {
		$this->apellido_materno = $apellido_materno;
	}
	
	function setDireccion($direccion) {
		$this->direccion = $direccion;
	}
	
	function setTelefonoMovil($telefono_movil) {
		$this->telefono_movil = $telefono_movil;
	}

	function setTelefonoFijo($telefono_fijo) {
		$this->telefono_fijo = $telefono_fijo;
	}
	
	function setFechaInscripcion($fecha_inscripcion) {
		$this->fecha_inscripcion = $fecha_inscripcion;
	}
	
	function setEmail($email) {
		$this->email = $email;
	}

	function setEstado($estado) {
		$this->estado = $estado;
	}
	
	function setFechaNacimiento($fecha_nacimiento) {
		$this->fecha_nacimiento = $fecha_nacimiento;
	}
	
	function setPassword($password) {
		$this->password = $password;
	}
	
	function getId() {
		return $this->id_socio;
	}
	
	function getRut() {
		return $this->rut_socio;
	}

	function getNombres() {
		return $this->nombres;
	}
	
	function getApellidoPaterno() {
		return $this->apellido_paterno;
	}
	
	function getApellidoMaterno() {
		return $this->apellido_materno;
	}
	
	function getDireccion($direccion) {
		return $this->direccion;
	}
	
	function getTelefonoMovil() {
		return $this->telefono_movil;
	}

	function getTelefonoFijo() {
		return $this->telefono_fijo;
	}
	
	function getFechaInscripcion() {
		return $this->fecha_inscripcion;
	}
	
	function getEmail() {
		return $this->email;
	}

	function getEstado() {
		return $this->estado;
	}
	
	function getFechaNacimiento() {
		return $this->fecha_nacimiento;
	}
	
	function getPassword() {
		return $this->password;
	}
}

?>
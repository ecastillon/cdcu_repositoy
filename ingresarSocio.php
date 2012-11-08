<?php
	
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
	
	include 'includes/header.php';
	
	$rut = $_POST["rut"];
	$nombres = $_POST["nombres"];
	$apellido_paterno = $_POST["apellido_paterno"];
	$apellido_materno = $_POST["apellido_materno"];
	$direccion = $_POST["direccion"];
	$telefono_movil = $_POST["celular"];
	$telefono_fijo = $_POST["telefono_fijo"];
	$fecha_inscripcion = $_POST["fecha_inscripcion"];
	$email = $_POST["email"];
	$estado = $_POST["estado"];;
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$password = $_POST["password"];
	
	$s = new Socio('',$rut,$nombres,$apellido_paterno,$apellido_materno,$direccion,$telefono_movil,$telefono_fijo,$fecha_inscripcion,$email,$estado,$fecha_nacimiento,$password);
	if($s->save())
		echo "success";
	else
		echo "error";

?>
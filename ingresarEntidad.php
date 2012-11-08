<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$nombre = $_POST['nombre'];
	$fono = $_POST['fono'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$tipo = $_POST['tipo'];
	$titular = $_POST['titular'];
	$entidad = new Entidad('',$nombre,$fono,$direccion,$email,$tipo,$titular);
	if($entidad->save())
		echo "success";
	else
		echo "error";

?>
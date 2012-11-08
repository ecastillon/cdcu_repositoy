<?php

	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$nombre_localidad = $_POST['nombre'];
	$agrupacion = $_POST['agrupacion'];
	$valor = $_POST['valor'];
	$fecha = $_POST['fecha'];
	$hora = date("h:i:s");

	$plan = new Plan('',$nombre_localidad." ".$agrupacion,2,$valor,$fecha." ".$hora);
	if($plan->save())
		echo "success";
	else
		echo "error";

?>
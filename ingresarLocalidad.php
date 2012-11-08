<?php
	
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
	
	include 'includes/header.php';
	
	$nombre = $_POST['nombre'];
	$localidad = new Localidad('',$nombre);
	if($localidad->save())
		echo "success";
	else
		echo "error";

?>
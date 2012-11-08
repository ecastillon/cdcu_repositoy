<?php
	
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
	
	include 'includes/header.php';
	
	$u = new Usuario();
	$u = $u->getUsuario($id);	
	if($_POST["tipo"] == "nombre")
		echo "<h4>".$u->getNombres()."</h4><h4>".$u->getApellidos()."</h4>";
	else if($_POST["tipo"] == "rut")
		echo "<h4>".$u->getRutUsuario()."</h4>";
	
?>
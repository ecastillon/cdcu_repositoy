<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$s = new Socio();
	if(isset($_POST['id'])) {
		$socio = $s->getSocio($_POST['id']);
		echo json_encode($socio);
	}
	else {
		$socios = $s->getSocios();
		echo json_encode($socios);
	}

?>
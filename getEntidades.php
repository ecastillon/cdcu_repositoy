<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$e = new Entidad();
	if(isset($_POST['id'])) {
		$ent = $e->getEntidad($_POST['id']);
		echo json_encode($ent);
	}
	else {
		$ents = $e->getEntidades();
		echo json_encode($ents);
	}

?>
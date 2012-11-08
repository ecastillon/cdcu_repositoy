<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$l = new Localidad();
	if(isset($_POST['id'])) {
		$loc = $l->getLocalidad($_POST['id']);
		echo json_encode($loc);
	}
	else {
		$locs = $l->getLocalidades();
		echo json_encode($locs);
	}

?>
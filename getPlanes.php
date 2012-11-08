<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$p = new Plan();
	if(isset($_POST['id'])) {
		$plan = $p->getPlan($_POST['id']);
		echo json_encode($plan);
	}
	else {
		$planes = $p->getPlanes();
		echo json_encode($planes);
	}

?>
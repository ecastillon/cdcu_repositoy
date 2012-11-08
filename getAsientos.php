<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$a = new Asientos();
	if(isset($_POST['id'])) {
		$asiento = $a->getAsiento($_POST['id']);
		echo json_encode($asiento);
	}
	else {
		$asientos = $a->getAsientos();
		echo json_encode($asientos);
	}

?>
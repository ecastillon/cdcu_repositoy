<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$id_asiento = $_POST['asiento'];
	$id_socio = $_POST['socio'];
	$estado = $_POST['estado'];
	$id_plan = $_POST['plan'];
	$tarjeta = new Tarjeta('',$id_asiento,$id_socio,$estado,$id_plan);
	if($tarjeta->save())
		echo "success";
	else
		echo "error";

?>
<?php
	
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
	
	include 'includes/header.php';
	
	$is_ajax = $_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax)
	{
		$nombres = $_REQUEST['nombres'];
		$apellidos = $_REQUEST['apellidos'];
		$rut = $_REQUEST['rut'];
		$password = $_REQUEST['password'];
		$nivel_acceso = $_REQUEST['nivel_acceso'];
		
		$usuario = new Usuario('',$nombres, $apellidos, $nivel_acceso, $rut, $password);
		
		if($usuario->save())
		{
			echo "success";	
		}
	}
	
?>
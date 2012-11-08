<?php
	
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
	
	include 'includes/header.php';
	
	if(isset($_POST["username"]) && isset($_POST["password"])) {
		$u = new Usuario();
		$u->setRutUsuario($_POST["username"]);
		$u->setPassword($_POST["password"]);
		
		if($u->login())
		{	session_register("id");
			$_SESSION["id"] = $u->getId();
			unset($u);
			echo "success";
		}
		else
		{	session_destroy();
			unset($u);
			echo "error";
		}
	}
	
?>
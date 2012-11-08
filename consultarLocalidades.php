<?php
	
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
	
	include 'includes/header.php';
	
	$loc = new Localidad();
	$localidades = $loc->getLocalidades();
	$locs = "";
	
	if(count($localidades) == 0)
	{
		$locs = "<p>No existen localidades almacenadas</p>";
	}
	else
	{
		foreach($localidades as $l)
		{
			$locs = $locs."<p>".$l->getNombre()."</p>";
		}
	}
	echo $locs;
	
?>
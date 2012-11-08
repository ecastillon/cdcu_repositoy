<?php
	
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
	
	include 'includes/header.php';
	
	$descuento = $_POST["descuento"];
	$id_tarjeta = $_POST["id_tarjeta"];
	$motivo = $_POST["motivo"];
	$fecha = strftime( "%Y-%m-%d %H:%M:%S", time() );
	
	echo "descuento: ".$descuento;
	echo "id_tarjeta: ".$id_tarjeta;
	echo "motivo: ".$motivo;
	echo "fecha: ".$fecha;
	
	
	$d = new Descuento('',$id_tarjeta,$descuento,$motivo,"NOW()");
	if($d->save())
		echo "success";
	else
		echo "error";

?>
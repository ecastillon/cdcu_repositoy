<script>
	$.post("getTarjetasActivas.php", {id_socio: ("#socio").val()}, function(data_loc) {
	tarjeta = $.parseJSON(data);
	$("#motivo > option:last").after("<input name='id_tarjeta' id='id_tarjeta' type='hidden' value='"+tarjeta[0].id_tarjeta+"' />");
	});
</script>
<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
		
	include 'includes/header.php';
	
	$t = new Tarjeta();
	if(isset($_POST['id'])) {
		$tarjeta = $t->getTarjeta($_POST['id']);
		echo json_encode($tarjeta);
	}
	else if(isset($_POST['id_socio'])){
		$tarjeta_activa = $s->getTarjetaActiva($_POST['id_socio']);
		echo json_encode($tarjeta_activa);
	}
?>
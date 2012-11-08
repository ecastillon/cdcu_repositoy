<script>
	$.post("getTarjetasActivas.php", {id_socio: ("#socio").val()}, function(data_loc) {
	var tarjeta = $.parseJSON(data);
	$("#motivo > option:last").after("<input name='id_tarjeta' id='id_tarjeta' type='hidden' value='"+tarjeta[0].id_tarjeta+"' />");
	});
</script>
<?php		
	include 'includes/header.php';
	$id = 1;
	$t = new Tarjeta();
	$tarjeta = $t->getTarjeta($id);
		
	echo "Tarjeta Activa: ".$tarjeta_activa[0];
?>
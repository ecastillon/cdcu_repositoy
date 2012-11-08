<?php
	session_start();
	$id = 0;
	if(isset($_SESSION["id"]))
		$id = $_SESSION["id"];
	if(!$id)
		header("Location: index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="gmapkey" content="" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<title>Club Deportivo Coquimbo Unido</title>

<!--<link rel="shortcut icon" href="includes/icons/favicon.png">-->

<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
<link rel="stylesheet" type="text/css" href="includes/css/menu.css" />
<link rel="stylesheet" type="text/css" href="includes/css/uniform.default.css" />
<link rel="stylesheet" type="text/css" href="includes/css/jquery-ui-1.8.23.custom.css" />
<!--[if IE]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->

<script type="text/javascript" src="includes/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="includes/js/menu.js"></script>
<script type="text/javascript" src="includes/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="includes/js/jquery-ui-1.8.23.custom.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	
	var data1 = {
		tipo: "nombre"
	};
	
	var data2 = {
		tipo: "rut"
	};
	
	$.ajax({
		type: "POST",
		url: "datosUsuario.php",
		data: data1,
		success: function(result)
		{
			$("#nombre_usuario").html(result);
		}
	});
	
	$.ajax({
		type: "POST",
		url: "datosUsuario.php",
		data: data2,
		success: function(result)
		{
			$("#rut_usuario").html(result);
		}
	});
	
	$("#logout").click(function() {
	
		if(confirm("¿Está seguro que desea cerrar la sesión?")) {
		
			$.ajax({
				type: "POST",
				url: "doLogout.php",
				success: function(response)
				{
					if(response == 'success') {
						window.location.replace("index.php");
					}
				}
			});
			
		}
	});
	
	$('input, textarea, select, button').uniform();
	
	$('#ing_user').click(function () {
		$('#cuerpo > #der').load('ingresarUsuario.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
    
    $('#ing_loc').click(function () {
		$('#cuerpo > #der').load('ingresarLocalidad.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
    
    $('#ing_plan').click(function () {
		$('#cuerpo > #der').load('ingresarPlan.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
    
    $('#ing_socio').click(function () {
		$('#cuerpo > #der').load('ingresarSocio.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
    
    $('#ing_tarj').click(function () {
		$('#cuerpo > #der').load('ingresarTarjeta.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
    
    $('#mod_tarj').click(function () {
		$('#cuerpo > #der').load('modificarTarjeta.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
    
    $('#mod_socio').click(function () {
		$('#cuerpo > #der').load('modificarSocio.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
	
	$('#ing_ent').click(function () {
		$('#cuerpo > #der').load('ingresarEntidad.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
    
    $('#mod_ent').click(function () {
		$('#cuerpo > #der').load('modificarEntidad.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
    });
	
	$('#ing_desc').click(function () {
		$('#cuerpo > #der').load('ingresarDescuento.html', function () {
			$('#cuerpo > #der').find('input, textarea, select, button').uniform();
		});
	});
});

</script>

</head>
<body>
<div id="pag">
	
	<div id="header">
		<div id="izq">
			<img src="includes/images/cdcu_logo.gif" width=150 height=150 alt="logo" />
		</div>
		<div id="der">
			<h1>Club Deportivo Coquimbo Unido</h1>
		</div>
	</div>
	
	<div id="botonera">
		<div id="menu">
			<ul class="menu">
				<li><a href="index.php" class="parent"><span>Inicio</span></a></li>
			    <li><a class="parent"><span>Socios</span></a>
			        <div><ul>
			            <li><a id="ing_socio"><span>Ingresar</span></a></li>
			            <li><a id="mod_socio"><span>Modificar</span></a></li>
			            <li><a class="parent"><span>Tarjetas</span></a>
			                <div><ul>
			                    <li><a id="ing_tarj"><span>Ingresar</span></a></li>
			                    <li><a id="mod_tarj"><span>Modificar</span></a></li>
			                    <li><a class="parent"><span>Plan</span></a>
			                        <div><ul>
			                            <li><a id="ing_plan"><span>Ingresar</span></a></li>
			                            <li><a id="mod_plan"><span>Modificar</span></a></li>
			                        </ul></div>
			                    </li>
			                </ul></div>
			            </li>
			            <li><a class="parent"><span>Entidades</span></a>
			                <div><ul>
			                    <li><a id="ing_ent"><span>Ingresar</span></a></li>
			                    <li><a id="mod_ent"><span>Modificar</span></a></li>
			                </ul></div>
			            </li>
			            <li><a class="parent"><span>Descuentos</span></a>
			                <div><ul>
			                    <li><a id="ing_desc"><span>Ingresar</span></a></li>
			                    <li><a id="mod_desc"><span>Modificar</span></a></li>
			                </ul></div>
			            </li>
			        </ul></div>
			    </li>
			    <li><a class="parent"><span>Pagos</span></a>
			        <div><ul>
			            <li><a id="ing_pago"><span>Ingresar</span></a></li>
			            <li><a id="mod_pago"><span>Modificar</span></a></li>
			        </ul></div>
			    </li>
			    <li><a class="parent"><span>Localidades</span></a>
			        <div><ul>
			            <li><a id="ing_loc"><span>Ingresar</span></a></li>
			            <li><a id="mod_loc"><span>Modificar</span></a></li>
			            <li><a class="parent"><span>Asientos</span></a>
			                <div><ul>
			                    <li><a id="ing_asient"><span>Ingresar</span></a></li>
			                    <li><a id="mod_asient"><span>Modificar</span></a></li>
			                </ul></div>
			            </li>
			        </ul></div>
			    </li>
			    <li><a class="parent"><span>Usuarios</span></a>
			        <div><ul>
			            <li><a id="ing_user"><span>Ingresar</span></a></li>
			            <li><a id="mod_user"><span>Modificar</span></a></li>
			        </ul></div>
			    </li>
			    <li class="last"><a class="parent"><span>Reportes</span></a></li>
			</ul>
		</div>
	</div>
	
	<div id="cuerpo">
		<div id="izq">
			<ul>
				<li><label>Nombre</label><div id="nombre_usuario"></div></li>
				<li><label>RUT</label><div id="rut_usuario"></div></li>
				<li><input name="logout" type="button" id="logout" value="Cerrar Sesión" /></li>
			</ul>
		</div>
		<div id="der">
			<h3>Contenido inicial</h3>
		</div>
	</div>
	<div id="footer">
		<p>Club Deportivo Coquimbo Unido &copy; 2012 Todos los derechos reservados &nbsp;&nbsp;&nbsp; <a href="http://apycom.com">jQuery Menu by Apycom</a></p>
	</div>
</div>
</body>
</html>
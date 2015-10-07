<?php
if (!session_id()) {
	include_once "../include/Carrito.class.php";
	$_SESSION["oCarrito"] = new Carrito();
}

?>
<!DOCTYPE>
<html lang="es">
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/dos.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
					<span class="sr-only">	desplegar/ ocultar menu </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a  class="navbar-brand">Flora</a>
			</div>
			<div class="collapse navbar-collapse" id="navegacion-fm">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Inicio </a></li>
					<li class="dropdown">
						<li><a href="html/arreglos.html" >Arreglos Predeterminados</a></li>
						<li><a href="html/log.html">Personalizacion </a></li>
						<li><a href="https://www.facebook.com/Flora-Online-1447976762164471/timeline/?ref=aymt_homepage_panel">Fan Page</a></li> 
						<li><a href="html/contacto.html">Contacto</a></li>

					</ul>
					<form action="" class="navbar-form navbar-right" role="search">
						<div class="uno" ><a href="html/log.html" >Registrarse</a></div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Buscar">
						</div>

						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search">
							</span>

						</form>

					</div>
				</div>
			</nav>
		</head>
		<body>
			<header>
			</header>

			<nav>
			</nav>

			<section>
				<article>
					<div class="container">

						<table class="table table-bordered">
							<tr class="active">
								<a href="p1.html"><th colspan="2"><h1>Cancelar tu arreglo</h1></th></a>
							</tr>
							<tr>
								<td><h2>Total a cancelar:</h2></td>
								<td><strong><h2>$<?php echo $_SESSION["oCarrito"]->precio_total(); ?></h2></strong></td>
							</tr>
							<?php
								foreach ($_SESSION["oCarrito"]->get_content() as $aProductos) { ?>
								<tr>
									<td>
										<h2><?php echo "({$aProductos["cantidad"]}) {$aProductos["nombre"]}"; ?></h2>
									</td>
									<td>
										<h2>$<?php echo $aProductos["total"] ?></h2>
									</td>
								</tr>
								<?php
								}
								?>
						<tr>
							<td colspan=2><center><h4>Pague ahora con tarjeta de credito o debito</h4></center></td>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="container">
								<form>
									<div class="form-group">
										<label for="nombre">Nombre:</label>
										<input class="form-control" id="Nombre" type="text" name="user[nombre]" placeholder="Nombre" pattern="[A-Za-z]*" required>
									</div>
									<div class="form-group">
										<label for="apellido">Apellido:</label>
										<input class="form-control" type="text"  name="user[apellido]" placeholder="Apellidos" pattern="[A-Za-z]*" required>
									</div>
									<div class="form-group">
										<label  for="Telefono">Telefono:</label>
										<input class="form-control" type="tel"  name="user[telefono]" placeholder="70000000" pattern="[0-9]{8}" required>
									</div>
									<div class="form-group">
										<label for="email">Correo Electronico:</label>
										<input class="form-control" type="e-mail"  name="user[email]"  placeholder="Correo electronico">
									</div>
									<div class="form-group">
										<label for="Seleccionar">Localidad:</label>
										<input list="uno" class="form-control"   name="user[localidad]" placeholder="Seleccionar"><br>
										<datalist id="uno">
											<option value="La libertad"></option>
											<option value="San Salvador"></option>
											<option value="Sonsonate"></option>
											<option value="San Miguel"></option>
											<option value="La Union"></option>
											<option value="La paz"></option>
											<option value="San Vicente"></option>
											<option value="Cabañas"></option>
											<option value="Santa Ana"></option>
											<option value="Ahuachapan"></option>
											<option value="Chalatenango"></option>
											<option value="Cuscatlan"></option>
											<option value="Usulutan"></option>
											<option value="Morazan"></option>
										</datalist>                            	
										<div class="form-group">
											<label  for="Telefono">Numero de Tarjeta</label>
											<input class="form-control" type="tel" name="user[numero_tarjeta]" placeholder="6############" pattern="[0-9]{8}" required>
										</div>
									</form>
								</td>
							</tr>
							<tr >
								<td colspan=2>
									<h4> Llena el cuadro con la direccion exacta donde te llevaremos tu arreglo o indicanos si pasaras por el</h4>
								</td>
							</tr>
							<tr >
								<td colspan=2>
									<form >
										<textarea  class="form-control" name="user[direccion]">
										</textarea>

									</form>
								</td>
							</tr>


						</div>
					</div>
				</table>
				<form>
					<button type="submit" class="btn btn-success">Comprar Ahora</button>
					<a id="crear_factura" href="crear_factura.php" class="btn btn-info">Crear Factura</a>
				</form>
			</div>

		</article>
	</section>


	<aside>
	</aside>

	<footer class="me">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>Francisco, Cesar Josue, David</p>
				</div>
				<div class="col-xs-6">
					<ul class="list-inline text-right">
						<li><a href="../index.html" class="error">Inicio</a></li>
						<li><a href="contacto.html">Contacto</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="../js/jquery.js"></script>
	<script>
		$(document).on("ready", function(){
			$("#crear_factura").hide();
			$("form").on("submit", function(e) {
				$.ajax({
					data: $("form").serialize(),
					dataType: "json",
					error: function(oJsonData) {
						console.log(oJsonData);
					},
					success: function(oJsonData) {
						if (oJsonData.message_list.length === 0) {
							console.log(oJsonData.success);
							$("#crear_factura").show();
							$("#crear_factura").attr("href", "crear_factura.php?id=" + oJsonData.id[0]);
							fnClearFormularioCancelar();
						} else {
							$.each(oJsonData.message_list, function() {
								console.log(this);
							});
						}
					},
					type: "post",
					url: "../include/pagos.php"
				});
				e.preventDefault();
			});
		});
		function fnClearFormularioCancelar () {
			$("input").val("");
			$("textarea").val("");
		}
	</script>
</body>
</html>
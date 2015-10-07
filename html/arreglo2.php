<?php
if (isset($_GET["addme"])) {
	if (!session_id()) {
		include_once "../include/Carrito.class.php";
		$_SESSION["oCarrito"] = new Carrito();
	}
	$aArregloFloral = array(
			"id"				=>		2,
			"cantidad"	=>		1,
			"precio"		=>		45,
			"nombre"		=>		"Arreglo de Rosas Blancas"
		);

	//añadir el producto
	$_SESSION["oCarrito"]->add($aArregloFloral);
}
?>
<!DOCTYPE>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="../css/mer.css">
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
					<li class="active"><a href="../index.php">Inicio </a></li>
					<li class="dropdown">
						<li><a href="arreglos.html" >Arreglos Predeterminados</a></li>
						<li><a href="log.html">Personalizacion </a></li>
						<li><a href="https://www.facebook.com/Flora-Online-1447976762164471/timeline/?ref=aymt_homepage_panel">Fan Page</a></li> 
						<li><a href="contacto.html">Contacto</a></li>

					</ul>
					<form action="" class="navbar-form navbar-right" role="search">
						<div class="uno" ><a href="log.html" >Registrarse</a></div>
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
						<?php if (isset($_GET["addme"])) { ?>
							<div class="alert alert-success" role="alert"><strong>Arreglo de Rosas Blancas</strong> agregado correctamente al carrito de compras. Total a Pagar: <?php echo $_SESSION["oCarrito"]->precio_total(); ?> <a href="cancelar.php">Proceder a pagar</a></div>
						<?php } ?>
						<table class="table table-bordered">
							<tr class="active">
								<th><h1>Arreglo de Rosas Blancas</h1></th>
							</tr>
							<tr>
								<td><img src="../imagenes/img13.jpg"></td>

							</tr>

						</table>
						<a href="?addme" class="btn btn-success">Comprar</a>
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
								<li><a href="../index.html">Inicio</a></li>
								<li><a href="contacto.html">Contacto</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
	</body>
</html>

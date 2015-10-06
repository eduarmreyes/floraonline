<?php
include_once "include/Carrito.class.php";
$oCarrito = new Carrito();
//array que crea un producto
$aArregloFloral = array(
		"id"			=>		14,
		"cantidad"		=>		3,
		"precio"		=>		50,
		"nombre"		=>		"Arreglo 1"
	);

$aArregloFloral2 = array(
		"id"			=>		15,
		"cantidad"		=>		3,
		"precio"		=>		50,
		"nombre"		=>		"Arreglo 2"
	);

//añadir el producto
$oCarrito->add($aArregloFloral);
$oCarrito->add($aArregloFloral2);
var_dump($oCarrito->get_content());
?>
<!DOCTYPE>
<html lang="es">
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>

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
						<li class="active"><a href="index.html">Inicio </a></li>
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
</header>

<section class="jumbotron">
	<div class="container">
	<h1>Flora Online</h1>
	<p>"Creando tus propios arreglos es como nacen grandes momentos"</p>
	</div>
</section>
<section class="main container">
	<div class="row">
		<section class="posts col-md-9">
			
			<article class="post clearfix">
				<a class="thumb pull-left">
					<img class="img-thumbnail"src="imagenes/img1.png" alt="">
					</a>
					<h2 class="post-title">
						<a >Nuestra mision y Vision</a>
						
					</h2>
					<p><span class="post-fecha">15 de Septiembre de 2015</span> por <span class="post-autor"> Jose David </span></p>
						<p class="post-contenido text-justify">
						<strong>VISION:</strong><br>
						
						Diseñar una página web de personalización de arreglos florares con el fin de facilitar
						la compra de dicho producto desde la comodidad de su casa o trabajo y logrando alcanzar 
						el mercado Nacional y Local.<br><br><br><br>
						
						<strong>MISION:</strong><br>
						
						Ser una empresa líder para ayudar a facilitar al usuario a ser sus personalizaciones florares.
						</p>
						
			</article>
			
				<article class="post clearfix">
				<a  class="thumb pull-left">
					<img class="img-thumbnail"src="imagenes/img3.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a>Nuestros Valores</a>
						
					</h2>
					<p><span class="post-fecha">15 de Septiembre de 2015</span> por <span class="post-autor">Jose David </span></p>
						<p class="post-contenido text-justify">
						<strong>Honestidad:</strong><br> Nuestro objetivo es ser justo con el cliente en sus compras.<br><br>
						<strong>Respeto:</strong><br>Nuestra empresa respeta los gustos y preferencias del usuario al momento de hacer su personalización.<br><br>
						<strong>ETICA:</strong><br> Empresa con finalidad de lograr alcanzar un buen puesto en el mercado nacional.<br><br>
						<strong>Responsabilidad:</strong><br> nos encargamos a conciencia de cada pedido que realizan y cumplimos con nuestras políticas de envió.<br><br>

						</p>
						
						<div>
						    <a href="html/log.html" class="btn btn-success">Comprar <span class="badge">10</span></a>
						</div>
			</article>
			
			</article>
			
				<article class="post clearfix">
				<a class="thumb pull-left">
					<img class="img-thumbnail"src="imagenes/img2.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a>Fundadores de la Empresa</a>
						
					</h2>
					<p><span class="post-fecha">15 de Septiembre de 2015</span> por <span class="post-autor">Jose David</span></p>
						<p class="post-contenido">
						<strong>Cesar Willian Guido Rivaz:</strong><br>conocimientos básicos en tocar instrumentos musicales, y me gusta nadar y jugar futbol.<br>
						<strong>José David Guzmán Gómez:</strong><br>conocimiento del idioma ingles nivel avanzado escrito y hablado, conocimientos en contabilidad y base de técnica de dibujo con tiza.<br>
						<strong>Josué Jonathan Zamora Villela:</strong><br> Memorizar las cosas rápido que a mí me gustan, me gusta dibujar, me gusta jugar Football y basketball.<br>
						<strong>Francisco Alfredo Caridad Rivas:</strong><br>conocimientos básicos de HTML, edición de videos, natación, futbol.<br>
						
						</p>
						
						<div>
							<a href="html/log.html" class="btn btn-success">Comprar <span class="badge">5</span></a>
						</div>
			</article>
			
</section>

<aside class="col-md-3 hidden-xs hidden-sm">
	<h4>Categorias<h4>
		<div class="list-group">
			<a href="http://meliabel09.jimdo.com/rosas-hermosas/" class="list-group-item active">Rosas</a>
			<a href="http://36tulipanesvioletas.blogspot.com/" class="list-group-item">Tulipanes</a>
			<a href="http://detallesamatista.com/29-girasoles" class="list-group-item ">Girasoles</a>
			<p class="list-group-item ">Comunes</p>
		</div>
		
		<h4>Articulos Relacionados</h4>
		
			<h4 class="list-group-item-heading">Competencias mas cercanas</h4>
			<p class="list-group-item-text">Date cuenta de como nuestra empresa esta compitiendo en 
			el mercado con otras empresas a nivel regional...</p>
			
</aside>
</div>
</section>



<footer>
<div class="container">
<div class="row">
<div class="col-xs-6">
	<p>Francisco, Cesar Josue, David</p>
</div>
	<div class="col-xs-6">
		<ul class="list-inline text-right">
			<li><a href="https://www.facebook.com/Flora-Online-1447976762164471/timeline/?ref=aymt_homepage_panel"><img src="imagenes/img10.jpg" class="uno"></a></li>
			<li><a href="https://twitter.com/Flora_Online_"><img src="imagenes/img11.jpg"  class="uno"></a></li>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="#">Contacto</a></li>
		</ul>
	</div>
</div>
</div>
</footer>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
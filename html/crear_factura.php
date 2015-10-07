<?php
if (!session_id()) {
	include_once "../include/Carrito.class.php";
	$_SESSION["oCarrito"] = new Carrito();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/dos.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<title>Factura</title>
</head>
<body>
	<section class="invoice">
		<!-- title row -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="page-header">
					<i class="fa fa-globe"></i> Flora Online<small class="pull-right">Date: <?php $oDate = new DateTime; echo $oDate->format("d/m/Y"); ?></small>
				</h2>
			</div><!-- /.col -->
		</div>
		<!-- info row -->
		<div class="row invoice-info">
			<div class="col-sm-6 invoice-col">
				De
				<address>
					<strong>Flora Online</strong><br>
					Calle paseo General Escalón <br>
					Contiguo a ACCOVI de R.L. y ARABELA, <br>
					San Salvador<br>
					Email: pagos@floraonline.com
				</address>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<!-- Table row -->
		<div class="row">
			<div class="col-xs-12 table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Cantidad</th>
							<th>Producto</th>
							<th>Sub Total</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($_SESSION["oCarrito"]->get_content() as $aProductos) { ?>
							<tr>
								<td>
									<?php echo $aProductos["cantidad"]; ?>
								</td>
								<td>
									<?php echo "{$aProductos["nombre"]}"; ?>
								</td>
								<td>
									$<?php echo $aProductos["total"] ?>
								</td>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<!-- accepted payments column -->
			<div class="col-xs-6">
				<p class="lead">Métodos de Pago:</p>
				<img src="../imagenes/visa.png" alt="Visa">
				<img src="../imagenes/mastercard.png" alt="Mastercard">
				<img src="../imagenes/american-express.png" alt="American Express">
				<img src="../imagenes/paypal2.png" alt="Paypal">
				<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
					Nuestra garantía cubre de daños en el trayecto así como accidentes, por ejemplo por lluvia.
				</p>
			</div><!-- /.col -->
			<div class="col-xs-6">
				<div class="table-responsive">
					<table class="table">
						<tbody><tr>
							<th style="width:50%">Sub Total:</th>
							<td>$<?php echo $_SESSION["oCarrito"]->precio_total(); ?></td>
						</tr>
						<tr>
							<th>Envío:</th>
							<td>$5.80</td>
						</tr>
						<tr>
							<th>Total:</th>
							<td>$<?php echo $_SESSION["oCarrito"]->precio_total() + 5.80; ?></td>
						</tr>
					</tbody></table>
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<!-- this row will not appear when printing -->
		<!-- this row will not appear when printing -->
		<div class="row no-print">
			<div class="col-xs-12">
				<a href="/floraonline/index.php?reset" class="btn btn-success"><i class=""></i> Finalizar proceso</a>
			</div>
		</div>
	</section>
</body>
</html>
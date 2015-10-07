<?php
	error_reporting(E_STRICT);
	include_once("ConnectMySql.class.php");
	include_once("Carrito.class.php");
	$db = new ConnectMySql;
	$oCarrito = new Carrito;
	$aValues["productos"] = $oCarrito->get_content();
	$aValuesUser = $_POST["user"];
	$aData = array();
	$aData["message_list"] = array();
	if ($aValues["productos"] !== "") {
		if (is_array($aValues["productos"])) {
			$aValues["productos"] = json_encode($aValues["productos"]);
		}
		$cmdInsert = $db->command("INSERT INTO flo_pagos (
			pag_productos,
			pag_usuario_nombre,
			pag_usuario_apellido,
			pag_usuario_telefono,
			pag_usuario_email,
			pag_usuario_localidad,
			pag_usuario_numero_tarjeta,
			pag_usuario_direccion,
			pag_updated_at,
			pag_active)
		VALUES  (
			'{$aValues["productos"]}',
			'{$aValuesUser["nombre"]}',
			'{$aValuesUser["apellido"]}',
			'{$aValuesUser["telefono"]}',
			'{$aValuesUser["email"]}',
			'{$aValuesUser["localidad"]}',
			'{$aValuesUser["numero_tarjeta"]}',
			'{$aValuesUser["direccion"]}',
			now(),
			1)");
		if ($db->NumRowsAffected() > 0) {
			$aData["success"] = "Pago creado exitosamente.";
			$aData["id"] = $db->GetLastID();
		} else {
			array_push($aData["message_list"], "Pago no fue guardado. Este es el error: " . $db->GetError());
		}
	} else {
		array_push($aData["message_list"], "Por favor hacer una compra primero.");
	}
	echo json_encode($aData);
?>
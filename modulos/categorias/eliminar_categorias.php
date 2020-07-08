<?php
	require_once '../../conexion.php';
	$id = $_GET['id'];
	$consulta = "DELETE FROM categorias WHERE id = $id";
	mysqli_query($mysqli, $consulta);

	session_start();
	$nombre_usuario = $_SESSION["nombre"];
	$sp_call = "CALL sp_prueba('categorias','Se ha eliminado el registro de la tabla categorias con el valor $id. Eliminado por $nombre_usuario')";
	mysqli_query($mysqli, $sp_call);

	header("Location: index.php");
?>
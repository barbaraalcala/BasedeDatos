<?php
	require_once '../../conexion.php';
	$id = $_GET['id'];
	$consulta = "DELETE FROM usuarios WHERE id_usr = $id";
	mysqli_query($mysqli, $consulta);
	header("Location: index.php");
?>
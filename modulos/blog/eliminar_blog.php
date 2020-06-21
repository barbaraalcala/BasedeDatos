<?php
	require_once '../../conexion.php';
	$id = $_GET['id'];
	$consulta = "DELETE FROM blog WHERE id = $id";
	mysqli_query($mysqli, $consulta);
	header("Location: index.php");
?>
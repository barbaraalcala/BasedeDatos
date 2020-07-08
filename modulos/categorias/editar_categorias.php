<?php
//Conectarse a la BD
require_once '../../conexion.php';

//Recibir datos del formulario
$id=$_POST['id'];
$nombre_titulo = $_POST['nombre'];
//$status = $_POST['status'];

//Construir la consulta
$consulta = "UPDATE categorias SET nombre_titulo = '$nombre_titulo'  WHERE id = $id"; 
//echo $consulta;
//Ejecutar la consulta
mysqli_query($mysqli, $consulta);

session_start();
$nombre_usuario = $_SESSION["nombre"];
$sp_call = "CALL sp_prueba('categorias','Se ha editado el registro de la tabla categorias con el valor $nombre_titulo. Editado por $nombre_usuario')";
mysqli_query($mysqli, $sp_call);

//Regresar al Index
header("Location: index.php");
?>
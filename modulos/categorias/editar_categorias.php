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
//Regresar al Index
header("Location: index.php");
?>
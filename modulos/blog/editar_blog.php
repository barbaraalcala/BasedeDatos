<?php
//Conectarse a la BD
require_once '../../conexion.php';

//Recibir datos del formulario
$titulo=$_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$autor = $_POST['autor'];
$id = $_POST["id"];

//Construir la consulta
$consulta = "UPDATE blog SET titulo = '$titulo', descripcion = '$descripcion', fecha = '$fecha', autor = '$autor' WHERE id = $id";

echo $consulta;

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);
//Regresar al Index
header("Location: index.php")





?>
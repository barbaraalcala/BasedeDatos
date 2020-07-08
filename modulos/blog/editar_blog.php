<?php
//Conectarse a la BD
require_once '../../conexion.php';

//Recibir datos del formulario
$titulo=$_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$autor = $_POST['autor'];
$id = $_POST["id"];
$categoria = $_POST['categoria'];

//Construir la consulta
$consulta = "UPDATE blog SET titulo = '$titulo', descripcion = '$descripcion', fecha = '$fecha', autor = '$autor', id_cat_fk = '$categoria' WHERE id = $id";

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);

session_start();
$nombre_usuario = $_SESSION["nombre"];
$sp_call = "CALL sp_prueba('blog','Se ha editado el registro de la tabla blog con el valor $id. Editado por $nombre_usuario')";
mysqli_query($mysqli, $sp_call);

//Regresar al Index
header("Location: index.php")





?>
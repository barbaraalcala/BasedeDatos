<?php
//Conectarse a la BD
require_once '../../conexion.php';

//Recibir datos del formulario
$nombre=$_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$id = $_POST["id"];

//Construir la consulta
$consulta = "UPDATE usuarios SET nombre_usr = '$nombre', telefono_usr = '$telefono', direccion_ust = '$direccion', correo_ust = '$correo', password_usr = '$password' WHERE id_usr = $id"; 

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);
//Regresar al Index
header("Location: index.php");
?>
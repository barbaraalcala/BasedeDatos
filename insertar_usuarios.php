<?php
//Conectarse a la BD
require_once 'conexion.php';

//Recibir datos del formulario
$nombre=$_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$password = $_POST['password'];

//Construir la consulta
//INSERT INTO (campos1, campo2, campo3) VALUES (valor1, valor2, valor3);
$consulta ="INSERT INTO usuarios (nombre_usr,telefono_usr, direccion_ust, correo_ust, password_usr) 
	VALUES ('$nombre', '$telefono', '$direccion','$correo', '$password')";

echo $consulta;

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);
//Regresar al Index
header("Location: index.php")





?>
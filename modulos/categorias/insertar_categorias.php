<?php
//Conectarse a la BD
require_once '../../conexion.php';

//Recibir datos del formulario
$id=$_POST['id'];
$nombre_titulo = $_POST['nombre'];
$status = $_POST['status'];


//Construir la consulta
//INSERT INTO (campos1, campo2, campo3) VALUES (valor1, valor2, valor3);
$consulta ="INSERT INTO categorias (id, nombre_titulo, status) 
	VALUES ('$id','$nombre_titulo','$status')";

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);

session_start();
$nombre_usuario = $_SESSION["nombre"];
$sp_call = "CALL sp_prueba('categorias','Se ha agregado el registro de la tabla categorias con el valor $nombre_titulo. Agregado por $nombre_usuario')";
mysqli_query($mysqli, $sp_call);


//Regresar al Index
header("Location: index.php")





?>
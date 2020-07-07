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

echo $consulta;

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);
//Regresar al Index
header("Location: index.php")





?>
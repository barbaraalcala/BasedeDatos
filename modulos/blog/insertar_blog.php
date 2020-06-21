<?php
//Conectarse a la BD
require_once '../../conexion.php';

//Recibir datos del formulario
$titulo=$_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$autor = $_POST['autor'];


//Construir la consulta
//INSERT INTO (campos1, campo2, campo3) VALUES (valor1, valor2, valor3);
$consulta ="INSERT INTO blog (titulo, descripcion, fecha, autor) 
	VALUES ('$titulo', '$descripcion', '$fecha','$autor')";

echo $consulta;

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);
//Regresar al Index
header("Location: index.php")





?>
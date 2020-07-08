<?php
//Conectarse a la BD
require_once '../../conexion.php';

//Recibir datos del formulario
$titulo=$_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$autor = $_POST['autor'];
$categoria = $_POST['categoria'];

//Construir la consulta
//INSERT INTO (campos1, campo2, campo3) VALUES (valor1, valor2, valor3);
$consulta ="INSERT INTO blog (titulo, descripcion, fecha, autor, id_cat_fk) 
	VALUES ('$titulo', '$descripcion', '$fecha','$autor',$categoria)";

//Ejecutar la consulta
mysqli_query($mysqli, $consulta);


session_start();
$nombre_usuario = $_SESSION["nombre"];
$sp_call = "CALL sp_prueba('blog','Se ha agregado el registro de la tabla blog con el valor $id. Agregado por $nombre_usuario')";
mysqli_query($mysqli, $sp_call);


//Regresar al Index
header("Location: index.php");

?>
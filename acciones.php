<?php
//Recibir los valores
//Que exista el usuario en la BD
//Que el password coincida con la BD
//Inicar sesión
//Redireccionar
require_once 'conexion.php'; 


$usuario = $_POST["usuario"];
$password = $_POST["password"];
$respuesta = '';

$consulta = "SELECT * FROM usuarios where correo_ust = '$usuario'";
$resultado = mysqli_query($mysqli, $consulta);
$fila = mysqli_fetch_array($resultado);

if(is_array($fila) && sizeof($fila) > 0){ //Ejecutar el tamañano
	if($fila["password_usr"] == $password){
		session_start();
		$_SESSION["id"] = $fila["id_usr"];
		$_SESSION["nombre"] = $fila["nombre_usr"];
		$_SESSION["status"] = $fila["status"];
		header("Location: modulos/usuarios/");
	}
	else{
		header("Location: index.php?error=La contraseña no coincide con el usuario");
		// header("Location: index.php");
	
	}
} 
else {

	//error es una variable por request
	//Esto sirve para mandar variables
	header("Location:index.php?error=Usuario no encontrado");

	// "Usuario no encontrado";
}
// } else{
// 	$respuesta = 'Usuario no encontrado';




?>


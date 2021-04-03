<?php 
	include("../includes/conexion.php");

	$carnetUsuario = $_POST["carnetUsuario"]; 
	$apellidosUsuario = $_POST["apellidosUsuario"]; 
	$nombreUsuario = $_POST["nombreUsuario"]; 
	$fechaNacimiento = $_POST["fechaNacimiento"]; 
	$correoUsuario = $_POST["correoUsuario"]; 

	if(( $carnetUsuario . $apellidosUsuario . $nombreUsuario .$fechaNacimiento . $correoUsuario )== "") {
		header("Location: ../Registro/registroNuevo.php"); 
	} else {
		$insert = mysqli_query($conexion,"INSERT INTO usuarios VALUES ('$carnetUsuario', '$apellidosUsuario','$nombreUsuario','$fechaNacimiento','$correoUsuario')");
		header("Location: ../Registro/registroNuevo.php");
	}
?>
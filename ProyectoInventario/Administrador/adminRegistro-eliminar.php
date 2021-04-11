<?php 
	include("../../includes/conexion.php");

	// obtener inputs entre las etiquetas form
	//$empleadoId = $_REQUEST["empleadoId"];
	//$delete = mysqli_query($conexion,"DELETE FROM empleados WHERE empleadoId='$empleadoId'");
	//header("Location: ../empleados.php");

	// obtener inputs entre las etiquetas form
	$carnetUsuario = $_REQUEST["carnetUsuario"];
    $nombreUsuario = $_REQUEST["nombreUsuario"];
    $apellidosUsuario = $_REQUEST["apellidosUsuario"];
    $correoUsuario = $_REQUEST["correoUsuario"];
    $rolId = $_REQUEST["rolId"];

	$delete = mysqli_query($conexion,"UPDATE SET softdelete = 1 
    WHERE carneUsuario, nombreUsuario, apellidosUsuario, correoUsuario, rolId='$carnetUsuario'.'$nombreUsuario'.'$apellidosUsuario'.'$correoUsuario'.'$rolId'");
	header("Location: ../Administrador/admin.php");

?>
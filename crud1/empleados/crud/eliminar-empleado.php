<?php 
	include("../../includes/conexion.php");

	// obtener inputs entre las etiquetas form
	$empleadoId = $_REQUEST["empleadoId"];
	$delete = mysqli_query($conexion,"DELETE FROM empleados WHERE empleadoId='$empleadoId'");
	header("Location: ../empleados.php");
?>
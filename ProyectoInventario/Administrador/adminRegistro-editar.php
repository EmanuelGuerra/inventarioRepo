<?php 
	include("");

	// obtener inputs entre las etiquetas form
    $carnetUsuario = $_POST["carnetUsuario"];
    $nombreUsuario = $_POST["nombreUsuario"];
    $apellidosUsuario = $_POST["apellidosUsuario"];
	$fechaNacimiento =$_POST["fechaNacimiento"];
    $correoUsuario = $_POST["correoUsuario"];
    $rolId = $_POST["rolId"];


	if( $carnetUsuario.$nombreUsuario.$apellidosUsuario.$fechaNacimiento.$correoUsuario.$rolId== "") {
		header("Location: ../Administrador/adminRegistro-editar.php=$carnetUsuario.$nombreUsuario.$apellidosUsuario.$fechaNacimiento.$correoUsuario.$rolId"); // redireccionar con PHP enviando variable
	} else {
		// ACTUALIZAR tabla ESTABLECIENDO columna1='$variable1',columnaN='$variableN' DONDE id='idAModificar'
		$update = mysqli_query($conexion,"UPDATE usuarios SET carneUsuario, nombreUsuario, apellidosUsuario, correoUsuario, rolId='$carnetUsuario'.'$nombreUsuario'.'$apellidosUsuario'.$fechaNacimiento.'$correoUsuario'.'$rolId' WHERE empleadoId='$empleadoId'");
		header("Location: ../Registro/registro.php");
	}
?>
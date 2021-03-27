<?php 
$servidor = "localhost";
$usuario = "root";
$password = "";
$db= "eventos";
$conexion = new mysqli($servidor, $usuario, $password, $db);

if($conexion->connect_error){
<<<<<<< HEAD
	die( "Conexion fallida!: " . $conexion->connect_error);
=======
	die( "Conexion fallida maje!: " . $conexion->connect_error);
>>>>>>> 1dd67ac23f0081bfdebf6e781ff3797785bc5624
}
/*echo "Conexion exitosa papu! :D";*/

?>
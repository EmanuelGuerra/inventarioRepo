<?php 
$servidor = "localhost";
$usuario = "root";
$password = "";
$db= "bd_crud";
$conexion = new mysqli($servidor, $usuario, $password, $db);

#if($conexion->connect_error){
#	die( "Conexion fallida : " . $conexion->connect_error);
#}
#echo "Conexion exitosa :D";

?>
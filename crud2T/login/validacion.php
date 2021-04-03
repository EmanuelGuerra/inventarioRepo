<?php
    include('./includes/conexion.php');

    session_start();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        echo 'usuario correcto';
    }else{
        echo'Usuario nel';
    }
   // $filas = $resultado-> fetch_assoc();

    //if($filas['usuario'] == $usuario && $filas['passwors'] == $password){
    //  }

    
  

?>
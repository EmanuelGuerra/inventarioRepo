<?php
    include('../includes/conexion.php');

    session_start();

    $email = $_POST['email'];
    $clave = $_POST['clave'];
    #variables de envios de nombre y password

    $consulta = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE correoUsuario = '$email' AND clave = '$clave'");  

    if(!$consulta){ 
     echo "Usuario no existe " . $email . " " . $clave. " o hubo un error " . mysqli_error($mysqli);
    } 
    else{ 
    print "Bienvenido"; 
    } 
    
    ?>

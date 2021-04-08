<?php
    include('../includes/conexion.php');

    session_start();

    $carnet = $_POST['carnet'];
    $clave = $_POST['clave'];
    #variables de envios de nombre y password

    $sql = "SELECT * FROM usuarios WHERE carnetUsuario = '$carnet' AND clave = '$clave'";
    $resultado = $conexion->query($sql);
    #variable de seleccione de datos de BD

    $row = $resultado->fetch_assoc();

    if($row['carnetUsuario'] == $carnet && $row ['clave'] == $clave){
        $_SESSION['usuario'] = $carnet;
        header("Location: ../Bienvenido.php");
    }else{
        header("Location: ../Login/Login.php");
    }

?>
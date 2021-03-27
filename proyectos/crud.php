<<<<<<< HEAD
<?php include('./includes/conexion.php');
#Conexion Base de datos
?>
=======
<?php include('./includes/conexion.php'); ?>
>>>>>>> 1dd67ac23f0081bfdebf6e781ff3797785bc5624

<h2> Registro de invitados </h2>
<br><br><br>
<form action = "crud.php" method="post">
    <input type="text" name="nombre" placeholder="Inserte nombre">
    <input type="text" name="apellido" placeholder="Inserte Apellido">
    <input type="text" name="direccion" placeholder="Inserte direccion">
    <input type="text" name="telefono" placeholder="Inserte telefono">
    <input type="submit" value="Registrar usuario">
</form>
<?php
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset ($_POST['direccion']) && isset ($_POST['telefono'])){
<<<<<<< HEAD
    
=======
>>>>>>> 1dd67ac23f0081bfdebf6e781ff3797785bc5624
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fecha = date("y-m-d");
<<<<<<< HEAD
        #POST para envio de datos a base de datos
        
        $sql = "INSERT INTO invitados (id, nombre, apellido, direccion, telefono, fecha) 
        VALUES (NULL, '$nombre', '$apellido', '$direccion', '$telefono', '$fecha')";
        #Inserto de campos hacia tabla invitados
=======
        
        $sql = "INSERT INTO invitados (id, nombre, apellido, direccion, telefono, fecha) 
        VALUES (NULL, '$nombre', '$apellido', '$direccion', '$telefono', '$fecha')";
>>>>>>> 1dd67ac23f0081bfdebf6e781ff3797785bc5624

        if( $conexion->query($sql) === true){
            echo "Datos insertados correctamente...";
        }else{
            die("Error al insertar datos..." . $conexion->error);
        }

    }else if(isset($_POST['editar'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
<<<<<<< HEAD
        

        $sql = "UPDATE invitados SET nombre = '$nombre' WHERE id = $id";
        $resultado = $conexion->query($sql);
        #Actualizacion de campos de tabla invitados
=======

        $sql = "UPDATE invitados SET nombre = '$nombre' WHERE id = $id";
        $resultado = $conexion->query($sql);
>>>>>>> 1dd67ac23f0081bfdebf6e781ff3797785bc5624

        if($conexion->query($sql) === true){
            echo "Datos actualizados correctamente...";
        }else{
            die("Error al actualizar datos..." . $conexion->error);
        }
    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];

        $sql = "DELETE FROM invitados where id = $id";
<<<<<<< HEAD
        #Sentencia de eliminar registro
=======
>>>>>>> 1dd67ac23f0081bfdebf6e781ff3797785bc5624

        if($conexion->query($sql) === true){
            echo "Datos Eliminados...";
        }else{
            die("Error al Eliminar datos..." . $conexion->error);
        }
    }
<<<<<<< HEAD
    $sql = "SELECT nombre FROM invitados";
    $resultado = $conexion->query($sql);  

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            echo '<div>' .$row['nombre'].'</div>';
        }
    }
    $conexion->close();






    #$sql = "SELECT * FROM registros INNER JOIN invitados ON registros.invitado_id = invitados.id";
    #$resultado = $conexion->query($sql);
=======
/*
    $sql = "SELECT id, nombre FROM invitados";
    $resultado = $conexion->query($sql);  */

    $sql = "SELECT * FROM registros INNER JOIN invitados ON registros.invitado_id = invitados.id";
    $resultado = $conexion->query($sql);
>>>>>>> 1dd67ac23f0081bfdebf6e781ff3797785bc5624
/*
    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            echo '<div>
                    <form action = "crud.php" method="post">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <input type="text" name="nombre" value="'.$row['nombre'].'">
                        <input type="submit" name="editar" value="Editar">
                        <input type="submit" name="eliminar" value="Eliminar">
                    </form>
                </div>';
        }
    }
    $conexion->close();
 */
?>
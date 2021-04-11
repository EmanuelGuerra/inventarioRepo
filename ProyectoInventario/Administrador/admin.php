<?php include ("../includes/conexion.php") 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminRegistro- CRUD</title>
	<link href="../librerias/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
			<div class="row" style="text-align: center;">
				<div class="col-md-2">
					<a href="../index.php" class="btn btn-default btn-block">
						<i class="glyphicon glyphicon-menu-left"></i>Volver
					</a>
				</div>
				<div class="col-md-8">
					<h2>Mantenimiendo de Admin Registro</h2>
				</div>
				<div class="col-md-2">
					<a href="../Administrador/registroAdmin.php" class="btn btn-primary btn-block"> Agregar</a>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>N</th>
                            <th>N Carnet</th>
                            <th>Nombre Usuario</th>
                            <th>Apellido Usuario</th>
                            <th>Fecha nacimiento</th>
                            <th>Correo Institucional</th>
                            <th>Rol Id</th>
                            <th>Acciones</th>
                            </tr>
					</thead>
					<tbody>
						<?php 
						$seleccionValor = mysqli_query($conexion, "SELECT * FROM usuarios");
						#sentencia de seleccion tabla Usuarios
						$n=0;
						while ($recuperar = mysqli_fetch_assoc($seleccionValor)){
							$n+=1;
						?>	<!-- inicializa variable $recuperar con select de tabla -->
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $recuperar["carnetUsuario"]; ?></td>
								<td><?php echo $recuperar["nombreUsuario"]; ?></td>
								<td><?php echo $recuperar["apellidosUsuario"]; ?></td>
								<td><?php echo $recuperar["fechaNacimiento"]; ?></td>
								<td><?php echo $recuperar["correoUsuario"]; ?></td>
								<td><?php echo $recuperar["rolId"]; ?></td>
									<!--impresione los campos  -->
								<td>
									<a href="adminRegistro-editar.php=<?php echo $recuperar['carnetUsuario'.'nombreUsuario'.'apellidosUsuario'.'fechaNacimientos'.'correoUsuario'.'rolId']; ?>" class="btn btn-primary btn-xs">
									<i class="bi bi-pencil-fill"></i>
									</a>
									<button type="button" class="btn btn-danger btn-xs" 
									onclick="eliminar( <?php echo $recuperar ['carnetUsuario'.'nombreUsuario'.'apellidosUsuario'.'fechaNacimientos'.'correoUsuario'.'rolId']; ?>);">
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</td>
							</tr>
						<?php 
							}
						?>					 
					</tbody>
				</table>
			</div>
		</div>
	</body>
	<script src="../librerias/js/jquery-1.11.3.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
    <script>
    	function eliminar(carnetUsuario,nombreUsuario,apellidosUsuario,correoUsuario,rolId) {
    		let confirmar = confirm("¿Está seguro que desea eliminar este registro?");
    		if(confirmar) {
    			
    			location.href = "../Administrador/admin.php="+carnetUsuario,nombreUsuario,apellidosUsuario,correoUsuario,rolId;
    		} else {
    		}
    	}
    </script>

</html>
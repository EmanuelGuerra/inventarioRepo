<?php include ("../includes/conexion.php") 
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro</title>
		<!--<link rel="stylesheet" type="text/css" href="../assets/css/style.css">-->
	</head>
		<body>
		<header id="main-header">
			<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
			    <!--<a id="logo-header" href="/assets/Imagenes/LOGO INVENTARIO.png">
			        <span class="site-name">HOSPITAL MILITAR CENTRAL</span><br>
			        <span class="site-desc">Diseño de Inventario</span>-->
					<!-- 
			        </a> <!-- / #logo-header 

			<nav>
			    <ul>
			        <li class="list-group-item"><a href="../index.php">Inicio</a></li>
			        <li class="list-group-item"><a href="../Registro/registroNuevo.php">Agregar</a></li>
			        <li class="list-group-item"><a href="../CerrarSesion.php">Salir</a></li>			
			    </ul>
		    </nav>- / nav -->
        </header><br><!-- / #main-header -->
		
			<div class="container">
			<a id="logo-header" href="">
                            <div class="col-md-12"><h6>HOSPITAL MILITAR CENTRAL <br> 
                            <h6>Diseño de Inventario</h6></div>


					<div class="row" style="text-align: center;">
                        <div class="col-md-4">
                            <a href="../index.php" class="btn btn-default btn-block">
                                <i class="glyphicon glyphicon-menu-left"></i>Volver
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="../Registro/registroNuevo.php" class="btn btn-default btn-block">
                                <i class="glyphicon glyphicon-plus"></i>Agregar
                            </a>
                        </div>
                        <div class="col-md-4">
						<a href="../Login/Login.php" class="btn btn-default btn-block">
                                <i class="glyphicon glyphicon-off"></i>Salir
                            </a>
                        </div>

						<div class="col-md-12">
							<h2>Registro de  Usuarios</h2>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>N Carnet</th>
									<th>Nombre Usuario</th>
									<th>Apellido Usuario</th>
									<th>Fecha nacimiento</th>
									<th>Correo Institucional</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$consulta = "SELECT * FROM usuarios";
								$ejecutarConsulta = mysqli_query($conexion, $consulta);
								$verFilas = mysqli_num_rows($ejecutarConsulta);
								$fila = mysqli_fetch_array($ejecutarConsulta);
								
								if(!$ejecutarConsulta){
									echo "Error en la Consulta";
								}else{
									if($verFilas<1){
										echo "<tr><td>Sin Registros</td></tr>";
									}else{
										for($i=0; $i=$fila; $i++){
											echo '
												<tr>
													<td>'.$fila[0].'</td>
													<td>'.$fila[1].'</td>
													<td>'.$fila[2].'</td>
													<td>'.$fila[3].'</td>
													<td>'.$fila[4].'</td>

												</tr>
											';
											
											$fila = mysqli_fetch_array($ejecutarConsulta);
										}
									}
								}
								
								?>
							</tbody>
						</table>
					</div>
			</div>
		</body>
        <script src="../assets/js/bootstrap.min.js"></script>
	</html>
?php include('../includes/conexion.php'); ?>
<!DOCTYPE html>
	<html lang="en">
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Inicio de Sesion</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="../assets/css/login.css">
		
		</head>
		<body>
		<header id="main-header">
                    <a id="logo-header" href="/assets/Imagenes/LOGO INVENTARIO.png">
                    <span class="site-name">HOSPITAL MILITAR CENTRAL</span><br>
                    <span class="site-desc">Diseño de Inventario</span>
                    </a> <!-- / #logo-header -->

                    <nav>
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../CerrarSesion.php">Salir</a></li>
                        </ul>
                    </nav><!-- / nav -->
        </header><br><!-- / #main-header -->
		<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
			<div class="container">
			<div class="card login-card">
				<div class="row no-gutters">
				<div class="col-md-5">
					<img src="../assets/Imagenes/LOGO INVENTARIO.png" alt="login" class="login-card-img">
				</div>
				<div class="col-md-7">
					<div class="card-body">
					<div class="brand-wrapper">
						<img src="../assets/Imagenes/LOGO INVENTARIO.png" alt="logo" class="logo">
					</div>
					<p class="login-card-description">Acceda a su cuenta</p>
					<form action="validacionLogin.php" method="post">
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email address">
						</div>
						<div class="form-group mb-4">
							<label for="password" class="sr-only">Password</label>
							<input type="password" name="clave" id="password" class="form-control" placeholder="***********">
						</div>
						<div class="row">
                			<div class="col-md-12 login-from-row">
                   			 <a href="validacionLogin.php" button class="btn btn-info">Entrar</a>
                			</div>
           				</div>
						<!--<input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">-->
						</form>
						<a href="#!" class="forgot-password-link">¿Ha olvidado su contraseña?</a>
						<p class="login-card-footer-text">
						¿No tiene una cuenta?
						<a href="../Registro/registroNuevo.php" class="text-reset">Regístrese aquí</a></p>
						<nav class="login-card-footer-nav">
						<a href="https://www.fuerzaarmada.mil.sv/?page_id=751">Hospital Militar Central</a>
						<a href="#!">Privacy policy</a>
						</nav>
					</div>
				</div>
				</div>
			</div>
			
			</div>
		</main>
		</body>
	</html>

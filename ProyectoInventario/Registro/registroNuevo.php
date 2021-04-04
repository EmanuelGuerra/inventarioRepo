<!DOCTYPE html>
<html lang="en">
        <head>
            <title>REGISTRO NUEVO</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <!--===============================================================================================-->
        </head>
        <body>
                <header id="main-header">
                    <a id="logo-header" href="../assets/Imagenes/LOGO INVENTARIO.png">
                    <span class="site-name">HOSPITAL MILITAR CENTRAL</span><br>
                    <span class="site-desc">Diseño de Inventario</span>
                    </a> <!-- / #logo-header -->

                    <nav>
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../CerrarSesion.php">Salir</a></li>
                        </ul>
                    </nav><!-- / nav -->
                </header><br><br><br><br><!-- / #main-header -->
            
            <div class="limiter">
                <div class="container-Registro100">
                    <div class="wrap-Registro100">
                        <div class="Registro100-form-title" style="background-image: url(../assets/Imagenes/LOGOINVENTARIO.png);">
                            <span class="Registro100-form-title-1">
                            <h2>Registro de Nuevo Usuario </h2>

                            </span>
                        </div>

                        <form action="../Registro/nuevoRegistro.php" class="Registro100-form validate-form" method="post">
                            <div class="wrap-input100 validate-input m-b-26" data-validate="carnet is required">
                                <span class="label-input100">Carnet</span>
                                <input class="input100" type="text" name="carnetUsuario" placeholder="Agregue su numero de carnet">
                                <span class="focus-input100"></span>
                            </div>
                                <div class="wrap-input100 m-b-26" >
                                <span class="label-input100">Apellido</span>
                                <input class="input100" type="text" name="apellidosUsuario" placeholder="Coloque sus Apellidos">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-26" data-validate="Nombre is required">
                                <span class="label-input100">Nombre</span>
                                <input class="input100" type="text" name="nombreUsuario" placeholder="Coloque sus Nombres">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-26" data-validate="fecha de nacimiento is required">
                                <span class="label-input100">Fecha de Nacimiento</span>
                                <input class="input100" type="date" name="fechaNacimiento">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-26" data-validate="clave es requerida">
                                <span class="label-input100">Contraseña</span>
                                <input class="input100" type="password" name="clave">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input m-b-18" data-validate = "Correo is required">
                                <span class="label-input100">Correo Institucional</span>
                                <input class="input100" type="email" name="correoUsuario" placeholder="Agregue su correo">
                                <span class="focus-input100"></span>
                            </div><br><br>

                            <div class="flex-sb-m w-full p-b-30">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">
                                        Recuerdame 
                                    </label>
                                </div><br><br>

                                <div>
                                    <a href="#" class="txt1">
                                    ¿Ha olvidado su contraseña?
                                    </a>
                                </div>
                            </div><br><br>
                            <br><br><div class="d-grid gap-2 d-md-block">
                                <a href="../Login/Login.php" class="btn btn-default btn-block">Cancelado</a>    
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" name="Guardar">Guardar</button>                  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>
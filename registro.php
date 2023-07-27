<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas del sitio -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título del sitio -->
    <title>Registro</title>
    <!-- Favicon del sitio -->
    <link rel="icon" href="img/user.png" alt="favicon">
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap 5.3.0 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Bootstrap 1.10.5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Librería de jQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Librería de SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- API de reCaptcha v2 de Google con JavaScript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Estilos del sitio -->
    <style type="text/css">
        * {
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #1bf61b;
        }

        .navbar {
            background-color: #0091EA;
        }

        .navbar h5 {
            font-size: 26px;
            color: whitesmoke;
            margin-left: 25px;
        }

        h4 {
            font-size: 20px;
            color: black;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            border-color: #01579B;
            border-radius: 6px;
            font-size: 16px;
            margin-bottom: 6px;
        }

        .container {
            border-style: groove;
            border-color: #004D40;
            background-color:  #00d800;
            border-radius: 12px;
        }

        .logo-registro {
            width: 200px;
        }

        .btn {
            background-color: #1A237E;
            color: whitesmoke;
            font-size: 18px;
            border-radius: 5%;
        }

        .btn:hover {
            background-color:  #00d800;
            cursor: pointer;
            color: black;
        }

        h5 {
            font-size: 20px;
            color: black;
        }

        a {
            font-size: 20px;
            color: black;
        }

        a:hover {
            background-color: #00E5FF;
            cursor: pointer;
            color: black;
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <nav class="navbar navbar-dark bg-dark">
        <h5 class="navbar-brand"><strong>AULA VIRTUAL UTC</strong></h5>
    </nav>
    <!-- Formulario para recuperar contraseña -->
    <div class="container mt-5">
        <br>
        <center><img class="logo-registro" src="img/agregar-usuario.png"></center>
        <h4 class="mt-5" align="center"><strong>Registro del usuario</strong></h4><hr>
        <form action="guardado.php" method="POST">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="username"><strong>Usuario</strong></label>
                        <input id="username" class="form-control" type="text" name="username" placeholder="Ingresa un usuario">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="email"><strong>Correo Electronico</strong></label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="Ingresa un correo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="pswd"><strong>Contraseña</strong></label>
                        <input id="pswd" class="form-control" type="password" name="pswd" placeholder="Ingresa una contraseña">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="pswd2"><strong>Confirmar Contraseña</strong></label>
                        <input id="pswd2" class="form-control" type="password" name="pswd2" placeholder="Confirma tu contraseña">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="pswd2"><strong>Verificar Captcha</strong></label>
                        <div class="g-recaptcha" data-sitekey="6Lf0lC4mAAAAAB4TCEtSiDZ_pT2QVBJ43wNRAH1I"></div>
                    </div>
                </div>
            </div>
            <br>
            <h5 align="center"><strong>¿Ya tienes una cuenta? <a href="index.php">Inicia Sesión</a></strong></h5><br>
            <!-- Botón para enviar los datos a la base de datos -->
            <center>
                <button class="btn" type="submit" name="registrar" id="registrar"><i class="bi bi-save-fill">  </i><strong>Registrar</strong></button>  <button class="btn" type="reset" name="clean" id="clean"><i class="bi bi-trash">  </i><strong>Limpiar Formulario</strong></button>
            </center>
            <br>
        </form>
    </div>
    <br><br>
</body>
</html>
<!-- Código de JS para validar los campos del formulario -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#registrar').click(function(){
            if ($('#username').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo de usuario vacio',
                    text: 'Por favor, ingresa un nombre de usuario',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#email').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo de correo vacio',
                    text: 'Por favor, ingresa un correo electronico',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#pswd').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Contraseña incompleta',
                    text: 'Por favor, ingresa una contraseña',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#pswd2').val() !== $('#pswd').val() || "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'error',
                    title: 'Contraseña incorrecta',
                    text: 'Las contraseñas no coinciden, vuelve a confirmar tu contraseña',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            }
        });
    });
</script>

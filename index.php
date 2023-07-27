<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Metas del sitio -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Título del sitio -->
  <title>Iniciar Sesión</title>
  <!-- Favicon del sitio -->
  <link rel="icon" href="img/usuario.png" alt="favicon">
  <!-- Bootstrap 5.3.0 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Bootstrap 5.3.0 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- Bootstrap Icons 1.10.5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Librería de jQuery-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Librería de SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Estilos del sitio -->
  <style type="text/css">
    * {
      margin: 0;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: #00d800;
    }

    .navbar {
      background-color:  #00d800;
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
    .form-group input[type="password"] {
      border-color: #01579B;
      border-radius: 6px;
      font-size: 16px;
      margin-bottom: 6px;
    }

    .container {
      border-style: groove;
      border-color: #004D40;
      background-color: #1ef91e;
      border-radius: 12px;
    }

    .login-icon {
      width: 200px;
    }

    .btn {
      background-color: #1A237E;
      color: whitesmoke;
      font-size: 18px;
      border-radius: 5%;
    }

    .btn:hover {
      background-color: ;
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
      background-color:  #00d800 ;
      cursor: pointer;
      color: black;
    }
  </style>
</head>
<body class="sb-nav-fixed">
  <nav class="navbar navbar-dark bg-dark">
    <h5 class="navbar-brand"><strong>BIENVENIDO ALCON</strong></h5>
  </nav>
  <!-- Formulario para iniciar sesión -->
  <div class="container mt-5">
    <br>
    <center><img class="login-icon" src="img/iniciar-sesion.png"></center>
    <h4 class="mt-5" align="center"><strong>Iniciar Sesión</strong></h4><hr>
    <form action="backend-login.php" method="POST">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="username"><strong>Usuario</strong></label>
            <input id="username" class="form-control" type="text" name="username" placeholder="Ingresa tu usuario">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pswd"><strong>Contraseña</strong></label>
              <input id="pswd" class="form-control" type="password" name="pswd" placeholder="Ingresa tu contraseña">
            </div>
          </div>
        </div>
        <br>
        <h5 align="center"><strong>¿Aún no tienes una cuenta? <a href="registro.php">Registrate</a></strong></h5>
        <h5 align="center"><strong>¿Olvidaste tu contraseña? <a href="recuperar.php">Recupera tu contraseña</a></strong></h5><br>
        <!-- Botón para iniciar sesión -->
        <center>
          <button class="btn" type="submit" name="login" id="login"><i class="bi bi-box-arrow-in-right">  </i><strong>Inicia Sesión</strong></button>  <button class="btn" type="reset" name="clean" id="clean"><i class="bi bi-trash">  </i><strong>Limpiar Formulario</strong></button>
        </center>
        <br>
    </form>
  </div>
  <br><br>
</body>
</html>
<!-- Código de JS para validar el login -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#login').click(function(){
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
          text: 'Por favor, ingresa tu nombre de usuario',
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
          text: 'Por favor, ingresa tu contraseña',
          showConfirmButton: true,
          confirmButtonColor: '#0091EA',
          confirmButtonText: 'Aceptar'
        })
        return false;
      }
    });
  });
</script>
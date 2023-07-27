<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas del sitio -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Título del sitio -->
	<title>Recuperar Contraseña</title>
	<!-- Favicon del sitio -->
	<link rel="icon" href="img/restablecer-la-contrasena.png" alt="favicon">
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
			background-color: #43db01
;
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

		.form-group input[type="email"]{
			border-color: #01579B;
			border-radius: 6px;
			font-size: 16px;
			margin-bottom: 6px;
		}

		.container {
			border-style: groove;
			border-color: #004D40;
			background-color:  #73fb38 ;
			border-radius: 12px;
		}

		.icono-reset {
			width: 200px;
		}

		.btn {
			background-color: #1A237E;
			color: whitesmoke;
			font-size: 18px;
			border-radius: 5%;
		}

		.btn:hover {
			background-color: #ff0c00;
			cursor: pointer;
			color: black;
		}

		h5 {
			font-size: 20px;
			color: black;
		}
	</style>
</head>
<body class="sb-nav-fixed">
	<nav class="navbar navbar-dark bg-dark">
		<h5 class="navbar-brand"><strong>Mi contraseña</strong></h5>
	</nav>
	<!-- Formulario para recuperar contraseña -->
	<div class="container mt-5">
		<br>
		<center><img class="icono-reset" src="img/restablecer-contrasena.png"></center>
		<h4 class="mt-5" align="center"><strong>Recupera tu contraseña</strong></h4><hr>
		<form action="recuperacion.php" method="POST">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<!-- Input de tipo email para los correos electrónicos -->
						<label for="email"><strong>Correo Electrónico</strong></label>
						<input id="email" class="form-control" type="email" name="email" placeholder="Ingresa tu correo para recuperar tu contraseña">
					</div>
				</div>
			</div>
			<br>
			<!-- Botón para enviar los correos -->
			<center>
				<button class="btn" type="submit" name="reset-pswd" id="reset-pswd"><i class="bi bi-send">  </i><strong>Enviar correo</strong></button>  <button class="btn" type="reset" name="clean" id="clean"><i class="bi bi-trash">  </i><strong>Limpiar formulario</strong></button><br>
			</center>
			<br>
		</form>
	</div>
	<br><br>
</body>
</html>
<!-- Código de JS para validar el campo del formulario -->
<script type="text/javascript">
	$(document).ready(function(){
	    $('#reset-pswd').click(function(){
		    if ($('#email').val() == "") {
			    const Toast = Swal.mixin({
				    toast: true,
				    position: 'top-end',
				    showConfirmButton: false,
				    timer: 1000,
				    timerProgressBar: false,
			    })
			    Swal.fire({
				    icon: 'warning',
				    title: 'Campo de correo vacío',
				    text: 'Por favor, escribe tu correo',
				    showConfirmButton: true,
				    confirmButtonColor: #ff0c00',
				    confirmButtonText: 'Aceptar'
			    })
			    return false;
		    }
	    });
    });
</script>
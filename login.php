<!DOCTYPE html>
<?php 

# CDN de MDB 4.19.0
require_once 'cdn.html';

?>
<html>
  <head>
    <title>CONTROL ESCOLAR</title>
    <!-- CDN  MDB 4.19.1 Index-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<!-- CSS -->
<link rel="icon" href="view-admin/img/logo.png" type="image/x-icon" />

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<!-- JavaScript -->


<!-- Libreria para validar con JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
        <!-- Libreria de sweetalert 2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
  </head>
  <body >
  
<!-- Image and text -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">CONTROL ESCOLAR</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      </ul>

    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>
<br>

<div  id="seccion1" class="container">
   <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
    <div class="col-6 col-md-2">
      
    </div>
    <div class="col-6 col-md-8">
    <div class="container my-5 py-5 z-depth-1">


<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


  <!--Grid row-->
  <div class="row d-flex justify-content-center">

    <!--Grid column-->
    <div class="col-md-10">

      <!-- LOG IN FORMULARIOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
      <form name="form-ajax" id="login" method="post" action="#"  class="text-center">

        <p class="h4 mb-4">Iniciar sesion</p>

        <!-- Email -->
        <input type="text" name="mail" id="mail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input type="password" name="pass" id="pass" class="form-control mb-4" placeholder="Password">

        <div class="d-flex justify-content-around">
          <div class="col-md-6">
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
              <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
          </div>
          <div class="col-md-8">
            <!-- Forgot password -->
            <a href="recuperar.php">Recuperar contraseña?</a>
          </div>
        </div>

        <!-- Sign in button -->
        <button type="submit" class="btn btn-info btn-block my-4" id="iniciar">ACEPTAR</button>

        <!-- Register -->
        <p>
          <a href="#seccion2">Registrarse</a>
        </p>

    
      </form>
      <!-- FINAL LOG IN FORMULARIOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->


</section>
<!--Section: Content-->


</div>
    </div>
    <div class="col-6 col-md-2">
   
    </div>
  </div>
  </div>
  <br>
  <div id="seccion2"class="container">
      <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
    <div class="col-6 col-md-2">
     
    </div>
    <div class="col-6 col-md-8">
     <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-9">

          <!-- FORMULARIO DE REGISTRO  -->
          <form id="registrar" class="text-center" method="post" action="">

            <p class="h4 mb-4">Registrarse</p>

            <div class="form-row mb-4">
              <div class="col">
                <!-- First name -->
                <input type="text" id="realname" name="realname"  class="form-control mb-4" placeholder="Ingresa tu nombre">
              </div>

            <!-- E-mail -->
            <input type="email" id="nick" name="nick"  class="form-control mb-4" placeholder="Ingresa mail">

            <!-- Password -->
            <input type="password" id="regpass" name="pass"  class="form-control mb-4"  placeholder="Ingresa contraseña"
              aria-describedby="defaultRegisterFormPasswordHelpBlock">
          <!-- Password rep -->
      
            <input type="password" id="rpass" name="rpass"  class="form-control mb-4"  placeholder="repite contraseña"
              aria-describedby="defaultRegisterFormPasswordHelpBlock">

        

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Registrarse</button>
<p style="text-align: center; ">
  
<a  href="#seccion1">iniciar sesión
              </a>

</p>
          </form>
          <!-- FORMULARIO DE REGISTRO -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
    </div>
    <div class="col-6 col-md-2">
   
    </div>
  </div>
</div>
<!-- Your HTML content here -->

<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>

 <script src="alertas.js"></script>

</body>
</html>





<script>




$(document).ready(function() {

        //LOGIN
         $('#login').submit(function(e) {
            e.preventDefault(); // Prevenir el envío del formulario por defecto

            var correo = $('#mail').val();
            var password = $('#pass').val();
            // Alertas Login

              if ($("#mail").val() == ""){
                  
                  campoInvalido('Campo Vacio','El correo esta vacio');

                  return false;
              } else if($("#pass").val() == ""){
                  campoInvalido('Campo Vacio','La contraseña esta vacia');
                  return false; 
            } else {
              
              // Realizar la petición AJAX
                    $.ajax({



       
                        type: 'POST',
                        url: 'validar.php', // Archivo PHP para procesar los datos en el servidor
                        data: { pass: password, mail: correo }, // Se envia el dato
                        success: function(response) {
                          //este alert nos sirve para saber que valor tiene response 
                          //alert(response)
                            // Mensajes segun el valor de response
                            if (response == 0) {
                              Error("Acceso Denegado", "El usuario no existe");

                                //window.location.href = "inicioModerador.php";
                            } else if (response == 1) {
                              mensajeError("Error en el Proceso", "Este rol no existe");

                               // window.location.href = "inicioUser.php";
                            } else if (response == 2) {
                              Error("Acceso Denegado", "La contraseña es incorrecta");

                               // window.location.href = "inicioEmpresa.php";
                            } else if (response == 3) {
                              Usuario();

                            } else if (response == 4) {
                              Admin();

                            } else {
                                
                                mensajeError("Error en el Proceso", "Intente nuevamente");
                            }

                        }
                        
                    });

            }

      

            
        });//Fin Login Alertas



        //Registro
         $('#registrar').submit(function(e) {
            e.preventDefault(); // Prevenir el envío del formulario por defecto
            var nombre = $('#realname').val();
            var correo = $('#nick').val();
            var password = $('#regpass').val();
            // Alertas Login

              if ($("#realname").val() == ""){
                  campoInvalido('Campo Vacio','El nombre esta vacio');
                  return false;
              } else if($("#nick").val() == ""){
                  campoInvalido('Campo Vacio','El correo esta vacio');
                  return false; 
              } else if($("#regpass").val() == ""){
                  campoInvalido('Campo Vacio','La contraseña esta vacia');
                  return false; 
              } else if($("#regpass").val() != $("#rpass").val()){
                  campoInvalido('Campo Vacio','Las contraseñas no coinciden');
                  return false; 
              } else {
              
              // Realizar la petición AJAX
              
                    $.ajax({
                      



       
                        type: 'POST',
                        url: 'registro.php', // Archivo PHP para procesar los datos en el servidor
                        data: { realname: nombre, pass: password, nick: correo }, // Se envia el dato
                        success: function(response) {
                          //este alert nos sirve para saber que valor tiene response 
                          //alert(response)
                            // Mensajes segun el valor de response
                           // alert(response)
                           
                            if (response == 0) {
                              Error("Error", "El usuario ya existe");

                                //window.location.href = "inicioModerador.php";
                            } else if (response == 1) {
                              Exito("¡Operación completada!", "Usuario registrado. Los cambios se han guardado correctamente.");

                               // window.location.href = "inicioUser.php";
                            } else {
                                
                                Error("Error en el Proceso", "Intente nuevamente");
                            }

                        }
                        
                        
                    });

            }
            
        });//Fin Registro alertas
       
       
});//Cierre del document.ready function


</script>
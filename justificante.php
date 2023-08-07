<?php
session_start();
include 'cnn.php';
require_once 'cdn.html';



          $sql=$cnnPDO->prepare('SELECT * FROM administradores WHERE usuario = :usuario');

            $sql->bindParam(':usuario', $_SESSION['usuario']);
            $sql->execute();
            
              $results = $sql -> fetchAll(PDO::FETCH_OBJ);

              foreach ($results as $dato) {
                
                $nombre2 = $dato -> nombre;
           
                
              }
?>
<!DOCTYPE html>
<html>
<head>
  <title>COBAC ||  Justificante </title>

   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB icon -->
   <link rel="icon" href="img/logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <!-- MDB icon -->
  <link rel="icon" href="img/ico.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
  />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
     <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB icon -->
    <link rel="icon" href="img/ima.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->

    <meta charset="utf-8" />



    <!-- MDB 4.19.0 -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Custom styles -->
       <style type="text/css">

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
 background-color: red;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
background-color: red;
}
.form .message {
  margin: 30px 0 0;
  color: black;
  font-size: 12px;
}
.form .message a {
  color: purple;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body{
        background-image: url(img/green.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed; 
}
</style>
</head>
        
 
<header>
   <!-- Navbar -->
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg bg-dark navbar-dark  text-uppercase fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>

     <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="nav-item">
            <img src="img/logo.PNG"height="40"alt=""loading="lazy"/>
          </a>
              <ul class="navbar-nav ml-auto">
              

          
  <li class="nav-item">   <a class="nav-link" style="color: white;"><i class="fas fa-user"></i>  <strong>
</a>  </strong>
  </li>  
          
    <li class="nav-item">   
 <a class="nav-link" href="admin.php"  style="color: white"> <i class="fas fa-home"></i> . </a> </strong>
  </li> 
   <li class="nav-item">   
 <a class="nav-link" href="#" onclick="cerrarSesion()" style="color: white"><i class="fas fa-sign-out-alt"></i> . </a> </strong>
  </li>
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>
<body style="background: #eceff1;" >

<form action="documentoDejustificante.php" method="post">
<div class="login-page">
  <div class="form">
     <form action="documentoDejustificante.php" method="post" class="login-form">
   
 <img src="img/logo.png"height="50"alt=""loading="lazy"/>
<br><br>
   
    
     <input type="date" name="fecha" value="" />
     <input type="text" name="matricula" placeholder="Matricula" value="" />
      <input type="text" name="nombre" placeholder="Nombre del alumno" value="" />
      <input type="text" name="grupo" placeholder="Grupo" value="" />
      <textarea name="motivo" rows="5" cols="35" placeholder="Dias a justificar (ej. 1 de enero al 5 de enero del 2023)"></textarea>
   
      <br> <br>
       
   
       

<button type="submit"class="btn btn-outline-lime btn-fluid" data-mdb-ripple-color="dark">GENERAR </button>

    </form>
  </div>
</div>



     <footer class="text-center text-white">
  <!-- Grid container -->

    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center" style="color: white">
    © 2021 Developed by: ALRM
    
  </div>
  <br>
  <!-- Copyright -->
</footer>



  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 


</body>
</html>
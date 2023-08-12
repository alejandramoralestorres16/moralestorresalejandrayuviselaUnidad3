<?php
session_start();
?>
<?php

require_once 'cdn.html';

  include("cnn.php");

 if (isset($_POST['boton'])) 
  {
$matricula= $_POST['matricula'];
$grupo= $_POST['grupo'];


$sql= "UPDATE alumnos SET grupo='$grupo' WHERE matricula LIKE $matricula";
$rta = mysqli_query($con, $sql);

if (!$rta) {
  // code...
  echo "Error al actualizar";
}
else  {
  // code...
  ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script src="js/swalregistro.js"></script>
              <?php 
}
}









              ?>
<?php
include 'cnn.php';


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
  <title>|| Reinscribir </title>

   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB icon -->
    <link rel="icon" href="img/logo.PNG" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
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
 <a class="nav-link" href="accionesdealumnos.php"  style="color: white"><i class="fa fa-arrow-left" aria-hidden="true"></i> . </a> </strong>
  </li>
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>
<body style="background: #eceff1;" >

 
<form  method="post">
<div class="login-page">
  <div class="form">
     <form  method="post" class="login-form">
   
 <img src="img/logo.png"height="50"alt=""loading="lazy"/>
<br><br>
   
      <input type="text" name="matricula" placeholder="Matricula del alumno" value="" />
      
      <br> 
<div class="form-group">
        <label style="color:dark">NUEVO GRUPO Y SECCION DEL ALUMNO </label>
        <select name="grupo" id="grupo" class="form-control">
            <option  value="0">Seleccione uno...</option>
 <option value="1A">1A</option>
<option value="1B">1B</option>
<option value="1C">1C</option>
<option value="1D">1D</option>
<option value="1E">1E</option>
<option value="1F">1F</option>
<option value="1G">1G</option>
<option value="1H">1H</option>
<option value="1I">1I</option>
<option value="1J">1J</option>
<option value="1K">1K</option>
<option value="1L">1L</option>

<option value="2A">2A</option>
<option value="2B">2B</option>
<option value="2C">2C</option>
<option value="2D">2D</option>
<option value="2E">2E</option>
<option value="2F">2F</option>
<option value="2G">2G</option>
<option value="2H">2H</option>
<option value="2I">2I</option>
<option value="2J">2J</option>
<option value="2K">2K</option>
<option value="2L">2L</option>

<option value="3A">3A</option>
<option value="3B">3B</option>
<option value="3C">3C</option>
<option value="3D">3D</option>
<option value="3E">3E</option>
<option value="3F">3F</option>
<option value="3G">3G</option>
<option value="3H">3H</option>
<option value="3I">3I</option>
<option value="3J">3J</option>
<option value="3K">3K</option>
<option value="3L">3L</option>

<option value="4A">4A</option>
<option value="4B">4B</option>
<option value="4C">4C</option>
<option value="4D">4D</option>
<option value="4E">4E</option>
<option value="4F">4F</option>
<option value="4G">4G</option>
<option value="4H">4H</option>
<option value="4I">4I</option>
<option value="4J">4J</option>
<option value="4K">4K</option>
<option value="4L">4L</option>

<option value="5A">5A</option>
<option value="5B">5B</option>
<option value="5C">5C</option>
<option value="5D">5D</option>
<option value="5E">5E</option>
<option value="5F">5F</option>
<option value="5G">5G</option>
<option value="5H">5H</option>
<option value="5I">5I</option>
<option value="5J">5J</option>
<option value="5K">5K</option>
<option value="5L">5L</option>

<option value="6A">6A</option>
<option value="6B">6B</option>
<option value="6C">6C</option>
<option value="6D">6D</option>
<option value="6E">6E</option>
<option value="6F">6F</option>
<option value="6G">6G</option>
<option value="6H">6H</option>
<option value="6I">6I</option>
<option value="6J">6J</option>
<option value="6K">6K</option>
<option value="6L">6L</option>
        </select>
    </div>


      
   
      <br>   <br>
       
   
       

<button type="submit" name="boton" class="btn btn-outline-lime btn-fluid" id="boton" data-mdb-ripple-color="dark"  onclick="reinscribir()">REINSCRIBIR ALUMNO </button>

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
  <script type="text/javascript">

  function reinscribir(){
   Swal.fire({
  title: 'REINSCRIPCION EXITOSA!!!',
  
  background: 'white',

}).then((result) => {
  if (result.isConfirmed) {
    window.location = "logout.php";
  }
})
  };
</script>


</body>
</html>
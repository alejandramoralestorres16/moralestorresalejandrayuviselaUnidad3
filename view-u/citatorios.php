<?php
session_start();
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
  <title>Conalep II | Citatorios </title>

   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <!-- MDB icon -->
    <link rel="icon" href="img/Conalep-logo.png" type="image/x-icon"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
     <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <!-- MDB icon -->
    <link rel="icon" href="img/ima.png" type="image/x-icon"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css"/>
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
 background-image: url(img/green.jpg);
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
background-image: url(img/green.jpg);
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
<body>
   <!-- Navbar -->
  <nav style=" background-image: url(img/nvar.jpg)" class="navbar navbar-expand-lg navbar-light  fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
            <img src="img/logo.jpg"height="40"alt=""loading="lazy"/>
          </li>
          <li class="nav-item active bg-purple">
            <a class="nav-link" aria-current="page">Conalep Saltillo II</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
        
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
             <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>  <li class="nav-item"> <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>     
<li class="nav-item">
            <img src="img/user.png"height="37"alt=""loading="lazy"/>
          </li>   <strong>
 <li class="nav-item">  <a class="nav-link" style="color: black">
<?php echo $nombre2; ?></a>   </strong>
          </li>  <li class="nav-item">
         <strong>
 <a class="nav-link" href="accionesdealumnos.php" style="color: red">Volver</a>   </strong>
  </li> 
        </ul>
      </div>
    </div>
  </nav>
<br><br><br>

<CENTER>
   <div class="container-fluid">
   
<div class="col-lg-4">
<div class="container-fluid">
   <h2><span class="badge" style="background-color:#E50404 ;color: white">BUSCAR</span></h2>
  </div>
   <form id="buscar">
  <input type="text" id="busqueda" name="busqueda" placeholder="Nombre del alumno" class="form-control">
 </form>

  </div> 
 </CENTER>
 <br>





  <div class="container-fluid">


  <script type="text/javascript">

 $("#busqueda").on("keyup", function() {
$.ajax({
 url: 'busqueda3.php',
 method: 'post',
 data: $('#buscar').serialize(),
success: function(respuesta) {
 document.getElementById('respuesta').innerHTML= respuesta;
},
error: function() {
 document.getElementById()
   }
   });
 });
  </script>

 </div>
  </div>

<br>
<div id="respuesta">


    



  

</body>
</html>
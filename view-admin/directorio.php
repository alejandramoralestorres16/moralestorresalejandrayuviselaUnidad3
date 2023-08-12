<?php
session_start();
include 'cdn.html';
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
  <title>|| Directorio </title>

  <link rel="stylesheet" type="text/css" href="bus.css">
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
 <a class="nav-link" href="impresiones.php"  style="color: white"><i class="fa fa-arrow-left" aria-hidden="true"></i> . </a> </strong>
  </li>
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>

  <body style="background: #eceff1;" >

<<br>
<div class="container-fluid">

</div>
<br>
<div class="col-8">
       <form id="buscar">
     
<div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 lime-border" type="text" id="busqueda" name="busqueda" placeholder="busqueda por apellido  " aria-label="Search" style="background-color: white;">

  <div class="input-group-append">
    <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
</div>


   </form>


    </div>
<script type="text/javascript">

$("#busqueda").on("keyup", function() {
$.ajax({
url: 'busqueda4.php',
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
                                                            <?php
include 'cnn.php';
$sqlsocios='SELECT * FROM alumnos';
$querysocios=$cnnPDO -> prepare($sqlsocios);
$querysocios -> execute();
$countsocios=$querysocios -> fetchAll(PDO::FETCH_OBJ); 

if ($querysocios -> rowCount() > 0) {
      # code...
  ?>
  <div class="container-fluid">
    <table class="table table-striped table-bordered border-dark bg-white">
      <caption>

      </caption>
      <thead class="table-dark">
        <tr style="text-align: center">
          <td>GRUPO</td>

          <td>MATRICULA</td>
          <td>ALUMNO</td>
          <td>CELULAR</td>
          <td>CEL. MAMA</td>
          <td>CEL. PAPA</td>
          <td>DIRECCION</td>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ( $countsocios as  $countsocios) {
        # code...
         ?>          <tr style="color: black; text-align: left;">
          <td><?php echo  $countsocios -> grupo; ?></td>

          <td><?php echo  $countsocios -> matricula; ?></td>
          <td><?php echo  $countsocios -> apellidos; ?> <?php echo  $countsocios -> nombre; ?></td>   
         <td><?php echo  $countsocios -> celular; ?></td>
          <td><?php echo  $countsocios -> celularmadre; ?></td>  
             <td><?php echo  $countsocios -> celularpadre; ?></td>  <td><?php echo  $countsocios -> direccion; ?></td>  

        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
<?php
}else{

  ?>
  <div class="container-fluid">
    <h2>NO EXISTE EL ALUMNO</h2>
  </div>
  <br>

  <?php

}
?>
    <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">

 
</script>

                                                       </div>

                                                      </body>
                                                      </html>
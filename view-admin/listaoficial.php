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
  <title>|| Lista Oficial </title>

   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>

    
    <!-- MDB icon -->
    <link rel="icon" href="img/logo.png" type="image/x-icon"/>
    
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Custom styles -->
       <style type="text/css">
       
<br>
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

      
      
    

</style>

   
</head>
<header>
   <!-- Navbar -->
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg bg-dark navbar-dark text-uppercase fixed-top">
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
<br><bR><br>
                                                          <br>
<div class="container-fluid">
  <p align="left"> 

    <h5 style="color:darkgrey;">LISTA OFICIAL</h5>

<p align="right"> 


<button onclick="location.href='exel.php'" class="btn btn-outline-lime" data-mdb-ripple-color="dark">Exportar a Exel</button>
 </p></div>
                                                          <div id="respuesta">
                                                            <?php
include 'cnn.php';
$sqlsocios='SELECT * FROM alumnos ORDER BY grupo';
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

          <td>MATRICULA</td>
          <td>GRUPO</td>
          <td>NOMBRE</td>
          <td>APELLIDOS</td>
          
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ( $countsocios as  $countsocios) {
        # code...
         ?>          <tr style="color: black; text-align: center;">
          <td><?php echo  $countsocios -> matricula; ?></td>
          <td><?php echo  $countsocios -> grupo; ?></td>
          <td><?php echo  $countsocios -> nombre; ?></td>
          <td><?php echo  $countsocios -> apellidos; ?></td>   
          
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
  
  <br>

  <?php

}
?>
                                                          </div>

                                                      </body>
                                                      </html>

<?php include 'cnn.php';
require_once 'cdn.html';
   ?>
<!DOCTYPE html>
<html>
<head>
  <title>|| Alumnos </title>

   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>

    
    <!-- MDB icon -->
    <link rel="icon" href="img/logo.png" type="image/x-icon"/>
    
    
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Custom styles -->
       <style type="text/css">

.sub-title{
font-size: 21px;
margin-bottom: 20px;
margin-top: 10px;
margin: -5px;
}
.title{
font-size:18px;
margin-bottom: 20px;
margin-top: 10px;
margin: -5px;

}
</style>
</head>
<?php
include 'cnn.php';


$busqueda = $_POST['busqueda'];

$query = "SELECT * FROM alumnos WHERE apellidos LIKE '%$busqueda%'";
$consulta = mysqli_query($con, $query);



if ($row = mysqli_fetch_array($consulta)) {
      # code...
  ?>

  
              <?php
              $query = $cnnPDO->prepare("SELECT * FROM alumnos WHERE apellidos LIKE '%$busqueda%'");
              $query->execute(); 

              $columnas = 1;
              while($campo = $query->fetch())
              {
                if ($columnas > 1)
                {
                  $columnas = 1;
                  ?>
                </tr>

                  <tr>
                  <?php
                }
                else
                {
                  $columnas = $columnas + 1; 
                  ?>
                 
<center>
  <div class='card text-white mb-3 border-light mb-1'  style= "width:43rem;" style= 'background: black;'>
                      <div class='card-header' style= "background: #b3ae11
;"><h4 style="color:black; float:center;">CONTROL ESCOLAR </h4>
                      </div>
                    
  <div class="row g-0 " style="  ">
    <div class="col-md-3">
        <img src="img/alumn.png " style="  margin-top: 10px;" width="260px" height="360px">
    </div>



    <div class="col-sm-35 col-md-8 col-lg-15 col-xl-15">
      <div class="card-body">
        
        <p class="card-text">

<p class="sub-title" style="color: darkgreen; margin-top: -26px; margin-left: -155px;">MATRICULA:</p>
<p class="title"style="color: black; margin-top: -30px; margin-left: 90px; "><?php echo $campo['matricula']; ?></p>


  <p class="sub-title" style="color: darkgreen; margin-top: 10px; margin-left: -163px;">APELLIDOS:</p>
  <p class="title"style="color: black; "><?php echo $campo['apellidos']; ?></p>


  <p class="sub-title" style="color: darkgreen; margin-top: 10px; margin-left: -180px;">NOMBRE:</p>
  <p class="title"style="color: black;"> <?php echo $campo['nombre']; ?></p>


   <p class="sub-title" style="color: darkgreen;margin-top: 10px;  margin-left: -195px;">GRUPO:</p>
   <p class="title"style="color: black;margin-top: -28px; margin-left: -8px;"><?php echo $campo['grupo']; ?></p>


    <p class="sub-title" style="color: darkgreen; margin-top: 10px; margin-left: 250px;margin-top: -30px; ">TURNO:</p>
    <p class="title"style="color: black;margin-top: -28px; margin-left: 365px;"><?php echo $campo['turno']; ?></p>


    <p class="sub-title" style="color: darkgreen;margin-top: 10px;margin-left: -173px; ">FT/TC:</p>
    <p class="title"style="color: black;margin-top: 4px; margin-left: -75px;"><?php echo $campo['carrera']; ?></p>

  <p class="sub-title"  style="color: darkgreen;margin-top: 10px;margin-left: -173px; ">CORREO:</p>
  <p class="title"style="color: black;margin-left: 60px;"><?php echo $campo['correo']; ?></p>
       
        
  <p class="sub-title"  style="color: darkgreen;margin-top: 10px;margin-left: -173px; ">CELULAR:</p>
  <p class="title"style="color: black;margin-left: 60px;"><?php echo $campo['celular']; ?></p>

      </div>

    </div>
    <center>
     
<div class=" col-sm-35 col-md-15 col-lg-11 col-xl-30 ">
  







<button onclick="location.href='reporte.php'" class="btn btn-outline-lime bg-dark" data-mdb-ripple-color="dark">REPORTE</button>

<button onclick="location.href='justificante.php'"class="btn btn-outline-lime bg-dark" data-mdb-ripple-color="dark">JUSTIFICANTE</button>

<button onclick="location.href='citatorio.php'" class="btn btn-outline-lime bg-dark" data-mdb-ripple-color="dark">CITATORIO</button>




<button onclick="location.href='historial.php'" class="btn btn-outline-lime bg-dark" data-mdb-ripple-color="dark">HISTORIAL</button>


</center>



                      
     
  </div>
</div>

                  <?php
                }
            
                }

              ?>
   
            
  <?php

}
?>


</body>
</html>


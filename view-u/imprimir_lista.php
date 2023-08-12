
<?php
session_start();
require_once 'cdn.html';

include 'cnn.php';

if (isset($_SESSION['user'])) {

    
} else {
    header("Location: ../index.php");
    ob_end_flush();
    exit(); 
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <head>
  <title>  LISTA GRUPOS </title>

   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <!-- MDB icon -->
    <link rel="icon" href="img/logo.png" type="image/x-icon"/>
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
</head>
<header>
   <!-- Navbar -->
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg  bg-dark navbar-darktext-uppercase fixed-top">
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
 <a class="nav-link" href="../index2.php" style="color: white"> <i class="fas fa-home"></i> . </a> </strong>
  </li> 
  <li class="nav-item">   
 <a class="nav-link" href="impresi.php"  style="color: white"><i class="fa fa-arrow-left" aria-hidden="true"></i> . </a> </strong>
  </li>
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>

<body style="background: #eceff1;" > 
    <br>
 
<div class="container mt-5">


  <!--Section: Content-->
  <section>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 mb-4">

         <div class="card">

   <!--Navbar-->
<h5 class="card-header accent-3 white-text text-center py-2"style="background: #dce775">
        
        <img src="img/logo.png"height="40"alt=""loading="lazy"/>
            </h5>



<!--/.Navbar-->

    <!--Card content-->
    <div class="card-body px-lg-2 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="imprimir_lista.php" method="POST">

            <!-- Name -->
            <div class="md-form mt-3">

               <h3>Ver Grupo</h3> 
               <br> 
           <a>Buscar Grupo</a>
         </p>
            </div>

            <!-- E-mail -->
            <div class="md-form">
               
<?php 
$select=$cnnPDO->prepare("SELECT * FROM t_grupo");
$select->execute();
?>
<select  class="form-control"  name="grupo" id="">
    <option value="0">Seleccionar grupo</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['grupo'] ?> "><?php echo $row['grupo'] ?></option>

<?php 
}

?>
  </select>  


            </div>

            <!-- Subject -->
          
           <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name= "buscar">BUSCAR</button>
            <!-- Send button -->

        </form>
        <!-- Form -->

    </div>

</div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-8 mb-2 align-self-center text-center text-lg-left">

             
  <br>
  <?php

  
if (isset($_POST['buscar'])) 
{
    //Trae datos del formulario
$grupo=$_POST['grupo'];
$_SESSION['grupo']=$grupo;
$query = $cnnPDO->prepare( "SELECT matricula, grupo, apellidos,nombre FROM alumnos WHERE grupo =:grupo" );
$query->bindParam(':grupo',$grupo);
$query->execute();


?>

  <div class="row">
      <div class="col-2"> </div>
          <div class="col-10">
          <div class="card body">
              <table class="table">
                  <thead>
                      <tr>
                         
                       

                          <th scope="col" style="color:#FFFFFF;background-color:black;">Grupo</th>
                           <th scope="col" style="color:#FFFFFF;background-color: black;">Matricula</th>
                          <th scope="col" style="color:#FFFFFF;background-color: black;">Nombres</th>
                         
                        
                      </tr>
                  </thead>

                  <?php
            
while ($row = $query->fetch()) {
    echo '<tr>';

    echo '<td>' . $row['grupo'] . '</td>';
    echo '<td>' . $row['matricula'] . '</td>';
    echo '<td >' . $row['apellidos'] . $row['nombre'] .'</td>';
  
   
    echo '</tr>';
}
}
?>


       </table>
<center> 
  <button type="button" name="" class="btn" style="color: red"><a href="pdfgrup.php">GENERAR PDF</button></a>
      </center>   
      </div>
      </div>
    </div>
  </div>
   <br>  

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->




</body>


 <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">

  
</script>



</html>

<!-- MDB -->

<?php
session_start();
require_once 'cdn.html';
error_reporting (0);
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
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>ALUMNOS RIESGO	</title>

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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

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
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg  text-uppercase fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>

     <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="nav-item">
            <img src="img/logo.PNG"height="40"alt=""loading="lazy"/>
          </a>
              <ul class="navbar-nav ml-auto">
              

          
  <li class="nav-item">   <a class="nav-link" style="color: white;"><i class="fas fa-user"></i>  <strong>
<?php echo $nombre2; ?></a>  </strong>
  </li>  
          
    <li class="nav-item">   
 <a class="nav-link" href="index2.php"  style="color: white"> <i class="fas fa-home"></i> . </a> </strong>
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

 
<br> 
<?php 	
		$link=mysqli_connect("localhost","root","");
if ($link){
	mysqli_select_db($link, "escolares");
	mysqli_query($link, "SET NAMES 'utf8'");
} 
$f1=$_POST['f1'];
$f2=$_POST['f2'];
$grupo=$_POST['grupo'];
?>
 <div class="container mt-5">


  <!--Section: Content-->
  <section>

    <!-- Grid row -->
    <div class="row">


      <!-- Grid column -->
      <div class="col-lg-4 mb-4">

                <!-- Featured image -->
        <div class="view overlay mb-4">
           <div class="card">

    <h5 class="card-header accent-3 white-text text-center py-2"style="background: #dce775">
        
        <img src="img/logo.png"height="40"alt=""loading="lazy"/>
            </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
<?php   
    $link=mysqli_connect("localhost","root","");
if ($link){
  mysqli_select_db($link, "escolares");
  mysqli_query($link, "SET NAMES 'utf8'");
}
   ?>
  
        <!-- Form -->

          <form class="text-center" style="color: #757575;" method="POST" action="riesgoGrupal.php">

            <!-- Name -->
            <div class="md-form mt-3">

           <h4 class="text-dark">Alumnos en riesgo por semana</h4>
         
            </div>

            <!-- E-mail -->
            <div class="md-form">
  </br>
<a class="text-right">Selecciona el inicio de la semana</a>
    <input class="form-control" type="date" name="f1" required>
   </br>
   <a class="text-right">Selecciona el fin de la semana</a>

 <input class="form-control" type="date" name="f2" required ><div>
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
     


    </form>
    
    <?php   
      $v= mysqli_query($link,"SELECT * FROM riesgo");
      while ($sistemas = mysqli_fetch_row($v)) {
     ?> 
     <?php    } ?>
</select>

            </div>

            <!-- Subject -->
    
           <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name= "buscar">BUSCAR <i class="fas fa-search"></i></button>

            <a href="riesgoGeneral.php"> FILTRO GENERAL </a>
            <!-- Send button -->
 
        </form>
        <!-- Form -->


</div>
<button onclick="createPDF()"   class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name= "">PDF </button>


       </div>
    </div>
  </div>

      </div>
      <!-- Grid column -->

	
      <!-- Grid column -->
      <div id="tabla" class="col-lg-8 mb-4 align-self-center text-center text-lg-left">

<center>
<h3  class=" text-dark font-weight-bold" >REPORTE DE ALUMNOS EN RIESGO DE: <?php     echo $grupo ?> </h3> 
       <a class=" text-danger font-weight-bold" > DESDE :</a> <?php     echo $f1 ?> <a class=" text-danger font-weight-bold"> HASTA:</a> <?php echo $f2 ?></center>

       
           <div class="container-fluid">
    <table class="table table-striped table-bordered border-dark bg-white">
      <caption>

      </caption>
      <thead class="table-dark">
        <tr style="text-align: center">

          <td>GRUPO</td>
          <td>NOMBRE</td>
          <td>FECHA</td>
          <td>MATERIA</td>
          
          
        </tr>
      </thead>

        <?php   
$v = mysqli_query($link,"SELECT * FROM riesgo WHERE fecha BETWEEN '$f1' AND '$f2'AND grupo='$grupo' ");
            while ($datos=mysqli_fetch_row($v)) {
         ?>

      <tbody>

                <tr style="color: black; text-align: center;">
            <td><?php echo  $datos['0']; ?></td>
             <td><?php echo  $datos['2']; ?></td>
             <td><?php echo  $datos ['3']; ?></td> 
              <td><?php echo  $datos['4']."-".$datos['5']."-".$datos['6']."-".$datos['7']."-".$datos['8']."-".$datos['9']."-".$datos['10']."-".$datos['11']."-".$datos['12']."-".$datos['13']; ?></td>
             
        </tr>
        <?php } ?> 
<script>
        function createPDF() {
            var pdf = document.getElementById("tabla");
            var opt = {
                margin: 0.5,
                filename: 'riesgogrupal.pdf',
                image: {  type: 'jpeg', quality:  1 },
                html2canvas:  { scale: 2, logging:true, dpi:332, letterRendering:true },
                jsPDF: { unit: 'in', format: 'a3', orientation: 'portrait' }
            };
            html2pdf().set(opt).from(pdf).save();
        }
    </script>

</body>


 <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">

  function cerrarSesion(){
   Swal.fire({
  title: '¿Estas seguro de querer cerrar tu sesión?',
  text: "Tendras que iniciar sesión nuevamente!!!",
  background: 'white',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#1F5003',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Cerrar sesión',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "logout.php";
  }
})
  };
</script>



</html>
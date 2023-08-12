<?php
session_start();
require_once 'cdn.html';

include 'cnn.php';


          $sql=$cnnPDO->prepare('SELECT * FROM administradores WHERE usuario = :usuario');

            $sql->bindParam(':usuario', $_SESSION['usuario']);
            $sql->execute();
            
              $results = $sql -> fetchAll(PDO::FETCH_OBJ);

              foreach ($results as $dato) {
                

                $nombre2 = $dato -> nombre;
           
                
              }

if (isset($_POST['riesgo'])) {
    # code...

    $grupo=$_POST['grupo'];
    $carrera=$_POST['carrera'];
    $nombre=$_POST['nombre'];
    $materia1=$_POST['materia1'];
    $materia2=$_POST['materia2'];
    $materia3=$_POST['materia3'];
    $materia4=$_POST['materia4'];
    $materia5=$_POST['materia5'];
    $materia6=$_POST['materia6'];
    $materia7=$_POST['materia7'];
    $materia8=$_POST['materia8'];
    $materia9=$_POST['materia9'];
    $materia10=$_POST['materia10'];

    $fecha=$_POST['fecha'];


    if ($grupo!="" || $carrera!="" || $nombre!=""|| $fecha!="" || $materia1!=""|| $materia2!=""|| $materia3!=""|| $materia4!=""|| $materia5!=""|| $materia6!=""|| $materia7!=""|| $materia8!=""|| $materia9!=""|| $materia10!="") 
    {
      

       $sql=$cnnPDO->prepare('INSERT INTO riesgo (grupo, carrera, nombre,fecha, materia1, materia2, materia3, materia4, materia5, materia6, materia7, materia8, materia9, materia10 ) VALUES (:grupo, :carrera, :nombre, :fecha, :materia1, :materia2, :materia3, :materia4, :materia5, :materia6, :materia7, :materia8, :materia9,:materia10)');

            $sql->bindParam(':grupo',$grupo);
            $sql->bindParam(':carrera',$carrera);
            $sql->bindParam(':nombre',$nombre);
            $sql->bindParam(':fecha',$fecha);
            $sql->bindParam(':materia1',$materia1);
            $sql->bindParam(':materia2',$materia2);
            $sql->bindParam(':materia3',$materia3);
            $sql->bindParam(':materia4',$materia4);
            $sql->bindParam(':materia5',$materia5);
            $sql->bindParam(':materia6',$materia6);
            $sql->bindParam(':materia7',$materia7);
            $sql->bindParam(':materia8',$materia8);
            $sql->bindParam(':materia9',$materia9);
            $sql->bindParam(':materia10',$materia10);
        $sql->execute();

            $count=$sql->rowCount();

            if ($count) 
            {
              
              

      }

    }

  }
 ?>

<!DOCTYPE html>
<html>
<head>
  <head>
  <title>|| Buscar Alumnos en riesgo </title>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<script src="script.js"></script>

        <script combo="javascript" src="js/jquery-3.1.1.min.js"></script>

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
 <a class="nav-link" href="#" onclick="cerrarSesion()" style="color: white"><i class="fas fa-sign-out-alt"></i> . </a> </strong>
  </li>
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>

<body style="background: #eceff1;" >


<div class="container mt-5">

<br><br>
  <!--Section: Content-->
  <section>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-6 mb-4">

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

           <h4 class="text-dark">Alumnos En Riesgo Por Grupo</h4>
         
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
$select=$cnnPDO->prepare("SELECT grupo FROM t_grupo");
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

</div>
    </div>
      </div>
          

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-6 mb-5 align-self-center text-center text-lg-left">
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

          <form class="text-center" style="color: #757575;" method="POST" action="riesgoGeneral.php">

            <!-- Name -->
            <div class="md-form mt-3">

           <h4 class="text-dark">Alumnos En Riesgo General</h4>
         
            </div>

            <!-- E-mail -->
            <div class="md-form">
  </br>
<a class="text-right">Selecciona el inicio de la semana</a>
    <input class="form-control" type="date" name="f1" required>
   </br>
   <a class="text-right">Selecciona el fin de la semana</a>

 <input class="form-control" type="date" name="f2" required ><div>

    </form>
    </br>
    <?php   
      $v= mysqli_query($link,"SELECT * FROM riesgo");
      while ($sistemas = mysqli_fetch_row($v)) {
     ?> 
     <?php    } ?>
</select>

            </div>

            <!-- Subject -->
    
           <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name= "buscar">BUSCAR <i class="fas fa-search"></i></button>
            <!-- Send button -->
 </div> 
        </form>
        <!-- Form -->

       </div>
    </div>
  </div>
        
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>
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
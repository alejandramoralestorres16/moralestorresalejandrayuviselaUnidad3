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
    

    $fecha=$_POST['fecha'];


    if ($grupo!="" || $carrera!="" || $nombre!=""|| $fecha!="" || $materia1!=""|| $materia2!=""|| $materia3!=""|| $materia4!=""|| $materia5!="") 
    {
      

       $sql=$cnnPDO->prepare('INSERT INTO riesgo (grupo, carrera, nombre,fecha, materia1, materia2, materia3, materia4, materia5 ) VALUES (:grupo, :carrera, :nombre, :fecha, :materia1, :materia2, :materia3, :materia4, :materia5)');

            $sql->bindParam(':grupo',$grupo);
            $sql->bindParam(':carrera',$carrera);
            $sql->bindParam(':nombre',$nombre);
            $sql->bindParam(':fecha',$fecha);
            $sql->bindParam(':materia1',$materia1);
            $sql->bindParam(':materia2',$materia2);
            $sql->bindParam(':materia3',$materia3);
            $sql->bindParam(':materia4',$materia4);
            $sql->bindParam(':materia5',$materia5);
          
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
  <title>COBAC || Agregar alumnos en riesgo </title>

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
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg  bg-dark navbar-dark text-uppercase fixed-top">
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
	<br> <br> <br>  

  <!--Section: Content-->
  <section class="dark-grey-text text-center">
    <h2 class="text-muted  " > Registrar alumnos en riesgo </h2> 
    <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-deep-orange" type="button"><a class="text-white" href="agregarRiesgo.php"><i class="fas fa-search"></i> Riesgo</button>
</div>

	<div class="container">
 <div class="row">
    <div class="col-6 col-md-4">
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">
 
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
    <!-- Card header -->
        <h5 class="mb-0">
          1 A <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse" role="tab" aria-labelledby="headingOne1" data-parent="#accordionEx">
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE	grupo='1A'");
$select->execute();
?>

<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
    <select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>  
    </div>
    <div class="col-6 col-md-4">
    <select class="form-control"  name="grupo" id="">
<option value="1A"> 1A </option>
</select>
    </div>
  </div>
</div>
 <br> 
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
    	<br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE	id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
    	<br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE	id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
    	<br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE	id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
    	<br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE	id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
    	<br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE	id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
      </div>
    </div>
</form>
  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
       
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2"><form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
        1 B <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
     
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1B'");
$select->execute();
?>
<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
  <select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
<select class="form-control"  name="grupo" id="">
<option value="1B"> 1B </option>
</select>
<br>  
    </div>
  </div>
 </div>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

     
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          1 C <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
       
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1C'");
$select->execute();
?>
<select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>
 <br> 
<select class="form-control"  name="grupo" id="">
<option value="1C"> 1C </option>
</select>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

      </div>
      </div>
   

  </div>
  <!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          1D <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
       
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1D'");
$select->execute();
?>
<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
            <select class="form-control"  name="carrera" id="">
      <option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
      <select class="form-control"  name="grupo" id="">
<option value="1D"> 1D </option>
</select>
    </div>
  </div>
 </div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

      </div>
      </div>
   

  </div>
  
</div>
<!-- Accordion wrapper -->

    </div>
    <div class="col-6 col-md-4">
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne4">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne4" aria-expanded="true"
        aria-controls="collapseOne4">
        <h5 class="mb-0">
          1 E <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne4" class="collapse" role="tab" aria-labelledby="headingOne4" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1E'");
$select->execute();
?>
<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
   <select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>   
    </div>
    <div class="col-6 col-md-4">
    <select class="form-control"  name="grupo" id="">
<option value="1E"> 1E </option>
</select>
    </div>
  </div>
   </div>

<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">
 
    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo5">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo5"
        aria-expanded="false" aria-controls="collapseTwo5"><form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          1 F <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1F'");
$select->execute();
?>
<div class="container">
  
  <div class="row">
    <div class="col col-md-8">
    <select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
<select class="form-control"  name="grupo" id="">
<option value="1F"> 1F </option>
</select>
    </div>
  </div>
  </div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
        
              </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo5"
        aria-expanded="false" aria-controls="collapseTwo5">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          1 G <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1G'");
$select->execute();
?>
<select class="form-control"  name="carrera" id="">

<option value="TC"> TC </option>
</select>
 <br> 
<select class="form-control"  name="grupo" id="">
<option value="1G"> 1G </option>
</select>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
      </form>
              </div>
    </div>

  </div>

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree6">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
        aria-expanded="false" aria-controls="collapseThree6">
        <h5 class="mb-0">
          1 H <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6" data-parent="#accordionEx">
       <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1H'");
$select->execute();
?>
<div class="container">
  
  <div class="row">
    <div class="col col-md-8">
    <select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
<select class="form-control"  name="grupo" id="">
<option value="1H"> 1H</option>
</select>
    </div>
  </div>
  </div>

<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
        
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->

    </div>
    <div class="col-6 col-md-4">
    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne7" aria-expanded="true"
        aria-controls="collapseOne7">
        <h5 class="mb-0">
          1 I <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne7" class="collapse" role="tab" aria-labelledby="headingOne7" data-parent="#accordionEx">
     
         <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1I'");
$select->execute();
?>
<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
      <select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
<select class="form-control"  name="grupo" id="">
<option value="1I"> 1I </option>
</select>
    </div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo8">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo8"
        aria-expanded="false" aria-controls="collapseTwo8">
        <h5 class="mb-0">
          1 J <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo8" class="collapse" role="tabpanel" aria-labelledby="headingTwo8" data-parent="#accordionEx">
             <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1J'");
$select->execute();
?>
<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
  <select class="form-control"  name="carrera" id="">

<option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
  <select class="form-control"  name="grupo" id="">
<option value="1J"> 1J </option>
</select>
    </div>
  </div>
    </div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>

      </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree9"> <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree9"
        aria-expanded="false" aria-controls="collapseThree9">
        <h5 class="mb-0">
          1 K <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree9" class="collapse" role="tabpanel" aria-labelledby="headingThree9" data-parent="#accordionEx">
       <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1K'");
$select->execute();
?>
<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
<select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
<select class="form-control"  name="grupo" id="">
<option value="1K"> 1K </option>
</select>
    </div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree10">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree10"
        aria-expanded="false" aria-controls="collapseThree10">
        <h5 class="mb-0">
          1 L <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree10" class="collapse" role="tabpanel" aria-labelledby="headingThree10" data-parent="#accordionEx">
       <div class="card-body">
         <form class="text-center" style="color: #757575;" id="combo" name="combo" method="POST">

<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
  <select class="form-control"  name="carrera" id="">
<option value="TC"> TC </option>
</select>
    </div>
    <div class="col-6 col-md-4">
    <select class="form-control"  name="grupo" id="">
<option value="1L"> 1L </option>
</select>
    </div>
  </div></div>
<br> 
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='1L'");
$select->execute();
?>

<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>


<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='1'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
        
      </div>
    </div>

  </div>
  <!-- Accordion card -->
</div>
<!-- Accordion wrapper -->
</div>

</div>
<br> 
 <div class="container" >
<div class="row"> 
 <div class="col-6 col-md-4">
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">
    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne13">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne13" aria-expanded="true"
        aria-controls="collapseOne13">

         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          3A <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne13" class="collapse" role="tab" aria-labelledby="headingOne13" data-parent="#accordionEx">
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3A'");
$select->execute();
?>

 <br> 

<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
  <select class="form-control"  name="grupo" id="">
<option value="INFO-03"> INFO-03 </option>
</select>
    </div>
    <div class="col-6 col-md-4">
    <select class="form-control"  name="grupo" id="">
<option value="3A"> 3A </option>
</select>
    </div>
  </div>
 </div>
<br>
  
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

     
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo14">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo14"
        aria-expanded="false" aria-controls="collapseTwo14"> 
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
        3 B <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo14" class="collapse" role="tabpanel" aria-labelledby="headingTwo14" data-parent="#accordionEx">
     
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3B'");
$select->execute();
?>


<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col col-md-8">
     <select class="form-control"  name="carrera" id="">

<option value="INFO-03"> INFO-03 </option>
</select>
    </div>
    <div class="col-6 col-md-4">
      <select class="form-control"  name="grupo" id="">
<option value="3B"> 3B </option>
</select>
    </div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='5'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

     
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree15">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree15"
        aria-expanded="false" aria-controls="collapseThree15">

         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          3 C <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree15" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
       
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3C'");
$select->execute();
?>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="grupo" id="">
<option value="ADMIN-03">ADMIN-03</option>
</select>
    </div>
    <div class="col-sm-4"><select class="form-control"  name="grupo" id="">
<option value="3C"> 3C </option>
</select>
</div>
  </div>
</div> 

<br> 
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>

<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

      </div>
      </div>
   

  </div>
  <!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree16">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree16"
        aria-expanded="false" aria-controls="collapseThree16"> <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          
           <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
          3D <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree16" class="collapse" role="tabpanel" aria-labelledby="headingThree16" data-parent="#accordionEx">
       
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3D'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
<option value="ADMIN-03">ADMIN-03</option>
</select>
    </div>
    <div class="col-sm-4"><select class="form-control"  name="grupo" id="">
<option value="3D"> 3D </option>
</select>
</div>
  </div>
</div> 
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>


      </div>
      </div>
   

  </div>
  
</div>
<!-- Accordion wrapper -->

    </div>
    <div class="col-6 col-md-4">
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne17">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne17" aria-expanded="true"
        aria-controls="collapseOne4">
        <h5 class="mb-0">
          3 E <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne17" class="collapse" role="tab" aria-labelledby="headingOne17" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3E'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
<option value="DESA-03">DESA-03</option>
</select>
    </div>
    <div class="col-sm-4"><select class="form-control"  name="grupo" id="">
<option value="3E"> 3E </option>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo18">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo18"
        aria-expanded="false" aria-controls="collapseTwo18">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          3 F <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo18" class="collapse" role="tabpanel" aria-labelledby="headingTwo18" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3F'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
<option value="HIG-03"> HIG-03 </option>
</select>
    </div>
    <div class="col-sm-4"><select class="form-control"  name="grupo" id="">
<option value="3F"> 3F </option>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
        </form>
              </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo19">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo19"
        aria-expanded="false" aria-controls="collapseTwo19"><form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
           
          3 G <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo19" class="collapse" role="tabpanel" aria-labelledby="headingTwo19" data-parent="#accordionEx">
        <div class="card-body">
       

 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3G'");
$select->execute();
?>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
<option value="INFO-03"> INFO-03 </option>
</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="3G"> 3G </option>
</select>
</div>
  </div>
</div>

 <br> 

<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
        </form>
              </div>
    </div>

  </div>

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree20">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree20"
        aria-expanded="false" aria-controls="collapseThree20">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          3 H <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree20" class="collapse" role="tabpanel" aria-labelledby="headingThree20" data-parent="#accordionEx">
       <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3H'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
      <option value="ADMIN-03"> ADMIN-03 </option>

</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="3H"> 3H </option>
</select>
</div>
  </div>
</div>

 <br> 
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='2'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
       </form> 
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->

    </div>
    <div class="col-6 col-md-4">
    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne21">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne21" aria-expanded="true"
        aria-controls="collapseOne21">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          3 I <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne21" class="collapse" role="tab" aria-labelledby="headingOne21" data-parent="#accordionEx">
     
         <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3I'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
      <option value="DESA-03"> DESA-03 </option>

</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="3I"> 3I </option>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='3'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo22">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo22"
        aria-expanded="false" aria-controls="collapseTwo22"> <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          
          3 J <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo22" class="collapse" role="tabpanel" aria-labelledby="headingTwo22" data-parent="#accordionEx">
             <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='3J'");
$select->execute();
?>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">

<option value="HIG-03"> HIG-03 </option>
</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="3J"> 3J </option>
</select>
</div>
  </div>
</div>
 <br> 
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='4'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
</form>
       
      </div>
    </div>

  </div>
  <!-- Accordion card -->
    </form>
        
      </div>
    </div>

  </div>
  <!-- Accordion card -->
</div>
<!-- Accordion wrapper -->
  </div>
</div>
<br>
 <div class="container" >
<div class="row"> 
 <div class="col-6 col-md-4">
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne23">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne23" aria-expanded="true"
        aria-controls="collapseOne23">
      <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          
          5 A <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne23" class="collapse" role="tab" aria-labelledby="headingOne23" data-parent="#accordionEx">
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5A'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
<option value="info-05"> INFO-05 </option>
</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="5A"> 5A </option>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

     
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo24">
       <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo24"
        aria-expanded="false" aria-controls="collapseTwo24">
        <h5 class="mb-0">
        5 B <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo24" class="collapse" role="tabpanel" aria-labelledby="headingTwo24" data-parent="#accordionEx">
     
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5B'");
$select->execute();
?>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">

<option value="INFO-05"> INFO-05 </option>
</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="5B"> 5B </option>
</select>
</div>
  </div>
</div>
<br>

<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

     
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree25">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree25"
        aria-expanded="false" aria-controls="collapseThree25">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          5 C <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree25" class="collapse" role="tabpanel" aria-labelledby="headingThree25" data-parent="#accordionEx">
       
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5C'");
$select->execute();
?>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="grupo" id="">
<option value="ADMIN-05"> ADMIN-05 </option></select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="5C"> 5C </option>
</select>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

      </div>
      </div>
   

  </div>
  <!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree26">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree26"
        aria-expanded="false" aria-controls="collapseThree26">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          5D <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree26" class="collapse" role="tabpanel" aria-labelledby="headingThree26" data-parent="#accordionEx">
       
      <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5D'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
<option value="ADMIN-05"> ADMIN-05 </option></select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="5D"> 5D </option>
</select>
</select>
</div>
  </div>
</div>
<br>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
</form>

      </div>
      </div>
   

  </div>
  
</div>
<!-- Accordion wrapper -->

    </div>
    <div class="col-6 col-md-4">
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne27">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne27" aria-expanded="true"
        aria-controls="collapseOne27"> <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          
           5 E <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne27" class="collapse" role="tab" aria-labelledby="headingOne27" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5E'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <select class="form-control"  name="carrera" id="">
<option value="DESA-05"> DESA-05 </option></select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="5E"> 5E </option>
</select>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo28">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo28"
        aria-expanded="false" aria-controls="collapseTwo28"><form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
           
          5 F <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo28" class="collapse" role="tabpanel" aria-labelledby="headingTwo28" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5F'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">

<select class="form-control"  name="carrera" id="">
<option value="HIG-05"> HIG-05</option>
</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="5F"> 5F </option>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
        </form>
              </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo29">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo29"
        aria-expanded="false" aria-controls="collapseTwo29">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">

          5 G <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo29" class="collapse" role="tabpanel" aria-labelledby="headingTwo29" data-parent="#accordionEx">
        <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5G'");
$select->execute();
?>


<div class="container">
  <div class="row">
    <div class="col-sm-8">

<select class="form-control"  name="carrera" id="">
<option value="HIG-05"> HIG-05</option>
</select>
    </div>
    <div class="col-sm-4">
<select class="form-control"  name="grupo" id="">
<option value="5G"> 5G </option>
</select>
</div>
  </div>
</div>
<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
        
              </div>
    </div>

  </div>

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree30">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree30"
        aria-expanded="false" aria-controls="collapseThree30">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          5 H <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree30" class="collapse" role="tabpanel" aria-labelledby="headingThree30" data-parent="#accordionEx">
       <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5H'");
$select->execute();
?>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
<select class="form-control"  name="carrera" id="">
<option value="INFO-05 "> INFO-05 </option>
</select>
    </div>
    <div class="col-sm-4">

<select class="form-control"  name="grupo" id="">
<option value="5H"> 5H</option>
</select>
</div>
  </div>
</div>

<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='6'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    
      </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->

    </div>
    <div class="col-6 col-md-4">
    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne31">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne31" aria-expanded="true"
        aria-controls="collapseOne31"> <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          5 I <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne31" class="collapse" role="tab" aria-labelledby="headingOne31" data-parent="#accordionEx">
     
         <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5I'");
$select->execute();
?>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
<select class="form-control"  name="carrera" id="">
<option value="5I"> ADMIN-05 </option>
</select>
    </div>
    <div class="col-sm-4">

<select class="form-control"  name="grupo" id="">
<option value="5I"> 5I</option>
</select>
</div>
  </div>
</div>

<br>

<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='7'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo32">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo32"
        aria-expanded="false" aria-controls="collapseTwo32">
         <form class="text-center" style="color: #757575;" method="POST" action="agregarRiesgoAlu.php">
        <h5 class="mb-0">
          5 J <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo32" class="collapse" role="tabpanel" aria-labelledby="headingTwo32" data-parent="#accordionEx">
             <div class="card-body">
        
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5J'");
$select->execute();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
<select class="form-control"  name="carrera" id="">

<option value="DESA-05"> DESA-05 </option>
</select>
    </div>
    <div class="col-sm-4">

<select class="form-control"  name="grupo" id="">
<option value="5J"> 5J</option>
</select>
</div>
  </div>
</div>

<br>
<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='8'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>

       </form>
      </div>
    </div>

  </div>
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree34">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree34"
        aria-expanded="false" aria-controls="collapseThree34">
        <h5 class="mb-0">
          5 K <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree34" class="collapse" role="tabpanel" aria-labelledby="headingThree34" data-parent="#accordionEx">
       <div class="card-body">
         <form class="text-center" style="color: #757575;" id="combo" name="combo" method="POST">

<div class="container">
  <div class="row">
    <div class="col-sm-8">
<select class="form-control"  name="carrera" id="">

<option value="HIG-05"> HIG-05 </option>
</select>
    </div>
    <div class="col-sm-4">

<select class="form-control"  name="grupo" id="">
<option value="5K"> 5K</option>
</select>
</div>
  </div>
</div>

<br>
  
 <?php 
$select=$cnnPDO->prepare("SELECT * FROM alumnos WHERE grupo='5K'");
$select->execute();
?>

<select class="form-control"  name="nombre" id="">
<option type="text" value="">Alumno</option>
<?php while($row=$select->fetch()){
 ?>

<option value="<?php echo $row['apellidos']?><?php echo $row['nombre']?> "> <?php echo $row['apellidos'] ?>  <?php echo $row['nombre'] ?></option>


<?php 
}

?>
  </select>  
   <div class="row">
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>


<select class="form-control"  name="materia1" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 col-md-6">
      <br>
    <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia2" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia3" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>
    <div class="col-6 ">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia4" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select> 
    </div>


    <div class="col-6 col-md-3">
     
    </div>
    <div class="col-6 col-md-6">
      <br>
      <?php 
$select=$cnnPDO->prepare("SELECT * FROM t_materia WHERE id_grupo='9'");
$select->execute();
?>
<select class="form-control"  name="materia5" id="">
<option type="text" value="">Materias</option>
<?php while($row=$select->fetch()){
 ?>
<option value="<?php echo $row['materia']?> "> <?php echo $row['materia'] ?></option>


<?php 
}

?>
  </select>
    </div>
    <div class="col-12 ">
      <br>  
      <input class="form-control" type="date" name="fecha" placeholder="fecha" value=""/>
      <br> 
      <button class="btn btn-outline-lime btn-rounded btn-block z-depth-0 my-3 waves-effect" type="submit"  name="riesgo">GENERAR</button>
    </div>
  </div>
    </form>
        
      </div>
    </div>

  </div>
  <!-- Accordion card -->
</div>
<!-- Accordion wrapper -->

</div>
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

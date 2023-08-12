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
?>

<?php

  include("cnn.php");

  if (isset($_POST['boton'])) 
  {
   
    $matricula=$_POST['matricula'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $sexo=$_POST['sexo'];
    $grupo=$_POST['grupo'];
    $turno=$_POST['turno'];
    $carrera=$_POST['carrera'];
    $correo=$_POST['correo'];
    $edad=$_POST['edad'];
    $celular=$_POST['celular'];
    $celularpadre=$_POST['celularpadre'];
    $celularmadre=$_POST['celularmadre'];
    
    

if ($carrera!="" ||  $matricula!=""|| $edad!=""||  $celular!=""||  $turno!=""||  $celularmadre!=""||  $celularpadre!=""||  $nombre!=""||  $apellidos!=""||  $sexo!=""||  $grupo!=""||  $correo!="") 
    {
      # code...


$sql=$cnnPDO->prepare('INSERT INTO alumnos(matricula,nombre,apellidos,sexo,grupo,turno,carrera,correo,edad,celular,celularpadre,celularmadre) VALUES (:matricula,:nombre,:apellidos,:sexo,:grupo,:turno,:carrera,:correo,:edad,:celular,:celularpadre,:celularmadre)');

    $sql->bindParam(':matricula',$matricula);
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':apellidos',$apellidos);
    ;
    $sql->bindParam(':sexo',$sexo);
    $sql->bindParam(':turno',$turno);
    $sql->bindParam(':correo',$correo);
    $sql->bindParam(':grupo',$grupo);
    $sql->bindParam(':edad',$edad);
    $sql->bindParam(':carrera',$carrera);
    $sql->bindParam(':celular',$celular);
    $sql->bindParam(':celularpadre',$celularpadre);
    $sql->bindParam(':celularmadre',$celularmadre);

        $sql->execute();

            $count=$sql->rowCount();

            if ($count) 
            {
              ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script src="js/swalregistro.js"></script>
              <?php 



            }
            }}
      
              ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <title>|| Inscribir Alumno </title>
     <link rel="icon" href="img/logo.png" type="image/x-icon" />
    

    <meta charset="utf-8" />



    <!-- MDB 4.19.0 -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

    <!-- JavaScrip -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

    <!-- JQuery Validate library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

    <!-- Libreria de sweetalert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
   <style type="text/css">

      body{
        background-image: url(img/green.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed; 
      }
      
    

</style>
  </head>
    
  }
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
 <a class="nav-link" href="#" onclick="cerrarSesion()" style="color: white"><i class="fas fa-sign-out-alt"></i> . </a>
  </li>
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>

  <body style="background: #eceff1;" >


 <!--  <h3 class="page-header text-white bg-info">
    Nuevo Registro</h3>
</header> -->

<br><br>
<div class="container"></h1>


<div class="row">
     <div class="col-2">
            <!-- Columna sin mostrar informacion -->
     </div>

     <div class="col-8">

<form method="post">
    <input type="hidden" name="id" value="" />
    
    
    
   <div class="form-group">
        <label style="color:dark">MATRICULA</label>
        <input type="text" name="matricula" id="matricula" value="" class="form-control" placeholder="Ingrese la matricula del alumno" data-validacion-tipo="requerido"
        />
    </div>


   <div class="form-group">
        <label style="color:dark">NOMBRES</label>
        <input type="text" name="nombre" id="nombre" value="" class="form-control" placeholder="Ingrese los nombres del alumno" data-validacion-tipo="requerido"
        />
    </div>



   <div class="form-group">
        <label style="color:dark">APELLIDOS</label>
        <input type="text" name="apellidos" id="apellidos" value="" class="form-control" placeholder="Ingrese los apellidos del alumno" data-validacion-tipo="requerido"
        />
    </div>



<div class="form-group">
        <label style="color:dark">GENERO DEL ALUMNO </label>
        <select name="sexo" id="sexo" class="form-control">
            <option  value="0">Seleccione uno...</option>
         
      <option  value="M">FEMENINO</option>
      <option value="H">MASCULINO</option>
     
        </select>
    </div>

    

  <div class="form-group">
        <label style="color:dark">EDAD</label>
        <input type="text" name="edad" id="edad" value="" class="form-control" placeholder="Ingrese la edad del alumno" data-validacion-tipo="requerido"
        />
    </div>

    <div class="form-group">
        
        <input type="radio" id="turno" name="turno" value="TM">
      <label style="color:dark"for="TM">Turno Matutino</label><br>
        <input type="radio" id="turno" name="turno" value="TV">
      <label style="color:dark" for="TV">Turno Vespertino</label>
    </div>
     
     <div class="form-group">
        <label style="color:dark">FT/TC </label>
        <select name="carrera" id="carrera" class="form-control">
        <option  value="0">Seleccione uno...</option>
        <option value="TC">TC</option>
        <option value="ADMINISTRACION">ADMINISTRACION</option>
        <option value="DESARROLLO COMUNITARIO">DESARROLLO COMUNITARIO</option>
      <option value="INFORMATICA">INFORMATICA</option>
       <option value="HIGIENE Y SALUD">HIGIENE Y SALUD</option>
        </select>
    </div>

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

<div class="form-group">
        <label style="color:dark">CORREO DEL ALUMNO</label>
        <input type="text" name="correo" id="correo" value="" class="form-control" placeholder="Correo institucional del alumno" data-validacion-tipo="requerido"
        />
    </div>

 <div class="form-group">
        <label style="color:dark">CELULAR DEL ALUMNO</label>
        <input type="text" name="celular" id="edad" value="" class="form-control" placeholder="Celular del alumno" data-validacion-tipo="requerido"
        />
    </div>

     <div class="form-group">
        <label style="color:dark">CELULAR DEL PADRE</label>
        <input type="text" name="celularpadre" id="edad" value="" class="form-control" placeholder="Celular del padre" 
        />
    </div>



     <div class="form-group">
        <label style="color:dark">CELULAR DE LA MADRE</label>
        <input type="text" name="celularmadre" id="edad" value="" class="form-control" placeholder="Celular de la madre" 
        />
    </div>

    <div class="form-group">
        <div class="form-outline">
              <label class="form-label" for="textAreaExample">DIRECCION</label>
  <textarea class="form-control" name="direccion"id="direccion" rows="4" value="calle, entre calles, #, colonia"></textarea>

</div>
    </div>
 
    
    <hr />
    
    <div  class="text-right">
        <button class="btn btn-outline-lime" style="color: white;"href="#" onclick="Alerta()" class="btn" type="submit" name="boton" id="enviar">Guardar</button>
    </div>
</form>

   </div>        
           <div class="col-3">
                    
           </div>
</div>
<br><br><br>
<!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">

  function Alerta(){
   Swal.fire({
  title: 'REGISTRO EXITOSO!!!',
  
  background: 'white',

}).then((result) => {
  if (result.isConfirmed) {
    window.location = "logout.php";
  }
})
  };
</script>
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




</body>
</html>
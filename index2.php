<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index2.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:view-admin/admin.php");
	}
	?>
<!DOCTYPE html>
<html>
<head>
  <title>CONTROL ESCOLAR</title>

<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB icon -->
    <link rel="icon" href="view-admin/img/logo.PNG" type="image/x-icon" />
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
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg  bg-dark navbar-dark text-uppercase fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>

     <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="nav-item">
            <img src="view-admin/img/logo.PNG"height="40"alt=""loading="lazy"/>
          </a>
          <ul class="navbar-nav ml-auto">
           <strong> <a  style="color: white;">   CONTROL ESCOLAR</a></strong>
          </ul>
              
              <ul class="navbar-nav ml-auto">
                

          
  <li class="nav-item">   <a class="nav-link" style="color: white;"><i class="fas fa-user"></i>  Bienvenido: <strong><?php echo $_SESSION['user'];?></strong>
  </li>  
          
    <li class="nav-item">   
 <a class="nav-link"  onclick="cerrarSesion()" style="color: white"><i class="fas fa-sign-out-alt"></i> . </a> </strong>
  </li> 
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>

<body style="background: #eceff1;" >
<br><br> 
 <br><br> 
    

<div class="container">

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
    <div class="col-6 col-md-4">
    <div class="card text-white bg-danger">
      <a href="view-admin/agregarRiesgoAlu.php"><img
        src="view-admin/img/riesgo.png" width="50" height="200"
        class="card-img-top"
      

      />

        
     <div class="text-center">
  
<ul class="navbar-nav mr-auto">
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">      <h5 class="card-title"style="margin-top: 10px;color: white;">     Alumnos en Riesgo</h5></a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="agregarRiesgoAlu.php">1</a>
          <a class="dropdown-item" href="agregarRiesgoAlu2.php">2</a>
        </div>
      </li>

    </ul>

      </div>
    </div></a>
    </div>
    <div class="col-6 col-md-4">
    <div class="card text-white bg-warning">
      <a href="view-admin/accionesdealumnos.php"><img
        src="view-admin/img/alumnoss.png"
        class="card-img-top"
        width="50" height="200"

      />
     <div class="text-center">
        <h5 class="card-title" style="margin-top: 10px;color: white;">Acciones de Alumnos</h5>
       
      </div>
    </div></a>
    </div>
   
  <br> 
 

    <div class="col-6 col-md-4">
    <div class="card green-text bg-danger">
      <a href="view-admin/impresiones.php"><img
        src="view-admin/img/imp.png"
        class="card-img-top"
        width="50" height="200"

      />
     <div class="text-center">
        <h5 class="card-title" style="margin-top: 10px;color: white;">Otras Acciones</h5>
       
      </div>
    </div></a>
  </div>
  
    </div>
  </div>

  </div>

<br>

     <footer class="text-center text-white">
  
 
 
 
  <!-- Copyright -->
</footer>


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



</body>
</html>

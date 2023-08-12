<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
<!DOCTYPE html>
<html>
<head>
  <title>CONTROL ESCOLAR</title>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <!-- MDB icon -->
    <link rel="icon" href="../images/logo.png" type="image/x-icon"/>
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
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg  bg-dark navbar-dark text-uppercase fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>

     <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="nav-item">
            <img src="img/logo.PNG"height="40"alt=""loading="lazy"/>
          </a>
          <ul class="navbar-nav ml-auto">
           <strong> <a  style="color: white;">   CONTROL ESCOLAR</a></strong>
          </ul>
              
              <ul class="navbar-nav ml-auto">
                

          
  <li class="nav-item">   <a class="nav-link" style="color: white;"><i class="fas fa-user"></i>  Bienvenido: <strong><?php echo $_SESSION['user'];?></strong>
  </li>  
          
  <li class="nav-item">   
 <a class="nav-link" href="usadmi.php"  style="color: white"><i class="fa fa-arrow-left" aria-hidden="true"></i> . </a> </strong>
  </li>
        
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>

<body style="background: #eceff1;" >
<br><br> 

    <div class="container">
        <?php
        extract($_GET);
        require("../connect_db.php");

        $sql = "SELECT * FROM login WHERE id=$id";
        $ressql = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_row($ressql)) {
            $id = $row[0];
            $user = $row[1];
            $pass = $row[2];
            $email = $row[3];
            $pasadmin = $row[4];
        }
        ?>

        <h2 class="mt-4">Edición de Usuarios</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="../view-admin/ejecutaactualizar.php" method="post">
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" id="id" name="id" class="form-control" value="<?php echo $id ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario</label>
                        <input type="text" id="user" name="user" class="form-control" value="<?php echo $user ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password usuario</label>
                        <input type="text" id="pass" name="pass" class="form-control" value="<?php echo $pass ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo usuario</label>
                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pasadmin" class="form-label">Password administrador</label>
                        <input type="text" id="pasadmin" name="pasadmin" class="form-control" value="<?php echo $pasadmin ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
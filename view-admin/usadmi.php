<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../login.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:view-u/index2.php");
}
?>

?>	
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>USUARIOS</title>
  
  <!-- Favicon -->
  <link rel="icon" href="../images/logo.png" type="image/x-icon">

  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css">
  
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
    <script >
        $(document).ready(function() {
    loadUsers();
});

function loadUsers() {
    $.ajax({
        url: 'get_users.php',
        method: 'GET',
        success: function(data) {
            $('#user-list').html(data);
        }
    });
}

    </script>
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
              

              <li class="nav-item">   <a class="nav-link" style="color: white;"><i class="fas fa-user"></i>  Bienvenido: <strong><?php echo $_SESSION['user'];?></strong>
  </li>  
          
    <li class="nav-item">   
 <a class="nav-link" href="../view-admin/admin.php"  style="color: white"> <i class="fas fa-home"></i> . </a> </strong>
  </li> 
  
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>
  <br>
  <br>
  <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tabla de Usuarios</h4>
                            <div class="table-responsive">
                                <?php
                                require("../connect_db.php");
                                $sql = "SELECT * FROM login";
                                $query = mysqli_query($mysqli, $sql);

                                echo "<table class='table table-hover'>";
                                echo "<thead class='thead-light'>";
                                echo "<tr>";
                                echo "<th>Id</th>";
                                echo "<th>Usaurio</th>";
                                echo "<th>Password</th>";
                                echo "<th>Correo</th>";
                                echo "<th>Password del administrador</th>";
                                echo "<th>Editar</th>";
                                echo "<th>Borrar</th>";
                                echo "</tr>";
                                echo "</thead>";

                                while ($arreglo = mysqli_fetch_array($query)) {
                                    echo "<tr>";
                                    echo "<td>$arreglo[0]</td>";
                                    echo "<td>$arreglo[1]</td>";
                                    echo "<td>$arreglo[2]</td>";
                                    echo "<td>$arreglo[3]</td>";
                                    echo "<td>$arreglo[4]</td>";

                                    echo "<td><a href='../view-admin/actualizarus.php?id=$arreglo[0]'><img src='img/editar.png' class='img-rounded'></a></td>";
                                    echo "<td><a href='../view-admin/admin.php?id=$arreglo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";

                                    echo "</tr>";
                                }

                                echo "</table>";

                                extract($_GET);
                                if (@$idborrar == 2) {
                                    $sqlborrar = "DELETE FROM login WHERE id=$id";
                                    $resborrar = mysqli_query($mysqli, $sqlborrar);
                                    echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                                    echo "<script>location.href='../view-admin/admin.php'</script>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- MDB JS -->
    <script src="https://cdn.jsdelivr.net/npm/mdb@4.19.1/js/mdb.min.js" integrity="sha384-7D0JA4LmI/O0vqib3j1S0UnUpGdfT5NKXjvfo0j8e0WBR8R6GCE6pPdjP2jhpFfB" crossorigin="anonymous"></script>
</body>
</html>	
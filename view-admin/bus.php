
<?php
include 'cnn.php';


$busqueda = $_POST['bus'];

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
                 
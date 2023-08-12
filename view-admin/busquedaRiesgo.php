<!-- Códigos de ELIMINAR -->
<?php 
//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar']))
{
  //se guarda en las variables$us y $ps
$fecha=$_POST['fecha'];
  
  //Query de consulta
  $query = $cnnPDO->prepare('DELETE from riesgo WHERE fecha =:fecha');

  //Manejo de parámetros
  $query->bindParam(':fecha', $fecha);

  //Execución del query
  $query->execute(); 
  
}

?>

<?php
include 'cnn.php';

include 'cdn.html';
$busqueda = $_POST['busqueda'];

$query = "SELECT * FROM riesgo WHERE grupo LIKE '%$busqueda%'";
$consulta = mysqli_query($con, $query);



if ($row = mysqli_fetch_array($consulta)) {
      # code...
  ?>
  
  <div class="container-fluid">
    <table class="table table-striped table-bordered border-dark bg-white">
      <caption>

      </caption>
      <thead class="table-dark">
        <tr style="text-align: center">

          <td>GRUPO</td>
          <td>CARRERA</td>
          <td>NOMBRE</td>
          <td>MATERIAS</td>
          <td>FECHA</td>
          
          
        </tr>
      </thead>
      <tbody>
        <?php
        $socios = mysqli_query($con, "SELECT * FROM riesgo WHERE grupo  LIKE '%$busqueda%'");
        while ( $countsocios = mysqli_fetch_array($socios)) {
          
        # code...
         ?>          <tr style="color: black; text-align: center;">
          
           
             <td><?php echo  $countsocios['grupo']; ?></td>
             <td><?php echo  $countsocios['carrera']; ?></td>
             <td><?php echo  $countsocios ['nombre']; ?></td> 
              <td><?php echo  $countsocios['materias']; ?></td>
            <td><?php echo  $countsocios['fecha']; ?></td>

                
               


                
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
<?php
}else{

  ?>
  <div class="container-fluid">
  <h2><span class="badge" style="background-color: #E50404;color: white">
    Grupo sin riesgo</span> </h2>
  </div>
  <br>

  <?php

}
?>
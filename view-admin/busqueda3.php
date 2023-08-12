
<?php
include 'cnn.php';


$busqueda = $_POST['busqueda'];

$query = "SELECT * FROM reportes WHERE nombre LIKE '%$busqueda%'";
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

          <td>MATRICULA</td>
          <td>NOMBRE</td>
          <td>GRUPO</td>
          <td>FECHA</td>
          <td>HORA</td>
          
          
          
        </tr>
      </thead>
      <tbody>
        <?php
        $socios = mysqli_query($con, "SELECT * FROM citatorios WHERE nombre  LIKE '%$busqueda%'");
        while ( $countsocios = mysqli_fetch_array($socios)) {
          
        # code...
         ?>          <tr style="color: black; text-align: center;">
          <td><?php echo  $countsocios['matricula']; ?></td>
          <td><?php echo  $countsocios ['nombre']; ?></td>  
             <td><?php echo  $countsocios['grupo']; ?></td>
                <td><?php echo  $countsocios['fecha']; ?></td>
                <td><?php echo  $countsocios['hora']; ?></td>
                

                
               


                
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
    NO EXISTE EL ALUMNO</span> </h2>
  </div>
  <br>

  <?php

}
?>
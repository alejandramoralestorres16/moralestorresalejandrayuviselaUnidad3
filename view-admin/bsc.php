/*buscar.php*/
<?php 
include("conexion.php");
$grupo=$_POST['grupo'];
mysqli_select_db($conexion,$db_nombre) or die("Error al conectar con la base de datos");
$registros=$conexion->query("SELECT * FROM alumnos WHERE grupo=$grupo");

while($registro=mysqli_fetch_array($registros)){
 echo ($registro['grupo']." ".$registro['matricula']." ".$registro['apellidos']." ".$registro['nombre']." ");
}
?>
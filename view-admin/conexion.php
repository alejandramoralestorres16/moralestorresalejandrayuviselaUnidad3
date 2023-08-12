 <?php
$severname="localhost";
$username="root";
$password="";
$dbname="escolares";
$conexion=mysqli_connect($severname,$username,$password,$dbname) 
or die("Error".mysqli_error($conexion));
?>

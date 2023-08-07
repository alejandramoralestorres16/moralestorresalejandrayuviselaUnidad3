

<?php

/* Conectar a una base de datos de MySQL Local */
$db_host = 'mysql:dbname=academ;host=localhost';
$usuario = 'root';
$contrasena = '';

try {
	$cnnPDO = new PDO($db_host, $usuario, $contrasena);
} catch (PDOException $e) {

	echo "<br><br><center>
	<div class='card text-white bg-danger mb-3' style='max-width: 50rem;'>
	<div class='card-header'><h3>Error de Conexión</h3></div>
	<div class='card-body'>
	<h4 class='card-title'>Ha surgido un error y no se puede conectar a la base de datos!</h4>
	<h5 class='card-title'>Detalle:</h5>
	<p class='card-text text-white'>". $e->getMessage()."</p>
	</div>
	</div>
	";
}
$con = mysqli_connect('localhost','root','','academ');
$cone = mysqli_connect('localhost','root','','academ');
?>
<?php
	
	$mysqli = new mysqli("localhost","root","","academ"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>
<?php


$mysqli = new MySQLi("localhost", "root","", "academ");
if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
		. ") " . $mysqli -> mysqli_connect_error());
}
else
	//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>






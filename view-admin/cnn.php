<?php
/* Conectar a una base de datos de MySQL Local */
$db_host = 'mysql:dbname=escolares;host=localhost';
$usuario = 'root';
$contrasena = '';

//$db_host = 'mysql:dbname=id17004681_escolares;host=localhost';
//$usuario = 'id17004681_root';
//$contrasena = 'x-w}c3X+pK3<zh*s';

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


//$con = mysqli_connect('localhost','id17004681_root','x-w}c3X+pK3<zh*s','id17004681_escolares');

$con = mysqli_connect('localhost','root','','escolares');
$cone = mysqli_connect('localhost','root','','escolares');


?>
<?php
	
	$mysqli = new mysqli("localhost","root","","escolares"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>
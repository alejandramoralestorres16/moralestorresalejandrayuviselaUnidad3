<?php
	require ('cnn.php');
	
	$grupo = $_POST['grupo'];
	
	$query = "SELECT apellidos, nombre FROM alumnos WHERE grupo = '$grupo' ORDER BY apellidos";
	$resultado=$mysqli->query($query);
	
	while($row = $resultado->fetch_assoc())
	{
		$html.= "<option value='".$row['apellidos']."'>".$row['apellidos '].['nombre']."</option>";
	}
	echo $html;
?>
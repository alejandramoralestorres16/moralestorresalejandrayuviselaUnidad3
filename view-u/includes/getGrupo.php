<?php
	
	require ('../cnn.php');
	
	$id_carrera = $_POST['id_carrera'];
	
	$queryM = "SELECT id_grupo, grupo FROM t_grupo WHERE id_carrera = '$id_carrera' ORDER BY grupo";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Grupo</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_grupo']."'>".$rowM['grupo']."</option>";
	}
	
	echo $html;
?>		
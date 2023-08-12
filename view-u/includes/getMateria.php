<?php
	require ('../cnn.php');
	
	$id_grupo = $_POST['id_grupo'];
	
	$query = "SELECT id_materia, materia FROM t_materia WHERE id_grupo = '$id_grupo' ORDER BY materia";
	$resultado=$mysqli->query($query);
	
	while($row = $resultado->fetch_assoc())
	{
		$html.= "<option value='".$row['materia']."'>".$row['materia']."</option>";
	}
	echo $html;
?>
<?php
require'cnn.php';

$query=mysqli_query($con,"SELECT * FROM alumnos WHERE grupo='1A'");
$docu="List.xls";
header('content-type: application/vnd.sm-exel');
header('content-Disposition: attachment; filename='.$docu);
header('pragma: no-cache');
header('expires: 0');
echo '<table border=2>';
echo '<tr>';
echo '<th colspan=4>LISTA</th>';
echo '</tr>';
echo '<tr><th style="backgraund:red">MATRICULA</th><TH>GRUPO</TH><TH>APELLIDO</TH><TH>NOMBRE</TH></tr>';

while ($row=mysqli_fetch_array($query)) {
	
echo '<tr>';
echo '<td>'.$row['matricula'].'</td>';
echo '<td>'.$row['grupo'].'</td>';
echo '<td>'.$row['apellidos'].'</td>';
echo '<td>'.$row['nombre'].'</td>';



}
echo '</table>';
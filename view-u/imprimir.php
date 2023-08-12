<?php
session_start();
$matricula=$_SESSION['matricula'];
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina'.$this->PageNo().'',0,0,'C');
}
}

require 'cnn.php';

$sqlalumnos="SELECT * FROM alumnos WHERE matricula='$matricula'";
	  $queryalumnos=$cnnPDO -> prepare($sqlalumnos);
	  $queryalumnos -> execute();
	  $countalumnos=$queryalumnos -> fetchAll(PDO::FETCH_OBJ); 
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);


$pdf->Image('img/1.jpg',10,10,190,100,'jpg');
$pdf->Image('img/2.jpg',10,130,190,130,'jpg');  

if ($queryalumnos -> rowCount() > 0) {
			# code...

			foreach ($countalumnos as $countalumnos) {
				# code...

				

$pdf->Ln(10);
$pdf-> SetFont('Arial','','13');
$pdf-> cell(252,255,$countalumnos -> nombre,0,2,'C',0);


$pdf-> SetFont('Arial','','13');
$pdf-> cell(250,-238,$countalumnos -> apellidos,0,2,'C',0);

$pdf->Ln(248);
$pdf-> SetFont('Arial','','14');
$pdf-> cell(250,-238,$countalumnos -> matricula,0,2,'C',0);
$pdf->Ln(100);
$pdf-> SetFont('Arial','','14');
$pdf-> cell(250,60,$countalumnos -> grupo,0,2,'C',0);
	 
		}

	}

$pdf->Output('d','FICHA DE PAGO.pdf',true);
?>
<?php
session_start();

require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
	function Header()
	{
    // Logo
        $this->Image('img/logo.png',10,8,33);
    // Arial bold 15
		$this->SetFont('Arial','B',15);

    // Movernos a la derecha
		$this->Cell(80);
    // Título
		
		$this->Cell(60,50,utf8_decode('Lista por grupo'),0,0,'C');
    // Salto de línea
		$this->Ln(40);
   
		$this->Cell(20,5,utf8_decode('Grupo'),1,0,'C',0);
		$this->Cell(30,5,utf8_decode( 'Matricula'),1,0,'C',0);
		$this->Cell(90,5,utf8_decode( 'Alumno'),1,1,'C',0);
	}

// Pie de página
	function Footer()
	{
    // Posición: a 1,5 cm del final
		$this->SetY(-15);
    // Arial italic 8
		$this->SetFont('Arial','I',8);
    // Número de página
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

require 'conexion.php';
$grupo=$_SESSION['grupo'];
$sql="SELECT matricula, grupo, apellidos, nombre from alumnos WHERE grupo='$grupo'";
$reg=mysqli_query($conexion,$sql);


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row=mysqli_fetch_array($reg)){

	$pdf->Cell(20,5,utf8_decode( $row['grupo']),1,0,'C',0);
	$pdf->Cell(30,5,utf8_decode( $row['matricula']),1,0,'C',0);
	$pdf->Cell(90,5,utf8_decode( $row['apellidos'].$row['nombre']),1,1,'q',0);


}

$pdf->Output();
?>

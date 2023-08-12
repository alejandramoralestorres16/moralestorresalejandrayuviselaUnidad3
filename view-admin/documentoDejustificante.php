<?php

  include("fpdf.php");

  


$doc= new FPDF();
$doc-> AddPage();


$doc->SetFont('Arial','',10);
	$doc->cell(310,20,'Colegio De Bachilleres De Coahuila',0,2,'C',0);
	$doc->SetFont('Arial','',9);
	$doc->cell(320,-11,'Plantel Juan Fransisco Ealy Ortiz ',0,0,'C',0);

	$doc->Image('img/logo.png',147,6,35,8,'png');
  $doc->Image('img/logo_sedu.png',7,6,60,25,'png');
$doc-> SetFont('Arial','','12');
$doc->Ln(-6);
$doc-> cell(60,9,'________________________________________________________________________________',0,2,'L',0);

$doc->Ln(-4);
$doc-> SetFont('Arial','B','15');
$doc->Ln(1);
$doc-> cell(190,9,'JUSTIFICANTE DEL ALUMNO ',0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc->Ln(2);
$doc-> cell(60,9,'FECHA DEL JUSTIFICANTE: ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(150,-9,''.$_POST['fecha'],0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc->Ln(10);
$doc-> cell(60,9,'NOMBRE DEL ALUMNO: ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(180,-9,''.$_POST['nombre'],0,2,'C',0);



$doc->Ln(10);
$doc-> SetFont('Arial','B','12');
$doc-> cell(60,9,'MATRICULA: ',0,2,'L',0);
$doc->Ln(0);
$doc-> SetFont('Arial','','12');
$doc-> cell(84,-9,''.$_POST['matricula'],0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc-> cell(180,9,'GRUPO: ',0,2,'C',0);
$doc->Ln(0);
$doc-> SetFont('Arial','','12');
$doc-> cell(208,-9,''.$_POST['grupo'],0,2,'C',0);

$doc->Ln(10);
$doc-> SetFont('Arial','B','12');
$doc-> cell(180,9,'DIAS A JUSTIFICAR: ',0,2,'L',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(80,-9,''.$_POST['motivo'],0,2,'L',0);





$doc->Image('img/firmar.png',72,98,45,10,'png');
$doc-> SetFont('Arial','B','12');
$doc-> cell(173,66,'LIC. nombreO',0,2,'C',0);
$doc->Ln(-7);
$doc-> SetFont('Arial','','10');
$doc-> cell(173,-40,'Dto. Tutorias',0,2,'C',0);



	$doc->Image('img/sello.png',147,90,50,30,'png');


$doc-> SetFont('Arial','','12');
$doc->Ln(20);
$doc-> cell(60,9,'________________________________________________________________________________',0,2,'L',0);




$doc->Output();





?>
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

$doc-> SetFont('Arial','B','12');
$doc->Ln(-6);
$doc-> cell(60,9,'________________________________________________________________________________',0,2,'L',0);

$doc->Ln(-4);
$doc-> SetFont('Arial','B','15');
$doc->Ln(1);
$doc-> cell(190,9,'REPORTE DE BAJA ',0,2,'C',0);



$doc-> SetFont('Arial','B','12');
$doc->Ln(5);
$doc-> cell(60,9,'NOMBRE DEL ALUMNO: ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(180,-9,''.$_POST['nombre'],0,2,'C',0);



$doc->Ln(10);
$doc-> SetFont('Arial','B','12');
$doc-> cell(60,9,'MATRICULA: ',0,2,'L',0);
$doc->Ln(0);
$doc-> SetFont('Arial','','12');
$doc-> cell(80,-9,''.$_POST['matricula'],0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc-> cell(180,9,'GRUPO: ',0,2,'C',0);
$doc->Ln(0);
$doc-> SetFont('Arial','','12');
$doc-> cell(208,-9,''.$_POST['grupo'],0,2,'C',0);

$doc->Ln(10);
$doc-> SetFont('Arial','B','12');
$doc-> cell(180,9,'MOTIVO DE BAJA: ',0,2,'L',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(80,-9,''.$_POST['motivo'],0,2,'L',0);


$doc->Ln(20);
$doc-> SetFont('Arial','B','12');
$doc-> cell(80,9,'________________________',0,2,'L',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(60,-12,'Firma del Alumno',0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc-> cell(193,-1,'________________________',0,2,'C',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(193,-2,'Firma del Maestro',0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc-> cell(325,-11,'________________________',0,2,'C',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(325,8,'Firma del Prefecto',0,2,'C',0);


$doc->Image('img/firmar.png',85,110,45,10,'png');
$doc-> SetFont('Arial','B','12');
$doc-> cell(193,33,'LIC. ',0,2,'C',0);
$doc->Ln(-7);
$doc-> SetFont('Arial','','10');
$doc-> cell(193,-8,'Dto. Tutorias',0,2,'C',0);




$doc->Ln(30);



$doc->SetFont('Arial','',10);
	$doc->cell(310,-7,'Colegio De	Bachilleres	De	Coahuila	',0,2,'C',0);
	$doc->SetFont('Arial','',9);
	$doc->cell(320,15,'Plantel Juan Fransisco Ealy Ortiz',0,0,'C',0);

	$doc->Image('img/logo.png',147,138,35,8,'png');
	$doc->Image('img/logo_sedu.png',7,138,60,25,'png');


$doc-> SetFont('Arial','B','12');
$doc->Ln(7);
$doc-> cell(60,9,'________________________________________________________________________________',0,2,'L',0);


$doc->Ln(-4);
$doc-> SetFont('Arial','B','15');
$doc->Ln(1);
$doc-> cell(190,9,'REPORTE DE BAJA ',0,2,'C',0);



$doc-> SetFont('Arial','B','12');
$doc->Ln(5);
$doc-> cell(60,9,'NOMBRE DEL ALUMNO: ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(180,-9,''.$_POST['nombre'],0,2,'C',0);



$doc->Ln(10);
$doc-> SetFont('Arial','B','12');
$doc-> cell(60,9,'MATRICULA: ',0,2,'L',0);
$doc->Ln(0);
$doc-> SetFont('Arial','','12');
$doc-> cell(80,-9,''.$_POST['matricula'],0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc-> cell(180,9,'GRUPO: ',0,2,'C',0);
$doc->Ln(0);
$doc-> SetFont('Arial','','12');
$doc-> cell(208,-9,''.$_POST['grupo'],0,2,'C',0);

$doc->Ln(10);
$doc-> SetFont('Arial','B','12');
$doc-> cell(180,9,'MOTIVO DE BAJA: ',0,2,'L',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(80,-9,''.$_POST['motivo'],0,2,'L',0);


$doc->Ln(20);
$doc-> SetFont('Arial','B','12');
$doc-> cell(80,9,'________________________',0,2,'L',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(60,-12,'Firma del Alumno',0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc-> cell(193,-1,'________________________',0,2,'C',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(193,-2,'Firma del Maestro',0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc-> cell(325,-11,'________________________',0,2,'C',0);
$doc->Ln(8);
$doc-> SetFont('Arial','','12');
$doc-> cell(325,8,'Firma del Prefecto',0,2,'C',0);


$doc->Image('img/firmar.png',85,244,45,10,'png');

$doc-> SetFont('Arial','B','12');
$doc-> cell(193,38,'LIC. NOMBRE ',0,2,'C',0);
$doc->Ln(-10);
$doc-> SetFont('Arial','','10');
$doc-> cell(193,-3,'Dto	Tutorias	',0,2,'C',0);

$doc->AddPage();
$doc->Image('img/reportes.jpg',-1,-5,205,300,'jpg');

$doc-> SetFont('Arial','','12');
$doc-> cell(130,170,''.$_POST['matricula'],0,2,'C',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(180,-160,''.$_POST['nombre'],0,2,'C',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(135,171,''.$_POST['grupo'],0,2,'C',0);

$doc-> SetFont('Arial','','10');
$doc-> cell(285,-214,'Juan	Fransisco	Ealy	Ortiz	 ',0,5,'C',0);










$doc->Output();





?>
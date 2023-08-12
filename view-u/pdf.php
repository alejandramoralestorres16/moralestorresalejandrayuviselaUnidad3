<?php
session_start();
include("cnn.php");
?>
<?php

include("fpdf.php");

 
$doc= new FPDF();
$doc-> AddPage();


  $doc->SetFont('Arial','',10);
  $doc->cell(280,20,'Colegio de Educacion Profesional tecnica del Edo. De Coahuila',0,2,'C',0);
  $doc->SetFont('Arial','',9);
  $doc->cell(310,-11,'Plantel Jose Ignacio Arizpe Cardenas   clave 217',0,0,'C',0);

  $doc->Image('img/logoc.png',147,6,55,8,'png');
  $doc->Image('img/sep.png',7,6,60,20,'png');


$doc-> SetFont('Arial','','12');
$doc->Ln(-6);
$doc-> cell(60,9,'________________________________________________________________________________',0,2,'L',0);




$doc-> SetFont('Arial','B','12');
$doc->Ln(2);
$doc-> cell(60,9,'NOMBRE ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(95,-9,''.$_POST['nombre'],0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc->Ln(5);
$doc-> cell(60,9,'APELLIDOS ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(90,-9,''.$_POST['apellidos'],0,2,'C',0);





$doc->Output();





?>
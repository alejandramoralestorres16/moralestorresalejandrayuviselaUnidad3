<?php
session_start();

include("cnn.php");
 


  if (isset($_POST['registrar'])) 
  {
   
    $matricula=$_POST['matricula'];
    $nombre=$_POST['nombre'];
    $grupo=$_POST['grupo'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];

    if ($nombre!="" || $matricula!=""||  $fecha!=""|| $hora!=""|| $grupo!="") 
    {
      # code...

        $sql=$cnnPDO->prepare('INSERT INTO citatorios (grupo, matricula, nombre, fecha, hora) VALUES (:grupo, :matricula, :nombre, :fecha,:hora)');

           
            $sql->bindParam(':matricula',$matricula);
            $sql->bindParam(':nombre',$nombre);
              $sql->bindParam(':grupo',$grupo);
             $sql->bindParam(':fecha',$fecha);
            $sql->bindParam(':hora',$hora);
        

        

        $sql->execute();

            $count=$sql->rowCount();

            if ($count) 
            {
            	
              

      }

    }

	}
 ?>
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
$doc-> cell(190,9,'CITATORIO ',0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc->Ln(2);
$doc-> cell(60,9,'Sra. ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(95,-9,''.$_POST['madre'],0,2,'C',0);


$doc-> SetFont('Arial','B','12');
$doc->Ln(5);
$doc-> cell(60,9,'Sr. ',0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(90,-9,''.$_POST['padre'],0,2,'C',0);



$doc->Ln(10);
$doc-> SetFont('Arial','','12');
$doc-> cell(60,9,'Por este medio le estamos solicitando su presencia para tratar asunto relacionado con la disciplina',0,2,'L',0);
$doc->Ln(-4);
$doc-> SetFont('Arial','','12');
$doc-> cell(60,9,'de su hijo(a)',0,2,'L',0);
$doc-> SetFont('Arial','B','12');
$doc-> cell(130,-9,''.$_POST['nombre'],0,2,'C',0);


$doc-> SetFont('Arial','','12');
$doc-> cell(248,9,'alumno del grupo ',0,2,'C',0);
$doc-> SetFont('Arial','B','12');
$doc-> cell(288,-9,''.$_POST['grupo'],0,2,'C',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(345,9,'con numero de matricula ',0,2,'C',0);
$doc->Ln(5);
$doc-> SetFont('Arial','B','12');
$doc-> cell(80,-9,''.$_POST['matricula'],0,2,'L',0);
$doc-> SetFont('Arial','','12');
$doc-> cell(72,9,', el dia ',0,2,'C',0);
$doc-> SetFont('Arial','B','12');
$doc-> cell(160,-9,''.$_POST['fecha'],0,2,'C',0);
$doc->Ln(0);
$doc-> SetFont('Arial','','12');
$doc-> cell(242,9,', a las ',0,2,'C',0);
$doc-> SetFont('Arial','B','12');
$doc-> cell(280,-9,''.$_POST['hora'],0,2,'C',0);

$doc->Ln(5);
$doc-> SetFont('Arial','','12');
$doc-> cell(200,9,'Se le notifica que si no asiste su hijo no podra entrar a clases ',0,2,'C',0);





$doc->Image('img/firmar.png',72,98,45,10,'png');
$doc-> SetFont('Arial','B','12');
$doc-> cell(173,66,'LIC. Nombre',0,2,'C',0);
$doc->Ln(-7);
$doc-> SetFont('Arial','','10');
$doc-> cell(173,-40,'Jefe de Proyectos de Servicios Escolares',0,2,'C',0);



	$doc->Image('img/sello.png',147,90,50,30,'png');


$doc-> SetFont('Arial','','12');
$doc->Ln(20);
$doc-> cell(60,9,'________________________________________________________________________________',0,2,'L',0);




$doc->Output();





?>
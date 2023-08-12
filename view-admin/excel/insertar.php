<?php
/**
 * Created by PhpStorm.
 * User: HILARI
 * Date: 02/01/2020
 * Time: 10:40
 */

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','escolares');

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
    //echo "<script>alert('Conexión con exito a la base de datos');</script>";
}catch (PDOException $e){
    echo "<script>alert('error al conectar con la base de datos');</script>";
}



$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$d3 = $_POST['d3'];
$d4 = $_POST['d4'];
$d5 = $_POST['d5'];
$d6 = $_POST['d6'];
$d7 = $_POST['d7'];
$d8 = $_POST['d8'];
$d9 = $_POST['d9'];
$d10 = $_POST['d10'];
$d11 = $_POST['d11'];
$d12 = $_POST['d12'];
$d13 = $_POST['d13'];


$fecha = "2020-03-11 00:00:00";

//echo $d1." - ".$d2." - ".$d3." - ".$d4;

$sentencia = $pdo->prepare("INSERT INTO alumnos
      ( matricula, apellidos, nombre, sexo, edad, turno, carrera, grupo, correo, celular, celularpadre, celularmadre, direccion) 
VALUES(:matricula, :apellidos, :nombre, :sexo, :edad, :turno, :carrera, :grupo, :correo, :celular, :celularpadre, :celularmadre, :direccion)");

$sentencia->bindParam(':matricula',$d1);
$sentencia->bindParam(':apellidos',$d2);
$sentencia->bindParam(':nombre',$d3);
$sentencia->bindParam(':sexo',$d4);
$sentencia->bindParam(':edad',$d5);
$sentencia->bindParam(':turno',$d6);
$sentencia->bindParam(':carrera',$d7);
$sentencia->bindParam(':grupo',$d8);
$sentencia->bindParam(':correo',$d9);
$sentencia->bindParam(':celular',$d10);
$sentencia->bindParam(':celularpadre',$d11);
$sentencia->bindParam(':celularmadre',$d12);
$sentencia->bindParam(':direccion',$d13);
$sentencia->execute();
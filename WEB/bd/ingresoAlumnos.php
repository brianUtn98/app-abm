<?php
include 'conect.php';
$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$legajo=$_REQUEST["legajo"];
$calle=$_REQUEST["calle"];
$numeroCalle=$_REQUEST["numeroCalle"];
$telefono=$_REQUEST["telefono"];
$email=$_REQUEST["email"];
$materiasAprobadas=$_REQUEST["materiasAprobadas"];

/*
echo $nombre;
echo $apellido;
echo $legajo;
echo $calle;
echo $numeroCalle;
echo $telefono;
echo $email;
echo $materiasAprobadas;
*/

$SQL = "INSERT INTO alumnos (nombre,apellido,legajo,calle,numero,telefono,mail,materias) 
VALUES ('$nombre','$apellido',$legajo,'$calle',$numeroCalle,'$telefono','$email',$materiasAprobadas)";

//$SQL = "INSERT INTO alumnos (nombre,apellido,legajo,calle,numero,telefono,mail,materias) VALUES ('asdasdas','Garcia',123,'Zeppelin',123,'123123123','luchito@mail.com',7)";

if(!$a=$con->query($SQL))
	{
		echo $con->error;
	}
else
	{
		header('Location: ../formularioIngreso.php');
	} 
?>
<?php
include 'conect.php';
$id_alumno=$_REQUEST["id_alumno"];
$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$legajo=$_REQUEST["legajo"];
$calle=$_REQUEST["calle"];
$numeroCalle=$_REQUEST["numeroCalle"];
$telefono=$_REQUEST["telefono"];
$email=$_REQUEST["email"];
$materiasAprobadas=$_REQUEST["materiasAprobadas"];

$SQL = "UPDATE alumnos SET nombre='$nombre',apellido='$apellido',legajo=$legajo,calle='$calle',numero=$numeroCalle,telefono='$telefono',mail='$email',materias=$materiasAprobadas WHERE id_alumno=$id_alumno";

if(!$a=$con->query($SQL))
	{
		echo $con->error;
	}
else
	{
		header('Location: ../vistas/selectAlumnos.php');
	} 
?>
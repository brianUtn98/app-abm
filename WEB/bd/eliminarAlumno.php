<?php
include 'conect.php';
$id_alumno = $_REQUEST["id_alumno"];
$SQL = "DELETE FROM alumnos WHERE id_alumno=$id_alumno";

if (!$a = $con->query($SQL)) {
	echo $con->error;
} else {
	header('Location: ../vistas/selectAlumnos.php');
}

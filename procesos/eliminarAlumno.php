<?php 

require_once "../clases/alumno.php";

$Alumno = new Alumnos();
$idAlumno = $_POST['idAlumno'];

echo $Alumno->eliminarAlumno($idAlumno);
?>
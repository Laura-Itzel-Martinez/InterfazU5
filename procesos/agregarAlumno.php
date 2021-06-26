<?php
  include "../clases/alumno.php";

  $Personas=new Alumnos();

  $datos=array(

        "nombre" => $_POST['nombre'],
				"apellido" => $_POST['apellido'],
				"calificacion1" => $_POST['calificacion1'],
				"calificacion2" => $_POST['calificacion2'],
				"calificacion3" => $_POST['calificacion3']

    
  );
  echo $Personas->agregarNuevoAlumno($datos);
?>

<?php 
	require_once "conexion.php";

	class Alumnos extends Conexion {
		public function agregarNuevoAlumno($datos) {
			$conexion = Conexion::conectar();
			
			$sql = "INSERT INTO t_alumno(nombre,
			apellido,
			calificacion1,
			calificacion2,
			calificacion3)
			
					VALUES (?, ?, ?, ?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('sssss',$datos['nombre'],
										 $datos['apellido'],
										 $datos['calificacion1'],
										 $datos['calificacion2'],
										 $datos['calificacion3']);
                                         
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function eliminarAlumno ($idAlumno) {
			$conexion = Conexion::conectar();

			$sql = "DELETE FROM t_alumno WHERE id_alumno = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idAlumno);
			$respuesta = $query->execute();
			return $respuesta;
		}
		
	}
 

?>



    
	
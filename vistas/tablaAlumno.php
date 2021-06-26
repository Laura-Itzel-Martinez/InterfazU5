<?php 
    include "../clases/conexion.php";
    $obj=new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT * from t_alumno";
    $result=mysqli_query($conexion,$sql);  
?>
<div class="table-responsive">
    <table class="table table-condensed table-hover" id="personasDataTable">
        <thead>
            <th>Nombre del alumno</th>
            <th>Apellidos del alumnno</th>
            <th>Calificacion 1er bimestre</th>
            <th>Calificacion 2do bimestre</th>
            <th>Calificacion 3er bimestre</th>
            <th>Promedio</th>
            <th>Estado</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        <?php 
			while($mostrar = mysqli_fetch_array($result)) { 
                $idAlumno = $mostrar['id_alumno'];

                $resultado = $mostrar['calificacion1'] +$mostrar['calificacion2'] +$mostrar['calificacion3'];
                $total=$resultado/3;
                //if abreviado
                //Por ser un Operador Ternario tiene que tener las 3 partes, es decir: 
                //«condición, valor si es verdadero, valor si es falso» 
                //condicion        cierto(si) o falso(no)
                $estado=$total>=7? "aprobado":"reprobado";        
		?>
            <tr>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellido'] ?></td>
                <td><?php echo $mostrar['calificacion1'] ?></td>
                <td><?php echo $mostrar['calificacion2'] ?></td>
                <td><?php echo $mostrar['calificacion3'] ?></td>
                
                <td><?php echo number_format($total,2)?></td>
                <td><?php echo $estado ?></td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarAlumno(<?php echo $idAlumno ?>)" >Eliminar</span>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#personasDataTable').DataTable();
    });

</script>
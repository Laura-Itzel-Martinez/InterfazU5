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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <span class="btn btn-danger" >Eliminar</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#personasDataTable').DataTable();
    });
</script>
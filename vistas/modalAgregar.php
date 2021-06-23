<!-- Modal -->
<div class="modal fade" id="modalAgregaAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega Nuevo Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregaAlumno" method="post" onsubmit="return agregarNuevo()">

            <label for="nombre">Nombre del alumnno</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required  >

            <label for="apellido">Apellidos del alumnno</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required  >

            <label for="cal1">Calificacion 1er bimestre</label>
            <input type="text" class="form-control" id="cal1" name="cal1" required  >

            <label for="cal2">Calificacion 1er bimestre</label>
            <input type="text" class="form-control" id="cal2" name="cal2" required >

            <label for="cal3">Calificacion 1er bimestre </label>
            <input type="text" class="form-control" id="cal3" name="cal3" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
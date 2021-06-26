$(document).ready(function(){
    $('#tablasAlumnoLoad').load('vistas/tablaAlumno.php');


});
function agregarNuevoAlumno() {
    $.ajax({
        type: "POST",
        url:"procesos/agregarAlumno.php",
        data: $('#frmAgregaAlumno').serialize(),
        success:function (respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#frmAgregaAlumno')[0].reset();
                $('#tablasAlumnoLoad').load('vistas/tablaAlumno.php');
                swal(":)","agregado con exito!","success");
            } else {
                swal(":(","no se pudo agregar","error");
            }
        }
    });
    return false;
}

function  eliminarAlumno(idAlumno){
    swal({
        title: "Estas seguro de eliminar este alumno?",
        text: "Una vez eliminada, no podra recuperarse el registro!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "POST",
                data: "idAlumno="+idAlumno,
                url: "procesos/eliminarAlumno.php",
                success:function (respuesta) {
                    respuesta = respuesta.trim();
                    if (respuesta == 1) {
                        $('#tablasAlumnoLoad').load('vistas/tablaAlumno.php');
                        swal(":)","se elimino con EXITO !","success");
                    } else {
                        swal(":(","no se pudo eliminar"+respuesta,"error");
                    }
                }
            });
        } 
    });
}


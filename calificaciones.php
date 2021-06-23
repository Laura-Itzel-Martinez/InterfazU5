<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: url('public/img/img5.jpg') no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              background-size: cover;
              -o-background-size: cover;">
    
<?php include "header.php"; ?>

<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="font-weight-light">Administracion de Calificaciones</h1>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregaAlumno">
        Agregar Nuevo Alumno
    </span>
    <hr>

    <div id="tablasAlumnoLoad"></div>
    <div style="height: 700px"></div>
    <p class="lead mb-0">You've reached the end!</p>

   
</div>
</div>

<?php
    include "vistas/modalAgregar.php";
   
?>

<?php include "footer.php" ?>

<script src="public/js/alumnos.js"></script>
</body>
</html>


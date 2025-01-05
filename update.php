<?php
    include('config/conexion.php');
    $id = $_POST['id'];
    $nom = $_POST['nombre'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];

    //$query = mysqli_query($conn, "UPDATE alumnos SET NomAlumno = '$nombre, SexAlumno = '$sex',EdadAlumno = '$age' WHERE IdAlumno = '$id' ");

    if($query){
        header('location:index.php');
    }
?>


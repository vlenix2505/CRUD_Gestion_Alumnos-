<?php
    include('config/conexion.php');
    $id = $_POST['id'];    

    $query = mysqli_query($conn, "DELETE FROM alumnos WHERE IdAlumno = '$id' ");

    if($query){
        header('location:index.php');
    }
?>
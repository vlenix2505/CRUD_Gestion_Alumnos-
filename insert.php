<?php
include('config/conexion.php');

$id = $_POST['id'];
$nom = $_POST['nombre'];
$sex = $_POST['sex'];
$age = $_POST['age'];

// Verificar si el ID existe en la base de datos
$verify = mysqli_query($conn, "SELECT IdAlumno FROM alumnos WHERE IdAlumno = '$id'");

if (mysqli_num_rows($verify) > 0) {
    //si existe, update
    $query = $conn->prepare("UPDATE alumnos SET NomAlumno = ?, SexAlumno = ?, EdadAlumno = ? WHERE IdAlumno = ?");
    $query->bind_param("ssss", $nom, $sex, $age, $id);   
    if ($query->execute()) {
        header('Location: index.php');
    }   
   
} else {
    // si no existe, insert
    $query = $conn->prepare("INSERT INTO alumnos (IdAlumno, NomAlumno, SexAlumno, EdadAlumno) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss", $id, $nom, $sex, $age);
    if ($query->execute()) {
        header('Location: index.php');
    } 
}
?>
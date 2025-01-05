<?php
    //llamando file conexion
    include('config/conexion.php');
    //parámetros --> conexión, SQL query que permite mostrar datos
    //accdemos a $conn porque incluimos al archivo conexion.php 
    $data = mysqli_query($conn, 'SELECT * FROM alumnos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="container">
        <section id='form-insert'>
            <form id= 'insert' action="insert.php" method="post">
                <div class="icon-form">
                    <h1>Registrar Alumno</h1>
                    <img src="img/alumno.png" id='img-form'><br>
                </div>            
                <div class="data-alumn">
                    <label>IdAlumno</label>
                    <input type="type" name='id' id='input-id'><br><br>
                    <label>NomAlumno</label>
                    <input type="type" name='nombre' id='input-name'><br><br>
                    <label>SexAlumno</label>
                    <input type="type" name='sex' id='input-sex'><br><br>
                    <label>EdadAlumno</label>
                    <input type="type" name='age' id='input-age'><br><br>
                </div>
                <div class="insert">
                    <button id='button-save'>GUARDAR</button>
                </div>               
            </form>
        </section>
        <section id='view-section'>
            <h1>Datos</h1>
            <div class= "table-container">

                <table>
                    <thead>
                        <tr>
                            <th id="c1">IdAlumno</th>
                            <th id="c2">NomAlumno</th>
                            <th id="c3">SexoAlumno</th>
                            <th id="c4">EdadAlumno</th>
                            <th id= "c5" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <?php
                    foreach($data as $row){ ?>
                            <tr class='data-tr'>
                                <td><?php echo $row['IdAlumno']; ?></td>
                                <td><?php echo $row['NomAlumno']; ?></td>
                                <td><?php echo $row['SexAlumno']; ?></td>
                                <td><?php echo $row['EdadAlumno']; ?></td>
                                <td>
                                    <form id='delete' action="delete.php" method="post">
                                        <input type="hidden" name='id' value="<?php echo $row['IdAlumno'];?>">
                                        <button>DELETE</button>
                                    </form>
                                </td>
                                <td>
                                    <form id='copy'>
                                        <input class='origin-id' type="hidden" name='id' value="<?php echo $row['IdAlumno'];?>">
                                        <input class='origin-name' type="hidden" name='nombre' value="<?php echo $row['NomAlumno'];?>">
                                        <input class='origin-sex' type="hidden" name='sex' value="<?php echo $row['SexAlumno'];?>">
                                        <input class='origin-age' type="hidden" name='age' value="<?php echo $row['EdadAlumno'];?>">
                                        <button class='button-copy' id='button-copy'>EDIT</button>
                                    </form>
                                </td>
                            </tr>
                    <?php }?>
                </table>
            </div>
        </section>
    </div>   
    
</body>
<script src="js/main.js"></script>
</html>
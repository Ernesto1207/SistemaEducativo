<?php 
require "../conexion.php";
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>

<body>
    <h1>Sistema de Notas</h1>
    <form action="guardar_nota.php" method="POST">

        <label for="estudiante">Estudiante:</label>
        <select name="estudiante" id="estudiante">
            <?php
            $query = "SELECT * FROM Estudiantes";
            $result = $conn->query($query);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $id_estudiante = $row['id_estudiante'];
                $nombre_estudiante = $row['nombre'];
                $apellido_estudiante = $row['apellido'];
                echo "<option value='$id_estudiante'>$nombre_estudiante $apellido_estudiante</option>";
            }
            ?>
        </select>

        <label for="Curso">Curso:</label>
        <select name="curso" id="curso">
            <?php
            $query = "SELECT * FROM Cursos";
            $result = $conn->query($query);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $id_cursos = $row['id_cursos'];
                $nombre_curso = $row['nombre'];
                echo "<option value='$id_cursos'>$nombre_curso</option>";
            }
            ?>
        </select>

        <label for="nota">Nota:</label>
        <input type="number" name="nota" id="nota" min="0" max="20">

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha">

        <label for="observaciones">Observaciones</label>
        <input type="text" name="observaciones" id="observaciones">

        <input type="submit" value="Guardar Nota">
    </form>
</body>

</html>
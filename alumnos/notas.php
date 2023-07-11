<?php
session_start();
require "../conexion.php";
// Realiza la consulta de las notas del estudiante actual
$id_estudiante = $_SESSION['id_estudiante'];

$query = "SELECT n.nota, c.nombre
          FROM Notas n
          JOIN Cursos c ON n.id_cursos = c.id_cursos
          WHERE n.id_estudiante = :id_estudiante";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id_estudiante', $id_estudiante);
$stmt->execute();

// Obtén los resultados de la consulta
$notas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>Curso</th>
            <th>Nota</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notas as $nota) : ?>
            <tr>
                <td><?php echo $nota['nombre']; ?></td>
                <td><?php echo $nota['nota']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

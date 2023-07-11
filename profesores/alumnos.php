<?php
// Incluir el archivo de conexión
require "../conexion.php";

// Realizar la consulta para obtener los datos de la tabla Estudiantes
$query = "SELECT * FROM Estudiantes";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Estudiantes</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Tabla de Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Dirección</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id_estudiante']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['fecha_nacimiento']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['genero']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conn = null;
?>

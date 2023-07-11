<?php
require "../../conexion.php";
session_start();
$id_estudiante = $_SESSION['id_estudiante'];

$query = "SELECT * FROM estudiantes WHERE id_estudiante = :id_estudiante";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id_estudiante', $id_estudiante);
$stmt->execute();

// Obtén los resultados de la consulta
$estudiantes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <h1>Perfil</h1>
    <p>actualiza tus datos de sesion, correo electronico y contraseña</p>
    <div>
        <h2>Datos Personales</h2>
        <table>
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>Fecha de nacimiento</th>
                    <th>Direccion</th>
                    <th>Genero</th>
                    <th>DNI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) : ?>
                    <tr>
                        <td><?php echo $estudiante['nombre']; ?></td>
                        <td><?php echo $estudiante['apellido']; ?></td>
                        <td><?php echo $estudiante['fecha_nacimiento']; ?></td>
                        <td><?php echo $estudiante['direccion']; ?></td>
                        <td><?php echo $estudiante['genero']; ?></td>
                        <td><?php echo $estudiante['DNI']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
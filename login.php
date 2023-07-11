<?php
session_start();
//hacer la conexion
require "conexion.php";

// Obtener los datos enviados por el formulario
$dni = $_POST['dni'];
$password = $_POST['password'];


// Realizar la validación del inicio de sesión
$stmt = $conn->prepare("SELECT id_estudiante, password FROM Estudiantes WHERE dni = :dni");
$stmt->bindParam(':dni', $dni);
$stmt->execute();

// Verificar si se encontró un estudiante con el DNI proporcionado
if ($stmt->rowCount() == 1) {
    $row = $stmt->fetch();
    $idEstudiante = $row['id_estudiante'];
    $hashContraseña = $row['password'];

    // Verificar si la contraseña ingresada coincide con la almacenada en la base de datos
    if ($password == $hashContraseña) {
        // Iniciar la sesión
        session_start();

        // Guardar la información del estudiante en la sesión
        $_SESSION['logged_in'] = true;
        $_SESSION['id_estudiante'] = $idEstudiante;
        // Redirigir al usuario a la página de inicio del estudiante
        header("Location: /alumnos/index.php");
        exit();
    } else {
        // Si las credenciales son incorrectas, mostrar un mensaje de error o redirigir al usuario a una página de error
        echo "Credenciales inválidas. Intente nuevamente.";
    }
} else {
    // Si no se encontró un estudiante con el DNI proporcionado, mostrar un mensaje de error o redirigir al usuario a una página de error
    echo "Estudiante no encontrado.";
}
?>

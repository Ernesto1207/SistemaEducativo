<?php
session_start();

// Verificar si el usuario ya ha iniciado sesión
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Si el usuario ya está autenticado, redirigir a la página de inicio
    header('Location: alumnos/index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="post">
        <label>DNI:</label>
        <input type="text" name="dni" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
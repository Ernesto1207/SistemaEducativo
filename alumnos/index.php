<?php 
require "../conexion.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio-Alumnos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <ul>
        <li><a href="notas.php">Notas</a></li>
        <li><a href="biblioteca/index.php">Biblioteca</a></li>
        <li><a href="datos/perfil.php">Perfil</a></li>
        <li><a href="logout.php">Cerrar sesion</a></li>
    </ul>
</body>
</html>
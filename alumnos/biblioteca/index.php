<?php
require "../conexion.php";
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>

<body>
    <h1>biblioteca virtual</h1>
    <select name="libros" id="libros">
        <option value="">literatura</option>
        <option value="">Matematicas</option>
        <option value="">Cuentos</option>
    </select>
    <div>
        <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1623078210-la-naranja-mecanica-anthony-burgess-201505261226.jpg?crop=1xw:1xh;center,top&resize=980:*" alt="libro1">
        <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1623082235-41jHivFbfHS._SL500_.jpg?crop=1xw:1xh;center,top&resize=980:*" alt="libro2">
        <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1623075596-41pjuon48tL._SL500_.jpg?crop=0.986xw:0.974xh;0,0.0260xh&resize=980:*" alt="libro3">
        <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1623086488-hamlet-by-isidro-ferrer-1623086427.jpg?crop=1xw:1xh;center,top&resize=980:*" alt="libro4">
        <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1623081696-41hRbyVDCEL._SL500_.jpg?crop=1xw:1xh;center,top&resize=980:*" alt="libro5">
        <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1623080744-41CDgO39Q7L._SL500_.jpg?crop=1xw:1xh;center,top&resize=980:*" alt="libro6">
    </div>

</body>

</html>
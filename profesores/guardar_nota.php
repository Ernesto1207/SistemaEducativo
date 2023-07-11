<?php
// Incluir el archivo de conexión
require "../conexion.php";

// Obtener los datos del formulario
$estudiante = $_POST['estudiante'];
$curso = $_POST['curso'];
$nota = $_POST['nota'];
$fecha = $_POST['fecha'];
$observaciones = $_POST['observaciones'];

// Validar que se haya seleccionado un estudiante
if (empty($estudiante)) {
    exit("Por favor, seleccione un estudiante.");
}
// Validar que se haya seleccionado un curso
if (empty($curso)) {
    exit("Por favor, seleccione un curso.");
}
// Validar que se haya seleccionado un nota
if (empty($nota)) {
    exit("Por favor, ingrese la nota.");
}
// Validar que se haya seleccionado un fecha
if (empty($fecha)) {
    exit("Por favor, ingrese la fecha.");
}
// Validar que se haya seleccionado un obsercacion
if (empty($observaciones)) {
    exit("Por favor, ingrese una observacion.");
}

// Realizar la inserción o actualización de la nota en la base de datos
$query = "INSERT INTO Notas (id_estudiante, id_cursos, nota, fecha, observaciones) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->execute([$estudiante, $curso, $nota, $fecha, $observaciones]);

$conn = null;
?>
<script>
    // Mostrar una alerta de éxito después de la inserción
    alert("La nota se ha añadido correctamente.");

    // Redirigir a una página de confirmación o a otra ubicación si es necesario
    window.location.href = "notas.php";
</script>
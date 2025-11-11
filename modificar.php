<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$nuevo_mail = $_POST['nuevo_mail'];
$nuevo_curso = $_POST['nuevo_curso'];

$sql = "UPDATE alumnos SET Mail = '$nuevo_mail', Codigo_Curso = '$nuevo_curso' WHERE NombreDelUsuario = '$nombre'";

if (mysqli_query($conn, $sql)) {
    $filas = mysqli_affected_rows($conn);

    if ($filas > 0) {
        echo "<h2> Los datos del alumno '$nombre' se actualizaron correctamente.</h2>";
    } else {
        echo "<h2> No se encontró ningún alumno con ese nombre.</h2>";
    }

    echo "<br><a href='modificar.html'>Volver</a>";
} else {
    echo "<h2>Error al modificar: " . mysqli_error($conn) . "</h2>";
}

mysqli_close($conn);
?>

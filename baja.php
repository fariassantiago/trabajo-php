<?php
include("conexion.php");

$nombre = $_POST['nombre'];

$sql = "DELETE FROM alumnos WHERE NombreDelUsuario = '$nombre'";

if (mysqli_query($conn, $sql)) {
    $filas = mysqli_affected_rows($conn);

    if ($filas > 0) {
        echo "<h2>Se eliminaron $filas registro(s) con el nombre '$nombre'.</h2>";
    } else {
        echo "<h2> No se encontró ningún alumno con ese nombre</h2>";
    }

    echo "<br><a href='baja.html'>Volver</a>";
} else {
    echo "<h2>Error al eliminar: " . mysqli_error($conn) . "</h2>";
}

mysqli_close($conn);
?>
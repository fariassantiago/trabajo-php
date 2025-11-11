<?php
include("conexion.php");

$nombre = $_POST['nombre'];

$sql = "DELETE FROM t_alumnos_curso WHERE NombreDelUsuario = '$nombre'";

if (mysqli_query($conn, $sql)) {
    $filas = mysqli_affected_rows($conexion);

    if ($filas > 0) {
        echo "<h2>Se eliminaron $filas registro(s) con el nombre '$nombre'.</h2>";
    } else {
        echo "<h2> No se encontró ningún alumno con ese nombre</h2>";
    }

    echo "<br><a href='baja.html'>Volver</a>";
} else {
    echo "<h2>Error al eliminar: " . mysqli_error($conexion) . "</h2>";
}

mysqli_close($conexion);
?>
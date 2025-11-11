<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$nuevonombre = $_POST['nuevo_nombre'];
$nuevo_mail = $_POST['nuevo_mail'];
$nuevo_curso = $_POST['nuevo_curso'];

$sql = "UPDATE t_alumnos_del_curso SET NombreDelUsuario='$nuevonombre',Mail = '$nuevo_mail', Codigo_Curso = '$nuevo_curso'  WHERE NombreDelUsuario = '$nombre'";

if (mysqli_query($conexion, $sql)) {
    $filas = mysqli_affected_rows($conexion);

    if ($filas > 0) {
        echo "<h2> Los datos del alumno '$nombre' se actualizaron correctamente.</h2>";
    } else {
        echo "<h2> No se encontró ningún alumno con ese nombre.</h2>";
    }

    echo "<br><a href='modificacion.html'>Volver</a>";
} else {
    echo "<h2>Error al modificar: " . mysqli_error($conexion) . "</h2>";
}

mysqli_close($conexion);
?>

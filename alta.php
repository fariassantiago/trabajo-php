<?php
require("conexion.php");

mysqli_query($conexion, "INSERT INTO t_alumnos_del_curso (NombreDelUsuario, Mail, Codigo_Curso)
VALUES ('$_POST[nombredelusuario]', '$_POST[mail]', '$_POST[codigo_curso]')")
or die("Problemas en el insert: " . mysqli_error($conexion));

mysqli_close($conexion);
echo "✅ El alumno fue dado de alta correctamente.";
?>


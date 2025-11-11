<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Alumno</title>
</head>
<body>
<?php
include("conexion.php");

mysqli_query($conexion, "insert into t_alumnos_del_curso(NombreDelUsuario, Mail, Codigo_Curso) 
values ('$_REQUEST[nombredelusuario]', '$_REQUEST[mail]', '$_REQUEST[codigo_curso]')")
or die("Problemas en el insert" . mysqli_error($conexion));

mysqli_close($conexion);
echo "El alumno fue dado de alta.";
?>
</body>
</html>
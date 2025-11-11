git stash popgit stash pop
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "1111111111", "iac")
or die("Problemas con la conexión");

mysqli_query($conexion, "insert into t_alumnos_del_curso(NombreDelUsuario, Mail, Codigo_Curso) 
values ('$_REQUEST[nombredelusuario]', '$_REQUEST[mail]', '$_REQUEST[codigo_curso]')")
or die("Problemas en el insert" . mysqli_error($conexion));

mysqli_close($conexion);
echo "El alumno fue dado de alta.";
?>
</body>
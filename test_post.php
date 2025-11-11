<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Método recibido: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Contenido de \$_POST:<br>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
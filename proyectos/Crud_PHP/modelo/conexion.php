<?php
$conexion = new mysqli("localhost", "root", "", "Crud_PHP");

// Establecer el conjunto de caracteres a utf8mb4
if (!$conexion->set_charset("utf8mb4")) {
    die("Error al establecer el conjunto de caracteres: " . $conexion->error);
}
?>

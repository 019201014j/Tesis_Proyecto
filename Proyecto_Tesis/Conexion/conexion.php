<?php
$conexion = new mysqli("localhost", "root", "", "bd_gestion_informes_pichigua");

if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

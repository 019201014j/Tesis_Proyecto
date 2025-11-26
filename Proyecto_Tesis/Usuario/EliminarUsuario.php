<?php
include "conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM usuario WHERE id_usuario=$id");
header("Location: usuarios_lista.php");
?>

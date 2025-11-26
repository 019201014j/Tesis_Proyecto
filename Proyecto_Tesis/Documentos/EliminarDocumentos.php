<?php
include "conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM documento WHERE id_documento=$id");
header("Location: documentos_lista.php");
?>

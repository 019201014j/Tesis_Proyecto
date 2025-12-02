<?php
include "../Conexion/conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM documento WHERE id_documento=$id");
header("Location: ListaDocumentos.php");
?>

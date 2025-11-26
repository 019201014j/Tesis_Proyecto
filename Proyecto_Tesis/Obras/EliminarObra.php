<?php
include "conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM obra WHERE id_obra=$id");
header("Location: obras_lista.php");
?>

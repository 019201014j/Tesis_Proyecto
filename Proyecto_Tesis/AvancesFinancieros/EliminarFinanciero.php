<?php
include "conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM avance_financiero WHERE id_financiero=$id");
header("Location: avance_financiero_lista.php");
?>

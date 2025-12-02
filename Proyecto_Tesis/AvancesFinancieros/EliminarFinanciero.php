<?php
include "../Conexion/conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM avance_financiero WHERE id_financiero=$id");
header("Location: ListaFinanciero.php");
?>

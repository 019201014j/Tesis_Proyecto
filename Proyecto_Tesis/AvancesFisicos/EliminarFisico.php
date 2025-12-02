<?php
include "../Conexion/conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM avance_fisico WHERE id_avance=$id");
header("Location: ListaFisico.php");
?>

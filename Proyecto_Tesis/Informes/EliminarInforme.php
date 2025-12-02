<?php
include "../Conexion/conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM informe WHERE id_informe=$id");
header("Location: ListaInforme.php");
?>

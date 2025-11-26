<?php
include "conexion.php";

$obra = $_POST['id_obra'];
$mes = $_POST['mes_periodo'];
$responsable = $_POST['responsable'];

$conexion->query("INSERT INTO informe(id_obra,mes_periodo,responsable)
VALUES($obra,'$mes',$responsable)");

header("Location: informes_lista.php");
?>

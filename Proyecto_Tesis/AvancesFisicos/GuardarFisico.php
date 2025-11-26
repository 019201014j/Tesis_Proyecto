<?php
include "conexion.php";

$id_informe = $_POST['id_informe'];
$act = $_POST['actividad'];
$porc = $_POST['porcentaje_avance'];
$obs = $_POST['observaciones'];

$conexion->query("INSERT INTO avance_fisico(id_informe,actividad,porcentaje_avance,observaciones)
VALUES($id_informe,'$act','$porc','$obs')");

header("Location: avance_fisico_lista.php");
?>

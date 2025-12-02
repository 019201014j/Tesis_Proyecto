<?php
include "../Conexion/conexion.php";

$id = $_POST['id_avance'];
$act = $_POST['actividad'];
$porc = $_POST['porcentaje_avance'];
$obs = $_POST['observaciones'];

$conexion->query("UPDATE avance_fisico SET 
    actividad='$act',
    porcentaje_avance='$porc',
    observaciones='$obs'
    WHERE id_avance=$id");

header("Location: ListaFisico.php");
?>

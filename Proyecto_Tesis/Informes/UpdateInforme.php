<?php
include "conexion.php";

$id = $_POST['id_informe'];
$mes = $_POST['mes_periodo'];
$estado = $_POST['estado_validacion'];

$conexion->query("UPDATE informe SET 
    mes_periodo='$mes',
    estado_validacion='$estado'
    WHERE id_informe=$id");

header("Location: informes_lista.php");
?>

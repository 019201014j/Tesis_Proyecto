<?php
include "conexion.php";

$id = $_POST['id_finanza'];
$partida = $_POST['partida_presupuestal'];
$monto = $_POST['monto_ejecutado'];
$porc = $_POST['porcentaje_ejecucion'];

$conexion->query("UPDATE avance_financiero SET 
    partida_presupuestal='$partida',
    monto_ejecutado='$monto',
    porcentaje_ejecucion='$porc'
    WHERE id_finanza=$id");

header("Location: avances_financieros_lista.php");
?>

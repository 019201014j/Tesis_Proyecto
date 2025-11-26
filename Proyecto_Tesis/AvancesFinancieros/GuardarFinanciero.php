<?php
include "conexion.php";

$inf = $_POST['id_informe'];
$mon = $_POST['monto_ejecutado'];
$porc = $_POST['porcentaje_ejecucion'];
$obs = $_POST['observaciones'];

$conexion->query("INSERT INTO avance_financiero(id_informe,monto_ejecutado,porcentaje_ejecucion,observaciones)
VALUES($inf,'$mon','$porc','$obs')");

header("Location: avance_financiero_lista.php");
?>

<?php
include "../Conexion/conexion.php";

$inf = $_POST['id_informe'];
$mon = $_POST['monto_ejecutado'];
$porc = $_POST['porcentaje_ejecucion'];

$conexion->query("INSERT INTO avance_financiero(id_informe,monto_ejecutado,porcentaje_ejecucion)
VALUES($inf,'$mon','$porc')");

header("Location: ListaFinanciero.php");
?>

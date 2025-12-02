<?php
include "../Conexion/conexion.php";

$id       = $_POST['id_finanza'];
$monto    = $_POST['monto_ejecutado'];
$porc     = $_POST['porcentaje_ejecucion'];

// Actualiza solo los campos correctos
$conexion->query("
    UPDATE avance_financiero SET 
        monto_ejecutado = '$monto',
        porcentaje_ejecucion = '$porc'
    WHERE id_finanza = $id
");

// Redirección correcta
header("Location: ListaFinanciero.php");
exit();
?>

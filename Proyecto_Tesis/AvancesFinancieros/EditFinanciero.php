<?php
include "conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM avance_financiero WHERE id_finanza = $id");
$fin = $sql->fetch_assoc();
?>
<form action="update_avance_financiero.php" method="POST">
    <input type="hidden" name="id_finanza" value="<?= $fin['id_finanza'] ?>">

    Partida presupuestal: <input type="text" name="partida_presupuestal" value="<?= $fin['partida_presupuestal'] ?>"><br>
    Monto ejecutado: <input type="number" step="0.01" name="monto_ejecutado" value="<?= $fin['monto_ejecutado'] ?>"><br>
    Porcentaje ejecución: <input type="number" step="0.01" name="porcentaje_ejecucion" value="<?= $fin['porcentaje_ejecucion'] ?>"><br>

    <button type="submit">Guardar</button>
</form>

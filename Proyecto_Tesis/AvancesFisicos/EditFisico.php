<?php
include "conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM avance_fisico WHERE id_avance = $id");
$av = $sql->fetch_assoc();
?>
<form action="update_avance_fisico.php" method="POST">
    <input type="hidden" name="id_avance" value="<?= $av['id_avance'] ?>">

    Actividad: <input type="text" name="actividad" value="<?= $av['actividad'] ?>"><br>
    Porcentaje: <input type="number" step="0.01" name="porcentaje_avance" value="<?= $av['porcentaje_avance'] ?>"><br>
    Observaciones:<br>
    <textarea name="observaciones"><?= $av['observaciones'] ?></textarea><br>

    <button type="submit">Guardar</button>
</form>

<?php
include "conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM informe WHERE id_informe = $id");
$inf = $sql->fetch_assoc();
?>
<form action="update_informe.php" method="POST">
    <input type="hidden" name="id_informe" value="<?= $inf['id_informe'] ?>">

    Mes periodo: <input type="text" name="mes_periodo" value="<?= $inf['mes_periodo'] ?>"><br>
    
    Estado validación:
    <select name="estado_validacion">
        <option <?= $inf['estado_validacion']=='Pendiente'?'selected':'' ?>>Pendiente</option>
        <option <?= $inf['estado_validacion']=='Aprobado'?'selected':'' ?>>Aprobado</option>
        <option <?= $inf['estado_validacion']=='Observado'?'selected':'' ?>>Observado</option>
    </select><br>

    <button type="submit">Guardar</button>
</form>

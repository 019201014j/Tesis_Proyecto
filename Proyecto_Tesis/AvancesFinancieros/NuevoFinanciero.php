<?php
include "conexion.php";
$informes = $conexion->query("SELECT * FROM informe");
?>
<form action="avance_financiero_guardar.php" method="POST">
    Informe:
    <select name="id_informe">
        <?php while($i=$informes->fetch_assoc()){ ?>
        <option value="<?= $i['id_informe'] ?>"><?= $i['mes_periodo'] ?></option>
        <?php } ?>
    </select><br>

    Monto ejecutado: <input type="number" step="0.01" name="monto_ejecutado"><br>
    Porcentaje ejecución: <input type="number" step="0.01" name="porcentaje_ejecucion"><br>
    Observaciones: <textarea name="observaciones"></textarea><br>

    <button type="submit">Guardar</button>
</form>

<?php
include "conexion.php";
$obras = $conexion->query("SELECT * FROM obra");
$usuarios = $conexion->query("SELECT * FROM usuario");
?>
<form action="informe_guardar.php" method="POST">

    Obra:
    <select name="id_obra">
        <?php while($o = $obras->fetch_assoc()){ ?>
        <option value="<?= $o['id_obra'] ?>"><?= $o['nombre'] ?></option>
        <?php } ?>
    </select><br>

    Mes periodo: <input type="text" name="mes_periodo"><br>

    Responsable:
    <select name="responsable">
        <?php while($u = $usuarios->fetch_assoc()){ ?>
        <option value="<?= $u['id_usuario'] ?>"><?= $u['nombre'] ?></option>
        <?php } ?>
    </select><br>

    <button type="submit">Guardar</button>
</form>

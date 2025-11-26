<?php
include "conexion.php";
$informes = $conexion->query("SELECT * FROM informe");
$usuarios = $conexion->query("SELECT * FROM usuario");
?>
<form action="documento_guardar.php" method="POST">

    Informe:
    <select name="id_informe">
        <?php while($i=$informes->fetch_assoc()){ ?>
        <option value="<?= $i['id_informe'] ?>"><?= $i['mes_periodo'] ?></option>
        <?php } ?>
    </select><br>

    Tipo: <input type="text" name="tipo"><br>
    Ruta archivo: <input type="text" name="ruta_storage"><br>

    Usuario subida:
    <select name="usuario_subida">
        <?php while($u=$usuarios->fetch_assoc()){ ?>
        <option value="<?= $u['id_usuario'] ?>"><?= $u['nombre'] ?></option>
        <?php } ?>
    </select><br>

    <button type="submit">Guardar</button>
</form>

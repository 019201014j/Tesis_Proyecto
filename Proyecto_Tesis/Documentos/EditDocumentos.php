<?php
include "conexion.php";
$id = $_GET['id'];

$d = $conexion->query("SELECT * FROM documento WHERE id_documento=$id")->fetch_assoc();
$informes = $conexion->query("SELECT * FROM informe");
$usuarios = $conexion->query("SELECT * FROM usuario");
?>
<form action="update_documento.php" method="POST">
    <input type="hidden" name="id" value="<?= $d['id_documento'] ?>">

    Informe:
    <select name="id_informe">
        <?php while($i=$informes->fetch_assoc()){ ?>
        <option value="<?= $i['id_informe'] ?>" <?= $d['id_informe']==$i['id_informe']?"selected":"" ?>>
            <?= $i['mes_periodo'] ?>
        </option>
        <?php } ?>
    </select><br>

    Tipo: <input type="text" name="tipo" value="<?= $d['tipo'] ?>"><br>
    Ruta archivo: <input type="text" name="ruta_storage" value="<?= $d['ruta_storage'] ?>"><br>

    Usuario subida:
    <select name="usuario_subida">
        <?php while($u=$usuarios->fetch_assoc()){ ?>
        <option value="<?= $u['id_usuario'] ?>" <?= $d['usuario_subida']==$u['id_usuario']?"selected":"" ?>>
            <?= $u['nombre'] ?>
        </option>
        <?php } ?>
    </select><br>

    <button type="submit">Actualizar</button>
</form>

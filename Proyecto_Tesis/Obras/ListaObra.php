<?php
include "conexion.php";
$sql = $conexion->query("SELECT * FROM obra");
?>
<a href="obra_nueva.php">Nueva Obra</a>
<table border="1">
<tr>
    <th>ID</th><th>Nombre</th><th>Ubicación</th><th>Estado</th><th>Acciones</th>
</tr>

<?php while($o = $sql->fetch_assoc()){ ?>
<tr>
    <td><?= $o['id_obra'] ?></td>
    <td><?= $o['nombre'] ?></td>
    <td><?= $o['ubicacion'] ?></td>
    <td><?= $o['estado'] ?></td>
    <td>
        <a href="editar_obra.php?id=<?= $o['id_obra'] ?>">Editar</a>
        |
        <a href="eliminar_obra.php?id=<?= $o['id_obra'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

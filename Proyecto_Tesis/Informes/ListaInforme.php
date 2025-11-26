<?php
include "conexion.php";
$sql = $conexion->query("
SELECT informe.*, obra.nombre AS obra_nombre, usuario.nombre AS responsable_nombre
FROM informe
JOIN obra ON informe.id_obra = obra.id_obra
JOIN usuario ON informe.responsable = usuario.id_usuario
");
?>

<a href="informe_nuevo.php">Nuevo Informe</a>

<table border="1">
<tr>
    <th>ID</th><th>Obra</th><th>Mes</th><th>Responsable</th><th>Estado</th><th>Acciones</th>
</tr>

<?php while($i = $sql->fetch_assoc()){ ?>
<tr>
    <td><?= $i['id_informe'] ?></td>
    <td><?= $i['obra_nombre'] ?></td>
    <td><?= $i['mes_periodo'] ?></td>
    <td><?= $i['responsable_nombre'] ?></td>
    <td><?= $i['estado_validacion'] ?></td>
    <td>
        <a href="editar_informe.php?id=<?= $i['id_informe'] ?>">Editar</a>
        |
        <a href="eliminar_informe.php?id=<?= $i['id_informe'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

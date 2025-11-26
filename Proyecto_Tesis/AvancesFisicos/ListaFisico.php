<?php
include "conexion.php";
$sql = $conexion->query("
SELECT avance_fisico.*, informe.mes_periodo 
FROM avance_fisico
JOIN informe ON avance_fisico.id_informe = informe.id_informe");
?>
<a href="avance_fisico_nuevo.php">Nuevo Avance Físico</a>

<table border="1">
<tr>
    <th>ID</th><th>Informe</th><th>Actividad</th><th>Porcentaje</th><th>Acciones</th>
</tr>

<?php while($a=$sql->fetch_assoc()){ ?>
<tr>
    <td><?= $a['id_avance'] ?></td>
    <td><?= $a['mes_periodo'] ?></td>
    <td><?= $a['actividad'] ?></td>
    <td><?= $a['porcentaje_avance'] ?></td>
    <td>
        <a href="editar_avance_fisico.php?id=<?= $a['id_avance'] ?>">Editar</a> |
        <a href="eliminar_avance_fisico.php?id=<?= $a['id_avance'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

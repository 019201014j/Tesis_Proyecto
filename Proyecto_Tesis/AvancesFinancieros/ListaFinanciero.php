<?php
include "conexion.php";
$sql = $conexion->query("
SELECT avance_financiero.*, informe.mes_periodo
FROM avance_financiero
JOIN informe ON avance_financiero.id_informe = informe.id_informe
");
?>
<a href="avance_financiero_nuevo.php">Nuevo Avance Financiero</a>

<table border="1">
<tr>
    <th>ID</th><th>Informe</th><th>Monto ejecutado</th><th>Porcentaje</th><th>Acciones</th>
</tr>

<?php while($a=$sql->fetch_assoc()){ ?>
<tr>
    <td><?= $a['id_financiero'] ?></td>
    <td><?= $a['mes_periodo'] ?></td>
    <td><?= $a['monto_ejecutado'] ?></td>
    <td><?= $a['porcentaje_ejecucion'] ?></td>
    <td>
        <a href="editar_avance_financiero.php?id=<?= $a['id_financiero'] ?>">Editar</a> |
        <a href="eliminar_avance_financiero.php?id=<?= $a['id_financiero'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

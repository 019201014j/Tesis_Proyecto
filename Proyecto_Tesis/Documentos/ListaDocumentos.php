<?php
include "conexion.php";
$sql = $conexion->query("
SELECT documento.*, informe.mes_periodo, usuario.nombre AS usuario_nombre
FROM documento
JOIN informe ON documento.id_informe = informe.id_informe
JOIN usuario ON documento.usuario_subida = usuario.id_usuario
");
?>
<a href="documento_nuevo.php">Nuevo Documento</a>

<table border="1">
<tr>
    <th>ID</th><th>Informe</th><th>Tipo</th><th>Ruta</th><th>Subido por</th><th>Acciones</th>
</tr>

<?php while($d=$sql->fetch_assoc()){ ?>
<tr>
    <td><?= $d['id_documento'] ?></td>
    <td><?= $d['mes_periodo'] ?></td>
    <td><?= $d['tipo'] ?></td>
    <td><?= $d['ruta_storage'] ?></td>
    <td><?= $d['usuario_nombre'] ?></td>
    <td>
        <a href="eliminar_documento.php?id=<?= $d['id_documento'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

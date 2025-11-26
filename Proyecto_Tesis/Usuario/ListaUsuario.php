<?php
include "../Conexion/conexion.php";
$sql = $conexion->query("SELECT * FROM usuario");
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<a href="NuevoUsuario.php">Nuevo Usuario</a>
<table border="1">
<tr>
    <th>ID</th><th>Nombre</th><th>Correo</th><th>Rol</th><th>Acciones</th>
</tr>

<?php while($u = $sql->fetch_assoc()){ ?>
<tr>
    <td><?= $u['id_usuario'] ?></td>
    <td><?= $u['nombre'] ?></td>
    <td><?= $u['correo'] ?></td>
    <td><?= $u['rol'] ?></td>
    <td>
        <a href="EditUsuario.php?id=<?= $u['id_usuario'] ?>">Editar</a>
        |
        <a href="EliminarUsuario.php?id=<?= $u['id_usuario'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

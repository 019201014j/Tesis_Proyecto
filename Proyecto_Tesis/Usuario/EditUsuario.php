<?php
include "../Conexion/conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM usuario WHERE id_usuario = $id");
$usuario = $sql->fetch_assoc();
?>
<form action="UpdateUsuario.php" method="POST">
    <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">

    Nombre: <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>"><br>
    Correo: <input type="email" name="correo" value="<?= $usuario['correo'] ?>"><br>
    Rol:
    <select name="rol">
        <option <?= $usuario['rol']=='Administrador'?'selected':'' ?>>Administrador</option>
        <option <?= $usuario['rol']=='Ingeniero'?'selected':'' ?>>Ingeniero</option>
        <option <?= $usuario['rol']=='Supervisor'?'selected':'' ?>>Supervisor</option>
        <option <?= $usuario['rol']=='Consultor'?'selected':'' ?>>Consultor</option>
    </select><br>

    <button type="submit">Guardar</button>
</form>

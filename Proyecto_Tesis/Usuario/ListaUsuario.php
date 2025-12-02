<?php
include "../Conexion/conexion.php";
$sql = $conexion->query("SELECT * FROM usuario");

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../Login/login.php");
    exit();
}

// SOLO ADMINISTRADOR
if ($_SESSION['rol'] !== 'Administrador') {
    echo "<script>alert('Acceso denegado. Solo Administradores.');window.location='../Login/login.php';</script>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Información para Obras</title>
    <link rel="stylesheet" href="../css/lista.css"> 
</head>
<body>

<div class="header">
    Sistema de Información para Obras
</div>

<div class="container">

    <!-- MENU LATERAL -->
    <div class="menu">
        <a href="../index.php">Menú Principal</a>
        <a href="../Usuario/ListaUsuario.php">Usuarios</a>
        <a href="../Obras/ListaObra.php">Obras</a>
        <a href="../Informes/ListaInforme.php">Informes</a>
        <a href="../AvancesFisicos/ListaFisico.php">Avances Físicos</a>
        <a href="../AvancesFinancieros/ListaFinanciero.php">Avances Financieros</a>
        <a href="../Documentos/ListaDocumentos.php">Documentos</a>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="main-container">
        <a href="NuevoUsuario.php" class="new-user-btn">Nuevo Usuario</a>

        <table>
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
                    <a href="EditUsuario.php?id=<?= $u['id_usuario'] ?>">Editar</a> |
                    <a href="EliminarUsuario.php?id=<?= $u['id_usuario'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </table>

        <br>
        <a href="../" class="new-user-btn">Atras</a>
    </div>

</div>

</body>
</html>

<?php
include "../Conexion/conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM usuario WHERE id_usuario = $id");
$usuario = $sql->fetch_assoc();

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
</div>
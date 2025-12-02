<?php
include "./Conexion/conexion.php";

// Contar registros
$usuarios = $conexion->query("SELECT COUNT(*) AS total FROM usuario")->fetch_assoc()['total'];
$obras = $conexion->query("SELECT COUNT(*) AS total FROM obra")->fetch_assoc()['total'];
$informes = $conexion->query("SELECT COUNT(*) AS total FROM informe")->fetch_assoc()['total'];
$avances_fisicos = $conexion->query("SELECT COUNT(*) AS total FROM avance_fisico")->fetch_assoc()['total'];
$avances_financieros = $conexion->query("SELECT COUNT(*) AS total FROM avance_financiero")->fetch_assoc()['total'];
$documento = $conexion->query("SELECT COUNT(*) AS total FROM documento")->fetch_assoc()['total'];
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ./Login/login.php");
    exit();
}

// SOLO ADMINISTRADOR
if ($_SESSION['rol'] !== 'Administrador') {
    echo "<script>alert('Acceso denegado. Solo Administradores.');window.location='../Login/login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Información para Obras</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<div class="header">
    Sistema de Información para Obras
</div>

<div class="container">

    <!-- MENÚ LATERAL -->
    <div class="menu">
        <a href="./index.php">Menú Principal</a>
        <a href="./Usuario/ListaUsuario.php">Usuarios</a>
        <a href="./Obras/ListaObra.php">Obras</a>
        <a href="./Informes/ListaInforme.php">Informes</a>
        <a href="./AvancesFisicos/ListaFisico.php">Avances Físicos</a>
        <a href="./AvancesFinancieros/ListaFinanciero.php">Avances Financieros</a>
        <a href="./Documentos/ListaDocumentos.php">Documentos</a>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="content">

        <div class="title">Panel Principal</div>
        <div class="subtitle">Resumen general del sistema</div>

        <div class="cards">

            <a class="card" href="./Usuario/ListaUsuario.php">
                <h3>Usuarios</h3>
                <p><?php echo $usuarios; ?></p>
            </a>

            <a class="card" href="./Obras/ListaObra.php">
                <h3>Obras</h3>
                <p><?php echo $obras; ?></p>
            </a>

            <a class="card" href="./Informes/ListaInforme.php">
                <h3>Informes</h3>
                <p><?php echo $informes; ?></p>
            </a>

            <a class="card" href="./AvancesFisicos/ListaFisico.php">
                <h3>Avances Físicos</h3>
                <p><?php echo $avances_fisicos; ?></p>
            </a>

            <a class="card" href="./AvancesFinancieros/ListaFinanciero.php">
                <h3>Avances Financieros</h3>
                <p><?php echo $avances_financieros; ?></p>
            </a>

            <a class="card" href="./Documentos/ListaDocumentos.php">
                <h3>Documentación</h3>
                <p><?php echo $documento; ?></p>
            </a>

        </div>
        <!-- <br>
        <a href="./Excel_informe/ExportarExcelObras.php" class="new-user-btn">Descargar Reporte Excel</a> -->
    </div>

</div>

</body>
</html>

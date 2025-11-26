<?php
include "./Conexion/conexion.php";

// Contar registros
$usuarios = $conexion->query("SELECT COUNT(*) AS total FROM usuario")->fetch_assoc()['total'];
$obras = $conexion->query("SELECT COUNT(*) AS total FROM obra")->fetch_assoc()['total'];
$informes = $conexion->query("SELECT COUNT(*) AS total FROM informe")->fetch_assoc()['total'];
$avances_fisicos = $conexion->query("SELECT COUNT(*) AS total FROM avance_fisico")->fetch_assoc()['total'];
$avances_financieros = $conexion->query("SELECT COUNT(*) AS total FROM avance_financiero")->fetch_assoc()['total'];
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
        <a href="ListaUsuario.php">Usuarios</a>
        <a href="obras_lista.php">Obras</a>
        <a href="informes_lista.php">Informes</a>
        <a href="avances_fisicos_lista.php">Avances Físicos</a>
        <a href="avances_financieros_lista.php">Avances Financieros</a>
        <a href="documentos_lista.php">Documentos</a>
        <a href="auditoria_lista.php">Auditoría</a>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="content">

        <div class="title">Panel Principal</div>
        <div class="subtitle">Resumen general del sistema</div>

        <div class="cards">

            <a class="card" href="./UListaUsuario.php">
                <h3>Usuarios</h3>
                <p><?php echo $usuarios; ?></p>
            </a>

            <a class="card" href="obras_lista.php">
                <h3>Obras</h3>
                <p><?php echo $obras; ?></p>
            </a>

            <a class="card" href="informes_lista.php">
                <h3>Informes</h3>
                <p><?php echo $informes; ?></p>
            </a>

            <a class="card" href="avances_fisicos_lista.php">
                <h3>Avances Físicos</h3>
                <p><?php echo $avances_fisicos; ?></p>
            </a>

            <a class="card" href="avances_financieros_lista.php">
                <h3>Avances Financieros</h3>
                <p><?php echo $avances_financieros; ?></p>
            </a>

        </div>

    </div>

</div>

</body>
</html>

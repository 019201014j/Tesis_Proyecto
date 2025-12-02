<?php
include "../Conexion/conexion.php";
$obras = $conexion->query("SELECT * FROM obra");
$usuarios = $conexion->query("SELECT * FROM usuario WHERE rol='Supervisor'");
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
    <form action="GuardarInforme.php" method="POST">
        Obra:
        <select name="id_obra">
            <?php while($o = $obras->fetch_assoc()){ ?>
            <option value="<?= $o['id_obra'] ?>"><?= $o['nombre'] ?></option>
            <?php } ?>
        </select><br>

        Mes periodo: <input type="text" name="mes_periodo"><br>

        Responsable:
        <select name="responsable">
            <?php while($u = $usuarios->fetch_assoc()){ ?>
            <option value="<?= $u['id_usuario'] ?>"><?= $u['nombre'] ?></option>
            <?php } ?>
        </select><br>

        <button type="submit">Guardar</button>
    </form>
</div>
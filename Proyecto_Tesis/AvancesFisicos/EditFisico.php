<?php
include "../Conexion/conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM avance_fisico WHERE id_avance = $id");
$av = $sql->fetch_assoc();
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
        <a href="./ListaObra.php">Obras</a>
        <a href="../Informes/ListaInforme.php">Informes</a>
        <a href="../AvancesFisicos/ListaFisico.php">Avances Físicos</a>
        <a href="../AvancesFinancieros/ListaFinanciero.php">Avances Financieros</a>
        <a href="../Documentos/ListaDocumentos.php">Documentos</a>
    </div>
    <form action="UpdateFisico.php" method="POST">
        <input type="hidden" name="id_avance" value="<?= $av['id_avance'] ?>">

        Actividad: <input type="text" name="actividad" value="<?= $av['actividad'] ?>"><br>
        Porcentaje: <input type="number" step="0.01" name="porcentaje_avance" value="<?= $av['porcentaje_avance'] ?>"><br>
        Observaciones:<br>
        <textarea name="observaciones"><?= $av['observaciones'] ?></textarea><br>

        <button type="submit">Guardar</button>
    </form>
</div>
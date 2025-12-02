<?php
include "../Conexion/conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM obra WHERE id_obra = $id");
$obra = $sql->fetch_assoc();
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
    <form action="UpdateObra.php" method="POST">
        <input type="hidden" name="id_obra" value="<?= $obra['id_obra'] ?>">

        Nombre: <input type="text" name="nombre" value="<?= $obra['nombre'] ?>"><br>
        Ubicación: <input type="text" name="ubicacion" value="<?= $obra['ubicacion'] ?>"><br>
        Contratista: <input type="text" name="contratista" value="<?= $obra['contratista'] ?>"><br>
        Presupuesto total: <input type="number" step="0.01" name="presupuesto_total" value="<?= $obra['presupuesto_total'] ?>"><br>
        Fecha inicio: <input type="date" name="fecha_inicio" value="<?= $obra['fecha_inicio'] ?>"><br>
        Fecha fin estimada: <input type="date" name="fecha_fin_estimada" value="<?= $obra['fecha_fin_estimada'] ?>"><br>
        
        Estado:
        <select name="estado">
            <option <?= $obra['estado']=='Pendiente'?'selected':'' ?>>Pendiente</option>
            <option <?= $obra['estado']=='En ejecución'?'selected':'' ?>>En ejecución</option>
            <option <?= $obra['estado']=='Finalizada'?'selected':'' ?>>Finalizada</option>
            <option <?= $obra['estado']=='Suspendida'?'selected':'' ?>>Suspendida</option>
        </select><br>

        <button type="submit">Guardar</button>
    </form>
</div>
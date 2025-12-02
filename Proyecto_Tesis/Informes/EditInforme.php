<?php
include "../Conexion/conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM informe WHERE id_informe = $id");
$inf = $sql->fetch_assoc();
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
    <form action="UpdateInforme.php" method="POST">
        <input type="hidden" name="id_informe" value="<?= $inf['id_informe'] ?>">

        Mes periodo: <input type="text" name="mes_periodo" value="<?= $inf['mes_periodo'] ?>"><br>
        
        Estado validación:
        <select name="estado_validacion">
            <option <?= $inf['estado_validacion']=='Pendiente'?'selected':'' ?>>Pendiente</option>
            <option <?= $inf['estado_validacion']=='Aprobado'?'selected':'' ?>>Aprobado</option>
            <option <?= $inf['estado_validacion']=='Observado'?'selected':'' ?>>Observado</option>
        </select><br>

        <button type="submit">Guardar</button>
    </form>
</div>
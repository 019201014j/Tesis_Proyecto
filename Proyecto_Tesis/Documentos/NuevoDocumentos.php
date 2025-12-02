<?php
include "../Conexion/conexion.php";
$informes = $conexion->query("SELECT * FROM informe");
$usuarios = $conexion->query("SELECT * FROM usuario");
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
    <form action="GuardarDocumentos.php" method="POST" enctype="multipart/form-data">
        Informe:
        <select name="id_informe">
            <?php while($i=$informes->fetch_assoc()){ ?>
            <option value="<?= $i['id_informe'] ?>"><?= $i['mes_periodo'] ?></option>
            <?php } ?>
        </select><br>

        Tipo: <input type="text" name="tipo"><br>

        Archivo: <input type="file" name="archivo"><br>

        Usuario subida:
        <select name="usuario_subida">
            <?php while($u=$usuarios->fetch_assoc()){ ?>
            <option value="<?= $u['id_usuario'] ?>"><?= $u['nombre'] ?></option>
            <?php } ?> 
        </select><br>

        <button type="submit">Guardar</button>
    </form>
</div>
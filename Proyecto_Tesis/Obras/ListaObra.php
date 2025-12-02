<?php
include "../Conexion/conexion.php";
$sql = $conexion->query("SELECT * FROM obra");
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
        <a href="NuevaObra.php" class="new-user-btn">Nueva Obra</a>

        <table>
            <tr>
                <th>ID</th><th>Nombre</th><th>Ubicación</th><th>Presupuesto</th><th>Estado</th><th>Acciones</th>
            </tr>

            <?php while($o = $sql->fetch_assoc()){ ?>
            <tr>
                <td><?= $o['id_obra'] ?></td>
                <td><?= $o['nombre'] ?></td>
                <td><?= $o['ubicacion'] ?></td>
                <td>S/.<?= $o['presupuesto_total'] ?></td>
                <td><?= $o['estado'] ?></td>
                <td>
                    <a href="EditObra.php?id=<?= $o['id_obra'] ?>">Editar</a>
                    |
                    <a href="EliminarObra.php?id=<?= $o['id_obra'] ?>">Eliminar</a>
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

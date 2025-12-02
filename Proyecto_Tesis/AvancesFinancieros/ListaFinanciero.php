<?php
include "../Conexion/conexion.php";
$sql = $conexion->query("
SELECT avance_financiero.*, informe.mes_periodo, obra.presupuesto_total
FROM avance_financiero
JOIN informe ON avance_financiero.id_informe = informe.id_informe
JOIN obra ON informe.id_obra = obra.id_obra
");
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
        <a href="NuevoFinanciero.php" class="new-user-btn">Nuevo Avance Financiero</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Informe</th>
                <th>Monto ejecutado</th>
                <th>Porcentaje</th>
                <th>Monto obra</th>
                <th>Monto final</th>
                <th>Acciones</th>
            </tr>

            <?php while($a = $sql->fetch_assoc()) { 
                $monto_final = $a['presupuesto_total'] - $a['monto_ejecutado'];
            ?>
            <tr>
                <td><?= $a['id_finanza'] ?></td>
                <td><?= $a['mes_periodo'] ?></td>
                <td>S/ <?= number_format($a['monto_ejecutado'], 2) ?></td>
                <td><?= $a['porcentaje_ejecucion'] ?>%</td>
                <td>S/ <?= number_format($a['presupuesto_total'], 2) ?></td>
                <td>S/ <?= number_format($monto_final, 2) ?></td>
                <td>
                    <a href="EditFinanciero.php?id=<?= $a['id_finanza'] ?>">Editar</a> |
                    <a href="EliminarFinanciero.php?id=<?= $a['id_finanza'] ?>">Eliminar</a>
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

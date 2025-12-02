<?php
include "../Conexion/conexion.php";
$sql = $conexion->query("
SELECT avance_fisico.*, informe.mes_periodo 
FROM avance_fisico
JOIN informe ON avance_fisico.id_informe = informe.id_informe");
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
        <a href="NuevoFisico.php" class="new-user-btn">Nuevo Avance Fisico</a>

        <table>
            <tr>
                <th>ID</th><th>Informe</th><th>Actividad</th><th>Porcentaje</th><th>Acciones</th>
            </tr>

            <?php while($a=$sql->fetch_assoc()){ ?>
            <tr>
                <td><?= $a['id_avance'] ?></td>
                <td><?= $a['mes_periodo'] ?></td>
                <td><?= $a['actividad'] ?></td>
                <td>%<?= $a['porcentaje_avance'] ?></td>
                <td>
                    <a href="EditFisico.php?id=<?= $a['id_avance'] ?>">Editar</a> |
                    <a href="EliminarFisico.php?id=<?= $a['id_avance'] ?>">Eliminar</a>
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

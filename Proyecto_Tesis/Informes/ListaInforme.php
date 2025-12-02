<?php
include "../Conexion/conexion.php";
$sql = $conexion->query("
SELECT informe.*, obra.nombre AS obra_nombre, usuario.nombre AS responsable_nombre
FROM informe
JOIN obra ON informe.id_obra = obra.id_obra
JOIN usuario ON informe.responsable = usuario.id_usuario
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
        <a href="NuevoInforme.php" class="new-user-btn">Nuevo Informe</a>

        <table>
            <tr>
                <th>ID</th><th>Obra</th><th>Mes</th><th>Responsable</th><th>Estado</th><th>Acciones</th>
            </tr>

            <?php while($i = $sql->fetch_assoc()){ ?>
            <tr>
                <td><?= $i['id_informe'] ?></td>
                <td><?= $i['obra_nombre'] ?></td>
                <td><?= $i['mes_periodo'] ?></td>
                <td><?= $i['responsable_nombre'] ?></td>
                <td><?= $i['estado_validacion'] ?></td>
                <td>
                    <a href="EditInforme.php?id=<?= $i['id_informe'] ?>">Editar</a>
                    |
                    <a href="EliminarInforme.php?id=<?= $i['id_informe'] ?>">Eliminar</a>
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

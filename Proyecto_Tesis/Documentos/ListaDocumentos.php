<?php
include "../Conexion/conexion.php";
$sql = $conexion->query("
SELECT documento.*, informe.mes_periodo, usuario.nombre AS usuario_nombre
FROM documento
JOIN informe ON documento.id_informe = informe.id_informe
JOIN usuario ON documento.usuario_subida = usuario.id_usuario
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
        <a href="NuevoDocumentos.php" class="new-user-btn">Nuevo</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Informe</th>
                <th>Tipo</th>
                <th>Archivo</th>
                <th>Subido por</th>
                <th>Acciones</th>
            </tr>

            <?php while($d = $sql->fetch_assoc()){ ?>
            <?php 
                $nombre = basename($d['ruta_storage']);
                $ruta = "../" . $d['ruta_storage'];
                $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

                $iconos = [
                    'pdf' => '📄 PDF',
                    'jpg' => '🖼️ Imagen',
                    'jpeg'=> '🖼️ Imagen',
                    'png' => '🖼️ Imagen',
                    'gif' => '🖼️ Imagen',
                    'doc' => '📝 Word',
                    'docx'=> '📝 Word',
                    'xls' => '📊 Excel',
                    'xlsx'=> '📊 Excel',
                    'ppt' => '📽️ PowerPoint',
                    'pptx'=> '📽️ PowerPoint',
                    'zip' => '📦 ZIP',
                    'rar' => '📦 RAR'
                ];

                $icono = isset($iconos[$ext]) ? $iconos[$ext] : '📁 Archivo';
            ?>

            <tr>
                <td><?= $d['id_documento'] ?></td>
                <td><?= $d['mes_periodo'] ?></td>
                <td><?= $d['tipo'] ?></td>

                <td>
                    <b><?= $icono ?></b><br>
                    <?= $nombre ?><br><br>

                    <!-- Vista previa cuando posible -->
                    <?php if(in_array($ext, ['jpg','jpeg','png','gif'])){ ?>
                        <a href="<?= $ruta ?>" target="_blank" style="color:blue;">Ver Imagen</a><br>
                    <?php } ?>

                    <?php if($ext == 'pdf'){ ?>
                        <a href="<?= $ruta ?>" target="_blank" style="color:green;">Ver PDF</a><br>
                    <?php } ?>

                    <!-- Los demás archivos se abren o descargan según navegador -->
                    <a href="<?= $ruta ?>" download style="color:red;">Descargar</a>
                </td>

                <td><?= $d['usuario_nombre'] ?></td>

                <td>
                    <a href="EditDocumentos.php?id=<?= $d['id_documento'] ?>">Editar</a>
                    |
                    <a href="EliminarDocumentos.php?id=<?= $d['id_documento'] ?>">Eliminar</a>
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

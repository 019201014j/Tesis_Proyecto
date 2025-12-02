<?php
include "../Conexion/conexion.php";

$id = $_GET['id'];

// Traer datos del avance financiero + datos del informe correspondiente
$sql = $conexion->query("
SELECT avance_financiero.*, informe.mes_periodo, obra.presupuesto_total
FROM avance_financiero
JOIN informe ON avance_financiero.id_informe = informe.id_informe
JOIN obra ON informe.id_obra = obra.id_obra
WHERE id_finanza = $id
");

$fin = $sql->fetch_assoc();
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

    <form action="UpdateFinanciero.php" method="POST" class="form-card">
        <input type="hidden" name="id_finanza" value="<?= $fin['id_finanza'] ?>">

        <label>Informe (mes período)</label>
        <input type="text" value="<?= $fin['mes_periodo'] ?>" disabled>

        <label>Monto de la obra (partida presupuestal)</label>
        <input type="text" value="S/ <?= number_format($fin['presupuesto_total'],2) ?>" disabled>

        <label>Monto ejecutado</label>
        <input type="number" step="0.01" name="monto_ejecutado" value="<?= $fin['monto_ejecutado'] ?>" required>

        <label>Porcentaje ejecución (%)</label>
        <input type="number" step="0.01" name="porcentaje_ejecucion" value="<?= $fin['porcentaje_ejecucion'] ?>" required>

        <button type="submit" class="new-user-btn">Guardar</button>
    </form>

</div>

</body>
</html>

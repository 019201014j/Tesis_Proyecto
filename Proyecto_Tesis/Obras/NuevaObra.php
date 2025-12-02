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
    <form action="GuardarObra.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Ubicación: <input type="text" name="ubicacion"><br>
        Contratista: <input type="text" name="contratista"><br>
        Presupuesto total: <input type="number" step="0.01" name="presupuesto_total"><br>
        Fecha inicio: <input type="date" name="fecha_inicio"><br>
        Fecha fin estimada: <input type="date" name="fecha_fin_estimada"><br>

        Estado:
        <select name="estado">
            <option>Pendiente</option>
            <option>En ejecución</option>
            <option>Finalizada</option>
            <option>Suspendida</option>
        </select>

        <button type="submit">Guardar</button>
    </form>
</div>
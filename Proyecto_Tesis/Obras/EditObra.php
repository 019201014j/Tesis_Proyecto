<?php
include "conexion.php";

$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM obra WHERE id_obra = $id");
$obra = $sql->fetch_assoc();
?>
<form action="update_obra.php" method="POST">
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

<form action="obra_guardar.php" method="POST">
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
    </select><br>

    <button type="submit">Guardar</button>
</form>

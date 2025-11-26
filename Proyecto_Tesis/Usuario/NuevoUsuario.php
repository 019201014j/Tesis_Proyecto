<form action="GuardarUsuario.php" method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Correo: <input type="email" name="correo"><br>
    Contraseña: <input type="password" name="contrasena"><br>

    Rol:
    <select name="rol">
        <option>Administrador</option>
        <option>Ingeniero</option>
        <option>Supervisor</option>
        <option>Consultor</option>
    </select><br>

    <button type="submit">Guardar</button>
</form>

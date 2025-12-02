<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistema de Obras</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div class="header">Inicio de Sesión</div>

<div class="container">
    <form action="validar.php" method="POST">
        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required>

        <button type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>

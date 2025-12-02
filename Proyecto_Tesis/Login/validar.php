<?php
session_start();
include "../Conexion/conexion.php";

// Recibir datos del formulario
$correo = $_POST['correo'];
$pass   = $_POST['hash_contraseña'];

// Buscar usuario
$sql = $conexion->query("SELECT * FROM usuario WHERE correo='$correo' LIMIT 1");

if ($sql->num_rows == 1) {
    $usuario = $sql->fetch_assoc();

    // Validar contraseña (texto plano)
    // Si usas password_hash, aquí debes usar password_verify()
    if ($usuario['contrasena'] == $pass) {

        // Guardar datos en sesión
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];

        // Redirigir al sistema
        header("Location: ../Usuario/ListaUsuario.php");
        exit();
    }
}

// Si falla
echo "<script>alert('Correo o contraseña incorrectos');window.location='login.php';</script>";

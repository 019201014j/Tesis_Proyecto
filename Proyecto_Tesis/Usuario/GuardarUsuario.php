<?php
include "../Conexion/conexion.php";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$conexion->query("INSERT INTO usuario(nombre,correo,hash_contraseña,rol)
VALUES('$nombre','$correo','$contrasena','$rol')");

header("Location: ListaUsuario.php");
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../Login/login.php");
    exit();
}

// SOLO ADMINISTRADOR
if ($_SESSION['rol'] !== 'Administrador') {
    echo "<script>alert('Acceso denegado. Solo Administradores.');window.location='../Login/login.php';</script>";
    exit();
}
?>

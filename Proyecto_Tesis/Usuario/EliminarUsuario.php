<?php
include "../Conexion/conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM usuario WHERE id_usuario=$id");
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

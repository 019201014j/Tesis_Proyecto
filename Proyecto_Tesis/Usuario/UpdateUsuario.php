<?php
include "../Conexion/conexion.php";

$id = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$rol = $_POST['rol'];

$conexion->query("UPDATE usuario SET 
    nombre='$nombre', 
    correo='$correo',
    rol='$rol'
    WHERE id_usuario=$id");

header("Location: ListaUsuario.php");
?>

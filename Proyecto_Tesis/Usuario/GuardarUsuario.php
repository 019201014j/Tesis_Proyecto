<?php
include "../Conexion/conexion.php";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$conexion->query("INSERT INTO usuario(nombre,correo,hash_contraseña,rol)
VALUES('$nombre','$correo','$contrasena','$rol')");

header("Location: ListaUsuario.php");
?>

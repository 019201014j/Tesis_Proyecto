<?php
include "conexion.php";

$id_informe = $_POST['id_informe'];
$tipo = $_POST['tipo'];
$ruta = $_POST['ruta_storage'];
$usuario = $_POST['usuario_subida'];

$conexion->query("INSERT INTO documento(id_informe,tipo,ruta_storage,usuario_subida)
VALUES($id_informe,'$tipo','$ruta',$usuario)");

header("Location: documentos_lista.php");
?>

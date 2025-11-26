<?php
include "conexion.php";

$id = $_POST['id'];
$inf = $_POST['id_informe'];
$tipo = $_POST['tipo'];
$ruta = $_POST['ruta_storage'];
$user = $_POST['usuario_subida'];

$conexion->query("UPDATE documento SET
    id_informe=$inf,
    tipo='$tipo',
    ruta_storage='$ruta',
    usuario_subida=$user
WHERE id_documento=$id");

header("Location: documentos_lista.php");
?>

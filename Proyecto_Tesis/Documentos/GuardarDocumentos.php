<?php
include "../Conexion/conexion.php";

$id_informe = $_POST['id_informe'];
$tipo = $_POST['tipo'];
$usuario = $_POST['usuario_subida'];

$carpetaDestino = "../UploadsDocumentos/";

// Crear carpeta si no existe
if (!file_exists($carpetaDestino)) {
    mkdir($carpetaDestino, 0777, true);
}

// Procesar archivo
$nombreArchivo = $_FILES['archivo']['name'];
$rutaTemporal = $_FILES['archivo']['tmp_name'];
$rutaFinal = $carpetaDestino . $nombreArchivo;

move_uploaded_file($rutaTemporal, $rutaFinal);

// Guardar solo el nombre del archivo o ruta relativa
$rutaBD = "UploadsDocumentos/" . $nombreArchivo;

$conexion->query("INSERT INTO documento(id_informe, tipo, ruta_storage, usuario_subida)
VALUES($id_informe, '$tipo', '$rutaBD', $usuario)");

header("Location: ListaDocumentos.php");
?>

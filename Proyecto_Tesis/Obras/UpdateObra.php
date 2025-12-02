<?php
include "../Conexion/conexion.php";

$id = $_POST['id_obra'];
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$contratista = $_POST['contratista'];
$presupuesto = $_POST['presupuesto_total'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin_estimada'];
$estado = $_POST['estado'];

$conexion->query("UPDATE obra SET 
    nombre='$nombre',
    ubicacion='$ubicacion',
    contratista='$contratista',
    presupuesto_total='$presupuesto',
    fecha_inicio='$fecha_inicio',
    fecha_fin_estimada='$fecha_fin',
    estado='$estado'
    WHERE id_obra=$id");

header("Location: ./ListaObra.php");
?>

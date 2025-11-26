<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$contratista = $_POST['contratista'];
$presupuesto = $_POST['presupuesto_total'];
$inicio = $_POST['fecha_inicio'];
$fin = $_POST['fecha_fin_estimada'];
$estado = $_POST['estado'];

$conexion->query("INSERT INTO obra(nombre,ubicacion,contratista,presupuesto_total,fecha_inicio,fecha_fin_estimada,estado)
VALUES('$nombre','$ubicacion','$contratista','$presupuesto','$inicio','$fin','$estado')");

header("Location: obras_lista.php");
?>

<?php
require 'conexion.php'; // Incluye el archivo de conexión

// Consulta para obtener los proyectos
$sql_proyectos = "SELECT id, nombre_proyecto, caratula FROM proyecto";
$result_proyectos = $conn->query($sql_proyectos);

$proyectos = [];
if ($result_proyectos && $result_proyectos->num_rows > 0) {
    while ($row = $result_proyectos->fetch_assoc()) {
        $proyectos[] = $row;
    }
}

$conn->close();

// Incluye directamente la vista
require '../view/proyectos.view.php';
?>
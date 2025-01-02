<?php

require_once 'conexion.php';

// Obtiene el id del proyecto
$id_proyecto = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : null;

// Consulta para obtener la información del proyecto
$sql = "SELECT id, nombre_proyecto, descripcion_proyecto, enlace_proyecto, fecha_creacion, caratula 
        FROM proyecto 
        WHERE id = '$id_proyecto'";

$result = $conn->query($sql);
$proyecto = array();

// Verifica si se encontró el proyecto
if ($result && $result->num_rows > 0) {
    $proyecto = $result->fetch_assoc(); 
} else {
    echo "No se encontró el proyecto.";
}

// Cierra la conexión
$conn->close();

// Incluye la vista del proyecto
require '../view/proyecto.view.php';
?>

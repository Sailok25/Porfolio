<?php

require_once 'conexion.php';

// Consulta para obtener las tecnologias
$sql = "SELECT * FROM tecnologias";
$result = $conn->query($sql);


$tecnologias = array();
if ($result->num_rows > 0) {
    // Guardar resultados en un array
    while ($row = $result->fetch_assoc()) {
        $tecnologias[] = $row;
    }
} else {
    echo 'No hay tecnologias registradas.';
}

// Redirigir a la vista de artistas
header ('Location: ../vistas/tecnologias.view.php');

// Cerrar la conexión al final de la ejecución
$conn->close();
exit();
?>
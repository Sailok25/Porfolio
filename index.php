<?php
require 'php/conexion.php'; // Incluye el archivo de conexión

// Consulta para obtener las tecnologías
$sql = "SELECT nombre, icono FROM tecnologias"; // Asegúrate de que esta tabla y columnas existan
$result = $conn->query($sql);

$tecnologias = [];

if ($result->num_rows > 0) {
    // Almacena los resultados en un array
    while ($row = $result->fetch_assoc()) {
        $tecnologias[] = $row;
    }
}

$conn->close(); // Cierra la conexión

// Incluye la vista
require 'index.view.php';
?>

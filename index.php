<?php
require 'php/conexion.php'; // Incluye el archivo de conexión

// Consulta para obtener las tecnologías
$sql_tecnologias = "SELECT nombre, icono FROM tecnologias"; // Asegúrate de que esta tabla y columnas existan
$result_tecnologias = $conn->query($sql_tecnologias);

$tecnologias = [];
if ($result_tecnologias->num_rows > 0) {
    // Almacena los resultados en un array
    while ($row = $result_tecnologias->fetch_assoc()) {
        $tecnologias[] = $row;
    }
}

// Consulta para obtener los proyectos
$sql_proyectos = "SELECT id, nombre_proyecto, caratula FROM proyecto ORDER BY CASE WHEN caratula IS NOT NULL AND caratula != '' THEN 1 ELSE 2 END, id ASC;";
$result_proyectos = $conn->query($sql_proyectos);

$proyectos = [];
if ($result_proyectos->num_rows > 0) {
    // Almacena los resultados en un array
    while ($row = $result_proyectos->fetch_assoc()) {
        $proyectos[] = $row;
    }
}

// Limitar los proyectos a los primeros 4
$limit = 0;
$max_proyectos = 6;
$proyectos_limitados = [];

// Usamos un bucle para seleccionar solo los primeros 4 proyectos
for ($i = 0; $i < $max_proyectos && $i < count($proyectos); $i++) {
    $proyectos_limitados[] = $proyectos[$i];
}

// Cierra la conexión
$conn->close();

// Incluye la vista después de cargar los datos
require 'index.view.php';
?>

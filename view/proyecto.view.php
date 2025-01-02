<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/generales.css">
    <link rel="stylesheet" href="../assets/css/proyecto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/dorado.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Alba Ayala | Proyecto</title>
</head>

<body>
    <main>
        <section id="detalle-proyecto">
            <?php if (!empty($proyecto)) { ?>
                <h1><?php echo htmlspecialchars($proyecto['nombre_proyecto']); ?></h1>
                <p><strong>Descripción:</strong> <?php echo htmlspecialchars($proyecto['descripcion_proyecto']); ?></p>
                <p><strong>Enlace:</strong> <a href="<?php echo htmlspecialchars($proyecto['enlace_proyecto']); ?>" target="_blank">Ver Proyecto</a></p>
                <p><strong>Fecha de Creación:</strong> <?php echo htmlspecialchars($proyecto['fecha_creacion']); ?></p>
                <img src="<?php echo htmlspecialchars($proyecto['caratula']); ?>" alt="<?php echo htmlspecialchars($proyecto['nombre_proyecto']); ?>">
            <?php } else { ?>
                <p>No se encontró información del proyecto.</p>
            <?php } ?>
        </section>
    </main>
</body>

</html>
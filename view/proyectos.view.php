<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/generales.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/generales.css">
    <link rel="stylesheet" href="../assets/css/proyectos.css">
    <title>Alba Ayala | proyectos</title>
</head>

<body>
    <header></header>

    <main>
        <section id="mi-trabajo" data-aos="fade-down">
            <div id="texto-contacto2">
                <h1 class="titulo-apartado">¡Mis Trabajos!</h1>
                <div class="guion-texto">
                    <hr>
                </div>
            </div>
            <div id="trabajos">
                <?php if (!empty($proyectos)) { ?>
                    <?php foreach ($proyectos as $proyecto) { ?>
                        <div class="trabajo">
                            <a href="./php/proyecto.php?id=<?php echo htmlspecialchars($proyecto['id']); ?>">
                                <img src="<?php echo htmlspecialchars($proyecto['caratula']); ?>"
                                    alt="<?php echo htmlspecialchars($proyecto['nombre_proyecto']); ?>">
                            </a>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <p>No hay proyectos registrados.</p>
                <?php } ?>
            </div>
        </section>
    </main>

    <footer>
        <div id="no_copy">
            <p>Todos los derechos reservados - <a href="https://github.com/Sailok25">© SAILOK 2024</p>
        </div>
    </footer>
</body>

</html>
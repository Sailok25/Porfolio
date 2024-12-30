<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/generales.css">
    <link rel="stylesheet" href="assets/css/proyectos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Alba Ayala | Porfolio</title>
</head>

<body>
    <header></header>

    <main>
        <section id="presentacion">
            <div id="presento">
                <div id="me-presento">
                    <h1>Soy</h1>
                    <h2>Alba Ayala</h2>
                </div>

                <div id="oficio">
                    <p>20 años</p>
                </div>
            </div>

            <div id="icono-alba">
                <div id="dimensiones">
                    <img src="./assets/img/yo.jpg" alt="Alba Ayala">
                </div>
            </div>
        </section>

        <section id="sobre-mi">
            <div id="titulo-sobre-mi">
                <h1 class="titulo-apartado">Sobre mi</h1>
                <div class="guion-texto">
                    <hr>
                </div>
            </div>
            <div id="descripcion">
                <p>Hola, soy <span>Alba</span>, programadora y diseñadora web. Cuento con 2 años de experiencia en práctica y me apasiona aprender cosas nuevas.
                <p>Actualmente cuento con el <span>titulo de SMX y DAM</span>, estos me han permitido conocer el mundo tecnologico mas a profundidad.</p>
                <p>Lentamente e ido descubriendo que <span>mi área favorita es el desarrollo web</span>, aunque también tengo conocimientos en otras tecnologias como Java y SQL.</p>
            </div>

            <div id="curriculum">
                <a href="./assets/docs/CCV-Catalan.pdf" download="CV_AlbaAyala_Catalan.pdf">CV Catalan</a>
                <a href="./assets/docs/CCV-Ingles.pdf" download="CV_AlbaAyala_Ingles.pdf">CV Ingles</a>
                <a href="./assets/docs/CCV-Español.pdf" download="CV_AlbaAyala_Español.pdf">CV Español</a>
            </div>
        </section>

        <section id="habilidades">
            <div id="titulo-sobre-mi">
                <h1 class="titulo-apartado">Habilidades</h1>
                <div class="guion-texto">
                    <hr>
                </div>
                <p>Tengo experiencia trabajando con diferentes tecnologías</p>
            </div>

            <div class="tecnologias">
                <?php if (!empty($tecnologias)) { ?>
                    <?php foreach ($tecnologias as $tecnologia) { ?>
                        <div class="tecnologia">
                            <img src="<?php echo htmlspecialchars($tecnologia['icono']); ?>"
                                alt="<?php echo htmlspecialchars($tecnologia['nombre']); ?>">
                            <p><?php echo htmlspecialchars($tecnologia['nombre']); ?></p>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <p>No hay tecnologías registradas.</p>
                <?php } ?>
            </div>
        </section>


        <section id="mi-trabajo">
            <div id="texto-contacto2">
                <h1 class="titulo-apartado">¡Mis Trabajos!</h1>
                <div class="guion-texto">
                    <hr>
                </div>
            </div>
            <div id="total-apartado">
                <div id="trabajos">
                    <?php if (!empty($proyectos_limitados)) { ?>
                        <?php foreach ($proyectos_limitados as $proyecto) { ?>
                            <div class="trabajo">
                                <a href="./php/proyecto_detalle.php?id=<?php echo htmlspecialchars($proyecto['id']); ?>">
                                    <img src="<?php echo htmlspecialchars($proyecto['caratula']); ?>"
                                        alt="<?php echo htmlspecialchars($proyecto['nombre_proyecto']); ?>">
                                </a>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <p>No hay proyectos registrados.</p>
                    <?php } ?>
                </div>

                <div id="ver-mas">
                    <a href="./php/proyectos.php">Ver más</a>
                </div>
            </div>

        </section>

        <section id="contacto">
            <div id="forma-contacto">
                <div id="texto-contacto">
                    <h1 class="titulo-apartado">¡Contacta conmigo!</h1>
                    <div class="guion-texto">
                        <hr>
                        <h2>Envíame un correo</h2>
                    </div>
                </div>
                <div id="formcorreo">
                    <div id="camposinput">
                        <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre" required>
                        <input type="text" id="correo" name="correo" placeholder="Introduce tu correo electronico" required>
                        <input type="text" id="telefono" name="telefono" placeholder="Introduce tu telefono" optional>
                    </div>
                    <button>Enviar</button>
                </div>
            </div>
            <div id="imagen-contacto">
                <img src="./assets/img/beagle_sailok.png" alt="Imagen de contacto">
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
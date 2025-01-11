-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para porfolio
CREATE DATABASE IF NOT EXISTS `porfolio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `porfolio`;

-- Volcando estructura para tabla porfolio.proyecto
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` varchar(255) NOT NULL,
  `descripcion_proyecto` longtext NOT NULL,
  `enlace_proyecto` varchar(512) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `caratula` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla porfolio.proyecto: ~10 rows (aproximadamente)
DELETE FROM `proyecto`;
INSERT INTO `proyecto` (`id`, `nombre_proyecto`, `descripcion_proyecto`, `enlace_proyecto`, `fecha_creacion`, `caratula`) VALUES
	(1, 'LyricVault', 'Es una página que se puede usar para conocer artistas y visualizar sus giras. Es mi primer proyecto trabajando con PHP y tiene datos limitados insertados a mano. Pueden registrarse o logearse, visualizar su perfil y borrar la cuenta. Interactuar con sus artistas favoritos conociendo sobre ellos o bien marcarlos como favoritos.', 'http://www.lyricvault.cat', '2024-12-13', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735571532/text-1735571518728_sbnvj1.png'),
	(2, 'Catarsis', 'Catarsis es una página web desarrollada para promocionar a un grupo musical del mismo nombre. Fue mi segundo proyecto y contiene múltiples funcionalidades diseñadas para brindar información completa sobre la banda y facilitar la interacción con sus fans. La web incluye detalles sobre los miembros de la banda, su discografía, próximas giras y una sección de merchandising. Los usuarios pueden registrarse, iniciar sesión, gestionar su perfil y eliminar su cuenta. También tienen la posibilidad de copiar la dirección de los conciertos y ser redirigidos a Google Maps, además de comprar productos oficiales directamente desde el sitio.', 'https://catarsisoficial.es', '2025-01-23', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735571309/logo-cut_hw78gt.png'),
	(3, 'AyalaTools', 'AyalaTools es una página web multifuncional que reúne un conjunto de herramientas prácticas para el día a día. Entre sus funciones actuales se incluyen: generadores de contraseñas y texto Lorem Ipsum, opciones de calculadora, herramientas para lanzar dados o monedas para probar la suerte, y un selector de fuentes atractivas para texto. Es un proyecto en desarrollo y aún no está finalizado, pero planeo expandir sus funcionalidades en el futuro.', NULL, '2024-12-21', NULL),
	(4, 'Pardia Autodidactic', 'Pardia Autodidactic es una propuesta educativa diseñada para niños y jóvenes, similar a Duolingo pero enfocada en enseñar conceptos básicos y habilidades prácticas. Su objetivo es facilitar el aprendizaje de objetos, nombres y procesos a través de una interfaz interactiva y amigable. Aunque aún no se ha iniciado el desarrollo, el proyecto busca revolucionar la forma en que los niños aprenden jugando y experimentando.', NULL, NULL, NULL),
	(5, 'ReportIT', 'Aplicación desarrollada para los ayuntamientos de pueblos, diseñada para facilitar la gestión y registro de incidencias en tiempo real. Los ciudadanos pueden acceder con su perfil personal (DNI y contraseña) y completar un formulario para reportar incidencias. Este formulario permite especificar datos como la calle afectada, el motivo de la incidencia, y la opción de adjuntar fotos para un mejor contexto. Es una herramienta eficiente para mejorar la gestión y resolución de problemas en las comunidades.', NULL, NULL, NULL),
	(6, 'El Refugio de Nick', 'El Refugio de Nick es una página web de reseñas de anime creada por encargo. Su objetivo es ofrecer valoraciones de series basadas tanto en la opinión personal del creador como en las opiniones de la comunidad otaku. Además de funcionalidades estándar como registro, inicio de sesión, gestión de perfil y eliminación de cuenta, la página permite a los usuarios marcar y guardar las reseñas de Nick como favoritas. También cuenta con un apartado de comentarios interactivo, similar a Disqus, para fomentar la discusión entre los usuarios.', NULL, NULL, NULL),
	(7, 'La Cocina Virtual', 'pagina de cocina', NULL, NULL, 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735571621/logo_cv_qfdbjg.png'),
	(8, 'ContaPizza', 'saber a quien le toca hacer la pizza', NULL, '2025-01-04', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735571689/text-1735571681125_dw6hpe.png'),
	(9, 'CronoHub', 'Esta web es como una herramienta para gestionar el tiempo, incluyendo seguimiento de zonas horarias, temporizadores, cronómetros y programación de reuniones.', NULL, NULL, 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735574830/userlmn_7a74334b7d5f11551181ba677331b5d4_wuogkj.png'),
	(10, 'Pass_Generator', 'App con Java para generar Contraseñas', NULL, NULL, 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735574839/passGenerator_lgr5rv.png');

-- Volcando estructura para tabla porfolio.proyecto_tecnologia
CREATE TABLE IF NOT EXISTS `proyecto_tecnologia` (
  `proyecto_id` int(11) NOT NULL,
  `tecnologia_id` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_id`,`tecnologia_id`),
  KEY `tecnologia_id` (`tecnologia_id`),
  CONSTRAINT `proyecto_tecnologia_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proyecto_tecnologia_ibfk_2` FOREIGN KEY (`tecnologia_id`) REFERENCES `tecnologias` (`id_tecnologia`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla porfolio.proyecto_tecnologia: ~25 rows (aproximadamente)
DELETE FROM `proyecto_tecnologia`;
INSERT INTO `proyecto_tecnologia` (`proyecto_id`, `tecnologia_id`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(2, 1),
	(2, 2),
	(2, 3),
	(2, 4),
	(3, 1),
	(3, 2),
	(3, 3),
	(3, 4),
	(4, 1),
	(4, 2),
	(4, 3),
	(4, 5),
	(5, 1),
	(5, 2),
	(5, 3),
	(5, 4),
	(5, 5),
	(6, 1),
	(6, 2),
	(6, 3),
	(6, 4);

-- Volcando estructura para tabla porfolio.tecnologias
CREATE TABLE IF NOT EXISTS `tecnologias` (
  `id_tecnologia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `icono` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tecnologia`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla porfolio.tecnologias: ~15 rows (aproximadamente)
DELETE FROM `tecnologias`;
INSERT INTO `tecnologias` (`id_tecnologia`, `nombre`, `icono`) VALUES
	(1, 'Html', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345570/html_wd3fhz.svg'),
	(2, 'Css', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345570/css_vxrfal.svg'),
	(3, 'JavaScript', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345571/js_kzss26.svg'),
	(4, 'Php', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345570/php_qur7zh.svg'),
	(5, 'Java', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735346106/java-svgrepo-com_pqy9rr.svg'),
	(6, 'Markdown', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735487441/markdown-svgrepo-com_vphbk9.svg'),
	(7, 'Git', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735346105/git-svgrepo-com_xqczbo.svg'),
	(8, 'Apache Cordova', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735474785/apache-cordova-svgrepo-com_bo56d2.svg'),
	(9, 'XML', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735487345/xml-document-svgrepo-com_z5hpuh.svg'),
	(10, 'Canva', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1736288160/canva_sv4zxh.png'),
	(11, 'Photoshop', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345572/photoshop_gbvr3z.svg'),
	(12, 'JasperSoft', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345570/jaspersoft_ifexel.svg'),
	(13, 'MySQL', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345571/mysql_tm2nca.svg'),
	(14, 'MariaDB', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345571/mariadb_gjq0df.svg'),
	(15, 'PostgreSQL', 'https://res.cloudinary.com/dcnnetlmp/image/upload/v1735345571/pgsql_ayltxl.svg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

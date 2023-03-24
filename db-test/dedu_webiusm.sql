-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2022 a las 00:30:41
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dedu_webiusm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `NOTICIAID` int(11) NOT NULL,
  `TITULO` varchar(254) COLLATE utf8_spanish_ci NOT NULL,
  `RESUMEN` varchar(1024) COLLATE utf8_spanish_ci NOT NULL,
  `TEXTO` varchar(4000) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA` date NOT NULL,
  `ESTADOID` int(11) NOT NULL,
  `AUDITORIA_USU` int(11) NOT NULL,
  `AUDITORIA_FECHA` date NOT NULL,
  `NIVEL` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`NOTICIAID`, `TITULO`, `RESUMEN`, `TEXTO`, `FECHA`, `ESTADOID`, `AUDITORIA_USU`, `AUDITORIA_FECHA`, `NIVEL`) VALUES
(1, 'ASUNCIóN DE LAS NUEVAS AUTORIDADES DEL INSTITUTO UNIVERSITARIO DE SEGURIDAD MARíTIMA', 'LA MINISTRA DE SEGURIDAD DE LA NACIóN, SABINA FREDERIC, ENCABEZó LA ASUNCIóN DEL NUEVO RECTOR DEL INSTITUTO UNIVERSITARIO DE SEGURIDAD MARíTIMA DE LA PREFECTURA NAVAL ARGENTINA.', '<p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">En el acto estuvieron presentes el Prefecto Nacional Naval, prefecto general Mario Farinon, acompañado por el Subprefecto Nacional, prefecto general Jorge Bono.</span><br></p><p style=\"box-sizing: border-box; margin: 0px 0px 24px; font-weight: 500; font-size: 16px; line-height: 1.6; color: rgb(51, 51, 51); font-family: \" encode=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-thickness:=\"\" initial;=\"\" text-decoration-style:=\"\" text-decoration-color:=\"\" initial;\"=\"\"><br>Asistieron también el secretario de Seguridad y Política Criminal, Eduardo Villalba y la subsecretaria de Formación y Carrera del Ministerio de Seguridad, Karina Mouzo.<br><br>Font se ha desempeñado en tareas de investigación y extensión universitarias. Realizó consultorías, asesoramientos técnicos y capacitaciones sobre seguridad ciudadana y prevención del delito, en instituciones académicas, gubernamentales y no gubernamentales en nuestro país y del extranjero.<br><br>Cabe destacar que el Instituto Universitario de Seguridad Marítima fue creado en el 2007, para la formación superior del personal de Prefectura. Sus ejes son la protección marítima y portuaria, la seguridad de la navegación, la protección del ambiente marino y la seguridad pública.<br></p><p></p><p class=\"sceditor-nlf\"><br></p>', '2020-04-22', 1, 31283575, '2020-11-22', ''),
(4, 'NUEVO PLAN DE ESTUDIOS', 'SE REALIZÓ LA PRESENTACIÓN A CARGO DE LA SECRETARIA ACADÉMICA ALICIA RAPACIOLI, DEL NUEVO PLAN DE ESTUDIOS A DESARROLLARSE EN LA UNIDAD ACADÉMICA ESCUELA SUPERIOR DE INFORMÁTICA FRENTE A LAS AUTORIDADES DEL INSTITUTO UNIVERSITARIO Y DE LA DIRECCIÓN DE EDUCACIÓN DE LA PNA.', '<p>El Plan de Estudios de la carrera Ciclo de Complementación Curricular de Licenciatura en Gestión de Herramientas Digitales para la Seguridad Marítima atiende a las necesidades actuales que presenta la complejidad laboral en la que deben insertarse los egresados. Tanto el avance dinámico en el desarrollo de conocimientos, la necesaria revisión de la articulación entre la teoría y la práctica, como las habilidades requeridas para abordar las áreas de incumbencia de la carrera, son los principios rectores sobre los que se sostiene la decisión de promover un plan de estudio acorde las necesidades tecnológicas actuales con la creación de un ciclo complementario de Licenciatura.</p>', '2020-10-21', 1, 36626995, '2021-05-06', ''),
(3, 'PRESENTACIóN NUEVO PLAN DE ESTUDIO “LICENCIATURA EN SEGURIDAD MARíTIMA”', 'LA SECRETARIA ACADéMICA DEL INSTITUTO LIC. ALICIA RAPACIOLI, ENCABEZO LA PRESENTACIóN DEL NUEVO PLAN DE ESTUDIOS “LICENCIATURA EN SEGURIDAD MARíTIMA”, A DESARROLLARSE EN LA UNIDAD ACADéMICA DEPARTAMENTO ACADéMICA ESCUELA DE OFICIALES; FRENTE A LAS AUTORIDADES DEL INSTITUTO UNIVERSITARIO Y DE LA DIRECCIóN DE EDUCACIóN DE LA PNA.', '<p>La modificación del Plan de Estudios de la carrera Licenciatura en Seguridad Marítima atiende a las necesidades laborales actuales y competencias profesionales requeridas&nbsp; para formar a los profesionales y técnicos de la Prefectura Naval Argentina. El diseño curricular está basado en la consulta realizada sobre el perfil funcional a dieciséis dependencias de todo el país, seleccionadas por la diversidad de tareas específicas que desarrolla, además de la consulta a especialistas de primer nivel de cada área disciplinar, la participación de los docentes de esta Unidad Académica y la información brindada por egresados recientes que ya se encuentran integrados al ámbito laboral.</p>', '2020-09-30', 1, 31283575, '2020-11-23', ''),
(6, 'PRIMER JORNADA', 'SE REALIZÓ EL PRIMER ENCUENTRO EN EL MARCO DEL CICLO DE CONVERSATORIOS SOBRE LA PROBLEMÁTICA LABORAL EN EL SECTOR MARÍTIMO DESDE LA PERSPECTIVA DE GÉNERO ORGANIZADO POR LA SECRETARÍA DE EXTENSIÓN.', '<p>La presentación a cargo de Enrique A. Font, Rector del Instituto Universitario de Seguridad Marítima y contó con las siguientes exposiciones:<br></p><p><br></p><p class=\"sceditor-nlf\"> - <b>Sabrina Calandrón</b> - Subsecretaria de Derechos, Bienestar y Género del Ministerio de Seguridad de la Nación, Doctora en Antropología Social (UNSAM).<br><br><i>Desafíos en torno a la construcción de condiciones igualitarias de trabajo en las fuerzas de seguridad.</i><br><br>- <b>Romina Cutuli</b> - Doctora en Historia (UNMdP), Docente investigadora del CONICET y de la Universidad Nacional de Mar del Plata. Ha investigado los procesos de precarización laboral y las tensiones entre el trabajo remunerado en los sectores pesquero, textil y de casas particulares.<br><br><i>¿Ocupaciones masculinas y femeninas? Condicionantes de la segregación horizontal y vertical del trabajo en el sector pesquero.</i><br><br> - <b>María Emilia Di Scala</b> - Profesora Universitaria. Jefa de Guardavidas del sector Pta. Mogotes. Timonel. Miembro de la comisión de género de la CGT Regional Mar del Plata.<br><br><i style=\"\">Inserción laboral en ámbitos masculinizados.</i><br><br>\r\n\r\n<!--StartFragment--></p><p class=\"MsoNormal\" style=\"font-weight: 400; margin: 0cm 0cm 8pt; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; line-height: 15.6933px; font-size: 11pt; font-family: Calibri, sans-serif;\">Podes ver la grabación de la Primer Jornada \"Inclusión laboral con equidad de género\" en el siguiente enlace.<br><a href=\"https://www.youtube.com/watch?v=ycYTATGyPMQ&amp;feature=youtu.be\"><br>Primer Encuentro: La Problemática laboral en el Sector Marítimo desde la Perspectiva de Género.</a></p><p class=\"sceditor-nlf\"><br></p>', '2020-10-15', 1, 36626995, '2021-05-17', ''),
(7, 'SEGUNDA JORNADA', 'SE REALIZÓ EL PRIMER ENCUENTRO EN EL MARCO DEL CICLO DE CONVERSATORIOS SOBRE LA PROBLEMÁTICA LABORAL EN EL SECTOR MARÍTIMO DESDE LA PERSPECTIVA DE GÉNERO ORGANIZADO POR LA SECRETARÍA DE EXTENSIÓN.', '<p>La presentación a cargo de Enrique A. Font, Rector del Instituto Universitario de Seguridad Marítima y contó con las siguientes exposiciones:<br><br>- D<b>iego Cabello</b> - Director del Consultorio Jurídico Gratuito del Colegio de Abogados de Mar del Plata.<br><br><i>“Derechos laborales. Marco normativo, desafíos y oportunidades”</i></p><p><i><br></i>- <b>Paula Monteserín</b> - Coordinadora del Programa IGUALAR, dependiente de la Subsecretaría de Políticas de Igualdad del Ministerio de las Mujeres Géneros y Diversidad. <br><br><i>“Desafíos en torno a la implementación de marcos normativos inclusivos”</i><br><br>Podes ver la grabación de la Segunda Jornada “Marco normativo, derechos laborales y proyectos legislativos\" en el siguiente enlace.<br><br><a href=\"https://www.youtube.com/watch?v=19pV_xJKfys&amp;feature=youtu.be\">Segundo Encuentro: La Problemática laboral en el Sector Marítimo desde la Perspectiva de Género</a><br></p>', '2020-11-10', 1, 36626995, '2021-05-06', ''),
(8, 'CHROME NEWS', 'ALGO VA ACA', '<p>noticia con un buen texto</p>', '2022-01-01', 1, 28986308, '2022-08-23', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

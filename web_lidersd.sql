-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 14-02-2026 a las 16:58:18
-- Versión del servidor: 11.5.2-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_lidersd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admision`
--

DROP TABLE IF EXISTS `admision`;
CREATE TABLE IF NOT EXISTS `admision` (
  `idadmision` int(11) NOT NULL DEFAULT 1,
  `titulo` varchar(255) DEFAULT NULL,
  `cuerpo` longtext DEFAULT NULL,
  PRIMARY KEY (`idadmision`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `admision`
--

INSERT INTO `admision` (`idadmision`, `titulo`, `cuerpo`) VALUES
(1, 'PROCESO DE ADMISIÓN 2026', '<div>\r\n<h1>TITULO DE MATR&Iacute;CULArfff</h1>\r\n<div>\r\n<table style=\"border-collapse: collapse; width: 105.092%; height: 597.781px; border-width: 0px; border-style: none;\" border=\"1\"><colgroup><col style=\"width: 36.4738%;\" /><col style=\"width: 63.5262%;\" /></colgroup>\r\n<tbody>\r\n<tr style=\"height: 10px;\">\r\n<td style=\"border-width: 0px; text-align: justify; height: 597.781px;\" rowspan=\"2\">\r\n<div style=\"text-align: left;\"><br /><strong>PROCESO DE MAT&Iacute;CULA 2026</strong><br />&nbsp;<br />En el colegio Jacques Cousteau nos caracterizamos por nunca dejar de innovar.&nbsp;<br />Por eso renovamos nuestro compromiso para seguir ofreciendo experiencias significativas de aprendizajes a nuestros alumnos.</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div><strong>REQUISITOS:</strong></div>\r\n<div>\r\n<ul>\r\n<li>Certificado de Estudios.</li>\r\n<li>Ficha de Matr&iacute;cula con el c&oacute;digo del educando y del colegio.</li>\r\n<li>Boleta de Notas.&nbsp;</li>\r\n<li>Certificado no adeudo.&nbsp;</li>\r\n<li>Constancia de fecha de pagos.</li>\r\n<li>Copia de D.N.I del alumno. &nbsp;</li>\r\n<li>Copia del D.N.I de los padres.</li>\r\n</ul>\r\n</div>\r\n</td>\r\n<td style=\"border-width: 0px; height: 597.781px;\" rowspan=\"2\">\r\n<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.colegiojacquescousteau.edu.pe/public/img/galeria/Blue-And-Yellow-Bold-3d-Registration-Announcement-Instagram-Post.png\" width=\"455\" height=\"569\" /></div>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 587.781px;\"></tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div><strong>PAGOS:</strong></div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<table style=\"border-collapse: collapse; width: 55.5818%; height: 48px; border-color: #000000;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"background-color: #004fae; height: 24px; border-color: #000000;\">\r\n<td style=\"width: 29.669%; height: 24px; border-color: #000000; text-align: center;\"><span style=\"color: #ffffff;\">NIVEL</span></td>\r\n<td style=\"width: 32.8375%; text-align: center; height: 24px;\"><span style=\"color: #ffffff;\">MATR&Iacute;CULA</span></td>\r\n<td style=\"width: 37.4463%; height: 24px; text-align: center;\"><span style=\"color: #ffffff;\">PENSI&Oacute;N</span></td>\r\n</tr>\r\n<tr style=\"height: 24px;\">\r\n<td style=\"width: 29.669%; text-align: center; height: 24px;\">PRIMARIA - SECUNDARIA</td>\r\n<td style=\"width: 32.8375%; text-align: center; height: 24px;\">S/350.00</td>\r\n<td style=\"width: 37.4463%; text-align: center; height: 24px;\">S/500.00</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div>\r\n<div>&nbsp;</div>\r\n<div><strong>DEP&Oacute;SITOS:</strong></div>\r\n<ul>\r\n<li>BANCO DE&nbsp;CR&Eacute;DITO CTA. &nbsp;N&ordm;: 193-1081531-0-54&nbsp;</li>\r\n</ul>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (SOCIEDAD ECOLOGISTA JACQUES COUSTEAU)</div>\r\n<ul>\r\n<li>BANCO DE CR&Eacute;DITO C&Oacute;DIGO INTERBANCARIO (CCI) N&ordm;: 002-193-001081531054-14&nbsp;</li>\r\n</ul>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(SOCIEDAD ECOLOGISTA JACQUES COUSTEAU)</div>\r\n<div>&nbsp;</div>\r\n<div><em><strong>Pasado los 7 d&iacute;as no hay opci&oacute;n a devoluci&oacute;</strong></em><em><strong>n de dinero.</strong></em></div>\r\n<div>&nbsp;</div>\r\n<div>Tel&eacute;fonos: 348-1695 / 948886928</div>\r\n<div>E-mail: colegiocousteau2017@gmail.com</div>\r\n<div><strong>NOTA: Toda la documentaci&oacute;n deber&aacute; estar en una mica A4.</strong></div>\r\n<div>&nbsp;</div>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div style=\"text-align: center;\"><iframe src=\"../public/files/compromiso-padres.pdf\" width=\"100%\" height=\"720\" frameborder=\"0\"></iframe></div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL COMMENT 'TRIAL',
  `tipo` varchar(10) NOT NULL COMMENT 'TRIAL',
  `cuerpo` mediumtext DEFAULT NULL COMMENT 'TRIAL',
  `opciones` varchar(255) NOT NULL COMMENT 'TRIAL',
  `estado` varchar(1) DEFAULT NULL,
  `trial646` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `tipo`, `cuerpo`, `opciones`, `estado`, `trial646`) VALUES
(1, 'slider', '[{\"imagen\":\"http://admin-web-lidersd.com/public/img/banner/slider2.jpg\",\"enlace\":null,\"titulo\":null,\"detalle\":null},{\"imagen\":\"http://admin-web-lidersd.com/public/img/banner/slider1.jpg\",\"enlace\":null,\"titulo\":null,\"detalle\":null}]', '{\"fade\":true,\"dimensionar\":true,\"height\":\"100\",\"indicadores\":true,\"flechas\":true}', 'S', 'T'),
(2, 'video', 'https://www.youtube.com/embed/4jRZfDcWnlg', '{\"controls\":true,\"autoplay\":true,\"muted\":true,\"dimensionar\":false,\"youtube\":true}', 'N', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `idcatg` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL',
  `nombre` varchar(70) NOT NULL COMMENT 'TRIAL',
  `filtro` varchar(70) NOT NULL COMMENT 'TRIAL',
  `catpad` int(11) DEFAULT NULL COMMENT 'TRIAL',
  `fecreg` datetime DEFAULT NULL COMMENT 'TRIAL',
  `estado` char(1) DEFAULT 'A' COMMENT 'TRIAL',
  `trial652` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`idcatg`),
  UNIQUE KEY `idx_nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcatg`, `nombre`, `filtro`, `catpad`, `fecreg`, `estado`, `trial652`) VALUES
(1, 'Noticias', 'noticias', NULL, '2022-05-29 15:11:31', 'A', 'T'),
(2, 'Eventos', 'eventos', NULL, '2022-05-29 15:11:31', 'A', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_galerias`
--

DROP TABLE IF EXISTS `categorias_galerias`;
CREATE TABLE IF NOT EXISTS `categorias_galerias` (
  `idcatg` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo',
  `fecreg` datetime NOT NULL,
  PRIMARY KEY (`idcatg`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias_galerias`
--

INSERT INTO `categorias_galerias` (`idcatg`, `nombre`, `estado`, `fecreg`) VALUES
(1, 'Eventos', 'A', '2026-01-19 09:34:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `idemp` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL',
  `nombre` varchar(100) NOT NULL COMMENT 'TRIAL',
  `telefono` varchar(40) DEFAULT NULL COMMENT 'TRIAL',
  `celular` varchar(40) DEFAULT NULL COMMENT 'TRIAL',
  `direccion` varchar(220) DEFAULT NULL COMMENT 'TRIAL',
  `direccion2` varchar(255) DEFAULT NULL,
  `correo1` varchar(100) DEFAULT NULL COMMENT 'TRIAL',
  `correo2` varchar(100) DEFAULT NULL COMMENT 'TRIAL',
  `anio_admision` int(11) NOT NULL,
  `facebook` varchar(200) DEFAULT NULL COMMENT 'TRIAL',
  `whatsapp1` varchar(200) DEFAULT NULL COMMENT 'TRIAL',
  `whatsapp2` varchar(200) NOT NULL COMMENT 'TRIAL',
  `instagram` varchar(200) DEFAULT NULL COMMENT 'TRIAL',
  `youtube` varchar(200) DEFAULT NULL COMMENT 'TRIAL',
  `twitter` varchar(200) DEFAULT NULL COMMENT 'TRIAL',
  `linkedin` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `tiktok` varchar(255) DEFAULT NULL,
  `intranet` varchar(200) DEFAULT NULL COMMENT 'TRIAL',
  `liblink` varchar(200) DEFAULT NULL COMMENT 'TRIAL',
  `libmail` varchar(100) DEFAULT NULL COMMENT 'TRIAL',
  `libnume` int(11) DEFAULT NULL COMMENT 'TRIAL',
  `metades` varchar(255) DEFAULT NULL COMMENT 'TRIAL',
  `trial652` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`idemp`),
  UNIQUE KEY `idx_nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idemp`, `nombre`, `telefono`, `celular`, `direccion`, `direccion2`, `correo1`, `correo2`, `anio_admision`, `facebook`, `whatsapp1`, `whatsapp2`, `instagram`, `youtube`, `twitter`, `linkedin`, `tiktok`, `intranet`, `liblink`, `libmail`, `libnume`, `metades`, `trial652`) VALUES
(1, 'Colegio Santo Domingo El Líder', '1111', '111', 'Mz. N lote 4 Urbanización Los Ficus de Carabayllo, 5ta Etapa carabayllo', '', 'admision@lidersd.edu.pe', '', 2026, 'https://www.facebook.com/santodomingolider', '+51951352404', '', 'https://www.instagram.com/santodomingolider', 'https://www.youtube.com/@santodomingolider', '', '', 'https://www.tiktok.com/@santodomingolider', 'https://lidersd.cubicol.pe/principal/login', '', '', NULL, 'Colegio Santo Domingo El Líder en Carabayllo, Lima: educación integral y personalizada desde primaria hasta secundaria. Programas académicos, actividades extracurriculares, admisiones.', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `idgaleria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL',
  `idcatg` int(11) DEFAULT NULL,
  `titulo` varchar(150) NOT NULL COMMENT 'TRIAL',
  `detalle` varchar(270) DEFAULT NULL COMMENT 'TRIAL',
  `ncolum` int(11) DEFAULT NULL COMMENT 'TRIAL',
  `cuerpo` mediumtext DEFAULT NULL COMMENT 'TRIAL',
  `modo` char(1) DEFAULT 'A' COMMENT 'TRIAL',
  `portada` varchar(300) DEFAULT NULL COMMENT 'TRIAL',
  `fecreg` datetime DEFAULT NULL COMMENT 'TRIAL',
  `visible` char(1) DEFAULT 'N' COMMENT 'TRIAL',
  `trial656` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`idgaleria`),
  KEY `fk_galeria_categoria` (`idcatg`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idgaleria`, `idcatg`, `titulo`, `detalle`, `ncolum`, `cuerpo`, `modo`, `portada`, `fecreg`, `visible`, `trial656`) VALUES
(21, 1, 'Ceremonia de Inauguración', 'Ceremonia de Inauguración', 2, '[{\"id\":47030,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria1.jpg\",\"portada\":\"/public/img/galeria/galeria1.jpg\"},{\"id\":59876,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria2.jpg\",\"portada\":\"/public/img/galeria/galeria2.jpg\"},{\"id\":95391,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria3.jpg\",\"portada\":\"/public/img/galeria/galeria3.jpg\"},{\"id\":17642,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria4.jpg\",\"portada\":\"/public/img/galeria/galeria4.jpg\"},{\"id\":35116,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria5.jpg\",\"portada\":\"/public/img/galeria/galeria5.jpg\"},{\"id\":54877,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria6.jpg\",\"portada\":\"/public/img/galeria/galeria6.jpg\"},{\"id\":8172,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria7.jpg\",\"portada\":\"/public/img/galeria/galeria7.jpg\"},{\"id\":24936,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria8.jpg\",\"portada\":\"/public/img/galeria/galeria8.jpg\"},{\"id\":33463,\"tipo\":\"I\",\"content\":\"/public/img/galeria/galeria9.jpg\",\"portada\":\"/public/img/galeria/galeria9.jpg\"}]', 'A', 'http://admin-web-lidersd.com/public/img/galeria/galeria1.jpg', '2026-02-14 05:03:36', 'S', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `popup`
--

DROP TABLE IF EXISTS `popup`;
CREATE TABLE IF NOT EXISTS `popup` (
  `id` int(11) NOT NULL COMMENT 'TRIAL',
  `titulo` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `tipo` char(1) NOT NULL COMMENT 'TRIAL',
  `cuerpo` mediumtext DEFAULT NULL COMMENT 'TRIAL',
  `header` char(1) DEFAULT NULL COMMENT 'TRIAL',
  `margen` char(1) DEFAULT NULL COMMENT 'TRIAL',
  `slider` char(1) DEFAULT NULL COMMENT 'TRIAL',
  `animation` varchar(40) DEFAULT NULL COMMENT 'TRIAL',
  `visible` char(1) DEFAULT NULL COMMENT 'TRIAL',
  `trial656` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `popup`
--

INSERT INTO `popup` (`id`, `titulo`, `tipo`, `cuerpo`, `header`, `margen`, `slider`, `animation`, `visible`, `trial656`) VALUES
(1, 'demo', 'I', '<img src=\"/public/img/galeria/pop_up_01.jpg\" width=\"100%\">', 'N', 'N', 'N', 'animate__zoomIn', 'S', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portadas`
--

DROP TABLE IF EXISTS `portadas`;
CREATE TABLE IF NOT EXISTS `portadas` (
  `idportada` int(11) NOT NULL AUTO_INCREMENT,
  `pagina` varchar(100) NOT NULL COMMENT 'Identificador de la página',
  `nombre` varchar(150) NOT NULL COMMENT 'Nombre descriptivo',
  `imagen` varchar(300) DEFAULT NULL COMMENT 'URL de imagen',
  `titulo` varchar(200) DEFAULT NULL COMMENT 'Título de portada',
  `subtitulo` varchar(250) DEFAULT NULL COMMENT 'Subtítulo',
  `estado` char(1) DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo',
  `fecreg` timestamp NULL DEFAULT current_timestamp(),
  `fecact` datetime DEFAULT NULL,
  PRIMARY KEY (`idportada`),
  UNIQUE KEY `idx_pagina` (`pagina`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `portadas`
--

INSERT INTO `portadas` (`idportada`, `pagina`, `nombre`, `imagen`, `titulo`, `subtitulo`, `estado`, `fecreg`, `fecact`) VALUES
(1, 'historia', 'Historia', '/public/img/portadas/portada_interna.png', 'Reseña Histórica', '', 'A', '2026-01-14 21:21:14', '2026-01-21 09:14:57'),
(2, 'identidad', 'Identidad', '/public/img/portadas/portada_interna.png', 'Nuestra Identidad', '', 'A', '2026-01-14 21:21:14', '2026-01-16 16:33:49'),
(5, 'principios', 'Nuestros Principios', '/public/img/portadas/portada_interna.png', 'Propuesta Educativa', NULL, 'A', '2026-02-13 11:17:51', NULL),
(3, 'metodologia', 'Metodología', '/public/img/portadas/portada_interna.png', 'Metodología', '', 'A', '2026-01-14 21:21:14', '2026-01-21 11:49:02'),
(4, 'valores', 'Nuestros Valores', '/public/img/portadas/portada_interna.png', 'Nuestros Valores', '', 'A', '2026-01-19 15:11:54', '2026-01-19 12:22:56'),
(6, 'inicial', 'Nivel Inicial', '/public/img/portadas/portada_interna.png', 'Nivel Inicial', NULL, 'A', '2026-02-13 11:18:45', NULL),
(7, 'primaria', 'Nivel Primaria', '/public/img/portadas/portada_interna.png', 'Nivel Primaria', NULL, 'A', '2026-02-13 11:19:09', NULL),
(8, 'secundaria', 'Nivel Secundaria', '/public/img/portadas/portada_interna.png', 'Nivel Secundaria', NULL, 'A', '2026-02-13 11:19:30', NULL),
(9, 'comunicados', 'Comunicados', '/public/img/portadas/portada_interna.png', 'Publicaciones', NULL, 'A', '2026-02-13 11:19:56', NULL),
(10, 'galerias', 'Galerías', '/public/img/portadas/portada_interna.png', 'Galerías', NULL, 'A', '2026-02-13 11:21:21', NULL),
(11, 'admision', 'Admisión', '/public/img/portadas/portada_interna.png', 'Admisión', '', 'A', '2026-02-13 11:21:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE IF NOT EXISTS `publicacion` (
  `idpub` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL',
  `idcatg` int(11) NOT NULL COMMENT 'TRIAL',
  `titulo` varchar(280) NOT NULL COMMENT 'TRIAL',
  `tagname` varchar(330) NOT NULL COMMENT 'TRIAL',
  `portada` varchar(350) DEFAULT NULL COMMENT 'TRIAL',
  `detalle` varchar(250) DEFAULT NULL COMMENT 'TRIAL',
  `cuerpo` longtext DEFAULT NULL COMMENT 'TRIAL',
  `fecpub` datetime NOT NULL COMMENT 'TRIAL',
  `fecreg` datetime DEFAULT NULL COMMENT 'TRIAL',
  `visible` char(1) DEFAULT 'N' COMMENT 'TRIAL',
  `trial656` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`idpub`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`idpub`, `idcatg`, `titulo`, `tagname`, `portada`, `detalle`, `cuerpo`, `fecpub`, `fecreg`, `visible`, `trial656`) VALUES
(18, 1, 'Visitas Guiadas', 'visitas-guiadas', 'http://admin-web-lidersd.com/public/img/galeria/visitas_guiadas.jpg', '', '<div style=\"text-align: center;\"><video src=\"../../public/video/visitas.mp4\" controls=\"controls\" width=\"100%\" height=\"420\"></video></div>', '2025-12-09 17:53:00', NULL, 'S', NULL),
(19, 1, 'Matrícula 2026', 'matricula-2026', 'http://admin-web-lidersd.com/public/img/galeria/fachada.jpeg', '', '<div style=\"text-align: center;\"><iframe src=\"../../public/files/boletin2026.pdf\" width=\"100%\" height=\"720\" frameborder=\"0\"></iframe></div>', '2025-12-09 17:55:00', NULL, 'S', NULL),
(20, 1, 'Boletín Informativo', 'boletin-informativo', 'http://admin-web-lidersd.com/public/img/galeria/p-boletin.jpg', '', '<div style=\"text-align: center;\"><iframe src=\"../../public/files/boletin2026.pdf\" width=\"100%\" height=\"720\" frameborder=\"0\"></iframe></div>', '2025-12-09 17:56:00', NULL, 'S', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

DROP TABLE IF EXISTS `suscripciones`;
CREATE TABLE IF NOT EXISTS `suscripciones` (
  `idsuscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `nivel` varchar(20) DEFAULT NULL,
  `grado` varchar(10) DEFAULT NULL,
  `consulta` text DEFAULT NULL,
  `asunto` varchar(50) DEFAULT 'informes',
  `nombre_completo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_suscripcion` timestamp NULL DEFAULT current_timestamp(),
  `estado` enum('activo','inactivo') NOT NULL DEFAULT 'activo',
  `ip_registro` varchar(45) DEFAULT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  PRIMARY KEY (`idsuscripcion`),
  UNIQUE KEY `idx_correo_unique` (`correo`),
  KEY `idx_fecha_suscripcion` (`fecha_suscripcion`),
  KEY `idx_estado` (`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`idsuscripcion`, `nombres`, `apellidos`, `correo`, `nivel`, `grado`, `consulta`, `asunto`, `nombre_completo`, `email`, `fecha_suscripcion`, `estado`, `ip_registro`, `fecha_baja`) VALUES
(4, 'Axel', 'Molina', 'demo@demo.com', 'Primaria', '2do grado', 'sadsadasdsadasdasdasdasdasdasd', 'informes', 'Axel Molina', 'demo@demo.com', '2026-01-22 14:59:45', 'activo', '::1', NULL),
(5, 'Demo', 'demo', 'demo@demsssso.com', 'Inicial', '3 años', 'sadasdasdasdasdasdsadasdasda', 'informes', 'Demo demo', 'demo@demsssso.com', '2026-01-22 15:04:07', 'activo', '::1', NULL),
(6, 'ricardo', 'lujuria', 'luju@lujuria.com', 'Secundaria', '4to año', 'sdsadsadasdsadasdas', 'informes', 'ricardo lujuria', 'luju@lujuria.com', '2026-01-22 16:18:57', 'activo', '::1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT COMMENT 'TRIAL',
  `nombre` varchar(30) NOT NULL COMMENT 'TRIAL',
  `pass` varchar(250) NOT NULL COMMENT 'TRIAL',
  `fecreg` datetime DEFAULT NULL COMMENT 'TRIAL',
  `trial656` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `idx_nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci COMMENT='TRIAL';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `nombre`, `pass`, `fecreg`, `trial656`) VALUES
(101, 'admin', '$2y$10$DhfhM2fqBho3DZCMb79JIOWFjf8KNDfd8eGLU3g4N2djUjqX.9egi', '2022-05-29 15:11:31', 'T');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

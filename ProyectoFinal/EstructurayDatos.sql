-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2017 a las 16:42:48
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.2
-- Versión de PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yoursquare`
--
CREATE DATABASE IF NOT EXISTS `yoursquare` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `yoursquare`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comm_id` int(11) NOT NULL AUTO_INCREMENT,
  `comm_idSquare` int(11) NOT NULL,
  `comm_idCreator` int(11) NOT NULL,
  `comm_idUserSquare` int(11) NOT NULL,
  `comm_content` varchar(100) NOT NULL,
  `comm_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `comments`
--

TRUNCATE TABLE `comments`;
--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`comm_id`, `comm_idSquare`, `comm_idCreator`, `comm_idUserSquare`, `comm_content`, `comm_date`) VALUES
(45, 3, 19, 19, ' Me gusta tu comentario, toma tu like!', '2017-05-29 17:34:30'),
(46, 5, 19, 18, ' Toma tu like!', '2017-05-29 17:34:47'),
(53, 20, 18, 18, 'Primer comentario', '2017-05-31 02:58:09'),
(54, 20, 18, 18, 'Segundo comentario', '2017-05-31 02:58:17'),
(55, 18, 22, 22, 'comentario 1', '2017-06-01 16:07:23'),
(56, 20, 19, 22, 'Que bonito!', '2017-06-03 14:01:09'),
(57, 25, 19, 18, 'Me encanta la probé ayer!!', '2017-06-03 14:18:05'),
(58, 27, 18, 19, 'asd', '2017-06-03 23:55:25'),
(59, 13, 18, 18, 'ad', '2017-06-03 23:56:18'),
(60, 20, 19, 22, 'ada', '2017-06-04 08:48:26'),
(61, 35, 27, 26, 'Menuda tonteria! dislike!', '2017-06-04 16:06:57'),
(62, 31, 27, 25, 'Muy poco original!', '2017-06-04 16:07:24'),
(63, 25, 27, 18, 'Me supo fatal!!', '2017-06-04 16:07:46'),
(64, 13, 26, 18, 'Me gusta mucho', '2017-06-04 16:09:43'),
(65, 40, 18, 28, 'like aunque sea del madrid!', '2017-06-04 16:29:05'),
(66, 31, 31, 25, 'Creo que estoy enamorado', '2017-06-04 19:19:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments_thread`
--

DROP TABLE IF EXISTS `comments_thread`;
CREATE TABLE IF NOT EXISTS `comments_thread` (
  `commth_id` int(11) NOT NULL AUTO_INCREMENT,
  `commth_usr_id` int(11) NOT NULL,
  `commth_commId` int(11) NOT NULL,
  `commth_content` varchar(100) NOT NULL,
  `commth_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `comments_thread`
--

TRUNCATE TABLE `comments_thread`;
--
-- Volcado de datos para la tabla `comments_thread`
--

INSERT INTO `comments_thread` (`commth_id`, `commth_usr_id`, `commth_commId`, `commth_content`, `commth_date`) VALUES
(18, 22, 53, 'Primera respuesta', '2017-05-31 02:58:38'),
(19, 22, 54, '2 respuesta', '2017-05-31 02:58:44'),
(20, 18, 53, ' segunda respuesta', '2017-05-31 02:59:04'),
(21, 18, 54, '3 respuesta', '2017-05-31 02:59:14'),
(22, 22, 55, 'respuesta 1', '2017-06-01 16:07:34'),
(27, 22, 57, 'me alegra!!', '2017-06-04 09:30:56'),
(28, 31, 58, 'fds', '2017-06-04 19:30:39'),
(29, 32, 65, 'El año que viene ganaremos!', '2017-06-05 09:04:03'),
(30, 32, 66, 'Love!', '2017-06-05 09:45:41'),
(31, 32, 59, 'Cocinar! Arggg', '2017-06-05 09:46:19'),
(32, 32, 64, 'A mi no!', '2017-06-05 09:46:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `following`
--

DROP TABLE IF EXISTS `following`;
CREATE TABLE IF NOT EXISTS `following` (
  `foll_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id` int(11) NOT NULL,
  `usr_id_following` int(11) NOT NULL,
  PRIMARY KEY (`foll_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `following`
--

TRUNCATE TABLE `following`;
--
-- Volcado de datos para la tabla `following`
--

INSERT INTO `following` (`foll_id`, `usr_id`, `usr_id_following`) VALUES
(1, 22, 18),
(3, 21, 19),
(4, 19, 23),
(5, 19, 22),
(6, 18, 24),
(7, 18, 19),
(8, 26, 18),
(9, 22, 28),
(10, 18, 26),
(11, 18, 29),
(12, 22, 29),
(13, 22, 19),
(14, 30, 22),
(16, 31, 18),
(17, 31, 19),
(18, 31, 20),
(19, 31, 21),
(20, 31, 22),
(21, 31, 25),
(22, 31, 26),
(23, 31, 29),
(24, 31, 27),
(25, 24, 19),
(26, 29, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `men_mensajeid` int(11) NOT NULL AUTO_INCREMENT,
  `men_receptorid` int(11) DEFAULT NULL,
  `men_emisorid` int(11) DEFAULT NULL,
  `men_subject` varchar(100) DEFAULT NULL,
  `men_body` longtext,
  `men_tipo` varchar(45) DEFAULT NULL,
  `men_createdate` datetime DEFAULT CURRENT_TIMESTAMP,
  `men_abierto` int(11) DEFAULT NULL,
  PRIMARY KEY (`men_mensajeid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `mensajes`
--

TRUNCATE TABLE `mensajes`;
--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`men_mensajeid`, `men_receptorid`, `men_emisorid`, `men_subject`, `men_body`, `men_tipo`, `men_createdate`, `men_abierto`) VALUES
(1, 2, 1, 'Prueba1', 'Prueba1', 'entrada', '2017-05-21 17:03:13', 1),
(2, 18, 22, 'asunto 1', 'mensaje 1', 'entrada', '2017-06-01 16:13:49', 1),
(3, 19, 22, 'asunto 2', 'mensaje 2', 'entrada', '2017-06-01 17:40:36', 1),
(4, 19, 22, 'asunto 3', 'mensaje 3', 'entrada', '2017-06-01 17:42:27', 1),
(5, 25, 26, 'Hola!', 'eyy! me gustan mucho tus squares! cuidate!', 'entrada', '2017-06-04 16:06:17', NULL),
(6, 27, 18, 'Aviso', 'Por favor deja de hatear o te tendré que banear!!', 'entrada', '2017-06-04 16:08:29', NULL),
(7, 18, 22, 'Admin', 'Hola admin! porfavor podrías banear a el usuario hater!', 'entrada', '2017-06-04 17:11:28', NULL),
(8, 22, 18, 'hater', 'Hola maria\r\nLe he avisado muchas gracias por tu aviso!', 'entrada', '2017-06-04 17:12:16', NULL),
(9, 18, 31, 'Hola', 'HeYYYY', 'entrada', '2017-06-05 16:03:33', 1),
(10, 22, 30, 'NJHUHJN', 'HGGUYJGBFHFHHFHGFTH', 'entrada', '2017-06-05 16:03:59', 1),
(11, 18, 32, 'Opinión sobre yoursquare', 'Hola! Me encanta esta aplicación web, deberíais tener un 10!', 'entrada', '2017-06-05 16:05:35', 1),
(12, 32, 18, 'Re:opinión sobre yoursquare', 'Gracias! Esperamos tener un 10!', 'entrada', '2017-06-05 16:07:03', 1),
(13, 18, 30, 'Prueba de mensaje', 'HOLA\r\n\r\n\r\n\r\nADIOS', 'entrada', '2017-06-05 16:10:33', NULL),
(14, 22, 30, 'Maria WHYYY', 'WHYYYYYYY', 'entrada', '2017-06-05 16:10:58', NULL),
(15, 26, 31, 'Para Dominik', 'Hey dominik', 'entrada', '2017-06-05 16:11:27', NULL),
(16, 18, 30, 'oscar whyy', 'WHYYYY', 'entrada', '2017-06-05 16:11:29', NULL),
(17, 22, 31, 'Para Maria', 'Hola maria', 'entrada', '2017-06-05 16:11:45', NULL),
(18, 25, 31, 'Para Pablo_capa', 'HEYYY Pablo', 'entrada', '2017-06-05 16:12:13', NULL),
(19, 29, 31, 'Para Jimena', 'Jimena', 'entrada', '2017-06-05 16:12:32', NULL),
(20, 31, 22, 'Para Xuebo', 'HEYYY', 'entrada', '2017-06-05 16:13:30', NULL),
(21, 31, 28, 'Para Xuebo', 'HEEGE', 'entrada', '2017-06-05 16:14:42', NULL),
(22, 27, 28, 'Para Hater', 'Hater', 'entrada', '2017-06-05 16:15:01', NULL),
(23, 28, 27, 'Para Carmen', 'asf', 'entrada', '2017-06-05 16:15:49', NULL),
(24, 29, 20, 'jimena', 'hola', 'entrada', '2017-06-05 16:19:44', NULL),
(25, 20, 29, 'prueba', 'toma prueba', 'entrada', '2017-06-05 16:20:21', NULL),
(26, 21, 20, 'para prueba2 de prueba', 'toma pruebaso', 'entrada', '2017-06-05 16:21:30', NULL),
(27, 32, 21, 'messi', 'messi balon de oro', 'entrada', '2017-06-05 16:21:58', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relatedtags`
--

DROP TABLE IF EXISTS `relatedtags`;
CREATE TABLE IF NOT EXISTS `relatedtags` (
  `retag_relatedtagid` int(11) NOT NULL AUTO_INCREMENT,
  `retag_tagid` int(11) DEFAULT NULL,
  `retag_squareid` int(11) DEFAULT NULL,
  PRIMARY KEY (`retag_relatedtagid`),
  KEY `tag_idx` (`retag_tagid`),
  KEY `user_idx` (`retag_squareid`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `relatedtags`
--

TRUNCATE TABLE `relatedtags`;
--
-- Volcado de datos para la tabla `relatedtags`
--

INSERT INTO `relatedtags` (`retag_relatedtagid`, `retag_tagid`, `retag_squareid`) VALUES
(19, 3, 10),
(20, 1, 13),
(21, 1, 15),
(22, 1, 15),
(23, 2, 16),
(24, 4, 16),
(25, 3, 16),
(26, 1, 15),
(27, 2, 15),
(28, 5, 17),
(29, 2, 17),
(30, 6, 17),
(31, 7, 17),
(32, 3, 18),
(33, 1, 18),
(34, 8, 18),
(35, 5, 18),
(51, 5, 20),
(52, 9, 20),
(53, 10, 20),
(54, 5, 20),
(55, 9, 20),
(56, 10, 20),
(57, 5, 20),
(58, 9, 20),
(59, 10, 20),
(60, 5, 20),
(61, 9, 20),
(62, 10, 20),
(63, 5, 20),
(64, 9, 20),
(65, 10, 20),
(66, 5, 20),
(67, 9, 20),
(68, 10, 20),
(69, 5, 20),
(70, 9, 20),
(71, 10, 20),
(72, 5, 20),
(73, 9, 20),
(74, 10, 20),
(75, 12, 25),
(76, 12, 25),
(77, 13, 25),
(78, 14, 25),
(79, 15, 25),
(80, 13, 25),
(81, 14, 25),
(82, 15, 25),
(83, 1, 27),
(84, 2, 15),
(85, 1, 15),
(88, 4, 31),
(89, 16, 33),
(90, 17, 35),
(91, 18, 38),
(92, 18, 38),
(93, 19, 40),
(94, 5, 44),
(95, 1, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `square`
--

DROP TABLE IF EXISTS `square`;
CREATE TABLE IF NOT EXISTS `square` (
  `sq_squareid` int(11) NOT NULL AUTO_INCREMENT,
  `sq_createdate` datetime DEFAULT NULL,
  `sq_updatedate` datetime DEFAULT NULL,
  `sq_usersession` varchar(50) DEFAULT NULL,
  `sq_userid` int(11) DEFAULT NULL,
  `sq_csscontent` longtext,
  `sq_htmlcontent` longtext,
  `sq_description` varchar(255) DEFAULT NULL,
  `sq_title` varchar(150) DEFAULT NULL,
  `sq_likes` int(11) DEFAULT NULL,
  `sq_dislikes` int(11) DEFAULT NULL,
  `sq_image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sq_squareid`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `square`
--

TRUNCATE TABLE `square`;
--
-- Volcado de datos para la tabla `square`
--

INSERT INTO `square` (`sq_squareid`, `sq_createdate`, `sq_updatedate`, `sq_usersession`, `sq_userid`, `sq_csscontent`, `sq_htmlcontent`, `sq_description`, `sq_title`, `sq_likes`, `sq_dislikes`, `sq_image`) VALUES
(10, '2017-05-29 22:06:56', '2017-05-29 23:16:18', '', 20, NULL, '<div id="wrapper-square" class="bambu">             <div id="dropzone">              <h2 class="draggable Medium Medium-partial" contenteditable="true" data-x="170" data-y="60" style="transform: translate(170px, 60px); color: rgb(86, 41, 255);">Header 2</h2><p class="Medium Medium-partial draggable" contenteditable="true" data-x="93" data-y="112" style="width: 259.641px; height: 22px; transform: translate(93px, 112px); font-family: Calibri; font-size: 23px; color: rgb(9, 0, 9);">Tiene muchisimo mas texto</p></div>         </div>', NULL, NULL, NULL, NULL, NULL),
(11, '2017-05-29 23:18:44', '2017-06-03 13:42:51', '', 21, NULL, '<div id="wrapper-square" class="montanas">             <div id="dropzone">              <h1 class="medium medium-partial draggable" contenteditable="true" data-x="180" data-y="29" style="transform: translate(180px, 29px);">el viaje al monte</h1><p class="medium medium-partial draggable" contenteditable="true" data-x="24" data-y="36" style="width: 142.641px; height: 24px; transform: translate(24px, 36px);">el otro día me fuí a la montaña :)&nbsp;</p></div>         </div>', 'viaje a la montaña', 'viaje a las montañas', NULL, NULL, 'square_11.png'),
(13, '2017-05-30 16:34:35', '2017-05-30 17:34:05', NULL, 18, NULL, '<div id="wrapper-square" class="montanas">             <div id="dropzone">              <h3 class="Medium Medium-partial draggable" contenteditable="true" data-x="151" data-y="37" style="transform: translate(151px, 37px); color: rgb(255, 42, 210);">La Cocina y sus virtudes</h3><p class="Medium Medium-partial draggable" contenteditable="true" data-x="131" data-y="138" style="transform: translate(131px, 138px); font-size: 22px; color: rgb(55, 29, 255);">Cuando cocinas eres libre</p></div>         </div>', 'Breve descripción', 'Cocinar es un placer', 2, NULL, 'square_13.png'),
(15, '2017-05-30 18:30:47', '2017-06-03 19:19:41', '', 22, NULL, '<div id="wrapper-square" class="bambu">             <div id="dropzone">              <h1 class="draggable medium medium-partial" contenteditable="true" data-x="198" data-y="85" style="transform: translate(198px, 85px);">header 1</h1><p class="draggable medium medium-partial" contenteditable="true" data-x="209" data-y="176" style="transform: translate(209px, 176px);">parrafo</p></div>         </div>', 'descripción editada', 'nuevo título editado', 2, NULL, 'square_15.png'),
(16, '2017-05-31 22:34:10', '2017-05-31 22:35:43', NULL, 22, NULL, '<div id="wrapper-square" class="mar">\n            <div id="dropzone">\n\n            <h3 class="Medium Medium-partial draggable" contenteditable="true" data-x="195" data-y="35" style="transform: translate(195px, 35px); font-family: Calibri; color: rgb(55, 255, 138);">Mí poesía con su título</h3><p class="Medium Medium-partial draggable" contenteditable="true" data-x="92" data-y="138" style="width: 299.641px; height: 22px; transform: translate(92px, 138px);">mucho texto dentro del square para poesía</p></div>\n        </div>', 'descripción poesía', 'este va de poesía', NULL, NULL, 'square_16.png'),
(17, '2017-05-31 23:40:58', '2017-06-01 01:55:37', NULL, 22, NULL, '<div id="wrapper-square" class="montanas">\n            <div id="dropzone">\n\n            <h1 class="Medium Medium-partial draggable" contenteditable="true" data-x="100" data-y="34" style="transform: translate(100px, 34px); color: rgb(243, 255, 32);">El amanecer en las montañas</h1><p class="Medium Medium-partial draggable" contenteditable="true" data-x="63" data-y="60" style="width: 408.641px; height: 24px; transform: translate(63px, 60px); color: rgb(255, 88, 74); font-family: Calibri; font-size: 17px;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p></div>\n        </div>', 'Un breve resumen del paso del alaba en las montañas', 'Cuando el alba', NULL, NULL, 'square_17.png'),
(18, '2017-06-01 15:20:34', '2017-06-01 15:24:43', NULL, 22, NULL, '<div id="wrapper-square" class="bosque">\n            <div id="dropzone">\n\n            <h1 class="Medium Medium-partial draggable" contenteditable="true" data-x="171" data-y="39" style="transform: translate(171px, 39px); color: rgb(237, 255, 232);">Me encanta los animales</h1><p class="Medium Medium-partial draggable" contenteditable="true" data-x="143" data-y="129" style="transform: translate(143px, 129px); color: rgb(255, 21, 24);">Animaaaaaaaaaaaaaaaales<p style="color: rgb(255, 15, 32);">cuanto me gustan</p></p></div>\n        </div>', 'sin descripción', 'Edición por Xuebo', 2, NULL, 'square_18.png'),
(19, '2017-06-01 16:04:40', '2017-06-01 16:30:41', 'fa8dkb12dai2bqnchq43hapbq1', NULL, NULL, '<div id="wrapper-square" class="bosque">\n            <div id="dropzone">\n\n            </div>\n        </div>', NULL, NULL, NULL, NULL, NULL),
(20, '2017-06-01 16:11:04', '2017-06-03 12:37:00', NULL, 22, NULL, '<div id="wrapper-square" class="montanas">             <div id="dropzone">              <h1 class="medium medium-partial draggable" contenteditable="true" data-x="191" data-y="29" style="transform: translate(191px, 29px); color: rgb(255, 170, 7);">en la cima</h1><p class="medium medium-partial draggable" contenteditable="true" data-x="40" data-y="281" style="transform: translate(40px, 281px); color: rgb(210, 53, 255); font-size: 22px;">en la cima de las montañas me siento relajado,</p><p>&nbsp;espiritual, conectando con el cielo</p><p></p></div>         </div>', 'pensamiento propio', 'en la cima', 4, NULL, 'square_20.png'),
(21, '2017-06-02 18:35:48', '2017-06-02 18:35:48', '16r9gmjeqhv135i7e7lmomssd2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2017-06-02 19:07:47', '2017-06-02 19:07:47', '49s4n089sp7n9tho5d58arkbj0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2017-06-03 14:03:24', '2017-06-03 14:03:24', '33dvbiedndl5peuimhq5b1k916', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2017-06-03 14:11:10', '2017-06-03 14:16:58', NULL, 18, NULL, '<div id="wrapper-square" class="bambu">             <div id="dropzone">              <h1 class="medium medium-partial draggable" style="transform: translate(90px, 34px); width: 287px; height: 33px;" data-x="90" data-y="34" contenteditable="true">tarta de chocolate<br></h1><p class="medium medium-partial draggable" style="transform: translate(14px, 46px); width: 473px; height: 23px;" data-x="14" data-y="46" contenteditable="true">150 gramos de mantequilla<br>150 gramos de chocolate<br>fundirlos<br>2 yemas de huevo<br>150 gramos de azúcar<br>mezclar con el chocolate y la mantequilla<br>150 gramos de harina<br>2 claras montadas<br>mezclarlas tamizando la harina<br><br>45 minutos a 180ºc<br>disfrutad!<br></p></div>         </div>', 'mi receta favorita!', 'tarta de chocolate', 3, 1, 'square_25.png'),
(27, '2017-06-03 14:18:09', '2017-06-03 14:24:22', NULL, 19, NULL, '<div id="wrapper-square" class="bosque">\n            <div id="dropzone">\n\n            <p class="medium medium-partial draggable" style="color: rgb(255, 255, 255); transform: translate(0px, 76px);" data-x="0" data-y="76" contenteditable="true"></p><p class="medium medium-partial draggable" style="color: rgb(255, 255, 255); width: 258px; height: 86px; transform: translate(136px, 68px);" data-x="136" data-y="68" contenteditable="true">sangre que no se desborda,&nbsp;&nbsp;&nbsp; juventud que no se atreve,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ni es sangre,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ni es juventud,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ni relucen,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ni florecen.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cuerpos que nacen vencidos, vencidos y grises mueren:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vienen con la edad de un siglo,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; y son viejos cuando vienen.<br></p><p class="medium medium-partial draggable" style="transform: translate(155px, 199px); width: 185px; height: 62px;" data-x="155" data-y="199" contenteditable="true"><p style="color: rgb(255, 255, 255);">miguel hernández</p><p> <br></p></p></div>\n        </div>', 'mi poema favorito', 'llamo a la juventud', 5, 3, 'square_27.png'),
(29, '2017-06-03 19:19:56', '2017-06-03 19:19:56', '78krhmamvugqgol0a2fd1h0ed1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2017-06-03 23:53:58', '2017-06-03 23:54:01', NULL, 19, NULL, '<div id="wrapper-square" class="amor">\n            <div id="dropzone">\n\n            </div>\n        </div>', NULL, NULL, NULL, NULL, NULL),
(31, '2017-06-04 13:32:56', '2017-06-04 13:35:50', NULL, 25, NULL, '<div id="wrapper-square" class="amor">             <div id="dropzone">              <h1 class="draggable medium medium-partial" contenteditable="true">header 1</h1><h2 class="draggable medium medium-partial" contenteditable="true">header 2</h2><p style="font-weight: bold; transform: translate(177px, -18px);" class="medium medium-partial draggable" contenteditable="true" data-x="177" data-y="-18">hola que tal</p></div>         </div>', 'este es mi primer square', 'primer square sobre infor', 9, 1, 'square_31.png'),
(32, '2017-06-04 13:35:59', '2017-06-04 13:35:59', NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '2017-06-04 15:58:50', '2017-06-04 16:02:08', NULL, 26, NULL, '<div id="wrapper-square" class="papiro">\n            <div id="dropzone">\n\n            <h1 class="medium medium-partial draggable" style="transform: translate(135px, 80px); width: 274px; height: 35px;" data-x="135" data-y="80" contenteditable="true"><p>&nbsp;busqueda binaria<br></p></h1><p class="medium medium-partial draggable" style="transform: translate(0px, 122px); width: 481px; height: 23px;" data-x="0" data-y="122" contenteditable="true"><p>int binarysearch(int arr[], int l, int r, int x){   if (r &gt;= l)   {        int mid = l + (r - l)/2;         // if the element is present at the middle itself        if (arr[mid] == x)  return mid;         // if element is smaller than mid, then it can only be present        // in left subarray        if (arr[mid] &gt; x) return binarysearch(arr, l, mid-1, x);         // else the element can only be present in right subarray        return binarysearch(arr, mid+1, r, x);   }    // we reach here when element is not present in array   return -1;}<br></p></p></div>\n        </div>', 'un algoritmo de busqueda binariia', 'busqueda binaria', 6, NULL, 'square_33.png'),
(35, '2017-06-04 16:04:19', '2017-06-04 16:05:39', NULL, 26, NULL, '<div id="wrapper-square" class="mar">\n            <div id="dropzone">\n\n            <h1 class="medium medium-partial draggable" style="transform: translate(0px, 70px);" data-x="0" data-y="70" contenteditable="true">lisp es el mejor lenguaje porque....<br></h1><h2 class="medium medium-partial draggable" style="transform: translate(0px, 208px);" data-x="0" data-y="208" contenteditable="true"><p>(((((los parentesis molan))))) <br></p></h2></div>\n        </div>', 'porque lisp es el mejor lenguaje de programación', 'lisp es lo mejor', NULL, 1, 'square_35.png'),
(36, '2017-06-04 16:07:30', '2017-06-04 16:07:30', NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '2017-06-04 16:10:11', '2017-06-04 16:10:11', NULL, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '2017-06-04 16:13:56', '2017-06-04 16:16:44', '', 29, NULL, '<div id="wrapper-square" class="flores">             <div id="dropzone">              <h2 class="draggable medium medium-partial" style="color: rgb(199, 38, 38);" contenteditable="true">header 2</h2><h3 class="draggable medium medium-partial" style="transform: translate(0px, 84px); color: rgb(38, 199, 60);" data-x="0" data-y="84" contenteditable="true">header 3</h3><h2 class="draggable medium medium-partial" style="transform: translate(248px, 89px); width: 250px; height: 33px; font-family: times roman; color: rgb(199, 38, 39);" data-x="248" data-y="89" contenteditable="true">header 2</h2><h1 class="draggable medium medium-partial" style="transform: translate(267px, 204px); width: 231px; height: 31px; color: rgb(199, 188, 38); font-size: 25px; font-family: calibri;" data-x="267" data-y="204" contenteditable="true">header 1</h1></div>         </div>', 'soy una artista', 'arte', NULL, NULL, 'square_38.png'),
(39, '2017-06-04 16:17:01', '2017-06-04 16:17:01', NULL, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, '2017-06-04 16:17:30', '2017-06-04 16:19:21', NULL, 28, NULL, '<div id="wrapper-square" class="futbol">\n            <div id="dropzone">\n\n            <h1 class="draggable medium medium-partial" style="transform: translate(16px, 15px); width: 83px; height: 33px; color: rgb(233, 25, 25);" data-x="16" data-y="15" contenteditable="true">header 1</h1><h1 class="draggable medium medium-partial" style="width: 162px; height: 33px; transform: translate(138px, -43px); color: rgb(255, 255, 255);" data-x="138" data-y="-43" contenteditable="true">header 1</h1><h1 class="draggable medium medium-partial" style="width: 119px; height: 33px; transform: translate(302px, -99px); color: rgb(251, 3, 3);" data-x="302" data-y="-99" contenteditable="true">header 1</h1><h3 class="medium medium-partial draggable" contenteditable="true"><p>soy del atleti!</p><p> <br></p></h3></div>\n        </div>', 'me encanta el atletico de madrid', 'atletico <3', 5, 2, 'square_40.png'),
(41, '2017-06-04 16:19:32', '2017-06-04 16:19:32', NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '2017-06-04 17:31:59', '2017-06-04 17:31:59', NULL, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '2017-06-04 17:40:28', '2017-06-04 17:40:28', '3cvedsemejrnun52cdokmin680', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '2017-06-04 17:53:05', '2017-06-04 17:54:35', NULL, 30, NULL, '<div id="wrapper-square" class="montanas">\n            <div id="dropzone">\n\n            <h1 class="medium medium-partial draggable" style="transform: translate(0px, 4px);" data-x="0" data-y="4" contenteditable="true">montaÑas<br></h1><p style="font-style: italic; transform: translate(0px, 196px);" class="medium medium-partial draggable" data-x="0" data-y="196" contenteditable="true">cursiva cursiva<br></p></div>\n        </div>', 'montañas, a quien no le gustan?', 'montañas altas', NULL, NULL, 'square_44.png'),
(45, '2017-06-04 19:26:59', '2017-06-04 19:29:07', NULL, 31, NULL, '<div id="wrapper-square" class="musica">\n            <div id="dropzone">\n\n            <h1 class="medium medium-partial draggable" contenteditable="true" data-x="181" data-y="17" style="transform: translate(181px, 17px);">hola chavales</h1><p class="medium medium-partial draggable" contenteditable="true" data-x="156.640625" data-y="27" style="width: 182px; height: 24px; transform: translate(156.641px, 27px);"><p>había una vez</p><p>un barquito chiquitito</p><p>que no quería</p><p>y que no quería</p><p>caminar.</p></p></div>\n        </div>', 'barquito', 'hola mundo', NULL, NULL, 'square_45.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tag_tagid` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tag_tagid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `tags`
--

TRUNCATE TABLE `tags`;
--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`tag_tagid`, `tag_name`) VALUES
(1, 'poesia'),
(2, 'arte'),
(3, 'filosofía'),
(4, 'amor'),
(5, 'montañas'),
(6, 'alba'),
(7, 'cielo despejado'),
(8, 'animales'),
(9, 'cielo'),
(10, 'espiritual'),
(11, 'viaje montaña'),
(12, 'codigo code programación'),
(13, 'cocina'),
(14, ' chocolate'),
(15, ' tarta'),
(16, 'codigo programacion algoritmo'),
(17, 'programación lisp'),
(18, 'arte colores'),
(19, 'futbol atleti');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_usuario` varchar(50) DEFAULT NULL,
  `usr_password` varchar(255) DEFAULT NULL,
  `usr_es_admin` int(11) DEFAULT NULL,
  `usr_email` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usr_pais` varchar(20) NOT NULL,
  `usr_registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_avatar` varchar(30) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_usuario`, `usr_password`, `usr_es_admin`, `usr_email`, `usr_pais`, `usr_registration_date`, `usr_avatar`) VALUES
(18, 'oscarval', '$2y$10$QX6GOjy//5zGBrWRlzFo5.0coMZ7sCjcuC3/d7sLjMFnZJcgyoao6', 1, 'oscarval@ucm.es', 'España', '2017-05-29 17:24:42', '../img/avatar/images.jpg'),
(19, 'pablo', '$2y$10$v/aU1D7gpP.CbGmxiCF1QOb11VFCAWyNZncmW.506cSf4Hx7B8peG', 0, 'pablo@ucm.es', 'España', '2017-05-29 17:32:08', '../img/avatar/index.jpg'),
(20, 'prueba', '$2y$10$kpjL8oYg.Au3C/aWCWF0a.bXjXWHXPWP.nI6mXJDfVKaWy0pjbB3u', 0, 'prueba@gmail.com', 'españa', '2017-05-29 23:16:18', '../img/avatar/avatar_man.png'),
(21, 'prueba2', '$2y$10$iB2gi82ikfMqjo9pKfEwjeQhDntom.LQ5GmwaZdDTRs2gNgTo30lS', 0, 'prueba2@gmail.com', 'españa', '2017-05-30 00:34:56', '../img/avatar/avatar_none.png'),
(22, 'maria', '$2y$10$98kUo.WJUBPhLqJcVYtX/.jbpz9ZlmJKBI9JlJ0X9i.Z6GDV8kRG2', 0, 'maria@gmail.com', 'eeuu', '2017-05-31 22:32:17', '../img/avatar/xz.jpg'),
(24, 'pedro123', '$2y$10$WBE6eoTbvS1si.qn1wUUs.Q.xpOF3LlIHfpJJZMuL6mOzMJ2Xf8pi', 0, 'pedro123@gmail.com', 'España', '2017-06-03 17:59:12', '../img/avatar/avatar_man.png'),
(25, 'pablo_capa', '$2y$10$GfuXT5ck5StlKCMNAwE9Z.RCNG8rshou7TbUQG9QmhNcFNuMT5m62', 0, 'pablo.i@gmail.com', 'Ecuador', '2017-06-04 13:32:25', '../img/avatar/avatar_man.png'),
(26, 'Dominik', '$2y$10$u7zgUvqm/oOz5fCHSYMvJeTW03dUUCUFpQ3fz3xLjpcQv8iuqlKAq', 0, 'sdl@dalsj.com', 'Suiza', '2017-06-04 15:58:39', '../img/avatar/asdsal.jpg'),
(27, 'hater', '$2y$10$kLszLfQh4CChgW5uLlFt..Z3y6rTFSWSiOkyo8ZdmB0xQcrMxfdlW', 0, 'asdj@djl.com', 'haterlandia', '2017-06-04 16:06:40', '../img/avatar/trump.jpg'),
(28, 'carmen', '$2y$10$KLIHP5LmOu7OPUWYBFTRY.hsazk8m0ca9kVbijJSOE/VHvqUgvXHS', 0, 'sda@dsj.com', 'Argentina', '2017-06-04 16:13:28', '../img/avatar/gandalf.jpeg'),
(29, 'jimena', '$2y$10$gdBAxFQOnWVRN65/FTqkLu6MZ8D26oF4s1c417HLaDEPs9cAiusoq', 0, 's@sdj.com', 'Chile', '2017-06-04 16:16:43', '../img/avatar/test-kittie.jpg'),
(30, 'PruebaPrueba', '$2y$10$gdxliKwugcuCM4ftn4VqQuawj1wHy5uHSvBnoeo./F3ccR6HGNCsO', 0, 'Prueba@ucm.es', 'Francia', '2017-06-04 17:51:31', '../img/avatar/avatar_man.png'),
(31, 'xuebozhu', '$2y$10$LarBkcrWQBhoHfWGMP4wA.axyxEjgix3c0fHKqtz/rFtZwA8NNpbS', 0, 'xuebozhu@ucm.es', 'España', '2017-06-04 19:19:09', '../img/avatar/avatar_man.png'),
(32, 'Messi', '$2y$10$ScXneHS8XNFXdS6WEsyzlel1qIM8zETeL4pBsZCaz55sz4JEDpmjy', 0, 'messi@ucm.es', 'Argentina', '2017-06-05 09:02:55', '../img/avatar/15167.png');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vmensajes`
--
DROP VIEW IF EXISTS `vmensajes`;
CREATE TABLE IF NOT EXISTS `vmensajes` (
`men_mensajeid` int(11)
,`men_receptorid` int(11)
,`men_emisorid` int(11)
,`men_subject` varchar(100)
,`men_body` longtext
,`men_tipo` varchar(45)
,`men_createdate` datetime
,`men_abierto` int(11)
,`receptor` varchar(50)
,`emisor` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vrelatedtagshot`
--
DROP VIEW IF EXISTS `vrelatedtagshot`;
CREATE TABLE IF NOT EXISTS `vrelatedtagshot` (
`retag_squareid` int(11)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vsquareadmin`
--
DROP VIEW IF EXISTS `vsquareadmin`;
CREATE TABLE IF NOT EXISTS `vsquareadmin` (
`sq_squareid` int(11)
,`sq_createdate` datetime
,`sq_updatedate` datetime
,`sq_usersession` varchar(50)
,`sq_userid` int(11)
,`sq_htmlcontent` longtext
,`sq_description` varchar(255)
,`sq_title` varchar(150)
,`sq_likes` int(11)
,`sq_dislikes` int(11)
,`usr_id` int(11)
,`usr_usuario` varchar(50)
,`usr_password` varchar(255)
,`usr_es_admin` int(11)
,`sq_image` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vsquaredetails`
--
DROP VIEW IF EXISTS `vsquaredetails`;
CREATE TABLE IF NOT EXISTS `vsquaredetails` (
`sq_squareid` int(11)
,`sq_createdate` datetime
,`sq_updatedate` datetime
,`sq_usersession` varchar(50)
,`sq_userid` int(11)
,`sq_htmlcontent` longtext
,`sq_description` varchar(255)
,`sq_title` varchar(150)
,`sq_likes` int(11)
,`sq_dislikes` int(11)
,`usr_id` int(11)
,`usr_usuario` varchar(50)
,`usr_password` varchar(255)
,`usr_es_admin` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vsquareguest`
--
DROP VIEW IF EXISTS `vsquareguest`;
CREATE TABLE IF NOT EXISTS `vsquareguest` (
`sq_squareid` int(11)
,`sq_createdate` datetime
,`sq_updatedate` datetime
,`sq_usersession` varchar(50)
,`sq_userid` int(11)
,`sq_htmlcontent` longtext
,`sq_description` varchar(255)
,`sq_title` varchar(150)
,`sq_likes` int(11)
,`sq_dislikes` int(11)
,`sq_image` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vsquaresearch`
--
DROP VIEW IF EXISTS `vsquaresearch`;
CREATE TABLE IF NOT EXISTS `vsquaresearch` (
`sq_squareid` int(11)
,`sq_createdate` datetime
,`sq_updatedate` datetime
,`sq_usersession` varchar(50)
,`sq_userid` int(11)
,`sq_htmlcontent` longtext
,`sq_description` varchar(255)
,`sq_title` varchar(150)
,`sq_likes` int(11)
,`sq_dislikes` int(11)
,`sq_image` varchar(20)
,`retag_relatedtagid` int(11)
,`retag_tagid` int(11)
,`retag_squareid` int(11)
,`tag_tagid` int(11)
,`tag_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vsquareuser`
--
DROP VIEW IF EXISTS `vsquareuser`;
CREATE TABLE IF NOT EXISTS `vsquareuser` (
`sq_squareid` int(11)
,`sq_createdate` datetime
,`sq_updatedate` datetime
,`sq_usersession` varchar(50)
,`sq_userid` int(11)
,`sq_htmlcontent` longtext
,`sq_description` varchar(255)
,`sq_title` varchar(150)
,`sq_likes` int(11)
,`sq_dislikes` int(11)
,`retag_squareid` int(11)
,`count` bigint(21)
,`usr_id` int(11)
,`usr_usuario` varchar(50)
,`usr_password` varchar(255)
,`usr_es_admin` int(11)
,`sq_image` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vtagscloud`
--
DROP VIEW IF EXISTS `vtagscloud`;
CREATE TABLE IF NOT EXISTS `vtagscloud` (
`weight` bigint(21)
,`text` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vtagssquare`
--
DROP VIEW IF EXISTS `vtagssquare`;
CREATE TABLE IF NOT EXISTS `vtagssquare` (
`tag_tagid` int(11)
,`tag_name` varchar(100)
,`sq_squareid` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vmensajes`
--
DROP TABLE IF EXISTS `vmensajes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmensajes`  AS  select `mensajes`.`men_mensajeid` AS `men_mensajeid`,`mensajes`.`men_receptorid` AS `men_receptorid`,`mensajes`.`men_emisorid` AS `men_emisorid`,`mensajes`.`men_subject` AS `men_subject`,`mensajes`.`men_body` AS `men_body`,`mensajes`.`men_tipo` AS `men_tipo`,`mensajes`.`men_createdate` AS `men_createdate`,`mensajes`.`men_abierto` AS `men_abierto`,(select `usuarios`.`usr_usuario` from `usuarios` where (`usuarios`.`usr_id` = `mensajes`.`men_receptorid`)) AS `receptor`,(select `usuarios`.`usr_usuario` from `usuarios` where (`usuarios`.`usr_id` = `mensajes`.`men_emisorid`)) AS `emisor` from `mensajes` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vrelatedtagshot`
--
DROP TABLE IF EXISTS `vrelatedtagshot`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vrelatedtagshot`  AS  select `relatedtags`.`retag_squareid` AS `retag_squareid`,count(0) AS `count` from `relatedtags` group by `relatedtags`.`retag_squareid` order by count(0) desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vsquareadmin`
--
DROP TABLE IF EXISTS `vsquareadmin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsquareadmin`  AS  select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin`,`square`.`sq_image` AS `sq_image` from (`square` left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) where (isnull(`square`.`sq_usersession`) and (`square`.`sq_title` is not null)) order by `square`.`sq_createdate` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vsquaredetails`
--
DROP TABLE IF EXISTS `vsquaredetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsquaredetails`  AS  select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin` from (`square` left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) where (`square`.`sq_userid` is not null) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vsquareguest`
--
DROP TABLE IF EXISTS `vsquareguest`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsquareguest`  AS  select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`square`.`sq_image` AS `sq_image` from `square` where (isnull(`square`.`sq_usersession`) and (`square`.`sq_title` is not null)) order by `square`.`sq_likes` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vsquaresearch`
--
DROP TABLE IF EXISTS `vsquaresearch`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsquaresearch`  AS  select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`square`.`sq_image` AS `sq_image`,`relatedtags`.`retag_relatedtagid` AS `retag_relatedtagid`,`relatedtags`.`retag_tagid` AS `retag_tagid`,`relatedtags`.`retag_squareid` AS `retag_squareid`,`tags`.`tag_tagid` AS `tag_tagid`,`tags`.`tag_name` AS `tag_name` from ((`square` left join `relatedtags` on((`square`.`sq_squareid` = `relatedtags`.`retag_squareid`))) left join `tags` on((`relatedtags`.`retag_tagid` = `tags`.`tag_tagid`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vsquareuser`
--
DROP TABLE IF EXISTS `vsquareuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsquareuser`  AS  select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`vrelatedtagshot`.`retag_squareid` AS `retag_squareid`,`vrelatedtagshot`.`count` AS `count`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin`,`square`.`sq_image` AS `sq_image` from ((`square` left join `vrelatedtagshot` on((`square`.`sq_squareid` = `vrelatedtagshot`.`retag_squareid`))) left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) where (isnull(`square`.`sq_usersession`) and (`square`.`sq_title` is not null)) order by `vrelatedtagshot`.`count` desc,`square`.`sq_likes` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vtagscloud`
--
DROP TABLE IF EXISTS `vtagscloud`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtagscloud`  AS  select count(`relatedtags`.`retag_tagid`) AS `weight`,`tags`.`tag_name` AS `text` from (`relatedtags` left join `tags` on((`relatedtags`.`retag_tagid` = `tags`.`tag_tagid`))) group by `relatedtags`.`retag_tagid` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vtagssquare`
--
DROP TABLE IF EXISTS `vtagssquare`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtagssquare`  AS  select `tags`.`tag_tagid` AS `tag_tagid`,`tags`.`tag_name` AS `tag_name`,`square`.`sq_squareid` AS `sq_squareid` from ((`tags` left join `relatedtags` on((`tags`.`tag_tagid` = `relatedtags`.`retag_tagid`))) left join `square` on((`relatedtags`.`retag_squareid` = `square`.`sq_squareid`))) ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relatedtags`
--
ALTER TABLE `relatedtags`
  ADD CONSTRAINT `square` FOREIGN KEY (`retag_squareid`) REFERENCES `square` (`sq_squareid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag` FOREIGN KEY (`retag_tagid`) REFERENCES `tags` (`tag_tagid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

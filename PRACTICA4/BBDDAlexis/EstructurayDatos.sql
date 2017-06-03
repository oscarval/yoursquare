CREATE DATABASE  IF NOT EXISTS `yoursquare` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yoursquare`;
-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: localhost    Database: yoursquare
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comm_id` int(11) NOT NULL AUTO_INCREMENT,
  `comm_idSquare` int(11) NOT NULL,
  `comm_idCreator` int(11) NOT NULL,
  `comm_idUserSquare` int(11) NOT NULL,
  `comm_content` varchar(100) NOT NULL,
  `comm_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (45,3,19,19,' Me gusta tu comentario, toma tu like!','2017-05-29 17:34:30'),(46,5,19,18,' Toma tu like!','2017-05-29 17:34:47'),(53,20,18,18,'Primer comentario','2017-05-31 02:58:09'),(54,20,18,18,'Segundo comentario','2017-05-31 02:58:17'),(55,18,22,22,'comentario 1','2017-06-01 16:07:23');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments_thread`
--

DROP TABLE IF EXISTS `comments_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments_thread` (
  `commth_id` int(11) NOT NULL,
  `commth_usr_id` int(11) NOT NULL,
  `commth_commId` int(11) NOT NULL,
  `commth_content` varchar(100) NOT NULL,
  `commth_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments_thread`
--

LOCK TABLES `comments_thread` WRITE;
/*!40000 ALTER TABLE `comments_thread` DISABLE KEYS */;
INSERT INTO `comments_thread` VALUES (18,22,53,'Primera respuesta','2017-05-31 02:58:38'),(19,22,54,'2 respuesta','2017-05-31 02:58:44'),(20,18,53,' segunda respuesta','2017-05-31 02:59:04'),(21,18,54,'3 respuesta','2017-05-31 02:59:14'),(0,22,55,'respuesta 1','2017-06-01 16:07:34');
/*!40000 ALTER TABLE `comments_thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `following`
--

DROP TABLE IF EXISTS `following`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `following` (
  `foll_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id` int(11) NOT NULL,
  `usr_id_following` int(11) NOT NULL,
  PRIMARY KEY (`foll_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `following`
--

LOCK TABLES `following` WRITE;
/*!40000 ALTER TABLE `following` DISABLE KEYS */;
INSERT INTO `following` VALUES (1,22,18);
/*!40000 ALTER TABLE `following` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `men_mensajeid` int(11) NOT NULL AUTO_INCREMENT,
  `men_receptorid` int(11) DEFAULT NULL,
  `men_emisorid` int(11) DEFAULT NULL,
  `men_subject` varchar(100) DEFAULT NULL,
  `men_body` longtext,
  `men_tipo` varchar(45) DEFAULT NULL,
  `men_createdate` datetime DEFAULT CURRENT_TIMESTAMP,
  `men_abierto` int(11) DEFAULT NULL,
  PRIMARY KEY (`men_mensajeid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
INSERT INTO `mensajes` VALUES (1,2,1,'Prueba1','Prueba1','entrada','2017-05-21 17:03:13',1),(2,18,22,'asunto 1','mensaje 1','entrada','2017-06-01 16:13:49',1),(3,19,22,'asunto 2','mensaje 2','entrada','2017-06-01 17:40:36',1),(4,19,22,'asunto 3','mensaje 3','entrada','2017-06-01 17:42:27',NULL);
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relatedtags`
--

DROP TABLE IF EXISTS `relatedtags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relatedtags` (
  `retag_relatedtagid` int(11) NOT NULL AUTO_INCREMENT,
  `retag_tagid` int(11) DEFAULT NULL,
  `retag_squareid` int(11) DEFAULT NULL,
  PRIMARY KEY (`retag_relatedtagid`),
  KEY `tag_idx` (`retag_tagid`),
  KEY `user_idx` (`retag_squareid`),
  CONSTRAINT `square` FOREIGN KEY (`retag_squareid`) REFERENCES `square` (`sq_squareid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tag` FOREIGN KEY (`retag_tagid`) REFERENCES `tags` (`tag_tagid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relatedtags`
--

LOCK TABLES `relatedtags` WRITE;
/*!40000 ALTER TABLE `relatedtags` DISABLE KEYS */;
INSERT INTO `relatedtags` VALUES (16,1,3),(17,2,3),(18,2,3),(19,3,10),(20,1,13),(21,1,15),(22,1,15),(23,2,16),(24,4,16),(25,3,16),(26,1,15),(27,2,15),(28,5,17),(29,2,17),(30,6,17),(31,7,17),(32,3,18),(33,1,18),(34,8,18),(35,5,18);
/*!40000 ALTER TABLE `relatedtags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `square`
--

DROP TABLE IF EXISTS `square`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `square` (
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `square`
--

LOCK TABLES `square` WRITE;
/*!40000 ALTER TABLE `square` DISABLE KEYS */;
INSERT INTO `square` VALUES (3,NULL,NULL,NULL,19,NULL,NULL,NULL,'El cielo es azúl',1,NULL,NULL),(4,NULL,NULL,NULL,19,NULL,NULL,NULL,'Nunca te rindas',NULL,NULL,NULL),(5,NULL,NULL,NULL,18,NULL,NULL,NULL,'Mi mejor square',8,NULL,NULL),(6,NULL,NULL,'',18,NULL,NULL,'Descripción poesía 2','Poesía 2',NULL,NULL,NULL),(7,NULL,NULL,NULL,18,NULL,NULL,NULL,'Cocina',NULL,NULL,NULL),(10,'2017-05-29 22:06:56','2017-05-29 23:16:18','',20,NULL,'<div id=\"wrapper-square\" class=\"bambu\">             <div id=\"dropzone\">              <h2 class=\"draggable Medium Medium-partial\" contenteditable=\"true\" data-x=\"170\" data-y=\"60\" style=\"transform: translate(170px, 60px); color: rgb(86, 41, 255);\">Header 2</h2><p class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"93\" data-y=\"112\" style=\"width: 259.641px; height: 22px; transform: translate(93px, 112px); font-family: Calibri; font-size: 23px; color: rgb(9, 0, 9);\">Tiene muchisimo mas texto</p></div>         </div>',NULL,NULL,NULL,NULL,NULL),(11,'2017-05-29 23:18:44','2017-05-30 00:34:56','',21,NULL,'<div id=\"wrapper-square\" class=\"mar\">\n            <div id=\"dropzone\">\n\n            <h1 class=\"draggable Medium Medium-partial\" contenteditable=\"true\" data-x=\"180\" data-y=\"29\" style=\"transform: translate(180px, 29px);\">Header 1</h1><p class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"194\" data-y=\"134\" style=\"width: 142.641px; height: 24px; transform: translate(194px, 134px);\">Un nuevo parrafo</p></div>\n        </div>',NULL,NULL,NULL,NULL,'11'),(12,'2017-05-29 23:54:06','2017-05-30 16:22:51',NULL,18,NULL,'<div id=\"wrapper-square\" class=\"bambu\">             <div id=\"dropzone\">              <h1 class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"112\" data-y=\"42\" style=\"transform: translate(112px, 42px);\">Título square con bambu</h1></div>         </div>','des','titu',NULL,NULL,NULL),(13,'2017-05-30 16:34:35','2017-05-30 17:34:05',NULL,18,NULL,'<div id=\"wrapper-square\" class=\"montanas\">             <div id=\"dropzone\">              <h3 class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"151\" data-y=\"37\" style=\"transform: translate(151px, 37px); color: rgb(255, 42, 210);\">La Cocina y sus virtudes</h3><p class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"131\" data-y=\"138\" style=\"transform: translate(131px, 138px); font-size: 22px; color: rgb(55, 29, 255);\">Cuando cocinas eres libre</p></div>         </div>','Breve descripción','Cocinar es un placer',NULL,NULL,'square_13.png'),(14,'2017-05-30 17:49:51','2017-05-30 18:30:26',NULL,18,NULL,'<div id=\"wrapper-square\" class=\"bosque\">\n            <div id=\"dropzone\">\n\n            </div>\n        </div>',NULL,NULL,NULL,NULL,NULL),(15,'2017-05-30 18:30:47','2017-06-01 01:49:35','',22,NULL,'<div id=\"wrapper-square\" class=\"bambu\">             <div id=\"dropzone\">              <h1 class=\"draggable Medium Medium-partial\" contenteditable=\"true\" data-x=\"198\" data-y=\"85\" style=\"transform: translate(198px, 85px);\">Header 1</h1><p class=\"draggable Medium Medium-partial\" contenteditable=\"true\" data-x=\"209\" data-y=\"176\" style=\"transform: translate(209px, 176px);\">Parrafo</p></div>         </div>','Descripción editada','Nuevo título editado',NULL,NULL,'square_15.png'),(16,'2017-05-31 22:34:10','2017-05-31 22:35:43',NULL,22,NULL,'<div id=\"wrapper-square\" class=\"mar\">\n            <div id=\"dropzone\">\n\n            <h3 class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"195\" data-y=\"35\" style=\"transform: translate(195px, 35px); font-family: Calibri; color: rgb(55, 255, 138);\">Mí poesía con su título</h3><p class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"92\" data-y=\"138\" style=\"width: 299.641px; height: 22px; transform: translate(92px, 138px);\">mucho texto dentro del square para poesía</p></div>\n        </div>','descripción poesía','este va de poesía',NULL,NULL,'square_16.png'),(17,'2017-05-31 23:40:58','2017-06-01 01:55:37',NULL,22,NULL,'<div id=\"wrapper-square\" class=\"montanas\">\n            <div id=\"dropzone\">\n\n            <h1 class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"100\" data-y=\"34\" style=\"transform: translate(100px, 34px); color: rgb(243, 255, 32);\">El amanecer en las montañas</h1><p class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"63\" data-y=\"60\" style=\"width: 408.641px; height: 24px; transform: translate(63px, 60px); color: rgb(255, 88, 74); font-family: Calibri; font-size: 17px;\">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p></div>\n        </div>','Un breve resumen del paso del alaba en las montañas','Cuando el alba',NULL,NULL,'square_17.png'),(18,'2017-06-01 15:20:34','2017-06-01 15:24:43',NULL,22,NULL,'<div id=\"wrapper-square\" class=\"bosque\">\n            <div id=\"dropzone\">\n\n            <h1 class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"171\" data-y=\"39\" style=\"transform: translate(171px, 39px); color: rgb(237, 255, 232);\">Me encanta los animales</h1><p class=\"Medium Medium-partial draggable\" contenteditable=\"true\" data-x=\"143\" data-y=\"129\" style=\"transform: translate(143px, 129px); color: rgb(255, 21, 24);\">Animaaaaaaaaaaaaaaaales<p style=\"color: rgb(255, 15, 32);\">cuanto me gustan</p></p></div>\n        </div>','sin descripción','Edición por Xuebo',1,NULL,'square_18.png'),(19,'2017-06-01 16:04:40','2017-06-01 16:30:41','fa8dkb12dai2bqnchq43hapbq1',NULL,NULL,'<div id=\"wrapper-square\" class=\"bosque\">\n            <div id=\"dropzone\">\n\n            </div>\n        </div>',NULL,NULL,NULL,NULL,NULL),(20,'2017-06-01 16:11:04','2017-06-01 16:11:04',NULL,22,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `square` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `tag_tagid` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tag_tagid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'poesia'),(2,'arte'),(3,'filosofía'),(4,'amor'),(5,'montañas'),(6,'alba'),(7,'cielo despejado'),(8,'animales');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_usuario` varchar(50) DEFAULT NULL,
  `usr_password` varchar(255) DEFAULT NULL,
  `usr_es_admin` int(11) DEFAULT NULL,
  `usr_email` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usr_pais` varchar(20) NOT NULL,
  `usr_registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_avatar` varchar(30) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (18,'oscarval','$2y$10$QX6GOjy//5zGBrWRlzFo5.0coMZ7sCjcuC3/d7sLjMFnZJcgyoao6',1,'oscarval@ucm.es','España','2017-05-29 17:24:42','../img/avatar/avatar_man.png'),(19,'pablo','$2y$10$v/aU1D7gpP.CbGmxiCF1QOb11VFCAWyNZncmW.506cSf4Hx7B8peG',0,'pablo@ucm.es','España','2017-05-29 17:32:08','../img/avatar/avatar_none.png'),(20,'prueba','$2y$10$kpjL8oYg.Au3C/aWCWF0a.bXjXWHXPWP.nI6mXJDfVKaWy0pjbB3u',0,'prueba@gmail.com','españa','2017-05-29 23:16:18','../img/avatar/avatar_man.png'),(21,'prueba2','$2y$10$iB2gi82ikfMqjo9pKfEwjeQhDntom.LQ5GmwaZdDTRs2gNgTo30lS',0,'prueba2@gmail.com','españa','2017-05-30 00:34:56','../img/avatar/avatar_none.png'),(22,'maria','$2y$10$98kUo.WJUBPhLqJcVYtX/.jbpz9ZlmJKBI9JlJ0X9i.Z6GDV8kRG2',0,'maria@gmail.com','eeuu','2017-05-31 22:32:17','../img/avatar/avatar_woman.png'),(23,'oscarval','$2y$10$KFbqzPnppq9RBdEdE2ioF.tlaDEjZuViyADW0V62fPdaIi.mDdOXG',0,'','España','2017-06-02 02:30:26','../img/avatar/avatar_none.png');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vmensajes`
--

DROP TABLE IF EXISTS `vmensajes`;
/*!50001 DROP VIEW IF EXISTS `vmensajes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vmensajes` AS SELECT 
 1 AS `men_mensajeid`,
 1 AS `men_receptorid`,
 1 AS `men_emisorid`,
 1 AS `men_subject`,
 1 AS `men_body`,
 1 AS `men_tipo`,
 1 AS `men_createdate`,
 1 AS `men_abierto`,
 1 AS `receptor`,
 1 AS `emisor`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vrelatedtagshot`
--

DROP TABLE IF EXISTS `vrelatedtagshot`;
/*!50001 DROP VIEW IF EXISTS `vrelatedtagshot`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vrelatedtagshot` AS SELECT 
 1 AS `retag_squareid`,
 1 AS `count`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vsquareadmin`
--

DROP TABLE IF EXISTS `vsquareadmin`;
/*!50001 DROP VIEW IF EXISTS `vsquareadmin`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vsquareadmin` AS SELECT 
 1 AS `sq_squareid`,
 1 AS `sq_createdate`,
 1 AS `sq_updatedate`,
 1 AS `sq_usersession`,
 1 AS `sq_userid`,
 1 AS `sq_csscontent`,
 1 AS `sq_htmlcontent`,
 1 AS `sq_description`,
 1 AS `sq_title`,
 1 AS `sq_likes`,
 1 AS `sq_dislikes`,
 1 AS `usr_id`,
 1 AS `usr_usuario`,
 1 AS `usr_password`,
 1 AS `usr_es_admin`,
 1 AS `sq_image`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vsquaredetails`
--

DROP TABLE IF EXISTS `vsquaredetails`;
/*!50001 DROP VIEW IF EXISTS `vsquaredetails`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vsquaredetails` AS SELECT 
 1 AS `sq_squareid`,
 1 AS `sq_createdate`,
 1 AS `sq_updatedate`,
 1 AS `sq_usersession`,
 1 AS `sq_userid`,
 1 AS `sq_csscontent`,
 1 AS `sq_htmlcontent`,
 1 AS `sq_description`,
 1 AS `sq_title`,
 1 AS `sq_likes`,
 1 AS `sq_dislikes`,
 1 AS `usr_id`,
 1 AS `usr_usuario`,
 1 AS `usr_password`,
 1 AS `usr_es_admin`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vsquareguest`
--

DROP TABLE IF EXISTS `vsquareguest`;
/*!50001 DROP VIEW IF EXISTS `vsquareguest`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vsquareguest` AS SELECT 
 1 AS `sq_squareid`,
 1 AS `sq_createdate`,
 1 AS `sq_updatedate`,
 1 AS `sq_usersession`,
 1 AS `sq_userid`,
 1 AS `sq_csscontent`,
 1 AS `sq_htmlcontent`,
 1 AS `sq_description`,
 1 AS `sq_title`,
 1 AS `sq_likes`,
 1 AS `sq_dislikes`,
 1 AS `sq_image`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vsquaresearch`
--

DROP TABLE IF EXISTS `vsquaresearch`;
/*!50001 DROP VIEW IF EXISTS `vsquaresearch`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vsquaresearch` AS SELECT 
 1 AS `sq_squareid`,
 1 AS `sq_createdate`,
 1 AS `sq_updatedate`,
 1 AS `sq_usersession`,
 1 AS `sq_userid`,
 1 AS `sq_csscontent`,
 1 AS `sq_htmlcontent`,
 1 AS `sq_description`,
 1 AS `sq_title`,
 1 AS `sq_likes`,
 1 AS `sq_dislikes`,
 1 AS `sq_image`,
 1 AS `retag_relatedtagid`,
 1 AS `retag_tagid`,
 1 AS `retag_squareid`,
 1 AS `tag_tagid`,
 1 AS `tag_name`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vsquareuser`
--

DROP TABLE IF EXISTS `vsquareuser`;
/*!50001 DROP VIEW IF EXISTS `vsquareuser`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vsquareuser` AS SELECT 
 1 AS `sq_squareid`,
 1 AS `sq_createdate`,
 1 AS `sq_updatedate`,
 1 AS `sq_usersession`,
 1 AS `sq_userid`,
 1 AS `sq_csscontent`,
 1 AS `sq_htmlcontent`,
 1 AS `sq_description`,
 1 AS `sq_title`,
 1 AS `sq_likes`,
 1 AS `sq_dislikes`,
 1 AS `retag_squareid`,
 1 AS `count`,
 1 AS `usr_id`,
 1 AS `usr_usuario`,
 1 AS `usr_password`,
 1 AS `usr_es_admin`,
 1 AS `sq_image`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vtagscloud`
--

DROP TABLE IF EXISTS `vtagscloud`;
/*!50001 DROP VIEW IF EXISTS `vtagscloud`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vtagscloud` AS SELECT 
 1 AS `weight`,
 1 AS `text`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vtagssquare`
--

DROP TABLE IF EXISTS `vtagssquare`;
/*!50001 DROP VIEW IF EXISTS `vtagssquare`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vtagssquare` AS SELECT 
 1 AS `tag_tagid`,
 1 AS `tag_name`,
 1 AS `sq_squareid`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vmensajes`
--

/*!50001 DROP VIEW IF EXISTS `vmensajes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vmensajes` AS select `mensajes`.`men_mensajeid` AS `men_mensajeid`,`mensajes`.`men_receptorid` AS `men_receptorid`,`mensajes`.`men_emisorid` AS `men_emisorid`,`mensajes`.`men_subject` AS `men_subject`,`mensajes`.`men_body` AS `men_body`,`mensajes`.`men_tipo` AS `men_tipo`,`mensajes`.`men_createdate` AS `men_createdate`,`mensajes`.`men_abierto` AS `men_abierto`,(select `usuarios`.`usr_usuario` from `usuarios` where (`usuarios`.`usr_id` = `mensajes`.`men_receptorid`)) AS `receptor`,(select `usuarios`.`usr_usuario` from `usuarios` where (`usuarios`.`usr_id` = `mensajes`.`men_emisorid`)) AS `emisor` from `mensajes` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vrelatedtagshot`
--

/*!50001 DROP VIEW IF EXISTS `vrelatedtagshot`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vrelatedtagshot` AS select `relatedtags`.`retag_squareid` AS `retag_squareid`,count(0) AS `count` from `relatedtags` group by `relatedtags`.`retag_squareid` order by count(0) desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vsquareadmin`
--

/*!50001 DROP VIEW IF EXISTS `vsquareadmin`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vsquareadmin` AS select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin`,`square`.`sq_image` AS `sq_image` from (`square` left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) where (isnull(`square`.`sq_usersession`) and (`square`.`sq_title` is not null)) order by `square`.`sq_createdate` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vsquaredetails`
--

/*!50001 DROP VIEW IF EXISTS `vsquaredetails`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vsquaredetails` AS select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin` from (`square` left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) where (`square`.`sq_userid` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vsquareguest`
--

/*!50001 DROP VIEW IF EXISTS `vsquareguest`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vsquareguest` AS select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`square`.`sq_image` AS `sq_image` from `square` where (isnull(`square`.`sq_usersession`) and (`square`.`sq_title` is not null)) order by `square`.`sq_likes` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vsquaresearch`
--

/*!50001 DROP VIEW IF EXISTS `vsquaresearch`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vsquaresearch` AS select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`square`.`sq_image` AS `sq_image`,`relatedtags`.`retag_relatedtagid` AS `retag_relatedtagid`,`relatedtags`.`retag_tagid` AS `retag_tagid`,`relatedtags`.`retag_squareid` AS `retag_squareid`,`tags`.`tag_tagid` AS `tag_tagid`,`tags`.`tag_name` AS `tag_name` from ((`square` left join `relatedtags` on((`square`.`sq_squareid` = `relatedtags`.`retag_squareid`))) left join `tags` on((`relatedtags`.`retag_tagid` = `tags`.`tag_tagid`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vsquareuser`
--

/*!50001 DROP VIEW IF EXISTS `vsquareuser`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vsquareuser` AS select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`vrelatedtagshot`.`retag_squareid` AS `retag_squareid`,`vrelatedtagshot`.`count` AS `count`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin`,`square`.`sq_image` AS `sq_image` from ((`square` left join `vrelatedtagshot` on((`square`.`sq_squareid` = `vrelatedtagshot`.`retag_squareid`))) left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) where (isnull(`square`.`sq_usersession`) and (`square`.`sq_title` is not null)) order by `vrelatedtagshot`.`count` desc,`square`.`sq_likes` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vtagscloud`
--

/*!50001 DROP VIEW IF EXISTS `vtagscloud`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vtagscloud` AS select count(`relatedtags`.`retag_tagid`) AS `weight`,`tags`.`tag_name` AS `text` from (`relatedtags` left join `tags` on((`relatedtags`.`retag_tagid` = `tags`.`tag_tagid`))) group by `relatedtags`.`retag_tagid` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vtagssquare`
--

/*!50001 DROP VIEW IF EXISTS `vtagssquare`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vtagssquare` AS select `tags`.`tag_tagid` AS `tag_tagid`,`tags`.`tag_name` AS `tag_name`,`square`.`sq_squareid` AS `sq_squareid` from ((`tags` left join `relatedtags` on((`tags`.`tag_tagid` = `relatedtags`.`retag_tagid`))) left join `square` on((`relatedtags`.`retag_squareid` = `square`.`sq_squareid`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-02 20:31:01

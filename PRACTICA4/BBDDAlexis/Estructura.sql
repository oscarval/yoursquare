CREATE DATABASE  IF NOT EXISTS `yoursquare` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yoursquare`;
-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: yoursquare
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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
 1 AS `retag_relatedtagid`,
 1 AS `retag_tagid`,
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
 1 AS `retag_relatedtagid`,
 1 AS `retag_tagid`,
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
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vrelatedtagshot` AS select `relatedtags`.`retag_relatedtagid` AS `retag_relatedtagid`,`relatedtags`.`retag_tagid` AS `retag_tagid`,`relatedtags`.`retag_squareid` AS `retag_squareid`,count(0) AS `count` from `relatedtags` group by `relatedtags`.`retag_squareid` order by count(0) desc */;
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
/*!50001 VIEW `vsquareadmin` AS select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin`,`square`.`sq_image` AS `sq_image` from (`square` left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) order by `square`.`sq_createdate` desc */;
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
/*!50001 VIEW `vsquareuser` AS select `square`.`sq_squareid` AS `sq_squareid`,`square`.`sq_createdate` AS `sq_createdate`,`square`.`sq_updatedate` AS `sq_updatedate`,`square`.`sq_usersession` AS `sq_usersession`,`square`.`sq_userid` AS `sq_userid`,`square`.`sq_csscontent` AS `sq_csscontent`,`square`.`sq_htmlcontent` AS `sq_htmlcontent`,`square`.`sq_description` AS `sq_description`,`square`.`sq_title` AS `sq_title`,`square`.`sq_likes` AS `sq_likes`,`square`.`sq_dislikes` AS `sq_dislikes`,`vrelatedtagshot`.`retag_relatedtagid` AS `retag_relatedtagid`,`vrelatedtagshot`.`retag_tagid` AS `retag_tagid`,`vrelatedtagshot`.`retag_squareid` AS `retag_squareid`,`vrelatedtagshot`.`count` AS `count`,`usuarios`.`usr_id` AS `usr_id`,`usuarios`.`usr_usuario` AS `usr_usuario`,`usuarios`.`usr_password` AS `usr_password`,`usuarios`.`usr_es_admin` AS `usr_es_admin`,`square`.`sq_image` AS `sq_image` from ((`square` left join `vrelatedtagshot` on((`square`.`sq_squareid` = `vrelatedtagshot`.`retag_squareid`))) left join `usuarios` on((`square`.`sq_userid` = `usuarios`.`usr_id`))) order by `vrelatedtagshot`.`count` desc,`square`.`sq_likes` desc */;
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

-- Dump completed on 2017-06-01 21:46:56

CREATE DATABASE  IF NOT EXISTS `rizador` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `rizador`;
-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: rizador
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `Almacenes`
--

DROP TABLE IF EXISTS `Almacenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Almacenes` (
  `idAlmacen` int(11) NOT NULL AUTO_INCREMENT,
  `codAlmacen` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nomAlmacen` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nomCiudad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `dirAlmacen` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idAlmacen`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Almacenes`
--

LOCK TABLES `Almacenes` WRITE;
/*!40000 ALTER TABLE `Almacenes` DISABLE KEYS */;
INSERT INTO `Almacenes` VALUES (1,'5','Exito contry','Bogotá','Calle 100'),(2,'60','Exito colina','Bogotá','Calle 200');
/*!40000 ALTER TABLE `Almacenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EstadosReserva`
--

DROP TABLE IF EXISTS `EstadosReserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EstadosReserva` (
  `idEstadoReserva` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `nomEstado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idEstadoReserva`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EstadosReserva`
--

LOCK TABLES `EstadosReserva` WRITE;
/*!40000 ALTER TABLE `EstadosReserva` DISABLE KEYS */;
INSERT INTO `EstadosReserva` VALUES (1,'Activa');
/*!40000 ALTER TABLE `EstadosReserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservas`
--

DROP TABLE IF EXISTS `Reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservas` (
  `idReservas` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idAlmacen` int(11) NOT NULL,
  `cantReservas` int(11) NOT NULL,
  `fechaReserva` datetime NOT NULL,
  `idEstadoReserva` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `codigoReserva` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `idVendedor` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `htmlReserva` varchar(3500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idReservas`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservas`
--

LOCK TABLES `Reservas` WRITE;
/*!40000 ALTER TABLE `Reservas` DISABLE KEYS */;
INSERT INTO `Reservas` VALUES (15,5,2,6,'2017-04-03 23:56:58','1','xr4ysm',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<met'),(16,5,2,6,'2017-04-03 23:58:03','1','ycpcgg',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<met'),(17,9,2,4,'2017-04-04 00:34:49','1','wbuxgh',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<met'),(18,5,1,3,'2017-04-04 01:47:51','1','1mj2gp',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<met'),(19,5,2,3,'2017-04-04 01:50:23','1','uvunno',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<met'),(20,5,2,5,'2017-04-04 01:53:01','1','a81vzk',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:norm'),(21,5,2,4,'2017-04-04 08:30:46','1','p0hgr6',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:norm'),(22,5,2,4,'2017-04-04 08:32:02','1','8yg982',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:norm'),(23,10,2,5,'2017-04-04 08:35:33','1','zzwg70',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:norm'),(24,10,2,5,'2017-04-04 09:02:57','1','vcqwq9',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Paula  Sanchez</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">5</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de RedenciÃ³n </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">CÃ³digo RedenciÃ³n</td>\n    <td class=\"tg-13pz\">vcqwq9</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">CÃ³rreo ElectrÃ³nico</td>\n    <td class=\"tg-9apd\">ANDREA@ANDREA.COM</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(25,10,2,5,'2017-04-04 09:07:27','1','xm58kf',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Paula  Sanchez</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">5</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de RedenciÃ³n </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">CÃ³digo RedenciÃ³n</td>\n    <td class=\"tg-13pz\">xm58kf</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">CÃ³rreo ElectrÃ³nico</td>\n    <td class=\"tg-9apd\">ANDREA@ANDREA.COM</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(26,11,2,7,'2017-04-04 09:23:25','1','3l591p',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Juan Camilo  ochoa sanchez</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">7</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de RedenciÃ³n </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">CÃ³digo RedenciÃ³n</td>\n    <td class=\"tg-13pz\">3l591p</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">CÃ³rreo ElectrÃ³nico</td>\n    <td class=\"tg-9apd\">jochoa@elespectador.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(27,12,2,5,'2017-04-04 09:31:41','1','xp529p',NULL,'<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Paulis Sanchez</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">5</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de RedenciÃ³n </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">CÃ³digo RedenciÃ³n</td>\n    <td class=\"tg-13pz\">xp529p</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">CÃ³rreo ElectrÃ³nico</td>\n    <td class=\"tg-9apd\">psanchez@elespectador.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>');
/*!40000 ALTER TABLE `Reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserSystem`
--

DROP TABLE IF EXISTS `UserSystem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserSystem` (
  `idUserSystem` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cedulaUser` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargoUser` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `emailUser` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `passUser` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `idRoll` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUserSystem`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserSystem`
--

LOCK TABLES `UserSystem` WRITE;
/*!40000 ALTER TABLE `UserSystem` DISABLE KEYS */;
INSERT INTO `UserSystem` VALUES (5,'Leandro Romero','80797521','Ing Desarrollo','lromero@elespectador.com','aGF6RllPNkRsc1dSM2IybVV1TWZpQT09',''),(6,'Leandro Romero','80797521','Ing Desarrollo','lromero@elespectador.com','aGF6RllPNkRsc1dSM2IybVV1TWZpQT09','');
/*!40000 ALTER TABLE `UserSystem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cedulaUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `emailUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `dirUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nomCiudad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ipUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombreRecoje` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellRecoje` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedulaRecoje` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (5,'Ferney ','Romero','80797521','leandro@leandro.com','Cra 63 # 4b - 16','2','3138792939','','johan ','Romero','Ramire'),(6,'Alex','Silv','43254332','alex@alex.com','bosa','3','098767898765','','','',''),(7,'Peter','Alverio','98765434567','peater@peater.com','camelia','1','654345','','asdfa','ytr','876567654'),(8,'jorge','Romero','8087','leandro@leandro.com','calle 5','10','3138792939','','johan ','Romero ','123456'),(9,'daya','Luz Toloza','80797522','josel.luzt@ecci.edu.co','Calle 7 a bis b 80 a 77','3','807988','','Leandro','Romer','123456'),(10,'Paula ','Sanchez','53074849','ANDREA@ANDREA.COM','CASA','1','32255014033','','','',''),(11,'Juan Camilo ','ochoa sanchez','1047447202','jochoa@elespectador.com','Trav 17a # 98 - 20','1','314 5212919','','','',''),(12,'Paulis','Sanchez','10222333444','psanchez@elespectador.com','Metro bosa','1','123456789','127.0.0.1','','',''),(13,'Tatiana ','la tatis','456789123','leandro@leandro.com','Calle 7 a bis b 80 a 77','2','807988','127.0.0.1','Leandro','Romer','123456'),(14,'d','Luz Toloza','123','leandro@leandro.com','Calle 7 a bis b 80 a 77','3','807988','127.0.0.1','Leandro','Romer','123456'),(15,'Juan Camilo ','Luz Toloza','12','josel.luzt@ecci.edu.co','calle 5','2','807988','127.0.0.1','Leandro','Romer','123456');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logEventos`
--

DROP TABLE IF EXISTS `logEventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logEventos` (
  `idlogEventos` int(11) NOT NULL AUTO_INCREMENT,
  `descripcionEvento` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `FechaEvento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '	',
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idlogEventos`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logEventos`
--

LOCK TABLES `logEventos` WRITE;
/*!40000 ALTER TABLE `logEventos` DISABLE KEYS */;
INSERT INTO `logEventos` VALUES (1,'Registro NO Exitoso','0000-00-00 00:00:00',0),(2,'Registro NO Exitoso','0000-00-00 00:00:00',0),(3,'Registro NO Exitoso','0000-00-00 00:00:00',0),(4,'Registro NO Exitoso','0000-00-00 00:00:00',0),(5,'Registro NO Exitoso','0000-00-00 00:00:00',0),(6,'Registro NO Exitoso','0000-00-00 00:00:00',0),(7,'Registro NO Exitoso','0000-00-00 00:00:00',0),(8,'Registro NO Exitoso','0000-00-00 00:00:00',0),(9,'Registro NO Exitoso','0000-00-00 00:00:00',0),(10,'Registro NO Exitoso','2017-04-03 17:04:34',0),(11,'Registro Exitoso','2017-04-03 22:07:20',1),(12,'Registro Exitoso','2017-04-03 22:08:28',1),(13,'Registro Exitoso','2017-04-03 22:09:42',1),(14,'Registro Exitoso','2017-04-03 22:11:24',1),(15,'Registro Exitoso','2017-04-03 22:14:03',1),(16,'Registro Exitoso','2017-04-03 22:15:55',1),(17,'Registro Exitoso','2017-04-03 22:18:10',5),(18,'Registro Exitoso','2017-04-03 22:19:16',5),(19,'Registro Exitoso','2017-04-03 22:20:10',5),(20,'Registro Exitoso','2017-04-03 22:22:31',5),(21,'Registro Exitoso','2017-04-03 22:28:18',5),(22,'Registro Exitoso','2017-04-03 22:31:50',5),(23,'Registro Exitoso','2017-04-04 15:12:08',5),(24,'Registro Exitoso','2017-04-04 15:36:55',6),(25,'Registro Exitoso','2017-04-04 16:25:34',6);
/*!40000 ALTER TABLE `logEventos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-04 17:23:34

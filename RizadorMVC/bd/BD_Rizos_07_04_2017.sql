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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Almacenes`
--

LOCK TABLES `Almacenes` WRITE;
/*!40000 ALTER TABLE `Almacenes` DISABLE KEYS */;
INSERT INTO `Almacenes` VALUES (1,'5','Exito contry','Bogotá','Calle 100'),(2,'60','Exito colina','Bogotá','Calle 200'),(3,'20c','Exito Americas','Bogota','Av Americas # 32 - 16');
/*!40000 ALTER TABLE `Almacenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ciudades`
--

DROP TABLE IF EXISTS `Ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ciudades` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCiudad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idCiudad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ciudades`
--

LOCK TABLES `Ciudades` WRITE;
/*!40000 ALTER TABLE `Ciudades` DISABLE KEYS */;
INSERT INTO `Ciudades` VALUES (1,'Bogotá'),(2,'Cali');
/*!40000 ALTER TABLE `Ciudades` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservas`
--

LOCK TABLES `Reservas` WRITE;
/*!40000 ALTER TABLE `Reservas` DISABLE KEYS */;
INSERT INTO `Reservas` VALUES (31,5,2,4,'2017-04-06 18:17:10','1','6fosq2','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Ferney  Romero</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">4</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">6fosq2</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">leandro@leandro.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(32,18,2,3,'2017-04-06 18:32:51','1','f664tk','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Alex Varon</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">3</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">f664tk</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">josel.luzt@ecci.edu.co</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(33,18,2,3,'2017-04-06 18:39:42','1','0u8m5a','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Alex Varon</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">3</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">0u8m5a</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">josel.luzt@ecci.edu.co</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(34,18,2,3,'2017-04-06 18:40:01','1','crxz1d','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Alex Varon</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">3</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">crxz1d</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">josel.luzt@ecci.edu.co</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(35,18,2,3,'2017-04-06 18:44:07','1','6sgnne','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Alex Varon</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">3</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">6sgnne</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">josel.luzt@ecci.edu.co</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(36,5,2,5,'2017-04-06 18:44:42','1','8s4h6t','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Ferney  Romero</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">5</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">8s4h6t</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">leandro@leandro.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(37,19,2,5,'2017-04-06 22:03:59','1','cyog01','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Juan  Sanche</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">5</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">cyog01</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">cgonzalez@elespectador.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(38,5,2,1,'2017-04-06 22:05:07','1','nrp5i7','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Ferney  Romero</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">1</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">nrp5i7</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">leandro@leandro.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(39,5,2,5,'2017-04-06 22:20:29','1','nvdrsg','6','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Ferney  Romero</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">5</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">nvdrsg</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">leandro@leandro.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(40,20,2,3,'2017-04-06 23:00:35','1','r8rwwk','0','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Juliana Romero</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">3</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">r8rwwk</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">psanchez@elespectador.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(41,18,2,3,'2017-04-06 23:44:25','1','ntl2ua','0','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Alex Varon</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">3</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">ntl2ua</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">josel.luzt@ecci.edu.co</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(42,21,2,6,'2017-04-06 23:47:35','1','0myu4b','0','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">JORGE MAYOLO</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">6</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">0myu4b</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">alex@alex.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(43,22,2,4,'2017-04-07 00:07:56','1','nuvzp1','7','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Julian Alberto</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito colina</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogotá</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">4</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">nuvzp1</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">leandro@leandro.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(44,5,3,4,'2017-04-07 01:56:40','1','8hy7pl','7','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Ferney  Romero</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito Americas</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogota</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">4</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">8hy7pl</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">leandro@leandro.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>'),(45,5,3,5,'2017-04-07 02:18:42','1','0azjyc','7','<!DOCTYPE html>\n<html lang=\"es\">\n<head>\n	<meta charset=\"UTF-8\">\n	<title>Resultado Reserva</title>\n</head>\n<body>\n	<style type=\"text/css\">\n.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}\n.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}\n.tg .tg-xibm{font-weight:bold;font-size:18px;background-color:#c0c0c0;vertical-align:top}\n.tg .tg-pl96{font-weight:bold;font-size:18px;vertical-align:top}\n.tg .tg-9apd{font-size:18px;background-color:#c0c0c0;text-align:center;vertical-align:top}\n.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}\n.tituloMail{font-size: 20px;text-align: center;vertical-align: top; width: 90%;}\n.contentTablaMail{width: 90%;}\n\n</style>\n\n\n<div>\n	<h4 class=\"tituloMail\">DATOS DE RESERVA</h4>\n</div>\n<div class=\"contentTablaMail\">\n<table class=\"tg\">\n  <tr>\n    <th class=\"tg-xibm\">Nombre</th>\n    <th class=\"tg-9apd\">Ferney  Romero</th>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Tienda</td>\n    <td class=\"tg-13pz\">Exito Americas</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Ciudad Redencion</td>\n    <td class=\"tg-9apd\">Bogota</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Cantidad de Rizadores</td>\n    <td class=\"tg-13pz\">5</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Fecha de Redención </td>\n    <td class=\"tg-9apd\">12/03/2017</td>\n  </tr>\n  <tr>\n    <td class=\"tg-pl96\">Código Redención</td>\n    <td class=\"tg-13pz\">0azjyc</td>\n  </tr>\n  <tr>\n    <td class=\"tg-xibm\">Córreo Electrónico</td>\n    <td class=\"tg-9apd\">leandro@leandro.com</td>\n  </tr>  \n</table>\n</div>\n</body>\n</html>');
/*!40000 ALTER TABLE `Reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Roll`
--

DROP TABLE IF EXISTS `Roll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Roll` (
  `idRoll` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRoll` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idRoll`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Roll`
--

LOCK TABLES `Roll` WRITE;
/*!40000 ALTER TABLE `Roll` DISABLE KEYS */;
INSERT INTO `Roll` VALUES (1,'Administrador'),(2,'Vendedor'),(3,'Supervisor');
/*!40000 ALTER TABLE `Roll` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserSystem`
--

LOCK TABLES `UserSystem` WRITE;
/*!40000 ALTER TABLE `UserSystem` DISABLE KEYS */;
INSERT INTO `UserSystem` VALUES (5,'Leandro Romero','80797521','Ing Desarrollo','lromero@elespectador.com','aGF6RllPNkRsc1dSM2IybVV1TWZpQT09','1'),(7,'Catalina Gonzalez','53074849','Productora','cgonzalez@elespectador.com','cEJWemhaM3ZlcnJYc3dySEdNUnBWdz09','2');
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (5,'Ferney ','Romero','80797521','leandro@leandro.com','Cra 63 # 4b - 16','2','3138792939','','johan ','Romero','Ramire'),(17,'Andrea','silva','53074849','ANDREA@ANDREA.COM','Calle 7 a bis b 80 a 77','1','321654','127.0.0.1','','',''),(18,'Alex','Varon','123','josel.luzt@ecci.edu.co','calle 5','1','3138792939','127.0.0.1','','',''),(19,'Juan ','Sanche','456','cgonzalez@elespectador.com','Calle 100 ','1','31313','127.0.0.1','Leandro','Romer','123456'),(20,'Juliana','Romero','789','psanchez@elespectador.com','bosa ','1','098767898765','127.0.0.1','','',''),(21,'JORGE','MAYOLO','789456','alex@alex.com','Carrera 63 # 4b - 16','1','31313','127.0.0.1','','',''),(22,'Julian','Alberto','654987','leandro@leandro.com','calle 5','1','3138792939','127.0.0.1','Leandro','Romer','123456');
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
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logEventos`
--

LOCK TABLES `logEventos` WRITE;
/*!40000 ALTER TABLE `logEventos` DISABLE KEYS */;
INSERT INTO `logEventos` VALUES (1,'Registro NO Exitoso','0000-00-00 00:00:00',0),(2,'Registro NO Exitoso','0000-00-00 00:00:00',0),(3,'Registro NO Exitoso','0000-00-00 00:00:00',0),(4,'Registro NO Exitoso','0000-00-00 00:00:00',0),(5,'Registro NO Exitoso','0000-00-00 00:00:00',0),(6,'Registro NO Exitoso','0000-00-00 00:00:00',0),(7,'Registro NO Exitoso','0000-00-00 00:00:00',0),(8,'Registro NO Exitoso','0000-00-00 00:00:00',0),(9,'Registro NO Exitoso','0000-00-00 00:00:00',0),(10,'Registro NO Exitoso','2017-04-03 17:04:34',0),(11,'Registro Exitoso','2017-04-03 22:07:20',1),(12,'Registro Exitoso','2017-04-03 22:08:28',1),(13,'Registro Exitoso','2017-04-03 22:09:42',1),(14,'Registro Exitoso','2017-04-03 22:11:24',1),(15,'Registro Exitoso','2017-04-03 22:14:03',1),(16,'Registro Exitoso','2017-04-03 22:15:55',1),(17,'Registro Exitoso','2017-04-03 22:18:10',5),(18,'Registro Exitoso','2017-04-03 22:19:16',5),(19,'Registro Exitoso','2017-04-03 22:20:10',5),(20,'Registro Exitoso','2017-04-03 22:22:31',5),(21,'Registro Exitoso','2017-04-03 22:28:18',5),(22,'Registro Exitoso','2017-04-03 22:31:50',5),(23,'Registro Exitoso','2017-04-04 15:12:08',5),(24,'Registro Exitoso','2017-04-04 15:36:55',6),(25,'Registro Exitoso','2017-04-04 16:25:34',6),(26,'Registro Exitoso','2017-04-05 22:14:17',6),(27,'Registro Exitoso','2017-04-06 18:48:26',6),(28,'Registro Exitoso','2017-04-06 19:07:39',6),(29,'Registro Exitoso','2017-04-06 19:13:59',6),(30,'Registro Exitoso','2017-04-06 19:15:35',6),(31,'Registro Exitoso','2017-04-06 19:24:19',6),(32,'Registro Exitoso','2017-04-06 20:02:52',6),(33,'Registro Exitoso','2017-04-06 20:04:43',6),(34,'Registro Exitoso','2017-04-06 20:05:19',6),(35,'Registro Exitoso','2017-04-06 20:05:45',6),(36,'Registro Exitoso','2017-04-06 20:18:03',6),(37,'Registro Exitoso','2017-04-06 20:27:25',6),(38,'Registro Exitoso','2017-04-06 20:40:53',6),(39,'Registro Exitoso','2017-04-06 21:51:25',6),(40,'Registro Exitoso','2017-04-06 21:54:37',6),(41,'Registro Exitoso','2017-04-06 21:59:09',6),(42,'Registro Exitoso','2017-04-06 22:00:05',6),(43,'Registro Exitoso','2017-04-06 22:03:54',6),(44,'Registro Exitoso','2017-04-06 22:15:35',6),(45,'Registro Exitoso','2017-04-06 22:22:08',6),(46,'Registro Exitoso','2017-04-06 22:40:41',6),(47,'Registro Exitoso','2017-04-06 22:43:01',6),(48,'Registro Exitoso','2017-04-06 22:45:32',6),(49,'Registro Exitoso','2017-04-06 22:49:02',6),(50,'Registro Exitoso','2017-04-06 22:51:05',6),(51,'Registro Exitoso','2017-04-06 23:31:34',6),(52,'Registro Exitoso','2017-04-07 02:03:19',6),(53,'Registro Exitoso','2017-04-07 02:11:59',6),(54,'Registro Exitoso','2017-04-07 02:14:13',6),(55,'Registro Exitoso','2017-04-07 02:20:28',6),(56,'Registro Exitoso','2017-04-07 02:22:58',6),(57,'Registro Exitoso','2017-04-07 02:26:34',6),(58,'Registro Exitoso','2017-04-07 02:27:52',6),(59,'Registro Exitoso','2017-04-07 02:29:34',6),(60,'Registro Exitoso','2017-04-07 02:31:35',6),(61,'Registro Exitoso','2017-04-07 02:33:27',6),(62,'Registro Exitoso','2017-04-07 02:43:36',6),(63,'Registro Exitoso','2017-04-07 02:47:15',6),(64,'Registro Exitoso','2017-04-07 02:49:49',6),(65,'Registro Exitoso','2017-04-07 02:54:11',6),(66,'Registro Exitoso','2017-04-07 03:11:59',6),(67,'Registro Exitoso','2017-04-07 03:20:00',6),(68,'Registro Exitoso','2017-04-07 04:50:38',6),(69,'Registro Exitoso','2017-04-07 05:06:43',7),(70,'Registro Exitoso','2017-04-07 05:26:21',5),(71,'Registro Exitoso','2017-04-07 05:29:02',5),(72,'Registro Exitoso','2017-04-07 05:45:37',5),(73,'Registro Exitoso','2017-04-07 06:19:30',5),(74,'Registro Exitoso','2017-04-07 06:20:00',7),(75,'Registro Exitoso','2017-04-07 07:45:54',5),(76,'Registro Exitoso','2017-04-07 07:48:55',5),(77,'Registro Exitoso','2017-04-07 07:54:00',5);
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

-- Dump completed on 2017-04-07  3:44:07

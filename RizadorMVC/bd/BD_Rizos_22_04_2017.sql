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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Almacenes`
--

LOCK TABLES `Almacenes` WRITE;
/*!40000 ALTER TABLE `Almacenes` DISABLE KEYS */;
INSERT INTO `Almacenes` VALUES (5,'65','Éxito Uniarmenia','Armenia','CR 14 # 14 - 34'),(6,'383','Éxito Manizales','Manizales','CR 20 CL 34 CC FUNDADORES'),(7,'420','Éxito Sancancio','Manizales','CL 66 con CR 28'),(8,'58','Éxito Pasto','Pasto','CR 22 B # 2-57 PANAMERICANA'),(9,'62','Éxito Parque Arboleda','Pereira','AV CIRCUNVALAR 120 # 5 -20'),(10,'63','Éxito Pereira Victoria','Pereira','CR 10 # 14 - 71'),(11,'174','Éxito Pereira Cuba','Pereira','CL 71 CR 26 Y 27 BARRIO CUBA'),(12,'435','Éxito Panamericana','Popayán','CR 9 # 6 N 03'),(13,'71','Éxito Bucaramanga (La Rosita)','Bucaramanga','DIAGONAL 15 # 16 -39'),(14,'319','Éxito Cabecera','Bucaramanga','CR 35 A # 49 -27'),(15,'352','Éxito Oriental','Bucaramanga','TR ORIENTAL # 92 - 218'),(16,'325','Éxito Avenida Quinta','Cúcuta','AV 5a CL 12 - 68 ESQUINA'),(17,'353','Éxito San Mateo','Cúcuta','AV DEMETRIO MENDOZA CON DG SANTANDER'),(18,'156','Éxito Ibagué','Ibagué','CR 5 # 80 - 60'),(19,'156','Éxito Ibagué','Ibagué','CR 5 # 80 - 60'),(20,'157','Éxito San Pedro','Neiva','AV 26 CL 39'),(21,'419','Éxito La Toma Neiva','Neiva','CL 15 # 5-39'),(22,'159','Éxito La Sabana','Villavicencio','CL 7 # 45 - 185 ANTIGUO IDEMA'),(23,'358','Éxito Unicentro Villavicencio','Villavicencio','AV 40 # TR 33 ESQUINA C.C LOCAL 142'),(24,'44','Éxito Cartagena','Cartagena','CL 31 # 69 - 75'),(25,'367','Éxito San Diego Cartagena','Cartagena','CL 38 # 10 - 85'),(26,'370','Éxito Castellana','Cartagena','AV PEDRO DE HEREDIA SECTOR VILLA SANDRA'),(27,'371','Éxito Matuna','Cartagena','AV VENEZUELA CR 35 # 9-41'),(28,'262','Éxito Montería Norte','Montería','CR 6 # 62 - 21'),(29,'357','Éxito Alamedas del Sinú','Montería','CL 48 CON CR 13 Y 14'),(30,'363','Éxito Buenavista Santa Marta','Santa Marta','CL 32 # 29A - 500'),(31,'43','Éxito Sincelejo','Sincelejo','CR 25 # 23 - 49 AV LAS PEÑITAS'),(32,'171','Éxito Soledad','Soledad','CL 32 # 30 - 15 LOTE 1A'),(33,'41','Éxito Barranquilla','Barranquilla','CR 51 B # 87 - 50'),(34,'47','Éxito Metropolitano','Barranquilla','AV CIRCUNVALAR CL MURILLO ESQUINA'),(35,'362','Éxito Buenavista Barranquilla','Barranquilla','CR 53 CON CLE 98'),(36,'366','Éxito Murillo','Barranquilla','CL 45 # 26 - 129'),(37,'368','Éxito San Francisco','Barranquilla','CR 38 # 70B - 177'),(38,'369','Éxito Panorama','Barranquilla','CL 31 # 6B - 135'),(39,'30','Éxito Bello (Puerta del norte)','Bello','DG 51 # 35 - 120'),(40,'81','Éxito Country','Bogotá','CL 134 # 14- 51'),(41,'83','Éxito Villamayor','Bogotá','AUTOPISTA SUR 38 A - 07'),(42,'84','Éxito Américas','Bogotá','AV AMÉRICAS # 68 A 94'),(43,'86','Éxito Calle 80','Bogotá','CR 59 A # 79 - 30'),(44,'88','Éxito Colina','Bogotá','AV BOYACÁ CR 72 # 146 B'),(45,'89','Éxito Fontibón','Bogotá','AV CENTENARIO # 106-104'),(46,'92','Éxito Norte Bogotá','Bogotá','CL 175 # 22 - 13'),(47,'93','Éxito Suba','Bogotá','CL 145 # 105B - 58'),(48,'94','Éxito Chapinero','Bogotá','CL 52 # 13-70'),(49,'97','Éxito Usme','Bogotá','CR 1 B # 65-58 SUR'),(50,'281','Éxito Floresta','Bogotá','AV 68 # 90 - 88'),(51,'283','Éxito Nuevo Kenedy','Bogotá','CR 78 K # 37A - 53 SUR'),(52,'302','Éxito Tunal','Bogotá','CL 47B SUR # 24 B-33 LOCAL 56 CC TUNAL'),(53,'303','Éxito Unicentro Bogotá','Bogotá','AV 15 # 123-30 LOCAL 1233'),(54,'355','Éxito Álamos','Bogotá','TR 96 # 70A- 85'),(55,'356','Éxito Gran Estación','Bogotá','AV ESPERANZA # 62-49 LOCAL 134-235'),(56,'376','Éxito Bosa','Bogotá','CL 65 SUR # 78H-54'),(57,'51','Éxito San Fernando','Cali','CL 5 # 38 D 35'),(58,'51','Éxito Unicentro Cali','Cali','CR 100 # 5 - 169 L 244'),(59,'483','Éxito Fontanar Chía','Chía','HACIENDA FONTANAR CHÍA'),(60,'35','Éxito Envigado','Envigado','CR 48 # 34 SUR 29'),(61,'42','Éxito Rionegro','Rionegro','CL 43 AV GALAN CON CR 56 C.C SA'),(62,'354','Éxito Las Flores','Valledupar','Calle 16 Con Carrera 19 Esquina, Barrio Flore'),(63,'28','Éxito del Este ','Medellín','CR 25 # 3 - 1 LOCAL 9901 CC Del Este'),(64,'31','Éxito Colombia','Medellín','CR 66 # 49 - 01'),(65,'33','Éxito Poblado','Medellín','CL 10 # 43 E 135'),(66,'37','Éxito Laureles','Medellín','CR 81 # 37 - 100'),(67,'39','Éxito San Antonio','Medellín','CL 48 # 46 - 115'),(68,'408','Éxito San Diego','Medellín','CL 34 # 43 - 66'),(69,'409','Éxito Unicentro Medellín','Medellín','CR 66 A # 34 A 25 LOCAL 039'),(70,'514','Éxito Molinos','Medellín','CL 30A # 82 A 50 L 119');
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ciudades`
--

LOCK TABLES `Ciudades` WRITE;
/*!40000 ALTER TABLE `Ciudades` DISABLE KEYS */;
INSERT INTO `Ciudades` VALUES (1,'Bogotá'),(2,'Cali'),(5,'Armenia'),(6,'Manizales'),(7,'Barranquilla'),(9,'Medellín'),(10,'Cartagena'),(11,'Bucaramanga'),(12,'Cúcuta'),(13,'Santa Marta'),(14,'Pereira'),(15,'Villavicencio'),(16,'Valledupar'),(17,'Pasto'),(18,'Popayán'),(19,'Ibagué'),(20,'Neiva'),(21,'Montería'),(22,'Sincelejo'),(23,'Chía'),(24,'Rionegro'),(25,'Envigado'),(26,'Bello'),(27,'Soledad');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EstadosReserva`
--

LOCK TABLES `EstadosReserva` WRITE;
/*!40000 ALTER TABLE `EstadosReserva` DISABLE KEYS */;
INSERT INTO `EstadosReserva` VALUES (1,'Activa'),(2,'Espera'),(3,'Cerrado');
/*!40000 ALTER TABLE `EstadosReserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Producto`
--

DROP TABLE IF EXISTS `Producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nomProducto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `stockProducto` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `DescripProducto` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoProducto` int(11) NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Producto`
--

LOCK TABLES `Producto` WRITE;
/*!40000 ALTER TABLE `Producto` DISABLE KEYS */;
INSERT INTO `Producto` VALUES (1,'Rizador',8000,'2017-04-24','2017-06-01','Rizador para Cabello revista VEAº',1);
/*!40000 ALTER TABLE `Producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Redenciones`
--

DROP TABLE IF EXISTS `Redenciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Redenciones` (
  `idRedenciones` int(11) NOT NULL,
  `fechaRedencion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantidadProductos` int(11) NOT NULL,
  `activada` tinyint(1) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `ordenRedenciones` int(11) NOT NULL,
  PRIMARY KEY (`idRedenciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Redenciones`
--

LOCK TABLES `Redenciones` WRITE;
/*!40000 ALTER TABLE `Redenciones` DISABLE KEYS */;
INSERT INTO `Redenciones` VALUES (1,'Apartir del 12/05/2017',1500,1,1,1),(2,'Apartir del 13/05/2017',3000,0,1,2),(3,'Apartir del 14/05/2017',4500,0,1,3),(4,'Apartir del 15/05/2017',6000,0,1,4),(5,'Apartir del 16/05/2017',7500,0,1,5),(6,'Apartir del 17/05/2017',8000,0,1,6);
/*!40000 ALTER TABLE `Redenciones` ENABLE KEYS */;
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
  `idRedenciones` int(11) NOT NULL,
  PRIMARY KEY (`idReservas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservas`
--

LOCK TABLES `Reservas` WRITE;
/*!40000 ALTER TABLE `Reservas` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserSystem`
--

LOCK TABLES `UserSystem` WRITE;
/*!40000 ALTER TABLE `UserSystem` DISABLE KEYS */;
INSERT INTO `UserSystem` VALUES (5,'Leandro Romero','80797521','Ing Desarrollo','lromero@elespectador.com','aGF6RllPNkRsc1dSM2IybVV1TWZpQT09','1'),(7,'Catalina Gonzalez','53074849','Productora','cgonzalez@elespectador.com','cEJWemhaM3ZlcnJYc3dySEdNUnBWdz09','2'),(9,'Juan Camilo Ochoa','1047447202','Comunicador Social','jcochoa@elespectador.com','cjU4WHNqS0hBMFVLL2kvY0s3YjAzQT09','1'),(10,'Luz Ramirez','52864349','Auxiliar Servicio al Cliente','lramirez@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(11,'Tatiana Gomez','30768583','Administrador','tgomez@gmail.com','dmxLWUZaNkh0RDc5YmhXYmUydGRGUT09','2'),(12,'JHON SARMIENTO','1073155263','ASESOR 1','asesorcomercial1@elespectador-cromos.com','WXJZVzZYUkpCWXhmV3VRQ2lGK3pTQT09','2'),(13,'PAOLA ALDANA','1020748224','DATA MARSHALL','jaldana@elespectador.com','ODNvMndock14UmFnQ3pGTVhIaEZzdz09','2'),(14,'Mónica Ocampo','52979459','Coordinadora','mocampo@elespectador.com','Tng1VnMwZEMvaVR6bCtVOXV0bC8wQT09','2'),(15,'Daniela Pineda','1013679472','Auxiliar Servicio al Cliente','dpineda@elespectador-cromos.com','TXkxTmZmOERRWmYwdlNwRFI5MGIzdz09','2'),(16,'GLORIA CONSUELO ESPINOSA CASTAÑEDA','51608032','DIRECCION NACIONAL DE SUSCRIPCIONES','gespinosa@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(17,'SEBASTIAN MIRANDA','1033729268','ASESOR CALL','asesorcomercial8@elespectador-cromos.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(18,'LEIDY ECHEVERRIA','1022961278','ASESOR','asesorcomercial6@elespectador-cromos.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(19,'PAULA MALDONADO','1019083489','LIDER CALL','ASESORCOMERCIAL9@ELESPECTAOR-CROMOS.COM','aGFoYlZtRHg2b1hIamZQK3lBOFJXZz09','2'),(20,'PAULA MALDONADO','1019083489','LIDER CALL','asesorcomercial9@espectador-cromos.com','aGFoYlZtRHg2b1hIamZQK3lBOFJXZz09','2'),(21,'YESSICA ANDREA VARGAS','1073693851','ASESOR','asesorcomercial19@elespecrador-cromos.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(22,'YESSICA ANDREA VARGAS','1073693851','ASESOR','asesorcomercial19@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(23,'NICOLAS ORTIZ ','1073516560','ASESORCOMERCIAL14','asesorcomercial14@elespectador-cromos.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(24,'CHEILI STELLA MURCIA','52860810','ASESOR','asesorcomercial5@elespectador-cromos.com','dHdyODBvTlMzT0pDQUlBSlZKelhuQT09','2'),(25,'PAULA MALDONADO','1019083489','asesorcall','asesorcomercial9@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(26,'KAREN PAOLA OCHOA','1022385700','SAC','KOCHOA@ELESPECTADOR.COM','WVcyRzNMMWVKN2ZkbWFBUmdFSXVrdz09','2'),(27,'SANDRA FUENTES','1019122752','ASESOR CALL','asesorcomercial17@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(28,'Laura Vega','1024537496','Auxiliar de servicio al cliente','lvega@elespectador-cromos.com','RHJQOVZIRjc1dFFLZ0lUdTF3emtHdz09','2'),(29,'JHEIDER ARIZA','1030618556','ASESOR  CALL CENTER','asesorcomercial23@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(30,'MARTHA PATIÑO','24041453','AUXILIAR DE SAC','mpatino@elespectador.com','YUNaQVBKSjcrZ0ltRFlxOGcwaWl3Zz09','2'),(31,'MARCELA FIERRO','1030556320','ASESOR CALL','asesorcomercial4@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(32,'JHON WILMER SARMIENTO','1073155262','ASESOR CALL','asesorcomercial1@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(33,'TATIANA URBINA','1033782523','ASESOR CALL','asesorcomercial2@elespectador.com','S1RNc0lkYjNVQUNzWmpmMEcwMHdnUT09','2'),(34,'CARLOS DIAZ','1019138748','ASESOR CALL','asesorcomercial7@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(35,'MARIA A GONZALEZ','1023001936','ASESOR CALL','asesorcomercial26@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(36,'JEISSON CAMACHO ','1073710831','ASESOR CALL','asesorcomercial11@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(37,'JHOAN PEREZ','1023025674','ASESOR CALL','asesorcomercial3@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(38,'MICHAEL GONZALEZ','1022398032','ASESOR CALL','asesorcomercial20@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(39,'JOHANNA GUEVARA','1019086605','ASESOR CALL','asesorcomercial25@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(40,'JONATHAN SANTOS','1012363408','ASESOR CALL','asesorcomercial15@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(41,'LAURA VERA','1026286957','ASESOR CALL','asesorcomercial22@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2'),(42,'JESSICA MEJIA','1013628980','ASESOR CALL','asesorcomercial18@elespectador.com','cTRxTlNYb3R3MFFRWUlNbmF3Z1VBZz09','2');
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
  `telUsuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ipUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombreRecoje` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellRecoje` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedulaRecoje` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logEventos`
--

LOCK TABLES `logEventos` WRITE;
/*!40000 ALTER TABLE `logEventos` DISABLE KEYS */;
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

-- Dump completed on 2017-04-22 13:31:53

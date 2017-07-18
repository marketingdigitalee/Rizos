CREATE DATABASE  IF NOT EXISTS `profesionlider` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `profesionlider`;
-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: profesionlider
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

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
-- Table structure for table `Noticias`
--

DROP TABLE IF EXISTS `Noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Noticias` (
  `idNoticia` int(11) NOT NULL AUTO_INCREMENT,
  `tituloNoticia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fotoNoticia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripNoticia` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `urlNoticia` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idNoticia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Noticias`
--

LOCK TABLES `Noticias` WRITE;
/*!40000 ALTER TABLE `Noticias` DISABLE KEYS */;
INSERT INTO `Noticias` VALUES (1,'La mujer que lidera el Grupo de Energía de Bogotá\n\n','astrid_a.jpg','Astrid Álvarez Hernández ha pasado por Ecopetrol y el Acueducto de Bogotá. Ahora, al frente del mayor conglomerado energético del país, habla de cómo el éxito es el tiempo compartido entre la profesión y la familia junto con la conciencia social.','http://www.elespectador.com/economia/la-mujer-que-lidera-el-grupo-de-energia-de-bogota-articulo-693018');
/*!40000 ALTER TABLE `Noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Personas`
--

DROP TABLE IF EXISTS `Personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Personas` (
  `id_Persona` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Persona` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apell_Persona` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula_Persona` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tel_Persona` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `genero_Persona` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_Persona` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `emp_Persona` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `acepto_Persona` tinyblob NOT NULL,
  `ip_Persona` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_Persona`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Personas`
--

LOCK TABLES `Personas` WRITE;
/*!40000 ALTER TABLE `Personas` DISABLE KEYS */;
INSERT INTO `Personas` VALUES (1,'Leandro','Romero','80797521','3138792939','Masculino','lromero@elespectador.com','El Espectador','on','127.0.0.1'),(2,'Tatiana','Gomez','1018406742','3184848472','Femenino','tgomez@cromos.com.co','Cromos','1','127.0.0.1'),(3,'Maria Catalina','Fernandez','1019087058','3102441345','Femenino','mfernandez@elespectador.com','El Espectador','1','127.0.0.1'),(4,'','','','','Masculino','','','1','127.0.0.1');
/*!40000 ALTER TABLE `Personas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-14 16:54:27

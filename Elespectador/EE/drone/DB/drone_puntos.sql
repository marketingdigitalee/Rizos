-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 06:00 AM
-- Server version: 5.1.69-community-log
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tecnija_espectador`
--

-- --------------------------------------------------------

--
-- Table structure for table `drone_puntos`
--

CREATE TABLE IF NOT EXISTS `drone_puntos` (
  `cod_almacen` int(8) NOT NULL,
  `almacen` varchar(128) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(128) CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `drone_puntos`
--

INSERT INTO `drone_puntos` (`cod_almacen`, `almacen`, `ciudad`, `direccion`) VALUES
(81, 'ÉXITO COUNTRY', 'Bogotá', 'Cl 134 No 14 - 51'),
(88, 'ÉXITO LA COLINA', 'Bogotá', 'Transv 46 No 146 A 25'),
(90, 'ÉXITO FACATATIVA', 'Facatativá', 'Cra 5ta No 13-50'),
(91, 'ÉXITO OCCIDENTE', 'Bogotá', 'Av el Cortijo con calle 75 F Autopista Medellin con Av el Cortijo'),
(92, 'ÉXITO NORTE', 'Bogotá', 'Cra 43 No 173 - 98'),
(93, 'ÉXITO SUBA', 'Bogotá', 'Av Suba con Av Ciudad de Cali'),
(94, 'ÉXITO CHAPINERO', 'Bogotá', 'Cl 52 No 13 - 70'),
(158, 'ÉXITO ZIPAQUIRA', 'Cundinamarca', 'Calle 1 No 10 - 08 Centro Comercial La Casona Plaza Zipaquira'),
(303, 'ÉXITO UNICENTRO BOGOTA', 'Bogotá', 'Av 15 No 123 - 30'),
(355, 'ÉXITO ALAMOS (CV)BOGOTA', 'Bogotá', 'Transv 99 # 70 A 89, Barrio ALAMOS'),
(135, 'ÉXITO YOPAL', 'Yopal-Casanare', 'Calle 30 No 26 - 29/65 Plaza Comercial Alcaravan'),
(157, 'ÉXITO SAN PEDRO NEIVA', 'Neiva', 'Av 26 Cl 39 Esquina'),
(159, 'ÉXITO LA SABANA VILLAVICENCIO', 'Villavicencio', 'Cl 7 A Avenida 40'),
(358, 'ÉXITO UNICENTRO VILLAVICENCIO', 'Villavicencio', 'Avenida 40 Transversal 35 y  Avenida 33A'),
(444, 'ÉXITO GIRARDOT', 'Girardot', 'Carrera 10 No 25 - 53'),
(83, 'ÉXITO VILLA MAYOR', 'Bogotá', 'Autopista sur con Cl 38 A sur 07'),
(84, 'ÉXITO AMERICAS', 'Bogotá', 'Av Americas No 68 A  94'),
(86, 'ÉXITO CALLE 80', 'Bogotá', 'Cra 59 A No 79 - 30'),
(89, 'ÉXITO FONTIBON', 'Bogotá', 'Av Centenario Con Cl 106 Zona Franca'),
(97, 'ÉXITO USME', 'Bogotá', 'Carrera 1ra No 65D sur 58'),
(173, 'ÉXITO MOSQUERA', 'Mosquera (Cundinamarca)', 'Cr 3 No 15A - 57'),
(282, 'ÉXITO TINTAL (CAF)', 'Bogotá', 'Calle 6A No 95-75'),
(283, 'ÉXITO NUEVO KENNEDY (CAF)', 'Bogotá', 'Cra 78K No 37A - 53 Sur'),
(284, 'ÉXITO VEINTE DE JULIO (CAF)', 'Bogotá', 'Calle 21 Sur No 5A-34'),
(302, 'ÉXITO CIUDAD TUNAL', 'Bogotá', 'Calle 47 B sur No 24 B - 33 Centro Comercial Ciudad Tunal'),
(376, 'ÉXITO BOSA', 'Bogotá', 'Calle 65 Sur No 78 H 54 Bosa'),
(51, 'ÉXITO SAN FERNANDO', 'Cali', 'Cl 5 No 38 D 35'),
(54, 'ÉXITO LA FLORA', 'Cali', 'Av 3 F norte No 52 N 46'),
(56, 'ÉXITO UNICALI', 'Cali', 'Cra 100 con Pasoancho No 5 - 169 Local 244'),
(402, 'ÉXITO CHIPICHAPE', 'Cali', 'Cl 38  No 6 - 35  Local 519'),
(58, 'ÉXITO PASTO', 'Pasto', 'Calle 2a (Av. Panamericana) Entre las Carreras 22b y 22d.'),
(435, 'ÉXITO PANAMERICANA POPAYAN', 'Popayán', 'Cra 9 No 6 N 03'),
(71, 'ÉXITO BUCARAMANGA ROSITA', 'Bucaramanga', 'Cra 17 No 45 - 77'),
(180, 'ÉXITO BARRANCABERMEJA', 'Santander', 'Centro Comercial IWANA.  Calle 50 entre cra 10 y 11 Sector comercial'),
(352, 'ÉXITO ORIENTAL BUCARAMANGA CV', 'Bucaramanga', 'Viaducto la Flora. Frente estadio de atletismo. Carretera Oriental'),
(353, 'ÉXITO SAN MATEO CUCUTA (CV)', 'Cúcuta', 'Avenida Demetrio Mendoza, Diagonal Santander'),
(578, 'ÉXITO SOGAMOSO', 'Sogamoso', 'Cra 13 No 11 - 50'),
(33, 'ÉXITO POBLADO', 'Medellín', 'Cl 10 No 43 E 135'),
(31, 'ÉXITO COLOMBIA ', 'Medellín', 'Cra 66 No 49 - 01'),
(30, 'ÉXITO BELLO ', 'Bello', 'Diagonal 51 No 35 - 120 - Estación Niquia'),
(408, 'ÉXITO SAN DIEGO ', 'Medellín', 'Cl  34 No 43 - 66  Local 132 y 133'),
(35, 'ÉXITO ENVIGADO', 'Envigado, Antioquia', 'Cra 48 No 34 B sur 29'),
(75, 'ÉXITO MAYORCA', 'Sabaneta (Antioquia)', 'Calle 51 sur # 48 - 57'),
(37, 'ÉXITO LAURELES ', 'Medellín', 'Cra 81 No 37 - 100'),
(41, 'ÉXITO BARRANQUILLA NORTE', 'Barranquilla', 'Cra 51 B No 87 - 50'),
(47, 'ÉXITO BARRANQUILLA METROPOLITANO', 'Barranquilla', 'Cll Avenida Circunvalar con Calle Murillo (Esquina)'),
(44, 'ÉXITO CARTAGENA', 'Cartagena', 'Avenida Pedro de Heredia No 69 - 75, sector la Contadora.'),
(371, 'ÉXITO MATUNA CARTAGENA', 'Cartagena', 'Av. Venezuela Calle 35 No 9-41'),
(354, 'ÉXITO LAS FLORES VALLEDUPAR', 'Valledupar', 'Calle 16 Con Carrera 19 Esquina, Barrio Flores'),
(363, 'ÉXITO BUENA VISTA SANTA MARTA', 'Santa Marta', 'Av. Libertador, Parque los Trupillos frente a la quinta San Pedro'),
(357, 'ÉXITO ALAMEDAS DEL SINU MONTERIA', 'Montería (Córdoba)', 'Clle 48 Cra 13 y 14'),
(383, 'ÉXITO MANIZALES', 'Manizales', 'Carrera 20 No. 34 - 18 Centro Comercial  Fundadores'),
(63, 'ÉXITO PEREIRA', 'Pereira', 'Cra 10 No 14 - 71'),
(65, 'ÉXITO UNICENTRO ARMENIA', 'Armenia', 'Carrera 14 No 14 - 34 (Centro Comercial Unicentro)'),
(156, 'ÉXITO IBAGUE', 'Ibague', 'Cra 5 No 80 - 60'),
(483, 'ÉXITO FONTANAR CHIA', 'Chia', '-'),
(42, 'ÉXITO RIONEGRO', 'Rionegro', '-'),
(43, 'ÉXITO SINCELEJO', 'Sincelejo', '-'),
(580, 'ÉXITO TUNJA', 'Tunja', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 06:03 AM
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
-- Table structure for table `drone_usuario_punto`
--

CREATE TABLE IF NOT EXISTS `drone_usuario_punto` (
  `id_reserva` bigint(12) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) NOT NULL,
  `almacen_code` int(11) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_reserva`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9239 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

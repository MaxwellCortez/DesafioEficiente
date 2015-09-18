-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Set-2015 às 03:50
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desafioeficiente`
--
CREATE DATABASE desafioeficiente;

USE desafioeficiente;
-- --------------------------------------------------------

--
-- Estrutura da tabela `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `model` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `hp` int(11) NOT NULL,
  `consumptiongas` float NOT NULL,
  `consumptioneth` float NOT NULL,
  `revisionavg` float NOT NULL,
  `insuranceavg` float NOT NULL,
  `point` int(11) NOT NULL,
  `img` varchar(60) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `car`
--

INSERT INTO `car` (`model`, `price`, `hp`, `consumptiongas`, `consumptioneth`, `revisionavg`, `insuranceavg`, `point`, `img`, `id`) VALUES
('VW Gol 1.0 2015', 29500, 68, 8.5, 13, 365, 2700, 2, 'img/gol.png', 1),
('Fiat Palio 1.0 2015', 27900, 65, 9.2, 14.5, 388, 1200, 4, 'img/palio.jpg', 0),
('Chevrolet Vectra 2.0 2015', 40000, 80, 11, 8, 500, 650, 4, 'img/vectra.png', 2),
('Chevrolet Onix 1.6 2015', 38000, 70, 14, 11, 300, 300, 4, 'img/Onix.png', 3),
('Chevrolet Camaro 3.0 2013', 200000, 110, 7, 4, 5000, 4500, 6, 'img/camaro.png', 4),
('Fiat Fiorino 1.0 2015', 25000, 60, 16, 13, 200, 230, 3, 'img/fiorino.jpg', 5),
('Ford KA 1.2 2015', 26000, 60, 15, 12, 168, 175, 3, 'img/fordka.jpg', 6),
('VW Fusca 1.0 1990', 10000, 50, 15, 10, 200, 200, 4, 'img/fusca.png', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

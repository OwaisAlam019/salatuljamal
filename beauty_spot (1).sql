-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2018 at 06:44 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty_spot`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_message`
--

DROP TABLE IF EXISTS `client_message`;
CREATE TABLE IF NOT EXISTS `client_message` (
  `name` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_message`
--

INSERT INTO `client_message` (`name`, `email`, `phone`, `subject`, `msg`, `msg_id`) VALUES
('Owais Alam', 'owaisstar@gmail.com', '3343065615', 'm,m,m,', 'kkkkk', 2),
('Owais Alam', 'owaisstar@gmail.com', '3343065615', 'Test', 'hjhjh', 7),
('Owais Alam', 'owaisstar@gmail.com', '3343065615', 'kjk', 'nnns', 8);

-- --------------------------------------------------------

--
-- Table structure for table `cosmetics`
--

DROP TABLE IF EXISTS `cosmetics`;
CREATE TABLE IF NOT EXISTS `cosmetics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `facial` int(1) NOT NULL,
  `eyebrow` int(1) NOT NULL,
  `microdermabrasion` int(1) NOT NULL,
  `acne_treatment` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosmetics`
--

INSERT INTO `cosmetics` (`id`, `reservation_id`, `facial`, `eyebrow`, `microdermabrasion`, `acne_treatment`) VALUES
(1, 6, 0, 1, 0, 0),
(2, 7, 0, 0, 1, 0),
(3, 1, 1, 1, 0, 0),
(4, 1, 1, 0, 0, 1),
(5, 2, 1, 1, 0, 0),
(6, 3, 0, 1, 0, 0),
(7, 4, 0, 0, 0, 0),
(8, 5, 0, 1, 0, 0),
(9, 6, 0, 0, 0, 0),
(10, 7, 0, 1, 0, 0),
(11, 8, 1, 0, 0, 0),
(12, 9, 0, 0, 0, 0),
(13, 10, 0, 1, 0, 0),
(14, 11, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`) VALUES
(1, 'owais', 'aaa@aas.cc', ''),
(2, 'owais', 'aaa@aas.cc', ''),
(3, 'owais', 'aaa@aas.cc', ''),
(4, 'owais', 'aaa@aas.cc', ''),
(5, 'owais', 'aaa@aas.cc', ''),
(6, 'owais', 'aaa@aas.cc', ''),
(7, 'owais', 'aaa@aas.cc', ''),
(8, 'owais', 'aaa@aas.cc', ''),
(9, 'Test Name', 'abc@abc.c', '212121'),
(10, 'Test 2', '', '34223'),
(11, 'Test2', 'abc@acd.c', '90090'),
(12, '', '', ''),
(13, 'Tesst12', '', '7878778'),
(14, 'Test32', '', '2123333'),
(15, 'Tesr233', '', '22233313'),
(16, 'Test 2', '', '78787878'),
(17, 'Test 2', '', '67676767'),
(18, 'Test 2', '', '898989'),
(19, 'Tes', 'test', '6767776');

-- --------------------------------------------------------

--
-- Table structure for table `hairdressing`
--

DROP TABLE IF EXISTS `hairdressing`;
CREATE TABLE IF NOT EXISTS `hairdressing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `wash` int(1) NOT NULL,
  `cut_finish` int(1) NOT NULL,
  `blow_dries` int(1) NOT NULL,
  `hair_colouring` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairdressing`
--

INSERT INTO `hairdressing` (`id`, `reservation_id`, `wash`, `cut_finish`, `blow_dries`, `hair_colouring`) VALUES
(1, 6, 0, 1, 0, 0),
(2, 7, 0, 0, 0, 0),
(3, 8, 0, 0, 1, 0),
(4, 1, 1, 1, 1, 1),
(5, 2, 0, 0, 1, 0),
(6, 3, 0, 1, 1, 0),
(7, 4, 0, 0, 0, 0),
(8, 5, 0, 1, 0, 0),
(9, 6, 0, 1, 0, 0),
(10, 7, 0, 1, 0, 0),
(11, 8, 0, 1, 0, 0),
(12, 9, 0, 0, 1, 1),
(13, 10, 0, 1, 0, 0),
(14, 11, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `notes` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `customer_id`, `date`, `time`, `notes`, `status`) VALUES
(1, 9, '2018-01-10', '23:45:00', 'test notes', 1),
(2, 10, '2018-01-17', '11:30:00', ' Test Notes', 1),
(3, 11, '2018-01-09', '10:30:00', 'tyyty', 0),
(4, 12, '1970-01-01', '09:00:00', '', 0),
(5, 13, '2018-01-10', '12:30:00', 'tetetet', 1),
(6, 14, '2018-01-17', '10:00:00', 'testeff', 1),
(7, 15, '2018-01-10', '10:30:00', 'test', 0),
(8, 16, '2018-01-10', '11:00:00', 'Test Notes klklklk', 0),
(9, 17, '2018-01-24', '11:00:00', 'hjhjhjh', 0),
(10, 18, '2018-01-10', '11:00:00', 'Test Notes', 0),
(11, 19, '2018-01-22', '09:00:00', 'test', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

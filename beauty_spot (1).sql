-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 10:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `client_message` (
  `name` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` int(20) NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `msg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cosmetics`
--

CREATE TABLE `cosmetics` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `facial` int(1) NOT NULL,
  `eyebrow` int(1) NOT NULL,
  `microdermabrasion` int(1) NOT NULL,
  `acne_treatment` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosmetics`
--

INSERT INTO `cosmetics` (`id`, `reservation_id`, `facial`, `eyebrow`, `microdermabrasion`, `acne_treatment`) VALUES
(1, 6, 0, 1, 0, 0),
(2, 7, 0, 0, 1, 0),
(3, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'owais', 'aaa@aas.cc', '');

-- --------------------------------------------------------

--
-- Table structure for table `hairdressing`
--

CREATE TABLE `hairdressing` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `wash` int(1) NOT NULL,
  `cut_finish` int(1) NOT NULL,
  `blow_dries` int(1) NOT NULL,
  `hair_colouring` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairdressing`
--

INSERT INTO `hairdressing` (`id`, `reservation_id`, `wash`, `cut_finish`, `blow_dries`, `hair_colouring`) VALUES
(1, 6, 0, 1, 0, 0),
(2, 7, 0, 0, 0, 0),
(3, 8, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(40) NOT NULL,
  `name` varchar(80) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `notes` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `customer_id`, `date`, `time`, `notes`, `status`) VALUES
(3, 3, '2016-12-16', '09:00:00', 'dssss', 0),
(4, 4, '2016-12-16', '09:00:00', 'dssss', 0),
(5, 5, '2016-12-16', '09:00:00', 'dssss', 0),
(6, 6, '2016-12-16', '09:00:00', 'dssss', 1),
(7, 7, '2016-12-29', '10:30:00', 'aa', 0),
(8, 8, '2016-12-23', '11:30:00', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_message`
--
ALTER TABLE `client_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `cosmetics`
--
ALTER TABLE `cosmetics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hairdressing`
--
ALTER TABLE `hairdressing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_message`
--
ALTER TABLE `client_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cosmetics`
--
ALTER TABLE `cosmetics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hairdressing`
--
ALTER TABLE `hairdressing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2021 at 05:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restside_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`email`, `name`, `id`) VALUES
('siddhhi@gmail.com', 'siddhi', 1),
('s@gmail.com', 'siddhi', 2),
('abc@gmail.com', 'abc', 3),
('c', 'k', 5),
('sdfgh', 'hotel', 6),
('abc@gmail.com', 's', 7),
('abc@gmail.com', 'abc', 12456),
('abc@gmail.com', 'siddhi', 12346),
('a', 'a', 9),
('a@gmail.com', 's', 10);

-- --------------------------------------------------------

--
-- Table structure for table `booking1`
--

DROP TABLE IF EXISTS `booking1`;
CREATE TABLE IF NOT EXISTS `booking1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking1`
--

INSERT INTO `booking1` (`id`, `name`, `email`, `type`, `check_in`, `check_out`) VALUES
(9098, 'siddhi', 'abc@gmail.com', 'luxury', '2021-09-14', '2021-09-25'),
(981256409, 'Siddhi Patil', 'siddhi@gmail.com', 'Family', '2021-09-24', '2021-09-26'),
(986, 'abc', 'abc@gmail.com', 'Luxury', '2021-09-17', '2021-09-17'),
(981234509, 'Akshata Joshi', 'ak@gmail.com', 'Family', '2021-09-18', '2021-09-26'),
(908345673, 'Priyanka Raut', 'priya@gmail.com', 'Deluxe', '2021-09-17', '2021-09-23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 12:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `name` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `num` varchar(250) NOT NULL,
  `home` varchar(250) NOT NULL,
  `soy` varchar(50) NOT NULL,
  `tambon` varchar(50) NOT NULL,
  `aum` varchar(50) NOT NULL,
  `jang` varchar(50) NOT NULL,
  `name23` int(50) NOT NULL,
  `num3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`name`, `name2`, `num`, `home`, `soy`, `tambon`, `aum`, `jang`, `name23`, `num3`) VALUES
('dsdss', 'dasddsad', '0', 'dsa', 'dasd', 'dsa', 'dsad', 'กระบี่', 0, '0000-00-00'),
('dsdss', 'dasddsad', '0', 'dsa', 'dasd', 'dsa', 'dsad', 'กระบี่', 0, '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

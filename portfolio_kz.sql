-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2020 at 07:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_kz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `user_email`, `user_pass`) VALUES
(1, 'KhadijaZahir', 'khadija@admin', 'khadijaadmin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `csubject` text NOT NULL,
  `cmessage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `cname`, `cemail`, `csubject`, `cmessage`) VALUES
(71, 'turkey', 'turkey@turkey', 'turkey', 'turkey'),
(72, 'andia', 'andia@andia', '', 'andia'),
(73, '', '', '', ''),
(74, 'd', 'd@gmail.com', 'd', 'dddddddddddddddddddd'),
(75, 'KK', 'KK@gmail.com', 'KK', 'KK'),
(76, 'KK', 'KK@gmail.com', 'KK', 'KK'),
(77, 'KKKK', 'KKKK@gmail.com', 'KKKK', 'KKKKK'),
(78, 'khadija', 'khadija@gmail.com', 'khadija', 'khadija'),
(79, 'fffffffffffffffffffffff', 'fffffffffffffffffffffff@gmail.com', 'fffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(80, 'Morocco', 'Morocco@gamil.com', 'Morocco', 'MoroccoMoroccoMoroccoMoroccoMoroccoMoroccoMoroccoMoroccoMorocco');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(20, 'Crafting', '6.jpg', 'g'),
(23, 'Logo', '11.jpg', ''),
(26, 'Business Card', '8.jpg', ''),
(27, 'Photography', '12.jpg', ''),
(28, 'Photography	', '14.jpg', ''),
(29, 'Photography	', '13.jpg', ''),
(37, 'Website', '17.jpg', ''),
(44, 'Photography', '1.jpg', ''),
(45, 'Website', '16.jpg', 'https://www.malekbennabi.net/'),
(47, 'vvvvvv', 'customize-desk-materials.jpg', 'vvvvvvv');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

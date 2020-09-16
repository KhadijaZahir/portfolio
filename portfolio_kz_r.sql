-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2020 at 03:19 AM
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
-- Database: `portfolio_kz_relationfk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_pass` varchar(250) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `username`, `admin_email`, `admin_pass`) VALUES
(1, 'khadija za', 'khadijaAdmin', 'khadija@Admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `csubject` text NOT NULL,
  `cmessage` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `cname`, `cemail`, `csubject`, `cmessage`) VALUES
(71, 'turkey', 'turkey@turkey', 'turkey', 'turkey'),
(72, 'andia', 'andia@andia', '', 'andia'),
(73, '', '', '', ''),
(74, 'd', 'd@gmail.com', 'd', 'dddddddddddddddddddd'),
(75, 'KK', 'KK@gmail.com', 'KK', 'KK'),
(76, 'KK', 'KK@gmail.com', 'KK', 'KK'),
(77, 'KKKK', 'KKKK@gmail.com', 'KKKK', 'KKKKK'),
(78, 'khadija', 'khadija@gmail.com', 'khadija', 'khadija'),
(81, 'gggkhadijaAdmin', 'gggkhadijaAdmin@gmail.com', 'gggkhadijaAdmin', 'gggkhadijaAdmingggkhadijaAdmin'),
(82, 'gggkhadijaAdmin', 'gggkhadijaAdmin@gmail.com', 'gggkhadijaAdmin', 'gggkhadijaAdmingggkhadijaAdmin'),
(83, 'Andy', 'Andy@gmail.com', 'Andy', 'AndyAndyAndyAndyAndy'),
(84, 'andy', 'andy@gmail.com', 'andy', 'andy   /)HBV'),
(85, 'kikiki', 'kikiki@K.com', 'kikiki', 'kikikikikikikikikikikikikikikikikiki'),
(86, 'kikiki', 'kikiki@K.com', 'kikiki', 'kikikikikikikikikikikikikikikikikiki'),
(87, 'kikiki', 'kikiki@K.com', 'kikiki', 'kikikikikikikikikikikikikikikikikiki'),
(88, 'bbbbbb', 'bbbbbb@b.com', 'bbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb'),
(89, 'keykey', 'key@key.com', 'key', 'keykeykeykeykeykeykeykeykeykeykeykey');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `projectname` varchar(250) DEFAULT NULL,
  `projectpic` varchar(250) DEFAULT NULL,
  `projectlink` text,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`portfolio_id`),
  FOREIGN KEY (`admin_id`) REFERENCES `admin_users`(`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 07, 2020 at 10:58 AM
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
-- Database: `portfoliozk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_setup`
--

DROP TABLE IF EXISTS `aboutus_setup`;
CREATE TABLE IF NOT EXISTS `aboutus_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus_setup`
--

INSERT INTO `aboutus_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`) VALUES
(1, 'I m web developer and so fascinated by Graphic Design, Crafting, Photography, Art ...', 'Graphic Designer and Web Developer', '', 'Student at Youcode school based in Youssofia Morocco\r\n\r\n                                                                  ', 'https://www.zahirkhadija.com', '03 March, 1993');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `user_id`, `user_pass`) VALUES
(1, 'Khadija Zahir', 'khadija@Admin', 'khadijaAdmin');

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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4;

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
(79, 'fffffffffffffffffffffff', 'fffffffffffffffffffffff@gmail.com', 'fffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `personal_setup`
--

DROP TABLE IF EXISTS `personal_setup`;
CREATE TABLE IF NOT EXISTS `personal_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profilepic` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `skype` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `homewallpaper` varchar(200) NOT NULL,
  `professions` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_setup`
--

INSERT INTO `personal_setup` (`id`, `profilepic`, `name`, `twitter`, `facebook`, `instagram`, `skype`, `linkedin`, `github`, `homewallpaper`, `professions`, `location`, `mobile`, `emailid`) VALUES
(1, 'SPACE.jpg', 'Khadija Zahir', 'www.twitter.com', 'https://www.facebook.com/', 'https://www.instagram.com/andy_14photography', '', 'https://in.linkedin.com/', 'https://github.com/', '3.jpg', 'Graphic designer <br> Web Developer  <br> Photographer<br> Videomaker', 'Fez, Morocco', '0623211001', 'zahir.khadija.yc@gmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(20, 'Crafting', '6.jpg', ''),
(23, 'Logo', '11.jpg', ''),
(24, 'Logo', '10.jpg', ''),
(26, 'Business Card', '8.jpg', ''),
(27, 'Photography', '12.jpg', ''),
(28, 'Photography	', '14.jpg', ''),
(29, 'Photography	', '13.jpg', ''),
(37, 'Website', '17.jpg', ''),
(44, 'Photography', '1.jpg', ''),
(45, 'Website', '16.jpg', 'https://www.malekbennabi.net/');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `ogname` varchar(250) NOT NULL,
  `workdesc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `category`, `title`, `year`, `ogname`, `workdesc`) VALUES
(12, 'pe', 'Training as developer WordPress', '07/2020 - 09/2020', 'ReWeb Agency', ''),
(13, 'e', 'Web developer', '2019 -2021', 'Youcode school', ''),
(14, 'e', 'Mater\'s degree	', '2014-2016', 'FST -Fez', ''),
(15, 'e', 'Bacheler\'s degree	', '2011	', 'Fez', ''),
(16, 'pe', 'Training as web developer and Designer', '05/2020 - 08/2020', 'Project KolnaExplorer', '');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(250) NOT NULL,
  `score` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `score`) VALUES
(12, 'HTML', '100'),
(13, 'CSS', '90'),
(17, 'Photoshop', '90'),
(19, 'Illustrator', '50'),
(22, 'Premiere Pro', '60'),
(23, 'WordPress', '70'),
(24, 'Balsamiq', '100'),
(25, 'Adobe XD', '70'),
(26, 'Bootstrap', '50'),
(27, 'PHP', '40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

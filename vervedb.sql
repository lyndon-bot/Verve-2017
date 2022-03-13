-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 07:47 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vervedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `comment` text NOT NULL,
  `D_created` date NOT NULL,
  `Time_c` time NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

DROP TABLE IF EXISTS `help`;
CREATE TABLE IF NOT EXISTS `help` (
  `H_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(32) NOT NULL,
  `l_name` varchar(32) NOT NULL,
  `issue` text NOT NULL,
  `status` varchar(32) NOT NULL,
  `d_created` timestamp NOT NULL,
  PRIMARY KEY (`H_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`H_id`, `f_name`, `l_name`, `issue`, `status`, `d_created`) VALUES
(3, 'lyndon', 'bowen', 'cant Login	        		\r\n	        	', 'R', '2016-12-25 15:16:38'),
(4, 'Lyndon', 'Bowen', '	        		Cant login\r\n	        	', 'R', '2016-12-25 16:10:37'),
(5, 'lyndon', 'bowen', '	        dfdggdfghfsgsdf\r\n	        	', 'R', '2016-12-25 16:11:14'),
(6, 'Lyndon', 'Bowen', 'Cant Login	        		\r\n	        ', 'R', '2016-12-28 15:20:27'),
(7, 'Lyndon', 'Bowen', 'cant login        		\r\n	        	', 'R', '2016-12-29 13:14:00'),
(8, 'Lyndon', 'Bowen', '	        		\r\nLogin Error	        	', 'R', '2016-12-29 16:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

DROP TABLE IF EXISTS `queue`;
CREATE TABLE IF NOT EXISTS `queue` (
  `Q_id` int(11) NOT NULL AUTO_INCREMENT,
  `U_id` int(11) NOT NULL,
  `V_id` int(11) NOT NULL,
  `status` varchar(32) NOT NULL,
  `T_in` timestamp NULL DEFAULT NULL,
  `T_out` timestamp NULL DEFAULT NULL,
  `D_out` date DEFAULT NULL,
  `D_in` date DEFAULT NULL,
  `SLA` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`Q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`Q_id`, `U_id`, `V_id`, `status`, `T_in`, `T_out`, `D_out`, `D_in`, `SLA`) VALUES
(45, 3, 1, 'C', '2016-12-20 15:40:26', '2016-12-20 15:38:44', '2016-12-20', '2016-12-20', 'F'),
(47, 3, 1, 'C', '2016-12-20 15:42:41', '2016-12-20 15:42:34', '2016-12-20', '2016-12-20', 'F'),
(48, 3, 1, 'C', '2016-12-20 15:43:59', '2016-12-20 15:43:54', '2016-12-20', '2016-12-20', 'F'),
(49, 1, 1, 'C', '2016-12-20 16:31:19', '2016-12-20 16:25:44', '2016-12-20', '2016-12-20', 'F'),
(50, 1, 1, 'C', '2016-12-20 17:47:10', '2016-12-20 16:55:31', '2016-12-20', '2016-12-20', 'F'),
(51, 3, 2, 'C', '2016-12-20 17:48:06', '2016-12-20 16:57:40', '2016-12-20', '2016-12-20', 'F'),
(53, 1, 1, 'C', '2016-12-20 09:06:50', '2016-12-20 09:05:51', '2016-12-21', '2016-12-20', 'R'),
(54, 1, 1, 'C', '2016-12-21 13:34:12', '2016-12-21 13:22:06', '2016-12-21', '2016-12-21', 'F'),
(55, 1, 3, 'C', '2016-12-21 06:57:27', '2016-12-21 06:57:21', '2016-12-21', '2016-12-21', 'F'),
(56, 3, 1, 'C', '2016-12-21 08:11:04', '2016-12-21 08:10:56', '2016-12-21', '2016-12-21', 'F'),
(57, 1, 1, 'C', '2016-12-21 09:33:52', '2016-12-21 09:33:47', '2016-12-21', '2016-12-21', 'F'),
(58, 1, 3, 'C', '2016-12-21 09:43:04', '2016-12-21 09:42:50', '2016-12-21', '2016-12-21', 'F'),
(59, 1, 1, 'C', '2016-12-22 15:10:47', '2016-12-22 15:08:17', '2016-12-22', '2016-12-22', 'F'),
(60, 1, 1, 'C', '2016-12-22 15:13:56', '2016-12-22 15:13:26', '2016-12-22', '2016-12-22', 'F'),
(62, 1, 2, 'C', '2016-12-28 15:17:22', '2016-12-28 15:16:58', '2016-12-28', '2016-12-28', 'F'),
(65, 3, 1, 'C', '2016-12-28 07:44:22', '2016-12-28 07:44:11', '2016-12-28', '2016-12-28', 'F'),
(66, 1, 1, 'C', '2016-12-28 07:48:03', '2016-12-27 07:45:18', '2016-12-27', '2016-12-28', 'R'),
(67, 1, 1, 'C', '2016-12-28 08:12:43', '2016-12-28 08:12:27', '2016-12-28', '2016-12-28', 'F'),
(68, 1, 1, 'C', '2016-12-28 09:43:18', '2016-12-28 09:40:02', '2016-12-28', '2016-12-28', 'F'),
(69, 1, 1, 'C', '2016-12-28 09:45:20', '2016-12-28 09:44:34', '2016-12-28', '2016-12-28', 'F'),
(70, 1, 1, 'C', '2016-12-28 09:46:29', '2016-12-28 09:45:46', '2016-12-28', '2016-12-28', 'F'),
(71, 1, 1, 'C', '2016-12-28 09:47:28', '2016-12-28 09:47:10', '2016-12-28', '2016-12-28', 'F'),
(72, 1, 1, 'C', '2016-12-28 09:51:49', '2016-12-28 09:49:52', '2016-12-28', '2016-12-28', 'F'),
(73, 2, 1, 'C', '2016-12-28 10:01:38', '2016-12-28 10:01:28', '2016-12-28', '2016-12-28', 'F'),
(75, 3, 1, 'C', '2016-12-29 16:14:52', '2016-12-29 16:14:35', '2016-12-29', '2016-12-29', 'F'),
(76, 1, 1, 'C', '2016-12-29 16:26:36', '2016-12-29 16:25:04', '2016-12-29', '2016-12-29', 'F'),
(77, 1, 1, 'C', '2016-12-29 16:27:43', '2016-12-29 16:27:04', '2016-12-29', '2016-12-29', 'F'),
(78, 1, 1, 'C', NULL, '2016-12-29 16:29:11', '2016-12-28', NULL, 'R'),
(79, 3, 1, 'C', '2017-01-04 08:23:15', '2017-01-04 08:22:26', '2017-01-04', '2017-01-04', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `user_index`
--

DROP TABLE IF EXISTS `user_index`;
CREATE TABLE IF NOT EXISTS `user_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `last_u` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Permission` varchar(32) NOT NULL DEFAULT 'U',
  `last_v` int(15) DEFAULT NULL,
  `login_count` int(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_index`
--

INSERT INTO `user_index` (`id`, `username`, `last_u`, `Permission`, `last_v`, `login_count`) VALUES
(1, 'lyndon', '2017-01-04 08:22:59', 'U', 1, 65),
(2, 'Admin', '2017-01-04 08:26:08', 'A', 1, 40),
(3, 'abyrd', '2017-01-04 08:23:32', 'U', 1, 9),
(6, 'karmstrong', '2016-12-21 17:07:45', 'U', NULL, 0),
(7, 'kalston', '2016-12-21 17:07:45', 'U', NULL, 0),
(8, 'rbanks', '2016-12-21 17:07:45', 'U', NULL, 0),
(9, 'gbattle', '2016-12-21 17:07:45', 'U', NULL, 0),
(10, 'hbeachum', '2016-12-21 17:07:45', 'U', NULL, 0),
(11, 'abell', '2016-12-21 17:07:45', 'U', NULL, 0),
(12, 'dblack', '2016-12-21 17:07:45', 'U', NULL, 0),
(13, 'jbowser', '2016-12-21 17:07:45', 'U', NULL, 0),
(14, 'dbrinson', '2016-12-21 17:07:45', 'U', NULL, 0),
(15, 'qbrinson', '2016-12-21 17:07:45', 'U', NULL, 0),
(16, 'gbrown', '2016-12-21 17:07:45', 'U', NULL, 0),
(17, 'kcaldwell', '2016-12-21 17:07:45', 'U', NULL, 0),
(18, 'acollins', '2016-12-21 17:07:45', 'U', NULL, 0),
(19, 'jdavis', '2016-12-21 17:07:45', 'U', NULL, 0),
(20, 'gedwards', '2016-12-21 17:07:45', 'U', NULL, 0),
(21, 'jfaison', '2016-12-21 17:07:45', 'U', NULL, 0),
(22, 'aglenn', '2016-12-21 17:07:45', 'U', NULL, 0),
(23, 'cgoins', '2016-12-21 17:07:45', 'U', NULL, 0),
(24, 'bhanes', '2016-12-21 17:07:45', 'U', NULL, 0),
(25, 'mhawkins', '2016-12-21 17:07:45', 'U', NULL, 0),
(26, 'lhenderson', '2016-12-21 17:07:45', 'U', NULL, 0),
(27, 'mwhite', '2016-12-21 17:07:45', 'U', NULL, 0),
(28, 'chunter', '2016-12-21 17:07:45', 'U', NULL, 0),
(29, 'bjohnson', '2016-12-21 17:07:45', 'U', NULL, 0),
(30, 'jjones', '2016-12-21 17:07:45', 'U', NULL, 0),
(31, 'mkeziah', '2016-12-21 17:07:45', 'U', NULL, 0),
(32, 'lkraus', '2016-12-21 17:07:45', 'U', NULL, 0),
(33, 'dliboon', '2016-12-21 17:07:45', 'U', NULL, 0),
(34, 'dlittle', '2016-12-21 17:07:45', 'U', NULL, 0),
(35, 'cmartin', '2016-12-21 17:07:45', 'U', NULL, 0),
(36, 'kmcandrews', '2016-12-21 17:07:45', 'U', NULL, 0),
(37, 'dmercer', '2016-12-21 17:07:45', 'U', NULL, 0),
(38, 'tminor', '2016-12-21 17:07:45', 'U', NULL, 0),
(39, 'cmoon', '2016-12-21 17:07:45', 'U', NULL, 0),
(40, 'gmoore', '2016-12-21 17:07:45', 'U', NULL, 0),
(41, 'cnash', '2016-12-21 17:07:45', 'U', NULL, 0),
(42, 'snixon', '2016-12-21 17:07:45', 'U', NULL, 0),
(43, 'dnolen', '2016-12-21 17:07:45', 'U', NULL, 0),
(44, 'rnorthcott', '2016-12-21 17:07:45', 'A', NULL, 0),
(45, 'boliver', '2016-12-21 17:07:45', 'U', NULL, 0),
(46, 'coutlaw', '2016-12-21 17:14:24', 'U', NULL, 0),
(47, 'dpertell', '2016-12-21 17:14:24', 'U', NULL, 0),
(48, 'creaves', '2016-12-21 17:14:24', 'U', NULL, 0),
(49, 'mrender', '2016-12-21 17:14:24', 'U', NULL, 0),
(50, 'erobinson', '2016-12-21 17:14:24', 'U', NULL, 0),
(51, 'vsamuel', '2016-12-21 17:14:24', 'U', NULL, 0),
(52, 'jsanders', '2016-12-21 17:14:24', 'U', NULL, 0),
(53, 'jschuch', '2016-12-21 17:14:24', 'U', NULL, 0),
(54, 'ssimmons', '2016-12-21 17:14:24', 'U', NULL, 0),
(55, 'jsmith', '2016-12-21 17:14:24', 'U', NULL, 0),
(56, 'mtazewell', '2016-12-21 17:14:24', 'U', NULL, 0),
(57, 'fterry', '2016-12-21 17:14:24', 'U', NULL, 0),
(58, 'ktheissen', '2016-12-21 17:14:24', 'U', NULL, 0),
(59, 'twaden', '2016-12-21 17:14:24', 'U', NULL, 0),
(60, 'pwalker', '2016-12-21 17:14:24', 'U', NULL, 0),
(61, 'twalker', '2016-12-21 17:14:24', 'U', NULL, 0),
(62, 'jwhitehead', '2016-12-21 17:14:24', 'U', NULL, 0),
(63, 'jwilliams', '2016-12-21 17:14:24', 'U', NULL, 0),
(64, 'rwilson', '2016-12-21 17:14:24', 'U', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `V_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) NOT NULL,
  `Type` varchar(32) NOT NULL,
  `Status` varchar(32) NOT NULL,
  `User` varchar(32) DEFAULT NULL,
  `U_id` int(11) NOT NULL,
  `Time_I` time DEFAULT NULL,
  `Time_O` time DEFAULT NULL,
  `F_level` varchar(32) NOT NULL,
  PRIMARY KEY (`V_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`V_ID`, `Name`, `Type`, `Status`, `User`, `U_id`, `Time_I`, `Time_O`, `F_level`) VALUES
(1, 'Cart 1', 'cart', 'A', 'None', 0, '03:23:15', '03:22:26', 'E'),
(2, 'Cart 2', 'cart', 'A', 'None', 0, '02:39:45', '10:17:33', 'F'),
(3, 'Cart 3', 'cart', 'A', 'None', 0, '04:43:04', '04:42:50', 'F'),
(4, 'Van', 'van', 'A', 'None', 0, '02:35:30', '02:24:01', 'F');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

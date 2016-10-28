-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2016 at 10:03 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pgssc`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
  `hospital_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `hname` varchar(100) NOT NULL,
  `haddress` varchar(100) NOT NULL,
  `hdirectorname` varchar(100) DEFAULT NULL,
  `hdirectorqualif` varchar(100) DEFAULT NULL,
  `hdirectorphone` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `staffname` varchar(100) DEFAULT NULL,
  `staffqualif` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `hname`, `haddress`, `hdirectorname`, `hdirectorqualif`, `hdirectorphone`, `level`, `type`, `staffname`, `staffqualif`) VALUES
(1, 'Mbarara Regional Referral Hospital', 'Mbarara', 'Mukiga Ronald', 'Masters Degree', '0712486507', 'district', 'public', 'Haruna Mubiru', 'Certificate'),
(2, 'Kabale Community Hospital', 'Kabale', 'Kizito Daniel', 'PhD ', '0778415681', 'tertiary', 'private', 'Kato Robert', 'Bachelors Degree'),
(3, 'Katwe Church Hospital', 'Kampala', 'musoke ronald', 'Masters Degree', '0774582645', 'clinic', 'ngo', 'kityo henry', 'Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `pgssc_users`
--

CREATE TABLE IF NOT EXISTS `pgssc_users` (
  `User_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(100) DEFAULT NULL,
  `First_Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Role` varchar(100) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pgssc_users`
--

INSERT INTO `pgssc_users` (`User_id`, `User_Name`, `First_Name`, `Last_Name`, `Password`, `Role`, `Phone`, `Email`) VALUES
(1, 'mukama', 'Martin', 'Mukama', '211cd85d5f50178ef0252de4589e9cf5cca2432c', 'Administrator', '0752869854', 'martin.mukama@gmail.com'),
(2, 'plubega', 'Phaisal', 'Lubega', 'c5eea26ec08cc3f53672ccf9d07ad70227772813', 'Research Coordinator', '0755879865', 'plubega@yahoo.com'),
(3, 'kpaik', 'Kenneth', 'Paik', '48b9e8e5c1cedd9aaf3140c8eb96655d563ff0ed', 'Administrator', '0712485987', 'kpaik@gmail.com'),
(4, 'rmwavu', 'Rogers', 'Mwavu', 'f9e72062bb1eae7c9432ec1ce86f85561249ccf4', 'Data Surveyor', '0779856847', 'rmwavu@gmail.com');

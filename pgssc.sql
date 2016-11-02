-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2016 at 04:36 PM
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
-- Table structure for table `assignhospital`
--

CREATE TABLE IF NOT EXISTS `assignhospital` (
  `Assign_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `hospital_id` int(100) DEFAULT NULL,
  `User_id` int(100) DEFAULT NULL,
  `Status` varchar(100) DEFAULT 'Pending',
  PRIMARY KEY (`Assign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assignhospital`
--

INSERT INTO `assignhospital` (`Assign_id`, `hospital_id`, `User_id`, `Status`) VALUES
(1, 2, 4, 'Pending');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `hname`, `haddress`, `hdirectorname`, `hdirectorqualif`, `hdirectorphone`, `level`, `type`, `staffname`, `staffqualif`) VALUES
(1, 'Mbarara Regional Referral Hospital', 'Mbarara', 'Mukiga Ronald', 'Masters Degree', '0712486507', 'district', 'public', 'Haruna Mubiru', 'Certificate'),
(2, 'Kabale Community Hospital', 'Kabale', 'Kizito Daniel', 'PhD ', '0778415681', 'tertiary', 'private', 'Kato Robert', 'Bachelors Degree'),
(3, 'Katwe Church Hospital', 'Kampala', 'musoke ronald', 'Masters Degree', '0774582645', 'clinic', 'ngo', 'kityo henry', 'Certificate'),
(4, 'Makindye Hospital', 'Kampala', 'Kenneth Paik', 'PhD', '000245787', 'tertiary', 'ngo', 'Eric W', 'Masters Degree'),
(5, 'kawempe Hospital', 'Kawempe', 'Musoke Abdu', 'Bachelors Degree', '0758974586', 'district', 'public', 'Madinah Nakazi', 'Diploma'),
(6, 'katwe Hospital', 'Katwe', 'kizito Peter', 'Masters Degree', '0772859786', 'clinic', 'private', 'John Donker', 'Degree');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pgssc_users`
--

INSERT INTO `pgssc_users` (`User_id`, `User_Name`, `First_Name`, `Last_Name`, `Password`, `Role`, `Phone`, `Email`) VALUES
(1, 'mukama', 'Martin', 'Mukama', '211cd85d5f50178ef0252de4589e9cf5cca2432c', 'Administrator', '0752869854', 'martin.mukama@gmail.com'),
(2, 'plubega', 'Phaisal', 'Lubega', 'c5eea26ec08cc3f53672ccf9d07ad70227772813', 'Research Coordinator', '0755879865', 'plubega@yahoo.com'),
(3, 'kpaik', 'Kenneth', 'Paik', '48b9e8e5c1cedd9aaf3140c8eb96655d563ff0ed', 'Administrator', '0712485987', 'kpaik@gmail.com'),
(4, 'rmwavu', 'Rogers', 'Mwavu', 'f9e72062bb1eae7c9432ec1ce86f85561249ccf4', 'Data Surveyor', '0779856847', 'rmwavu@gmail.com'),
(5, 'kaggwa', 'Fred', 'Kaggwa', '6ca69e9d4bf57e39c8255dc9ba21d19f7c4a4dd3', 'Administrator', '0712486507', 'kaggwa_fred@must.ac.ug'),
(6, 'emakoko', 'Enock', 'Makoko', 'd46cd390f01d305a57b15829c3f03540aa1dcb2f', 'Data Surveyor', '+25671895745', 'emakoko@gmail.com'),
(7, 'pkamala', 'Peter', 'Kamala', 'e33b1094e5c5d5c3b303a6066cf707754f937149', 'Data Surveyor', '0714857898', 'kamala.peter@gmail.com'),
(8, 'skantu', 'Sarah', 'Kantu', '083655400a625081266e9d43813f023c53f6a65f', 'Research Coordinator', '072589785', 'skantu@yahoo.com');

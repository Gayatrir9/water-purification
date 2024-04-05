-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 05:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shuddha_neeru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendance`
--

CREATE TABLE IF NOT EXISTS `employee_attendance` (
  `Emp_id` int(5) NOT NULL AUTO_INCREMENT,
  `Att_Date` varchar(20) NOT NULL,
  `Att_Attendance` varchar(100) NOT NULL,
  `Atttabsreasons` varchar(300) NOT NULL,
  `Attabsenttype` varchar(300) NOT NULL,
  PRIMARY KEY (`Emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee_attendance`
--

INSERT INTO `employee_attendance` (`Emp_id`, `Att_Date`, `Att_Attendance`, `Atttabsreasons`, `Attabsenttype`) VALUES
(2, '4444-04-04', '444', '444', '444');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE IF NOT EXISTS `employee_information` (
  `Emp_id` int(5) NOT NULL AUTO_INCREMENT,
  `Emp_first_name` varchar(100) NOT NULL,
  `Emp_Fa_Name` varchar(100) NOT NULL,
  `Emp_La_Name` varchar(100) NOT NULL,
  `Emp_DOB` varchar(20) NOT NULL,
  `Emp_Addr` varchar(300) NOT NULL,
  `Emp_Jdate` varchar(20) NOT NULL,
  `Emp_Mb_No` int(11) NOT NULL,
  `Emp_Location` varchar(50) NOT NULL,
  PRIMARY KEY (`Emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`Emp_id`, `Emp_first_name`, `Emp_Fa_Name`, `Emp_La_Name`, `Emp_DOB`, `Emp_Addr`, `Emp_Jdate`, `Emp_Mb_No`, `Emp_Location`) VALUES
(2, 'test', 'test', 'test', '6666-06-06', 'test', '6666-06-06', 2147483647, 'gadag');

-- --------------------------------------------------------

--
-- Table structure for table `plant_information`
--

CREATE TABLE IF NOT EXISTS `plant_information` (
  `Plantnoo` int(5) NOT NULL AUTO_INCREMENT,
  `PlantLocation` varchar(100) NOT NULL,
  `PlantTaluk` varchar(100) NOT NULL,
  `PlantDistrict` varchar(100) NOT NULL,
  `PlantPanchayat` varchar(100) NOT NULL,
  `PlantAddr` varchar(500) NOT NULL,
  `PlantPhNo` int(20) NOT NULL,
  `PlantRRNo` int(10) NOT NULL,
  `PlantArea` varchar(100) NOT NULL,
  `PlantInstDate` text NOT NULL,
  `PlantwtrCapacity` int(10) NOT NULL,
  `PlantSnap` longblob NOT NULL,
  `Plantagreement` blob NOT NULL,
  `PlantTdsData` varchar(500) NOT NULL,
  `PlantWaterProbs` varchar(500) NOT NULL,
  PRIMARY KEY (`Plantnoo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `plant_information`
--

INSERT INTO `plant_information` (`Plantnoo`, `PlantLocation`, `PlantTaluk`, `PlantDistrict`, `PlantPanchayat`, `PlantAddr`, `PlantPhNo`, `PlantRRNo`, `PlantArea`, `PlantInstDate`, `PlantwtrCapacity`, `PlantSnap`, `Plantagreement`, `PlantTdsData`, `PlantWaterProbs`) VALUES
(14, 'gadag', 'gadag', 'gadag', 'gadag', 'Hudco colony', 2147483647, 7, '654sq ft', '2015-06-15', 67, 0x30, 0x30, 'test data', 'other');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

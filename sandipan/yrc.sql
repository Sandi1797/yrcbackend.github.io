-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2018 at 05:43 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `hospital_id` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `relative_name` varchar(255) NOT NULL,
  `no_of_blood` int(11) NOT NULL,
  `no_of_platelet` int(11) NOT NULL,
  `no_of_blood1` int(11) NOT NULL,
  `no_of_platelet1` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hospital_id` (`hospital_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `name`, `hospital_id`, `age`, `disease`, `deadline`, `contact`, `relative_name`, `no_of_blood`, `no_of_platelet`, `no_of_blood1`, `no_of_platelet1`, `language`, `username`) VALUES
(1, 'Ujwal Kumar Pradhan', '148083H', '49', 'Cancer', '2018-06-14', '+91 97773 96801', 'Deepanand Behera', 4, 0, 1, 0, 'Hindi,English,Odiya', 'Sandipan Mukherjee'),
(2, 'G Kishore Kumar', '212517H', '54', 'Hip surgery', '2018-06-07', '+91 70082 68798', 'Patient himself', 2, 0, 1, 0, 'English, Odiya, Telegu, Hindi', 'Sandipan Mukherjee'),
(3, 'Ziahur Rehman', '833505G', '28', 'Tumor operation', '2018-06-09', '+91 97914 46016', 'patient himself', 3, 0, 0, 0, 'Bengali', 'Aachran Jain');

-- --------------------------------------------------------

--
-- Table structure for table `cases_handled`
--

DROP TABLE IF EXISTS `cases_handled`;
CREATE TABLE IF NOT EXISTS `cases_handled` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `hospital_id` varchar(255) NOT NULL,
  `no_of_blood` int(11) NOT NULL,
  `no_of_platelet` int(11) NOT NULL,
  `no_of_blood1` int(11) NOT NULL,
  `no_of_platelet1` int(11) NOT NULL,
  `handled_by` varchar(255) NOT NULL,
  `donor_ids` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hospital_id` (`hospital_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases_handled`
--

INSERT INTO `cases_handled` (`id`, `name`, `hospital_id`, `no_of_blood`, `no_of_platelet`, `no_of_blood1`, `no_of_platelet1`, `handled_by`, `donor_ids`, `username`) VALUES
(3, 'Ujwal Kumar Pradhan', '148083H', 4, 0, 2, 0, 'Sandipan Mukherjee', '13832,16790', 'Aachran Jain'),
(4, 'G Kishore Kumar', '212517H', 2, 0, 1, 0, 'Sandipan Mukherjee', '108332', 'Sandipan Mukherjee'),
(5, 'Ziahur Rehman', '833505G', 3, 0, 1, 0, 'Amisha Priya', '187564', 'Sandipan Mukherjee');

-- --------------------------------------------------------

--
-- Table structure for table `donor1`
--

DROP TABLE IF EXISTS `donor1`;
CREATE TABLE IF NOT EXISTS `donor1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `blood_grp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor1`
--

INSERT INTO `donor1` (`id`, `name`, `reg_no`, `contact`, `email`, `dob`, `blood_grp`) VALUES
(1, 'Sandipan Mukherjee', '15BCB0036', '9790541798', 'sandimukherjee123@gmail.com', '1997-07-17', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `donor2`
--

DROP TABLE IF EXISTS `donor2`;
CREATE TABLE IF NOT EXISTS `donor2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `blood_grp` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `donor_id` varchar(255) NOT NULL,
  `dod` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `donor_id` (`donor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor2`
--

INSERT INTO `donor2` (`id`, `name`, `reg_no`, `blood_grp`, `contact`, `donor_id`, `dod`, `username`) VALUES
(2, 'Sandipan Mukherjee', '15BCB0036', 'B+', '9790541798', '108332', '2018-01-29', 'Aachran Jain'),
(3, 'Srikanth', '16BEC0042', 'O+', '65903 32878', '133657', '2018-06-14', 'Aachran Jain');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg_no` (`reg_no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `reg_no`, `password`) VALUES
(1, 'Aachran Jain', '14BCH0080', '14BCH0080'),
(2, 'Sandipan Mukherjee', '15BCB0036', '15BCB0036');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

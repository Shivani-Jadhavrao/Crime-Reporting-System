-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 16, 2022 at 10:31 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_no` bigint(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `crimedate` datetime NOT NULL,
  `complaintdate` datetime NOT NULL,
  `culprit` varchar(300) NOT NULL,
  `description` varchar(7000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `inc_status` varchar(50) DEFAULT 'Unassigned',
  `pol_status` varchar(50) DEFAULT 'null',
  `p_id` varchar(50) DEFAULT 'Null',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `location`, `type_crime`, `crimedate`, `complaintdate`, `culprit`, `description`, `image`, `inc_status`, `pol_status`, `p_id`) VALUES
(1, 123214521452, 'Tollygunge', 'Robbery', '2018-12-06 00:00:00', '0000-00-00 00:00:00', '', 'My Home has been Robbed.', '', 'Assigned', 'ChargeSheet Filed', 't101'),
(2, 878514235451, 'Wakad', 'Antisocial Behaviour', '2022-05-03 00:00:00', '0000-00-00 00:00:00', '', 'asdxsd', 'search1.jpeg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

DROP TABLE IF EXISTS `head`;
CREATE TABLE IF NOT EXISTS `head` (
  `h_id` varchar(50) NOT NULL,
  `h_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`h_id`, `h_pass`) VALUES
('head@kp', 'head');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

DROP TABLE IF EXISTS `police`;
CREATE TABLE IF NOT EXISTS `police` (
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `p_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_name`, `p_id`, `spec`, `location`, `p_pass`) VALUES
('Manish Singh', 'a101', 'Murder', 'Anandapur', 'manish'),
('Jay Singh', 'a102', 'All', 'Anandapur', 'jay'),
('Suvendu Ghosh', 't101', 'Robbery', 'Tollygunge', 'suvendu');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

DROP TABLE IF EXISTS `police_station`;
CREATE TABLE IF NOT EXISTS `police_station` (
  `i_id` varchar(50) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `i_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`i_id`),
  UNIQUE KEY `location` (`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`i_id`, `i_name`, `location`, `i_pass`) VALUES
('shah@anandapur', 'Shahbaz', 'Anandapur', 'shahbaz'),
('shivam@tollygunge', 'Shivam', 'Tollygunge', 'shivam');

-- --------------------------------------------------------

--
-- Table structure for table `update_case`
--

DROP TABLE IF EXISTS `update_case`;
CREATE TABLE IF NOT EXISTS `update_case` (
  `c_id` int(11) NOT NULL,
  `d_o_u` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `case_update` varchar(200) NOT NULL,
  UNIQUE KEY `d_o_u` (`d_o_u`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_case`
--

INSERT INTO `update_case` (`c_id`, `d_o_u`, `case_update`) VALUES
(1, '2018-12-17 10:32:06', 'Criminal Verified'),
(1, '2018-12-17 10:32:12', 'Criminal Caught'),
(1, '2018-12-17 10:32:15', 'Criminal Interrogated'),
(1, '2018-12-17 10:32:21', 'Criminal Accepted the Crime'),
(1, '2018-12-17 10:32:26', 'Criminal Charged'),
(1, '2018-12-17 10:32:51', 'The case has been moved to Court.'),
(1, '2018-12-17 10:32:59', 'Criminal Verified');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL,
  PRIMARY KEY (`a_no`),
  UNIQUE KEY `u_id` (`u_id`),
  UNIQUE KEY `mob` (`mob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`) VALUES
('Ashish Wagharalkar', 'ashish@gmail.com', 'Ashish1234', 'Chinchwad', 544875463524, 'Male', 9845455441),
('Salini Vinekari', 'salini@gmail.com', 'Ansh1306', 'Dehuroad, Pune', 878514235451, 'Female', 8898169617),
('Prachi Palande', 'prachi@gmail.com', 'Prachi123', 'Pimpri, Pune', 984556322112, 'Female', 9888545221);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

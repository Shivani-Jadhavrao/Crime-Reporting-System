-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 05:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
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
  `p_id` varchar(50) DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `location`, `type_crime`, `crimedate`, `complaintdate`, `culprit`, `description`, `image`, `inc_status`, `pol_status`, `p_id`) VALUES
(8, 878755651232, 'pimpri', 'Fraud', '2023-05-10 00:00:00', '0000-00-00 00:00:00', '', 'gefhae', 'bgg.jpg', 'Unassigned', 'null', 'Null'),
(9, 878755651232, 'Pune', 'Murder', '2023-05-03 00:00:00', '0000-00-00 00:00:00', '', 'murder so on...', 'fc2711d403f59b108a5fe3297c709b8a.jpg', 'Unassigned', 'null', 'Null'),
(10, 878755651232, 'shivajinagar', 'Domestic Abuse', '2023-05-04 00:00:00', '0000-00-00 00:00:00', '', 'dfgsrdrdh', '', 'Unassigned', 'null', 'Null'),
(11, 878755651232, 'chaudharwadi', 'Childhood Abuse', '2023-05-04 00:00:00', '0000-00-00 00:00:00', 'no any excuse', 'hjgasgfwyi', 'head.png', 'Unassigned', 'null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `h_id` varchar(50) NOT NULL,
  `h_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`h_id`, `h_pass`) VALUES
('head@kp', 'head'),
('VaibhavMane', 'Vaibhav@123'),
('[value-1]', '[value-2]'),
('\0', 'Vaishnavi@123'),
('[value-1]', '[value-2]'),
('vaishnavi@VB', 'Vaishnavi@123'),
('vaishnavi@VB', 'Vaishnavi@123');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `p_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_name`, `p_id`, `spec`, `location`, `p_pass`) VALUES
('Amit', 'a201', 'Fraud', 'Pune', 'Amit@123'),
('Amit', 'a202', 'Cyber Crime', 'Pimpri', 'Ajay@123'),
('Suvendu Ghosh', 't101', 'Robbery', 'Tollygunge', 'suvendu');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `i_id` varchar(50) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `i_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`i_id`, `i_name`, `location`, `i_pass`) VALUES
('Shivani102', 'Shivani', 'Satara', 'Shivani@123'),
('sumantpujari', 'sumant', 'pune', 'sumant@123'),
('vaishnavi101', 'Vaishnavi', 'Pimpri', 'Vaishnavi@123');

-- --------------------------------------------------------

--
-- Table structure for table `update_case`
--

CREATE TABLE `update_case` (
  `c_id` int(11) NOT NULL,
  `d_o_u` timestamp NOT NULL DEFAULT current_timestamp(),
  `case_update` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`) VALUES
('Aniket Bhosale', 'aniket3004@gmail.com', 'Aniket@3791', 'Pimpri', 878755651232, 'Male', 8585898986);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `update_case`
--
ALTER TABLE `update_case`
  ADD UNIQUE KEY `d_o_u` (`d_o_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`a_no`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

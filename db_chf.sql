-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 10:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chf`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schools`
--

CREATE TABLE `tbl_schools` (
  `school_id` int(10) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `no_of_student` int(50) NOT NULL,
  `male` tinyint(1) NOT NULL,
  `female` tinyint(1) NOT NULL,
  `no_student_registered` int(50) NOT NULL,
  `no_student_morbility` int(50) NOT NULL,
  `no_screened_student` int(50) NOT NULL,
  `no_awareness_session` int(50) NOT NULL,
  `no_student_referral` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schools`
--

INSERT INTO `tbl_schools` (`school_id`, `school_name`, `no_of_student`, `male`, `female`, `no_student_registered`, `no_student_morbility`, `no_screened_student`, `no_awareness_session`, `no_student_referral`) VALUES
(1, 'School01', 758, 127, 127, 250, 125, 582, 5, 6),
(2, 'School02', 458, 125, 127, 321, 25, 321, 8, 5),
(3, 'School03', 865, 127, 127, 365, 241, 562, 4, 2),
(4, 'School04', 578, 127, 127, 562, 231, 452, 1, 8),
(5, 'School05', 1234, 127, 127, 582, 123, 600, 2, 4),
(6, 'School06', 789, 127, 127, 522, 111, 452, 6, 1),
(7, 'School07', 958, 127, 127, 652, 120, 562, 1, 5),
(8, 'School08', 658, 127, 97, 562, 211, 352, 4, 9),
(9, 'School09', 865, 127, 127, 562, 108, 452, 4, 12),
(10, 'School10', 785, 127, 127, 425, 105, 451, 8, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_schools`
--
ALTER TABLE `tbl_schools`
  ADD PRIMARY KEY (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_schools`
--
ALTER TABLE `tbl_schools`
  MODIFY `school_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 08:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrvalidator`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `regNo` varchar(100) NOT NULL,
  `cC1` varchar(100) DEFAULT NULL,
  `cT1` varchar(100) DEFAULT NULL,
  `cU1` int(100) DEFAULT NULL,
  `cC2` varchar(100) DEFAULT NULL,
  `cT2` varchar(100) DEFAULT NULL,
  `cU2` int(100) DEFAULT NULL,
  `cC3` varchar(100) DEFAULT NULL,
  `cT3` varchar(100) DEFAULT NULL,
  `cU3` int(100) DEFAULT NULL,
  `cC4` varchar(100) DEFAULT NULL,
  `cT4` varchar(100) DEFAULT NULL,
  `cU4` int(100) DEFAULT NULL,
  `cC5` varchar(100) DEFAULT NULL,
  `cT5` varchar(100) DEFAULT NULL,
  `cU5` int(100) DEFAULT NULL,
  `cC6` varchar(100) DEFAULT NULL,
  `cT6` varchar(100) DEFAULT NULL,
  `cU6` int(100) DEFAULT NULL,
  `cC7` varchar(100) DEFAULT NULL,
  `cT7` varchar(100) DEFAULT NULL,
  `cU7` int(100) DEFAULT NULL,
  `cC8` varchar(100) DEFAULT NULL,
  `cT8` varchar(100) DEFAULT NULL,
  `cU8` int(100) DEFAULT NULL,
  `cC9` varchar(100) DEFAULT NULL,
  `cT9` varchar(100) DEFAULT NULL,
  `cU9` int(100) DEFAULT NULL,
  `cC10` varchar(100) DEFAULT NULL,
  `cT10` varchar(100) DEFAULT NULL,
  `cU10` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`regNo`, `cC1`, `cT1`, `cU1`, `cC2`, `cT2`, `cU2`, `cC3`, `cT3`, `cU3`, `cC4`, `cT4`, `cU4`, `cC5`, `cT5`, `cU5`, `cC6`, `cT6`, `cU6`, `cC7`, `cT7`, `cU7`, `cC8`, `cT8`, `cU8`, `cC9`, `cT9`, `cU9`, `cC10`, `cT10`, `cU10`) VALUES
('NAS/CSC/18/2212', 'CSC1311', 'C++', 2, 'CSC304', 'PHP', 2, 'CSC4313', 'JAVA PROGRAMMING', 3, 'CSC220', 'NETWORKING', 2, 'CSC432', 'ARTIFICIAL INTELLIGENCE', 3, 'CSC450', 'DATA COMMUNICATION II', 2, 'CSC245', 'APPLICATION PACKAGES II', 2, 'CSC432', 'COMPUTER ARCHITECTURE', 3, 'MTH345', 'NUMERICAL ANALYSIS', 3, 'MTH239', 'CALCULUS', 2),
('NAS/CSC/18/24/24', 'CSC303', 'Java Programming', 3, 'CSC304', 'PHP', 2, 'CSC302', 'C++', 2, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('NAS/CSC/18/2462', 'CSC1311', 'PROGRAMMING 1', 2, 'CSC4212', 'SOFTWARE ENGINEERING', 2, 'CSC4313', 'JAVA PROGRAMMING', 3, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('NAS/CSC/18/2463', '', '', 0, 'CSC304', 'PHP', 2, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('NAS/CSC/18/2464', 'CSC303', '', 2, 'CSC304', 'SOFTWARE ENGINEERING', 2, 'CSC302', 'C++', 3, 'CSC220', 'PYTHON II', 2, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('Y2022', 'CSC303', 'Java Programming', 3, 'CSC304', 'PHP', 2, 'CSC302', 'C++', 2, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `regNo` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`regNo`, `fullName`, `department`, `level`, `faculty`, `password`) VALUES
('12345', 'AMINA AMINU', 'COMPUTER SCIENCE', '300', 'PHYSICAL SCIENCE', '123456'),
('777', 'Mustapha Aminu', 'Computer Science', '400', 'Science', '123456'),
('NAS/CSC/18/2212', 'AHMAD ABDULLAHI NASIR', 'COMPUTER SCIENCE', '400', 'SCIENCE', 'muhd02'),
('NAS/CSC/18/2462', 'AMINU MUSTAPHA ADAMU', 'COMPUTER SCIENCE', '400', 'SCIENCE', '123456'),
('Y2022', 'YAHAYA SHUAIBU MUSA', 'ELECTRICAL ENGINEERING', '200', 'ENGINEERING', 'bakori');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullName`) VALUES
(1, 'musty', 'Alqalam', 'Musatapha ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`regNo`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`regNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

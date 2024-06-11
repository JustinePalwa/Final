-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 05:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_records_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `lrn` varchar(20) NOT NULL DEFAULT 'UNIQUE',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(3) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `family_income` decimal(10,2) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lrn`, `first_name`, `last_name`, `gender`, `birth_date`, `age`, `guardian_name`, `occupation`, `family_income`, `nationality`, `email`, `mobile_no`, `address`, `zip_code`, `created_at`) VALUES
(1, '12122220919', 'JUSTINE', 'PALWA', 'Male', '2001-06-15', 22, 'ROBERTO M. PALWA', 'FARMER', '500.00', 'FILIPINO', 'justinepalwa7@gmail.com', '09066046295', 'NUEVA ESPERANZA HINUNANGAN, SOUTHERN LEYTE', '6608', '2024-05-21 22:26:56'),
(2, '121299438384', 'JENITSU', 'AWLAP', 'Male', '2001-01-01', 22, 'GERALDINE T. PALWA', 'OFW', '10000.00', 'FILIPINO', 'jenitsuawlap@gmail.com', '09813175839', 'NUEVA ESPERANZA HINUNANGAN, SOUTHERN LEYTE', '6608', '2024-05-21 22:29:22'),
(3, '120498498483', 'STEFAN', 'GABS', 'Male', '2006-04-16', 18, 'JOGELYN T. GABS', 'SECRETARY', '10000.00', 'FILIPINO', 'stefan@gmail.com', '09291239485', 'NUEVA ESPERANZA HINUNANGAN, SOUTHERN LEYTE', '6608', '2024-05-21 22:34:59'),
(4, '128231712812', 'JUSTINE', 'PALWA', 'Male', '2001-06-15', 22, 'ROBERTO M. PALWA', 'FARMER', '500.00', 'FILIPINO', 'justinepalwa@gmail.com', '09066046295', 'NUAVE ESPERANZA', '6608', '2024-05-22 05:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

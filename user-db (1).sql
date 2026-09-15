-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 09:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `C_Name` varchar(255) NOT NULL,
  `C_Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`C_Name`, `C_Code`) VALUES
('Operating Management', 'BMIS360'),
('Network Security', 'CSCI362'),
('Software Engineering', 'CSCI380'),
('Web-Programming', 'CSCI390'),
('Computer Network', 'CSCI392'),
('Mobile Application', 'CSCI410'),
('Web-Programming Advanced', 'CSCI426'),
('Operating System', 'CSCI430'),
('Microcomputer Support', 'CSIT381'),
('System & Network Administration', 'CSIT415\r\n'),
('Internetworking & Routing Protocols', 'CSIT430'),
('Communication Skills', 'ENGL251');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('Abd123', 'abd@email.com', '1abd1'),
('Ali_ali', 'ali@email.com', '1ali1'),
('Dr_Faraj', 'faraj@email.com', '1faraj1'),
('Hassaim_ElAawar', 'hassaim@email.com', '1hassaim1'),
('Rola__roro', 'rola@email.com', '1rola1'),
('SanaAA', 'sana@email.com', '1sana1'),
('Sara._Fahed', 'sara@email.com', '1sara1'),
('Tarik_Al_ahmed', 'tarik@emial.com', '1tarik1'),
('Yomii_i', 'yomi@email.com', '1yomi1'),
('Ziad_Kassam', 'Ziad@email.com', '1ziad1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`C_Code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`,`email`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

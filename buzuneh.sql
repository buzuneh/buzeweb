-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 04:25 PM
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
-- Database: `buzuneh`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `NAMES` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `SERVICES` varchar(255) DEFAULT NULL,
  `CONTACT` varchar(255) DEFAULT NULL,
  `REG_DATES` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `REMARKS` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `NAMES`, `CITY`, `TIN`, `SERVICES`, `CONTACT`, `REG_DATES`, `title`, `image`, `REMARKS`) VALUES
(11, 'buzuneh', 'dire dawa', '00032654', 'INTERNET', '929931448', '2023-02-19 10:48:45', 'ff', 'afrenf.jpg', NULL),
(12, '', '', '', '', '', '2023-02-19 10:50:09', '', 'afrened1.jpg', NULL),
(13, '', '', '', '', '', '2023-02-19 10:53:09', '', 'afrenf.jpg', 'XHGNFMYHJGJHG'),
(14, 'buzuneh', '', '', '', '', '2023-02-19 12:11:30', '', 'kedame2.jpg', ''),
(15, '', '', '', '', '', '2023-02-19 12:33:25', '', 'kettybab.jpg', ''),
(16, '', '', '', '', '', '2023-02-19 12:33:45', '', 'ketysmile.jpg', ''),
(17, 'ZUFAN', 'dire dawa', '00032654', 'FBB', '0987342414', '2023-02-19 13:04:41', 'tyjyt', 'segedit.jpg', 'gasvhdjhbefjkhfkznvxcnb'),
(18, '', '', '', '', '', '2023-02-19 14:53:19', '', 'bridge.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `ket1`
--

CREATE TABLE `ket1` (
  `ID` int(10) NOT NULL,
  `FIRST_NAMES` varchar(30) DEFAULT NULL,
  `LAST_NAME` varchar(15) DEFAULT NULL,
  `PASSWORDS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ket1`
--
ALTER TABLE `ket1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2026 at 05:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `match_performance`
--

CREATE TABLE `match_performance` (
  `Id` int(11) NOT NULL,
  `PlayerName` varchar(30) NOT NULL,
  `Team` varchar(10) NOT NULL,
  `Venue` varchar(20) NOT NULL,
  `Runs` int(11) NOT NULL,
  `Balls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `match_performance`
--

INSERT INTO `match_performance` (`Id`, `PlayerName`, `Team`, `Venue`, `Runs`, `Balls`) VALUES
(1, 'Shanto', 'DHK', 'Mirpur', 112, 98),
(2, 'Shanto', 'DHK', 'Sylhet', 45, 52),
(3, 'Litton', 'KHL', 'Sylhet', 88, 70),
(4, 'Litton', 'KHL', 'Mirpur', 67, 60),
(5, 'Miraz', 'CTG', 'Khulna', 30, 41),
(6, 'Taskin', 'CTG', 'Khulna', 52, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match_performance`
--
ALTER TABLE `match_performance`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

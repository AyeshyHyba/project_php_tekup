-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 04:21 AM
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
-- Database: `finddoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `idD` int(11) NOT NULL,
  `nomD` varchar(50) NOT NULL,
  `prD` varchar(50) NOT NULL,
  `Spc` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `numT` int(8) NOT NULL,
  `mailD` varchar(50) NOT NULL,
  `pwdD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`idD`, `nomD`, `prD`, `Spc`, `city`, `numT`, `mailD`, `pwdD`) VALUES
(1, 'fahmi', 'masmoudi', 'ORL', 'tunis', 29101952, 'mfahmi@gmail.com', '147147'),
(2, 'taktak', 'jalel', 'Neurologgy', 'Kairouan', 99574826, 'takjalel@gmail.com', 'taktak123'),
(3, 'Hassen', 'boudinar', 'Dentistry', 'Gabes', 53201564, 'hassen@gmail.com', 'hassen123'),
(4, 'Khaled', 'Ayechi', 'Dermatology', 'Monastir', 95846825, 'khaleda@gmail.com', 'khaled123'),
(5, 'Mohamed', 'Dahmen', 'Gynaecology', 'Sfax', 26158495, 'mohamed@gmail', 'Mohamed123'),
(6, 'Mohsen]', 'Ahmed', 'Gastroenterology', 'Ariana', 27158463, 'mohsen@gmail.com', 'mohsen123'),
(7, 'Ahmed', 'chaouachi', 'Dentistry', 'Sousse', 23256148, 'ahmed@gmail.com', 'ahmed123'),
(8, 'Fathi', 'Bakouch', 'Psychiatry', 'Mahdia', 21256235, 'fathi@gmail.com', 'fathi123'),
(9, 'Youssef', 'Ben hammouda', 'Neurology', 'Ben arous', 27485145, 'you@gmail.com', 'you123');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `IdP` int(11) NOT NULL,
  `nomP` varchar(50) NOT NULL,
  `prP` varchar(50) NOT NULL,
  `mail` varbinary(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`IdP`, `nomP`, `prP`, `mail`, `pwd`) VALUES
(5, 'hyba', 'ayechy', 0x61796563686940676d61696c2e636f6d, '159159'),
(6, 'mm', 'aa', 0x6740676d61696c2e636f6d, 'aze'),
(7, 'rayen', 'aaa', 0x61616140676d61692e797979, '123'),
(8, '', '', '', ''),
(9, 'hhy', 'jun', 0x6740676d61696c2e636f6d, '152'),
(10, 'hh', 'hy', 0x6740676d61696c2e636f6d, '125'),
(11, 'may', 'na', 0x78797a40676d61692e797979, '159159');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`idD`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`IdP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `idD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `IdP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

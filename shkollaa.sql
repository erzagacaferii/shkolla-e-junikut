-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 11:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shkolla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `mesimdhenesi`
--

CREATE TABLE `mesimdhenesi` (
  `mid` int(11) NOT NULL,
  `emri` varchar(255) DEFAULT NULL,
  `mbiemri` varchar(255) DEFAULT NULL,
  `mosha` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nrtelefonit` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `confirmpassword` varchar(255) DEFAULT NULL,
  `drejtimi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesimdhenesi`
--

INSERT INTO `mesimdhenesi` (`mid`, `emri`, `mbiemri`, `mosha`, `email`, `nrtelefonit`, `PASSWORD`, `confirmpassword`, `drejtimi`) VALUES
(2, 'fatjona', 'hoxhaj', 25, 'fatjonahoxhaj@gmail.com', '123456', '43c6ab78a31225ad641df028b7bac2e8', 'fatjona', 'programim'),
(3, 'teacher', 'teacher', 25, 'teacher@gmail.com', '334565443', '8d788385431273d11e8b43bb78f3aa41', 'teacher', 'informatik'),
(5, 'Useri', 'useri', 26, 'useriuseri123@gmail.com', '044172634', '65347245c506d97995313e631328f123', 'useri123', 'matematik');

-- --------------------------------------------------------

--
-- Table structure for table `nxenesi`
--

CREATE TABLE `nxenesi` (
  `nid` int(11) NOT NULL,
  `emri` varchar(255) DEFAULT NULL,
  `mbiemri` varchar(255) DEFAULT NULL,
  `mosha` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmpassword` varchar(255) DEFAULT NULL,
  `nrtelefonit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nxenesi`
--

INSERT INTO `nxenesi` (`nid`, `emri`, `mbiemri`, `mosha`, `email`, `password`, `confirmpassword`, `nrtelefonit`) VALUES
(13, 'erza', 'gacaferi', '14', 'gacaferirion@gmail.com', 'ce1cf842aa67df2013b467a323064f55', 'rion123', '123456789'),
(15, 'filan', 'fisteki', '14', 'filanfisteki@gmail.com', 'ab102cf003ea2ac536d855c1acd48317', 'filan123', '0446454676'),
(16, 'hello', 'helloja', '15', 'helooo@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1', 'hello123', '342543664');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `mesimdhenesi`
--
ALTER TABLE `mesimdhenesi`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `nxenesi`
--
ALTER TABLE `nxenesi`
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mesimdhenesi`
--
ALTER TABLE `mesimdhenesi`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nxenesi`
--
ALTER TABLE `nxenesi`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 11, 2022 at 11:22 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetappointment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `admin_username` varchar(10) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`admin_username`, `admin_password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `logincustomer`
--

CREATE TABLE `logincustomer` (
  `cust_username` varchar(10) NOT NULL,
  `cust_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logincustomer`
--

INSERT INTO `logincustomer` (`cust_username`, `cust_password`) VALUES
('danial', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `loginstaff`
--

CREATE TABLE `loginstaff` (
  `staff_username` varchar(10) NOT NULL,
  `staff_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginstaff`
--

INSERT INTO `loginstaff` (`staff_username`, `staff_password`) VALUES
('aqilah', 'aqilah123');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Cust_id` int(5) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `No_telefon` varchar(100) DEFAULT NULL,
  `Nama_haiwan` varchar(10) DEFAULT NULL,
  `Baka` varchar(15) DEFAULT NULL,
  `Jantina_haiwan` char(1) DEFAULT NULL,
  `Spesies` varchar(20) DEFAULT NULL,
  `Berat` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `senarai_ubat_haiwan`
--

CREATE TABLE `senarai_ubat_haiwan` (
  `ID_ubat` int(5) NOT NULL,
  `Nama_ubat` varchar(20) DEFAULT NULL,
  `Cara_guna` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stafklinik`
--

CREATE TABLE `stafklinik` (
  `Staff_id` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `No_telefon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status_tj_cust`
--

CREATE TABLE `status_tj_cust` (
  `Id_tj` int(11) NOT NULL,
  `Tarikh` date NOT NULL,
  `Masa` time NOT NULL,
  `Nama Haiwan` varchar(10) NOT NULL,
  `Butir_rawatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temujanji`
--

CREATE TABLE `temujanji` (
  `ID_tj` int(5) NOT NULL,
  `Tarikh` date DEFAULT NULL,
  `Masa` time DEFAULT NULL,
  `Jenis_rawatan` varchar(50) DEFAULT NULL,
  `status_tj` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temujanji_admin`
--

CREATE TABLE `temujanji_admin` (
  `Id_tj` int(11) NOT NULL,
  `Nama_pelanggan` varchar(20) NOT NULL,
  `Tarikh` date NOT NULL,
  `Masa` time NOT NULL,
  `Nama_haiwan` varchar(10) NOT NULL,
  `Status_tj` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temujanji_staff`
--

CREATE TABLE `temujanji_staff` (
  `Id_tj` int(5) NOT NULL,
  `Nama_pelanggan` varchar(20) NOT NULL,
  `Tarikh` date NOT NULL,
  `Masa` time NOT NULL,
  `Nama_haiwan` varchar(10) NOT NULL,
  `Status_tj` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`admin_username`);

--
-- Indexes for table `logincustomer`
--
ALTER TABLE `logincustomer`
  ADD PRIMARY KEY (`cust_username`);

--
-- Indexes for table `loginstaff`
--
ALTER TABLE `loginstaff`
  ADD PRIMARY KEY (`staff_username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Cust_id`);

--
-- Indexes for table `senarai_ubat_haiwan`
--
ALTER TABLE `senarai_ubat_haiwan`
  ADD PRIMARY KEY (`ID_ubat`);

--
-- Indexes for table `stafklinik`
--
ALTER TABLE `stafklinik`
  ADD PRIMARY KEY (`Staff_id`);

--
-- Indexes for table `status_tj_cust`
--
ALTER TABLE `status_tj_cust`
  ADD PRIMARY KEY (`Id_tj`);

--
-- Indexes for table `temujanji`
--
ALTER TABLE `temujanji`
  ADD PRIMARY KEY (`ID_tj`);

--
-- Indexes for table `temujanji_admin`
--
ALTER TABLE `temujanji_admin`
  ADD PRIMARY KEY (`Id_tj`);

--
-- Indexes for table `temujanji_staff`
--
ALTER TABLE `temujanji_staff`
  ADD PRIMARY KEY (`Id_tj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Cust_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senarai_ubat_haiwan`
--
ALTER TABLE `senarai_ubat_haiwan`
  MODIFY `ID_ubat` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stafklinik`
--
ALTER TABLE `stafklinik`
  MODIFY `Staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_tj_cust`
--
ALTER TABLE `status_tj_cust`
  MODIFY `Id_tj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temujanji`
--
ALTER TABLE `temujanji`
  MODIFY `ID_tj` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temujanji_admin`
--
ALTER TABLE `temujanji_admin`
  MODIFY `Id_tj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temujanji_staff`
--
ALTER TABLE `temujanji_staff`
  MODIFY `Id_tj` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

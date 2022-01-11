-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 11, 2022 at 04:27 PM
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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Cust_id` int(11) DEFAULT NULL,
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
  `ID_ubat` int(11) DEFAULT NULL,
  `Nama_ubat` varchar(20) DEFAULT NULL,
  `Cara_guna` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stafklinik`
--

CREATE TABLE `stafklinik` (
  `Staff_id` int(11) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `No_telefon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temujanji`
--

CREATE TABLE `temujanji` (
  `ID_tj` int(11) DEFAULT NULL,
  `Tarikh` date DEFAULT NULL,
  `Masa` time DEFAULT NULL,
  `Jenis_rawatan` varchar(50) DEFAULT NULL,
  `status_tj` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

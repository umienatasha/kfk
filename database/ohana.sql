-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 06:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ohana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id_book` int(11) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `ic` varchar(50) NOT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id_book`, `date`, `timeslot`, `name`, `gender`, `phone`, `email`, `comment`, `ic`, `id_patient`) VALUES
(67, '2021-11-20', '04:30', 'Siti Sarah Binti Abdullah Ahmad', 'Male', '0123456789', 'Sitisarahahmad@gmail.com', 'sakit belakang', '9900102020', 24),
(79, '2021-11-22', '03:00 pm', 'Umi Natasha Binti Abdul Munaim', 'Perempuan', '0123456789', 'uminatasha22@gmail.com', 'sakit belakang', '001122020910', 23),
(80, '2021-11-29', '05:00 pm', 'Ahmad Bin Abu', 'Lelaki', '0123456789', 'ahmad@gmail.com', 'sakit bahu', '880111020901', 26),
(88, '2021-11-17', '05:00 pm', 'Ahmad Bin Abu', 'Lelaki', '0123456789', 'ahmad@gmail.com', 'sakit bahu', '880111020901', 26),
(89, '2021-11-17', '05:00 pm', 'Umi Natasha Binti Abdul Munaim', 'Lelaki', '0123456789', 'uminatasha22@gmail.com', 'sakit kepala', '001122020910', 23),
(90, '2021-11-18', '04:00 pm', 'Siti Sarah Binti Abdullah Ahmad', 'Perempuan', '0123456789', 'Sitisarahahmad@gmail.com', 'sakit belakang', '9900102022', 25),
(91, '2021-11-17', '04:00 pm', 'Siti Sarah Binti Abdullah Ahmad', 'Perempuan', '0123456789', 'Sitisarahahmad@gmail.com', 'sakit kepala', '9900102022', 25);

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ic` varchar(12) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`id`, `username`, `password`, `user_type`, `name`, `ic`, `phone`, `gender`, `state`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'MUHAMMAD FALIQ BIN AHMAD', '900123026767', '0134122364', 'MALE', 'kedah', 'faliq@gamil.com'),
(2, 'amin', 'amin', 'student', 'MUHAMMAD AMIN BIN AHMAD', '970802022563', '0134126644', 'Male', 'Kedah', 'amin@gmail.com'),
(3, 'amran', 'amran123', 'instructor', 'En. Amran bin Mohd Rejab', ' 62060702558', '0194180803', 'Male', 'Kedah', 'amran@gmail.com'),
(4, 'emira', 'emira', 'student', 'NUR EMIRA SAFIYAH BINTI EMIR SYAFIQ', '030323082424', '0125983765', 'Female', 'Perak', 'emira@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `id_patient` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `ic` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`id_patient`, `username`, `email`, `phone`, `address`, `gender`, `name`, `ic`, `create_datetime`) VALUES
(23, 'Natasha', 'uminatasha22@gmail.com', '0182534421', 'Arau, Perlis', 'Female', 'Umi Natasha Binti Abdul Munaim', '001122020910', '2021-11-09 09:46:28'),
(25, 'Sarah', 'Sitisarahabdullah@gmail.com', '0123456780', 'Kangar, Perlis', 'Male', 'Siti Sarah Binti Abdullah Ahmad', '9900102022', '2021-11-10 05:26:36'),
(26, 'Ahmad', 'ahmad@gmail.com', '0123456789', 'Kampung Gial, Mata Ayer 02500 Perlis', 'Male', 'Ahmad Bin Abu', '880111020901', '2021-11-12 09:51:22'),
(27, 'Kalsom', 'uminatasha22@gmail.com', '0123456789', 'Arau, Perlis', 'Female', 'Umi Kalsom Binti Ahmad', '740116025298', '2021-11-13 05:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti_umum`
--

CREATE TABLE `tbl_cuti_umum` (
  `id_cuti_umum` int(11) NOT NULL,
  `tarikh` date NOT NULL,
  `sebab` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Indexes for table `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  ADD PRIMARY KEY (`id_cuti_umum`),
  ADD UNIQUE KEY `tarikh` (`tarikh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  MODIFY `id_cuti_umum` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

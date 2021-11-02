-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 03:05 PM
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
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id_book`, `date`, `timeslot`, `name`, `gender`, `phone`, `email`, `comment`, `id_patient`) VALUES
(40, '2021-11-22', '08:00AM-09:00AM', 'Umi Natasha Binti Abdul Munaim', 'Perempuan', '0123456789', 'uminatasha22@gmail.com', 'sakit bahu', 0),
(41, '2021-11-25', '10:00AM-11:00AM', 'Siti Sarah', 'Perempuan', '0123456789', 'Siti@gmail.com', 'demam', 0),
(42, '2021-11-04', '10:00AM-11:00AM', 'Siti Sarah', 'Perempuan', '0123456789', 'Siti@gmail.com', 'sakit bahu', 0),
(43, '2021-11-03', '08:00AM-09:00AM', 'Fatimah Ahmad', 'Perempuan', '0123456789', 'fatimah@gmail.com', 'sakit bahu', 0);

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
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`id_patient`, `username`, `email`, `password`, `create_datetime`) VALUES
(2, 'Sarah', 'sitisarah@gmail.com', '9e9d7a08e048e9d604b79460b54969c3', '2021-11-02 02:12:26'),
(4, 'Natasha', 'uminatasha22@gmail.com', '6275e26419211d1f526e674d97110e15', '2021-11-02 03:25:24'),
(6, 'Ahmad', 'ahmad@gmail.com', '61243c7b9a4022cb3f8dc3106767ed12', '2021-11-02 12:13:28'),
(8, 'fatimah', 'fatimah@gmail.com', '3610528e7fee68c6ffb0445603ef2c8e', '2021-11-02 13:59:23');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

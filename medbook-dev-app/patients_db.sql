-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 01:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medbook_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients_db`
--

CREATE TABLE `patients_db` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_dob` text NOT NULL,
  `gender_type` text NOT NULL,
  `service_type` text NOT NULL,
  `general_comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients_db`
--

INSERT INTO `patients_db` (`id`, `patient_name`, `patient_dob`, `gender_type`, `service_type`, `general_comments`) VALUES
(1, 'Joseph Mbuku', '14/10/1997', 'male', 'outpatient', 'Sickly'),
(2, 'Ezra Orora', '8/6/2000', 'male', 'inpatient', 'First Time Visit'),
(3, 'Kevin Brown ', '15/01/1993', 'male', 'outpatient', 'First Time'),
(4, 'Leah Gitonga ', '26/07/1989', 'female', 'inpatient', 'Not feeling well'),
(5, 'John Doe', '1/1/1990', 'male', 'inpatient', 'Cut Injury'),
(6, 'Jane Doe', '1/1/1991', 'female', 'inpatient', 'Bite Wounds'),
(7, 'Timothy Muchiri', '21/5/2000', 'male', 'outpatient', 'First Visit'),
(8, 'Sharon Rose', '9/5/2001', 'female', 'inpatient', 'Headache'),
(9, 'Marjorie Harris', '1/1/1994', 'female', 'inpatient', 'Sprained Ankle'),
(10, 'Nduku Nyamai', '18/1/1998', 'female', 'inpatient', 'Stomach Ache'),
(11, 'Darnel Wanjiku', '15/5/2001', 'female', 'outpatient', 'Painful Leg'),
(12, 'Kevin Hart', '2/2/1986', 'male', 'inpatient', 'Vomits '),
(14, 'Edie Murphy', '3/3/1986', 'male', 'inpatient', 'Brocken hand'),
(15, 'Selena Gomez', '25/11/1997', 'female', 'outpatient', 'Head Ache'),
(16, 'Milley Cyrus', '12/10/1995', 'female', 'inpatient', 'Stomach Ache');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients_db`
--
ALTER TABLE `patients_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients_db`
--
ALTER TABLE `patients_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

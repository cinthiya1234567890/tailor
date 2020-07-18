-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 06:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tailor`
--

CREATE TABLE `tailor` (
  `id` int(222) NOT NULL,
  `user` text NOT NULL,
  `entry_date` date NOT NULL,
  `due_date` date NOT NULL,
  `bill_no` varchar(222) NOT NULL,
  `cus_address` varchar(222) NOT NULL,
  `cus_mob` int(222) NOT NULL,
  `cus_name` varchar(222) NOT NULL,
  `meterial` varchar(222) NOT NULL,
  `qty` int(222) NOT NULL,
  `stiched_by` varchar(222) NOT NULL,
  `cutted_by` varchar(222) NOT NULL,
  `price` int(222) NOT NULL,
  `total` int(222) NOT NULL,
  `statuss` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tailor`
--

INSERT INTO `tailor` (`id`, `user`, `entry_date`, `due_date`, `bill_no`, `cus_address`, `cus_mob`, `cus_name`, `meterial`, `qty`, `stiched_by`, `cutted_by`, `price`, `total`, `statuss`) VALUES
(1198, 'me', '0000-00-00', '0000-00-00', '', 'test', 1234567890, 'test', 'Saree', 1, '', '', 100, 100, 'Choose...'),
(1200, 'me', '2020-07-16', '2020-07-16', '1', 'test', 1234567890, 'test', 'Chudi', 2, '', '', 200, 400, 'Choose...'),
(1201, 'me', '2020-07-17', '2020-07-17', '21', 'cbe', 2147483647, 'test', 'Lining Blouse', 2, '', '', 1000, 2000, 'Choose...'),
(1202, 'me', '0000-00-00', '0000-00-00', '', 'testt', 1234567899, 'testt', 'Pavadai Belt', 2, '', '', 11000, 22000, 'Choose...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tailor`
--
ALTER TABLE `tailor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tailor`
--
ALTER TABLE `tailor`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

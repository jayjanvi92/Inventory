-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 08:56 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufactur`
--

CREATE TABLE `tbl_manufactur` (
  `id` int(11) NOT NULL,
  `manufacture_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manufactur`
--

INSERT INTO `tbl_manufactur` (`id`, `manufacture_name`, `created_at`, `updated_at`) VALUES
(1, 'jayesh', '2018-07-08 08:43:08', '2018-07-08 08:43:08'),
(2, 'maruti', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'suzuki', '2018-07-24 08:44:24', '2018-07-24 08:44:24'),
(4, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `year` int(5) NOT NULL,
  `reg_number` varchar(15) NOT NULL,
  `note` mediumtext NOT NULL,
  `photos` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`id`, `manufacture_id`, `model_name`, `quantity`, `color`, `year`, `reg_number`, `note`, `photos`, `created_at`, `updated_at`) VALUES
(1, 2, 'MZ1', 8, 'pink', 2002, '15446', 'test car', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'MZ1', 8, 'pink', 2002, '15446', 'test car', '', '2018-07-20 09:51:20', '2018-07-20 09:51:20'),
(3, 2, 'mz2', 9, 'blue', 2001, '1234546', 'tested nice car', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'J1', 8, 'black', 2003, '21123123', 'text in case', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'KL1', 8, 'green', 2005, '5454', 'jlkjlk', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'kla', 10, 'link', 2003, '21321313', '13213', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'kk;l', 7, 'lkkl', 5456, 'kkll;', 'kk;lk', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_manufactur`
--
ALTER TABLE `tbl_manufactur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_manufactur`
--
ALTER TABLE `tbl_manufactur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

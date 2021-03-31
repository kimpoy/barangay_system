-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 06:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `textInputs` varchar(5000) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `textInputs`, `date`, `month`, `year`) VALUES
(18, 'sample1', '2021-03-03', '01', '2020'),
(19, 'sample2', '2021-03-03', '01', '2020'),
(20, 'sample3', '2021-04-01', '04', '2020'),
(21, 'sample4', '2021-02-03', '04', '2020'),
(22, 'sample5', '2021-01-06', '03', '2020'),
(23, 'as', '0000-00-00', '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `brgyclearance`
--

CREATE TABLE `brgyclearance` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `abroad` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `scholarship` varchar(255) NOT NULL,
  `policeClearance` varchar(255) NOT NULL,
  `nbi` varchar(255) NOT NULL,
  `loanPurposes` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brgyclearance`
--

INSERT INTO `brgyclearance` (`id`, `fullname`, `age`, `abroad`, `loc`, `scholarship`, `policeClearance`, `nbi`, `loanPurposes`, `date`, `month`, `year`) VALUES
(18, 'sample1', 'sample1', '', '', '', '', '', '', '0000-00-00', '01', '2020'),
(19, 'sample2', 'sample2', '', '', '', '', '', '', '0000-00-00', '01', '2021'),
(20, 'sample3', 'sample3', '', '', '', '', '', '', '0000-00-00', '01', '2021'),
(21, 'sample4', 'sample4', '', '', '', '', '', '', '0000-00-00', '01', '2000'),
(22, 'sample5', 'sample5', '', '', '', '', '', '', '0000-00-00', '02', '2000'),
(23, 'as', 'as', 'abroad', 'local', 'scholarship', 'policeclearance', 'nbi', 'loanpurposes', '0000-00-00', '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `bname`, `loc`, `operator`, `addr`, `date`, `month`, `year`) VALUES
(11, 'sample1', 'sample1', 'sample1', 'sample1', '0000-00-00', '02', '2022'),
(12, 'sample2', 'sample2', 'sample2', 'sample2', '0000-00-00', '02', '2022'),
(13, 'sample3', 'sample3', 'sample3', 'sample3', '0000-00-00', '02', '2020'),
(14, 'sample4', 'sample4', 'sample4', 'sample4', '0000-00-00', '05', '2020'),
(15, 'sample5', 'sample5', 'sample5', 'sample5', '0000-00-00', '05', '2020'),
(16, 'as', 'as', 'as', 'as', '0000-00-00', '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `census`
--

CREATE TABLE `census` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `census`
--

INSERT INTO `census` (`id`, `fullname`, `lastname`, `firstname`, `middlename`, `address`, `dateofbirth`, `placeofbirth`, `sex`, `civilstatus`, `occupation`, `citizenship`, `relationship`, `date`, `month`, `year`) VALUES
(2, 'sample name1', 'sample', 'sample', 'sample', 'sample', 'sample', 'sample', 'sample', 'sample', 'sample', 'sample', '', '0000-00-00', '', ''),
(3, 'sample name2', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', '0000-00-00', '', ''),
(4, 'sample name3', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '0000-00-00', '', ''),
(5, 'qw', '', '', '', 'qw', 'qw', 'qw', 'male', 'qw', 'qw', 'qw', 'qw', '0000-00-00', '', ''),
(6, 'as', '', '', '', 'as', 'as', 'as', 'male', 'as', 'as', 'as', 'as', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `fullname`, `work`, `purpose`, `date`, `month`, `year`) VALUES
(85, 'sample1', 'sample1', 'sample1', '2021-03-01', '01', '2020'),
(86, 'sample2', 'sample2', 'sample2', '2021-03-01', '01', '2020'),
(87, 'sample3', 'sample3', 'sample3', '2021-03-02', '02', '2021'),
(88, 'sample4', 'sample4', 'sample4', '2021-03-03', '02', '2021'),
(89, 'sample5', 'sample5', 'sample5', '2021-03-04', '01', '2020'),
(90, 'as', 'as', 'as', '0000-00-00', '01', '2020'),
(92, 'qw', 'qw', 'qwa', '0000-00-00', '03', '2021'),
(93, 'as', 'as', 'ass', '0000-00-00', '03', '2021'),
(94, 'asd', 'qw', 'qwer', '0000-00-00', '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `purokranking`
--

CREATE TABLE `purokranking` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purokranking`
--

INSERT INTO `purokranking` (`id`, `fullname`, `age`, `gender`, `address`, `sector`) VALUES
(2, 'sample', '43', 'female', 'sample address2', 'labor'),
(3, 'sample1', '45', 'male', 'sample address', 'ips'),
(4, 'sample2', '23', 'male', 'sample address', 'ips'),
(5, 'sample3', '12', 'female', 'sample address', 'labor'),
(6, 'sample 4', '43', 'male', 'sample address', 'ofw'),
(7, 'sample5', '0', 'male', 'as', 'unemployed'),
(8, 'sample6', '1', 'female', 'as', 'unemployed'),
(9, 'sample7', '5', 'female', 'sample address', 'osy'),
(10, '', '4', 'female', '', 'osc'),
(11, '', '3', 'male', '', 'osy'),
(12, '', '0', 'male', 'as', 'osy'),
(13, '', '1', 'female', 'as', 'pwd'),
(14, '', '5', 'female', '', 'ofw'),
(15, '', '4', 'female', '', 'osc'),
(16, '', '3', 'male', '', 'osc');

-- --------------------------------------------------------

--
-- Table structure for table `residency`
--

CREATE TABLE `residency` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residency`
--

INSERT INTO `residency` (`id`, `fullname`, `date`, `month`, `year`) VALUES
(16, 'sample1', '0000-00-00', '05', '2020'),
(17, 'sample2', '0000-00-00', '05', '2020'),
(18, 'sample3', '0000-00-00', '05', '2021'),
(19, 'sample4', '0000-00-00', '05', '2020'),
(20, 'sample5', '0000-00-00', '05', '2022'),
(21, 'as', '0000-00-00', '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `workMother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `workFather` varchar(255) NOT NULL,
  `earnings` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `fullname`, `mother`, `workMother`, `father`, `workFather`, `earnings`, `date`, `month`, `year`) VALUES
(24, 'sample', 'sample', 'sample', 'sample', 'sample', '1', '0000-00-00', '08', '2020'),
(25, 'sample1', 'sample1', 'sample1', 'sample1', 'sample1', '1', '0000-00-00', '08', '2020'),
(26, 'sample2', 'sample2', 'sample2', 'sample2', 'sample2', '1', '0000-00-00', '08', '2021'),
(27, 'sample3', 'sample3', 'sample3', 'sample3', 'sample3', '1', '0000-00-00', '07', '2023'),
(28, 'sample4', 'sample4', 'sample4', 'sample4', 'sample4', '1', '0000-00-00', '07', '2023'),
(29, 'qw', 'qw', 'qw', 'qw', 'qw', '12', '0000-00-00', '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`) VALUES
(34, 'admin', '$2y$10$spADwQfyetDaBIoTP3fnb.l/3MTdkgVWzznZBzqmnEAuyphFLWgf2', 'admin'),
(71, 'ako', '$2y$10$htDIVVNqR0XMpR9rbpIjVOIUj2cG.0x7fupc98y..KomDu70GCc.S', 'admin'),
(81, 'bisu', '$2y$10$dNztqnXVQqOlu9lROMb7k.b4gqNGl8OjXX3G3rNdOkveTHgAp65C6', 'admin'),
(98, 'ghost', '$2y$10$StUC4hcWiARyp63DNTlk1eQ7Z2INNjG4zVo3Xv8DDVBfosmyQW2Oy', 'admin'),
(102, 'user', '$2y$10$V6k6Mepmk0bGi6rK2TECrebOLQG9Uno/YdpjWOMp2wBgv8nxq.cA6', 'user'),
(103, 'admin', '$2y$10$fwjrxfuuMeKFObuG0E8VBOuyT9CCFqo.5un1PDOlIWFhXpr/qYgY6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgyclearance`
--
ALTER TABLE `brgyclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `census`
--
ALTER TABLE `census`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purokranking`
--
ALTER TABLE `purokranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residency`
--
ALTER TABLE `residency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `brgyclearance`
--
ALTER TABLE `brgyclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `census`
--
ALTER TABLE `census`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `purokranking`
--
ALTER TABLE `purokranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `residency`
--
ALTER TABLE `residency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

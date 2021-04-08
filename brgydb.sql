-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 06:13 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `textInputs` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `textInputs`, `date`) VALUES
(18, 'sample1', '2021-03-03'),
(19, 'sample2', '2021-03-03'),
(20, 'sample3', '2021-04-01'),
(21, 'sample4', '2021-02-03'),
(22, 'sample5', '2021-01-06'),
(23, 'as', '2022-08-03'),
(24, 'as', '2022-03-03'),
(25, 'sample new appointmnets', '2021-04-06');

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
(23, 'as', 'as', 'abroad', 'local', 'scholarship', 'policeclearance', 'nbi', 'loanpurposes', '0000-00-00', '03', '2021'),
(24, 'as', 'as', 'abroad', 'local', 'scholarship', 'policeclearance', 'nbi', 'loanpurposes', '2021-04-06', '', '');

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
(16, 'as', 'as', 'as', 'as', '0000-00-00', '03', '2021'),
(17, 'as', 'as', 'as', 'as', '2021-04-06', '', '');

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
  `no` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `census`
--

INSERT INTO `census` (`id`, `fullname`, `lastname`, `firstname`, `middlename`, `address`, `no`, `street`, `sub`, `city`, `province`, `dateofbirth`, `placeofbirth`, `sex`, `male`, `female`, `civilstatus`, `occupation`, `citizenship`, `relationship`, `date`) VALUES
(14, '', 'last name', 'first name', 'middle nam', '', '12', 'street', 'purok1', 'city', 'province', '10-10-10', 'place of birth', 'male', '', '', 'separated', 'occupation', 'citizenship', 'relationship to household head', '0000-00-00'),
(15, '', 'p', 'p', 'p', '', 'p', 'p', 'purok2', 'p', 'p', 'p', 'p', 'male', '', '', 'widower', 'p', 'p', 'p', '0000-00-00'),
(16, '', 'j', 'j', 'j', '', 'j', 'j', 'purok1', 'j', 'j', 'j', 'j', 'male', '', '', 'single', 'j', 'j', 'j', '0000-00-00'),
(17, '', '9', '9', '9', '', '9', '9', 'purok3', '9', '9', '9', '9', 'male', '', '', 'single', '9', '9', '9', '0000-00-00');

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
(99, 'sample', 'samle', 'sample', '2021-04-08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `purokranking`
--

CREATE TABLE `purokranking` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purokranking`
--

INSERT INTO `purokranking` (`id`, `fullname`, `age`, `gender`, `address`, `sector`) VALUES
(3, 'new name', 11, 'female', 'purok1', 'unemployed'),
(4, 'sample2', 23, 'male', 'purok4', 'ips'),
(5, 'sample3', 12, 'female', 'purok1', 'labor'),
(6, 'sample 4', 43, 'male', 'sample address', 'ofw'),
(7, 'sample5', 0, 'male', 'as', 'unemployed'),
(8, 'sample6', 1, 'female', 'as', 'unemployed'),
(9, 'sample7', 5, 'female', 'sample address', 'osy'),
(10, '', 4, 'female', '', 'osc'),
(11, '', 3, 'male', '', 'osy'),
(12, '', 0, 'male', 'as', 'osy'),
(13, '', 1, 'female', 'as', 'pwd'),
(14, '', 5, 'female', '', 'ofw'),
(15, '', 4, 'female', '', 'osc'),
(16, '', 3, 'male', '', 'osc'),
(18, 'as', 0, 'male', 'purok1', 'ips'),
(19, 'new sample', 12, 'male', 'purok1', 'labor');

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
(21, 'as', '0000-00-00', '03', '2021'),
(22, 'qw', '2021-04-06', '', '');

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
(25, 'sample1', 'sample1', 'sample1', 'sample1', 'sample1', '1', '0000-00-00', '08', '2020'),
(26, 'sample2', 'sample2', 'sample2', 'sample2', 'sample2', '1', '0000-00-00', '08', '2021'),
(27, 'sample3', 'sample3', 'sample3', 'sample3', 'sample3', '1', '0000-00-00', '07', '2023'),
(28, 'sample4', 'sample4', 'sample4', 'sample4', 'sample4', '1', '0000-00-00', '07', '2023'),
(29, 'qw', 'qw', 'qw', 'qw', 'qw', '12', '0000-00-00', '03', '2021'),
(30, 'as', 'as', 'as', 'as', 'as', '12', '2021-04-06', '', '');

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
(102, 'user', '$2y$10$V6k6Mepmk0bGi6rK2TECrebOLQG9Uno/YdpjWOMp2wBgv8nxq.cA6', 'user'),
(109, 'user', '$2y$10$4y9XaaDtA.6tvFbKIMFEvOnbN0JFqU.lusVYULG6cbf8eehPRRpMK', 'admin'),
(110, 'admin', '$2y$10$S4NHwTRh9ztq0CD6LyWZKOAkRwuKjvCryNwn0BJHRVvw/M1rk3qqG', 'user');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `brgyclearance`
--
ALTER TABLE `brgyclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `census`
--
ALTER TABLE `census`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `purokranking`
--
ALTER TABLE `purokranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `residency`
--
ALTER TABLE `residency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

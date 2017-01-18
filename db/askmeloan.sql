-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 08:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askmeloan`
--

-- --------------------------------------------------------

--
-- Table structure for table `loanuser`
--

CREATE TABLE `loanuser` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `loantype` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `autoid` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanuser`
--

INSERT INTO `loanuser` (`id`, `name`, `email`, `loantype`, `phone`, `city`, `amount`, `pincode`, `message`, `time`, `autoid`, `status`) VALUES
(4, 'Narendra', 'narendra@gmail.com', 'Personal Loan', '9848032919', 'Hyderabad', '24000', '500072', 'Ask Me Loan', '20170110', '1001', 'Received'),
(6, 'raj', 'admin@gmail.com', 'Business Loan', '9848032919', 'Banglore', '100000', '500072', 'Welcome to Ask me Loan', '20170110', '1002', 'Received'),
(7, 'kumar', 'kumar@gmail.com', 'Business Loan', '9703589745', 'Banglore', '500000', '515487', 'Welcome to Ask me Loan', '20170111', '1003', 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loanuser`
--
ALTER TABLE `loanuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loanuser`
--
ALTER TABLE `loanuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 04:57 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'rathik', '1', 'md.rathik@gmail.com'),
(2, 'r', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `cm`
--

CREATE TABLE IF NOT EXISTS `cm` (
  `id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `status_id` int(10) NOT NULL,
  `commentator` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cm`
--

INSERT INTO `cm` (`id`, `comment`, `status_id`, `commentator`) VALUES
(1, 'RRR', 1, 'rR'),
(2, 'rrrrrrrrrr', 1, 'rrrrr'),
(3, 'hey', 5, 'Rathik'),
(4, 'ke t umi', 5, 'K'),
(5, 'ttt', 5, 'tt'),
(6, 'xxxxxxxxxxxx', 1, 'XXXXXX'),
(7, 'ds', 5, 'gdsg'),
(8, 'Hey now sttopping Dance', 17, 'Hey now '),
(9, 'rrrr', 0, 'rrr'),
(10, 'aaaaaaaaaaa', 0, 'rr'),
(11, '', 0, ''),
(12, '', 0, ''),
(13, '', 0, ''),
(14, '', 0, ''),
(15, '', 17, ''),
(16, '', 17, ''),
(17, 'safsaas\r\n', 17, 'njnjnjnn'),
(18, 'aaa', 17, 'rrr'),
(19, '', 17, ''),
(20, '', 17, '');

-- --------------------------------------------------------

--
-- Table structure for table `lc`
--

CREATE TABLE IF NOT EXISTS `lc` (
  `id` int(11) NOT NULL,
  `lk` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `ipaddress` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lc`
--

INSERT INTO `lc` (`id`, `lk`, `status_id`, `ipaddress`) VALUES
(2, 1, 5, '192.168.1.3'),
(4, 1, 18, '::1'),
(5, 1, 18, '::1'),
(6, 1, 17, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `oop`
--

CREATE TABLE IF NOT EXISTS `oop` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oop`
--

INSERT INTO `oop` (`id`, `name`, `age`) VALUES
(1, '', 0),
(2, '', 0),
(3, 'asdas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `user` varchar(10) NOT NULL,
  `post_date` date NOT NULL,
  `permission` varchar(10) NOT NULL,
  `post_time` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `status`, `user`, `post_date`, `permission`, `post_time`) VALUES
(17, 'asfasfa', 'adsaf', '2017-03-12', 'approved', '0000-00-00'),
(18, 'asfasfa', 'safsa', '2017-03-12', 'approved', '0000-00-00'),
(19, 'asfasfa', 'fsaf', '2017-03-12', 'approved', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cm`
--
ALTER TABLE `cm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc`
--
ALTER TABLE `lc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oop`
--
ALTER TABLE `oop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cm`
--
ALTER TABLE `cm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lc`
--
ALTER TABLE `lc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `oop`
--
ALTER TABLE `oop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

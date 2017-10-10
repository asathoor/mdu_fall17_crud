-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2017 at 07:04 AM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `deltager`
--

CREATE TABLE `deltager` (
  `deltager_id` int(11) NOT NULL,
  `hold_id` int(11) NOT NULL,
  `medlem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='many to many';

--
-- Dumping data for table `deltager`
--

INSERT INTO `deltager` (`deltager_id`, `hold_id`, `medlem_id`) VALUES
(1, 2, 7),
(2, 2, 5),
(3, 4, 2),
(4, 2, 8),
(5, 8, 6),
(6, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `hold`
--

CREATE TABLE `hold` (
  `hold_id` int(11) NOT NULL,
  `hold_navn` tinytext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='hold med mange medlemmer';

--
-- Dumping data for table `hold`
--

INSERT INTO `hold` (`hold_id`, `hold_navn`) VALUES
(1, 'Yin Yoga'),
(2, 'Salsa'),
(3, 'Flamenco'),
(4, 'Thaiboksning'),
(5, 'Astanga Yoga'),
(6, 'Running'),
(7, 'Step Avanceret'),
(8, 'Step Begynder');

-- --------------------------------------------------------

--
-- Table structure for table `medlemmer`
--

CREATE TABLE `medlemmer` (
  `medlemmer_id` int(11) NOT NULL,
  `navn` tinytext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `medlemmer`
--

INSERT INTO `medlemmer` (`medlemmer_id`, `navn`) VALUES
(1, 'Madsx'),
(2, 'Mette'),
(3, 'Hannibal'),
(4, 'Hansx'),
(5, 'Arne'),
(7, 'Cecilie'),
(8, 'Hanne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deltager`
--
ALTER TABLE `deltager`
  ADD PRIMARY KEY (`deltager_id`),
  ADD KEY `hold_id` (`hold_id`);

--
-- Indexes for table `hold`
--
ALTER TABLE `hold`
  ADD PRIMARY KEY (`hold_id`);

--
-- Indexes for table `medlemmer`
--
ALTER TABLE `medlemmer`
  ADD PRIMARY KEY (`medlemmer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deltager`
--
ALTER TABLE `deltager`
  MODIFY `deltager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hold`
--
ALTER TABLE `hold`
  MODIFY `hold_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `medlemmer`
--
ALTER TABLE `medlemmer`
  MODIFY `medlemmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

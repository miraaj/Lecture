-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 05:39 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `multi`
--

CREATE TABLE `multi` (
  `task_id` int(4) NOT NULL,
  `parent_id` int(4) UNSIGNED NOT NULL DEFAULT '0',
  `task` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_completed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multi`
--

INSERT INTO `multi` (`task_id`, `parent_id`, `task`, `date_added`, `date_completed`) VALUES
(1, 0, 'Do Homework', '2017-11-05 08:18:12', '0000-00-00 00:00:00'),
(2, 1, 'Practice Assignment', '2017-11-05 08:24:52', '0000-00-00 00:00:00'),
(3, 1, 'programming assign', '2017-11-07 14:02:12', '0000-00-00 00:00:00'),
(4, 3, 'php assign', '2017-11-07 14:02:24', '0000-00-00 00:00:00'),
(5, 0, 'new task', '2017-11-07 14:24:28', '0000-00-00 00:00:00'),
(6, 5, 'sfadsa', '2017-11-07 15:46:24', '0000-00-00 00:00:00'),
(7, 4, 'assign php', '2017-11-07 15:47:02', '0000-00-00 00:00:00'),
(8, 6, '12', '2017-11-07 15:56:08', '0000-00-00 00:00:00'),
(9, 1, 'hmm', '2017-11-18 15:05:28', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multi`
--
ALTER TABLE `multi`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `parent` (`parent_id`),
  ADD KEY `added` (`date_added`),
  ADD KEY `completed` (`date_completed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multi`
--
ALTER TABLE `multi`
  MODIFY `task_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

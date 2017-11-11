-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2017 at 11:43 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucbanmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'none', '2017-11-08 14:24:33', '2017-11-08 14:24:33'),
(2, 'administrator', '2017-11-08 14:26:06', '2017-11-08 14:26:06'),
(3, 'cashier', '2017-11-08 14:26:49', '2017-11-08 14:26:49'),
(5, 'registrar', '2017-11-08 14:26:56', '2017-11-08 14:26:56'),
(8, 'encoder', '2017-11-09 11:42:49', '2017-11-09 11:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `descriptions` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subcode`, `descriptions`, `status`) VALUES
(103, 'subcode', 'NEW SUBJECT', 'active'),
(104, 'subcode', 'TEST TEST ', 'inactive'),
(115, 'css', 'data com', 'inactive'),
(116, 'CS 8', 'Database', 'inactive'),
(117, 'CS 1', 'System Development', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `birth_date`, `username`, `password`, `group_id`, `created_at`, `updated_at`, `active`) VALUES
(2, 'Administrator', NULL, NULL, '', NULL, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '2017-11-08 14:27:24', '2017-11-08 14:27:24', 1),
(3, 'Winnie', 'Alterado', 'Damayo', '', NULL, 'winex01', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '2017-11-09 11:47:45', '2017-11-09 11:47:45', 1),
(4, 'Ako ', 'Is', 'Cashier', '', NULL, 'cashier', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '2017-11-09 11:51:09', '2017-11-09 11:51:09', 1),
(5, 'Ako', 'Is', 'Encoder', '', NULL, 'encoder', '5f4dcc3b5aa765d61d8327deb882cf99', 8, '2017-11-09 11:51:37', '2017-11-09 11:51:37', 1),
(6, 'Ako', 'Is', 'Registrar', '', NULL, 'registrar', '5f4dcc3b5aa765d61d8327deb882cf99', 5, '2017-11-09 11:51:57', '2017-11-09 11:51:57', 1),
(7, 'lalal', 'lorem', 'ipsum', 'M', NULL, 'skslk', 'sdfslk', 1, '2017-11-09 12:42:33', '2017-11-09 12:42:33', 1),
(8, 'AAA', 'AAA', 'AAA', 'A', NULL, 'AAA', 'AAA', 1, '2017-11-09 12:42:54', '2017-11-09 12:42:54', 1),
(9, 'BBBBBBB', 'the lorem ip', 'lorem ipsum', 'F', NULL, 'sdfs', 'sdf', 1, '2017-11-09 12:43:17', '2017-11-09 12:43:17', 1),
(10, 'Jane', NULL, 'Dough', 'F', NULL, 'lorem', 'wtfisthis', 1, '2017-11-09 12:43:35', '2017-11-09 12:43:35', 1),
(11, 'John', NULL, 'Dough', 'M', NULL, 'lorem', 'eip', 1, '2017-11-09 12:43:50', '2017-11-09 12:43:50', 1),
(12, 'Naks', NULL, 'Nampota', 'M', NULL, 'lorem', 'ipsu', 1, '2017-11-09 12:44:18', '2017-11-09 12:44:18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

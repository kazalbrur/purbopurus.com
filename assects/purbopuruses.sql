-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 04:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purpopurus`
--

-- --------------------------------------------------------

--
-- Table structure for table `purbopuruses`
--

CREATE TABLE `purbopuruses` (
  `id` int(11) NOT NULL,
  `purbopurus_name` varchar(122) NOT NULL,
  `fathers_name` varchar(122) NOT NULL,
  `mothers_name` varchar(122) NOT NULL,
  `born_in` date DEFAULT NULL,
  `died_in` date DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `history` text,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purbopuruses`
--

INSERT INTO `purbopuruses` (`id`, `purbopurus_name`, `fathers_name`, `mothers_name`, `born_in`, `died_in`, `status`, `history`, `login_id`) VALUES
(4, 'Mohon Chandra Barman', 'Rupchand Chandra Barman', 'Mono Bala', '1940-11-10', '2011-11-10', 'Died', 'A very Kind and Great Soul', 2),
(5, 'Mohon Chandra Barman', 'Rupchand Chandra Barman', 'Mono Bala', '1940-11-10', '2011-11-10', 'Died', 'A very Kind and Great Soul', 3),
(6, 'à¦œà§à¦žà¦¾à¦¨à¦¾ à¦°à¦¾à¦® à¦šà¦¨à§à¦¦à§à¦° à¦¬à¦°à§à¦®à¦¨ ', 'à¦ªà¦¤à¦¿à¦°à¦¾à¦® ', 'à¦¬à¦¾à¦‡à¦¦à§à¦¯à§‹ à¦®à¦£à¦¿', '0000-00-00', '0000-00-00', 'à¦®à§ƒà¦¤', 'à¦­à¦¾à¦²à§‹ à¦®à¦¾  à¦›à¦¿à¦²à§‡à¦¨', 3),
(7, 'à¦œà§à¦žà¦¾à¦¨à¦¾ à¦°à¦¾à¦® à¦šà¦¨à§à¦¦à§à¦° à¦¬à¦°à§à¦®à¦¨ ', 'à¦ªà¦¤à¦¿à¦°à¦¾à¦® ', 'à¦¬à¦¾à¦‡à¦¦à§à¦¯à§‹ à¦®à¦£à¦¿', '1940-11-10', '2011-11-10', 'Died', 'A very Kind and Great Soul Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.Simply download a CSS file and replace the one in Bootstrap. No messing around with hex values.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purbopuruses`
--
ALTER TABLE `purbopuruses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_purbopurses_1` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purbopuruses`
--
ALTER TABLE `purbopuruses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `purbopuruses`
--
ALTER TABLE `purbopuruses`
  ADD CONSTRAINT `FK_purbopurses_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 09:01 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `emailaddress` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `location` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `emailaddress`, `age`, `location`, `date`) VALUES
(1, 'Richard', 'Hendricks', 'richard@piedpiper.com', 32, 'Silicon Valley', '2018-04-21'),
(2, 'Bertram', 'Gilfoyle', 'gilfoyle@piedpiper.com', 34, 'Silicon Valley', '2018-04-21'),
(3, 'Dinesh', 'Chugtai', 'dinesh@piedpiper.com', 33, 'Silicon Valley', '2018-04-21'),
(4, 'Dinesh', 'Chugtai', 'dinesh@piedpiper.com', 33, 'Silicon Valley', '2018-04-21'),
(5, 'diaz', '', 'edwin@yahoo.com', 45, 'Silicon Valley', '2018-04-21'),
(6, 'diaz', '', 'edwin@yahoo.com', 45, 'Silicon Valley', '2018-04-21'),
(7, '', '', '', 0, '', '0000-00-00'),
(8, '', '', '', 0, '', '0000-00-00'),
(9, '', '', '', 0, '', '0000-00-00'),
(10, '', '', '', 0, '', '0000-00-00'),
(11, '', '', '', 0, '', '0000-00-00'),
(12, '', '', '', 0, '', '0000-00-00'),
(13, 'edwin', 'diaz', 'diaz@gmail.com', 21, 'lahore', '0000-00-00'),
(14, '', '', '', 0, '', '0000-00-00'),
(15, 'any yytryrtytrytrytr', 'Doe', 'name@name.com', 23, 'edsadasd', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

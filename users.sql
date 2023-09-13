-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 07:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `is_verify` int(11) NOT NULL,
  `tokens` varchar(300) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `email`, `pass`, `role`, `is_verify`, `tokens`, `create_date`) VALUES
(1, 'chirag4592', 'chirag@chirag.com', 'chirag@chirag.com', '1', 0, '', '2023-09-03 16:15:32'),
(2, 'chirag45921', 'chirag1@chirag.com', 'chirag1@chirag.com', 'Admin', 0, '', '2023-09-03 16:15:32'),
(3, '123', '12@12.com', '12@12.com', 'Choose...', 0, '', '2023-09-13 16:07:54'),
(4, 'chigs', '111@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'Admin', 0, '', '2023-09-13 16:41:49'),
(5, 'chigs1', '1111@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'Admin', 0, '', '2023-09-13 16:42:26'),
(7, 'chirag45921232', 'mistrya4592@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'Admin', 1, '', '2023-09-13 16:47:38'),
(8, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Choose...', 0, 'f87feb0dbe6eab2cefcf7cab9b8d9fb8', '2023-09-13 16:59:11'),
(9, 'chirag45', 'mistrsy4592@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'Admin', 0, '2b26b1c8b89508de4218a23203a84947', '2023-09-13 17:04:21'),
(10, 'chirag4592sss', 'mistry4592@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'Admin', 1, '', '2023-09-13 17:05:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

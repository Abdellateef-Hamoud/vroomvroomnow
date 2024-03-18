-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 01:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swe`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `kilometers` int(11) NOT NULL,
  `description` text NOT NULL,
  `car_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `color`, `transmission`, `price`, `kilometers`, `description`, `car_image`) VALUES
(16, 'kia', '2023', 'black', 'automatic', 1200.00, 2000, 'good car', 'images/swe.jpg'),
(17, 'honda', 'model', 'blue', 'automatic', 5851.00, 22255, 'nice', 'images/sbmw.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `username`, `email`, `password`, `birthday`, `gender`, `role`) VALUES
(1, '', '', '', '', '', '', '0000-00-00', 'male', 'user'),
(2, '', '', '', '', '', '', '0000-00-00', 'male', 'user'),
(3, 'menna', '', '', '', '', '', '0000-00-00', 'male', 'user'),
(4, 'menna', '', '', '', '', '', '0000-00-00', 'male', 'user'),
(5, 'ali', '', '', '', '', '', '0000-00-00', 'male', 'user'),
(6, '', 'mohammed', '', '', '', '', '0000-00-00', 'male', 'user'),
(7, 'oooo', 'mmmm', '0125478', 'Mnaali2005@gmail.com', 'iakxjsi', '$2y$10$w6G3Ama04ORNXN6ukzNcYe48DIRD7d2aCFLmXVja4d4D09vQ7a0du', '0000-00-00', 'female', 'admin'),
(8, 'hager', 'ahmed', 'ahmed', 'h_ahmed', 'Mnaali2005@gmail.com', '$2y$10$Y8uCb5GTOk1AWrIWoj8XRu8xbFv4qOK63jSgLnP9LXYMQ4GCvBKZm', '2002-11-25', 'female', 'admin'),
(9, 'm', 'm', 'ahmed', 'm', 'Mnaali2005@gmail.com', '$2y$10$.MXy/.POAsPFbdbN1.ICR./jCZBRZOY9WvkbcTYTPA3fFUxRtkxB2', '2003-04-07', 'female', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

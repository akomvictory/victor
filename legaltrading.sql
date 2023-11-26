-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2023 at 11:51 AM
-- Server version: 8.0.34
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legaltrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE `earning` (
  `id` int NOT NULL,
  `deposit_wallet_balance` varchar(100) NOT NULL,
  `Interest_wallet_balance` varchar(100) NOT NULL,
  `total_invest` varchar(100) NOT NULL,
  `total_deposit` varchar(100) NOT NULL,
  `total_withdraw` varchar(100) NOT NULL,
  `referral_earnings` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `wallet` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `post_balance` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int NOT NULL,
  `image` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'uploads/user.jpg',
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `image`, `first_name`, `last_name`, `username`, `email`, `mobile`, `country`, `address`, `state`, `zip`, `city`) VALUES
(3, 'uploads/user.jpg', 'John ', 'Doe', 'testuser', 'test5@gmail.com', '+2348161544559', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `firstname`, `lastname`, `country`, `mobile`, `email`, `username`, `password`) VALUES
(5, 'John ', 'Doe', 'Nigeria', '+2348161544559', 'test5@gmail.com', 'testuser', '$2y$10$Hzbr4xyy7mto1WrArp9efuIlPsmBagoEscBVhshnZtZGpH3Y8q7hm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `earning`
--
ALTER TABLE `earning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `earning`
--
ALTER TABLE `earning`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 10:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `headfoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `messages` varchar(400) NOT NULL,
  `replies` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `messages`, `replies`) VALUES
(1, 'hi|hello|salam|hey|hy', 'hello there'),
(2, 'what is your name|what is your name?', 'My name is chatbot.How cam i help you?'),
(3, 'where are you from|where are you from?', 'i\'m from pakistan.How can i help you.'),
(4, 'bye|by|good bye|byyee', 'ok bye.Have a nice day!'),
(5, 'i want to buy headphone|i want good quality headphones', 'Sure! You are at the right place.'),
(6, 'who are you|who are you?', 'i\'m chatbot.Your robotic friend please enter your queries.'),
(7, 'i want high quality headphones|i want good quality headphones', 'yes! we have a high quality headphones in discount prices.'),
(8, 'how much it\'s cost|cost|prices?|price\r\n', '200,300,400,500');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL DEFAULT 0,
  `image` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `image`, `date`) VALUES
(11, 'product1', 120, '1.jpg', '2021-09-18 17:41:43'),
(12, 'product-2', 103, '05.jpg', '2021-09-18 17:55:57'),
(13, 'product-3', 120, 'gallery02.jpg', '2021-09-18 19:42:53'),
(15, '', 0, '', '2021-09-19 12:32:18'),
(16, '', 0, '', '2021-09-19 12:32:18'),
(17, '', 0, '', '2021-09-19 13:38:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2023 at 06:07 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `is_children` tinyint(1) NOT NULL DEFAULT '0',
  `is_fiction` tinyint(1) NOT NULL DEFAULT '0',
  `is_self_help` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `genre`, `stock`, `price`, `is_children`, `is_fiction`, `is_self_help`, `image`) VALUES
(1, 'Planting for honeybees', 'Children\'s', 25, 75, 1, 0, 0, 'a-childrens.jpeg'),
(3, 'A very fine house', 'Children\'s', 106, 65, 1, 0, 0, 'c-childrens.jpg'),
(5, 'The tree keepers', 'Children\'s', 1000, 110, 1, 0, 0, 'd-childrens.jpg'),
(6, 'Nestig', 'Children\'s', 15, 81, 1, 0, 0, 'e-childrens.jpg'),
(7, 'A world full of animal stories', 'Children\'s', 15, 125, 1, 0, 0, 'f-childrens.jpg'),
(8, 'The new farm', 'Children\'s', 75, 130, 1, 0, 0, 'g-childrens.jpg'),
(9, 'God loves everyone but you', 'Children\'s', 125, 150, 1, 0, 0, 'h-childrens.jpg'),
(10, 'Lola Dutch', 'Children\'s', 100, 160, 1, 0, 0, 'i-childrens.jpg'),
(11, 'The new farm', 'Children\'s', 74, 130, 1, 0, 0, 'g-childrens.jpg'),
(12, 'CERAL', 'Fiction', 2, 165, 0, 1, 0, '1.jpg'),
(13, 'Your Soul Is A River', 'Fiction', 5, 205, 0, 1, 0, '2.jpg'),
(14, 'All This Has Nothing To Do With Me', 'Self-Help', 5, 250, 0, 0, 1, 'a-self-help.jpg'),
(15, 'The Rhimes In Me', 'Self-Help', 1, 360, 0, 0, 1, 'b-self-help.jpg'),
(16, 'Through The Breaking', 'Self-Help', 23, 322, 0, 0, 1, 'c-self-help.jpg'),
(17, 'Slim Leadership', 'Self-Help', 10, 302, 0, 0, 1, 'd-self-help.jpg'),
(18, 'The Little Dictionary Of Fashion', 'Self-Help', 3, 165, 0, 0, 1, 'e-self-help.jpg'),
(19, 'The Leopard', 'Self-Help', 4, 255, 0, 0, 1, 'f-self-help.jpg'),
(20, 'Pew', 'Self-Help', 50, 176, 0, 0, 1, 'g-self-help.jpg'),
(21, 'Daring To Take Up Space', 'Self-Help', 50, 0, 0, 0, 1, 'h-self-help.jpg'),
(22, 'Simplicity', 'Self-Help', 1, 400, 0, 0, 1, 'i-self-help.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE `book_order` (
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`order_id`, `book_id`) VALUES
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `orderss`
--

CREATE TABLE `orderss` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `buy_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderss`
--

INSERT INTO `orderss` (`order_id`, `customer_id`, `buy_date`) VALUES
(2, 1, '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `contact_no`, `dob`) VALUES
(1, 'Karabo', 'Dikolomela', 'karabodikolomela2@gmail.com', 'mickeyMOUSE!15', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `orderss`
--
ALTER TABLE `orderss`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orderss`
--
ALTER TABLE `orderss`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_order`
--
ALTER TABLE `book_order`
  ADD CONSTRAINT `book_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderss` (`order_id`),
  ADD CONSTRAINT `book_order_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);

--
-- Constraints for table `orderss`
--
ALTER TABLE `orderss`
  ADD CONSTRAINT `orderss_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

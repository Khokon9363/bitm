-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 12:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int(1) NOT NULL,
  `carousel_caption` varchar(255) NOT NULL,
  `carousel_image` text NOT NULL,
  `carousel_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `carousel_caption`, `carousel_image`, `carousel_status`) VALUES
(1, 'This is First One .', 'pics/994a1b8b68e077683ed412d98d54d58e (1).jpg', '1'),
(2, 'This is Second One .', 'pics/5c6ffc8154891b32d05cb020c49e298a.jpg', '1'),
(3, 'This is Third One .', 'pics/img5.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(3) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`, `category_status`) VALUES
(1, 'Shirts', '1'),
(2, 'Pants', '1'),
(3, 'Panjabi', '0'),
(4, 'Panjabi', '1'),
(5, 'Shari', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `caption` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_name`, `image`, `caption`, `status`, `short_description`, `long_description`) VALUES
(1, 'Shirts', 'pics/card1.jpg', 'This is a Shirt .', '1', 'This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .', 'This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .This is a Shirt .'),
(2, 'Shirts', 'pics/card4.jpg', 'This is a nice Shirt .', '1', 'This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .', 'This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .This is a nice Shirt .'),
(3, 'Pants', 'pics/carousel3.jpg', 'This is a pant .', '1', 'This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .', 'This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .This is a pant .'),
(4, 'Pants', 'pics/carousel5.jpg', 'This is also a pant .', '1', 'This is also a pant .This is also a pant .This is also a pant .This is also a pant .This is also a pant .', 'This is also a pant .This is also a pant .This is also a pant .This is also a pant .This is also a pant .This is also a pant .This is also a pant .This is also a pant .'),
(5, 'Panjabi', 'pics/card2.jpg', 'This is a nice panjabi .', '1', 'This is a nice panjabi .This is a nice panjabi .This is a nice panjabi .', 'This is a nice panjabi .This is a nice panjabi .This is a nice panjabi .This is a nice panjabi .This is a nice panjabi .This is a nice panjabi .This is a nice panjabi .'),
(6, 'Shari', 'pics/facebook.png', 'This is a Shari .', '1', 'This is a Shari .This is a Shari .This is a Shari .This is a Shari .', 'This is a Shari .This is a Shari .This is a Shari .This is a Shari .This is a Shari .This is a Shari .This is a Shari .This is a Shari .This is a Shari .'),
(7, 'Shari', 'pics/google.png', 'This is also a shari .', '1', 'This is also a shari .This is also a shari .This is also a shari .This is also a shari .', 'This is also a shari .This is also a shari .This is also a shari .This is also a shari .This is also a shari .This is also a shari .This is also a shari .This is also a shari .');

-- --------------------------------------------------------

--
-- Table structure for table `site_name`
--

CREATE TABLE `site_name` (
  `id` int(1) NOT NULL,
  `site_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_name`
--

INSERT INTO `site_name` (`id`, `site_name`) VALUES
(1, 'Super Shop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Super Admin', 'admin@album.com', '0945fc9611f55fd0e183fb8b044f1afe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_name`
--
ALTER TABLE `site_name`
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
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `site_name`
--
ALTER TABLE `site_name`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

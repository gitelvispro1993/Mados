-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 06:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogga`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(250) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `img`, `topic`, `created_at`) VALUES
(1, 'business Insider', '<p>dsdsfdfg dfdtrrtrt df</p>', 'phoot.jfif', 'Life Lessons', '2021-12-30 06:38:47'),
(2, 'Buying share', '<p>rttriry faetytyt dftyuyuyerrhjihj deitht</p>', 'image_6.png', 'Economy', '2021-12-30 07:20:04'),
(3, 'tyyyy', 'gkgkhlljk', 'Complete User Registration system using PHP and MySQL database.mp4', 'Fiction', '2022-01-04 15:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(1, 'Fiction', ''),
(4, 'Economy', ''),
(5, 'Technology', ''),
(6, 'Automotive', ''),
(7, 'Business &Finance', ''),
(8, 'Computer Programming', ''),
(9, 'Travel', ''),
(10, 'Cruise Travel', ''),
(11, 'Startups', ''),
(12, 'Venture Capital', ''),
(13, 'Business Sport', ''),
(14, 'Cyber Security', ''),
(15, 'Science', ''),
(16, 'Fashion', ''),
(17, 'Healthcare', ''),
(18, 'Real Estate', ''),
(19, 'Job Searching&Networking', ''),
(20, 'African Economy', ''),
(21, 'Marketing', ''),
(22, 'Cryptocurrency', ''),
(23, 'Mines', ''),
(24, 'Biotech', ''),
(25, 'Biotech&Biomedical', ''),
(26, 'Nature', ''),
(27, 'Aviation', ''),
(28, 'Fashion&Beauty', ''),
(29, 'Nature &Environementalism', ''),
(30, 'Space&Galaxy', ''),
(31, 'Agribusiness', ''),
(32, 'Entertainment', ''),
(33, 'Food', ''),
(34, 'Art&Culture', ''),
(35, 'Outdoors', ''),
(36, 'Home&Family', ''),
(37, 'Geology', ''),
(38, 'Gaming', ''),
(39, 'Climate change', ''),
(40, 'Space Mission', ''),
(41, 'Infrastructures', ''),
(42, 'Zoology', ''),
(43, 'Entrepreneurship', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'madoshome@gmail.com', '0aa944966c604716cd705e40dd0511b5', 'Author', '2021-12-30 06:37:06'),
(2, 'jsmith', 'jsmith@gmail.com', '39ce7e2a8573b41ce73b5ba41617f8f7', 'Admin', '2021-12-30 06:37:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

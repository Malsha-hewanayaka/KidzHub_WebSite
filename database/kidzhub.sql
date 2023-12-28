-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 05:34 PM
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
-- Database: `kidzhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `class_duration` int(4) NOT NULL,
  `target_student_age` int(4) NOT NULL,
  `consumption` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `grade` int(5) NOT NULL,
  `introduction` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `class_duration`, `target_student_age`, `consumption`, `subject`, `grade`, `introduction`, `image`) VALUES
(1, 'Writing Skills', 'Words can be like X-rays if you use them properly they\'ll go through anything. You read and you\'re pierced\r\n\r\n', 25, 5, 'Each lesson consumes 2 class credit\r\n\r\n', 'Writing Skills\r\n', 1, '24 themes, covering all aspects of study and life;\nThe themes are updated every month, and nearly 100 popular new lessons are launched every month;\nForeign teachers from North America provide one-on-one teaching. Teachers will teach students according to the different abilities and levels\nto help students express themselves naturally and confidently;\nThe course forms a closed loop of learning, which helps students improve their speaking ability through the combination of learning and\npracticing.', 'write.jpg'),
(6, 'English Class', 'Words can be like X-rays if you use them properly they\'ll go through anything. You read and you\'re pierced\r\n\r\n', 20, 7, 'Each lesson consumes 2 class credit', 'English', 4, '24 themes, covering all aspects of study and life;\r\nThe themes are updated every month, and nearly 100 popular new lessons are launched every month;\r\nForeign teachers from North America provide one-on-one teaching. Teachers will teach students according to the different abilities and levels\r\nto help students express themselves naturally and confidently;\r\nThe course forms a closed loop of learning, which helps students improve their speaking ability through the combination of learning and\r\npracticing.', 'read.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobno` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `fname`, `lname`, `email`, `mobno`, `message`, `created_at`) VALUES
(1, 'Ravindu', 'dilshan', 'admin@gmail.com', '+94776006495', 'hello', '2022-09-06 12:58:43'),
(2, 'Ovintha', 'darshana', 'dsfsdf@gmail.com', '+94776006495dsd', 'sdfsdfsdfds', '2022-09-06 13:04:43'),
(3, 'Heshan', 'kavinda', 'dsfsdf@gmail.com', '0115698565', 'dsvdvd', '2022-09-06 13:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobno` varchar(15) NOT NULL,
  `qualification` text NOT NULL,
  `grad_from` text NOT NULL,
  `experience` text NOT NULL,
  `grade` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `age`, `email`, `mobno`, `qualification`, `grad_from`, `experience`, `grade`, `description`) VALUES
(1, 'Malsha Hewanayaka', 22, 'malsha@gmail.com', '0774569874', 'BA. Primary School Teaching\r\n', 'London Academy (UK)\r\n', '3 years working experience with Kidz Hub', 'Grade 2', 'Hello Students! I warmly welcome you all to my class. I am Miss Diana Dia. I am in charge of your pre school. So I hope to have a good journey with these little children. See you soon my children. Stay Safe all!'),
(2, 'czsc', 0, 'admin@gmail.com', 'XAX', 'sdfsdfs', 'dsfsd', 'dsfsdf', 'sdfs', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `address`) VALUES
(1, 'Ravindu', 'Dilshan', 'admin@gmail.com', '$2y$10$cdSRd5kYQv1lFeNhHYRU4.RipmBKGpeE/AOXkAvbI0FVx2tgk8Wsy', 'address'),
(2, 'malsha', 'hasanjalee', 'malsha@gmail.com', '$2y$10$cdSRd5kYQv1lFeNhHYRU4.RipmBKGpeE/AOXkAvbI0FVx2tgk8Wsy', 'Badulla'),
(3, 'sdf', 'dfs', 'sdasdsad@gmail.com', '$2y$12$UTJgB6XuuNqQ9A4HHz2AROhEd6W2LnxIPw431UoW/.SNaqTMpb3py', 'Badulla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

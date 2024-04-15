-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 10:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoil_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'admin', 'ishimwechristia94@gmail.com', '123', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) NOT NULL,
  `Institution` varchar(50) DEFAULT NULL,
  `Period` varchar(50) DEFAULT NULL,
  `Degree` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `Institution`, `Period`, `Degree`, `Department`) VALUES
(1, 'nnnnnnn', 'nnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) NOT NULL,
  `Company` varchar(10) DEFAULT NULL,
  `Period` varchar(10) DEFAULT NULL,
  `Position` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `Company`, `Period`, `Position`) VALUES
(1, 'nnnnnnn', 'nnnnnnn', 'nnnnnnnnnn'),
(2, 'uuuuuu', 'uuuuuuuuuu', 'uuuuuuuuuu'),
(3, 'uuuuuu', 'uuuuuuuuuu', 'uuuuuuuuuu'),
(4, 'uuuuuu', 'uuuuuuuuuu', 'uuuuuuuuuu'),
(5, 'qq', 'qqqqqqqqq', 'qqqqqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `identify`
--

CREATE TABLE `identify` (
  `about_id` int(10) NOT NULL,
  `fullname` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Tagline` varchar(100) DEFAULT NULL,
  `fileimg` varchar(100) DEFAULT NULL,
  `CV` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Title` varchar(10) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Link` varchar(50) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_icon` varchar(100) DEFAULT NULL,
  `s_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_name`, `s_icon`, `s_description`) VALUES
(1, 'Web Design', '<i class=\"bi bi-briefcase\"></i>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,\r\n                  provident vitae! Magni\r\n                  tempora perferendis eum non provident.'),
(3, 'Web Development', '<i class=\"bi bi-card-checklist\"></i>', 'I excel in crafting intuitive and visually stunning user interfaces using HTML, CSS and JAVASCRIPT and I specialize in building robust server-side solutions using languages like PHP, Python and Node.js from database design to API development, I ensure that your application\'s backend is secure, scalable and efficient.'),
(4, 'Photography', '<i class=\"bi bi-bar-chart\"></i>', 'The captivating worlds of photography, where moments are frozen in time and memories are immortalized through the lens of a camera, As a passionate photographer, my mission is to capture the beauty, emotion, and essence of life in all its forms.');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(10) DEFAULT NULL,
  `s_proficiency` int(10) DEFAULT NULL,
  `s_service` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Function` varchar(100) DEFAULT NULL,
  `Testimony` text DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL,
  `Rating` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `Name`, `Function`, `Testimony`, `Image`, `Rating`) VALUES
(1, 'nnnnnnnnnnnnn', 'nnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnn', 'ERDsHJYWAAAU486.jpg', '12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `name`, `about`, `role`, `link`) VALUES
(1, 'ERDsHJYWAAAU486.jpg', 'nnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnn', 'Cooperation', 'nnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identify`
--
ALTER TABLE `identify`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `identify`
--
ALTER TABLE `identify`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

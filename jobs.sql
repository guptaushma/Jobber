-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 06:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desg` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `desg`, `qual`, `year`) VALUES
(1, 'ABCD', 'Flutter Developer', 'BTech', '2021'),
(2, 'XYZ', 'PHP Developer', 'BTech', '2018'),
(3, 'Josh', 'Graphic Designer', 'BSc', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `position` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jdesc` varchar(255) CHARACTER SET latin1 NOT NULL,
  `skill` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ctc` varchar(50) CHARACTER SET latin1 NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cname`, `position`, `jdesc`, `skill`, `ctc`, `location`) VALUES
(1, 'XYZ', 'Software developer', 'Building softwares and debug the client requested features.', 'CPP, Java', '7.2LPA', 'Remote'),
(2, 'MS', 'Flutter Developer', 'Developing client requested apps by the means of flutter.', 'Flutter', '8LPA', 'Mumbai'),
(3, 'ABC', 'PHP Developer', 'Working in a colaborative environment and building websites and running them in php.', 'php, mysql', '3LPA', 'Bangalore'),
(4, 'Alpha+', 'Graphic Designer', 'Design graphics for various platforms, market them.', 'Adobe Illustrator', '5.6LPA', 'Gurgaon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(110) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `email`, `password`, `phone_number`) VALUES
(1, 'Ushma', 'ushmaindia2014@gmail.com', '123', '123'),
(2, 'Ushma', 'ushmaindia2014@gmail.com', '123', '123'),
(3, 'ABCD', 'thinkk.24@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 07:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_matric` varchar(256) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `sex` varchar(256) NOT NULL,
  `date_of_birth` varchar(256) NOT NULL,
  `year_of_college` varchar(256) NOT NULL,
  `course` varchar(256) NOT NULL,
  `hall` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_matric`, `first_name`, `last_name`, `email`, `user_password`, `sex`, `date_of_birth`, `year_of_college`, `course`, `hall`) VALUES
(6, '15cu019876', 'Benard', 'Joseph', 'joebenard@yahoo.com', '$2y$10$NiP/.fEJFuwHTLcurBezwuHDvgHyT0OvWurdkXvhj90AKnTFyqRzO', 'Male', 'September 20th 1996', '300L', 'Biochemistry', 'Daniel Hall'),
(7, '15cu019877', 'Oloruntobi', 'Gloria', 'gloriaoloruntobi@gmail.com', '$2y$10$4.mgbSFEiS.FItVo9wEZg.UVoHEbF9AF0F/ZM2J8zJnPGM.HTKFcq', 'Female', 'January 10th 1990', '400L', 'Mass Communication', 'Joy Hall');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

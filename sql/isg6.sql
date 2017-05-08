-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql2.njit.edu
-- Generation Time: May 08, 2017 at 01:26 AM
-- Server version: 5.5.29-log
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isg6`
--

-- --------------------------------------------------------
--
-- Table structure for table `todos`
--

CREATE TABLE IF NOT EXISTS `todos` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `todo_title` varchar(100) NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL,
  `todo_status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `user_id`, `todo_title`, `due_date`, `due_time`, `todo_status`) VALUES
(70, 1, 'todo item 0', '2017-05-06', '10:00:00', 'pending'),
(71, 1, 'todo item 1', '2017-05-08', '10:00:00', 'pending'),
(72, 1, 'todo item 2', '2017-05-04', '10:00:00', 'pending'),
(73, 1, 'todo item 3', '2017-05-09', '10:00:00', 'pending'),
(74, 1, 'todo item 4', '2017-05-12', '10:00:00', 'completed'),
(75, 1, 'todo item 5', '2017-05-13', '10:00:00', 'completed'),
(76, 1, 'todo item 6', '2017-05-14', '10:00:00', 'completed'),
(77, 1, 'todo item 7', '2017-05-15', '10:00:00', 'completed'),
(78, 1, 'todo item 8', '2017-05-17', '10:00:00', 'completed'),
(79, 1, 'todo item 9', '2017-05-18', '10:00:00', 'completed'),
(80, 1, 'todo item 10', '2017-05-19', '10:00:00', 'pending'),
(81, 1, 'todo item 11', '2017-05-20', '10:00:00', 'pending'),
(82, 1, 'todo item 12', '2017-05-22', '10:00:00', 'pending'),
(83, 1, 'todo item 13', '2017-05-26', '10:00:00', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `birthday`, `gender`, `email`, `password`) VALUES
(1, 'Ikjyot', 'Singh', '9733933469', '1993-08-31', 'M', 'ikgujral@gmail.com', '12345'),
(2, 'Ikjyot', 'singh', '9815100127', '1993-08-31', 'M', 'isg6@njit.edu', '12345'),
(3, 'IK', 'Gujral', '9733933477', '1993-08-31', 'M', 'ik@njit.edu', '12345'),
(4, 'IK', 'SINGH', '723645931837', '2017-05-17', 'M', 'bla@gmail.com', '12345'),
(5, 'IK', 'SINGH', '783267214', '2017-05-16', 'M', 'blabla@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `todos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 08:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientinfo`
--

CREATE TABLE `clientinfo` (
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientinfo`
--

INSERT INTO `clientinfo` (`name`, `email`) VALUES
('A', 'a@gmail.com'),
('q', 'q@gmail.com'),
('influencer', 'influencer@gmail.com'),
('influencer', 'influencer@gmail.com'),
('influencer', 'influencer@gmail.com'),
('AA', 'AA@gmail.com'),
('AAA', 'aa@gmail.com'),
('AAA', 'aa@gmail.com'),
('aas', 'aas@gmail.com'),
('Name', 'name@gmail.com'),
('Name', 'name@gmail.com'),
('pathak', 'a@gmail.com'),
('pathak', 'a@gmail.com'),
('pathak', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `inn`
--

CREATE TABLE `inn` (
  `id` int(3) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inn`
--

INSERT INTO `inn` (`id`, `uname`, `pass`) VALUES
(15, 'john', 'wick');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `name` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `gender` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` bigint(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`name`, `password`, `gender`, `email`, `phone`) VALUES
('name', 'pass', 'male', 'name@gmail.com', 74123),
('name', '789', 'Female', 'A@g.c', 741),
('ooo', 'oooo', 'Male', 'q@ss.ss', 66666666),
('as', 'asdf', 'Male', 'a@gamil.com', 78965441),
('pa0', '', '', '', 0),
('l', 'l', 'Female', 'a@gmaiol.con', 5555);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 12:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jugad`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mob` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mob`, `pass`) VALUES
(7, 'Aastik', 'aastik.soul@gmail.com', '1234567890', 'qaz');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `book` text NOT NULL,
  `author` text NOT NULL,
  `price` text NOT NULL,
  `img` text NOT NULL,
  `des` text NOT NULL,
  `ss` int(11) NOT NULL,
  `seller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `book`, `author`, `price`, `img`, `des`, `ss`, `seller`) VALUES
(11, 'English', 'RD Sharma', '123', 'alt.jpg', 'qwerty qwerty qwerty qwerty qwerty qwerty qwerty ', 1, 7),
(12, 'Maths', 'Modi', '345', 'alt.jpg', '3y5yjfsb  dbsdf  df f d f g df f  f hf  g fg h fg h g  gggggggggg g    g ', 1, 7),
(13, 'Jingalala', 'jinga jinga', '9999', 'alt.jpg', 'Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo ', 1, 7),
(14, 'Chemistry', 'chem', '3457', 'alt.jpg', 'Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo ', 0, 7),
(15, 'Hindi', 'premchand', '899', 'alt.jpg', '2345678  Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo Yo ', 1, 7),
(16, 'Physics', 'newton', '9999', 'alt.jpg', ' g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B  g G g  Bb B ', 0, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 07:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myanime`
--

-- --------------------------------------------------------

--
-- Table structure for table `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `episodes` int(11) DEFAULT NULL,
  `type` enum('movie','series') NOT NULL,
  `rating` float(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animes`
--

INSERT INTO `animes` (`id`, `name`, `episodes`, `type`, `rating`) VALUES
(1, 'Ultimate Otaku Teacher', 12, 'series', 7.2),
(2, 'Demon Slayer', 24, 'series', 8.0),
(3, 'Attack On Titan', 12, 'series', 8.2),
(4, 'My Hero Academia', 12, 'series', 8.2),
(5, 'Inuyasha', 50, 'series', 7.8),
(6, 'Edenszero', 24, 'series', 7.4),
(7, 'The God of Highschool', 12, 'series', 7.2),
(8, 'Fire Force', 12, 'series', 7.4);

-- --------------------------------------------------------

--
-- Table structure for table `animes_genres`
--

CREATE TABLE `animes_genres` (
  `id` int(11) NOT NULL,
  `anime_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animes_genres`
--

INSERT INTO `animes_genres` (`id`, `anime_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 4),
(4, 1, 6),
(5, 1, 7),
(6, 2, 1),
(7, 2, 2),
(8, 3, 1),
(9, 3, 5),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 4, 4),
(14, 4, 7),
(15, 5, 1),
(16, 5, 2),
(17, 5, 3),
(18, 5, 4),
(19, 5, 7),
(20, 6, 1),
(21, 6, 2),
(22, 6, 3),
(23, 6, 4),
(24, 6, 7),
(25, 7, 1),
(26, 7, 2),
(27, 7, 4),
(28, 7, 6),
(29, 8, 1),
(30, 8, 3),
(31, 8, 6),
(32, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'ACTION'),
(2, 'ADVENTURE'),
(3, 'COMEDY'),
(4, 'FANTASY'),
(5, 'HORROR'),
(6, 'MAGIC'),
(7, 'ROMANCE'),
(8, 'SLICE OF LIFE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animes_genres`
--
ALTER TABLE `animes_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anime_id` (`anime_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `animes_genres`
--
ALTER TABLE `animes_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animes_genres`
--
ALTER TABLE `animes_genres`
  ADD CONSTRAINT `animes_genres_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id`),
  ADD CONSTRAINT `animes_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

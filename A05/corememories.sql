-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 07:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/valorant.png?raw=true', 'Valorant', '#6A1E9C'),
(2, 1, 'https://play-lh.googleusercontent.com/He92papZcOmkgTi1sLHXQQb02aoyRtJ8ml96njM_cSAcpHhILvxMjhLix4mYEIKXPq4', 'Stardew Valley', '#6A1E9C'),
(3, 1, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/lethal.png?raw=true', 'Lethal Company', '#6A1E9C'),
(4, 1, 'https://www.citypng.com/public/uploads/preview/-416064762261taxkpnzaq.png', 'Call of Duty Mobile', '#6A1E9C'),
(5, 1, 'https://cdn2.steamgriddb.com/icon_thumb/e96ed478dab8595a7dbda4cbcbee168f.png', 'Dishonored', '#6A1E9C'),
(6, 1, 'https://cdn2.steamgriddb.com/grid/55a3c8423eb4c12b794b1a1d92ba2294.png', 'Dishonored 2', '#6A1E9C'),
(7, 1, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/dishonored3.png?raw=true', 'Dishonored: Death of the Outsider', '#6A1E9C'),
(8, 1, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/roboquest.jpg?raw=true', 'RoboQuest', '#6A1E9C'),
(9, 1, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/terraria.png?raw=true', 'Terraria', '#6A1E9C'),
(10, 1, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/noita.png?raw=true', 'Noita', '#6A1E9C'),
(11, 2, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/wattpad.png?raw=true', 'Wattpad', '#F0E68C'),
(12, 2, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/ffnet.png?raw=true', 'FanFiction.Net', '#F0E68C'),
(13, 2, 'https://github.com/annebernadetteyaoto/Random-Images/blob/main/ao3.png?raw=true', 'Archive of Our Own', '#F0E68C'),
(14, 3, NULL, 'DSPC 2013', '#0288D1'),
(15, 3, NULL, 'RSPC 2013', '#0288D1'),
(16, 3, NULL, 'DSPC 2014', '#0288D1'),
(17, 3, NULL, 'RSPC 2014', '#0288D1'),
(18, 3, NULL, 'NSPC 2015', '#0288D1'),
(19, 3, NULL, 'DSPC 2018', '#0288D1'),
(20, 3, NULL, 'NCPO 2021', '#0288D1'),
(21, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/valorant.png?raw=true', 'Valorant API v2', '#43A047'),
(22, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/Glace%20logo.png?raw=true', 'Github Page', '#43A047'),
(23, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/prague.png?raw=true', 'Place Website', '#43A047'),
(24, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/parallax.png?raw=true', 'Parallax', '#43A047'),
(25, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/error404.png?raw=true', 'Error 404 Website', '#43A047'),
(26, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/searcher.png?raw=true', 'The Searcher Website', '#43A047'),
(27, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/mentalk.png?raw=true', 'Mentalk', '#43A047'),
(28, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/valorant.png?raw=true', 'Valorant API', '#43A047'),
(29, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/tcbsb.png?raw=true', 'The Coffee Bud (Starbucks)', '#43A047'),
(30, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/tcb.png?raw=true', 'The Coffee Bud', '#43A047'),
(31, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/personal.png?raw=true', 'Personal Website', '#43A047'),
(32, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/pup.png?raw=true', 'PUP Website', '#43A047'),
(33, 4, 'https://github.com/annebernadetteyaoto/annebernadetteyaoto.github.io/blob/master/images/unlockit.png?raw=true', 'UnlockIT', '#43A047');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Gaming Island', 'Favorite video games', NULL, '#6A1E9C', NULL, 'active'),
(2, 'Story Island', 'Platforms where I read, write, and publish stories', NULL, '#F57C00', NULL, 'active'),
(3, 'Student Journalist Island', 'Contests I joined to grow as a student journalist', NULL, '#0288D1', NULL, 'active'),
(4, 'Student Web Developer Island', 'Collection of my web dev projects', NULL, '#43A047', NULL, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

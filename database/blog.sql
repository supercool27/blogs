-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 05:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `imagepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `imagepath`) VALUES
(14, 'dsfd s', 'a fa sadfs', '1610015364sunita document .pdf'),
(15, 'ds fdsf adsfads fadsfdsa', 'asdf adsff sadf adsfadsf asfasdfas fadsf dsfaads', '1610018568bhanji.png'),
(16, 'fdssd sad ', 'sd fdssaf asdfsaf asf', '1610019060bhanji.jpg'),
(17, 'manoj S as ad', 'sd sad sadfsdf sda fsdaf asfsda', '1610019445sunita.jpg'),
(18, 'manoj', 'manojfd sad dfdsaf', '1610021081bhanji.jpg'),
(19, 'manoj', 'dsSD SDSFFASD SADDSF DS SDDSFF SADDSF SDFAS', '1610021116bhanji.jpg'),
(20, 'ASF SD', 'F ASDFS AF', '1610021478bhanji.jpg'),
(21, 'FDFDFD ASF', 'FS FSA SDF SDA F', '1610021885sunita.jpg'),
(22, 'SDS DSF FDSA DSAF', 'DS DSFSD DSFAADSFASFASF  AFASD', '1610021944sunita.jpg'),
(23, 'XZCX', 'CZSXXSZC', '1610022249bhanji.jpg'),
(24, 'sf dsf dsf dsfs', 'sd fdsf dsf asdfdasdsafs dfas', '1610022602sunita.jpg'),
(25, 'dsfds ds', 'sd dsfds f ', '1610025122bhanji.jpg'),
(26, 'dss dfsaf', 'sd fsdfsdf', '1610025349bhanji.jpg'),
(27, 'dcfdssd ds ds fsdsd assdfsda ', 'sd dsf sddsf sdfsd dsafsd', '1610025659bhanji.jpg'),
(28, ' asf sd sfs sdf asfasf', 'sdf sdfs fasf sf safsdaf', '1610025672bhanji.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

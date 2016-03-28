-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 09:55 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarynet`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `entryID` int(11) NOT NULL,
  `bookID` int(8) NOT NULL,
  `title` varchar(52) NOT NULL,
  `author` varchar(42) NOT NULL,
  `total` int(100) NOT NULL,
  `free` int(100) NOT NULL,
  `details` varchar(190) DEFAULT 'Fara detalii'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`entryID`, `bookID`, `title`, `author`, `total`, `free`, `details`) VALUES
(2, 1234561, 'Luceafaru2', 'Andrey Versace2', 5, -1, 'Fara detalii'),
(3, 1234562, 'Minti conducatoare', 'Howard Gardner', 5, 4, 'Fara detalii'),
(4, 1234566, 'Testterino', 'Katty', 8, 7, 'Fara detalii'),
(5, 1234560, 'TitluTest', 'AuthorTest', 5, 5, 'Fara detalii'),
(6, 1234522, 'Minti conducatoare 2', 'Howard Gardner', 5, 5, 'Fara detalii'),
(8, 1111111, 'Moara cu noroc', 'Ion Luca Caragiale', 10, 0, 'Fara detalii'),
(11, 2222222, 'test', 'test', 6, 6, 'Fara detalii'),
(13, 1212121, '121212', '121212', 12, 12, 'Fara detalii');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `bookID` int(8) NOT NULL,
  `nume` varchar(52) NOT NULL,
  `prenume` varchar(52) NOT NULL,
  `clasa` varchar(99) NOT NULL,
  `rentDate` varchar(18) NOT NULL,
  `backDate` varchar(18) DEFAULT NULL,
  `returned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`bookID`, `nume`, `prenume`, `clasa`, `rentDate`, `backDate`, `returned`) VALUES
(1234561, 'puiu', 'George', '11g', '2016-03-27', '2016-03-27', 1),
(1234566, 'Popescu', 'Ionut', '11G', '2016-03-27', '2016-03-28', 1),
(1234566, 'Patrascu', 'Ionut', '11G', '2016-03-27', '2016-03-28', 1),
(1234566, 'Popescu', 'Ionut', '11G', '2016-03-27', '2016-03-28', 1),
(1234566, 'Puiu', 'Gabriel', '12g', '2016-03-28', '2016-03-28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`entryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `entryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

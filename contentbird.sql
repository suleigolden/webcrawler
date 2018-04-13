-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 11:40 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contentbird`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls_metrics`
--

CREATE TABLE `urls_metrics` (
  `Crawl_ID` int(11) NOT NULL,
  `URL_ID` int(11) NOT NULL,
  `HTML_title` varchar(100) NOT NULL,
  `ExternalLinks` int(11) NOT NULL,
  `googleAnalytics` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls_metrics`
--

INSERT INTO `urls_metrics` (`Crawl_ID`, `URL_ID`, `HTML_title`, `ExternalLinks`, `googleAnalytics`) VALUES
(9, 6, 'Smarbly', 14, 'n/a'),
(10, 7, 'SAFSMS Blog | by FlexiSAF', 38, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `url_links`
--

CREATE TABLE `url_links` (
  `URL_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `URL` varchar(355) NOT NULL,
  `Status` text NOT NULL,
  `Date_Inserted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `url_links`
--

INSERT INTO `url_links` (`URL_ID`, `User_ID`, `URL`, `Status`, `Date_Inserted`) VALUES
(3, 1, 'http://www.sportket.com', 'new', '2018-04-13 05:12:52'),
(4, 1, 'http://www.havecv.com/suleiman', 'new', '2018-04-13 05:12:52'),
(6, 1, 'http://smarbly.com/', 'done', '2018-04-13 06:49:47'),
(7, 1, 'http://safsms.com/blog/', 'done', '2018-04-13 21:15:15'),
(8, 1, 'http://www.havecv.com', 'new', '2018-04-13 21:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Email_iD` varchar(70) NOT NULL,
  `passWord_Log` varchar(355) NOT NULL,
  `Date_Registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Full_Name`, `Email_iD`, `passWord_Log`, `Date_Registered`) VALUES
(1, 'Suleiman A Mamman', 'suleimamman@gmail.com', 'fiexNv10opckC5Jcn9RBreGfG+avIYqq1V3Js56A6SU=', '2018-04-12 05:42:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls_metrics`
--
ALTER TABLE `urls_metrics`
  ADD PRIMARY KEY (`Crawl_ID`);

--
-- Indexes for table `url_links`
--
ALTER TABLE `url_links`
  ADD PRIMARY KEY (`URL_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls_metrics`
--
ALTER TABLE `urls_metrics`
  MODIFY `Crawl_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `url_links`
--
ALTER TABLE `url_links`
  MODIFY `URL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

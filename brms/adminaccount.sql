-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 01:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminaccount`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'group2'),
(2, 'zayts', 'group2');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `isbn` bigint(13) NOT NULL,
  `issn` int(8) NOT NULL,
  `type` varchar(200) NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `yearpublished` date NOT NULL,
  `pages` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sb` int(255) NOT NULL DEFAULT 0,
  `sf` int(255) NOT NULL DEFAULT 0,
  `ba` int(255) NOT NULL DEFAULT 0,
  `stored` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `publicity` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `title`, `subject`, `description`, `author`, `isbn`, `issn`, `type`, `publisher`, `yearpublished`, `pages`, `quantity`, `price`, `sb`, `sf`, `ba`, `stored`, `publicity`, `image`) VALUES
(1, 'Head First Java (2nd Edition)', 'It', 'Learning a complex new language is no easy task especially when its an object-oriented computer programming language like Java. This resource combines puzzles, strong visuals, mysteries, and soul-sear', 'Kathy Sierra', 2147483647, 1234, 'Book', ' OReilly Media Incorporated', '2005-02-21', 280, 0, 1460, 2, 2, 2, '2021-02-16 11:55:15', 'Public', ''),
(2, 'HTML, XHTML & CSS (Visual QuickStart Guide Series)', 'It', '', 'Elizabeth Castro', 321430840, 11345678, 'Book', ' Peachpit Press', '2006-08-28', 300, 0, 2500, 4, 3, 3, '2021-02-16 11:40:38', 'Public', ''),
(79, 'True Beauty', 'Others', 'Beauty is in the inside', 'Jhayden Saj', 2147483647, 1765, 'eBook', 'Koreankork', '2011-04-26', 146, 4, 300, 2, 1, 0, '2021-02-13 11:11:14', 'Public', ''),
(80, 'Grid Systems to Evaluate Sustainable Electricity', 'Engeneering', '', 'Muhammad Mustafa Amjad', 2147483647, 21, 'Thesis', 'Creative Commons Attribution ', '2020-02-04', 100, 1, 800, 1, 0, 0, '2021-02-13 11:22:20', 'Archived', ''),
(81, 'Construction Engineering And Management', 'Engeneering', '', 'Luther Ceramic', 2147483647, 1223, 'Thesis', 'ABS,Inc', '2006-04-23', 120, 5, 999, 1, 2, 2, '2021-02-13 11:25:20', 'Public', ''),
(82, 'Introduction to linear Algebra', 'Math', '', ' Gilbert Strang', 2147483647, 1111, 'Book', 'cosmic', '1996-12-01', 509, 8, 3000, 3, 2, 3, '2021-02-13 12:00:01', 'Public', ''),
(83, 'The Biography of a Dangerous Idea', 'Math', '', 'Charles Seifi', 2147483647, 2221, 'Journal', 'skyinc', '2003-12-12', 220, 6, 2569, 2, 2, 2, '2021-02-13 12:04:47', '', ''),
(84, 'Measurement', 'Science', '', 'Paul Lochort', 2147483647, 1132, 'Articles', 'mcisland', '2010-04-05', 236, 6, 2222, 2, 2, 2, '2021-02-13 12:06:51', 'Public', ''),
(85, 'Proof from the books', 'Art', '', 'Aigner and Zeighar', 2147483647, 6578, 'eBook', 'Autolobesurf', '2009-03-05', 345, 12, 998, 4, 4, 4, '2021-02-13 12:08:52', 'Public', ''),
(86, 'War With the newts', 'Art', '', 'Karel Čapek', 2147483647, 987, 'Articles', 'COCO,inc', '1996-02-02', 421, 12, 1234, 4, 4, 4, '2021-02-13 12:12:37', 'Public', ''),
(87, 'D.A.P. Young, Gifted and Black', 'Art', '', 'Carmine D. Boccuzzi ', 2147483647, 1222, 'Articles', 'The Lumpkin-Boccuzzi', '2011-04-04', 199, 3, 1999, 1, 1, 1, '2021-02-13 12:15:04', 'Archived', ''),
(88, 'The Myth of Sysphus', 'Art', '', 'Jessica Bell Brown', 2147483647, 1239, 'Book', 'Dazed Emily Dinsdale', '0000-00-00', 234, 6, 1999, 2, 2, 2, '2021-02-13 12:26:08', 'Archived', ''),
(89, 'The library of babel', 'Art', '', 'Jamilah James', 2147483647, 2323, 'Book', 'Dinsdale,Inc', '1994-07-08', 156, 2, 899, 1, 0, 1, '2021-02-13 12:28:13', 'Public', ''),
(90, 'The books of imaginary beings', 'Art', '', 'Hallie Ringle', 2147483647, 1234, 'Book', 'Magdalo,Corp', '2008-07-08', 294, 2, 2599, 0, 1, 1, '2021-02-13 12:55:26', 'Public', ''),
(91, 'Ladies Get Paid: The Ultimate Guide to Breaking Barriers, Owning Your Worth, and Taking Command of Your Career', 'Business', '', 'Claire Wasserman', 2147483647, 5463, 'Articles', 'Gallery Books', '2021-01-12', 320, 7, 1100, 2, 3, 2, '2021-02-13 13:28:55', 'Public', ''),
(92, 'Stakeholder Capitalism: A Global Economy that Works for Progress, People and Planet', 'Business', '', 'Klaus Schwab', 2147483647, 1234, 'Book', 'ASIN,INC', '2021-01-06', 315, 8, 1200, 3, 1, 4, '2021-02-13 13:34:35', 'Public', ''),
(93, 'The Art of Selling Your Business: Winning Strategies Secret Hacks for Exiting on Top', 'Choose...', '', 'John Warrillow', 2147483647, 3425, 'Choose...', ' Inc. Original', '2021-01-12', 256, 8, 1110, 2, 5, 1, '2021-02-13 13:38:38', 'Public', ''),
(94, 'The Attributes: 25 Hidden Drivers of Optimal Performance', 'Business', '', 'Rich Diviney', 2147483647, 1454, 'Journal', 'Random House', '2021-01-26', 304, 7, 1220, 1, 2, 4, '2021-02-13 13:50:35', 'Public', ''),
(95, 'C Programming Language', 'It', '', ' Brian W. Kernighan ', 2147483647, 1764, 'Book', 'Prentice Hall ', '1989-03-16', 311, 9, 1200, 2, 2, 5, '2021-02-13 13:59:54', 'Public', ''),
(96, 'Chatter: The Voice in Our Head, Why It Matters, and How to Harness It ', 'Science', '', ' Ethan Kross ', 2147483647, 1567, 'Articles', ' Crown Publishing Group (NY)', '2021-01-26', 272, 8, 1170, 2, 3, 3, '2021-02-13 14:18:48', 'Public', ''),
(97, 'The Doctors Blackwell: How Two Pioneering Sisters Brought Medicine to Women and Women to Medicine ', 'Science', '', ' Janice P. Nimura', 2147483647, 1546, 'Book', ' W.W. Norton Company', '2021-01-19', 336, 10, 2100, 3, 2, 5, '2021-02-13 14:24:13', 'Public', ''),
(98, 'Keep Sharp: Build a Better Brain at Any Age ', 'Science', '', 'Sanjay Gupta', 2147483647, 0, 'Articles', 'Simon Schuster', '2020-06-02', 336, 10, 2222, 5, 1, 4, '2021-02-13 14:35:31', 'Archived', ''),
(99, 'Icebound: Shipwrecked at the Edge of the World ', 'Science', '', ' Andrea Pitzer ', 2147483647, 2345, 'Journal', ' Scribner ', '2021-01-12', 320, 8, 1999, 2, 3, 3, '2021-02-13 14:39:54', 'Public', ''),
(100, 'Beginners: The Joy and Transformative Power of Lifelong Learning ', 'Science', '', 'Tom Vanderbilt', 2147483647, 2435, 'Articles', ' Knopf Publishing Group', '2021-01-05', 320, 9, 1990, 2, 3, 4, '2021-02-13 14:43:19', 'Public', ''),
(101, 'Hotel Billing and Reservation System', 'It', '', 'Helen Ong', 2147483647, 1233, 'Thesis', 'neiljun_rockz', '2010-08-04', 95, 1, 1000, 1, 0, 0, '2021-02-13 14:49:30', 'Public', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

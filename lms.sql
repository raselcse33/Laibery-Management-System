-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 03:31 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `id` int(11) NOT NULL,
  `books_name` varchar(255) NOT NULL,
  `books_image` varchar(255) NOT NULL,
  `books_author_name` varchar(255) NOT NULL,
  `books_publication_name` varchar(255) NOT NULL,
  `books_purchese_date` varchar(255) NOT NULL,
  `books_price` varchar(255) NOT NULL,
  `books_qty` varchar(255) NOT NULL,
  `avaiable_qty` int(255) NOT NULL,
  `librarian_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchese_date`, `books_price`, `books_qty`, `avaiable_qty`, `librarian_username`) VALUES
(5, 'LearnPHP', 'booksimage/2793adb090.jpg', 'Rasel', 'Dhaka', '10-2-2018', '150', '50', 1, 'raselcse33'),
(6, 'Java', 'booksimage/a3dc862f5e.jpg', 'Rasel', 'Dhaka', '10-2-2018', '50', '50', 50, 'raselcse33'),
(8, 'PHP', 'booksimage/79d89b463f.jpg', 'Rasel', 'Dhaka', '10-2-2018', '150', '50', 49, 'raselcse33');

-- --------------------------------------------------------

--
-- Table structure for table `issubooks`
--

CREATE TABLE `issubooks` (
  `id` int(11) NOT NULL,
  `student_enrollment` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_sem` varchar(255) NOT NULL,
  `student_contuct` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `books_name` varchar(255) NOT NULL,
  `books_issu_date` varchar(255) NOT NULL,
  `books_return_date` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issubooks`
--

INSERT INTO `issubooks` (`id`, `student_enrollment`, `student_name`, `student_sem`, `student_contuct`, `student_email`, `books_name`, `books_issu_date`, `books_return_date`, `student_username`) VALUES
(3, '1234566', 'Rasel munshi', '6', '01729362319', 'mohibcse330@gmail.com', 'LearnPHP', '08-Sep-2018', '10-09-2018', 'raselcse33'),
(5, '123456', 'k k', '7', 'k', 'k', 'Java', '08-Sep-2018', '10-09-2018', 'k'),
(6, '1234566', 'Rasel munshi', '6', '01729362319', 'mohibcse330@gmail.com', 'PHP', '08-Sep-2018', '', 'raselcse33'),
(7, '123456', 'k k', '7', 'k', 'k', 'Laravel', '09-Sep-2018', '09-09-2018', 'k'),
(8, '1234566', 'Rasel munshi', '6', '01729362319', 'mohibcse330@gmail.com', 'PHP', '09-Sep-2018', '', 'raselcse33');

-- --------------------------------------------------------

--
-- Table structure for table `libarian_registation`
--

CREATE TABLE `libarian_registation` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libarian_registation`
--

INSERT INTO `libarian_registation` (`id`, `firstName`, `lastName`, `userName`, `password`, `email`, `contact`) VALUES
(1, 'Rasel', 'Munshi', 'raselcse33', 'rasel33cse', 'raselcse330@gmail.com', '01729362319');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `read_msg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_name`, `student_name`, `title`, `msg`, `read_msg`) VALUES
(1, 'raselcse33', 'raselcse33', 'test', 'test', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `student_registation`
--

CREATE TABLE `student_registation` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `enrollmentNo` varchar(255) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registation`
--

INSERT INTO `student_registation` (`id`, `firstName`, `lastName`, `userName`, `password`, `email`, `contact`, `sem`, `enrollmentNo`, `status`) VALUES
(4, 'Rasel', 'munshi', 'raselcse33', 'rasel33cse', 'mohibcse330@gmail.com', '01729362319', '6', '1234566', 'yes'),
(8, 'k', 'k', 'k', 'k', 'k', 'k', '7', '123456', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issubooks`
--
ALTER TABLE `issubooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libarian_registation`
--
ALTER TABLE `libarian_registation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registation`
--
ALTER TABLE `student_registation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issubooks`
--
ALTER TABLE `issubooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `libarian_registation`
--
ALTER TABLE `libarian_registation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_registation`
--
ALTER TABLE `student_registation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

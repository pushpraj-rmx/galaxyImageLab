-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 11:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gakaxy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'Admin@123[];', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cate` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cate`, `link`, `status`) VALUES
(10, 'Cricket', 'Cricket', 'Active'),
(11, 'IPL', 'IPL', 'Active'),
(12, 'Premier League', 'Premier-League', 'Active'),
(13, 'Leading Cricket Fantasy Apps in India', 'Leading-Cricket-Fantasy-Apps-in-India', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `decs` text NOT NULL,
  `datee` varchar(20) NOT NULL,
  `timee` varchar(20) NOT NULL,
  `addby` varchar(20) NOT NULL,
  `link` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `cate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `decs`, `datee`, `timee`, `addby`, `link`, `status`, `cate`) VALUES
(106, '', '07-03-2020-3-00-03-PM1.jpg', 'Pic of the day 5D Baby face at 32 weeks.Book your appointment today for your 5D scan. Call 9319933228, 7042171044', '07/03/2020', '3:00 PM', 'admin', 'Pic-of-the-day-5D-Baby-face-at-32-weeks.', 'Active', ''),
(107, ' ', '07-03-2020-3-01-31-PM2.jpg', '(Orthopantomogram) OPG * Broad coverage of facial bone and teeth. * Convenience of examination for the patient (films need not to be placed inside the mouth).', '07/03/2020', '3:01 PM', 'admin', '-', 'Active', ''),
(109, ' ', '07-03-2020-3-03-48-PM3.jpg', ' Have any urinary symptoms. Get your KUB scan done on our high resolution 5d machine . Don\'t ignore your symptoms . Book appointment now.. you call 9319933228', '07/03/2020', '3:03 PM', 'admin', '-', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `decs` text NOT NULL,
  `img` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `decs`, `img`, `status`) VALUES
(12, 'CT Scan', 'Although you may have clear vision, only a regular and complete eye exam can guarantee the health of your eyes. The following information will help you better understand the relevance of the eye exam tests you may undergo during your visit to your optometrist.\r\n\r\nDuring a complete eye exam, both your vision and eye health will be measured and evaluated through a series of distinctive tests.\r\n\r\nVisual Acuity: Measures the eyeâ€™s ability to detect details using the Snellen chart.\r\nRefraction: Your Optometrist will carefully measure for the presence of myopia, hyperopia, astigmatism and presbyopia (diminished focussing ', '', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

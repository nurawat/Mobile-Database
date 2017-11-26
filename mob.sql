-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2014 at 02:12 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `fname`, `sname`) VALUES
('rawatarun65@gmail.com', 'arun', 'Arun', 'Rawat'),
('admin@mob.com', 'admin', 'admin', ''),
('arunrawatapps@gmail.com', 'arun', 'Fine R', ''),
('rawatarun65@gmail.com', 'arun', 'Arun', 'Rawat'),
('admin@mob.com', 'admin', 'admin', ''),
('arunrawatapps@gmail', 'ar', 'ar', 'ar'),
('arunrawatapps@gmail.com', 'ar', 'ar', 'ar'),
('arunrawatapps@gmail.com', 'ar', 'ar', 'ar'),
('architjn93@gmail.com', 'ar', 'archit', 'jain');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE IF NOT EXISTS `display` (
`sno` int(11) NOT NULL,
  `sname` text NOT NULL,
  `itemnumber` text NOT NULL,
  `brandname` text NOT NULL,
  `price` text NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`sno`, `sname`, `itemnumber`, `brandname`, `price`, `rating`) VALUES
(1, 'Samsung Galaxy Note 3, Black 32GB (Verizon Wireless)', '10001', 'Samsung', '38,067', 0),
(2, 'Motorola DROID MAXX, Black 32GB (Verizon Wireless)', '10002', 'Motorola', '32,000', 0),
(3, 'Samsung Galaxy s4', '10003', ' Samsung', '29,350', 0),
(4, 'HTC One', '10004', 'HTC', '29,770', 0),
(5, 'Apple iphone 5C', '10005', 'Apple', '38,025', 0),
(6, 'Apple iphone 5S', '10006', 'Apple', '42,000', 0),
(7, 'HTC One M8', '10007', 'HTC', '32,250', 0),
(8, 'Apple iphone 5', '10007', 'Apple', '40,000', 0),
(9, 'Apple iphone 4', '100010', 'Apple', '35,000', 0),
(10, 'Google Nexus 5', '10011', 'LG', '33,500', 0),
(11, 'Sony Xperia Z1', '10013', 'Sony', '37,500', 0),
(12, 'Samsung Galaxy S5', '10014', 'Samsung', '42,350', 0),
(13, 'Samsung Galaxy mega 6.3', '10019', 'Samsung', '35,270', 0);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE IF NOT EXISTS `other` (
`sno` int(11) NOT NULL,
  `imagepath` text NOT NULL,
  `weight` text NOT NULL,
  `displaysize` text NOT NULL,
  `memory` text NOT NULL,
  `camera` text NOT NULL,
  `os` text NOT NULL,
  `battery` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`sno`, `imagepath`, `weight`, `displaysize`, `memory`, `camera`, `os`, `battery`) VALUES
(1, 'devicesSpecs/devices/note3.jpg', '168 g (5.93 oz)', '1080 x 1920 pixels, 5.7 inches', '16/32/64 GB storage, 3 GB RAM', 'camera', 'os', 'battery'),
(2, 'devicesSpecs/devices/droid.jpg', '167.8 g (5.92 oz)', '1136 x 640, 5.0 inches', '32GB internal, 2 GB RAM', 'camera', 'os', 'battery'),
(3, 'devicesSpecs/devices/s4.jpg', '208 g (7.3 oz)', '540 x 960 pixels, 4.3 inches', '8GB interal, 1.5 GB RAM', 'camera', 'os', 'battery'),
(4, 'devicesSpecs/devices/one.jpg', '../devicesSpecs/devices/one.jpg', '1080 x 1920 pixels, 4.7 inches', '32/64 GB storage, 2 GB RAM', 'camera', 'os', 'battery'),
(5, 'devicesSpecs/devices/5c.png', '132 g (4.6 oz)', '1136 x 640 pixels, 4 inches', '16, 32 GB interal, 1 GB RAM', 'camera', 'os', 'battery'),
(6, 'devicesSpecs/devices/5s.png', '112 g (3.9 oz)', '1136 x 640 pixels, 4 inches', '16, 32, 64 GB interal, 1 GB RAM', 'camera', 'os', 'battery'),
(7, 'devicesSpecs/devices/m8.jpg', '160 g (5.64 oz)', '1080 x 1920 pixels, 5.0 inches', '16/32 GB internal, 2 GB RAM', 'camera', 'os', 'battery'),
(8, 'devicesSpecs/devices/i5.png', '112 g (3.9 oz)', '1136 x 640 pixels, 4 inches', '16, 32, 64 GB interal, 1 GB RAM', 'camera', 'os', 'battery'),
(9, 'devicesSpecs/devices/i4.png', '137 g (4.8 oz)', '960 x 640 pixels, 3.5 inches', '8, 16, 32 GB interal, 512 MB RAM', 'camera', 'os', 'battery'),
(10, 'devicesSpecs/devices/nexus5.jpg', '130 g (4.6 oz)', '1920 x 1080 pixels, 4.95 inches', '16, 32 GB interal, 2 GB RAM', 'camera', 'os', 'battery'),
(11, 'devicesSpecs/devices/z1.jpg', '170 g (6.00 oz)', '1080 x 1920 pixels, 5.0 inches', '16 GB, 2 GB RAM', 'camera', 'os', 'battery'),
(12, 'devicesSpecs/devices/s5.png', '145 g (5.1 oz)', ' 1080x1920, 5.54 inches', '16,32 GB internal, 2 GB RAM  Camera :	', 'camera', 'os', 'battery'),
(13, 'devicesSpecs/devices/mega.jpg', '199 g (7.0 oz)', '720 x 1280 pixels, 4.3 inches', '8, 16 GB interal, 1.5 GB RAM', 'camera', 'os', 'battery');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `pagecounter` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `display`
--
ALTER TABLE `display`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
 ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 11:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(220) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `img`, `title`, `description`, `date`) VALUES
(34, 'salon', NULL, 'Salon Services', '<p>Indo Canada has established a new benchmark in Salon Services here.&nbsp; From our luxurious surrounds; to our creative and talented team of hair stylists and specialists; and our levels of expert service and care; the facilities at Indo Canada are designed to give you an exceptional experience.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-01-25'),
(80, 'admin', NULL, 'Salon Services', 'ndo Canada has established a new benchmark in Salon Services here.  From our luxurious surrounds; to our creative and talented team of hair stylists and specialists; and our levels of expert service and care; the facilities at Indo Canada are designed to give you an exceptional experience\r\n', '2019-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`, `date`) VALUES
(69, 'koala', 'Koala.jpg', '2019-01-16'),
(70, 'lihthouse', 'Lighthouse.jpg', '2019-01-16'),
(71, 'Hrer', 'Lighthouse.jpg', '2019-01-17'),
(72, 'tul', 'Tulips.jpg', '0000-00-00'),
(74, 'dsdfdfd', 'Chrysanthemum.jpg', '2019-01-17'),
(76, 'Employee', 'Chrysanthemum.jpg', '2019-01-09'),
(77, 'admin', 'Lighthouse.jpg', '2019-01-14'),
(78, 'koala', 'Tulips.jpg', '2019-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(200) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `m_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `c_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `l_name`, `dob`, `m_no`, `email`, `pass`, `gender`, `c_pass`) VALUES
(1, 'priyaerfesf', 'panchaldfds', '2018-12-26', 567847485, 'aesp@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(9, 'chintan', 'patel', '2018-12-26', 98754, 'ajay.khatik@wabodryms.com', '22ac3c5a5bf0b520d281', 'male', ''),
(13, 'aes', 'ytyt', '2018-12-12', 789, 'c@gmail.com', '2e65f2f2fdaf6c699b22', 'female', ''),
(14, 'aes', 'ytyt', '2018-12-12', 789, 'c@gmail.com', '2e65f2f2fdaf6c699b22', 'female', ''),
(15, 'nidhu', 'patel', '2018-12-21', 798787, 'c@gmail.com', '68053af2923e00204c3c', 'female', ''),
(17, 'nidhu', 'ytyt', '2018-12-27', 757858, 'c@gmail.com', '470e7a4f017a5476afb7', 'female', ''),
(26, 'kajal', 'chuhan', '2018-12-14', 0, 'k@gmail.com', '', 'female', ''),
(27, 'hft', 'fyty', '2018-12-19', 869876, 'etret@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(28, 'hft', 'fyty', '2018-12-19', 869876, 'etret@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(29, 'hft', 'fyty', '2018-12-19', 869876, 'etret@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(30, 'hfttyt', '6y6ry6', '2018-12-12', 75748578, 'egfhre@gmail.com', '2e65f2f2fdaf6c699b22', 'female', ''),
(31, 'hfttyt', '6y6ry6', '2018-12-12', 75748578, 'egfhre@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(32, 'hfttyt', '6y6ry6', '2018-12-12', 75748578, 'egfhrfdge@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(33, 'hfttyt', '6y6ry6', '2018-12-12', 75748578, 'egfhrfdge@gmail.comfg', '2e65f2f2fdaf6c699b22', 'male', ''),
(34, 'hfttyt', '6y6ry6', '2018-12-12', 75748578, 'egfhrfdge@gmail.comfg', '2e65f2f2fdaf6c699b22', 'male', ''),
(35, 'hfttyt', '6y6ry6', '2018-12-12', 75748578, 'egfhrfdge@gmail.comfg', 'ad61ab143223efbc24c7', 'male', ''),
(36, 'yghgy', '6y6ry6', '2018-12-12', 75748578, 'egfhrfdge@gmail.comfg', 'ad61ab143223efbc24c7', 'male', ''),
(37, 'yghgy', '6y6ry6', '2018-12-12', 75748578, 'egfhrfdge@gmail.comfg', 'ad61ab143223efbc24c7', 'male', ''),
(38, 'yghgy', '6y6ry6', '2018-12-12', 75748578, 'egfhrfdge@gmail.comfg', 'ad61ab143223efbc24c7', 'male', ''),
(39, 'rytry', 'rtryt', '2018-12-12', 98769458, 'ehgdfdre@gmail.com', '1ce927f875864094e390', 'male', ''),
(40, 'rytry', 'rtryt', '2018-12-12', 98769458, 'ehgdfdre@gmail.com', 'ad61ab143223efbc24c7', 'male', ''),
(41, 'rytry', 'rtryt', '2018-12-12', 98769458, 'p@gmail.com', '83878c91171338902e0f', 'male', ''),
(42, 'priya', 'panchal', '2019-01-15', 978564, 'pri@gmail.com', '2175f8c5cd9604f6b1e5', 'male', ''),
(43, 'nirav', 'waedwe', '2019-01-10', 9879678, 'n@gmail.com', 'a45fdb1e4ac646c9e65a', 'male', ''),
(45, 'nirav', 'waedwe', '2019-01-10', 9879678, 'n@gmail.com', 'a45fdb1e4ac646c9e65a', 'male', ''),
(46, 'nirav', 'waedwe', '2019-01-10', 9879678, 'n@gmail.com', 'a45fdb1e4ac646c9e65a', 'male', ''),
(47, 'hi', 'hello', '2019-01-25', 9898, 'hi@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(48, 'hi', 'hello', '2019-01-25', 9898, 'hi@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(50, 'hi', 'hello', '2019-01-25', 9898, 'hi@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(52, 'hi', 'hello', '2019-01-25', 9898, 'hi@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(53, 'hi', 'hello', '2019-01-25', 9898, 'hi@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(54, 'hi', 'hello', '2019-01-16', 978697, 'hi@gmail.com', '3ef815416f775098fe97', 'female', ''),
(55, 'kajal', 'kajal', '2019-01-17', 987455, 'k@gmail.com', 'df6d2338b2b8fce1ec2f', 'female', ''),
(56, 'kajal', 'krtr', '2019-01-18', 741852, 'k@gmail.com', '7faafcbcc6456af72597', 'female', ''),
(57, 'chintan', 'patel', '2019-01-17', 741984, 'c@gmail.com', '68053af2923e00204c3c', 'male', ''),
(58, 'vishal', 'panchal', '2019-01-17', 8777, 'v@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(59, 'vishal', 'panchal', '2019-01-11', 741, 'vp@gmail.com', '2e65f2f2fdaf6c699b22', 'male', ''),
(60, 'aes', 'patel', '2019-01-25', 989478, 'aesp@gmail.com', '68053af2923e00204c3c', 'male', ''),
(61, 'vishal', 'rtre', '2019-01-25', 9788, 'vp@gmail.com', '852', 'male', ''),
(62, 'y5etrt', 'rtre', '2019-01-18', 78878, 'vp@gmail.com', '741', 'female', ''),
(65, 'ekta', 'gajjar', '2019-01-17', 852, 'ekta@gmail.com', 'dbf3f5759307e3cd4f78', 'female', ''),
(67, 'wer', 'ere', '2019-01-26', 57855, 'ajay@gmail.com', '567', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

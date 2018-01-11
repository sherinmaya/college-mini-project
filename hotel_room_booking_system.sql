-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 09:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel room booking system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(224) NOT NULL,
  `email` varchar(224) NOT NULL,
  `room_type` varchar(225) NOT NULL,
  `adult` varchar(224) NOT NULL,
  `children` varchar(224) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `room_type`, `adult`, `children`, `check_in`, `check_out`) VALUES
(1, 'ahmad', 'ahmadrahav@gmail.com', '', '2', '2', '2017-09-19', '2017-09-21'),
(3, 'mathu', 'mathumitha@gmail.com', '', '2', '1', '2017-09-17', '2017-10-01'),
(4, 'prabin', 'prabinmca7@gmail.com', '', '3', '1', '2017-09-16', '2017-09-23'),
(5, 'prabin', 'prabinmca7@gmail.com', '', '3', '1', '2017-09-16', '2017-09-23'),
(6, 'prabin', 'prabinmca7@gmail.com', '', '3', '1', '2017-09-16', '2017-09-23'),
(7, 'sssss', 'sssssssssssssssssssssss@dfd', '', '1', '1', '2017-09-05', '2017-09-29'),
(8, 'sdsd', 'sssssssssssssssssssssss@dfd', '', '1', '1', '0000-00-00', '0000-00-00'),
(9, 'sdsd', 'sssssssssssssssssssssss@dfd', '', '1', '1', '0000-00-00', '0000-00-00'),
(10, 'sssssssss', 'sssssssssssssssssssssss@dfd', '', '1', '1', '0000-00-00', '0000-00-00'),
(11, 'ssss', 'sdgfs@g', '', '2', '2', '0000-00-00', '0000-00-00'),
(12, 'sdas', 'ssdfsfdf@sd', '', '4', '4', '0000-00-00', '0000-00-00'),
(13, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(14, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(15, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(16, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(17, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(18, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(19, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(20, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(21, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(22, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(23, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(24, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(25, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(26, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(27, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(28, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(29, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(30, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(31, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(32, 'safdaf', 'sdgfs@gs', '', '23', '12', '0000-00-00', '0000-00-00'),
(33, 'dfs', 'asd@d', '', '1', '11', '0000-00-00', '0000-00-00'),
(34, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(35, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(36, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(37, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(38, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(39, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(40, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(41, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(42, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(43, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(44, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(45, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(46, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(47, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(48, 'mahi', 'mahimahi@gmail.com', '', '4', '2', '2017-09-20', '2017-10-04'),
(49, 'sherin', 'sherinrabip@gmail.com', '', '1', '1', '2017-09-24', '2017-09-30'),
(50, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(51, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(52, 'sherin', 'sherinrabip@gmail.com', '', '1', '1', '2017-09-24', '2017-09-30'),
(53, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(54, 'guna', 'gana123@gmail.com', '', '1', '1', '2017-09-24', '2017-09-26'),
(55, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(56, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(57, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(58, 'shankar', 'shfyjdzdhhgud@gmail.com', '', '3', '2', '2017-09-28', '2017-09-30'),
(59, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(60, 'hdsfgik', 'jhdfgbj', '', '1', '1', '2017-09-21', '2017-09-28'),
(61, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(62, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(63, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(64, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(65, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(66, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(67, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(68, 'hdsfgik', 'jhdfgbj', '', '1', '1', '2017-09-21', '2017-09-28'),
(69, 'sdf', 'efef', '', '1', '1', '0000-00-00', '0000-00-00'),
(70, 'sdf', 'efef', '', '1', '1', '0000-00-00', '0000-00-00'),
(71, 'sdf', 'efef', '', '1', '1', '0000-00-00', '0000-00-00'),
(72, 'sdf', 'efef', '', '1', '1', '0000-00-00', '0000-00-00'),
(73, 'sdf', 'efef', '', '1', '1', '0000-00-00', '0000-00-00'),
(74, 'sdf', 'efef', '', '1', '1', '0000-00-00', '0000-00-00'),
(75, 'guna', 'gana123@gmail.com', '', '7', '6', '2017-09-24', '2017-09-29'),
(76, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(77, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(78, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(79, 'maya', 'mayarabip@gmail.com', '', '2', '1', '2017-09-23', '2017-09-24'),
(80, 'abi', 'abiabiya@gmail.com', '', '3', '2', '2017-11-25', '2017-11-26'),
(81, 'abi', 'abiabiya@gmail.com', '', '3', '2', '2017-11-25', '2017-11-26'),
(82, 'kddsj', 'dfsaffss', '', '2', '1', '2017-11-15', '2017-11-21'),
(83, 'erryerr', 'yuuyjujosd@d.j', '', '1', '1', '0000-00-00', '0000-00-00'),
(84, 'kmjihn', 'kjnjhbh@df', '', '6', '4', '0000-00-00', '0000-00-00'),
(85, 'kmjihn', 'kjnjhbh@df', '', '6', '4', '0000-00-00', '0000-00-00'),
(86, 'vvcvc', 'bbvhv@fdf', '', '55', '66', '0000-00-00', '0000-00-00'),
(87, '', '', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(88, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(89, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(90, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(91, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(92, 'maya', 'mayarabip@gmail.com', 'Double Room', '', '', '0000-00-00', '0000-00-00'),
(93, 'maya', 'mayarabip@gmail.com', 'Double Room', '', '', '0000-00-00', '0000-00-00'),
(94, 'maya', 'mayarabip@gmail.com', 'Double Room', '', '', '0000-00-00', '0000-00-00'),
(95, 'maya', 'mayarabip@gmail.com', 'Double Room', '', '', '0000-00-00', '0000-00-00'),
(96, 'maya', 'mayarabip@gmail.com', 'Double Room', '', '', '0000-00-00', '0000-00-00'),
(97, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(98, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(99, 'maya', 'mayarabip@gmail.com', 'Twin Room', '4', '6', '2017-12-22', '2017-12-30'),
(100, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(101, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(102, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(103, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(104, 'maya', 'mayarabip@gmail.com', 'Single Room', '', '', '0000-00-00', '0000-00-00'),
(105, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(106, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(107, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(108, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(109, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(110, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(111, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(112, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(113, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(114, 'maya', 'mayarabip@gmail.com', 'Twin Room', '6', '7', '2017-12-12', '2017-12-20'),
(115, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(116, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(117, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(118, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(119, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(120, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(121, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(122, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(123, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(124, 'maya', 'mayarabip@gmail.com', 'Single Room', '2', '2', '2017-12-21', '2017-12-31'),
(125, 'maya', 'mayarabip@gmail.com', 'Single Room', '3', '2', '2018-01-05', '2018-01-08'),
(126, 'maya', 'mayarabip@gmail.com', 'Single Room', '3', '1', '2018-01-06', '2018-01-14'),
(127, 'maya', 'mayarabip@gmail.com', 'Single Room', '3', '1', '2018-01-06', '2018-01-14'),
(128, 'maya', 'mayarabip@gmail.com', 'Single Room', '3', '1', '2018-01-06', '2018-01-14'),
(129, 'maya', 'mayarabip@gmail.com', 'Single Room', '3', '1', '2018-01-06', '2018-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'shery', '8765', 'asdfghjbtthn@gmail.com', 'sdfghjkl;', 'aesrdtfyguhjl'),
(2, 'gfghjk', '464', 'sherinrabip@gmail.com', '45546567', 'xcvbnm');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_Id` int(224) NOT NULL,
  `Cust_Name` varchar(150) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(150) NOT NULL,
  `State` varchar(150) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Phone` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_Id`, `Cust_Name`, `Address`, `City`, `State`, `Country`, `Email`, `Password`, `Phone`) VALUES
(7, 'Sherin', 'Kirathoor', 'Kollemcode', 'Tamil Nadu', 'India', 'sherinrabip@gmail.com', 'sherinrabi', '9600207398'),
(8, 'Maya', 'Kirathoor', 'Kollemcode', 'Tamil Nadu', 'India', 'mayarabip@gmail.com', 'sherin', '9600207399'),
(10, 'ajosh', 'malayadi', 'kaliyakavilai', 'Tamil Nadu', 'India', 'ajosh@gmail.com', 'ajosh', '8765438765'),
(12, 'shyma', 'malayadi', 'kaliyakavilai', 'Tamil Nadu', 'India', 'shyma@gmail.com', 'shyma', '7867876576'),
(13, 'pinky', 'Kirathoor', 'Kollemcode', 'Tamil Nadu', 'India', 'pinky@gmail.com', 'pinky', '7896576876'),
(14, 'Vijin', 'kolvel', 'kulashekaram', 'Tamil Nadu', 'India', 'vijinvijayakumar@gmail.com', 'vijin', '9878965678');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `feature_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `feature_name`) VALUES
(14, 'wifi'),
(16, 'Breakfast'),
(17, 'Extra bed'),
(19, 'AC'),
(20, 'TV'),
(21, 'Views'),
(23, 'Fridge');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Cust_Id` int(225) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email_Id` varchar(225) NOT NULL,
  `Comments` text NOT NULL,
  `Rating` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Cust_Id`, `Name`, `Email_Id`, `Comments`, `Rating`) VALUES
(27, 0, 'Sherin', 'sherinrabip@gmail.com', 'gud', '2'),
(29, 0, 'ajosh', 'ajosh@gmail.com', 'good', '4'),
(31, 0, 'mathu', 'mathumitha@gmail.com', 'good', '5');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `email`, `password`) VALUES
(1, 'Sherin', 'sherinrabip@gmail.com', 'sherin');

-- --------------------------------------------------------

--
-- Table structure for table `peekroom`
--

CREATE TABLE `peekroom` (
  `peek_id` int(11) NOT NULL,
  `room_no` varchar(225) NOT NULL,
  `room_picture` text NOT NULL,
  `rating` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `features` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peekroom`
--

INSERT INTO `peekroom` (`peek_id`, `room_no`, `room_picture`, `rating`, `description`, `features`) VALUES
(1, '1', 'uploads/13.jpg', '10,000/-', 'It\"s so beautiful.....	\r\n', '14,19,23'),
(2, '2', 'uploads/14.jpg', '20,000/-', 'It has lots of facilities....	', '16,19,20'),
(3, '3', 'uploads/15.jpg', '15,000/-', 'it is looking lovely........', '14,17,20'),
(7, '7', 'uploads/1405368351667.jpeg', '15,000/-', 'it is looking lovely........', '16,17,19'),
(8, '4', 'uploads/101865208.jpg.rendition.largest.jpg', '20,000/-', 'It\"s so beautiful.....\r\n\r\n', '16,17,21,23'),
(9, '5', 'uploads/GF_L5ZHhq6wl.jpg', '10,000/-', 'It has lots of facilities....', '16,19,20'),
(10, '6', 'uploads/HOF-Living-Room-Small_1-WM.jpg', '15,000/-', 'It has lots of facilities....', '16,19,21');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `name`, `email`) VALUES
(1, 'shyma', 'sherinrabip@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `room_type` varchar(225) NOT NULL,
  `capacity` varchar(225) NOT NULL,
  `adult` varchar(225) NOT NULL,
  `children` varchar(225) NOT NULL,
  `book_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total_days` varchar(225) NOT NULL,
  `additional_bed` varchar(225) NOT NULL,
  `total_amount` varchar(150) NOT NULL,
  `Room_Id` int(150) NOT NULL,
  `Cust_Id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `name`, `email`, `phone`, `room_type`, `capacity`, `adult`, `children`, `book_date`, `booking_date`, `check_in`, `check_out`, `total_days`, `additional_bed`, `total_amount`, `Room_Id`, `Cust_Id`) VALUES
(1, 'sherin', 'sherinrabip@gmail.com', '84585794', 'Single BedRoom', '2', '3', '1', '0000-00-00', '0000-00-00', '2017-08-17', '2017-08-25', '8', '3', '657', 0, 0),
(3, 'Maya', 'mayarabip@gmail.com', '7402688457', 'Single BedRoom', '1', '0', '1', '0000-00-00', '0000-00-00', '2017-08-21', '2017-08-27', '7', '0', '1000/-', 0, 0),
(4, 'hari', 'hariharan@gmail.com', '7867857657', 'Twin Room', '1', '0', '0', '0000-00-00', '0000-00-00', '2017-08-31', '2017-09-03', '4 days', 'no', '3000/-', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Room_Id` int(11) NOT NULL,
  `Room_No` varchar(225) NOT NULL,
  `Room_Picture` text NOT NULL,
  `Floor` varchar(150) NOT NULL,
  `People` varchar(150) NOT NULL,
  `Rating` varchar(150) NOT NULL,
  `Room_Type` varchar(150) NOT NULL,
  `Room_Available` varchar(150) NOT NULL,
  `description` varchar(224) NOT NULL,
  `Features` varchar(225) NOT NULL,
  `feature_id` int(150) NOT NULL,
  `no_rooms` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Room_Id`, `Room_No`, `Room_Picture`, `Floor`, `People`, `Rating`, `Room_Type`, `Room_Available`, `description`, `Features`, `feature_id`, `no_rooms`) VALUES
(34, '1', 'uploads/11.jpg', '1st floor', '1', '1000/-', 'Single Room', 'yes', 'Single is definitely for one person and usually features a single bed, which is a narrow, one person bed. A twin room usually features two one person beds, and a double room has one double bed (a bed for 2 people).', '14,16,19,20', 0, ''),
(35, '2', 'uploads/1.jpg', '2nd floor', '2', '2000/-', 'Double BedRoom', 'yes', 'Some standard double rooms are meant for a couple; these have just one queen- or king-sized bed. Other standard double rooms have two double or queen-sized beds placed side by side a few feet apart. Sometimes families of fou', '14,16,19', 0, ''),
(36, '3', 'uploads/2.jpg', '3rd floor', '2', '2500/-', 'Twin Room', 'yes', 'A single or double room is typically used for 1-2 persons travelling as the bedding configuration is normally one bed. A twin room is for 2 persons travelling however the room normally has 2 beds. A triple room accommodates ', '16,19,20', 0, ''),
(37, '4', 'uploads/12.jpg', '4th floor', '1', '3000/-', 'King BedRoom', 'yes', 'A king-sized bed may have a king-sized box spring (foundation), or two smaller box-springs (each the size of a Twin XL bed) under a king-sized mattress.The king size mattress dimensions are 76 inches wide by approximately 80', '14,20,23', 0, ''),
(38, '5', 'uploads/25.jpg', '5th floor', '2', '5000/-', 'Single Room', 'yes', 'Single is definitely for one person and usually features a single bed, which is a narrow, one person bed. A twin room usually features two one person beds, and a double room has one double bed (a bed for 2 people).', '16,17,19', 0, ''),
(39, '6', 'uploads/26.jpg', '1st floor', '1', '25,000/-', 'Double Room', 'yes', 'Some standard double rooms are meant for a couple; these have just one queen- or king-sized bed. Other standard double rooms have two double or queen-sized beds placed side by side a few feet apart. Sometimes families of you', '14,17,19,23', 0, ''),
(40, '7', 'uploads/23.jpg', '3rd floor', '2', '30,000/-', 'Twin Room', 'yes', 'A single or double room is typically used for 1-2 persons travelling as the bedding configuration is normally one bed. A twin room is for 2 persons travelling however the room normally has 2 beds. A triple room accommodates', '14,16,19', 0, ''),
(41, '8', 'uploads/44.jpg', '4th floor', '4', '40,000/-', 'King BedRoom', 'yes', 'A king-sized bed may have a king-sized box spring (foundation), or two smaller box-springs (each the size of a Twin XL bed) under a king-sized mattress.The king size mattress dimensions are 76 inches wide by approximately 80', '14,16,20,21', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `sign_id` int(11) NOT NULL,
  `email` varchar(224) NOT NULL,
  `password` varchar(224) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`sign_id`, `email`, `password`) VALUES
(1, '', 'maya');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL,
  `name` varchar(224) NOT NULL,
  `email` varchar(224) NOT NULL,
  `pswd` varchar(224) NOT NULL,
  `phone` varchar(224) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `name`, `email`, `pswd`, `phone`) VALUES
(1, 'sherin', 'sherinrabip@gmail.com', 'hkgjlou', '7009p785679'),
(2, 'sherin', 'sherinrabip@gmail.com', 'hkgjlou', '7009p785679'),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, 'shyma', 'shyma@gmail.com', 'shyma', '8767857655'),
(6, 'maya', 'mayarabip@gmail.com', 'maya', '7402688457');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `phone` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`phone`) VALUES
('6786');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_Id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `peekroom`
--
ALTER TABLE `peekroom`
  ADD PRIMARY KEY (`peek_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Room_Id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`sign_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_Id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peekroom`
--
ALTER TABLE `peekroom`
  MODIFY `peek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Room_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

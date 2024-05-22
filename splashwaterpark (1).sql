-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 02, 2023 at 06:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splashwaterpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

DROP TABLE IF EXISTS `admin1`;
CREATE TABLE IF NOT EXISTS `admin1` (
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`email`, `name`, `password`) VALUES
('admin101@gmail.com', 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  `DateofBooking` date NOT NULL,
  `TimeSlab` varchar(11) NOT NULL,
  `TotalPrice` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fullname`, `EmailId`, `PhoneNo`, `DateofBooking`, `TimeSlab`, `TotalPrice`) VALUES
(1, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(2, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(3, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(4, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(5, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(6, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(7, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(8, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(9, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(10, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(11, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(12, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(13, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(14, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(15, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(16, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(17, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(18, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(19, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(20, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(21, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(22, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(23, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(24, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(25, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(26, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(27, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(28, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(29, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(30, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(31, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(32, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(33, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(34, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(35, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(36, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(37, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(38, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(39, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(40, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(41, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(42, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(43, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(44, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(45, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(46, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(47, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(48, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(49, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(50, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(51, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(52, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(53, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(54, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(55, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(56, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(57, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(58, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(59, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(60, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(61, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(62, '', 'yash@gmail.com ', '8156060123 ', '2024-02-29', '10-15-6:00', '10000'),
(63, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-29', '10-15-6:00', '7000'),
(64, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-26', '10-15-6:00', '5000'),
(65, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-26', '10-15-6:00', '4000'),
(66, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-15', '', ''),
(67, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-25', '', ''),
(68, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-25', '', ''),
(69, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-23', '', ''),
(70, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-23', '', ''),
(71, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-17', '', ''),
(72, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-18', '', ''),
(73, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-19', '10-15-6:00', ''),
(74, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-18', '10-15-6:00', '5000'),
(75, '', 'nandandangi@gmail.com ', '1234567894 ', '2023-08-25', '10-15-6:00', '5000'),
(76, '', 'nandandangi@gmail.com ', '1234567894 ', '2023-08-19', '10-15-6:00', '7000'),
(77, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-31', '10-15-6:00', '7000'),
(78, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-08-26', '10-15-6:00', '7000'),
(79, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-09-01', '10-15-6:00', '5000'),
(80, '', 'ABCD7878@GMAIL.COM ', '4545121245 ', '2024-09-04', '10-15-6:00', '2000'),
(81, '', 'da@gmail.com ', '1234567898 ', '2023-08-31', '10-15-6:00', '8000'),
(82, '', 'milanpatadiya20@gmail.com ', '7874285779 ', '2023-09-09', '10-15-6:00', '1000'),
(83, '', 'krisha@gmail.com', '7874285779', '2023-09-02', '10-15-6:00', '5000'),
(84, '', 'krisha@gmail.com', '4334465566', '2023-08-31', '10-15-6:00', '6000'),
(85, '', 'junk@gmail.com', '567898789', '2023-09-02', '10-15-6:00', '10000'),
(86, '', 'krisha@gmail.com', '3333333333', '2023-09-02', '10-15-6:00', '6000'),
(87, '', 'junk@gmail.com', '4334465566', '2023-09-16', '10-15-6:00', '8000'),
(88, '', 'junk@gmail.com', '4334465566', '2023-09-16', '10-15-6:00', '8000'),
(89, '', 'junk@gmail.com', '4334465566', '2023-09-16', '10-15-6:00', '8000'),
(90, '', 'junk@gmail.com', '4334465566', '2023-09-16', '10-15-6:00', '8000'),
(91, '', 'junk@gmail.com', '9924281033', '2023-09-15', '10-15-6:00', '7000'),
(92, '', 'junk@gmail.com', '9924281033', '2023-09-15', '10-15-6:00', '12000'),
(93, '', 'junk@gmail.com', '9924281033', '2023-09-16', '10-15-6:00', '7000'),
(94, '', 'junk@gmail.com', '4444488888', '2023-09-23', '10-15-6:00', '5000'),
(95, '', 'junk@gmail.com', '4444488888', '2023-09-23', '10-15-6:00', '5000'),
(96, 'junk patadiya', 'junk@gmail.com', '9924281033', '2023-09-29', '10-15-6:00', '9000'),
(97, 'junk patadiya', 'junk@gmail.com', '88888866666', '2023-09-16', '10-15-6:00', '9600'),
(98, 'junk patadiya', 'junk@gmail.com', '7874285779', '2023-09-16', '10-15-6:00', '8000r');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(8, 'Lisa Brown', 'lisabrown@gmail.com', 'Last time I liked this wonderful festival and I have already booked this ticket for the upcoming one!'),
(9, 'Samantha Morris', 'Samantha@Morrisgmail.com', 'I am very glad that I was lucky to attend this wonderful festival last year! I would like to come again'),
(10, 'Daniel Morris', 'danielmorris@gmail.com', 'I am very glad that I was lucky to attend this wonderful festival last year! I would like to come again'),
(11, 'Henry Jones', 'henryjones@gmail.com', 'It was the brightest festival of my life! I have already bought a ticket and am looking forward to it.'),
(12, 'Marianne Lee', 'mariannelee@gmail.com', 'Thank you! There were a lot of positive and cool emotions. I very much want to come next year.'),
(13, 'Henry Jones', 'henryjones@gmail.com', 'It was the brightest festival of my life! I have already bought a ticket and am looking forward to it.');

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

DROP TABLE IF EXISTS `getintouch`;
CREATE TABLE IF NOT EXISTS `getintouch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=163 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `getintouch`
--

INSERT INTO `getintouch` (`id`, `name`, `email`, `phone`, `subject`) VALUES
(162, 'jainam', 'jainam@gmail.com', '1234567895', 'fdfgkddjgf'),
(161, 'dar', 'da@gmail.com', '1234567898', 'dfgjdfjfdgk'),
(160, 'ABCD', 'ABCD7878@GMAIL.COM', '4545121245', 'ABCDEFGH'),
(159, 'priya', 'priya@gmail.com', '1023452391', 'fjfsdjidojdoi'),
(158, 'jiya', 'jiya@gmail.com', '1023402345', 'dffsssdf'),
(157, 'pooja', 'pooja@gmail.com', '1203452034', 'ddfk'),
(156, 'kavo', 'kavo@gmail.com', '0234510235', 'cxvdsdkds'),
(155, 'khus', 'khus@gmail.com', '3102394535', 'hghgfgr'),
(154, 'khusi', 'khusi@gmail.com', '3102394532', 'dfgjdfgjdjdogi'),
(153, 'janavi', 'janavi@gmail.com', '3451034963', 'dfghgfh'),
(152, 'riyan', 'riyan@gmail.com', '5679082345', 'dgjdgoi'),
(151, 'jayesh', 'jayesh@gmail.com', '1234567847', 'fkokgok'),
(150, 'gaman', 'gaman@gmail.com', '1234567899', 'fdldkfldkd'),
(149, 'shukla', 'shukla@gmail.com', '1234557892', 'dfmfkgfk'),
(148, 'shivamdube', 'shivamdube@gmail.com', '1234567893', 'dfkljjkgjgdgkf'),
(147, 'nandan dangi', 'nandandangi@gmail.com', '1234567894', 'dgfdgdgf'),
(146, 'sunny', 'sunny@gmail.com', '4896781020', 'ffjfefkrfk'),
(145, 'sizu', 'sizu@gmail.com', '4567892345', 'kvdmfk'),
(144, 'sahil', 'sahil@gmail.com', '4567656789', 'sdsfslkfm'),
(143, 'Yash Chauhan', 'yash@gmail.com', '8156060123', ''),
(142, 'shivam', 'shivam@gmail.com', '5674586789', 'ddfjdfjdsfio'),
(141, 'Chandresh Prajapati', 'chandreshprajapati099@gmail.com', '9737281044', 'Pls approve my registration for ticket booking.'),
(140, 'bhago', 'bhago@gmail.com', '1234567896', 'kdddd'),
(139, 'saho', 'saho@gmail.com', '1234567897', 'fgbfhgf'),
(138, 'kpk', 'kp@gmail.com', '1234567891', 'dfnfnkjnd'),
(137, 'jay', 'jay@gmail.com', '4567864567', 'fdfldk'),
(136, 'bhikho', 'bhikho@gmail.com', '5467656787', 'sdsjdssd'),
(135, 'himanshu', 'himanshu@gmail.com', '4567897865', 'dfjdfgjgjdog'),
(134, 'kaushal makavana', 'kaushalmakavana@gmail.com', '3949567859', 'what is the sunday price ?'),
(133, 'nandan', 'nandan@gmail.com', '3675785674', 'hello,i am nandan your bench partner!'),
(132, 'salim', 'salim@gmail.com', '4334465566', 'my name is salim'),
(131, 'rahul', 'rahul@gmail.com', '5497812304', 'rahul name to suna hoga'),
(130, 'meet malavaniya', 'meetmalavaniya@gmail.com', '5990678012', 'jgfhgfjdghfudhuruuu'),
(129, 'meet shukla', 'meetshukla@gmail.com', '2344352341', 'what is the price of your waterpark tickets ?'),
(128, 'madhvi lakum', 'madhvilakum@gmail.com', '5654567676', 'or kya hal chal'),
(127, 'milan', 'milanpatadiya20@gmail.com', '7874285779', 'what a nice waterpark men !');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(23) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email`, `password`) VALUES
('[milan]', '[milanpatadiya2004@gmail.com]', '[10101010]'),
('nobita', 'nobita@gmail.com', '88888888'),
('junk', 'junk@gmail.com', '12345678'),
('krish', 'krisha@gmail.com', '4444444444'),
('jiyan', 'jiyan@gmail.com', '66666666'),
('jiyu', 'jiyu@gmail.com', '5555500000'),
('admin', 'admin@gmail.com', '101');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

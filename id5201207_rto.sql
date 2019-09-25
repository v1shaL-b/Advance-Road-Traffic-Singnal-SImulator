-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2018 at 03:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5201207_rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `no` int(5) NOT NULL,
  `rid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stat` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`no`, `rid`, `stat`, `date`, `time`) VALUES
(1, '1234567', 'Yes', '27-03-2018', '12:00'),
(123, '2233', 'Yes', '12-04-2018', '16:24'),
(124, '2233', 'No', '12-04-2018', '16:25'),
(125, '2233', 'No', '12-04-2018', '16:26'),
(126, '2233', 'No', '12-04-2018', '16:27'),
(127, '2233', 'No', '12-04-2018', '16:28'),
(128, '2233', 'No', '12-04-2018', '16:29'),
(129, '2233', 'No', '12-04-2018', '16:30'),
(130, '12', 'No', '13-04-2018', '17:19'),
(131, '123456', 'No', '13-04-2018', '17:19'),
(132, '123456', 'No', '13-04-2018', '17:20'),
(133, '123456', 'No', '13-04-2018', '17:24'),
(134, '123456', 'No', '13-04-2018', '17:26'),
(135, '123456', 'No', '13-04-2018', '17:26'),
(136, '123456', 'No', '13-04-2018', '17:27'),
(137, '123456', 'No', '13-04-2018', '17:28'),
(138, '123456', 'No', '13-04-2018', '17:29');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `no` int(11) NOT NULL,
  `rid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rdate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `oname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `oaddr` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `vtype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chesis` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fuel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vmake` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`no`, `rid`, `stat`, `rdate`, `oname`, `oaddr`, `mono`, `pin`, `vtype`, `chesis`, `color`, `fuel`, `vname`, `vmake`) VALUES
(0, '23423', '', '2018-03-05', 'asdad', 'asd', 'asd', '123', 'mcycle', '322141231s', 'red', 'erw', 'asdasd', 'asd'),
(0, '123789', '', '2018-03-19', 'dfwef', 'wefwe', '7030052927', '2132', 'mcycle', 'ewdwefe', 'efwfw', 'ewf', 'ewf', 'fwwf'),
(0, '2233', '', '2018-04-10', 'dsfsdf', 'dsfsdf', '7030052927', 'dsf', 'mcycle', 'dsf', 'fsf', 'sfsf', 'sdf', 'dff'),
(0, '2233', '', '2018-04-10', 'dsfsdf', 'dsfsdf', '7030052927', 'dsf', 'mcycle', 'dsf', 'fsf', 'sfsf', 'sdf', 'dff'),
(0, '2233', '', '2018-04-10', 'dsfsdf', 'dsfsdf', '7030052927', 'dsf', 'mcycle', 'dsf', 'fsf', 'sfsf', 'sdf', 'dff'),
(0, '12555', '', '2018-06-11', 'sdfsddsfsf', 'htfhfhf', '9075484980', '458965', 'mcycle', 'fdcdsdv345345', 'red', 'petol', 'dc', 'cdvfsd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(30) NOT NULL,
  `pass` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rdate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `oname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `oaddr` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `vtype` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `chesis` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fuel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hpower` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ono` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `vname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vmaker` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `balence` int(10) NOT NULL DEFAULT '3000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `pass`, `rdate`, `oname`, `oaddr`, `mono`, `pin`, `vtype`, `chesis`, `color`, `fuel`, `hpower`, `ono`, `vname`, `vmaker`, `img`, `balence`) VALUES
(213, '6978', '2018-04-09', '21313', 'asdasd', '7030052927', 'xsad', 'car', 'asd', 'asd', 'sadad', 'asd', 'ada', 'asd', 'dad', 'prins.jpg', 3000),
(423, '4049', '2018-06-06', 'Sanket Kulkarni', 'mmit', '8928788724', '421507', 'car', 'fdcdsdv345345', 'red', 'petol', '1200', '1', 'i smart', 'dad', 'sanket_1.jpg', 3000),
(2233, '5027', '2018-04-02', 'sdfsddsfsf', 'dsfsf', '7030052927', 'fsdfsdf', 'car', 'fdsf', 'dsf', 'dsfs', 'sdf', 'sdf', 'fdss', 'sdf', 'cer.jpg', 2800),
(7449, '7862', '13/12/2008', 'Parth Limbote', 'Pune', '8411890158', '411015', 'mcycle', 'dsf6546464', 'Orange', 'Petrol', '160', '1', 'Hornet', 'Honda', '', 3200),
(12555, '2102', '2018-04-10', 'Shubham Kaneri', 'Jalna,Maharastra', '7030052927', '421507', 'car', 'fdcdsdv345345', 'red', 'petol', '120', '1', 'i smart', 'hero', '', 3000),
(12558, '3877', '2018-04-10', 'Shubham Kaneri', 'Jalna,Maharastra', '7030052927', '421507', 'car', 'fdcdsdv345345', 'red', 'petol', '120', '1', 'i smart', 'hero', '', 3000),
(112233, '4228', '2018-04-10', 'xzcxzczxc', 'xzcxzczxc', '7030052927', 'ZXCxzXcZC', 'car', 'ZCZC', 'sdcd', 'ZCz', 'dscds', 'ZCzc', 'dc', 'cdvfsd', 'back3.jpg', 3000),
(123456, '6060', '2018-04-11', 'Nilesh S. Patil', 'MMIT,Pune', '7030052927', '425107', 'car', 's1d54d54sa', 'red', 'petrol', '120', '1', 'HF Delux', 'Hero', 'nil.jeg', 2700),
(456780, '4019', '2018-04-10', 'Sanket Kulkarni', 'RAmanand nagar,Jalgaon', '7030052927', '425107', 'mcycle', 'swdas', 'red', 'petrol', '120', '1', 'HF Delux', 'Hero', 'sanket.jpeg', 3500),
(456789, '1882', '2018-06-06', 'Shubham Kaneri', 'ygkjgkjgmg', '7030052927', '421507', 'car', 'fdcdsdv345345', 'red', 'petrol', '120', 'ada', 'dc', 'cdvfsd', 'shubham gate.jpg', 3015),
(1255522, '2529', '2018-06-19', 'sdfsddsfsf', 'sadasdasd', '8983448970', '213123', 'car', 'asd', 'red', 'petol', 'aS', 'aS', 'sdsad', 'dssad', '', 3000),
(1255523, '3266', '', '', '', 'ewr', 'ewrrewr', 'mcycle', '', '', '', '', '', '', '', '', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1255524;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

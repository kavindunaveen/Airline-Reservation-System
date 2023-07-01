-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 06:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revolt airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_emp`
--

CREATE TABLE `admin_emp` (
  `id` int(10) NOT NULL,
  `emp_no` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `Reg_DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_flight`
--

CREATE TABLE `admin_flight` (
  `f_id` int(10) NOT NULL,
  `f_no` varchar(10) NOT NULL,
  `f_country` varchar(20) NOT NULL,
  `f_model` varchar(15) NOT NULL,
  `Reg_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_hotel`
--

CREATE TABLE `admin_hotel` (
  `H_id` int(10) NOT NULL,
  `hotel_no` varchar(10) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_country` varchar(20) NOT NULL,
  `Reg_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_Name` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_Name`, `pwd`) VALUES
('KAMAL', 'PERERA');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_subject` varchar(100) NOT NULL,
  `c_massage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_subject`, `c_massage`) VALUES
('login', 'hello my friend');

-- --------------------------------------------------------

--
-- Table structure for table `myprof`
--

CREATE TABLE `myprof` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myprof`
--

INSERT INTO `myprof` (`id`, `username`, `email`, `phone`, `dob`, `gender`) VALUES
(1, 'kamal', 'kamal@gmail.com', '53453', '0000-00-00', 'male'),
(2, 'kamal', 'kamal@gmail.com', '53453', '0000-00-00', 'male'),
(3, 'supun', 'supun@gmail.com', 'rwrerw', '2000-11-22', 'male'),
(4, 'vbcvb', 'vcb@gmail.com', '35235', '0000-00-00', 'fdgdfg'),
(5, 'sajam', 'sdad@232.xzx', '12323', '2000-12-08', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `stat` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `ea` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `email`, `address`, `city`, `stat`, `zipcode`, `cardnumber`, `month`, `ea`, `cvv`) VALUES
('sunil', 'sunil@gmail.com', 'homagama,malabe', 'malabe', 'Central Province', '11222', '453454634636346', '5', '2023', '443'),
('', '', '', '', 'Choose State..', '', '', '', 'Choose Year..', '');

-- --------------------------------------------------------

--
-- Table structure for table `seatbook`
--

CREATE TABLE `seatbook` (
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `seatNo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatbook`
--

INSERT INTO `seatbook` (`f_name`, `l_name`, `phone`, `country`, `seatNo`, `gender`) VALUES
('l', 'gamage', '53453454', 'sri lanka', '1A', ''),
('l', 'gamage', '53453454', 'sri lanka', '1A', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `user_email`, `user_password`) VALUES
('poornaka', 'rajmal@gmail.com', '34543534'),
('gfhfgh', 'yoo@gmai.com', 'fghfgh'),
('gfhfgh', 'yoo@gmai.com', 'fghfgh'),
('yoooggg', 'yoo@gmai.com', 'vbcvb'),
('vcxvcvcv', 'ghjjjjjj2@mail.com', 'fgdfgfdg'),
('hiiii', 'ghjjjjjj2@mail.com', 'dfgdfg'),
('vbcvb', 'ghjjjjjj2@mail.com', 'cvbcvb'),
('mala', 'mala@gmail.com', '1234'),
('supun', 'spun@gmail.com', 's6666'),
('chamara', 'chamara@gmail.com', 'rtrtrtr'),
('kasun', 'kasun@gmail.com', 'kasunnn'),
('typt', 'spun@gmail.com', 'gggg'),
('pasan', 'bbbb@gmail.com', 'eeee'),
('egg', 'ghjjjjjj2@mail.com', 'eeeee'),
('namal', 'bbbb@gmail.com', '4321'),
('chamal', 'ghjjjjjj2@mail.com', 'gfgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_emp`
--
ALTER TABLE `admin_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_flight`
--
ALTER TABLE `admin_flight`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `admin_hotel`
--
ALTER TABLE `admin_hotel`
  ADD PRIMARY KEY (`H_id`);

--
-- Indexes for table `myprof`
--
ALTER TABLE `myprof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myprof`
--
ALTER TABLE `myprof`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

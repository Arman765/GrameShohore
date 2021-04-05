-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 08:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grameshohore`
--

-- --------------------------------------------------------

--
-- Table structure for table `busservices`
--

CREATE TABLE `busservices` (
  `PassengerName` varchar(50) NOT NULL,
  `SeatBooked` int(40) NOT NULL,
  `PassengerID` int(255) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Departure` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `Travel_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busservices`
--

INSERT INTO `busservices` (`PassengerName`, `SeatBooked`, `PassengerID`, `Company`, `Departure`, `origin`, `destination`, `Travel_Date`) VALUES
('Emon Ghosh', 5, 6, 'London Express Ltd', '10:30:00', 'Rajshahi', 'Sylhet', '2021-04-05 18:00:00'),
('Emon Ghosh', 3, 7, 'London Express Ltd', '10:30:00', 'Rajshahi', 'Sylhet', '2021-04-05 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bus_schedules`
--

CREATE TABLE `bus_schedules` (
  `Bus_ID` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Departure` varchar(50) DEFAULT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `Travel_Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_schedules`
--

INSERT INTO `bus_schedules` (`Bus_ID`, `Company`, `Departure`, `origin`, `destination`, `Travel_Date`) VALUES
('1001', 'Green Line Paribahan', '2021-04-06', 'Dhaka', 'Chittagong', '2021-03-28 18:00:00'),
('1003', 'Unity transport', '2021-04-06', 'Chittagong', 'CoxBazar', '2021-03-29 18:00:00'),
('1002', 'London Express Ltd', '2021-04-06', 'Dhaka', 'CoxBazar', '2021-03-30 18:00:00'),
('1004', 'Tourist Mini Bus Rent & River Cruise', '2021-04-06', 'Dhaka', 'Sylhet', '2021-04-01 18:00:00'),
('1005', 'London Express Ltd', '2021-04-06', 'Sylhet', 'Dhaka', '2021-04-05 18:00:00'),
('1007', 'Tourist Mini Bus Rent & River Cruise', '2021-04-06', 'Dhaka', 'Khulna', '2021-04-06 18:00:00'),
('1008', 'Ena Transport', '2021-04-06', 'Khulna', 'Sylhet', '2021-04-06 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

CREATE TABLE `contactdata` (
  `id` int(11) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdata`
--

INSERT INTO `contactdata` (`id`, `fullname`, `phone`, `email`, `message`) VALUES
(4, 'Mohammad Arman', '1877366171', 'asdasd@gmail.com', 'Great Work ! keep going<3'),
(5, 'Mohammad Arman', '1877366171', 'asdasd@gmail.com', 'Great Work ! keep going<3'),
(6, 'Emon', '1877361234', 'asdasd@gmail.com', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(6, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(200) NOT NULL,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(23, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(24, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(25, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(26, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(27, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(28, 'Super Comfort', '2017-05-19', '2017-05-22', 'Jinat Afroj', 1524587558, 'true'),
(29, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(30, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(31, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(32, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(33, 'Duplex', '2021-04-14', '2021-04-30', 'Mohammad Arman', 1877366171, 'true'),
(34, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(35, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(36, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(37, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Duplex', 5, 5, 0, 2, 'single', 'AC, TV, Wifi', 1500),
('Family', 5, 5, 0, 2, 'double', 'Sofa, TV, WIFI, Balcony, AC.', 3500),
('Super Comfort', 5, 5, 0, 1, 'double', 'AC, TV, WIFI', 2200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'cy4nide', 'asdasd@gmail.com', '$2y$10$ersAGAGLZZYyPEBgNSYLUuWDsqNhZrsHlBbZG3SGbtMEPYnrEVrTy'),
(2, 'arman', 'asdasd@gmail.com', '$2y$10$mirXhuIyJmcKR9DigEGed.ziEW1KrJVGW5ej0lfMV9KDfDBoMnimW'),
(3, 'tauhid', 'asdasd@gmail.com', '$2y$10$XLOoUbfw913yh7eTDimBDuM0PHTL6xG73OFIf8S6glWZqGN.B/8l6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busservices`
--
ALTER TABLE `busservices`
  ADD PRIMARY KEY (`PassengerID`);

--
-- Indexes for table `contactdata`
--
ALTER TABLE `contactdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`roomname`(100));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busservices`
--
ALTER TABLE `busservices`
  MODIFY `PassengerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactdata`
--
ALTER TABLE `contactdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

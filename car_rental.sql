-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 02:36 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Bill_id` int(11) NOT NULL,
  `Tax` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `final_Amount` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Book_id` int(11) NOT NULL,
  `BookingDate` date NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `Licence_id` int(255) NOT NULL,
  `uname` varchar(11) NOT NULL,
  `Uniqueid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Unique_id` int(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Image` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Unique_id`, `Company`, `Brand`, `Image`) VALUES
(103, 'MERCEDES', 'A45S', 'images/merc_a45s.jpg'),
(104, 'BMW', 'X5', 'images/bmw_x5.jpg'),
(105, 'MERCEDES', 'E65S', 'images/merc_e63s.jpg'),
(106, 'MERCEDES', 'C63S', 'images/merc_c63s.jpg'),
(107, 'MERCEDES', 'S63S', 'images/merc_s63s.jpeg'),
(108, 'BMW', '5 SERIES', 'images/bmw_5_ser.jpg'),
(109, 'BMW', '4 SERIES', 'images/bmw_4_ser.jpg'),
(110, 'BMW', '3 SERIES', 'images/bmw_3_ser.jpg'),
(111, 'AUDI ', 'A6', 'images/audi_a6.jpg'),
(112, 'AUDI', 'RS6', 'images/audi_rs6.jpeg'),
(113, 'AUDI ', 'RSQ8', 'images/audi_rsq8.jpg'),
(114, 'AUDI', 'Q7', 'images/audi_q7.jpeg'),
(115, 'RR', 'PHANTOM', 'images/rr_phantom.jpg'),
(116, 'RR ', 'GHOST', 'images/rr-ghost.jpg'),
(117, 'TESLA', ' MODEL S', 'images/tesla_model_s.jpg'),
(118, 'TESLA', ' MODEL 3', 'images/tesla_model_3.jpg'),
(119, 'ROLLS-ROYCE', 'CULLINAM', 'images/cullinan.jpg'),
(120, 'JAGUAR', 'F-TYPE', 'images/jag_f-type.jpeg'),
(121, 'MASERATI', 'LEVANTE', 'images/maserati.jpg'),
(122, 'RANGE ROVER', 'VELAR', 'images/velar.jpg'),
(123, 'FERRARI ', 'ROMA', 'images/ferrari-roma.jpg'),
(124, 'LAMBORGINI', ' URUS', 'images/urus.jpeg'),
(125, 'PORSCHE ', ' CAYENE', 'images/cayene.jpg'),
(126, 'BENTLEY', 'CONTINENTAL', 'images/continental.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `card_id` int(255) NOT NULL,
  `card_no` int(255) NOT NULL,
  `card_month` varchar(11) NOT NULL,
  `card_year` varchar(11) NOT NULL,
  `card_ccv` int(11) NOT NULL,
  `cardname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Phone_id` int(25) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Sex` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Phone_id`, `Dateofbirth`, `Address`, `Sex`, `email`, `Name`, `password`) VALUES
(523677, '2021-01-01', 'bangalore', 'Male', 'yjh@gmail.com', 'imran', '123'),
(0, '2020-12-23', 'bangalore', 'Male', '123@ac.in', 'monish', '1'),
(3, '0000-00-00', 'Bangalore', 'Male', '123@ac.in', 'Rajesh', '1'),
(333333, '0000-00-00', 'Bangalore', 'Male', '123@ac.in', 'tejas', '1');

-- --------------------------------------------------------

--
-- Table structure for table `requested_vechile`
--

CREATE TABLE `requested_vechile` (
  `Horsepower` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Seats` int(11) NOT NULL,
  `Unique_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested_vechile`
--

INSERT INTO `requested_vechile` (`Horsepower`, `Status`, `Cost`, `Seats`, `Unique_id`, `Order_id`) VALUES
(387, 0, 1000, 4, 103, 6),
(460, 0, 1500, 4, 104, 7),
(603, 0, 2000, 4, 105, 8),
(503, 0, 1000, 4, 106, 9),
(603, 0, 1800, 4, 107, 12),
(460, 0, 1000, 4, 108, 13),
(382, 0, 800, 4, 109, 14),
(190, 0, 500, 4, 110, 15),
(180, 0, 500, 4, 111, 16),
(787, 0, 2500, 4, 112, 17),
(769, 0, 2500, 4, 113, 18),
(335, 0, 1000, 4, 114, 19),
(414, 0, 800, 4, 115, 20),
(420, 0, 1000, 4, 116, 21),
(503, 0, 1000, 4, 117, 22),
(450, 0, 1000, 4, 118, 23),
(441, 0, 1000, 4, 119, 24),
(423, 0, 1000, 4, 120, 25),
(202, 0, 500, 4, 121, 26),
(184, 0, 500, 4, 122, 27),
(456, 0, 1000, 4, 123, 28),
(478, 0, 1000, 4, 124, 29),
(404, 0, 1000, 4, 125, 30),
(467, 0, 1000, 4, 126, 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Bill_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Book_id`),
  ADD KEY `uname` (`uname`),
  ADD KEY `Uniqueid` (`Uniqueid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Unique_id`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `cardname` (`cardname`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `requested_vechile`
--
ALTER TABLE `requested_vechile`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `Unique_id` (`Unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `Bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `Unique_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `card_details`
--
ALTER TABLE `card_details`
  MODIFY `card_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `requested_vechile`
--
ALTER TABLE `requested_vechile`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `customer` (`Name`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `Uniqueid` FOREIGN KEY (`Uniqueid`) REFERENCES `car` (`Unique_id`);

--
-- Constraints for table `card_details`
--
ALTER TABLE `card_details`
  ADD CONSTRAINT `cardname` FOREIGN KEY (`cardname`) REFERENCES `customer` (`Name`);

--
-- Constraints for table `requested_vechile`
--
ALTER TABLE `requested_vechile`
  ADD CONSTRAINT `Unique_id` FOREIGN KEY (`Unique_id`) REFERENCES `car` (`Unique_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 10:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `custmr`
--

CREATE TABLE `custmr` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custmr`
--

INSERT INTO `custmr` (`id`, `name`, `phone`, `email`) VALUES
(1, 'abcd', 2147483647, 'godson@gmail.com'),
(100, 'efgh', 12345, 'efgh@gmail.com'),
(101, 'abcd', 2147483647, 'godson@gmail.com'),
(102, 'xyz', 8136958555, 'xyz@gmail.com'),
(103, 'godu', 1234, 'godu@gmail.com'),
(104, 'tiju', 45678, 'tiju@gmail.com'),
(105, 'maman', 8136958555, 'maman@gmail.com'),
(106, 'rito', 8167270301, 'rito@smotpro.com'),
(107, 'a', 1, 'a'),
(108, 'aaa', 122, 'dghfd');

-- --------------------------------------------------------

--
-- Table structure for table `custmr1`
--

CREATE TABLE `custmr1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custmr1`
--

INSERT INTO `custmr1` (`id`, `name`, `phone`, `email`, `address`) VALUES
(1, 'godson', 8136958555, 'godson@gmail.com', 'thirumala'),
(2, 'darshan', 9446078556, 'darshan@gmail.com', ''),
(3, 'a', 2134, 'hggvgy', ''),
(4, 'Dani', 8123456780, 'dani@gmail.com', 'bangalore'),
(5, 'ad', 123, 'nbvgf', ''),
(6, 'ad', 123, 'nbvgf', ''),
(7, 'ad', 123, 'nbvgf', ''),
(8, 'ad', 123, 'nbvgf', ''),
(9, 'ad', 123, 'nbvgf', ''),
(10, 'ad', 123, 'nbvgf', ''),
(11, 'ad', 123, 'nbvgf', ''),
(12, 'amareesh', 9446078556, 'amareesh@gmail.com', 'kannur'),
(13, 'godu', 1234, 'godu@gmail.com', 'mangalore'),
(14, 'tiju', 1234, 'tiju@gmail.com', 'kozhikode'),
(15, 'hgf', 5, 'ygdty', 'hghvgh'),
(16, 'fgtg', 656, 'vhgf', 'kjhyug'),
(17, 'mmm', 122, 'mmm@gmail.com', 'mmm'),
(18, 'hjgh', 123, 'abcd@gmail.com', 'mn'),
(19, 'ighj', 12, 'bhv@gmail.com', 'aaa'),
(20, 'fsef', 1234, 'fgt@gmai.com', 'hjgyhj'),
(21, 'godson', 1234567890, 'gods@gmail.com', 'thirumala'),
(22, 'rito', 8167270301, 'rito@smotpro.com', 'aehsdegavhgvh');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `eid` int(11) NOT NULL,
  `cusid` int(11) DEFAULT NULL,
  `name_id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`eid`, `cusid`, `name_id`, `email`) VALUES
(1, 1, NULL, 'godson@gmail.com'),
(2, 100, NULL, 'efgh@gmail.com'),
(3, 101, NULL, 'godson@gmail.com'),
(4, 102, NULL, 'xyz@gmail.com'),
(8, NULL, 1, NULL),
(9, NULL, 2, NULL),
(10, NULL, 3, NULL),
(11, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `cus_id`, `name`) VALUES
(1, 1, 'abcd'),
(2, 100, 'efgh'),
(3, 101, 'abcd'),
(4, 102, 'xyz');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v`
-- (See below for the actual view)
--
CREATE TABLE `v` (
`id` int(11)
,`name` varchar(100)
,`email` varchar(20)
,`cus_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw`
-- (See below for the actual view)
--
CREATE TABLE `vw` (
`name` varchar(100)
,`email` varchar(20)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v`
--
DROP TABLE IF EXISTS `v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`supermarket`@`localhost` SQL SECURITY DEFINER VIEW `v`  AS  (select `a`.`id` AS `id`,`a`.`name` AS `name`,`a`.`email` AS `email`,`b`.`cus_id` AS `cus_id` from (`custmr` `a` left join `name` `b` on((`a`.`id` = `b`.`cus_id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw`
--
DROP TABLE IF EXISTS `vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`supermarket`@`localhost` SQL SECURITY DEFINER VIEW `vw`  AS  (select `a`.`name` AS `name`,`a`.`email` AS `email`,`b`.`id` AS `id` from (`custmr` `a` left join `name` `b` on((`a`.`id` = `b`.`id`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custmr`
--
ALTER TABLE `custmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custmr1`
--
ALTER TABLE `custmr1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `cusid` (`cusid`),
  ADD KEY `name_id` (`name_id`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custmr`
--
ALTER TABLE `custmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `custmr1`
--
ALTER TABLE `custmr1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`cusid`) REFERENCES `custmr` (`id`),
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`name_id`) REFERENCES `name` (`id`);

--
-- Constraints for table `name`
--
ALTER TABLE `name`
  ADD CONSTRAINT `name_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `custmr` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

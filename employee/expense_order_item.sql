-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 10:47 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sphermanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense_order_item`
--

CREATE TABLE IF NOT EXISTS `expense_order_item` (
  `itemID` int(11) NOT NULL,
  `expenseID` varchar(11) NOT NULL,
  `itemname` varchar(250) NOT NULL,
  `itemdescription` text NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_order_item`
--

INSERT INTO `expense_order_item` (`itemID`, `expenseID`, `itemname`, `itemdescription`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`) VALUES
(0, 'INVd78qz3m6', 'Airtime', 'Airtime for calls (local & international)', '5000.00', '3.00', '15000.00'),
(0, 'INVd78qz3m6', 'Data', 'Data for access to internet', '10000.00', '1.00', '10000.00'),
(0, 'INVd78qz3m6', 'Airtime', 'Airtime for calls (local & international)', '5000.00', '3.00', '15000.00'),
(0, 'INVd78qz3m6', 'Data', 'Data for access to internet', '10000.00', '1.00', '10000.00'),
(0, 'INVd78qz3m6', 'Airtime Purchase', 'Airtime for calls and messages', '10000.00', '1.00', '10000.00'),
(0, 'INVd78qz3m6', 'Data Purchase', 'Data to access the internet', '20000.00', '1.00', '20000.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

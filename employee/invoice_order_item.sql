-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 04:47 PM
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
-- Table structure for table `invoice_order_item`
--

CREATE TABLE IF NOT EXISTS `expense_order_item` (
  `order_item_id` int(11) NOT NULL,
  `invoicenumber` varchar(11) NOT NULL,
  `itemname` varchar(250) NOT NULL,
  `item_desc` text NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order_item`
--

INSERT INTO `invoice_order_item` (`order_item_id`, `invoicenumber`, `itemname`, `item_desc`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`) VALUES
(0, 'INVxp91f0sa', 'Alldocumentshub.com', 'Cost for Development', '150000.00', '1.00', '150000.00'),
(0, 'INVxp91f0sa', 'WhatsApp API', 'payment for whatsapp Api', '20000.00', '1.00', '20000.00'),
(0, 'INVb7lpiv5c', 'Web Development', 'Hub10 website', '50000.00', '1.00', '50000.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

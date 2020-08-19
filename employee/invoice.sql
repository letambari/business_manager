-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 04:45 PM
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
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`invoice_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `acct_name` text NOT NULL,
  `invoice_date` datetime NOT NULL,
  `due_date` date NOT NULL,
  `invoicenumber` varchar(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `discount` int(225) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text NOT NULL,
  `taxtype` varchar(225) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `taxRate` varchar(225) NOT NULL,
  `order_tax_per` varchar(225) NOT NULL,
  `bank_name` varchar(225) NOT NULL,
  `acct_number` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `bank_country` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `company_id` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `client_id`, `project_id`, `address`, `acct_name`, `invoice_date`, `due_date`, `invoicenumber`, `user_id`, `order_total_before_tax`, `discount`, `grand_total`, `order_amount_paid`, `order_total_amount_due`, `note`, `taxtype`, `tax`, `taxRate`, `order_tax_per`, `bank_name`, `acct_number`, `phone`, `bank_country`, `status`, `company_id`) VALUES
(2, 1, 1, 'silver estate alakahia', 'Innocent Destiny ', '2021-04-04 00:00:00', '2022-03-04', 'INVxp91f0sa', 1, '0.00', 0, '170000.00', '120000.00', '50000.00', 'NOTE: a payment of #120,000 was made in the following way, First-Installment : #50,000, Second-Installment: #50,000 and finally Whatsapp API: #20,000', 'No Tax', '0.00', '', '', 'Gt-Bank', '0917384567', '08104454017', '', 'Partially Paid', 'Sphere'),
(3, 2, 2, 'silver estate alakahia', 'Innocent Destiny ', '2022-05-04 00:00:00', '2020-04-04', 'INVb7lpiv5c', 1, '0.00', 0, '50000.00', '3000.00', '47000.00', 'This is the invoice for the hubten payment.', 'VAT', '0.00', '', '', 'GT-bank', '0917384567', '08104454017', '', 'Partially Paid', 'Sphere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`invoice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

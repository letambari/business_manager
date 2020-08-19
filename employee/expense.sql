-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 10:44 AM
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
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
`expense_id` int(11) NOT NULL,
  `reciever_name` varchar(225) NOT NULL,
  `reciever_address` text NOT NULL,
  `reciever_acct_name` text NOT NULL,
  `purchase_by` varchar(225) NOT NULL,
  `send_date` date NOT NULL,
  `due_date` date NOT NULL,
  `expensenumber` varchar(225) NOT NULL,
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
  `reciever_bank_name` varchar(225) NOT NULL,
  `acct_number` varchar(225) NOT NULL,
  `reciever_phone` varchar(225) NOT NULL,
  `reciever_email` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `company_id` varchar(11) NOT NULL,
  `paymentmethod` varchar(225) NOT NULL,
  `paymentdate` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `reciever_name`, `reciever_address`, `reciever_acct_name`, `purchase_by`, `send_date`, `due_date`, `expensenumber`, `user_id`, `order_total_before_tax`, `discount`, `grand_total`, `order_amount_paid`, `order_total_amount_due`, `note`, `taxtype`, `tax`, `taxRate`, `order_tax_per`, `reciever_bank_name`, `acct_number`, `reciever_phone`, `reciever_email`, `status`, `company_id`, `paymentmethod`, `paymentdate`) VALUES
(1, 'MTN Nig', '14 Akwa Stree, Off Aba Road, DLine Port Harcourt.', 'MTN Nig ', 'Innocent Destiny', '2021-02-04', '2022-04-03', 'INVd78qz3m7', 1, '10000.00', 0, '10000.00', '0.00', '10000.00', '', '', '0.00', '', '', '', '', '', '', 'Pending', 'sphere', 'Bank Transfer', '2020-05-11'),
(12, 'Glo Nig', '14 Akwa Stree, Off Aba Road, DLine Port Harcourt.', 'Globacom nig ltd ', 'Mike Chris', '2021-02-04', '2022-04-03', 'INVd78qz3m6', 1, '30000.00', 0, '30000.00', '0.00', '30000.00', 'Note this information is not valid, as it was used for testing purpose.', 'No Tax', '0.00', '', '', 'FirstBank plc', '4743230302', '0903846574', 'mtn@gmail.com', 'Paid', 'Sphere', 'cheque', '2020-05-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
 ADD PRIMARY KEY (`expense_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

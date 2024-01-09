-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 01:21 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `contact`, `membership_number`, `prod_name`, `expected_date`, `note`) VALUES
(15, 'charles', '48 udobio', '07035700945', '', 'Gass', '', ''),
(16, 'Miracle John', '48 Ewet housing estate uyo akwa ibom', '07035700945', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `pname`, `ptype`) VALUES
(1, 'Letter', 'Paper'),
(60, 'Box', 'Iron '),
(61, 'Laptop', 'plastic ');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_item`
--

CREATE TABLE IF NOT EXISTS `purchases_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `destination` varchar(200) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=156 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `ptype`, `pname`, `total`, `cname`, `destination`) VALUES
(151, 'PTS-6230003', 'Admin', '07/29/16', '', '', '2400', 'charles', 'Abia'),
(152, 'PTS-47302600', 'Admin', '07/29/16', '', '', '2000', 'charles', 'ADAMAWA'),
(153, 'PTS-020082', 'Admin', '07/29/16', '', '', '4700', 'charles', 'BAYELSA'),
(154, 'RS-3320020', 'Admin', '07/29/16', '', '', '900', 'Miracle John', 'OYO'),
(155, 'PTS-3463253', 'Admin', '07/31/16', '', '', '4800', 'Miracle John', 'BAUCHI');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  `product` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `depart` varchar(200) NOT NULL,
  `arrive` varchar(200) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=355 ;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `price`, `pname`, `ptype`, `destination`, `date`, `product`, `qty`, `total`, `cname`, `status`, `location`, `depart`, `arrive`) VALUES
(345, 'PTS-47302600', '500', 'Box', 'Iron ', 'ADAMAWA', '07/29/16', '60', 4, '2000', 'Charles', 'ARRIVED', 'TARGET', '2016-07-29 18:20:02', '2016-08-15 13:59:46'),
(346, 'PTS-020082', '4700', 'Box', 'Iron ', 'BAYELSA', '07/29/16', '60', 1, '4700', 'Charles', 'ARRIVED', 'TARGET', '2016-07-29 19:10:42', '2016-07-29 19:11:36'),
(348, 'RS-3320020', '300', 'Laptop', 'plastic ', 'OYO', '07/29/16', '61', 3, '900', 'Charles', 'ARRIVED', 'TARGET', '2016-07-29 19:10:42', '2016-07-29 19:11:36'),
(350, 'PTS-3463253', '400', 'Letter', 'Paper', 'BAUCHI', '07/31/16', '1', 12, '4800', 'Miracle John', 'ARRIVED', 'TARGET', '2016-07-31 13:00:16', '2016-07-31 13:44:44'),
(351, 'PTS-42333635', '490', 'Box', 'Iron ', 'ABIA', '08/01/16', '60', 1, '490', 'charles', 'ARRIVED', 'TARGET', '2016-08-01 12:46:14', '2016-08-01 14:35:13'),
(352, 'PTS-42333635', '400', 'Laptop', 'plastic ', 'ANAMBRA', '08/01/16', '61', 12, '4800', 'Miracle John', 'ARRIVED', 'TARGET', '2016-08-01 12:46:14', '2016-08-01 14:35:13'),
(353, 'PTS-42333635', '500', 'Laptop', 'plastic ', 'BAYELSA', '08/01/16', '61', 1, '500', 'Miracle John', 'ARRIVED', 'TARGET', '2016-08-01 12:46:14', '2016-08-01 14:35:13'),
(354, 'PTS-720330', '200', 'Box', 'Iron ', 'AKWA IBOM', '08/01/16', '60', 1, '200', 'charles', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE IF NOT EXISTS `supliers` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `note`) VALUES
(1, 'Miracle Benjamin', '48 udobio street', '07035700945', '07035700945', 'Company Driver');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin'),
(2, 'driver', 'driver', 'Company Driver', 'Driver'),
(3, 'admin', 'admin123', 'Administrator', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

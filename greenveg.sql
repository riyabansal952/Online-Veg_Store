-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2015 at 11:13 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greenveg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `profile_pic`, `email`, `contact_no`, `password`, `date`) VALUES
(1, 'admin', 'PicsArt_1427024815381.jpg', 'd.c11166@gmail.com', 9649656777, 'admin', '2015-04-22 16:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(6, 'Fruits'),
(8, 'vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) DEFAULT NULL,
  `c_phone` bigint(15) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_msg` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`c_id`, `c_name`, `c_phone`, `c_email`, `c_msg`, `date`) VALUES
(1, 'deepak chhaparwal', 9649656777, 'd.c11166@Gmail.com', 'Site Is Awesome.....Good Job.!!', '2015-05-02 15:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `mail_list`
--

CREATE TABLE IF NOT EXISTS `mail_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `code` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mail_list`
--

INSERT INTO `mail_list` (`id`, `email_id`, `status`, `code`) VALUES
(2, 'd.c11166@gmail.com', '0', 'a2ef406e2c2351e0b9e80029c909242d');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `man_id` int(10) NOT NULL AUTO_INCREMENT,
  `man_name` varchar(20) NOT NULL,
  PRIMARY KEY (`man_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`man_id`, `man_name`) VALUES
(1, 'Ajay Kumawat'),
(2, 'Hardik Shivhare'),
(3, 'Bhuvan bhatt'),
(4, 'Jasan Singh'),
(5, 'Prabal Lakhotiya'),
(6, 'Ashish Jajoo'),
(9, 'Rohit Patni');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `Orderid` int(11) NOT NULL AUTO_INCREMENT,
  `PaymentMode` varchar(50) NOT NULL,
  `Bank` varchar(50) NOT NULL,
  `Cardtype` varchar(50) NOT NULL,
  `Cardnumber` varchar(50) NOT NULL,
  `Products` varchar(50) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `Paymentdate` varchar(30) NOT NULL,
  `Deliverydate` varchar(30) NOT NULL,
  `c_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`Orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orderdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) NOT NULL,
  `order_name` varchar(20) NOT NULL,
  `order_price` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `u_id`, `order_name`, `order_price`) VALUES
(21, 1, 'Breaking Bad: Heisen', '499'),
(22, 1, 'Lights', '199'),
(23, 1, 'ThePlaybook', '149'),
(24, 1, 'Breaking Bad: Heisen', '499'),
(25, 1, 'Arsenal: Arsene Weng', '499'),
(26, 1, 'Arsenal: Arsene Weng', '499');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pr_id` int(10) NOT NULL AUTO_INCREMENT,
  `pr_name` varchar(20) NOT NULL,
  `pr_price` int(20) NOT NULL,
  `pr_sprice` int(10) NOT NULL,
  `pr_image` varchar(60) NOT NULL,
  `m_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pr_id`, `pr_name`, `pr_price`, `pr_sprice`, `pr_image`, `m_id`, `t_id`, `c_id`) VALUES
(1, 'Tomato', 40, 30, '1430630258995_1_gal.jpg', 1, 0, 8),
(2, 'Potato', 30, 20, '1430630843992_1_gal.jpg', 4, 1, 8),
(31, 'Pears', 30, 25, '14306349161026_1_med-150x150.jpg', 7, 0, 8),
(32, 'chili', 15, 10, '1430657424chili.jpg', 4, 0, 8),
(33, 'Broccoli', 20, 15, '1430657493broccoli.jpg', 5, 0, 8),
(34, 'Apple', 150, 120, '14307572631_fuji_washington-apple.jpg', 9, 0, 6),
(35, 'WaterMelon', 60, 40, '14307677551_Watermelon.jpg', 2, 0, 6),
(36, 'Banana', 30, 20, '14309975491_1_1_bananas-Hd-wallpaper12.jpg', 9, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE IF NOT EXISTS `registeration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `contact` int(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `name`, `email`, `password`, `contact`, `address`, `city`, `status`, `code`, `date`) VALUES
(1, 'deepak', 'd.c11166@gmail.com', 'admin', 256234, 'sanganer', 'Bhilwara', '0', NULL, '2015-04-28 23:28:30'),
(4, 'roshan', 'roshan@gmail.com', 'roshan445', 96554478, '', NULL, NULL, NULL, '2015-04-30 12:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `seller_id`
--

CREATE TABLE IF NOT EXISTS `seller_id` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `seller_id`
--


-- --------------------------------------------------------

--
-- Table structure for table `shippingdetails`
--

CREATE TABLE IF NOT EXISTS `shippingdetails` (
  `shipid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `smobile` bigint(20) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `scity` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shipid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shippingdetails`
--

INSERT INTO `shippingdetails` (`shipid`, `sname`, `semail`, `smobile`, `saddress`, `scity`, `date`) VALUES
(1, 'deepak', 'd.c11166@gmail.com', 256234, 'sanganer', 'Bhilwara', '2015-05-07 22:35:19'),
(2, 'Surbhi', 'surbhi@gmail.com', 9211212547, 'Bhilwara', 'Bhilwara', '2015-05-08 10:51:12'),
(3, 'deepak', 'd.c11166@gmail.com', 256234, 'sanganer', 'Bhilwara', '2015-05-08 11:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(50) DEFAULT NULL,
  `slider_img` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_img`, `status`, `date`) VALUES
(23, 'banner', 'bann2.jpg', '1', '2015-05-01 23:34:38'),
(24, 'banner', 'bann1.jpg', '1', '2015-05-02 13:44:45'),
(25, 'banner', 'bann3.jpg', '1', '2015-05-02 13:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `txn_id` text,
  `txn_detail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `u_id`, `txn_id`, `txn_detail`) VALUES
(1, 1, '07S80360ES043373G', '{"mc_gross":"294.00","protection_eligibility":"Eligible","address_status":"confirmed","item_number1":"","item_number2":"","payer_id":"DQ39QASA4C2DQ","tax":"0.00","item_number3":"","address_street":"1 Main St","payment_date":"02:17:20 May 30, 2014 PDT","payment_status":"Completed","charset":"windows-1252","address_zip":"95131","mc_shipping":"0.00","mc_handling":"0.00","first_name":"test","mc_fee":"8.83","address_country_code":"US","address_name":"test Kala","notify_version":"3.8","custom":"","payer_status":"verified","business":"acc@ostpl.com","address_country":"United States","num_cart_items":"3","mc_handling1":"0.00","mc_handling2":"0.00","mc_handling3":"0.00","address_city":"San Jose","payer_email":"test@ostpl.com","verify_sign":"AFcWxV21C7fd0v3bYYYRCpSSRl31AQ-eUoGCxjtgTedLshWCiCbUGfgA","mc_shipping1":"0.00","mc_shipping2":"0.00","tax1":"0.00","mc_shipping3":"0.00","tax2":"0.00","tax3":"0.00","txn_id":"07S80360ES043373G","payment_type":"instant","last_name":"Kala","address_state":"CA","item_name1":"DexterBadge","receiver_email":"acc@ostpl.com","item_name2":"CricketBadge","payment_fee":"8.83","item_name3":"Womaniya","quantity1":"1","quantity2":"4","receiver_id":"AWN85NSZKXXUL","quantity3":"1","txn_type":"cart","mc_gross_1":"49.00","mc_currency":"USD","mc_gross_2":"196.00","mc_gross_3":"49.00","residence_country":"US","test_ipn":"1","transaction_subject":"","payment_gross":"294.00","auth":"AGWWppK19hrJMic.1Vv7o18C2oVQcA4wr9u-kOWnd2UD3rfdEgT4qRmLOqAveoyzhsFAtkBBTsad4SvZSeCZTPQ"}'),
(2, 1, '07S80360ES043373G', '{"mc_gross":"294.00","protection_eligibility":"Eligible","address_status":"confirmed","item_number1":"","item_number2":"","payer_id":"DQ39QASA4C2DQ","tax":"0.00","item_number3":"","address_street":"1 Main St","payment_date":"02:17:20 May 30, 2014 PDT","payment_status":"Completed","charset":"windows-1252","address_zip":"95131","mc_shipping":"0.00","mc_handling":"0.00","first_name":"test","mc_fee":"8.83","address_country_code":"US","address_name":"test Kala","notify_version":"3.8","custom":"","payer_status":"verified","business":"acc@ostpl.com","address_country":"United States","num_cart_items":"3","mc_handling1":"0.00","mc_handling2":"0.00","mc_handling3":"0.00","address_city":"San Jose","payer_email":"test@ostpl.com","verify_sign":"AFcWxV21C7fd0v3bYYYRCpSSRl31AQ-eUoGCxjtgTedLshWCiCbUGfgA","mc_shipping1":"0.00","mc_shipping2":"0.00","tax1":"0.00","mc_shipping3":"0.00","tax2":"0.00","tax3":"0.00","txn_id":"07S80360ES043373G","payment_type":"instant","last_name":"Kala","address_state":"CA","item_name1":"DexterBadge","receiver_email":"acc@ostpl.com","item_name2":"CricketBadge","payment_fee":"8.83","item_name3":"Womaniya","quantity1":"1","quantity2":"4","receiver_id":"AWN85NSZKXXUL","quantity3":"1","txn_type":"cart","mc_gross_1":"49.00","mc_currency":"USD","mc_gross_2":"196.00","mc_gross_3":"49.00","residence_country":"US","test_ipn":"1","transaction_subject":"","payment_gross":"294.00","auth":"AGWWppK19hrJMic.1Vv7o18C2oVQcA4wr9u-kOWnd2UD3rfdEgT4qRmLOqAveoyzhsFAtkBBTsad4SvZSeCZTPQ"}'),
(3, 1, '07S80360ES043373G', '{"mc_gross":"294.00","protection_eligibility":"Eligible","address_status":"confirmed","item_number1":"","item_number2":"","payer_id":"DQ39QASA4C2DQ","tax":"0.00","item_number3":"","address_street":"1 Main St","payment_date":"02:17:20 May 30, 2014 PDT","payment_status":"Completed","charset":"windows-1252","address_zip":"95131","mc_shipping":"0.00","mc_handling":"0.00","first_name":"test","mc_fee":"8.83","address_country_code":"US","address_name":"test Kala","notify_version":"3.8","custom":"","payer_status":"verified","business":"acc@ostpl.com","address_country":"United States","num_cart_items":"3","mc_handling1":"0.00","mc_handling2":"0.00","mc_handling3":"0.00","address_city":"San Jose","payer_email":"test@ostpl.com","verify_sign":"AFcWxV21C7fd0v3bYYYRCpSSRl31AQ-eUoGCxjtgTedLshWCiCbUGfgA","mc_shipping1":"0.00","mc_shipping2":"0.00","tax1":"0.00","mc_shipping3":"0.00","tax2":"0.00","tax3":"0.00","txn_id":"07S80360ES043373G","payment_type":"instant","last_name":"Kala","address_state":"CA","item_name1":"DexterBadge","receiver_email":"acc@ostpl.com","item_name2":"CricketBadge","payment_fee":"8.83","item_name3":"Womaniya","quantity1":"1","quantity2":"4","receiver_id":"AWN85NSZKXXUL","quantity3":"1","txn_type":"cart","mc_gross_1":"49.00","mc_currency":"USD","mc_gross_2":"196.00","mc_gross_3":"49.00","residence_country":"US","test_ipn":"1","transaction_subject":"","payment_gross":"294.00","auth":"AGWWppK19hrJMic.1Vv7o18C2oVQcA4wr9u-kOWnd2UD3rfdEgT4qRmLOqAveoyzhsFAtkBBTsad4SvZSeCZTPQ"}');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(10) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(15) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Highcost'),
(2, 'Lowcost'),
(3, 'Round Shape Tee'),
(4, 'Serial-fever'),
(5, 'Simple');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ph` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `repa` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `location` varchar(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `lname`, `address`, `email`, `ph`, `password`, `repa`, `gender`, `birthday`, `location`, `profile_pic`) VALUES
(1, 'Jasan', 'singh', 'sanganer', 'jasanthind@gmail.com', 9024617699, 'jasan', 'jasan', 'male', 'April.17.1990', 'America', '1341285726133909432500.BMP'),
(2, 'Bhuvan', 'bhatt', 'sanganer', 'bhuvanbhtt@gmail.com', 9887801381, 'bhuvan', 'bhuvan', 'male', 'March.9.2010', 'India', '133937692500 (7).JPG'),
(3, 'Saket', 'Khatri', 'sirohi', 'saketkhatri111@gmail', 8385881878, '101644', 'saket', 'male', 'October.20.1990', 'India', '133937801167.gif'),
(4, 'Shurbhi', 'singh', 'brahampuri', 'shurbhi@gmail.com', 9087654321, 'shurbhi', 'shurbhi', 'female', 'October.20.2010', 'India', '133937688400 (1).jpg'),
(5, 'Shreya', 'kumari', 'udaipur', 'shreya@gmail.com', 9809876543, 'shreya', 'shreya', 'female', 'October.20.2010', 'India', '13393769561.jpg'),
(6, 'admin', 'admin', 'Durgapura,jaipur', 'admin@gmail.com', 8907654321, 'admin', 'admin', 'female', 'October.20.1990', 'India', 'twitter_guitar_102062.jpg'),
(7, 'Jattin', 'jasuja', 'sgnr', 'jattin@yahoo.co', 9636360001, 'jattin', 'jattin', 'male', 'June.15.2010', 'India', '1339375458Photo1021.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

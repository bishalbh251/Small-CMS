-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2014 at 03:14 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sy_cms`
--
CREATE DATABASE IF NOT EXISTS `sy_cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sy_cms`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_cate` varchar(100) NOT NULL,
  `client_email` text NOT NULL,
  `client_address` text NOT NULL,
  `client_phone` int(11) NOT NULL,
  `client_adddate` date NOT NULL,
  `cp1_name` varchar(100) NOT NULL,
  `cp1_contact1` int(11) NOT NULL,
  `cp1_contact2` int(11) NOT NULL,
  `cp1_email1` text NOT NULL,
  `cp1_email2` text NOT NULL,
  `cp2_name` varchar(100) NOT NULL,
  `cp2_contact1` int(11) NOT NULL,
  `cp2_contact2` int(11) NOT NULL,
  `cp2_email1` text NOT NULL,
  `cp2_email2` text NOT NULL,
  `cp3_name` varchar(100) NOT NULL,
  `cp3_contact1` int(11) NOT NULL,
  `cp3_contact2` int(11) NOT NULL,
  `cp3_email1` text NOT NULL,
  `cp3_email2` text NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `client_category`
--

DROP TABLE IF EXISTS `client_category`;
CREATE TABLE IF NOT EXISTS `client_category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_cate` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `pakage_details` longtext NOT NULL,
  `renewed_till` date NOT NULL,
  PRIMARY KEY (`purchase_id`),
  KEY `client_id` (`client_id`),
  KEY `services_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `renew_details`
--

DROP TABLE IF EXISTS `renew_details`;
CREATE TABLE IF NOT EXISTS `renew_details` (
  `renew_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `renew_on` date NOT NULL,
  `expire_on` date NOT NULL,
  `renew_by` varchar(100) NOT NULL,
  `paid_due` binary(1) NOT NULL,
  `paid_on` date NOT NULL,
  PRIMARY KEY (`renew_id`),
  UNIQUE KEY `renew_id` (`renew_id`),
  KEY `client_id` (`client_id`),
  KEY `service_id` (`service_id`),
  KEY `renew_by` (`renew_by`),
  KEY `client_id_2` (`client_id`),
  KEY `service_id_2` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_cate` varchar(100) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_price` int(11) NOT NULL,
  `type` text NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_cate` varchar(100) NOT NULL,
  `rand` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `user_cate`, `rand`) VALUES
(1, 'shiva', 'shivathapa41@gmail.com', '640ab2bae07bedc4c163f679a746f7ab7fb5d1fa', 'admin', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`),
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `renew_details`
--
ALTER TABLE `renew_details`
  ADD CONSTRAINT `renew_details_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`),
  ADD CONSTRAINT `renew_details_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

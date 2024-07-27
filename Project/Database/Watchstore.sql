-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2021 at 07:49 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `watchstoreproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE IF NOT EXISTS `addproducts` (
  `pname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `selectcomp` varchar(100) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `selectcategory` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`pname`, `description`, `selectcomp`, `modelno`, `price`, `filename`, `selectcategory`) VALUES
('Swizer A100', 'this best watch forever', 'Sonata', 'A100', '1500', 'imagesNKBIKTOG.jpg', 'Mens'),
('Sonata B2', 'Very Nice it worth', 'Sonata', 'B2', '3500', 'images0THYPVSS.jpg', 'Mens'),
('Ajanta S1000', 'Best Wall Clock For Home', 'Ajanta', 'S1000', '250', 'wallclock6.jfif', 'WallClock'),
('Swizer A21', 'deascdasad', 'Sonata', 'A21', '1000', 'images3QD7NNZ1.jpg', 'Mens'),
('Sonata ABC', 'hi  ', 'Sonata', 'ABC', '1000', 'images0SAHI9XI.jpg', 'Womens'),
('Swizer 13', 'ferfdsds', 'Sonata', '13', '2200', 'imagesJS3VF2LO.jpg', 'Mens'),
('Sonata A200', 'dedwesadwas', 'Sonata', 'A200', '5000', 'images0EXLLZOX.jpg', 'Mens'),
('Sonata Q12222', 'skwidwdas', 'Sonata', 'Q12222', '999', 'imagesZKNQWYMI.jpg', 'Mens'),
('Swizer F220', 'hiiiiiiiii', 'Swizer', 'F220', '2500', 'images3G9XFKTH.jpg', 'Womens'),
('dmcdesc', 'dcsdsd', 'Titan', 'KSDS', '51255', 'images3R77QHUA.jpg', 'Mens'),
('Sonata XYZ', 'Best  For Girls ', 'Sonata', 'XYZ', '1000', '3456.png', 'Womens'),
('Sonata 11100', 'Best Watch', 'Sonata', '11100', '500', 'images02KCQKFD.jpg', 'Womens'),
('Ajanta 50', 'BEst Wall Clock', 'Ajanta', '50', '1000', 'wallclock1.jfif', 'WallClock'),
('Soname F2000', 'Hiii', 'Sonam', 'F2000', '1000', 'wallclock5.jfif', 'WallClock'),
('Soname S120', 'Welcome To Watch Store', 'Sonam', 'S120', '500', 'wallclock3.jfif', 'WallClock'),
('Fastrack AS20', 'Best Watch', 'Smartwatch', 'AS20', '2000', 'smartwatch2.jfif', 'Smartwatch'),
('Sonata AB20', 'Hellow', 'Sonata', 'AB20', '4999', 'smartwatch4.jfif', 'Smartwatch'),
('Swizer Smart20', 'Smart20 Is The Best Watch For Mens', 'Swizer', 'Smart20', '3000', 'smartwatch3.jfif', 'Mens');

-- --------------------------------------------------------

--
-- Table structure for table `orders_list`
--

CREATE TABLE IF NOT EXISTS `orders_list` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `product` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `usermobile` varchar(50) NOT NULL,
  `useraddress` varchar(100) NOT NULL,
  `userpincode` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `orders_list`
--

INSERT INTO `orders_list` (`id`, `product`, `quantity`, `uname`, `usermobile`, `useraddress`, `userpincode`) VALUES
(1, 'Swizer A10', '1', 'Abhi Joshi', '8401121373', 'Davefali', '363330'),
(7, 'Sonata B2', '1', 'Abhi Joshi', '8401121373', 'Davefali', '363330'),
(8, 'Sonata B2', '1', 'Abhi Joshi', '8401121373', 'Davefali', '363330'),
(11, 'Sonata AB2', '1', 'Abhi Joshi', '8401121373', 'Davefali', '363330'),
(10, 'Sonata ABC', '100', 'Abhi Joshi', '8401121373', 'Davefali', '363330');

-- --------------------------------------------------------

--
-- Table structure for table `users_register`
--

CREATE TABLE IF NOT EXISTS `users_register` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_register`
--

INSERT INTO `users_register` (`name`, `password`, `cpassword`, `mobileno`, `emailid`, `address`, `pincode`) VALUES
('Abhi Joshi', '12891289', '12891289', '840112373', 'abhiaf5474@gmail.com', 'Hellow ', '363330'),
('Abhi Joshi', '12891289', '12891289', '8401121373', 'abhijoar@gmail.com', 'Davefali', '363330'),
('dmcmsdm', '51205120', '105120', '18452', 'abc@gmail.com', 'ksdsnm', '512'),
('ss', '11', '11', '152', 'mju@gmailcom', 'dsdssd', '6653');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

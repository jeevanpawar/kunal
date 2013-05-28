-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2013 at 01:12 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `counter` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`counter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=483 ;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(482);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE IF NOT EXISTS `gallery_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  `caption` varchar(24) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`category_id`, `category_name`, `caption`) VALUES
(4, 'Fashion', 'Fashion'),
(9, 'Industrial', 'Industrial Images'),
(10, 'Fine Arts', 'Fine Arts Images'),
(11, 'Function', 'Function Images '),
(12, 'Interior', 'interior images'),
(13, 'Rudra Farm', 'rudra farm'),
(14, 'Table Top', 'table top');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photos`
--

CREATE TABLE IF NOT EXISTS `gallery_photos` (
  `photo_id` int(20) NOT NULL AUTO_INCREMENT,
  `photo_filename` varchar(25) NOT NULL,
  `photo_caption` text NOT NULL,
  `photo_category` bigint(20) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=187 ;

--
-- Dumping data for table `gallery_photos`
--

INSERT INTO `gallery_photos` (`photo_id`, `photo_filename`, `photo_caption`, `photo_category`) VALUES
(76, '76.jpg', '', 4),
(75, '75.jpg', '', 4),
(74, '74.jpg', '', 4),
(73, '73.jpg', '', 4),
(72, '72.jpg', '', 4),
(71, '71.jpg', '', 4),
(68, '68.jpg', '', 4),
(70, '70.jpg', '', 4),
(69, '69.jpg', '', 4),
(67, '67.jpg', '', 4),
(66, '66.jpg', '', 4),
(77, '77.jpg', '', 4),
(78, '78.jpg', '', 4),
(79, '79.jpg', '', 4),
(80, '80.jpg', '', 4),
(81, '81.jpg', '', 4),
(82, '82.jpg', '', 4),
(83, '83.jpg', '', 9),
(84, '84.jpg', '', 9),
(85, '85.jpg', '', 9),
(86, '86.jpg', '', 9),
(87, '87.jpg', '', 9),
(88, '88.jpg', '', 9),
(89, '89.jpg', '', 9),
(90, '90.jpg', '', 9),
(91, '91.jpg', '', 9),
(92, '92.jpg', '', 9),
(93, '93.jpg', '', 9),
(94, '94.jpg', '', 9),
(95, '95.jpg', '', 9),
(96, '96.jpg', '', 9),
(97, '97.jpg', '', 9),
(98, '98.jpg', '', 9),
(99, '99.jpg', '', 9),
(100, '100.jpg', '', 10),
(101, '101.jpg', '', 10),
(102, '102.jpg', '', 10),
(103, '103.jpg', '', 10),
(104, '104.jpg', '', 10),
(105, '105.jpg', '', 10),
(106, '106.jpg', '', 10),
(107, '107.jpg', '', 10),
(108, '108.jpg', '', 10),
(109, '109.jpg', '', 10),
(110, '110.jpg', '', 10),
(111, '111.jpg', '', 10),
(112, '112.jpg', '', 10),
(113, '113.jpg', '', 10),
(114, '114.jpg', '', 10),
(115, '115.jpg', '', 10),
(116, '116.jpg', '', 10),
(117, '117.jpg', '', 11),
(118, '118.jpg', '', 11),
(119, '119.jpg', '', 11),
(120, '120.jpg', '', 11),
(121, '121.jpg', '', 11),
(122, '122.jpg', '', 11),
(123, '123.jpg', '', 11),
(124, '124.jpg', '', 11),
(125, '125.jpg', '', 11),
(126, '126.jpg', '', 11),
(127, '127.jpg', '', 11),
(128, '128.jpg', '', 11),
(129, '129.jpg', '', 11),
(130, '130.jpg', '', 11),
(131, '131.jpg', '', 11),
(132, '132.jpg', '', 11),
(133, '133.jpg', '', 11),
(134, '134.jpg', '', 11),
(135, '135.jpg', '', 11),
(136, '136.jpg', '', 12),
(137, '137.jpg', '', 12),
(138, '138.jpg', '', 12),
(139, '139.jpg', '', 12),
(140, '140.jpg', '', 12),
(141, '141.jpg', '', 12),
(142, '142.jpg', '', 12),
(143, '143.jpg', '', 12),
(144, '144.jpg', '', 12),
(145, '145.jpg', '', 12),
(146, '146.jpg', '', 12),
(147, '147.jpg', '', 12),
(148, '148.jpg', '', 12),
(149, '149.jpg', '', 12),
(150, '150.jpg', '', 12),
(151, '151.jpg', '', 12),
(152, '152.jpg', '', 12),
(153, '153.jpg', '', 13),
(154, '154.jpg', '', 13),
(155, '155.jpg', '', 13),
(156, '156.jpg', '', 13),
(157, '157.jpg', '', 13),
(158, '158.jpg', '', 13),
(159, '159.jpg', '', 13),
(160, '160.jpg', '', 13),
(161, '161.jpg', '', 13),
(162, '162.jpg', '', 13),
(163, '163.jpg', '', 13),
(164, '164.jpg', '', 13),
(165, '165.jpg', '', 13),
(166, '166.jpg', '', 13),
(167, '167.jpg', '', 13),
(168, '168.jpg', '', 13),
(169, '169.jpg', '', 13),
(170, '170.jpg', '', 14),
(171, '171.jpg', '', 14),
(172, '172.jpg', '', 14),
(173, '173.jpg', '', 14),
(174, '174.jpg', '', 14),
(175, '175.jpg', '', 14),
(176, '176.jpg', '', 14),
(177, '177.jpg', '', 14),
(178, '178.jpg', '', 14),
(179, '179.jpg', '', 14),
(180, '180.jpg', '', 14),
(181, '181.jpg', '', 14),
(182, '182.jpg', '', 14),
(183, '183.jpg', '', 14),
(184, '184.jpg', '', 14),
(185, '185.jpg', '', 14),
(186, '186.jpg', '', 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

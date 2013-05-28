-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2013 at 10:33 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(152);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=291 ;

--
-- Dumping data for table `gallery_photos`
--

INSERT INTO `gallery_photos` (`photo_id`, `photo_filename`, `photo_caption`, `photo_category`) VALUES
(290, '290.jpg', '', 13),
(289, '289.jpg', '', 13),
(288, '288.jpg', '', 13),
(287, '287.jpg', '', 13),
(286, '286.jpg', '', 13),
(285, '285.jpg', '', 13),
(284, '284.jpg', '', 13),
(283, '283.jpg', '', 13),
(282, '282.jpg', '', 13),
(281, '281.jpg', '', 13),
(280, '280.jpg', '', 13),
(279, '279.jpg', '', 13),
(278, '278.jpg', '', 13),
(277, '277.jpg', '', 13),
(276, '276.jpg', '', 13),
(275, '275.jpg', '', 13),
(274, '274.jpg', '', 13),
(273, '273.jpg', '', 12),
(272, '272.jpg', '', 12),
(271, '271.jpg', '', 12),
(270, '270.jpg', '', 12),
(269, '269.jpg', '', 12),
(268, '268.jpg', '', 12),
(267, '267.jpg', '', 12),
(266, '266.jpg', '', 12),
(265, '265.jpg', '', 12),
(264, '264.jpg', '', 12),
(263, '263.jpg', '', 12),
(262, '262.jpg', '', 12),
(261, '261.jpg', '', 12),
(260, '260.jpg', '', 12),
(259, '259.jpg', '', 12),
(258, '258.jpg', '', 12),
(257, '257.jpg', '', 12),
(256, '256.jpg', '', 11),
(255, '255.jpg', '', 11),
(254, '254.jpg', '', 11),
(253, '253.jpg', '', 11),
(252, '252.jpg', '', 11),
(251, '251.jpg', '', 11),
(250, '250.jpg', '', 11),
(249, '249.jpg', '', 11),
(248, '248.jpg', '', 11),
(247, '247.jpg', '', 11),
(246, '246.jpg', '', 11),
(245, '245.jpg', '', 11),
(244, '244.jpg', '', 11),
(243, '243.jpg', '', 11),
(242, '242.jpg', '', 11),
(241, '241.jpg', '', 11),
(240, '240.jpg', '', 11),
(239, '239.jpg', '', 11),
(238, '238.jpg', '', 11),
(237, '237.jpg', '', 10),
(236, '236.jpg', '', 10),
(235, '235.jpg', '', 10),
(234, '234.jpg', '', 10),
(233, '233.jpg', '', 10),
(232, '232.jpg', '', 10),
(231, '231.jpg', '', 10),
(230, '230.jpg', '', 10),
(229, '229.jpg', '', 10),
(228, '228.jpg', '', 10),
(227, '227.jpg', '', 10),
(226, '226.jpg', '', 10),
(225, '225.jpg', '', 10),
(224, '224.jpg', '', 10),
(223, '223.jpg', '', 10),
(222, '222.jpg', '', 10),
(221, '221.jpg', '', 10),
(220, '220.jpg', '', 9),
(219, '219.jpg', '', 9),
(218, '218.jpg', '', 9),
(217, '217.jpg', '', 9),
(216, '216.jpg', '', 9),
(215, '215.jpg', '', 9),
(214, '214.jpg', '', 9),
(213, '213.jpg', '', 9),
(212, '212.jpg', '', 9),
(211, '211.jpg', '', 9),
(210, '210.jpg', '', 9),
(209, '209.jpg', '', 9),
(208, '208.jpg', '', 9),
(207, '207.jpg', '', 9),
(206, '206.jpg', '', 9),
(205, '205.jpg', '', 9),
(204, '204.jpg', '', 9),
(203, '203.jpg', '', 4),
(202, '202.jpg', '', 4),
(201, '201.jpg', '', 4),
(200, '200.jpg', '', 4),
(199, '199.jpg', '', 4),
(198, '198.jpg', '', 4),
(197, '197.jpg', '', 4),
(196, '196.jpg', '', 4),
(195, '195.jpg', '', 4),
(194, '194.jpg', '', 4),
(193, '193.jpg', '', 4),
(192, '192.jpg', '', 4),
(191, '191.jpg', '', 4),
(190, '190.jpg', '', 4),
(189, '189.jpg', '', 4),
(188, '188.jpg', '', 4),
(187, '187.jpg', '', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2018 at 09:28 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secureproperty`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_agen_tbl`
--

CREATE TABLE IF NOT EXISTS `m_agen_tbl` (
  `id_seq` int(20) NOT NULL AUTO_INCREMENT,
  `agen_id` varchar(20) NOT NULL,
  `agen_name` varchar(200) NOT NULL,
  `agen_gender` varchar(1) NOT NULL,
  `agen_join_date` date DEFAULT NULL,
  `agen_birthplace` varchar(200) DEFAULT NULL,
  `agen_birthdate` date DEFAULT NULL,
  `agen_address` varchar(300) NOT NULL,
  `agen_phone` varchar(16) NOT NULL,
  `agen_email` varchar(30) DEFAULT NULL,
  `agen_uplink` varchar(20) DEFAULT NULL,
  `agen_uplink2` varchar(20) DEFAULT NULL,
  `agen_initial_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_seq`),
  UNIQUE KEY `agen_id` (`agen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `m_agen_tbl`
--

INSERT INTO `m_agen_tbl` (`id_seq`, `agen_id`, `agen_name`, `agen_gender`, `agen_join_date`, `agen_birthplace`, `agen_birthdate`, `agen_address`, `agen_phone`, `agen_email`, `agen_uplink`, `agen_uplink2`, `agen_initial_name`) VALUES
(1, '17090001', 'Cipto Haribowo', 'L', '2018-01-02', 'Jakarta', '1976-06-23', 'Jl. Kayu manis II Baru No. 28 RT10/002 Kayumanis, Matraman Jakarta Timur', '08119369366', 'ciptohariwibowo@gmail.com', '', '', NULL),
(2, '17090002', 'Haris Santo', 'L', '2018-01-02', '', NULL, 'Kp. Buaran RT 001 / 003 Cakung Barat Jakarta Timur', '08159402441', 'harissanto99@gmail.com', NULL, NULL, NULL),
(3, '17090003', 'Haryono', 'L', '2017-09-05', 'Medan', '1976-04-09', 'Kp. Buaran RT 001 / 003 Cakung Barat Jakarta Timur', '0895346246624', 'arie301@gmail.com', '', NULL, NULL),
(4, '17090004', 'Santo Mulyono', 'L', '2017-03-09', '', '1969-09-27', 'Taman mutiara MS4 Jl. Daan Mogot 11460', '085218059774', 'santomulyono@gmail.com', '17090002', '', 'santo'),
(5, '17090005', 'Gusti Komarudinsyah', 'L', '2017-09-03', '', '1986-02-19', 'Jl. Rawamangun Muka Barat RT 09 /12 No. 3D, Rawamangun - Jakarta Timur', '081349230549', 'gusti4properti.spi@gmail.com', '17090001', '', NULL),
(6, '17090006', 'Nanang Susanto', 'L', '2017-09-03', NULL, '1977-04-25', 'Bumi cilebut damai Blok A5 No.3 RT01/18 Kab. Bogor', '081219610577', 'nng.sst@gmail.com', '17090001', NULL, NULL),
(7, '17090007', 'Yandi', 'L', '2017-09-15', '', '1977-04-25', 'Bumi cilebut damai Blok A4 No.11 Cilebut Kab. Bogor', '0857 1895 8627', 'yandi05102nay@gmail.co', '17090006', '17090001', 'yandi');

-- --------------------------------------------------------

--
-- Table structure for table `m_user_tbl`
--

CREATE TABLE IF NOT EXISTS `m_user_tbl` (
  `user_seq` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `user_group` varchar(70) NOT NULL,
  PRIMARY KEY (`user_seq`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_user_tbl`
--

INSERT INTO `m_user_tbl` (`user_seq`, `user_id`, `password`, `user_name`, `user_group`) VALUES
(1, 'admin_test', '95ca23d9ed31be67106fadca40017789', 'admin test', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

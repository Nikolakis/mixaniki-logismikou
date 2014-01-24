
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2014 at 04:32 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a8643869_testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `Diklina`
--

CREATE TABLE `Diklina` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) COLLATE utf8_bin NOT NULL,
  `Price` int(80) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Diklina`
--

INSERT INTO `Diklina` VALUES(1, 'Kokkino dwmatio', 80);
INSERT INTO `Diklina` VALUES(2, 'Prasino Dwmatio', 80);

-- --------------------------------------------------------

--
-- Table structure for table `Monoklina`
--

CREATE TABLE `Monoklina` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) COLLATE utf8_bin NOT NULL,
  `Price` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Monoklina`
--

INSERT INTO `Monoklina` VALUES(1, 'Galazio Dwmatio', '50');
INSERT INTO `Monoklina` VALUES(2, 'Kitrino Dwmatio', '50');

-- --------------------------------------------------------

--
-- Table structure for table `Suite`
--

CREATE TABLE `Suite` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) COLLATE utf8_bin NOT NULL,
  `Price` int(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Suite`
--

INSERT INTO `Suite` VALUES(1, 'SUPER WOW DELUXE dwmatio', 200);
INSERT INTO `Suite` VALUES(2, 'Dream Best Supah Franky d', 200);

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Време на генериране: 
-- Версия на сървъра: 5.5.24-log
-- Версия на PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `_hotel`
--

-- --------------------------------------------------------

--
-- Структура на таблица `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `type` text NOT NULL,
  `package` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Ссхема на данните от таблица `reservation`
--

INSERT INTO `reservation` (`ID`, `fname`, `lname`, `email`, `phone`, `checkin`, `checkout`, `type`, `package`) VALUES
(1, 'Ivan', '', 'ikostadinov93@gmail.com', '0883595953', '2014-07-02', '2014-07-31', '2', '2'),
(2, 'Ivan', 'Kostadinov', 'ikostadinov93@gmail.com', '0883595953', '2014-07-02', '2014-07-31', '2', '2'),
(3, 'Ivan', 'Kostadinov', 'ikostadinov93@gmail.com', '0883595953', '2014-07-02', '2014-07-31', '2', '2'),
(4, 'Ivan', 'Kostadinov', 'ikostadinov93@gmail.com', '0883595953', '2014-07-02', '2014-07-31', '2', '2'),
(5, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-26', '2014-07-31', '1', '1'),
(6, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-26', '2014-07-31', '2', '2'),
(7, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-29', '2014-08-02', '1', '1'),
(8, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-29', '2014-08-02', '1', '1'),
(9, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-29', '2014-08-02', '1', '1'),
(10, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-29', '2014-08-02', '1', '1'),
(11, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(12, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(13, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(14, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(15, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(16, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(17, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(18, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(19, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(20, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(21, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(22, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(23, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(24, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(25, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(26, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(27, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(28, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(29, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(30, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(31, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(32, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(33, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(34, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(35, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(36, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(37, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(38, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(39, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(40, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(41, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(42, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(43, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '3', '1'),
(44, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '4', '1'),
(45, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '4', '1'),
(46, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '4', '1'),
(47, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '4', '1'),
(48, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '4', '1'),
(49, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '4', '1'),
(50, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '4', '1'),
(51, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(52, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(53, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(54, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(55, 'Ivan', 'Kostadinov', 'test1@test1.com', '0883595953', '2014-07-28', '2014-07-29', '1', '1'),
(56, 'ivan', 'kostadinov', 'van4oooo@abv.bg', '45645645654', '2014-09-30', '2014-10-24', '2', '2'),
(57, 'Ivan', 'Kostadinov', 'ikostadinov93@gmail.com', '043842452125', '2014-10-16', '2014-10-19', '2', '3');

-- --------------------------------------------------------

--
-- Структура на таблица `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `roomtype` text NOT NULL,
  `left` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Ссхема на данните от таблица `rooms`
--

INSERT INTO `rooms` (`ID`, `roomtype`, `left`) VALUES
(1, 'single', 20),
(3, 'double', 20),
(4, 'triple', 14),
(5, 'appartment', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

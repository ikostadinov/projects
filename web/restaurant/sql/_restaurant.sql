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
-- БД: `_restaurant`
--

-- --------------------------------------------------------

--
-- Структура на таблица `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Ссхема на данните от таблица `gallery`
--

INSERT INTO `gallery` (`ID`, `photo`) VALUES
(2, 'images/DSC00610.jpg'),
(6, 'images/DSC00581.JPG'),
(7, 'images/DSC00634.JPG'),
(8, 'images/DSC00645.JPG');

-- --------------------------------------------------------

--
-- Структура на таблица `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Ссхема на данните от таблица `home`
--

INSERT INTO `home` (`image`, `text`) VALUES
('images/DSC00624.JPG', 'Добре дошли в ресторант Враня! Щастливи сме, че сте наши гости и ще се постараем да превърнем посещението Ви тук в добро изживяване. Ние наследяваме една традиция от 1962 г. Като продължение на тази дълга история се стремим да развиваме и подновяваме славата на този прекрасен ресторант.\r\nСъздаден и използван от бившата организация УБО, посрещал през годините всички най – важни хора в държавата, Враня е повече от ресторант – това е една историческа забележителност в сърцето на столицата. Ресторантът е основно реновиран и с променен дизайн в края на 2011 г.\r\n \r\n \r\nИзцяло обновен и с перфектното си разположение в центъра на София, ресторант Враня предлага нещо повече от храна и напитки. Ние предлагаме спокойствие, чувство за уют и добре свършена работа. Известни сме със семплата и ненатрапчива обстановка на основната зала, както и с дискретността, която предлагаме на своите клиенти. Вярваме, че едно място въздейства не само с видимите и осезаемите си елементи. Ние влагаме сърцата си в идеята за едно място, в което да изпитате чувство на спокойствие и удовлетвореност, да се насладите на качествена напитка в центъра на София. Едновремено с това в тиха и семпла обстановка, да опитате някой от специалитетите на опитните ни готвачи и да усетите атмосферата на приятелство и непринуденост. Насладете се на нашите предложения.');

-- --------------------------------------------------------

--
-- Структура на таблица `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foodtype` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Ссхема на данните от таблица `menu`
--

INSERT INTO `menu` (`ID`, `name`, `description`, `weight`, `price`, `image`, `foodtype`) VALUES
(12, 'Пилешки бутчета', 'пилешко месо, масло, подправки, картофи', 250, '4.00', 'images/product2.jpg', 'main-dish'),
(13, 'Мусака', 'картофи, кайма, мляко, яйца', 250, '4.00', 'images/product3.jpg', 'main-dish'),
(15, 'Брускети', 'хляб, зехтин, чесън, босилек, домати, моцарела', 300, '6.00', 'images/bruschette.jpg', 'main-dish'),
(18, 'Плодова салата', 'плодове по избор, сметана, мед', 300, '4.50', 'images/product1.jpg', 'salad'),
(20, 'Шоколадово суфле', 'шоколад, сметана, ягоди, сладолед', 150, '2.50', 'images/product4.jpg', 'dessert');

-- --------------------------------------------------------

--
-- Структура на таблица `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `nr-people` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Ссхема на данните от таблица `reservation`
--

INSERT INTO `reservation` (`ID`, `name`, `surname`, `tel`, `email`, `date`, `time`, `nr-people`) VALUES
(2, 'ivan', 'kostadinov', 89454845, 'sadas@dsad.com', '0000-00-00', '00:00:00', 5),
(3, '?•?????»', 'kostadinov', 5454184, 'test1@test1.com', '2014-07-29', '00:00:00', 1),
(4, 'Vera', 'Djaleva', 45484, 'ssadas@sadsad.com', '2014-07-29', '00:00:00', 6),
(5, 'sadsakd', 'dsakjdsald', 23432, 'sdasda@mail.com', '2014-07-30', '00:00:00', 1),
(6, 'dwqdsa', 'djsakdsal', 32424, 'sadsad@asdasd.com', '2014-07-31', '00:00:00', 1),
(7, '?????°??', 'ÐšÐ¾ÑÑ‚Ð°Ð´Ð¸Ð½Ð¾Ð²', 883595953, 'ikostadinov93@gmail.com', '2014-07-14', '00:00:00', 2),
(8, '?????°??', 'ÐšÐ¾ÑÑ‚Ð°Ð´Ð¸Ð½Ð¾Ð²', 883595953, 'ikostadinov93@gmail.com', '2014-07-14', '00:00:00', 2),
(9, '?????°??', 'ÐšÐ¾ÑÑ‚Ð°Ð´Ð¸Ð½Ð¾Ð²', 883595953, 'ikostadinov93@gmail.com', '2014-07-14', '00:00:00', 2),
(10, '?????°??', 'Ð°Ñ', 32423, 'sadsa@dsad.com', '2014-07-31', '00:00:00', 6),
(11, '?????µ', 'sad', 0, 'sadsad@asdsa.com', '2014-07-29', '00:00:00', 1),
(12, 'Ð°ÑÐ´ÑÐ°Ð´Ð°Ñ', 'dsadsa', 324324, 'dsadsa@sdadsa.com', '2014-07-08', '00:00:00', 1),
(13, 'Иван', 'Костадинов', 845456, '2423@sada.com', '2014-07-02', '00:00:00', 12),
(14, 'Владимир', 'Джалев', 2147483647, 'sadjsad@sdsada.com', '2014-07-15', '00:00:00', 2),
(15, 'Емил', 'Костадинов', 2147483647, 'dsada@sada.com', '2014-07-10', '00:00:00', 2),
(16, 'Емил', 'Костадинов', 84546, 'sadsad@dsada.com', '0000-00-00', '00:00:00', 1),
(17, 'sadasd', 'asdsad', 2432432, 'asdasd@sad.com', '2014-07-10', '00:08:00', 1),
(18, 'wqeqw', 'eqwe', 0, 'dsadas@adsa.com', '2014-07-10', '00:08:00', 1),
(19, 'wqeqw', 'eqwe', 0, 'dsadas@adsa.com', '2014-07-10', '00:08:00', 1),
(20, 'wqeqw', 'eqwe', 0, 'dsadas@adsa.com', '2014-07-10', '00:08:00', 1),
(21, 'wqeqw', 'eqwe', 0, 'dsadas@adsa.com', '2014-07-10', '08:00:00', 1),
(22, 'wqeqw', 'eqwe', 0, 'dsadas@adsa.com', '2014-07-10', '08:00:00', 1),
(23, 'weq', 'qweqe', 243243242, 'dsadsadsa@sdsa.com', '2014-07-10', '08:00:00', 1),
(24, 'Иван', 'Костадинов', 883595953, 'v4ncho@abv.bg', '2014-07-12', '18:15:00', 8),
(25, 'Емил', 'kostadinov', 5454184, 'test1@test1.com', '2014-07-15', '11:45:00', 4),
(26, 'dsad', 'dsad', 883595953, 'test1@test1.com', '2014-07-11', '11:45:00', 2),
(27, 'Емил', 'kostadinov', 5454184, 'v4ncho@abv.bg', '2014-07-11', '10:45:00', 3),
(28, 'Емил', 'kostadinov', 5454184, 'v4ncho@abv.bg', '2014-07-11', '10:45:00', 3),
(29, 'Емил', 'kostadinov', 5454184, 'test1@test1.com', '2014-07-22', '20:45:00', 8),
(30, 'Емил', 'kostadinov', 5454184, 'test1@test1.com', '2014-07-11', '22:15:00', 2),
(31, 'Емил', 'kostadinov', 5454184, 'test1@test1.com', '2014-07-11', '13:30:00', 6),
(32, 'Емил', 'kostadinov', 5454184, 'test1@test1.com', '2014-07-24', '12:45:00', 8);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Ссхема на данните от таблица `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура на таблица `working-time`
--

CREATE TABLE IF NOT EXISTS `working-time` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `day` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open` text NOT NULL,
  `close` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Ссхема на данните от таблица `working-time`
--

INSERT INTO `working-time` (`ID`, `day`, `open`, `close`) VALUES
(1, 'Понеделник', '11:00', '23:00'),
(2, 'Вторник', '08:00', '22:00'),
(3, 'Сряда', '08:00', '23:00'),
(4, 'Четвъртък', '08:00', '23:00'),
(5, 'Петък', '08:00', '23:00'),
(6, 'Събота', '08:00', '23:00'),
(7, 'Неделя', '08:00', '22:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

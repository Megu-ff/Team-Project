-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2017 at 09:22 PM
-- Server version: 5.1.73
-- PHP Version: 5.4.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Steam`
--

-- --------------------------------------------------------

--
-- Table structure for table `GameInfo`
--

CREATE TABLE IF NOT EXISTS `GameInfo` (
  `AppID` int(11) NOT NULL DEFAULT '0',
  `GameName` varchar(255) DEFAULT NULL,
  `GameDesc` varchar(255) DEFAULT NULL,
  `ImgUrl` varchar(255) DEFAULT NULL,
  `ImgLink` varchar(255) NOT NULL,
  `GamePrice` double DEFAULT NULL,
  `GameRating` varchar(255) DEFAULT NULL,
  `GameGenre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AppID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GameInfo`
--

INSERT INTO `GameInfo` (`AppID`, `GameName`, `GameDesc`, `ImgUrl`, `ImgLink`, `GamePrice`, `GameRating`, `GameGenre`) VALUES
(522, 'Silvio', 'Yannoni', 'http://cdn.akamai.steamstatic.com/steam/apps/493840/capsule_616x353.jpg?t=1509450654', 'http://store.steampowered.com/app/578080/agecheck', 92.45, 'Graham', 'Pakistani'),
(146, 'Nicoline', 'Wow, what a cool game, this game is super fun and defo not for people who like game', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 85.71, 'Stanley', 'Chippewa'),
(810, 'Hilly', 'Limpkin', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 6.82, 'Cobb', 'Guatemalan'),
(723, 'Jerrie', 'Whight', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 96.04, 'Christian', 'Cheyenne'),
(759, 'Lemuel', 'Hrus', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 64.59, 'Karney', 'Latin American Indian'),
(398, 'Sabrina', 'Joutapaitis', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 62.07, 'Tadeo', 'Laotian'),
(855, 'Page', 'Caulket', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 32.59, 'Waring', 'Panamanian'),
(405, 'Aguie', 'Jeffrey', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 49.44, 'Silvain', 'Sioux'),
(530, 'Benedicta', 'Giacovazzo', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 97.74, 'Fabian', 'Comanche'),
(14, 'Patsy', 'Paradyce', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 66.9, 'Theobald', 'Japanese'),
(691, 'Kahlil', 'Kivits', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 68.19, 'Buddie', 'Cambodian'),
(446, 'Wainwright', 'Wilbraham', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 75.05, 'Angie', 'Ute'),
(802, 'Diann', 'Abbati', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 96.2, 'Claiborne', 'Bangladeshi'),
(383, 'Ronni', 'Deeble', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 10.34, 'Jackie', 'Houma'),
(68, 'Arty', 'Suttie', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 17.35, 'Giovanni', 'Yaqui'),
(258, 'Maynord', 'Thridgould', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 91.71, 'Wake', 'Puget Sound Salish'),
(564, 'Guilbert', 'Linde', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 90.49, 'Massimo', 'Fijian'),
(256, 'Min', 'Gleeson', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 49.62, 'Ian', 'Melanesian'),
(480, 'Lewiss', 'Hubert', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 3.26, 'Gareth', 'Alaska Native'),
(940, 'Liane', 'Wardington', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 54.47, 'Elroy', 'Menominee'),
(528, 'Lawrence', 'Benois', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 53.03, 'Ludwig', 'Peruvian'),
(926, 'Jacynth', 'Vanin', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 25.9, 'Mohandis', 'Ottawa'),
(617, 'Pall', 'Luthwood', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 18.93, 'Davey', 'Polynesian'),
(742, 'Nadya', 'Becken', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 44.38, 'Granger', 'South American'),
(41, 'Caterina', 'Walsh', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 79.47, 'Duncan', 'Fijian'),
(251, 'Dolley', 'Pawels', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 25.15, 'Bron', 'Laotian'),
(559, 'Lyndy', 'Damrell', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 78.04, 'Alain', 'Fijian'),
(602, 'Goober', 'Beed', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 22.72, 'Forest', 'Delaware'),
(176, 'Nicolai', 'Nockolds', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 9.53, 'Justino', 'Latin American Indian'),
(546, 'Iris', 'Owbrick', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 60.03, 'Biron', 'Central American'),
(0, '1212', '1212', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 1212, '1212', '1212'),
(4534, '212', '2121', 'http://cdn.akamai.steamstatic.com/steam/apps/414340/capsule_616x353.jpg?t=1510847069', '', 21.22, '212', '212');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

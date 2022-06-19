-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2022 at 06:21 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `belt`
--

DROP TABLE IF EXISTS `belt`;
CREATE TABLE IF NOT EXISTS `belt` (
  `BeltID` int(11) NOT NULL AUTO_INCREMENT,
  `Proficiency` varchar(255) NOT NULL,
  `ExpTotal` int(11) NOT NULL,
  `MaxLevel` varchar(255) NOT NULL,
  PRIMARY KEY (`BeltID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belt`
--

INSERT INTO `belt` (`BeltID`, `Proficiency`, `ExpTotal`, `MaxLevel`) VALUES
(1, 'White', 10, ''),
(2, 'Yellow', 20, ''),
(3, 'Orange', 30, ''),
(4, 'Green', 40, ''),
(5, 'Blue', 50, ''),
(6, 'Red', 60, ''),
(7, 'Purple\r\n', 70, ''),
(8, 'Brown\r\n', 80, ''),
(9, 'Black\r\n', 1, 'Unlimited');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `StudentID` int(11) NOT NULL,
  KEY `UserID` (`UserID`),
  KEY `StudentID` (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`UserID`, `Name`, `StudentID`) VALUES
(9, 'Loid', 6),
(7, 'Baker', 34),
(8, 'Nobunaga', 35);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `QuesID` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(255) NOT NULL,
  `Answers` varchar(255) NOT NULL,
  `RightAns` int(11) NOT NULL,
  PRIMARY KEY (`QuesID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QuesID`, `Question`, `Answers`, `RightAns`) VALUES
(2, 'What season does the leave fall?', 'Spring,Summer,Fall,Winter', 2),
(3, 'What is 2+2?', '3,5,4,6', 2),
(4, 'fill the blank space a,b,c,d,e,_,g,h,i', 'g,t,q,f', 3),
(5, 'what color is a leaf?', 'red,green,yellow,black', 1),
(6, 'What time of day do we have dinner?', 'In the evening,In the morning,In the middle of the night,In broad daylight', 0),
(7, 'what is the color of a banana?', 'red,blue,black,yellow', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Name` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BeltID` int(11) NOT NULL,
  `ExpNow` int(11) NOT NULL,
  `TempExp` int(11) NOT NULL,
  KEY `UserID` (`UserID`),
  KEY `BeltID` (`BeltID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `UserID`, `BeltID`, `ExpNow`, `TempExp`) VALUES
('Anya', 6, 6, 34, 3),
('Halo', 34, 9, 189, 3),
('Miyaki', 5, 1, 0, 0),
('Pete', 12, 2, 0, 0),
('steven', 35, 1, 0, 0),
('McDonald', 36, 1, 0, 0),
('zheng', 37, 1, 3, 0),
('James', 39, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Password`, `Role`, `mail`) VALUES
(1, 'Admin', 'admin', 'ADMIN', 'admin@admin.com'),
(2, 'Sweden', 'DenmarkSucks', 'Children\r\n', 'sweden@gmail.com'),
(3, 'Norway', 'D3nmarkSucks', 'Parents', 'norway@gmail.com'),
(4, 'Bake', 'Bread', 'Children', 'bak3ry@gmail.com'),
(5, 'Miyaki', 'karate', 'Children', 'karate.kid@gmail.com'),
(6, 'Anya', 'telepath', 'Children', 'anyafamily@gmail.com'),
(7, 'Baker', 'taLk', 'Parents', 'bakeryyy@gmail.com'),
(8, 'Nobunaga', 'manyWives', 'Parents', 'odanobunaga@gmail.com'),
(9, 'Loid', 'spY', 'Parents', 'spyislife@gmail.com'),
(10, 'HanHan', 'Bizz', 'Children', 'jaa.se@gmail.com'),
(12, 'Pete', 'CDawg', 'Children', 'primer2@twitch.com'),
(34, 'Halo', 'Olah', 'Children', 'olah@gmail.com'),
(35, 'steven', 'samuel', 'Children', 'samuel@gmail.com'),
(36, 'McDonald', 'Aw', 'Children', 'Ronald@mcdonald.com'),
(37, 'zheng', 'elden', 'Children', 'elden@gmail.com'),
(39, 'James', '12345', 'Children', 'james@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `parents_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`BeltID`) REFERENCES `belt` (`BeltID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

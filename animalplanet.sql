-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2019 at 06:34 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `animalplanet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `UserID` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `AdminName` varchar(30) DEFAULT NULL,
  `EmailId` varchar(20) DEFAULT NULL,
  `AdminPic` varchar(200) DEFAULT NULL,
  `ContactNo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `Password`, `AdminName`, `EmailId`, `AdminPic`, `ContactNo`) VALUES
('Paras', '123', 'paras', 'aaaaa', 'snake.jfif', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `animalcategoryinvideo`
--

CREATE TABLE IF NOT EXISTS `animalcategoryinvideo` (
  `VideoID` int(11) DEFAULT NULL,
  `AnimalCategory` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favimage`
--

CREATE TABLE IF NOT EXISTS `favimage` (
  `IId` int(11) DEFAULT NULL,
  `FavofUserId` varchar(100) DEFAULT NULL,
  `FavDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favvideo`
--

CREATE TABLE IF NOT EXISTS `favvideo` (
  `VideoId` varchar(100) DEFAULT NULL,
  `FavofUserId` varchar(100) DEFAULT NULL,
  `FavDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favvideo`
--

INSERT INTO `favvideo` (`VideoId`, `FavofUserId`, `FavDate`) VALUES
('5', 'aa', '2019-08-26'),
('4', 'aa', '2019-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `UploadDate` varchar(20) DEFAULT NULL,
  `UploadByUserId` varchar(10) DEFAULT NULL,
  `AnimalCategory` varchar(30) DEFAULT NULL,
  `Picture` varchar(40) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`UploadDate`, `UploadByUserId`, `AnimalCategory`, `Picture`, `ID`) VALUES
('2019-08-13', 'paras', 'Amphibians', 'arthropodspider.jpg', 6),
('2019-08-16', 'aa', 'Fish', 'fishes.jpg', 8),
('2019-08-16', 'aa', 'Amphibians', 'hallucinogenic-frog-1.jpg', 9),
('2019-08-16', 'paras', 'Birds', 'birds.png', 10),
('2019-08-26', 'aa', 'Amphibians', '4.jpg', 11),
('2019-08-26', 'aa', 'Fish', 'fishes.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `imagelikes`
--

CREATE TABLE IF NOT EXISTS `imagelikes` (
  `IID` int(11) DEFAULT NULL,
  `LikeByUserID` varchar(60) DEFAULT NULL,
  `LikeDate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` varchar(50) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `EMailID` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `ProfilePic` varchar(100) DEFAULT NULL,
  `Securityquestion` varchar(30) DEFAULT NULL,
  `SecurityAnswere` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Password`, `UserName`, `EMailID`, `Gender`, `ProfilePic`, `Securityquestion`, `SecurityAnswere`) VALUES
('aa', '111', '111', 'aaaa', 'Male', 'UserPics/fishes.jpg', NULL, NULL),
('anjali', '111', 'anjali', 'anjalikalra42@gmail.com', 'Male', 'UserPics/4.jpg', '111', '111'),
('bb', '222', '222', 'bbbb', 'Female', 'UserPics/fox.jpg', NULL, NULL),
('cc', '333', '333', 'cccc', 'Male', 'UserPics/barred-owl_thumb.adapt.885.1.jpg', NULL, NULL),
('dd', '444', '444', 'dddd', 'Female', 'UserPics/4.jpg', NULL, NULL),
('sahil', '123', '123', 'sahilharit30@gmail.com', 'Male', 'UserPics/11.jpg', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `videocomments`
--

CREATE TABLE IF NOT EXISTS `videocomments` (
  `VideoId` int(11) DEFAULT NULL,
  `CommentByUserId` varchar(50) DEFAULT NULL,
  `Comments` varchar(50) DEFAULT NULL,
  KEY `VideoId` (`VideoId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `videolikes`
--

CREATE TABLE IF NOT EXISTS `videolikes` (
  `VideoId` int(11) DEFAULT NULL,
  `LikeByUserId` varchar(50) DEFAULT NULL,
  `LikeDate` varchar(20) DEFAULT NULL,
  KEY `VideoId` (`VideoId`),
  KEY `LikeByUserId` (`LikeByUserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videolikes`
--

INSERT INTO `videolikes` (`VideoId`, `LikeByUserId`, `LikeDate`) VALUES
(5, 'aa', '2019-08-26'),
(4, 'aa', '2019-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `VideoId` int(11) NOT NULL AUTO_INCREMENT,
  `UploadByUserId` varchar(50) DEFAULT NULL,
  `UploadDate` date DEFAULT NULL,
  `VideoHeading` varchar(150) DEFAULT NULL,
  `VideoFileName` varchar(100) DEFAULT NULL,
  `VideoSize` varchar(20) DEFAULT NULL,
  `LikeCount` int(11) DEFAULT NULL,
  `AnimalCategory` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`VideoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`VideoId`, `UploadByUserId`, `UploadDate`, `VideoHeading`, `VideoFileName`, `VideoSize`, `LikeCount`, `AnimalCategory`) VALUES
(4, 'aa', '2019-08-26', 'Mammals', '13 MEANEST Mammals on Earth_144p.mp4', '11978666', 1, 'Mammals'),
(5, 'aa', '2019-08-26', 'Arthropods', 'What is an Arthropod_.mp4', '7589629', 1, 'Arthropods');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `videocomments`
--
ALTER TABLE `videocomments`
  ADD CONSTRAINT `videocomments_ibfk_1` FOREIGN KEY (`VideoId`) REFERENCES `videos` (`VideoId`);

--
-- Constraints for table `videolikes`
--
ALTER TABLE `videolikes`
  ADD CONSTRAINT `videolikes_ibfk_1` FOREIGN KEY (`VideoId`) REFERENCES `videos` (`VideoId`),
  ADD CONSTRAINT `videolikes_ibfk_2` FOREIGN KEY (`LikeByUserId`) REFERENCES `users` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

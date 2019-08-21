-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2018 at 10:34 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wknd1803`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Sports'),
(2, 'Business'),
(3, 'Entertaiment'),
(4, 'Culture');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `referer` enum('Facebook','Twitter','Instagram','Nairaland','') DEFAULT NULL,
  `edu` text,
  `gender` enum('Male','Female') NOT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phoneNo`, `email`, `referer`, `edu`, `gender`, `message`) VALUES
(1, 'Uwazie Benedict', '08157550744', 'nonwaz78@gmail.com', 'Facebook', NULL, 'Male', 'I want to make enquiry'),
(8, 'Uwazie Benedict', '8157550744', 'nonwaz78@gmail.com', 'Twitter', 'UNIBEN, IMSU, FUTO', 'Male', ''),
(9, 'O\'Doniel', '8157550744', 'nonwaz78@gmail.com', 'Facebook', 'IMSU, FUTO', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_img` varchar(50) DEFAULT NULL,
  `post_content` longtext NOT NULL,
  `post_date` timestamp NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_img`, `post_content`, `post_date`, `cat_id`, `user_id`) VALUES
(1, 'Ronaldo scores for juventus', 'ronaldo.jpg', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam?\r\n Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam?', '2018-09-04 06:00:00', 1, 1),
(2, 'Buhari Contesting again', 'buhari.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam?\r\n Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam?', '2018-09-19 06:00:00', 4, 1),
(3, '2face releases a new single', '2face.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam?\r\n Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam?', '2018-09-18 06:00:00', 3, 2),
(4, 'Christmas Carol', 'carol.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus, esse ex molestias maiores. Provident nam totam modi, expedita quos sit voluptates distinctio porro illo esse asperiores, animi eveniet ipsam?', '2018-09-24 06:00:00', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `registered_date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `first_name`, `lastName`, `gender`, `registered_date`) VALUES
(1, 'benedict', 'pass123', 'nonwaz78@gmail.com', '08123456791', 'Benedict', 'Uwazie', 'Male', '2018-09-10 06:00:00'),
(2, 'jimmy87', 'pass123', 'jimmy@gmail.com', '08157550755', 'Jimmy', 'Agbaje', 'Male', '2018-09-17 06:00:00'),
(3, 'lolade', 'pass123', 'lolade@yahoo.com', '8157550743', 'Lolade', 'Abumere', 'Female', '2018-09-17 06:00:00'),
(4, 'omolola', 'pass123', 'omolola', '08157550733', 'Omolola', 'Ogundele', 'Female', '2018-09-10 06:00:00'),
(6, 'opeyemi', 'pass123', 'ope@gmail.com', '08157550766', 'Opeyemi', 'Oyekunle', 'Male', '2018-09-22 15:32:57'),
(12, 'opeyemi', 'pass123', 'ope@gmail.com', '08157550766', 'Opeyemi', 'Oyekunle', 'Male', '2018-09-22 15:40:33');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

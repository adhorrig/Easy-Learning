-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2015 at 12:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Enlgish'),
(2, 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_name` text NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`, `category_id`) VALUES
(1, 'What is the first day of the week?', 'Tuesday', 'Monday', 'Thursday', 'Sunday', '2', 1),
(2, 'Select the noun.', 'Glass', 'Talking', 'Beautiful', 'Showering', '1', 1),
(3, 'Select the adjective.', 'Computer', 'Tuesday', 'Gorgeous', 'Sky', '3', 1),
(4, 'Select the noun.', 'House', 'Tall', 'Small', 'Swimming', '1', 1),
(5, 'What is the fifth letter of the alphabet?', 'A', 'G', 'E', 'J', '3', 3),
(6, 'What day comes after Saturday?', 'Thursday', 'Tuesday', 'Monday', 'Sunday', '4', 1),
(7, 'Select the sentence with two verbs and one adjective.', 'The tall man enjoys cycling and running', 'Ireland is a nice country', 'I love football', 'The short man likes to run', '1', 1),
(8, 'Select the sentence with two nouns and one adjective', 'Ireland is a nice country', 'Peter is very kind', 'Spain and Italy are gorgeous countries', 'Technology makes learning fun', '3', 1),
(9, 'Select the sentence with three adjectives', 'My friends are kind and funny', 'Football is a popular sport', 'Ireland is a small, friendly and wonderful country', 'It gets dark at night time', '3', 1),
(10, '4 - 3 = ?', '1', '3', '4', '0', '1', 2),
(11, '8 - 2 = ', '1', '3', '4', '6', '4', 2),
(12, '6 - 6 = ?', '4', '0', '12', '2', '2', 2),
(13, '4 + 6 =', '10', '2', '1', '6', '1', 2),
(14, '1 + 5 = ', '6', '2', '9', '5', '1', 2),
(15, '3 + 4 =', '1', '7', '6', '9', '2', 2),
(16, '2 x 4 =', '1', '6', '10', '8', '4', 2),
(17, '3 x 3 =', '3', '7', '5', '9', '4', 0),
(18, '6 ÷ 2 = ?', '2', '3', '12', '26', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `alphabetone` int(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `score`, `alphabetone`, `category_id`) VALUES
(22, 'Adam', 2, 5, 2),
(23, 'Eoin', 0, 9, 2),
(24, 'John', 3, 0, 2),
(25, 'Peter', 1, 0, 2),
(26, 'Liam', 1, 5, 2),
(27, 'Reimo', 8, 0, 2),
(28, 'Ben', 0, 0, 2),
(29, 'Tom', 7, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2015 at 06:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bh_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `num_pick` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_id`, `num_pick`, `text`) VALUES
(1, 1, 0, 'male'),
(2, 1, 0, 'female'),
(3, 2, 0, 'Married'),
(4, 2, 0, 'Single'),
(5, 2, 0, 'Divorced'),
(6, 2, 0, 'Widowed'),
(7, 2, 0, 'Separated'),
(8, 2, 0, 'In a relationship'),
(9, 3, 0, 'Canada'),
(10, 3, 0, 'Italy'),
(11, 3, 0, 'Australia'),
(12, 3, 0, 'Hong Kong'),
(13, 3, 0, 'Russia'),
(14, 3, 0, 'Belgium'),
(15, 4, 0, 'Football'),
(16, 4, 0, 'Basketball'),
(17, 4, 0, 'Baseball'),
(18, 4, 0, 'Hockey'),
(19, 4, 0, 'None'),
(20, 5, 0, 'PHP'),
(21, 5, 0, 'Ruby'),
(22, 5, 0, 'Python'),
(23, 5, 0, 'Java Script'),
(24, 6, 0, 'Banana'),
(25, 6, 0, 'Apple'),
(26, 2, 0, 'jfkdsalfjsl');

-- --------------------------------------------------------

--
-- Table structure for table `picks`
--

CREATE TABLE IF NOT EXISTS `picks` (
  `question_id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL,
  `num_male` int(11) NOT NULL DEFAULT '0',
  `num_female` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picks`
--

INSERT INTO `picks` (`question_id`, `choice_id`, `num_male`, `num_female`) VALUES
(1, 1, 11, 0),
(1, 2, 0, 30),
(2, 3, 1, 6),
(2, 4, 5, 7),
(2, 5, 1, 4),
(2, 6, 3, 12),
(2, 7, 0, 1),
(2, 8, 0, 0),
(3, 9, 4, 14),
(3, 10, 3, 12),
(3, 11, 8, 20),
(3, 12, 7, 6),
(3, 13, 6, 6),
(3, 14, 3, 5),
(4, 15, 1, 1),
(4, 17, 0, 0),
(4, 18, 1, 0),
(4, 19, 0, 0),
(5, 20, 8, 27),
(5, 21, 6, 8),
(5, 22, 5, 6),
(5, 23, 4, 19),
(4, 16, 6, 4),
(6, 24, 0, 1),
(6, 25, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `type`) VALUES
(1, 'What is your gender?', 'radio'),
(2, 'What is your relationship status?', 'radio'),
(3, 'Which countries did you visit in?', 'checkbox'),
(4, 'What is your favorite sports?', 'radio'),
(5, 'Which programming languages do you know?', 'checkbox'),
(6, 'What''s your favorite fruit?', 'radio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2012 at 05:59 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transcription_workflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `manager_id`, `name`, `address`, `city`, `state`, `zip`, `created`, `modified`) VALUES
(1, 5, 'Doctor Who', '1 Tardis Lane', 'Anywhere', 'NJ', '08012', '2012-11-20 05:01:40', '2012-11-23 19:19:13'),
(2, 7, 'Dr Jekyll', '123 Fake St', 'Philadelphia', 'PA', '19112', '2012-11-23 18:44:14', '2012-11-28 19:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `dictations`
--

CREATE TABLE IF NOT EXISTS `dictations` (
  `dictation_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `location` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`dictation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dictations`
--

INSERT INTO `dictations` (`dictation_id`, `client_id`, `name`, `location`, `created`, `modified`) VALUES
(1, 1, 'a', 'a', '2012-11-20 05:11:58', '2012-11-20 05:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `dictation_assignments`
--

CREATE TABLE IF NOT EXISTS `dictation_assignments` (
  `dictation_assignment_id` int(11) NOT NULL,
  `dictation_id` int(11) NOT NULL,
  `account_manager_id` int(11) NOT NULL,
  `transcriptionist_id` int(11) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dictation_assignments`
--

INSERT INTO `dictation_assignments` (`dictation_assignment_id`, `dictation_id`, `account_manager_id`, `transcriptionist_id`, `valid`, `created`, `modified`) VALUES
(1, 1, 5, 6, 0, '2012-11-23 22:25:47', '2012-11-28 20:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `qa_approvals`
--

CREATE TABLE IF NOT EXISTS `qa_approvals` (
  `qa_approval_id` int(11) NOT NULL,
  `qa_assignment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `response` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qa_assignments`
--

CREATE TABLE IF NOT EXISTS `qa_assignments` (
  `qa_assignment_id` int(11) NOT NULL AUTO_INCREMENT,
  `transcription_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`qa_assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `created`, `modified`) VALUES
(1, 'Account Manager', '2012-11-20 05:31:53', '2012-11-20 05:31:53'),
(2, 'Transcriptionist', '2012-11-20 05:32:18', '2012-11-21 19:00:54'),
(3, 'Administrator', '2012-11-20 05:32:29', '2012-11-20 05:32:29'),
(4, 'QA Manager', '2012-11-20 05:32:39', '2012-11-20 05:32:39'),
(5, 'QA Associate', '2012-11-20 05:33:11', '2012-11-20 05:33:11'),
(6, 'Client User', '2012-11-20 05:34:11', '2012-11-20 05:34:11'),
(7, 'test', '2012-11-21 18:58:33', '2012-11-21 18:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `transcriptions`
--

CREATE TABLE IF NOT EXISTS `transcriptions` (
  `transcription_id` int(11) NOT NULL,
  `dictation_id` int(11) NOT NULL,
  `dictation_assignment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`transcription_id`),
  UNIQUE KEY `transcription_id` (`transcription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transcriptions`
--

INSERT INTO `transcriptions` (`transcription_id`, `dictation_id`, `dictation_assignment_id`, `name`, `location`, `created`, `modified`) VALUES
(1, 1, 1, 'a transcrption', '/a.doc', '2012-11-23 18:53:32', '2012-11-23 18:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `username`, `password`, `name`, `created`, `modified`) VALUES
(4, 3, 'admin', '27a43ee8c61c560e7c73e73d1c75a974e8a5e829', 'Administrator', '2012-11-21 18:30:51', '2012-11-21 18:30:51'),
(5, 1, 'manager1', '27a43ee8c61c560e7c73e73d1c75a974e8a5e829', 'Manager #1', '2012-11-23 18:16:44', '2012-11-23 18:16:44'),
(6, 2, 'tran', '27a43ee8c61c560e7c73e73d1c75a974e8a5e829', 'Transcriptionist 1', '2012-11-23 22:24:30', '2012-11-23 22:24:30'),
(7, 1, 'manager2', '27a43ee8c61c560e7c73e73d1c75a974e8a5e829', 'Manager #2', '2012-11-28 19:30:50', '2012-11-28 19:30:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

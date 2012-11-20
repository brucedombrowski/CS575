-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2012 at 05:35 AM
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
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `address`, `city`, `state`, `zip`, `created`, `modified`) VALUES
(1, 'Doctor Who', '1 Tardis Lane', 'Anywhere', 'NJ', '08012', '2012-11-20 05:01:40', '2012-11-20 05:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `clients_managers`
--

CREATE TABLE IF NOT EXISTS `clients_managers` (
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients_users`
--

CREATE TABLE IF NOT EXISTS `clients_users` (
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `created`, `modified`) VALUES
(1, 'Account Manager', '2012-11-20 05:31:53', '2012-11-20 05:31:53'),
(2, 'Transcriptionist', '2012-11-20 05:32:18', '2012-11-20 05:32:18'),
(3, 'Administrator', '2012-11-20 05:32:29', '2012-11-20 05:32:29'),
(4, 'QA Manager', '2012-11-20 05:32:39', '2012-11-20 05:32:39'),
(5, 'QA Associate', '2012-11-20 05:33:11', '2012-11-20 05:33:11'),
(6, 'Client User', '2012-11-20 05:34:11', '2012-11-20 05:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `transcriptions`
--

CREATE TABLE IF NOT EXISTS `transcriptions` (
  `transcription_id` int(11) NOT NULL,
  `dictation_id` int(11) NOT NULL,
  `dictation_assignment_id` int(11) NOT NULL,
  `qa_assignment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`transcription_id`),
  UNIQUE KEY `transcription_id` (`transcription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

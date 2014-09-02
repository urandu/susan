-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2014 at 04:10 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.6-1ubuntu1.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `susan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_cookies`
--

CREATE TABLE IF NOT EXISTS `ci_cookies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` int(20) NOT NULL AUTO_INCREMENT,
  `names` varchar(30) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `residence` varchar(60) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `registered_by` int(20) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `id_number` int(10) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `visit_id` int(20) NOT NULL AUTO_INCREMENT,
  `patient_id` int(20) NOT NULL,
  `time_started` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `doctors_notes` longtext,
  `lab_test_to_be_conducted` longtext,
  `lab_test_results` varchar(200) DEFAULT NULL,
  `doctor_diagnosis` varchar(200) DEFAULT NULL,
  `doctor_prescription` varchar(100) DEFAULT NULL,
  `current_stage` int(5) NOT NULL,
  `visit_status` int(1) NOT NULL DEFAULT '1',
  `next_visit` varchar(12) DEFAULT NULL,
  `total_amount_to_be_paid` int(20) DEFAULT NULL,
  `total_amount_paid` int(20) DEFAULT NULL,
  `consultation_staff` int(20) DEFAULT NULL,
  `triage_staff` int(20) DEFAULT NULL,
  `lab_staff` int(20) DEFAULT NULL,
  `pharmacy_staff` int(20) DEFAULT NULL,
  `finance_staff` int(20) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `blood_pressure` int(3) DEFAULT NULL,
  `temperature` int(3) DEFAULT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
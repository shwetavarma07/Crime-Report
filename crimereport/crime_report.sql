-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2018 at 08:08 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `crime_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `Comp_id` int(10) NOT NULL AUTO_INCREMENT,
  `Crime_type` varchar(20) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `Status` varchar(30) DEFAULT 'In queue',
  `Officer_Incharge` varchar(20) DEFAULT NULL,
  `User_id` int(10) NOT NULL,
  PRIMARY KEY (`Comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Comp_id`, `Crime_type`, `Location`, `Pincode`, `Status`, `Officer_Incharge`, `User_id`) VALUES
(1, 'Burglary', 'Belapur Bus Stop', 400614, 'resolved', 'Suresh Surve', 23),
(2, 'cybercrime', 'Bharti Vidyapeeth', 400614, 'Resolved', 'Sudhir Pandya', 12),
(3, 'Theft', 'Metro Mall', 400078, 'In Progress', 'Suresh Kamat', 67),
(4, 'Kidnapping', 'Central Mall', 400706, 'Resolved', 'John Fernandez', 12),
(5, 'Violence', 'DY Patil Stadium', 400706, 'Resolved', 'John Phadnis', 17),
(8, 'Theft', 'Bharti Vidyapeeth', 400614, 'Resolved', 'Ashok Mhatre', 19),
(9, 'Theft', 'Station', 400083, 'Unsolved', 'Ranjit Sethi', 17),
(10, 'Molestation', 'Bus Station', 400024, 'In Progress', 'Vijay V', 17),
(11, 'pickpocket', 'Highway', 400086, 'Resolved', 'Rumzhum Patil', 20),
(12, 'Violence', 'Tagore Nagar', 400083, 'In queue', 'Asif Patel', 17),
(13, 'Murder', 'Vikhroli', 400083, 'In Progress', 'Shweta Varma', 21);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(15) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(1, 'shwetavarma306@', 'hello admin');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE IF NOT EXISTS `police` (
  `police_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`police_id`, `password`) VALUES
('p001', 'belapur'),
('p002', 'nerul'),
('p003', 'ghatkopar'),
('p004', 'dombivali'),
('p005', 'kurla'),
('p006', 'vikhroli'),
('p007', 'bhandup');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `Full_name` varchar(50) DEFAULT NULL,
  `Aadhar_no` varchar(12) DEFAULT NULL,
  `Password` varchar(12) DEFAULT NULL,
  `DOB` varchar(12) DEFAULT NULL,
  `Gender` text,
  `Address` varchar(50) DEFAULT NULL,
  `Pincode` int(6) DEFAULT NULL,
  `City` text,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `username`, `Full_name`, `Aadhar_no`, `Password`, `DOB`, `Gender`, `Address`, `Pincode`, `City`, `Email`, `Mobile`) VALUES
(17, 'sam73', 'Samrat Mitra', '1234566', 'samrat', '1990-10-07', 'Male', 'Ambarnath', 421501, 'Ambarnath', 'samrat@gmail.com', 344334234),
(18, 'amit_joshi', 'Amit Joshi', '12434423', 'amit', '1992-09-22', 'Male', 'Thane', 400012, 'Thane', 'amit@gmail.com', 233232432),
(19, 'shre_bam', 'Shreyash Bamne', '9707655', 'shreyash', '1993-10-11', 'Male', 'Thane', 421003, 'Thane', 'bamne@gmail.com', 323424343),
(20, 'aps1993', 'APOORVASAWANT', '58547', 'samapoo', '1993-06-03', 'Female', 'ambernath east', 421501, 'ambernath', 'apoo@gmail.com', 94545),
(21, 'sv', 'Shweta ', '12345678', 'ssv', '2018-07-01', 'Female', 'vikhroli', 400083, 'mum', 'sv@gmail.com', 1234567890);

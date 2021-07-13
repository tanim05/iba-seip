-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 02:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgradingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblauto`
--

CREATE TABLE `tblauto` (
  `ID` int(11) NOT NULL,
  `autostart` varchar(11) NOT NULL,
  `incrementvalue` int(11) NOT NULL,
  `autoend` int(11) NOT NULL,
  `autokey` varchar(12) NOT NULL,
  `AUTONUM` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblauto`
--

INSERT INTO `tblauto` (`ID`, `autostart`, `incrementvalue`, `autoend`, `autokey`, `AUTONUM`) VALUES
(3, '2017', 1, 144, 'EXAMID', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `CLASSID` int(11) NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `SEMESTER` varchar(90) NOT NULL,
  `YEARLEVEL` varchar(30) NOT NULL,
  `SECTION` varchar(90) NOT NULL,
  `SY` varchar(30) NOT NULL,
  `SCHEDDAY` varchar(90) NOT NULL,
  `SCHEDTIME` varchar(90) NOT NULL,
  `SCHEDTIMEto` varchar(90) NOT NULL,
  `ROOM` varchar(30) NOT NULL,
  `ACCOUNT_USERNAME` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`CLASSID`, `CLASSCODE`, `COURSE`, `SEMESTER`, `YEARLEVEL`, `SECTION`, `SY`, `SCHEDDAY`, `SCHEDTIME`, `SCHEDTIMEto`, `ROOM`, `ACCOUNT_USERNAME`) VALUES
(1, 'CSPROJ', 'BSIT', 'First', '3', 'B34', '2018-2019', 'MWF', '09:00 am', '10:00 am', 'B45', 'Boonlambhan'),
(2, 'ENGLISH 1', 'BSCS', 'First', '1', 'B45', '2018-2019', 'MWF', '09:00 am', '', 'B67', 'Boonlambhan'),
(4, 'ENGLISH 1', 'BSCS', 'First', '1', '1', '2018-2019', 'MWF', '11:00 am', '', '3', 't'),
(5, 'CSPROJ', 'BSCS', 'First', '1', '1', '2018-2019', 'MWF', '08:00 pm', '09:00 pm', '3', 't');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `COURSEID` int(11) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `DESCRIPTION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`COURSEID`, `COURSE`, `DESCRIPTION`) VALUES
(0, 'BSCS', 'COMPUTER SCIENCE'),
(0, 'BSIT', 'INFORMATION TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `tblexams`
--

CREATE TABLE `tblexams` (
  `EXAMID` int(11) NOT NULL,
  `QUIZID` int(11) NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `EXAM_QUESTION` text NOT NULL,
  `EXAM_ANSWER` text NOT NULL,
  `CHOICE_A` text NOT NULL,
  `CHOICE_B` text NOT NULL,
  `CHOICE_C` text NOT NULL,
  `CHOICE_D` text NOT NULL,
  `TERM_EXAM` varchar(90) NOT NULL,
  `TEACHER` varchar(90) NOT NULL,
  `TYPE` varchar(90) NOT NULL,
  `CLASSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexams`
--

INSERT INTO `tblexams` (`EXAMID`, `QUIZID`, `CLASSCODE`, `EXAM_QUESTION`, `EXAM_ANSWER`, `CHOICE_A`, `CHOICE_B`, `CHOICE_C`, `CHOICE_D`, `TERM_EXAM`, `TEACHER`, `TYPE`, `CLASSID`) VALUES
(2017121, 1, 'CSPROJ', '1 + 1', '2', '1', '2', '3', '4', 'Prelim', 'teacher', 'Multiple Choice', 0),
(2017122, 1, 'CSPROJ', 'who is the man of steel?', 'superman', '', '', '', '', 'Prelim', 'teacher', 'Identification', 0),
(2017123, 1, 'CSPROJ', 'Superman Man of Steel', 'True', '', '', '', '', 'Prelim', 'teacher', 'True or False', 0),
(2017124, 1, 'CSPROJ', 'true', 'love', '', '', '', '', 'Prelim', 'teacher', 'Matching Type', 0),
(2017125, 1, 'CSPROJ', 'love', 'true', '', '', '', '', 'Prelim', 'teacher', 'Matching Type', 0),
(2017126, 1, 'CSPROJ', '2 + 2', '4', '1', '2', '3', '4', 'Prelim', 'teacher', 'Multiple Choice', 0),
(2017127, 2, 'CSPROJ', '2 + 2', '4', '4', '3', '2', '1', 'Midterm', 'teacher', 'Multiple Choice', 0),
(2017128, 2, 'CSPROJ', 'Who is the man of steel?', 'superman', '', '', '', '', 'Midterm', 'teacher', 'Identification', 0),
(2017129, 2, 'CSPROJ', 'May Forever ba?', 'True', '', '', '', '', 'Midterm', 'teacher', 'True or False', 0),
(2017130, 2, 'CSPROJ', 'True', 'love', '', '', '', '', 'Midterm', 'teacher', 'Matching Type', 0),
(2017131, 2, 'CSPROJ', 'love is', 'true', '', '', '', '', 'Midterm', 'teacher', 'Matching Type', 0),
(2017132, 2, 'CSPROJ', 'walng forever?', 'False', '', '', '', '', 'Midterm', 'teacher', 'True or False', 0),
(2017133, 3, 'CSPROJ', '1 + 1', '2', '1', '2', '3', '4', 'Final', 'teacher', 'Multiple Choice', 0),
(2017134, 3, 'CSPROJ', 'who is the man of steel', 'superman', '', '', '', '', 'Final', 'teacher', 'Identification', 0),
(2017135, 3, 'CSPROJ', 'true is love never dies', 'True', '', '', '', '', 'Final', 'teacher', 'True or False', 0),
(2017136, 3, 'CSPROJ', 'true ', 'love', '', '', '', '', 'Final', 'teacher', 'Matching Type', 0),
(2017137, 3, 'CSPROJ', 'love is', 'true', '', '', '', '', 'Final', 'teacher', 'Matching Type', 0),
(2017138, 4, 'ENGLISH 1', '1 + 1', '2', '1', '2', '3', '4', 'Prelim', 'teacher', 'Multiple Choice', 0),
(2017139, 4, 'ENGLISH 1', 'WHO IS THE MAN OF STEEL', 'SUPERMAN', '', '', '', '', 'Prelim', 'teacher', 'Identification', 0),
(2017140, 4, 'ENGLISH 1', 'THERE IS A TRUE LOVE?', 'True', '', '', '', '', 'Prelim', 'teacher', 'True or False', 0),
(2017141, 4, 'ENGLISH 1', 'LOVE IS', 'TRUE', '', '', '', '', 'Prelim', 'teacher', 'Matching Type', 0),
(2017142, 4, 'ENGLISH 1', 'TRUE IS', 'LOVE', '', '', '', '', 'Prelim', 'teacher', 'Matching Type', 0),
(2017143, 4, 'ENGLISH 1', '2 + 2', '4', '1', '2', '3', '4', 'Prelim', 'teacher', 'Multiple Choice', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblgrade`
--

CREATE TABLE `tblgrade` (
  `GRADEID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `CLASSID` int(11) NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `Attendance` double NOT NULL,
  `Quiz` double NOT NULL,
  `Lecture` double NOT NULL,
  `Laboratory` double NOT NULL,
  `Activity` double NOT NULL,
  `Assignment` double NOT NULL,
  `LongTest` double NOT NULL,
  `Exam` double NOT NULL,
  `Total` double NOT NULL,
  `Grading` varchar(90) NOT NULL,
  `ACCOUNT_USERNAME` varchar(90) NOT NULL,
  `INPUTDATE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgrade`
--

INSERT INTO `tblgrade` (`GRADEID`, `IDNO`, `CLASSID`, `CLASSCODE`, `Attendance`, `Quiz`, `Lecture`, `Laboratory`, `Activity`, `Assignment`, `LongTest`, `Exam`, `Total`, `Grading`, `ACCOUNT_USERNAME`, `INPUTDATE`) VALUES
(5, '1231123312', 4, 'ENGLISH 1', 85, 90, 75, 85, 85, 90, 80, 86, 84.9, 'Prelim', 't', '09/03/2018'),
(6, '1231123312', 4, 'ENGLISH 1', 86, 3, 3, 3, 3, 3, 3, 3, 11.3, 'Midterm', 't', '09/03/2018'),
(7, '1231123312', 4, 'ENGLISH 1', 12, 3, 3, 5, 3, 3, 3, 3, 35, 'Final', 't', '09/03/2018'),
(8, '653421', 4, 'ENGLISH 1', 85, 85, 3, 63, 4, 3, 0, 0, 34.85, 'Prelim', 't', '09/03/2018'),
(9, '653421', 4, 'ENGLISH 1', 3, 3, 0, 0, 0, 0, 0, 0, 6, 'Midterm', 't', '09/03/2018'),
(10, '653421', 4, 'ENGLISH 1', 3, 21, 0, 0, 0, 0, 0, 0, 24, 'Final', 't', '09/03/2018'),
(11, '12675432', 5, 'CSPROJ', 2, 0, 0, 0, 0, 0, 0, 0, 0.2, 'Prelim', 't', '09/03/2018'),
(12, '12675432', 5, 'CSPROJ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Midterm', 't', '09/03/2018'),
(13, '12675432', 5, 'CSPROJ', 4, 0, 0, 0, 0, 0, 0, 0, 0.4, 'Final', 't', '09/03/2018'),
(14, '1231123312', 5, 'CSPROJ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Prelim', 't', '09/03/2018'),
(15, '1231123312', 5, 'CSPROJ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Midterm', 't', '09/03/2018'),
(16, '1231123312', 5, 'CSPROJ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Final', 't', '09/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblgrades`
--

CREATE TABLE `tblgrades` (
  `GRADEID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `CLASSID` int(11) NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `QUIZZES_PRE` double NOT NULL,
  `ACTIVITIES_PRE` double NOT NULL,
  `HANDSON_PRE` double NOT NULL,
  `LECTURE_PRE` double NOT NULL,
  `LABORATORY_PRE` double NOT NULL,
  `ASSIGNMENT_PRE` double NOT NULL,
  `ATTENDANCE_PRE` double NOT NULL,
  `TERMEXAM_PRE` double NOT NULL,
  `TOTALGRADES_PRE` double NOT NULL,
  `QUIZZES_MID` double NOT NULL,
  `ACTIVITIES_MID` double NOT NULL,
  `HANDSON_MID` double NOT NULL,
  `ASSIGNMENT_MID` double NOT NULL,
  `ATTENDANCE_MID` double NOT NULL,
  `TERMEXAM_MID` double NOT NULL,
  `TOTALGRADES_MID` double NOT NULL,
  `QUIZZES_FINAL` double NOT NULL,
  `HANDSON_FINAL` double NOT NULL,
  `ACTIVITIES_FINAL` double NOT NULL,
  `ASSIGNMENT_FINAL` double NOT NULL,
  `ATTENDANCE_FINAL` double NOT NULL,
  `TERMEXAM_FINAL` double NOT NULL,
  `TOTALGRADES_FINAL` double NOT NULL,
  `TOTALPRELIM` double NOT NULL,
  `TOTALMIDTERM` double NOT NULL,
  `TOTALFINALE` double NOT NULL,
  `INPUTDATE` date NOT NULL,
  `ACCOUNT_USERNAME` varchar(90) NOT NULL,
  `PRELIM_EXAM` tinyint(1) NOT NULL,
  `MIDTERM_EXAM` tinyint(1) NOT NULL,
  `FINAL_EXAM` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgrades`
--

INSERT INTO `tblgrades` (`GRADEID`, `IDNO`, `CLASSID`, `CLASSCODE`, `QUIZZES_PRE`, `ACTIVITIES_PRE`, `HANDSON_PRE`, `LECTURE_PRE`, `LABORATORY_PRE`, `ASSIGNMENT_PRE`, `ATTENDANCE_PRE`, `TERMEXAM_PRE`, `TOTALGRADES_PRE`, `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`, `QUIZZES_FINAL`, `HANDSON_FINAL`, `ACTIVITIES_FINAL`, `ASSIGNMENT_FINAL`, `ATTENDANCE_FINAL`, `TERMEXAM_FINAL`, `TOTALGRADES_FINAL`, `TOTALPRELIM`, `TOTALMIDTERM`, `TOTALFINALE`, `INPUTDATE`, `ACCOUNT_USERNAME`, `PRELIM_EXAM`, `MIDTERM_EXAM`, `FINAL_EXAM`) VALUES
(1, '1830', 1, 'CSPROJ', 10, 10, 10, 0, 0, 10, 10, 40, 90, 9.1666666666667, 15, 10, 6, 5, 40, 85.1666666666667, 10, 0, 0, 0, 0, 0, 10, 0, 0, 0, '2018-08-02', 'teacher', 1, 1, 1),
(2, '1983', 2, 'ENGLISH 1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-08-10', 'teacher', 0, 0, 0),
(3, '1', 1, 'CSPROJ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-03', 'admin', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(1, 1, '2017-11-22 18:15:24', 'Administrator', 'Logged in'),
(2, 1, '2017-11-23 04:58:17', 'Administrator', 'Logged in'),
(3, 1, '2017-11-24 01:54:15', 'Administrator', 'Logged in'),
(4, 1, '2017-11-30 15:33:57', 'Administrator', 'Logged in'),
(5, 100000061, '2017-11-30 15:44:42', 'Student', 'Logged in'),
(6, 1, '2017-12-01 13:29:58', 'Administrator', 'Logged in'),
(7, 100000057, '2017-12-01 13:34:26', 'Student', 'Logged in'),
(8, 1, '2017-12-01 21:28:10', 'Administrator', 'Logged in'),
(9, 1, '2017-12-01 21:49:20', 'Administrator', 'Logged in'),
(10, 1, '2017-12-02 01:26:52', 'Administrator', 'Logged in'),
(11, 1, '2017-12-02 01:46:33', 'Administrator', 'Logged in'),
(12, 100000057, '2017-12-02 01:46:58', 'Student', 'Logged in'),
(13, 1, '2017-12-02 01:55:28', 'Administrator', 'Logged in'),
(14, 1, '2017-12-02 01:57:34', 'Administrator', 'Logged in'),
(15, 1, '2017-12-02 02:02:24', 'Administrator', 'Logged in'),
(16, 1, '2017-12-02 03:24:29', 'Administrator', 'Logged in'),
(17, 100000057, '2017-12-02 04:10:40', 'Student', 'Logged in'),
(18, 1, '2017-12-02 05:30:45', 'Administrator', 'Logged in'),
(19, 100000057, '2017-12-02 05:32:01', 'Student', 'Logged in'),
(20, 1, '2017-12-02 10:39:12', 'Administrator', 'Logged in'),
(21, 100000061, '2017-12-02 10:45:44', 'Student', 'Logged in'),
(22, 1, '2017-12-02 15:22:54', 'Administrator', 'Logged in'),
(23, 100000061, '2017-12-02 15:24:10', 'Student', 'Logged in'),
(24, 1, '2017-12-02 23:34:20', 'Administrator', 'Logged in'),
(25, 100000057, '2017-12-02 23:36:23', 'Student', 'Logged in'),
(26, 1, '2017-12-03 01:18:51', 'Administrator', 'Logged in'),
(27, 100000057, '2017-12-03 01:20:08', 'Student', 'Logged in'),
(28, 1, '2017-12-03 01:33:27', 'Administrator', 'Logged in'),
(29, 100000057, '2017-12-03 01:33:34', 'Student', 'Logged in'),
(30, 1, '2017-12-03 09:36:27', 'Administrator', 'Logged in'),
(31, 100000057, '2017-12-03 09:39:30', 'Student', 'Logged in'),
(32, 100000057, '2017-12-03 09:42:54', 'Student', 'Logged out'),
(33, 100000058, '2017-12-03 09:43:03', 'Student', 'Logged in'),
(34, 1, '2017-12-03 12:46:23', 'Administrator', 'Logged in'),
(35, 100000061, '2017-12-03 12:46:43', 'Student', 'Logged in'),
(36, 100000061, '2017-12-03 12:48:47', 'Student', 'Logged out'),
(37, 100000058, '2017-12-03 12:48:54', 'Student', 'Logged in'),
(38, 1, '2017-12-04 02:08:18', 'Administrator', 'Logged in'),
(39, 1, '2017-12-08 05:51:36', 'Administrator', 'Logged in'),
(40, 1, '2018-02-11 01:31:54', 'Administrator', 'Logged in'),
(41, 1, '2018-02-11 01:51:11', 'Administrator', 'Logged out'),
(42, 2, '2018-02-11 01:51:15', 'Teacher', 'Logged in'),
(43, 2, '2018-02-11 01:52:02', 'Teacher', 'Logged in'),
(44, 100000073, '2018-02-11 04:29:29', 'Student', 'Logged in'),
(45, 1, '2018-02-11 09:07:45', 'Administrator', 'Logged in'),
(46, 1, '2018-02-11 09:08:01', 'Administrator', 'Logged out'),
(47, 2, '2018-02-11 09:08:04', 'Teacher', 'Logged in'),
(48, 100000073, '2018-02-11 09:15:35', 'Student', 'Logged in'),
(49, 1, '2018-02-11 09:47:23', 'Administrator', 'Logged in'),
(50, 100000058, '2018-02-11 09:53:13', 'Student', 'Logged in'),
(51, 100000058, '2018-02-11 10:10:24', 'Student', 'Logged out'),
(52, 100000061, '2018-02-11 10:10:28', 'Student', 'Logged in'),
(53, 3, '2018-02-19 02:27:24', 'Teacher', 'Logged out'),
(54, 1, '2018-02-19 02:27:41', 'Administrator', 'Logged in'),
(55, 1, '2018-02-19 02:30:36', 'Administrator', 'Logged out'),
(56, 1, '2018-02-19 02:31:05', 'Administrator', 'Logged in'),
(57, 1, '2018-02-19 02:31:58', 'Administrator', 'Logged out'),
(58, 3, '2018-02-19 02:32:08', 'Teacher', 'Logged in'),
(59, 3, '2018-02-19 02:32:19', 'Teacher', 'Logged out'),
(60, 1, '2018-02-19 02:32:24', 'Administrator', 'Logged in'),
(61, 1, '2018-02-19 02:33:31', 'Administrator', 'Logged out'),
(62, 3, '2018-02-19 02:33:36', 'Teacher', 'Logged in'),
(63, 3, '2018-02-19 02:34:06', 'Teacher', 'Logged out'),
(64, 1, '2018-02-19 02:34:13', 'Administrator', 'Logged in'),
(65, 1, '2018-02-19 02:35:56', 'Administrator', 'Logged out'),
(66, 3, '2018-02-19 02:36:02', 'Teacher', 'Logged in'),
(67, 20160530, '2018-02-19 02:37:48', 'Student', 'Logged in'),
(68, 3, '2018-02-19 02:49:26', 'Teacher', 'Logged out'),
(69, 20160530, '2018-02-19 02:49:31', 'Student', 'Logged out'),
(70, 1, '2018-02-19 03:24:21', 'Administrator', 'Logged in'),
(71, 100000058, '2018-02-19 03:33:01', 'Student', 'Logged in'),
(72, 100000058, '2018-02-19 03:36:21', 'Student', 'Logged out'),
(73, 20160532, '2018-02-19 03:36:42', 'Student', 'Logged in'),
(74, 1, '2018-02-19 03:37:24', 'Administrator', 'Logged out'),
(75, 3, '2018-02-19 03:37:31', 'Teacher', 'Logged in'),
(76, 20160532, '2018-02-19 03:40:57', 'Student', 'Logged out'),
(77, 3, '2018-02-19 03:41:15', 'Teacher', 'Logged out'),
(78, 1, '2018-02-19 03:41:28', 'Administrator', 'Logged in'),
(79, 1, '2018-02-19 03:45:14', 'Administrator', 'Logged out'),
(80, 3, '2018-02-19 03:45:21', 'Teacher', 'Logged in'),
(81, 3, '2018-02-19 03:45:43', 'Teacher', 'Logged out'),
(82, 1, '2018-02-19 03:45:51', 'Administrator', 'Logged in'),
(83, 1, '2018-02-19 03:46:41', 'Administrator', 'Logged out'),
(84, 3, '2018-02-19 03:46:47', 'Teacher', 'Logged in'),
(85, 20160532, '2018-02-19 05:10:28', 'Student', 'Logged in'),
(86, 3, '2018-02-19 05:10:55', 'Teacher', 'Logged out'),
(87, 1, '2018-02-19 05:11:03', 'Administrator', 'Logged in'),
(88, 1, '2018-02-19 05:11:46', 'Administrator', 'Logged out'),
(89, 1, '2018-02-19 05:11:54', 'Administrator', 'Logged in'),
(90, 1, '2018-02-19 05:13:04', 'Administrator', 'Logged out'),
(91, 3, '2018-02-19 05:13:12', 'Teacher', 'Logged in'),
(92, 3, '2018-02-19 05:13:56', 'Teacher', 'Logged out'),
(93, 1, '2018-02-19 05:14:30', 'Administrator', 'Logged in'),
(94, 1, '2018-02-19 05:14:52', 'Administrator', 'Logged out'),
(95, 3, '2018-02-19 05:15:01', 'Teacher', 'Logged in'),
(96, 3, '2018-02-19 05:15:17', 'Teacher', 'Logged out'),
(97, 1, '2018-02-19 05:15:25', 'Administrator', 'Logged in'),
(98, 20160532, '2018-02-19 05:18:20', 'Student', 'Logged out'),
(99, 20160532, '2018-02-19 05:18:29', 'Student', 'Logged in'),
(100, 20160532, '2018-02-19 05:18:42', 'Student', 'Logged out'),
(101, 20160530, '2018-02-19 05:18:54', 'Student', 'Logged in'),
(102, 1, '2018-02-19 05:21:09', 'Administrator', 'Logged out'),
(103, 3, '2018-02-19 05:21:20', 'Teacher', 'Logged in'),
(104, 3, '2018-02-19 05:23:22', 'Teacher', 'Logged out'),
(105, 20160530, '2018-02-19 05:23:39', 'Student', 'Logged out'),
(106, 1, '2018-03-01 14:38:43', 'Administrator', 'Logged in'),
(107, 1, '2018-03-01 14:40:51', 'Administrator', 'Logged out'),
(108, 3, '2018-03-01 14:41:18', 'Teacher', 'Logged in'),
(109, 3, '2018-03-01 14:41:28', 'Teacher', 'Logged out'),
(110, 1, '2018-03-01 14:42:30', 'Administrator', 'Logged in'),
(111, 1, '2018-03-01 15:05:40', 'Administrator', 'Logged out'),
(112, 3, '2018-03-01 15:05:47', 'Teacher', 'Logged in'),
(113, 3, '2018-03-01 15:06:22', 'Teacher', 'Logged out'),
(114, 1, '2018-03-01 15:06:39', 'Administrator', 'Logged in'),
(115, 1, '2018-03-01 15:08:08', 'Administrator', 'Logged out'),
(116, 3, '2018-03-01 15:08:15', 'Teacher', 'Logged in'),
(117, 3, '2018-03-01 15:09:07', 'Teacher', 'Logged out'),
(118, 1, '2018-03-02 05:12:18', 'Administrator', 'Logged in'),
(119, 1, '2018-03-02 05:15:45', 'Administrator', 'Logged out'),
(120, 3, '2018-03-02 05:16:02', 'Teacher', 'Logged in'),
(121, 3, '2018-03-02 05:16:48', 'Teacher', 'Logged out'),
(122, 1, '2018-03-02 05:16:54', 'Administrator', 'Logged in'),
(123, 1, '2018-03-02 05:20:52', 'Administrator', 'Logged out'),
(124, 3, '2018-03-02 05:20:58', 'Teacher', 'Logged in'),
(125, 1, '2018-03-02 15:10:43', 'Administrator', 'Logged in'),
(126, 1, '2018-03-02 15:10:57', 'Administrator', 'Logged out'),
(127, 1, '2018-03-02 15:24:19', 'Administrator', 'Logged in'),
(128, 1, '2018-03-02 15:24:43', 'Administrator', 'Logged out'),
(129, 1, '2018-03-02 15:33:35', 'Administrator', 'Logged in'),
(130, 1, '2018-03-02 15:36:03', 'Administrator', 'Logged out'),
(131, 1, '2018-03-04 15:15:42', 'Administrator', 'Logged in'),
(132, 1, '2018-03-04 15:20:49', 'Administrator', 'Logged out'),
(133, 3, '2018-03-04 15:20:56', 'Teacher', 'Logged in'),
(134, 3, '2018-03-04 15:22:21', 'Teacher', 'Logged out'),
(135, 1, '2018-03-04 15:22:27', 'Administrator', 'Logged in'),
(136, 1, '2018-03-04 15:23:18', 'Administrator', 'Logged out'),
(137, 3, '2018-03-04 15:23:25', 'Teacher', 'Logged in'),
(138, 3, '2018-03-04 15:24:21', 'Teacher', 'Logged out'),
(139, 1, '2018-03-04 15:24:26', 'Administrator', 'Logged in'),
(140, 1, '2018-03-04 15:26:07', 'Administrator', 'Logged out'),
(141, 3, '2018-03-04 15:26:13', 'Teacher', 'Logged in'),
(142, 3, '2018-03-04 15:30:00', 'Teacher', 'Logged out'),
(143, 1, '2018-03-04 15:30:05', 'Administrator', 'Logged in'),
(144, 1, '2018-03-04 15:52:04', 'Administrator', 'Logged out'),
(145, 3, '2018-03-04 15:52:22', 'Teacher', 'Logged in'),
(146, 3, '2018-03-04 15:52:42', 'Teacher', 'Logged out'),
(147, 1, '2018-03-04 15:52:49', 'Administrator', 'Logged in'),
(148, 1, '2018-03-04 15:54:07', 'Administrator', 'Logged out'),
(149, 3, '2018-03-04 15:54:13', 'Teacher', 'Logged in'),
(150, 3, '2018-03-04 15:55:45', 'Teacher', 'Logged out'),
(151, 1, '2018-03-04 16:22:42', 'Administrator', 'Logged in'),
(152, 1, '2018-03-04 18:49:56', 'Administrator', 'Logged out'),
(153, 3, '2018-03-04 18:50:09', 'Teacher', 'Logged in'),
(154, 3, '2018-03-04 18:50:39', 'Teacher', 'Logged out'),
(155, 1, '2018-03-04 18:50:49', 'Administrator', 'Logged in'),
(156, 1, '2018-03-04 18:51:33', 'Administrator', 'Logged out'),
(157, 3, '2018-03-04 18:51:39', 'Teacher', 'Logged in'),
(158, 3, '2018-03-04 18:51:57', 'Teacher', 'Logged out'),
(159, 1, '2018-03-04 18:52:06', 'Administrator', 'Logged in'),
(160, 1, '2018-03-04 18:53:14', 'Administrator', 'Logged out'),
(161, 3, '2018-03-04 18:53:23', 'Teacher', 'Logged in'),
(162, 3, '2018-03-04 18:53:36', 'Teacher', 'Logged out'),
(163, 1, '2018-03-04 18:54:04', 'Administrator', 'Logged in'),
(164, 1, '2018-03-04 19:06:42', 'Administrator', 'Logged out'),
(165, 3, '2018-03-04 19:06:56', 'Teacher', 'Logged in'),
(166, 3, '2018-03-04 19:07:12', 'Teacher', 'Logged out'),
(167, 1, '2018-03-04 19:07:18', 'Administrator', 'Logged in'),
(168, 1, '2018-03-04 19:09:51', 'Administrator', 'Logged out'),
(169, 3, '2018-03-04 19:09:58', 'Teacher', 'Logged in'),
(170, 3, '2018-03-04 19:18:11', 'Teacher', 'Logged out'),
(171, 1, '2018-03-04 19:24:41', 'Administrator', 'Logged in'),
(172, 1, '2018-03-04 19:34:01', 'Administrator', 'Logged out'),
(173, 3, '2018-03-04 19:34:11', 'Teacher', 'Logged in'),
(174, 3, '2018-03-04 19:35:13', 'Teacher', 'Logged out'),
(175, 1, '2018-03-04 19:35:19', 'Administrator', 'Logged in'),
(176, 1, '2018-03-04 19:35:37', 'Administrator', 'Logged out'),
(177, 1, '2018-03-04 19:36:24', 'Administrator', 'Logged in'),
(178, 20160530, '2018-03-04 19:37:17', 'Student', 'Logged in'),
(179, 20160530, '2018-03-04 19:38:09', 'Student', 'Logged out'),
(180, 1, '2018-03-04 19:54:00', 'Administrator', 'Logged out'),
(181, 3, '2018-03-04 19:54:13', 'Teacher', 'Logged in'),
(182, 3, '2018-03-04 19:54:27', 'Teacher', 'Logged out'),
(183, 1, '2018-03-04 19:54:32', 'Administrator', 'Logged in'),
(184, 1, '2018-03-04 19:55:43', 'Administrator', 'Logged out'),
(185, 3, '2018-03-04 19:55:54', 'Teacher', 'Logged in'),
(186, 3, '2018-03-04 19:56:18', 'Teacher', 'Logged out'),
(187, 1, '2018-03-04 19:56:23', 'Administrator', 'Logged in'),
(188, 1, '2018-03-04 19:57:08', 'Administrator', 'Logged out'),
(189, 3, '2018-03-04 19:57:15', 'Teacher', 'Logged in'),
(190, 3, '2018-03-04 19:58:24', 'Teacher', 'Logged out'),
(191, 1, '2018-03-04 19:58:34', 'Administrator', 'Logged in'),
(192, 1, '2018-03-04 19:59:42', 'Administrator', 'Logged out'),
(193, 3, '2018-03-04 19:59:48', 'Teacher', 'Logged in'),
(194, 3, '2018-03-04 20:00:43', 'Teacher', 'Logged out'),
(195, 1, '2018-03-04 20:00:48', 'Administrator', 'Logged in'),
(196, 1, '2018-03-04 20:06:33', 'Administrator', 'Logged out'),
(197, 3, '2018-03-04 20:06:45', 'Teacher', 'Logged in'),
(198, 3, '2018-03-04 20:17:39', 'Teacher', 'Logged in'),
(199, 3, '2018-03-04 20:32:04', 'Teacher', 'Logged out'),
(200, 1, '2018-03-04 20:32:09', 'Administrator', 'Logged in'),
(201, 123456, '2018-03-04 20:32:44', 'Student', 'Logged in'),
(202, 123456, '2018-03-04 20:33:09', 'Student', 'Logged out'),
(203, 1, '2018-03-04 20:33:21', 'Administrator', 'Logged out'),
(204, 3, '2018-03-08 17:47:23', 'Teacher', 'Logged in'),
(205, 3, '2018-03-08 18:11:08', 'Teacher', 'Logged in'),
(206, 3, '2018-03-08 18:15:32', 'Teacher', 'Logged out'),
(207, 1, '2018-03-08 18:15:40', 'Administrator', 'Logged in'),
(208, 1, '2018-03-08 18:16:01', 'Administrator', 'Logged out'),
(209, 3, '2018-03-08 18:16:09', 'Teacher', 'Logged in'),
(210, 2018, '2018-03-08 18:16:35', 'Student', 'Logged in'),
(211, 3, '2018-03-09 04:36:23', 'Teacher', 'Logged in'),
(212, 3, '2018-03-09 04:36:24', 'Teacher', 'Logged in'),
(213, 3, '2018-03-09 15:09:05', 'Teacher', 'Logged in'),
(214, 3, '2018-03-09 16:28:11', 'Teacher', 'Logged out'),
(215, 1, '2018-03-09 16:28:17', 'Administrator', 'Logged in'),
(216, 523412, '2018-03-09 16:28:36', 'Student', 'Logged in'),
(217, 523412, '2018-03-09 16:35:00', 'Student', 'Logged out'),
(218, 1, '2018-03-09 16:35:19', 'Administrator', 'Logged out'),
(219, 3, '2018-03-09 16:35:26', 'Teacher', 'Logged in'),
(220, 1, '2018-03-09 18:00:10', 'Administrator', 'Logged out'),
(221, 2, '2018-03-09 18:00:14', 'Teacher', 'Logged in'),
(222, 2, '2018-03-09 18:00:32', 'Teacher', 'Logged out'),
(223, 1, '2018-03-09 18:00:36', 'Administrator', 'Logged in'),
(224, 1, '2018-03-09 18:01:28', 'Administrator', 'Logged out'),
(225, 2, '2018-03-09 18:01:33', 'Teacher', 'Logged in'),
(226, 2, '2018-03-09 18:09:21', 'Teacher', 'Logged out'),
(227, 1, '2018-03-09 18:09:27', 'Administrator', 'Logged in'),
(228, 1, '2018-03-09 18:11:15', 'Administrator', 'Logged out'),
(229, 2, '2018-03-09 18:11:19', 'Teacher', 'Logged in'),
(230, 2, '2018-03-09 18:11:22', 'Teacher', 'Logged out'),
(231, 1, '2018-03-09 18:11:27', 'Administrator', 'Logged in'),
(232, 1, '2018-03-09 18:12:08', 'Administrator', 'Logged out'),
(233, 2, '2018-03-09 18:12:14', 'Teacher', 'Logged in'),
(234, 2, '2018-03-09 18:12:38', 'Teacher', 'Logged out'),
(235, 1, '2018-03-09 18:12:42', 'Administrator', 'Logged in'),
(236, 8765432, '2018-03-09 18:13:23', 'Student', 'Logged in'),
(237, 1, '2018-03-09 19:28:48', 'Administrator', 'Logged out'),
(238, 2, '2018-03-09 19:28:52', 'Teacher', 'Logged in'),
(239, 1, '2018-03-10 07:50:23', 'Administrator', 'Logged in'),
(240, 8765432, '2018-03-10 07:50:43', 'Student', 'Logged in'),
(241, 1, '2018-03-10 08:19:03', 'Administrator', 'Logged out'),
(242, 1, '2018-03-10 08:19:07', 'Administrator', 'Logged in'),
(243, 1, '2018-03-10 08:19:12', 'Administrator', 'Logged out'),
(244, 2, '2018-03-10 08:19:16', 'Teacher', 'Logged in'),
(245, 2, '2018-03-10 08:21:08', 'Teacher', 'Logged out'),
(246, 1, '2018-03-10 08:21:12', 'Administrator', 'Logged in'),
(247, 1, '2018-03-10 08:21:28', 'Administrator', 'Logged out'),
(248, 2, '2018-03-10 08:21:31', 'Teacher', 'Logged in'),
(249, 2, '2018-03-10 10:25:25', 'Teacher', 'Logged out'),
(250, 1, '2018-03-10 10:25:29', 'Administrator', 'Logged in'),
(251, 1, '2018-03-10 12:59:34', 'Administrator', 'Logged in'),
(252, 1, '2018-03-10 13:07:03', 'Administrator', 'Logged out'),
(253, 1, '2018-03-10 13:07:25', 'Administrator', 'Logged in'),
(254, 1, '2018-03-10 13:07:38', 'Administrator', 'Logged out'),
(255, 3, '2018-03-10 13:07:46', 'Teacher', 'Logged in'),
(256, 2018, '2018-03-10 13:09:27', 'Student', 'Logged in'),
(257, 2018, '2018-03-10 13:26:12', 'Student', 'Logged out'),
(258, 2018, '2018-03-10 13:26:19', 'Student', 'Logged in'),
(259, 1, '2018-03-14 19:18:12', 'Administrator', 'Logged in'),
(260, 1, '2018-03-14 19:18:23', 'Administrator', 'Logged out'),
(261, 3, '2018-03-14 19:18:37', 'Teacher', 'Logged in'),
(262, 3, '2018-03-14 19:21:12', 'Teacher', 'Logged out'),
(263, 1, '2018-03-14 19:21:17', 'Administrator', 'Logged in'),
(264, 1, '2018-03-14 19:22:20', 'Administrator', 'Logged out'),
(265, 3, '2018-03-14 19:22:27', 'Teacher', 'Logged in'),
(266, 3, '2018-03-14 19:23:22', 'Teacher', 'Logged out'),
(267, 1, '2018-03-14 19:23:26', 'Administrator', 'Logged in'),
(268, 1, '2018-03-14 19:26:13', 'Administrator', 'Logged out'),
(269, 3, '2018-03-14 19:26:23', 'Teacher', 'Logged in'),
(270, 3, '2018-03-14 19:41:48', 'Teacher', 'Logged out'),
(271, 1, '2018-03-14 19:44:01', 'Administrator', 'Logged in'),
(272, 1, '2018-03-15 04:58:55', 'Administrator', 'Logged in'),
(273, 1, '2018-03-15 04:59:04', 'Administrator', 'Logged out'),
(274, 3, '2018-03-15 04:59:11', 'Teacher', 'Logged in'),
(275, 3, '2018-03-15 06:31:24', 'Teacher', 'Logged out'),
(276, 1, '2018-03-15 06:31:29', 'Administrator', 'Logged in'),
(277, 52123, '2018-03-15 06:31:55', 'Student', 'Logged in'),
(278, 1, '2018-03-15 06:32:20', 'Administrator', 'Logged out'),
(279, 3, '2018-03-15 06:32:27', 'Teacher', 'Logged in'),
(280, 1, '2018-03-15 15:52:07', 'Administrator', 'Logged in'),
(281, 201801, '2018-03-15 16:03:40', 'Student', 'Logged in'),
(282, 1, '2018-03-15 16:04:06', 'Administrator', 'Logged out'),
(283, 3, '2018-03-15 16:04:12', 'Teacher', 'Logged in'),
(284, 3, '2018-03-15 16:12:21', 'Teacher', 'Logged out'),
(285, 1, '2018-03-15 16:12:27', 'Administrator', 'Logged in'),
(286, 201801, '2018-03-15 16:13:13', 'Student', 'Logged out'),
(287, 1, '2018-03-15 16:19:02', 'Administrator', 'Logged out'),
(288, 3, '2018-03-15 16:19:10', 'Teacher', 'Logged in'),
(289, 3, '2018-03-15 16:38:27', 'Teacher', 'Logged out'),
(290, 1, '2018-03-15 16:38:35', 'Administrator', 'Logged in'),
(291, 3, '2018-03-15 16:54:47', 'Teacher', 'Logged out'),
(292, 1, '2018-03-15 16:55:23', 'Administrator', 'Logged in'),
(293, 1, '2018-03-15 16:58:11', 'Administrator', 'Logged out'),
(294, 3, '2018-03-15 16:58:23', 'Teacher', 'Logged in'),
(295, 3, '2018-03-15 16:58:43', 'Teacher', 'Logged out'),
(296, 1, '2018-03-15 16:58:48', 'Administrator', 'Logged in'),
(297, 1, '2018-03-15 17:00:09', 'Administrator', 'Logged out'),
(298, 3, '2018-03-15 17:00:24', 'Teacher', 'Logged in'),
(299, 1983, '2018-03-15 17:03:33', 'Student', 'Logged in'),
(300, 3, '2018-03-15 17:39:34', 'Teacher', 'Logged out'),
(301, 1, '2018-03-15 17:39:40', 'Administrator', 'Logged in'),
(302, 1, '2018-03-15 17:43:01', 'Administrator', 'Logged out'),
(303, 3, '2018-03-15 17:43:08', 'Teacher', 'Logged in'),
(304, 3, '2018-03-15 18:00:13', 'Teacher', 'Logged out'),
(305, 1, '2018-03-15 18:00:21', 'Administrator', 'Logged in'),
(306, 1, '2018-03-15 18:01:56', 'Administrator', 'Logged out'),
(307, 3, '2018-03-15 18:02:03', 'Teacher', 'Logged in'),
(308, 1983, '2018-03-15 18:03:08', 'Student', 'Logged out'),
(309, 1234, '2018-03-15 18:03:42', 'Student', 'Logged in'),
(310, 1234, '2018-03-15 19:55:29', 'Student', 'Logged out'),
(311, 3, '2018-03-15 19:55:49', 'Teacher', 'Logged out'),
(312, 1983, '2018-03-16 01:16:07', 'Student', 'Logged in'),
(313, 1983, '2018-03-16 01:26:04', 'Student', 'Logged out'),
(314, 1983, '2018-03-16 01:26:18', 'Student', 'Logged in'),
(315, 1983, '2018-03-16 01:26:47', 'Student', 'Logged out'),
(316, 1983, '2018-03-17 16:34:46', 'Student', 'Logged in'),
(317, 1983, '2018-03-17 16:46:32', 'Student', 'Logged out'),
(318, 1, '2018-03-17 16:48:43', 'Administrator', 'Logged in'),
(319, 1983, '2018-03-17 18:46:54', 'Student', 'Logged in'),
(320, 1, '2018-03-17 19:47:31', 'Administrator', 'Logged in'),
(321, 1, '2018-03-17 19:48:55', 'Administrator', 'Logged out'),
(322, 1, '2018-03-17 19:51:09', 'Administrator', 'Logged in'),
(323, 1, '2018-03-17 19:53:34', 'Administrator', 'Logged in'),
(324, 1, '2018-03-17 19:56:18', 'Administrator', 'Logged out'),
(325, 1, '2018-03-17 19:56:27', 'Administrator', 'Logged in'),
(326, 1983, '2018-03-17 19:58:07', 'Student', 'Logged in'),
(327, 1, '2018-03-17 19:59:05', 'Administrator', 'Logged out'),
(328, 3, '2018-03-17 19:59:14', 'Teacher', 'Logged in'),
(329, 1983, '2018-03-17 20:28:36', 'Student', 'Logged out'),
(330, 1983, '2018-03-17 20:29:20', 'Student', 'Logged in'),
(331, 1983, '2018-03-17 20:32:12', 'Student', 'Logged out'),
(332, 1983, '2018-03-17 20:32:19', 'Student', 'Logged in'),
(333, 1983, '2018-03-17 21:50:07', 'Student', 'Logged out'),
(334, 1983, '2018-03-17 21:50:39', 'Student', 'Logged in'),
(335, 1983, '2018-03-17 22:40:29', 'Student', 'Logged in'),
(336, 1, '2018-03-17 22:41:36', 'Administrator', 'Logged in'),
(337, 1983, '2018-03-17 22:43:00', 'Student', 'Logged out'),
(338, 1, '2018-03-17 22:43:06', 'Administrator', 'Logged out'),
(339, 1983, '2018-03-18 08:27:51', 'Student', 'Logged in'),
(340, 1, '2018-03-18 08:28:29', 'Administrator', 'Logged in'),
(341, 1, '2018-03-18 08:29:11', 'Administrator', 'Logged out'),
(342, 1983, '2018-03-18 08:29:17', 'Student', 'Logged out'),
(343, 1983, '2018-03-19 08:24:53', 'Student', 'Logged in'),
(344, 1, '2018-03-19 08:33:23', 'Administrator', 'Logged in'),
(345, 1, '2018-03-19 08:33:51', 'Administrator', 'Logged out'),
(346, 3, '2018-03-19 08:33:59', 'Teacher', 'Logged in'),
(347, 3, '2018-03-19 08:40:28', 'Teacher', 'Logged out'),
(348, 1983, '2018-03-19 08:42:54', 'Student', 'Logged out'),
(349, 1, '2018-03-19 09:21:21', 'Administrator', 'Logged in'),
(350, 1, '2018-03-19 09:21:36', 'Administrator', 'Logged out'),
(351, 3, '2018-03-19 09:21:48', 'Teacher', 'Logged in'),
(352, 3, '2018-03-19 09:25:43', 'Teacher', 'Logged out'),
(353, 1983, '2018-03-19 10:02:38', 'Student', 'Logged in'),
(354, 1983, '2018-03-19 10:25:01', 'Student', 'Logged out'),
(355, 1983, '2018-03-19 10:25:38', 'Student', 'Logged in'),
(356, 3, '2018-03-19 11:41:25', 'Teacher', 'Logged in'),
(357, 1983, '2018-03-19 11:46:31', 'Student', 'Logged out'),
(358, 1, '2018-03-30 16:18:38', 'Administrator', 'Logged in'),
(359, 1983, '2018-03-30 16:18:50', 'Student', 'Logged in'),
(360, 1983, '2018-03-30 16:19:05', 'Student', 'Logged out'),
(361, 1, '2018-03-30 16:19:10', 'Administrator', 'Logged out'),
(362, 1, '2018-06-08 16:58:44', 'Administrator', 'Logged in'),
(363, 1, '2018-06-08 16:59:39', 'Administrator', 'Logged out'),
(364, 3, '2018-06-10 14:48:37', 'Teacher', 'Logged in'),
(365, 1, '2018-06-10 15:02:13', 'Administrator', 'Logged in'),
(366, 1, '2018-06-10 15:02:38', 'Administrator', 'Logged out'),
(367, 3, '2018-06-10 15:02:54', 'Teacher', 'Logged in'),
(368, 1983, '2018-06-10 15:04:31', 'Student', 'Logged in'),
(369, 3, '2018-06-10 15:17:22', 'Teacher', 'Logged out'),
(370, 1, '2018-06-11 04:01:15', 'Administrator', 'Logged in'),
(371, 1, '2018-06-11 04:01:31', 'Administrator', 'Logged out'),
(372, 3, '2018-06-11 04:01:41', 'Teacher', 'Logged in'),
(373, 235, '2018-06-11 04:08:11', 'Student', 'Logged in'),
(374, 235, '2018-06-11 04:14:46', 'Student', 'Logged out'),
(375, 235, '2018-06-11 04:15:24', 'Student', 'Logged in'),
(376, 3, '2018-06-11 06:15:48', 'Teacher', 'Logged out'),
(377, 3, '2018-06-12 14:26:29', 'Teacher', 'Logged in'),
(378, 1983, '2018-06-12 14:33:50', 'Student', 'Logged in'),
(379, 3, '2018-06-12 14:35:26', 'Teacher', 'Logged in'),
(380, 1983, '2018-06-12 15:34:34', 'Student', 'Logged out'),
(381, 235, '2018-06-12 15:34:53', 'Student', 'Logged in'),
(382, 3, '2018-06-12 15:40:18', 'Teacher', 'Logged out'),
(383, 1, '2018-06-12 15:40:48', 'Administrator', 'Logged in'),
(384, 1, '2018-06-12 15:42:25', 'Administrator', 'Logged out'),
(385, 3, '2018-06-12 15:42:35', 'Teacher', 'Logged in'),
(386, 235, '2018-06-12 16:08:26', 'Student', 'Logged out'),
(387, 1983, '2018-06-12 16:08:35', 'Student', 'Logged in'),
(388, 1983, '2018-06-12 16:08:53', 'Student', 'Logged out'),
(389, 235, '2018-06-12 16:09:08', 'Student', 'Logged in'),
(390, 3, '2018-06-12 17:09:57', 'Teacher', 'Logged out'),
(391, 235, '2018-06-12 17:10:06', 'Student', 'Logged out'),
(392, 1, '2018-06-14 15:42:51', 'Administrator', 'Logged in'),
(393, 1, '2018-06-14 15:55:38', 'Administrator', 'Logged out'),
(394, 1, '2018-06-28 06:36:26', 'Administrator', 'Logged in'),
(395, 1, '2018-06-28 06:36:35', 'Administrator', 'Logged out'),
(396, 3, '2018-06-28 06:36:44', 'Teacher', 'Logged in'),
(397, 1983, '2018-06-28 06:39:48', 'Student', 'Logged in'),
(398, 1983, '2018-06-28 06:40:37', 'Student', 'Logged out'),
(399, 3, '2018-06-28 06:41:38', 'Teacher', 'Logged in'),
(400, 3, '2018-06-28 07:03:41', 'Teacher', 'Logged out'),
(401, 3, '2018-06-28 07:03:52', 'Teacher', 'Logged in'),
(402, 3, '2018-06-28 11:58:20', 'Teacher', 'Logged in'),
(403, 3, '2018-06-28 11:59:03', 'Teacher', 'Logged out'),
(404, 3, '2018-06-28 14:25:35', 'Teacher', 'Logged in'),
(405, 1983, '2018-06-28 14:28:10', 'Student', 'Logged in'),
(406, 1983, '2018-06-28 14:30:48', 'Student', 'Logged out'),
(407, 1983, '2018-06-28 14:31:05', 'Student', 'Logged in'),
(408, 1983, '2018-06-28 14:31:31', 'Student', 'Logged out'),
(409, 235, '2018-06-28 14:32:06', 'Student', 'Logged in'),
(410, 235, '2018-06-28 14:32:23', 'Student', 'Logged out'),
(411, 3, '2018-06-28 14:32:39', 'Teacher', 'Logged out'),
(412, 3, '2018-06-28 14:33:22', 'Teacher', 'Logged in'),
(413, 1, '2018-06-28 15:21:18', 'Administrator', 'Logged in'),
(414, 1, '2018-06-28 15:23:15', 'Administrator', 'Logged out'),
(415, 3, '2018-06-28 15:23:28', 'Teacher', 'Logged in'),
(416, 9090, '2018-06-28 15:36:01', 'Student', 'Logged in'),
(417, 9090, '2018-06-28 15:38:42', 'Student', 'Logged out'),
(418, 3, '2018-06-28 15:38:51', 'Teacher', 'Logged out'),
(419, 1, '2018-06-28 15:39:01', 'Administrator', 'Logged in'),
(420, 1, '2018-06-28 15:39:35', 'Administrator', 'Logged out'),
(421, 4, '2018-06-28 15:39:45', 'Teacher', 'Logged in'),
(422, 4, '2018-06-28 15:39:56', 'Teacher', 'Logged out'),
(423, 1, '2018-06-28 15:40:04', 'Administrator', 'Logged in'),
(424, 1, '2018-06-28 15:41:41', 'Administrator', 'Logged out'),
(425, 4, '2018-06-28 15:41:53', 'Teacher', 'Logged in'),
(426, 4, '2018-06-28 15:46:31', 'Teacher', 'Logged out'),
(427, 1, '2018-06-28 15:48:28', 'Administrator', 'Logged in'),
(428, 1, '2018-06-28 15:52:02', 'Administrator', 'Logged out'),
(429, 3, '2018-06-28 15:52:13', 'Teacher', 'Logged in'),
(430, 1830, '2018-06-28 15:54:16', 'Student', 'Logged in'),
(431, 1830, '2018-06-28 15:59:30', 'Student', 'Logged out'),
(432, 1830, '2018-06-28 15:59:44', 'Student', 'Logged in'),
(433, 1830, '2018-06-28 16:00:07', 'Student', 'Logged out'),
(434, 1830, '2018-06-28 16:00:39', 'Student', 'Logged in'),
(435, 1830, '2018-06-28 16:01:00', 'Student', 'Logged out'),
(436, 9090, '2018-06-28 16:04:02', 'Student', 'Logged in'),
(437, 9090, '2018-06-28 16:07:42', 'Student', 'Logged out'),
(438, 3, '2018-06-28 16:07:49', 'Teacher', 'Logged out'),
(439, 1, '2018-07-18 15:04:04', 'Administrator', 'Logged in'),
(440, 1, '2018-07-18 15:05:42', 'Administrator', 'Logged out'),
(441, 3, '2018-07-18 15:05:52', 'Teacher', 'Logged in'),
(442, 1830, '2018-07-18 15:06:11', 'Student', 'Logged in'),
(443, 1830, '2018-07-18 15:06:43', 'Student', 'Logged out'),
(444, 3, '2018-07-18 15:11:44', 'Teacher', 'Logged out'),
(445, 1, '2018-07-18 18:23:18', 'Administrator', 'Logged in'),
(446, 1, '2018-07-18 18:34:19', 'Administrator', 'Logged out'),
(447, 3, '2018-07-18 18:34:38', 'Teacher', 'Logged in'),
(448, 3, '2018-07-18 19:09:03', 'Teacher', 'Logged out'),
(449, 1, '2018-08-02 17:18:34', 'Administrator', 'Logged in'),
(450, 1, '2018-08-02 17:18:42', 'Administrator', 'Logged out'),
(451, 1, '2018-08-02 17:19:04', 'Administrator', 'Logged in'),
(452, 1, '2018-08-02 17:22:02', 'Administrator', 'Logged out'),
(453, 1, '2018-08-02 17:22:12', 'Administrator', 'Logged in'),
(454, 1, '2018-08-02 17:24:09', 'Administrator', 'Logged out'),
(455, 3, '2018-08-02 17:24:22', 'Teacher', 'Logged in'),
(456, 3, '2018-08-02 17:25:01', 'Teacher', 'Logged out'),
(457, 3, '2018-08-02 17:25:11', 'Teacher', 'Logged in'),
(458, 3, '2018-08-02 17:25:42', 'Teacher', 'Logged out'),
(459, 1, '2018-08-02 17:25:50', 'Administrator', 'Logged in'),
(460, 1, '2018-08-02 17:27:31', 'Administrator', 'Logged out'),
(461, 3, '2018-08-02 17:27:42', 'Teacher', 'Logged in'),
(462, 1830, '2018-08-02 18:36:55', 'Student', 'Logged in'),
(463, 3, '2018-08-02 18:45:13', 'Teacher', 'Logged out'),
(464, 3, '2018-08-02 18:45:25', 'Teacher', 'Logged in'),
(465, 1830, '2018-08-02 18:48:26', 'Student', 'Logged out'),
(466, 1830, '2018-08-02 18:48:37', 'Student', 'Logged in'),
(467, 1830, '2018-08-02 18:49:23', 'Student', 'Logged out'),
(468, 1, '2018-08-06 05:34:05', 'Administrator', 'Logged in'),
(469, 1, '2018-08-06 05:38:01', 'Administrator', 'Logged out'),
(470, 3, '2018-08-06 05:38:08', 'Teacher', 'Logged in'),
(471, 1, '2018-08-07 10:32:44', 'Administrator', 'Logged in'),
(472, 1, '2018-08-07 10:33:49', 'Administrator', 'Logged out'),
(473, 3, '2018-08-07 10:34:26', 'Teacher', 'Logged in'),
(474, 1830, '2018-08-07 10:35:01', 'Student', 'Logged in'),
(475, 1830, '2018-08-07 10:37:45', 'Student', 'Logged out'),
(476, 3, '2018-08-07 10:38:04', 'Teacher', 'Logged out'),
(477, 1830, '2018-08-07 10:38:42', 'Student', 'Logged in'),
(478, 1830, '2018-08-07 10:38:56', 'Student', 'Logged out'),
(479, 3, '2018-08-07 10:40:00', 'Teacher', 'Logged in'),
(480, 3, '2018-08-07 10:40:39', 'Teacher', 'Logged out'),
(481, 1, '2018-08-07 10:54:18', 'Administrator', 'Logged in'),
(482, 1830, '2018-08-07 10:55:14', 'Student', 'Logged in'),
(483, 1830, '2018-08-07 10:55:41', 'Student', 'Logged out'),
(484, 1, '2018-08-07 10:57:34', 'Administrator', 'Logged out'),
(485, 1, '2018-08-07 11:25:54', 'Administrator', 'Logged in'),
(486, 1830, '2018-08-07 11:26:44', 'Student', 'Logged in'),
(487, 1, '2018-08-07 11:28:08', 'Administrator', 'Logged out'),
(488, 3, '2018-08-07 11:28:19', 'Teacher', 'Logged in'),
(489, 3, '2018-08-07 11:29:28', 'Teacher', 'Logged out'),
(490, 1830, '2018-08-07 11:30:02', 'Student', 'Logged out'),
(491, 1830, '2018-08-07 13:15:43', 'Student', 'Logged in'),
(492, 1830, '2018-08-07 13:15:57', 'Student', 'Logged out'),
(493, 1830, '2018-08-07 15:17:39', 'Student', 'Logged in'),
(494, 3, '2018-08-07 15:18:55', 'Teacher', 'Logged in'),
(495, 3, '2018-08-07 15:29:33', 'Teacher', 'Logged out'),
(496, 1, '2018-08-07 15:29:41', 'Administrator', 'Logged in'),
(497, 1830, '2018-08-07 15:30:20', 'Student', 'Logged out'),
(498, 1830, '2018-08-07 16:14:56', 'Student', 'Logged in'),
(499, 1, '2018-08-07 16:22:16', 'Administrator', 'Logged out'),
(500, 3, '2018-08-07 16:22:26', 'Teacher', 'Logged in'),
(501, 1830, '2018-08-07 16:55:10', 'Student', 'Logged out'),
(502, 1830, '2018-08-07 17:36:45', 'Student', 'Logged in'),
(503, 3, '2018-08-07 17:40:32', 'Teacher', 'Logged out'),
(504, 3, '2018-08-07 17:45:33', 'Teacher', 'Logged in'),
(505, 3, '2018-08-07 17:47:14', 'Teacher', 'Logged out'),
(506, 1, '2018-08-07 17:54:42', 'Administrator', 'Logged in'),
(507, 1, '2018-08-07 17:55:02', 'Administrator', 'Logged out'),
(508, 3, '2018-08-07 17:55:26', 'Teacher', 'Logged in'),
(509, 1830, '2018-08-07 17:55:57', 'Student', 'Logged out'),
(510, 1, '2018-08-07 20:50:43', 'Administrator', 'Logged in'),
(511, 1, '2018-08-07 20:51:31', 'Administrator', 'Logged out'),
(512, 3, '2018-08-07 20:51:49', 'Teacher', 'Logged in'),
(513, 1830, '2018-08-07 20:55:17', 'Student', 'Logged in'),
(514, 1830, '2018-08-07 20:57:03', 'Student', 'Logged out'),
(515, 3, '2018-08-07 20:57:13', 'Teacher', 'Logged out'),
(516, 1, '2018-08-10 17:31:09', 'Administrator', 'Logged in'),
(517, 1, '2018-08-10 17:46:58', 'Administrator', 'Logged out'),
(518, 1, '2018-08-10 17:50:01', 'Administrator', 'Logged in'),
(519, 1, '2018-08-10 17:53:44', 'Administrator', 'Logged out'),
(520, 3, '2018-08-10 17:54:01', 'Teacher', 'Logged in'),
(521, 1983, '2018-08-10 17:55:32', 'Student', 'Logged in'),
(522, 1983, '2018-08-10 17:59:21', 'Student', 'Logged out'),
(523, 1983, '2018-08-10 17:59:43', 'Student', 'Logged in'),
(524, 3, '2018-08-10 18:02:57', 'Teacher', 'Logged out'),
(525, 1983, '2018-08-10 18:03:27', 'Student', 'Logged in'),
(526, 3, '2018-08-10 18:38:28', 'Teacher', 'Logged in'),
(527, 1983, '2018-08-10 18:39:29', 'Student', 'Logged out'),
(528, 1, '2018-08-10 19:46:34', 'Administrator', 'Logged in'),
(529, 1, '2018-08-10 19:46:47', 'Administrator', 'Logged out'),
(530, 3, '2018-08-10 19:46:58', 'Teacher', 'Logged in'),
(531, 3, '2018-08-10 19:47:07', 'Teacher', 'Logged out'),
(532, 1830, '2018-08-10 19:47:31', 'Student', 'Logged in'),
(533, 1, '2018-08-11 16:34:33', 'Administrator', 'Logged in'),
(534, 1, '2018-08-11 16:37:06', 'Administrator', 'Logged out'),
(535, 3, '2018-08-11 16:37:14', 'Teacher', 'Logged in'),
(536, 1830, '2018-08-11 16:42:18', 'Student', 'Logged in'),
(537, 1830, '2018-08-11 16:42:39', 'Student', 'Logged out'),
(538, 1830, '2018-08-11 16:43:00', 'Student', 'Logged in'),
(539, 3, '2018-08-16 09:27:47', 'Teacher', 'Logged in'),
(540, 1, '2018-09-01 20:07:13', 'Administrator', 'Logged in'),
(541, 1, '2018-09-01 20:07:21', 'Administrator', 'Logged out'),
(542, 1, '2018-09-02 09:44:19', 'Administrator', 'Logged in'),
(543, 1, '2018-09-02 09:45:18', 'Administrator', 'Logged out'),
(544, 1, '2018-09-02 09:46:06', 'Administrator', 'Logged in'),
(545, 1, '2018-09-02 09:47:57', 'Administrator', 'Logged out'),
(546, 5, '2018-09-02 09:48:03', 'Teacher', 'Logged in'),
(547, 1, '2018-09-03 01:03:44', 'Administrator', 'Logged in'),
(548, 1, '2018-09-03 02:07:01', 'Administrator', 'Logged out'),
(549, 5, '2018-09-03 02:07:08', 'Teacher', 'Logged in'),
(550, 5, '2018-09-03 02:07:45', 'Teacher', 'Logged out'),
(551, 1, '2018-09-03 02:07:51', 'Administrator', 'Logged in'),
(552, 1, '2018-09-03 02:10:05', 'Administrator', 'Logged out'),
(553, 5, '2018-09-03 02:10:11', 'Teacher', 'Logged in'),
(554, 1, '2018-09-03 04:17:16', 'Administrator', 'Logged in'),
(555, 1, '2018-09-03 04:17:28', 'Administrator', 'Logged out'),
(556, 5, '2018-09-03 04:17:34', 'Teacher', 'Logged in'),
(557, 5, '2018-09-03 04:36:13', 'Teacher', 'Logged in'),
(558, 5, '2018-09-03 04:37:11', 'Teacher', 'Logged in'),
(559, 5, '2018-09-03 05:16:25', 'Teacher', 'Logged out'),
(560, 1, '2018-09-03 05:16:33', 'Administrator', 'Logged in'),
(561, 5, '2018-09-03 05:26:10', 'Teacher', 'Logged in'),
(562, 5, '2018-09-03 05:28:05', 'Teacher', 'Logged in'),
(563, 5, '2018-09-03 06:34:39', 'Teacher', 'Logged in'),
(564, 5, '2018-09-03 07:53:46', 'Teacher', 'Logged in'),
(565, 5, '2018-09-03 08:39:30', 'Teacher', 'Logged in'),
(566, 5, '2018-09-03 08:52:25', 'Teacher', 'Logged out'),
(567, 1, '2018-09-03 08:52:31', 'Administrator', 'Logged in'),
(568, 1, '2018-09-03 08:54:38', 'Administrator', 'Logged out'),
(569, 5, '2018-09-03 08:54:44', 'Teacher', 'Logged in'),
(570, 5, '2018-09-03 12:06:00', 'Teacher', 'Logged out'),
(571, 1, '2018-09-03 12:06:08', 'Administrator', 'Logged in'),
(572, 1, '2018-09-03 12:06:39', 'Administrator', 'Logged out'),
(573, 5, '2018-09-03 12:06:48', 'Teacher', 'Logged in'),
(574, 5, '2018-09-03 15:55:08', 'Teacher', 'Logged out'),
(575, 1, '2018-09-03 15:55:14', 'Administrator', 'Logged in'),
(576, 1, '2018-09-03 15:55:46', 'Administrator', 'Logged out'),
(577, 6, '2018-09-03 15:55:53', 'Dean', 'Logged in'),
(578, 6, '2018-09-03 15:56:35', 'Dean', 'Logged out'),
(579, 6, '2018-09-03 15:56:53', 'Dean', 'Logged in'),
(580, 6, '2018-09-03 15:59:34', 'Dean', 'Logged out'),
(581, 5, '2018-09-03 15:59:40', 'Teacher', 'Logged in'),
(582, 5, '2018-09-08 14:28:03', 'Teacher', 'Logged in');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

CREATE TABLE `tblmessage` (
  `MessageID` int(11) NOT NULL,
  `MessageText` text NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `ACCOUNT_USERNAME` varchar(90) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `FROM_USER` varchar(90) NOT NULL,
  `TO_USER` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmessage`
--

INSERT INTO `tblmessage` (`MessageID`, `MessageText`, `CLASSCODE`, `ACCOUNT_USERNAME`, `IDNO`, `COURSE`, `FROM_USER`, `TO_USER`) VALUES
(1, 'helo sir?\r\n\r\n\r\npasado po ba ako', 'CSPROJ', 'bhan bhan', '', 'bhan bhan', 'teacher', 'teacher'),
(3, 'hindi ka pasado bagsak lht ng exam mo?', '', 'teacher', '', '', 'teacher', ' '),
(5, 'bagsak ka boy!!!', '', 'teacher', '', '', 'teacher', ' '),
(6, 'ayan tayo e', '', 'teacher', '', '', 'teacher', 'bhan bhan'),
(7, 'ayan tayo e', '', 'teacher', '', '', 'teacher', ' '),
(8, '', '', 'admin', '', '', 'admin', 'JAMES JAMES'),
(9, '', '', 'admin', '', '', 'admin', ' j'),
(10, 'ads', '', 't', '', '', 't', 'Jake Tam'),
(11, 'ads', '', 't', '', '', 't', ' JAMES JAMES'),
(12, 'ads', '', 't', '', '', 't', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tblpercent`
--

CREATE TABLE `tblpercent` (
  `PercentID` int(11) NOT NULL,
  `Attendance` int(11) NOT NULL,
  `Quiz` int(11) NOT NULL,
  `Lecture` int(11) NOT NULL,
  `Laboratory` int(11) NOT NULL,
  `Activity` int(11) NOT NULL,
  `Assignments` int(11) NOT NULL,
  `LongTest` int(11) NOT NULL,
  `Exam` int(11) NOT NULL,
  `Prelim` int(11) NOT NULL,
  `Midterm` int(11) NOT NULL,
  `Final` int(11) NOT NULL,
  `Grading` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpercent`
--

INSERT INTO `tblpercent` (`PercentID`, `Attendance`, `Quiz`, `Lecture`, `Laboratory`, `Activity`, `Assignments`, `LongTest`, `Exam`, `Prelim`, `Midterm`, `Final`, `Grading`) VALUES
(1, 10, 15, 10, 20, 10, 10, 10, 15, 30, 30, 40, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblquiz`
--

CREATE TABLE `tblquiz` (
  `QUIZID` int(11) NOT NULL,
  `CLASSID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(90) NOT NULL,
  `QUIZNAME` varchar(90) NOT NULL,
  `NOOFQUESTION` int(11) NOT NULL,
  `QUIZTERM` varchar(30) NOT NULL,
  `TEACHER` varchar(90) NOT NULL,
  `QUIZDATETIME` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquiz`
--

INSERT INTO `tblquiz` (`QUIZID`, `CLASSID`, `SUBJ_CODE`, `QUIZNAME`, `NOOFQUESTION`, `QUIZTERM`, `TEACHER`, `QUIZDATETIME`) VALUES
(1, 1, 'CSPROJ', 'quiz 1', 6, 'Prelim', 'Boonlambhan', '5'),
(2, 1, 'CSPROJ', 'Quiz 2', 6, 'Midterm', 'Boonlambhan', '1'),
(3, 1, 'CSPROJ', 'quiz 3', 5, 'Final', 'Boonlambhan', '1'),
(5, 2, 'ENGLISH 1', 'quiz 2', 6, 'Prelim', 'Boonlambhan', '1'),
(6, 4, 'ENGLISH 1', 'sdxd', 2, 'Prelim', 't', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tblreplymessage`
--

CREATE TABLE `tblreplymessage` (
  `ReplyID` int(11) NOT NULL,
  `MessageID` int(11) NOT NULL,
  `MessageText` text NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `ACCOUNT_USERNAME` varchar(90) NOT NULL,
  `IDNO` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblscore`
--

CREATE TABLE `tblscore` (
  `SCOREID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `QUIZID` int(11) NOT NULL,
  `TOTALQUIZ` int(11) NOT NULL,
  `STUDENTSCORE` int(11) NOT NULL,
  `QUIZAVERAGE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblscore`
--

INSERT INTO `tblscore` (`SCOREID`, `IDNO`, `QUIZID`, `TOTALQUIZ`, `STUDENTSCORE`, `QUIZAVERAGE`) VALUES
(1, '1830', 1, 6, 6, 100),
(2, '1830', 2, 6, 5, 91.666666666667),
(3, '1830', 3, 5, 5, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `MNAME` varchar(40) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `ACC_USERNAME` varchar(255) NOT NULL,
  `ACC_PASSWORD` text NOT NULL,
  `YEARLEVEL` int(11) NOT NULL,
  `SECTION` varchar(90) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `STUDPHOTO` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(90) NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `CLASSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `CONTACT_NO`, `ACC_USERNAME`, `ACC_PASSWORD`, `YEARLEVEL`, `SECTION`, `COURSE`, `STUDPHOTO`, `ACCOUNT_USERNAME`, `CLASSCODE`, `CLASSID`) VALUES
(1, '1830', 'bhan', 'bhan', 'bhan', '0931623713', 'bhan', '356a192b7913b04c54574d18c28d46e6395428ab', 3, 'B45', 'BSIT', 'student_image/Activity12.jpg', 'teacher', 'CSPROJ', 1),
(2, '1983', 'JAMES', 'JAMES', 'JAMES', '34234234234234', 'JAMES', '1aa8a9a093cd1b8a820fd6e92c62fbc6ef375b62', 1, 'B45', 'BSCS', 'student_image/Activity12.jpg', 'teacher', 'ENGLISH 1', 2),
(8, '1231123312', 'Jake', 'Tam', 'asdsa', '021312312', 'Jake', '8fd4770bf96c81c3157fd9f03b3dfbefd708cd58', 1, '1', 'BSCS', '', 't', 'ENGLISH 1', 4),
(9, '653421', 'sadasd', 'asd', 'sad', '2321312', 'sadasd', '6e9f66c588a7527098aff039722ebf0aa1c49dde', 1, '1', 'BSCS', '', 't', 'ENGLISH 1', 4),
(10, '12675432', 'James', 'Tams', 'Rac', '56342234', 'James', '3015accece2008a716be43afbcc6e3ff05c5651d', 1, '1', 'BSCS', '', 't', 'CSPROJ', 5),
(11, '1231123312', 'Jake', 'Tam', 'asdsa', '021312312', 'Jake', '8fd4770bf96c81c3157fd9f03b3dfbefd708cd58', 1, '1', 'BSCS', '', 't', 'CSPROJ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentexams`
--

CREATE TABLE `tblstudentexams` (
  `STUD_EXAM_ID` int(11) NOT NULL,
  `QUIZID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `EXAMID` int(11) NOT NULL,
  `ANSWER` varchar(255) NOT NULL,
  `ISCHECK` tinyint(1) NOT NULL,
  `TERM_EXAM` varchar(90) NOT NULL,
  `TEACHER` varchar(90) NOT NULL,
  `SUBMITTED` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudentexams`
--

INSERT INTO `tblstudentexams` (`STUD_EXAM_ID`, `QUIZID`, `IDNO`, `CLASSCODE`, `EXAMID`, `ANSWER`, `ISCHECK`, `TERM_EXAM`, `TEACHER`, `SUBMITTED`) VALUES
(1, 1, '1830', 'CSPROJ', 2017121, '2', 1, 'Prelim', 'Boonlambhan', 1),
(2, 1, '1830', 'CSPROJ', 2017126, '4', 1, 'Prelim', 'Boonlambhan', 1),
(3, 1, '1830', 'CSPROJ', 2017122, 'superman', 1, 'Prelim', 'Boonlambhan', 1),
(4, 1, '1830', 'CSPROJ', 2017123, 'True', 1, 'Prelim', 'Boonlambhan', 1),
(5, 1, '1830', 'CSPROJ', 2017125, 'true', 1, 'Prelim', 'Boonlambhan', 1),
(6, 1, '1830', 'CSPROJ', 2017124, 'love', 1, 'Prelim', 'Boonlambhan', 1),
(7, 2, '1830', 'CSPROJ', 2017127, '2', 0, 'Midterm', 'Boonlambhan', 1),
(8, 2, '1830', 'CSPROJ', 2017128, 'superman', 1, 'Midterm', 'Boonlambhan', 1),
(9, 2, '1830', 'CSPROJ', 2017129, 'True', 1, 'Midterm', 'Boonlambhan', 1),
(10, 2, '1830', 'CSPROJ', 2017132, 'False', 1, 'Midterm', 'Boonlambhan', 1),
(11, 2, '1830', 'CSPROJ', 2017130, 'love', 1, 'Midterm', 'Boonlambhan', 1),
(12, 2, '1830', 'CSPROJ', 2017131, 'true', 1, 'Midterm', 'Boonlambhan', 1),
(13, 3, '1830', 'CSPROJ', 2017133, '2', 1, 'Final', 'Boonlambhan', 1),
(14, 3, '1830', 'CSPROJ', 2017134, 'superman', 1, 'Final', 'Boonlambhan', 1),
(15, 3, '1830', 'CSPROJ', 2017135, 'True', 1, 'Final', 'Boonlambhan', 1),
(16, 3, '1830', 'CSPROJ', 2017137, 'true', 1, 'Final', 'Boonlambhan', 1),
(17, 3, '1830', 'CSPROJ', 2017136, 'love', 1, 'Final', 'Boonlambhan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentmessage`
--

CREATE TABLE `tblstudentmessage` (
  `SMID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `MessageID` int(11) NOT NULL,
  `MessageText` text NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `CLASSCODE` varchar(90) NOT NULL,
  `MessageView` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `SUBJ_ID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `PreTaken` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `PreTaken`) VALUES
(1, 'CSPROJ', 'CS RESEARCH', 0, 'None', 0, '', 0),
(2, 'ENGLISH 1', 'TECHNICAL WRITTING', 0, 'None', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` int(11) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `USERIMAGE`) VALUES
(1, 'administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 1234, 'photos/random blue.PNG'),
(3, 'Boonlambhan', 'teacher', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'Teacher', 0, 'photos/logo.jpg'),
(4, 'Michael ', 'Pasia', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Teacher', 0, ''),
(5, 't', 't', '8efd86fb78a56a5145ed7739dcb00c78581c5375', 'Teacher', 0, ''),
(6, 'Dean', 'dean', 'ba6f564cd70a52d664c374158c4dbcf519ddf158', 'Dean', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblauto`
--
ALTER TABLE `tblauto`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`CLASSID`);

--
-- Indexes for table `tblexams`
--
ALTER TABLE `tblexams`
  ADD PRIMARY KEY (`EXAMID`);

--
-- Indexes for table `tblgrade`
--
ALTER TABLE `tblgrade`
  ADD PRIMARY KEY (`GRADEID`);

--
-- Indexes for table `tblgrades`
--
ALTER TABLE `tblgrades`
  ADD PRIMARY KEY (`GRADEID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblmessage`
--
ALTER TABLE `tblmessage`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `tblpercent`
--
ALTER TABLE `tblpercent`
  ADD PRIMARY KEY (`PercentID`);

--
-- Indexes for table `tblquiz`
--
ALTER TABLE `tblquiz`
  ADD PRIMARY KEY (`QUIZID`);

--
-- Indexes for table `tblreplymessage`
--
ALTER TABLE `tblreplymessage`
  ADD PRIMARY KEY (`ReplyID`);

--
-- Indexes for table `tblscore`
--
ALTER TABLE `tblscore`
  ADD PRIMARY KEY (`SCOREID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `tblstudentexams`
--
ALTER TABLE `tblstudentexams`
  ADD PRIMARY KEY (`STUD_EXAM_ID`);

--
-- Indexes for table `tblstudentmessage`
--
ALTER TABLE `tblstudentmessage`
  ADD PRIMARY KEY (`SMID`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`SUBJ_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblauto`
--
ALTER TABLE `tblauto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `CLASSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblexams`
--
ALTER TABLE `tblexams`
  MODIFY `EXAMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017144;

--
-- AUTO_INCREMENT for table `tblgrade`
--
ALTER TABLE `tblgrade`
  MODIFY `GRADEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblgrades`
--
ALTER TABLE `tblgrades`
  MODIFY `GRADEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=583;

--
-- AUTO_INCREMENT for table `tblmessage`
--
ALTER TABLE `tblmessage`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblpercent`
--
ALTER TABLE `tblpercent`
  MODIFY `PercentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblquiz`
--
ALTER TABLE `tblquiz`
  MODIFY `QUIZID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblreplymessage`
--
ALTER TABLE `tblreplymessage`
  MODIFY `ReplyID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblscore`
--
ALTER TABLE `tblscore`
  MODIFY `SCOREID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblstudentexams`
--
ALTER TABLE `tblstudentexams`
  MODIFY `STUD_EXAM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblstudentmessage`
--
ALTER TABLE `tblstudentmessage`
  MODIFY `SMID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

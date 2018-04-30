-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2018 at 06:24 PM
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
-- Database: `aly`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `AddressID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address1ID` int(11) NOT NULL,
  PRIMARY KEY (`AddressID`),
  KEY `Address1ID` (`Address1ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`AddressID`, `Name`, `Address1ID`) VALUES
(1, 'sd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`adminID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

DROP TABLE IF EXISTS `balance`;
CREATE TABLE IF NOT EXISTS `balance` (
  `BalanceID` int(11) NOT NULL AUTO_INCREMENT,
  `Expenses` float NOT NULL,
  `Profit` float NOT NULL,
  PRIMARY KEY (`BalanceID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

DROP TABLE IF EXISTS `buses`;
CREATE TABLE IF NOT EXISTS `buses` (
  `BusID` int(11) NOT NULL AUTO_INCREMENT,
  `ChildID` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `AddressID` int(11) NOT NULL,
  PRIMARY KEY (`BusID`),
  KEY `ChildID` (`ChildID`),
  KEY `EmployeeID` (`EmployeeID`),
  KEY `AddressID` (`AddressID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `ChildID` int(11) NOT NULL AUTO_INCREMENT,
  `ParentID` int(11) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `UserID` int(11) NOT NULL,
  `DateOfEnrollment` date NOT NULL,
  `EmergencyMobileNumber` int(11) NOT NULL,
  `AllergyType` varchar(100) NOT NULL,
  `GroupName` varchar(255) NOT NULL,
  PRIMARY KEY (`ChildID`),
  KEY `ParentID` (`ParentID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`ChildID`, `ParentID`, `DateOfBirth`, `UserID`, `DateOfEnrollment`, `EmergencyMobileNumber`, `AllergyType`, `GroupName`) VALUES
(3, 1, '2018-04-17', 2, '2018-04-10', 78989878, 'ahm', 'level2'),
(7, 1, '2018-04-04', 7, '2018-04-03', 7474777, 'ssd', 'level2'),
(8, 1, '2018-04-03', 4, '2018-04-12', 121212112, 'asaasasasa', 'level3'),
(9, 2, '2018-04-11', 9, '2018-04-03', 4521212, 'ddsdfdsfd', 'level3');

-- --------------------------------------------------------

--
-- Table structure for table `childattendance`
--

DROP TABLE IF EXISTS `childattendance`;
CREATE TABLE IF NOT EXISTS `childattendance` (
  `ChildID` int(11) NOT NULL,
  `NumberOfDays` int(11) NOT NULL,
  `childAttendanceID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`childAttendanceID`),
  KEY `ChildID` (`ChildID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `childrengrade`
--

DROP TABLE IF EXISTS `childrengrade`;
CREATE TABLE IF NOT EXISTS `childrengrade` (
  `ChildID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `Grade` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Grade`),
  KEY `ChildID` (`ChildID`),
  KEY `EmployeeID` (`EmployeeID`),
  KEY `SubjectID` (`SubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `Details` varchar(100) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `ComplaintID` int(11) NOT NULL AUTO_INCREMENT,
  `Seen` tinyint(1) NOT NULL,
  PRIMARY KEY (`ComplaintID`),
  KEY `ParentID` (`ParentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `PreviousExperience` text NOT NULL,
  `AvailableStartDate` date NOT NULL,
  `Available` tinyint(1) NOT NULL,
  `EmployeeID` int(11) NOT NULL AUTO_INCREMENT,
  `Salary` varchar(255) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `State` tinyint(1) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`PreviousExperience`, `AvailableStartDate`, `Available`, `EmployeeID`, `Salary`, `StartDate`, `EndDate`, `State`, `UserID`) VALUES
('No', '2018-04-01', 1, 1, '23232323', '2018-04-28', '2018-04-30', 1, 5),
('yes workimdf ndsbf', '2018-04-30', 1, 2, '45000', '2018-04-20', '2018-04-28', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `employeeattendance`
--

DROP TABLE IF EXISTS `employeeattendance`;
CREATE TABLE IF NOT EXISTS `employeeattendance` (
  `EmployeeAttendanceID` int(11) NOT NULL AUTO_INCREMENT,
  `NumberOfDays` int(11) NOT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EmployeeAttendanceID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employeeeducation`
--

DROP TABLE IF EXISTS `employeeeducation`;
CREATE TABLE IF NOT EXISTS `employeeeducation` (
  `EducationTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `NameOfUniversity` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Degree` float NOT NULL,
  `SubjectOfStudy` varchar(100) NOT NULL,
  `Graduate` tinyint(1) NOT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EducationTypeID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeeeducation`
--

INSERT INTO `employeeeducation` (`EducationTypeID`, `NameOfUniversity`, `Location`, `Degree`, `SubjectOfStudy`, `Graduate`, `EmployeeID`) VALUES
(1, 'miu', 'obour', 3.4, 'software', 1, 1),
(2, 'auc', 'fifth setlment', 3.1, 'image processing', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

DROP TABLE IF EXISTS `error`;
CREATE TABLE IF NOT EXISTS `error` (
  `ErrorID` int(11) NOT NULL AUTO_INCREMENT,
  `ErrorCode` varchar(100) NOT NULL,
  `TypeOfErrorID` int(11) NOT NULL,
  `ErrorText` varchar(100) NOT NULL,
  `PageID` int(11) NOT NULL,
  PRIMARY KEY (`ErrorID`),
  KEY `PageID` (`PageID`),
  KEY `TypeOfErrorID` (`TypeOfErrorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `LanguageID` int(11) NOT NULL AUTO_INCREMENT,
  `LanguageName` varchar(500) NOT NULL,
  `WordID` int(11) NOT NULL,
  PRIMARY KEY (`LanguageID`),
  KEY `WordID` (`WordID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

DROP TABLE IF EXISTS `layout`;
CREATE TABLE IF NOT EXISTS `layout` (
  `LayoutID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `PageID` int(11) NOT NULL,
  PRIMARY KEY (`LayoutID`),
  KEY `PageID` (`PageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `MessagesID` int(11) NOT NULL AUTO_INCREMENT,
  `MessageName` varchar(500) NOT NULL,
  `Body` varchar(500) NOT NULL,
  `Subject` varchar(500) NOT NULL,
  PRIMARY KEY (`MessagesID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `OID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (`OID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`OID`, `name`, `Type`) VALUES
(1, 'Card Number', 'int'),
(2, 'Address', 'string'),
(3, 'cvc', 'int');

-- --------------------------------------------------------

--
-- Table structure for table `pageaccess`
--

DROP TABLE IF EXISTS `pageaccess`;
CREATE TABLE IF NOT EXISTS `pageaccess` (
  `PageAccessID` int(11) NOT NULL AUTO_INCREMENT,
  `PageID` int(11) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  PRIMARY KEY (`PageAccessID`),
  KEY `PageID` (`PageID`),
  KEY `UserTypeID` (`UserTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `PageID` int(11) NOT NULL AUTO_INCREMENT,
  `PageName` varchar(100) NOT NULL,
  `PageAccessID` int(11) NOT NULL,
  `PhysicalName` varchar(255) NOT NULL,
  `HTML` varchar(255) NOT NULL,
  PRIMARY KEY (`PageID`),
  KEY `PageAccessID` (`PageAccessID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `ParentID` int(11) NOT NULL AUTO_INCREMENT,
  `MotherName` varchar(100) NOT NULL,
  `GuardianProfession` varchar(100) NOT NULL,
  `MotherProfession` varchar(100) DEFAULT NULL,
  `IsAccepted` tinyint(1) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ParentID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`ParentID`, `MotherName`, `GuardianProfession`, `MotherProfession`, `IsAccepted`, `UserID`) VALUES
(1, 'nour', 'eng', 'eng', 1, 3),
(2, 'may', 'doctor', 'doc', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethods`
--

DROP TABLE IF EXISTS `paymentmethods`;
CREATE TABLE IF NOT EXISTS `paymentmethods` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` (`PID`, `Name`) VALUES
(1, 'Visa'),
(2, 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethodvalues`
--

DROP TABLE IF EXISTS `paymentmethodvalues`;
CREATE TABLE IF NOT EXISTS `paymentmethodvalues` (
  `PMVID` int(11) NOT NULL AUTO_INCREMENT,
  `POID` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `ChildID` int(11) NOT NULL,
  PRIMARY KEY (`PMVID`),
  KEY `ChildID` (`ChildID`),
  KEY `POID` (`POID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paymentoptions`
--

DROP TABLE IF EXISTS `paymentoptions`;
CREATE TABLE IF NOT EXISTS `paymentoptions` (
  `PID` int(11) NOT NULL,
  `OID` int(11) NOT NULL,
  `POID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`POID`),
  KEY `PID` (`PID`),
  KEY `OID` (`OID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paymentoptions`
--

INSERT INTO `paymentoptions` (`PID`, `OID`, `POID`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `ReportID` int(11) NOT NULL AUTO_INCREMENT,
  `ReportName` varchar(500) NOT NULL,
  `UserID` int(11) NOT NULL,
  `SqlStatement` varchar(500) NOT NULL,
  `OutPut` varchar(500) NOT NULL,
  PRIMARY KEY (`ReportID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `RoomID` int(11) NOT NULL AUTO_INCREMENT,
  `RoomNumber` int(11) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `SubjectID` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL,
  `Day` varchar(100) NOT NULL,
  `Time` datetime NOT NULL,
  `ScheduleID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) NOT NULL,
  `GroupName` varchar(255) NOT NULL,
  PRIMARY KEY (`ScheduleID`),
  KEY `SubjectID` (`SubjectID`),
  KEY `RoomID` (`RoomID`),
  KEY `EmployeeID` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `StateID` int(11) NOT NULL AUTO_INCREMENT,
  `StateText` varchar(500) NOT NULL,
  PRIMARY KEY (`StateID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `SubjectID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`SubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `UserID` int(11) NOT NULL,
  `StatesID` int(11) NOT NULL,
  PRIMARY KEY (`TransactionID`),
  KEY `UserID` (`UserID`),
  KEY `StatesID` (`StatesID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typeoferror`
--

DROP TABLE IF EXISTS `typeoferror`;
CREATE TABLE IF NOT EXISTS `typeoferror` (
  `TypeOfErrorID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`TypeOfErrorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `AddressID` int(11) NOT NULL,
  `HomePhone` int(11) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Gender` tinyint(1) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `UserID_3` (`UserID`),
  KEY `user_type` (`user_type`),
  KEY `AddressID` (`AddressID`),
  KEY `UserID` (`UserID`),
  KEY `UserID_2` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Mobile`, `Email`, `AddressID`, `HomePhone`, `Religion`, `Nationality`, `Gender`, `Password`, `user_type`) VALUES
(2, 'anwar', 2132, 'sadds', 1, 12123321, 'muslim', 'eg', 1, 'dsadsaa', 2),
(3, 'mohamed', 2132, 'sadds', 1, 12123321, 'm', 'eg', 1, 'dsadsaa', 1),
(4, 'alaa', 2132, 'sadds', 1, 12123321, 'm', 'ame', 1, 'dsadsaa', 2),
(5, 'mostafa', 2132, 'sadds', 1, 12123321, 'm', 'ger', 1, 'dsadsaa', 3),
(6, 'hazem', 2132, 'sadds', 1, 12123321, 'ch', 'sw', 1, 'dsadsaa', 1),
(7, 'abdelrahman', 2132, 'sadds', 1, 12123321, 'ch', 'ni', 1, 'dsadsaa', 2),
(8, 'ahmed', 2131231, 'sddadas', 1, 312312, 'ch', 'hol', 1, 'dsadsasd', 3),
(9, 'Aly', 2131231, 'sddadas', 1, 312312, 'ch', 'egy', 1, 'dsadsasd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `UserTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserTypeID`, `Name`) VALUES
(1, 'Parent'),
(2, 'Child'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

DROP TABLE IF EXISTS `word`;
CREATE TABLE IF NOT EXISTS `word` (
  `WordID` int(11) NOT NULL AUTO_INCREMENT,
  `WordText` varchar(500) NOT NULL,
  PRIMARY KEY (`WordID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`Address1ID`) REFERENCES `address` (`AddressID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_ibfk_1` FOREIGN KEY (`AddressID`) REFERENCES `address` (`AddressID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buses_ibfk_2` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buses_ibfk_3` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`ParentID`) REFERENCES `parent` (`ParentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `childattendance`
--
ALTER TABLE `childattendance`
  ADD CONSTRAINT `childattendance_ibfk_1` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `childrengrade`
--
ALTER TABLE `childrengrade`
  ADD CONSTRAINT `childrengrade_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `childrengrade_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `childrengrade_ibfk_3` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`ParentID`) REFERENCES `parent` (`ParentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `employeeattendance`
--
ALTER TABLE `employeeattendance`
  ADD CONSTRAINT `employeeattendance_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employeeeducation`
--
ALTER TABLE `employeeeducation`
  ADD CONSTRAINT `employeeeducation_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `error`
--
ALTER TABLE `error`
  ADD CONSTRAINT `error_ibfk_1` FOREIGN KEY (`PageID`) REFERENCES `pages` (`PageID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `error_ibfk_2` FOREIGN KEY (`TypeOfErrorID`) REFERENCES `typeoferror` (`TypeOfErrorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `language`
--
ALTER TABLE `language`
  ADD CONSTRAINT `language_ibfk_1` FOREIGN KEY (`WordID`) REFERENCES `word` (`WordID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `layout`
--
ALTER TABLE `layout`
  ADD CONSTRAINT `layout_ibfk_1` FOREIGN KEY (`PageID`) REFERENCES `pages` (`PageID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pageaccess`
--
ALTER TABLE `pageaccess`
  ADD CONSTRAINT `pageaccess_ibfk_1` FOREIGN KEY (`PageID`) REFERENCES `pages` (`PageID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pageaccess_ibfk_2` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`UserTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`PageAccessID`) REFERENCES `pageaccess` (`PageAccessID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymentmethodvalues`
--
ALTER TABLE `paymentmethodvalues`
  ADD CONSTRAINT `paymentmethodvalues_ibfk_1` FOREIGN KEY (`POID`) REFERENCES `paymentoptions` (`POID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paymentmethodvalues_ibfk_2` FOREIGN KEY (`ChildID`) REFERENCES `child` (`ChildID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymentoptions`
--
ALTER TABLE `paymentoptions`
  ADD CONSTRAINT `paymentoptions_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `paymentmethods` (`PID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paymentoptions_ibfk_2` FOREIGN KEY (`OID`) REFERENCES `options` (`OID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`RoomID`) REFERENCES `rooms` (`RoomID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_4` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`StatesID`) REFERENCES `states` (`StateID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `usertype` (`UserTypeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`AddressID`) REFERENCES `address` (`AddressID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

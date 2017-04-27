-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2017 at 04:42 PM
-- Server version: 5.5.32
-- PHP Version: 5.3.10-1ubuntu3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project362`
--
CREATE DATABASE `project362` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project362`;

-- --------------------------------------------------------

--
-- Table structure for table `Anti_freeze`
--

CREATE TABLE IF NOT EXISTS `Anti_freeze` (
  `Anti_freezeID` int(15) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Anti_freezeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Anti_seize`
--

CREATE TABLE IF NOT EXISTS `Anti_seize` (
  `Anti_seizeID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Anti_seizeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Brake_fluid`
--

CREATE TABLE IF NOT EXISTS `Brake_fluid` (
  `Brake_fluidID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Brake_fluidID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Cars`
--

CREATE TABLE IF NOT EXISTS `Cars` (
  `CarsID` int(15) NOT NULL,
  `VIN` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Make` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Model` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Engine` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Year` int(5) NOT NULL,
  `Color` varchar(15) CHARACTER SET utf8 NOT NULL,
  `CustomersID` int(15) NOT NULL,
  PRIMARY KEY (`CarsID`),
  KEY `fk_CustomerID` (`CustomersID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `Cars`:
--   `CustomersID`
--       `Customers` -> `CustomersID`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE IF NOT EXISTS `Customers` (
  `CustomersID` int(15) NOT NULL,
  `Fname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Lname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `PhoneNum` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(25) CHARACTER SET utf8 NOT NULL,
  `City` varchar(25) CHARACTER SET utf8 NOT NULL,
  `State` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Zip` int(15) NOT NULL,
  `CarsID` int(15) NOT NULL,
  PRIMARY KEY (`CustomersID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Differential_fluid`
--

CREATE TABLE IF NOT EXISTS `Differential_fluid` (
  `Differential_fluidID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Differential_fluidID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE IF NOT EXISTS `Employees` (
  `EmployeeID` int(15) NOT NULL,
  `Fname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Lname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `ID` int(15) NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Jobs`
--

CREATE TABLE IF NOT EXISTS `Jobs` (
  `JobsID` int(15) NOT NULL,
  `VIN` int(11) NOT NULL,
  `Make` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Model` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Year` int(5) NOT NULL,
  `Engine` varchar(10) CHARACTER SET utf8 NOT NULL,
  `CustomerName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Description` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `EmployeeDesignation` varchar(25) CHARACTER SET utf8 NOT NULL,
  `CarsID` int(15) NOT NULL,
  `EmployeeID` int(15) NOT NULL,
  `CustomersID` int(15) NOT NULL,
  PRIMARY KEY (`JobsID`),
  KEY `fk_CarsID` (`CarsID`),
  KEY `fk_CustomersID` (`CustomersID`),
  KEY `fk_EmployeeID` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `Jobs`:
--   `CarsID`
--       `Cars` -> `CarsID`
--   `CustomersID`
--       `Customers` -> `CustomersID`
--   `EmployeeID`
--       `Employees` -> `EmployeeID`
--

-- --------------------------------------------------------

--
-- Table structure for table `Oil`
--

CREATE TABLE IF NOT EXISTS `Oil` (
  `OilID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`OilID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `ordersID` int(15) NOT NULL,
  `CustomerFname` varchar(25) NOT NULL,
  `CustomerLname` varchar(25) NOT NULL,
  `VIN` varchar(25) NOT NULL,
  `Milage` int(10) NOT NULL,
  `Make` varchar(15) NOT NULL,
  `Model` varchar(15) NOT NULL,
  `Year` int(5) NOT NULL,
  `Engine` varchar(10) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `EmployeeFname` varchar(25) NOT NULL,
  `EmployeeLname` varchar(25) NOT NULL,
  `quantityOfPart` int(10) NOT NULL,
  `Part` int(10) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `LaborHours` int(10) NOT NULL,
  `LaborCost` decimal(10,0) NOT NULL,
  `Date` date NOT NULL,
  `CarsID` int(15) NOT NULL,
  `CustomersID` int(15) NOT NULL,
  `EmployeeID` int(15) NOT NULL,
  `JobsID` int(15) NOT NULL,
  `SuppliesID` int(15) NOT NULL,
  PRIMARY KEY (`ordersID`),
  KEY `fk__Orders_CarsID` (`CarsID`),
  KEY `fk__Orders_CustomersID` (`CustomersID`),
  KEY `fk__Orders_EmployeeID` (`EmployeeID`),
  KEY `fk__Orders_JobsID` (`JobsID`),
  KEY `fk__Orders_SuppliesID` (`SuppliesID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `Orders`:
--   `CarsID`
--       `Cars` -> `CarsID`
--   `CustomersID`
--       `Customers` -> `CustomersID`
--   `EmployeeID`
--       `Employees` -> `EmployeeID`
--   `JobsID`
--       `Jobs` -> `JobsID`
--   `SuppliesID`
--       `Supplies` -> `SuppliesID`
--

-- --------------------------------------------------------

--
-- Table structure for table `Power_steering_fluid`
--

CREATE TABLE IF NOT EXISTS `Power_steering_fluid` (
  `Power_steering_fluidID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Power_steering_fluidID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Spray_lubricant`
--

CREATE TABLE IF NOT EXISTS `Spray_lubricant` (
  `Spray_lubricantID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Spray_lubricantID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Supplies`
--

CREATE TABLE IF NOT EXISTS `Supplies` (
  `SuppliesID` int(15) NOT NULL,
  `Anti_freezeID` int(15) NOT NULL,
  `Anti_seizeID` int(15) NOT NULL,
  `Brake_fluidID` int(15) NOT NULL,
  `Differential_fluidID` int(15) NOT NULL,
  `OilID` int(15) NOT NULL,
  `Power_steering_fluidID` int(15) NOT NULL,
  `Spray_lubricantID` int(15) NOT NULL,
  `Wiper_fluidID` int(15) NOT NULL,
  `Transmission_fluidID` int(15) NOT NULL,
  PRIMARY KEY (`SuppliesID`),
  KEY `fk_supplies_Anti_freezeID` (`Anti_freezeID`),
  KEY `fk_supplies_Anti_seizeID` (`Anti_seizeID`),
  KEY `fk_supplies_Brake_fluidID` (`Brake_fluidID`),
  KEY `fk_supplies_Differential_fluidID` (`Differential_fluidID`),
  KEY `fk_supplies_OilID` (`OilID`),
  KEY `fk_supplies_Power_steering_fluidID` (`Power_steering_fluidID`),
  KEY `fk_supplies_Spray_lubricantID` (`Spray_lubricantID`),
  KEY `fk_supplies_Wiper_fluidID` (`Wiper_fluidID`),
  KEY `fk_supplies_Transmission_fluidID` (`Transmission_fluidID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `Supplies`:
--   `Transmission_fluidID`
--       `Transmission_fluid` -> `Transmission_fluidID`
--   `Anti_freezeID`
--       `Anti_freeze` -> `Anti_freezeID`
--   `Anti_seizeID`
--       `Anti_seize` -> `Anti_seizeID`
--   `Brake_fluidID`
--       `Brake_fluid` -> `Brake_fluidID`
--   `Differential_fluidID`
--       `Differential_fluid` -> `Differential_fluidID`
--   `OilID`
--       `Oil` -> `OilID`
--   `Power_steering_fluidID`
--       `Power_steering_fluid` -> `Power_steering_fluidID`
--   `Spray_lubricantID`
--       `Spray_lubricant` -> `Spray_lubricantID`
--   `Wiper_fluidID`
--       `Wiper_fluid` -> `Wiper_fluidID`
--

-- --------------------------------------------------------

--
-- Table structure for table `Transmission_fluid`
--

CREATE TABLE IF NOT EXISTS `Transmission_fluid` (
  `Transmission_fluidID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Transmission_fluidID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Wiper_fluid`
--

CREATE TABLE IF NOT EXISTS `Wiper_fluid` (
  `Wiper_fluidID` int(15) NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Wiper_fluidID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cars`
--
ALTER TABLE `Cars`
  ADD CONSTRAINT `fk_foreign_key_CustomerID` FOREIGN KEY (`CustomersID`) REFERENCES `Customers` (`CustomersID`);

--
-- Constraints for table `Jobs`
--
ALTER TABLE `Jobs`
  ADD CONSTRAINT `fk_CarsID` FOREIGN KEY (`CarsID`) REFERENCES `Cars` (`CarsID`),
  ADD CONSTRAINT `fk_CustomersID` FOREIGN KEY (`CustomersID`) REFERENCES `Customers` (`CustomersID`),
  ADD CONSTRAINT `fk_EmployeeID` FOREIGN KEY (`EmployeeID`) REFERENCES `Employees` (`EmployeeID`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `fk__Orders_CarsID` FOREIGN KEY (`CarsID`) REFERENCES `Cars` (`CarsID`),
  ADD CONSTRAINT `fk__Orders_CustomersID` FOREIGN KEY (`CustomersID`) REFERENCES `Customers` (`CustomersID`),
  ADD CONSTRAINT `fk__Orders_EmployeeID` FOREIGN KEY (`EmployeeID`) REFERENCES `Employees` (`EmployeeID`),
  ADD CONSTRAINT `fk__Orders_JobsID` FOREIGN KEY (`JobsID`) REFERENCES `Jobs` (`JobsID`),
  ADD CONSTRAINT `fk__Orders_SuppliesID` FOREIGN KEY (`SuppliesID`) REFERENCES `Supplies` (`SuppliesID`);

--
-- Constraints for table `Supplies`
--
ALTER TABLE `Supplies`
  ADD CONSTRAINT `fk_supplies_Transmission_fluidID` FOREIGN KEY (`Transmission_fluidID`) REFERENCES `Transmission_fluid` (`Transmission_fluidID`),
  ADD CONSTRAINT `fk_supplies_Anti_freezeID` FOREIGN KEY (`Anti_freezeID`) REFERENCES `Anti_freeze` (`Anti_freezeID`),
  ADD CONSTRAINT `fk_supplies_Anti_seizeID` FOREIGN KEY (`Anti_seizeID`) REFERENCES `Anti_seize` (`Anti_seizeID`),
  ADD CONSTRAINT `fk_supplies_Brake_fluidID` FOREIGN KEY (`Brake_fluidID`) REFERENCES `Brake_fluid` (`Brake_fluidID`),
  ADD CONSTRAINT `fk_supplies_Differential_fluidID` FOREIGN KEY (`Differential_fluidID`) REFERENCES `Differential_fluid` (`Differential_fluidID`),
  ADD CONSTRAINT `fk_supplies_OilID` FOREIGN KEY (`OilID`) REFERENCES `Oil` (`OilID`),
  ADD CONSTRAINT `fk_supplies_Power_steering_fluidID` FOREIGN KEY (`Power_steering_fluidID`) REFERENCES `Power_steering_fluid` (`Power_steering_fluidID`),
  ADD CONSTRAINT `fk_supplies_Spray_lubricantID` FOREIGN KEY (`Spray_lubricantID`) REFERENCES `Spray_lubricant` (`Spray_lubricantID`),
  ADD CONSTRAINT `fk_supplies_Wiper_fluidID` FOREIGN KEY (`Wiper_fluidID`) REFERENCES `Wiper_fluid` (`Wiper_fluidID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

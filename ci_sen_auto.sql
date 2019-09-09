-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 08:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_sen_auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatName` varchar(200) NOT NULL,
  `Id` int(100) NOT NULL,
  `TOC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LMT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatName`, `Id`, `TOC`, `LMT`, `Status`) VALUES
('Loader', 1, '2017-08-14 09:54:28', '0000-00-00 00:00:00', 1),
('Dump', 2, '2017-08-14 09:54:28', '0000-00-00 00:00:00', 1),
('Crane Car', 3, '2017-08-14 09:56:21', '0000-00-00 00:00:00', 1),
('Self-heavy Equipment', 4, '2017-08-14 09:56:21', '0000-00-00 00:00:00', 1),
('Mixer Car', 5, '2017-08-14 09:58:15', '0000-00-00 00:00:00', 1),
('Aerial Work Vehicle', 6, '2017-08-14 09:58:15', '0000-00-00 00:00:00', 1),
('Specially Equipped Car-other', 7, '2017-08-14 09:58:15', '0000-00-00 00:00:00', 1),
('Trailer Head', 8, '2017-08-14 09:58:15', '0000-00-00 00:00:00', 1),
('Wing Car', 9, '2017-08-14 09:58:15', '0000-00-00 00:00:00', 1),
('Van Car', 10, '2017-08-14 10:01:35', '0000-00-00 00:00:00', 1),
('Refrigerated Freezer', 11, '2017-08-14 10:01:35', '0000-00-00 00:00:00', 1),
('A Passenger Car', 12, '2017-08-14 10:03:05', '0000-00-00 00:00:00', 1),
('Packed Car', 13, '2017-08-14 10:03:05', '0000-00-00 00:00:00', 1),
('Bus', 14, '2017-08-14 10:03:05', '0000-00-00 00:00:00', 1),
('Construction Machine', 15, '2017-08-14 10:03:05', '0000-00-00 00:00:00', 0),
('Flat Body', 16, '2017-08-14 10:03:33', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Id` int(100) NOT NULL,
  `TOC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL,
  `Path` varchar(150) NOT NULL,
  `Lead` tinyint(1) NOT NULL,
  `Prod_Id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `TOC`, `Status`, `Path`, `Lead`, `Prod_Id`) VALUES
(1, '2017-08-19 20:00:48', 1, 'http://localhost:8080/sen-admin/assets/images/vcimg/294e735b56ce6f8dc8fdd7f424257c45.jpg', 1, 1),
(2, '2017-08-20 06:50:00', 1, 'E:/XAMPP/htdocs/sen-admin/assets/images/vcimg/bd56caa7f4f0481b9556e7da8e0952ff.jpg', 0, 1),
(3, '2017-08-20 06:50:08', 1, 'E:/XAMPP/htdocs/sen-admin/assets/images/vcimg/045e4f9877704a17875f7b241aaddaae.jpg', 0, 1),
(6, '2017-09-09 07:10:35', 1, '', 1, 2),
(7, '2017-09-09 07:10:35', 1, '', 0, 2),
(8, '2017-09-09 07:13:24', 1, 'file:///C:/Users/Saikat%20Dey/Pictures/29_0015840_079594.jpg', 1, 4),
(9, '2017-09-09 07:13:24', 1, 'file:///C:/Users/Saikat%20Dey/Pictures/29_0015840_079594.jpg', 0, 4),
(10, '2017-09-09 08:56:01', 1, 'file:///C:/Users/Saikat%20Dey/Pictures/29_0015840_079594.jpg', 1, 5),
(12, '2017-09-09 18:46:16', 1, '', 1, 6),
(13, '2017-09-10 05:44:01', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/52ec14a92e77bd52164d5bd7a8d06aec.jpg', 1, 9),
(14, '2017-09-10 05:44:01', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/aab000e913d52d050381574dad1e1cef.jpg', 0, 9),
(15, '2017-09-10 05:44:01', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/d1dbf8d74a3dd07a429fdf720b1d3bdc.jpg', 0, 9),
(16, '2017-09-10 05:45:36', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/d50ef0fc5c73e0c429f70aae704c2575.jpg', 1, 10),
(17, '2017-09-10 05:45:36', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/b4f5b19b8e0e75ab5d45168cfbdda604.jpg', 0, 10),
(18, '2017-09-10 05:45:36', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/b0d783f83fb6c44746cb6069b40fd618.jpg', 0, 10),
(19, '2017-09-10 05:46:27', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/f81289d161a2163287911e5117869ef3.jpg', 1, 11),
(20, '2017-09-10 05:46:27', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/1e0a5da59bd0ee323025c52ffff2ecef.jpg', 0, 11),
(21, '2017-09-10 05:47:38', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/0d6b42a33054bb87b35906996af46ab9.jpg', 1, 12),
(22, '2017-09-10 05:47:38', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/8314aa9ae5fbae54aa217536d9fea014.jpg', 0, 12),
(23, '2017-09-10 05:48:14', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/083859a69382885eaf05597dcba8ee28.jpg', 1, 13),
(24, '2017-09-10 05:48:14', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/8c453228d5aa00b179c84795aa71c782.jpg', 0, 13),
(25, '2017-09-10 05:49:48', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/7e2c38803887fd0e7c8e7859122f2293.jpg', 1, 14),
(26, '2017-09-10 05:49:48', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/508874c00b05edca7c3e92dce0251622.jpg', 0, 14),
(27, '2017-10-08 08:42:45', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/28620408a06804d836016a5d273f8597.jpg', 1, 15),
(28, '2017-10-08 08:42:45', 1, 'C:/xampp/htdocs/sen-admin/assets/images/vcimg/8844eba0364fcca8558861a92c48d15b.jpg', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `IdItem` int(100) NOT NULL,
  `InvoiceNo` varchar(50) NOT NULL,
  `Qnty` int(10) NOT NULL,
  `HSNCode` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Rate` decimal(10,2) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Amount` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`IdItem`, `InvoiceNo`, `Qnty`, `HSNCode`, `Description`, `Rate`, `Unit`, `Amount`) VALUES
(123, 'ABC02', 122, '8080', '1X1/2 GI Barrel Nipple', '11.00', 'Each', 1342.00),
(124, 'ABC02', 45, '8080', '1X1/2 GI Barrel Nipple', '55.42', 'Each', 2493.75),
(125, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '7.33', 'Each', 88.00),
(126, 'ABC02', 70, '8080', '1X1/2 GI Barrel Nipple', '137.50', 'Each', 9625.00),
(127, 'ABC02', 45, '8080', '1X1/2 GI Barrel Nipple', '146.67', 'Each', 6600.00),
(128, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(129, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(130, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(131, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(132, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(133, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(134, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(135, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(136, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(137, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(138, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(139, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(140, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(141, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(142, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(143, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(144, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(145, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(146, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(147, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(148, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(149, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(150, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(151, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(152, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(153, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(154, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(155, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(156, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(157, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(158, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(159, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(160, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(161, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(162, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(163, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(164, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(165, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(166, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(167, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(168, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(169, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(170, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(171, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(172, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(173, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(174, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(175, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(176, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 144.00),
(177, 'ABC02', 12, '8080', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 160.00),
(178, 'ABCD02', 133, '24054', 'GI Barrel Nipple 1/2 X 12', '45.00', 'Each', 5985.00),
(179, 'SS', 133, '24054', 'GI Barrel Nipple 1/2 X 12', '45.00', 'Each', 5985.00),
(180, 'SS', 23, '24054', 'GI Barrel Nipple 1/2 X 17', '32.58', 'Each', 749.42),
(181, 'rr', 12, '', '', '10.08', 'Each', 121.00),
(182, 'rr', 12, '', '', '10.08', 'Each', 121.00);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pr_name` varchar(200) NOT NULL,
  `Id` int(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Maker` varchar(100) NOT NULL,
  `Displacement` varchar(100) NOT NULL,
  `Fuel` varchar(100) NOT NULL,
  `Capacity` varchar(100) NOT NULL,
  `VIC` varchar(100) NOT NULL,
  `InsRecord` varchar(100) NOT NULL,
  `SCD` varchar(100) NOT NULL,
  `EGR` varchar(100) NOT NULL,
  `VWeightTot` varchar(100) NOT NULL,
  `Model1` varchar(100) NOT NULL,
  `ModelYear` varchar(100) NOT NULL,
  `Model2` varchar(100) NOT NULL,
  `Shape` varchar(100) NOT NULL,
  `BColor` varchar(100) NOT NULL,
  `BDimension` varchar(100) NOT NULL,
  `VWeight` varchar(100) NOT NULL,
  `Mileage` varchar(100) NOT NULL,
  `EManf` varchar(100) NOT NULL,
  `PackDim` varchar(100) NOT NULL,
  `MaxLCapacity` varchar(100) NOT NULL,
  `PMover` varchar(100) NOT NULL,
  `Mission` varchar(100) NOT NULL,
  `Recommended` tinyint(1) NOT NULL,
  `CatId` int(100) NOT NULL,
  `TOC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LMT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pr_name`, `Id`, `Description`, `Maker`, `Displacement`, `Fuel`, `Capacity`, `VIC`, `InsRecord`, `SCD`, `EGR`, `VWeightTot`, `Model1`, `ModelYear`, `Model2`, `Shape`, `BColor`, `BDimension`, `VWeight`, `Mileage`, `EManf`, `PackDim`, `MaxLCapacity`, `PMover`, `Mission`, `Recommended`, `CatId`, `TOC`, `LMT`, `Status`) VALUES
(' Nissan Diesel / Dump / H17 year (vehicle inspection equipped.)', 1, 'This is a very nice vehicle.', 'Nissan Diesel', '13.07 kW', 'Light oil', '2 people', 'H10 April 10', 'None', 'Present', 'Conform', '19990 kg', 'dump', 'March, March 17', 'KL-CW 48A', 'Oval', '', 'Length 780 cm Width 249 cm Height 330 cm', '9880 kg', '38725 km (1 meter lap)', '', '530 × 230 × 54', '10000 kg', 'GE 13', '', 0, 2, '2017-12-20 18:38:56', '2017-10-15 07:14:30', 0),
('Mitsubishi / Dump / H Year 19 (with vehicle inspection) ', 2, 'Vehicle inspection H30 June 26 · I · C · T · With ETC · 240 horsepower · internal dimensions 340 × 205 × 60', 'Mitsubish', '7.54 kW', 'Light oil', '2 people', 'H 30 June 26', 'None', 'Present', 'Confirm', '13260 kg', 'Dump', 'H Year 19', 'PJ-FK62FZ', '', 'RED', 'Length 578 cm Width 228 cm Height 296 cm', '5750 kg', '239686 km', '', '340 × 205 × 60', '7400 kg', '6M60', '', 1, 2, '2017-09-09 07:39:14', '2017-08-20 11:35:52', 1),
('Honda Hayabhusa', 3, 'Need not to say anything! Google it for Further.', 'Honda', '', 'Diesel', '2 people', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 12, '2017-08-25 12:33:25', '2017-08-20 11:43:37', 1),
('DUKE 200', 4, 'afsdfsdfsdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5, '2017-09-09 06:55:15', '2017-08-19 15:01:51', 1),
('Royal Enfield Green', 5, 'asdasdasdasdad', 'Saka Own', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5, '2017-09-09 07:42:51', '2017-08-22 13:25:39', 1),
('Apache RTR 200', 6, 'safdsfsdfsdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 5, '2017-09-09 08:59:47', '2017-08-19 15:10:20', 1),
('KTM RC200', 7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5, '2017-09-02 12:44:26', '0000-00-00 00:00:00', 0),
('Pulsar NS-200', 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5, '2017-09-02 12:44:26', '0000-00-00 00:00:00', 0),
('KOMATSU Wheel Loader WA 100 - 3 E (year 1998)', 9, 'Operating time 5,086 / h ? Cab type cab ? Cab shape standard ', '', '', '', '', '', '', '', '', '', '', '1998 Heisei 10', '', '', '', '', '', '5086 / h', '', '', '', '', '', 0, 1, '2017-09-10 05:44:01', '2017-09-10 05:44:01', 1),
(' KOMATSU Wheel loader WA100-6', 10, 'ROPS-CAB ? A / C ? Ride-Control ? Solid Tires 12.00-24 ? 5198km ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '2017-09-10 05:45:36', '2017-09-10 05:45:36', 1),
(' HITACHI / Wheel loader / LX 40 - 7 ', 11, 'Cab type cab ? cab shape standard ? power transmission system HST', ' HITACHI', '', 'Light', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '2017-12-20 18:17:45', '2017-10-15 07:36:58', 0),
('FURUKAWA Wheel Loader FL 303-2 1997', 12, 'Operating time 5,086 / h ? Cab type cab ? Cab shape standard ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '2017-09-10 05:47:38', '2017-09-10 05:47:38', 1),
('JOHN DEERE / Wheel loader / 544E', 13, 'ROPS-CAB ? A / C ? Ride-Control ? Solid Tires 12.00-24 ? 5198km ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '2017-09-10 05:48:14', '2017-09-10 05:48:14', 1),
('CAT Wheel loaders 910 G', 14, 'A / C · EPA (exhaust emission countermeasure type)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '2017-09-10 05:49:48', '2017-09-10 05:49:48', 1),
('abc', 15, 'abc', ' HITACHI', 'abc', 'Light', '2 Persons', 'abc', 'abc', 'abc', 'abc', 'abc', '', 'abc', 'abc', 'abc', 'abc', 'XYZ', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 0, 1, '2017-10-08 14:23:53', '2017-10-08 14:23:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1514367050, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `cons_fk_img2` (`Prod_Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`IdItem`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `cons_fk` (`CatId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `IdItem` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cons_fk` FOREIGN KEY (`CatId`) REFERENCES `category` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

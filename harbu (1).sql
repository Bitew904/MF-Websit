-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 08:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harbu`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `ID` int(11) NOT NULL COMMENT '1',
  `Name` varchar(200) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `FieldOfStudy` varchar(200) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `application` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `BidID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `Description` mediumtext NOT NULL,
  `document` varchar(100) NOT NULL,
  `PostUrl` varchar(100) NOT NULL,
  `Is_Active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`BidID`, `Date`, `title`, `Description`, `document`, `PostUrl`, `Is_Active`) VALUES
(1, '2022-08-22', 'Bid Annoncement', 'For Harbu MFI fgshdgdfghsfdghfghdfshf', 'Bid-Annoncement', 'cf8fbd4305c3d3bc1aede0499f4a79ea.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `CN` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `reseveremail` varchar(100) NOT NULL,
  `fromemail` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `postdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CN`, `Name`, `phone`, `message`, `reseveremail`, `fromemail`, `status`, `postdate`) VALUES
(1, 'bITEW', '123456789', 'helo', 'harbumfi@gmail.com', 't@gmail.com', 0, '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(11) NOT NULL COMMENT '1',
  `name` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOb` varchar(100) NOT NULL,
  `ED` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Postdate` date NOT NULL,
  `imagename` varchar(200) NOT NULL,
  `Description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NID` int(11) NOT NULL COMMENT '1',
  `Date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Details` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `PostUrl` varchar(100) NOT NULL,
  `Is_Active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NID`, `Date`, `title`, `Description`, `Details`, `image`, `PostUrl`, `Is_Active`) VALUES
(18, '2022-08-22', 'Harbu Microfinance Institution', 'Harbu Microfinance Institution Share Company (Harbu) is an Ethiopian microfinance institution (MFI) based in Addis Ababa, Ethiopia. ', 'Harbu Microfinance Institution Share Company (Harbu) is an Ethiopian microfinance institution (MFI) based in Addis Ababa, Ethiopia. It assists farmers, especially women farmers, in the cultivation and processing of soybeans. As of 2009, Harbu had USD 1.3 million in total assets and a gross loan portfolio of USD 812,000. In 2008, Harbu reported return on assets (ROA) of 0.45 percent and return on equity (ROE) of 1.36 percent. Harbu Microfinance Institution Share Company (Harbu) of Ethiopia was recently presented the third annual “European Microfinance Award” by Maria Teresa, the Grand Duchess of Luxembourg, on behalf of the Luxembourg Round Table on Microfinance, a government organization established to catalyze interactions between microfinance institutions (MFIs) and financial institutions in Luxembourg, at the European Investment Bank (EIB) in Luxembourg. ', 'Harbu-Microfinance-Institution', '18358d49e93a16d6d800921aae62a703.jpg', 1),
(19, '2022-08-22', 'Vacancy', 'Internal/ External vacancy Announcement', 'Harbu MFI is Established in 2005(G.C.) and Affiliated to facilitator for Change(NGO),Harbu MFI is aims at promoting agricultural productivitie and matketing by facilitating value chain development and access to fianacial service to urban and rural community.\r\n\r\n\r\nHarbu Micro Finance S.C wants to recruit professional forthe following Vacant Positions:-Interested applicants who meet the below requirements are invited to submit their application letter & CV along with nonreturnable credentials with 7 (seven) working days from this announcement to Human Resource & Administration Office Bole,near Atlas Hotel or submit through our email address at Harbumfi@gmail.com or apply through our online Application by Clicking apply link.', 'Vacancy', '18358d49e93a16d6d800921aae62a703.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portifoleo`
--

CREATE TABLE `portifoleo` (
  `ID` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `Customer` varchar(200) NOT NULL,
  `Branch` int(200) NOT NULL,
  `Agents` varchar(100) NOT NULL,
  `Asset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portifoleo`
--

INSERT INTO `portifoleo` (`ID`, `date`, `Customer`, `Branch`, `Agents`, `Asset`) VALUES
(2, '2022-08-18 12:43:02', '30m+', 28, '13', '3B$+');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `Date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `Describtion` varchar(10000) NOT NULL,
  `Title.pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `role` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Fname`, `phone`, `role`, `username`, `email`, `password`) VALUES
(2, '', 0, 'administrator', 'Bitew', 'b@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, '', 0, 'Employee', 'abeb', 'k@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, '', 0, 'HR', 'alemu', 'hr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, '', 0, 'employee', 'zem', 'ze@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(14, '', 0, 'employee', 'zem', 'ze@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(15, '', 0, 'employee', 'zemen', 'z@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(16, '', 0, 'Applicant', 'Tiruset', 't@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'Bitew Abebayehu', 0, 'Employee', 'Bitew', 'e@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `V_ID` int(11) NOT NULL,
  `JOBID` varchar(11) NOT NULL,
  `Job_Title` varchar(20) NOT NULL,
  `Term` varchar(200) NOT NULL,
  `Total_Vacancy` int(10) NOT NULL,
  `Qualification` varchar(10) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Post_Date` date NOT NULL,
  `Location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`V_ID`, `JOBID`, `Job_Title`, `Term`, `Total_Vacancy`, `Qualification`, `Description`, `Post_Date`, `Location`) VALUES
(1, '0', 'Branch Manager', 'Permanent', 10, 'Masters', '2 Years', '2022-08-04', ''),
(2, '0', 'IT Officer', 'Permanent', 10, 'Degree', '2 Years', '2022-08-04', ''),
(3, '0', 'Accountant', 'Permanent', 10, 'Degree', '2 Years', '2022-08-04', 'Addis abeba'),
(4, '12', 'It Officer', 'Permanent', 10, 'Degree', ' have three years’ experience in the field of IT', '2022-08-05', 'Addis abeba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`BidID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`CN`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `portifoleo`
--
ALTER TABLE `portifoleo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`V_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT '1';

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `BidID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `CN` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT COMMENT '1';

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `portifoleo`
--
ALTER TABLE `portifoleo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `V_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

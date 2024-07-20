-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 06:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mensalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 7898799798, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-04-28 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

CREATE TABLE `tblbook` (
  `ID` int(10) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `AptNumber` int(10) DEFAULT NULL,
  `AptDate` date DEFAULT NULL,
  `AptTime` time DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `RemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`ID`, `UserID`, `AptNumber`, `AptDate`, `AptTime`, `Message`, `BookingDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(13, 1, 545766748, '2024-06-21', '10:00:00', 'Hair Cut\r\n\r\n', '2024-06-04 16:28:35', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `Phone` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `FirstName`, `LastName`, `Phone`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(10, 'Darmasiri', 'Rathnayaka', 778529634, 'darmasiri66@gmail.com', 'you are amazing\r\n', '2024-06-04 16:50:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '                                                                                                                                                                                <p style=\"line-height: 24px; margin-bottom: 10px; padding: 0px; text-transform: uppercase; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; text-align: justify;\"><font style=\"\" color=\"#000000\" face=\"georgia\" size=\"3\">OUR MAIN FOCUS IS ON QUALITY AND HYGIENE. OUR PARLOUR IS WELL EQUIPPED WITH ADVANCED TECHNOLOGY EQUIPMENTS AND PROVIDES BEST QUALITY SERVICES. OUR STAFF IS WELL TRAINED AND EXPERIENCED, OFFERING ADVANCED SERVICES IN SKIN, HAIR AND BODY SHAPING THAT WILL PROVIDE YOU WITH A LUXURIOUS EXPERIENCE THAT LEAVE YOU FEELING RELAXED AND STRESS FREE. THE SPECIALITIES IN THE PARLOUR ARE, APART FROM REGULAR BLEACHINGS AND FACIALS, MANY TYPES OF HAIRSTYLES, BRIDAL AND CINE MAKE-UP AND DIFFERENT TYPES OF FACIALS &amp; FASHION HAIR COLOURINGS.</font></p>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '        No.05/B,Pasyala Road,Meerigama', 'mrhandsomesalon14@gmail.com', 333452316, NULL, '09:30 am to 09:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `ServiceDescription` mediumtext DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `ServiceDescription`, `Cost`, `Image`, `CreationDate`) VALUES
(1, 'Haircut', 'Professional haircut tailored to your preferences, including consultation, wash, and style finish.', 600, 'f1e1c9c02ca7a456bc47763d7f16b3b51717489151.jpg', '2024-06-04 08:14:51'),
(2, 'Beard Trim', 'Precision trimming and shaping of your beard to enhance your facial features.', 300, 'd30d2869b3b8505f70d19af1721c0bae1717489350.jpg', '2024-06-04 08:22:30'),
(3, 'Hot Towel Shave', 'Traditional straight razor shave with hot towels and soothing post-shave treatments.', 450, 'e34bf16501c83cdadac4b6e84cded6c41717489548.jpg', '2024-06-04 08:25:48'),
(4, 'Hair Colouring', 'Custom hair colouring services to cover grey hair or change your hair colour.', 1500, 'd0babddf65d8a041f3197fdcf39e68071717489797.jpg', '2024-06-04 08:29:57'),
(5, 'Facial', 'Deep cleansing facial to rejuvenate and hydrate the skin, leaving it smooth and refreshed.', 1200, '5baadd737c30dbe46f9520f57656006b1717490248.jpg', '2024-06-04 08:37:28'),
(6, 'Scalp Massage', 'Relaxing scalp massage to relieve tension and promote circulation.', 800, '25ed51ef405e23375dc45ec777aa2b011717490610.jpg', '2024-06-04 08:43:30'),
(7, 'Manicure', 'Nail grooming, cuticle care, and hand massage for clean and polished hands.', 2000, '11578328b315bfa5b6fcb9790934c9331717491967jpeg', '2024-06-04 09:06:07'),
(8, 'Pedicure', 'Foot soak, nail trimming, callus removal, and massage for healthy and groomed feet.', 2500, 'f2caa4381f1f50ea2b4af9050be9b2c31717492009.jpg', '2024-06-04 09:06:49'),
(9, 'Waxing', 'Hair removal services for areas such as eyebrows, back, chest, and ears.', 1000, 'e63c2da898a4183339bba9ad55c639b71717492087.jpg', '2024-06-04 09:08:07'),
(10, 'Hair Styling', 'Styling services including blowouts, pompadours, fades, and more.', 550, 'f340d4756e82670e9ad1bf59ec69d1621717492224.jpg', '2024-06-04 09:10:24'),
(11, 'Eyebrow Grooming', 'Shaping and grooming of eyebrows for a clean and polished look.', 300, 'f04fddf6bdc8e74734fe4cba38e54d881717492257.jpg', '2024-06-04 09:10:57'),
(12, 'Scalp Treatment', 'Treatment for dry scalp, dandruff, or hair loss using specialized products.', 1200, 'abbc5f63440a4addc8dfe9453100ee4c1717492283.jpg', '2024-06-04 09:11:23'),
(13, 'Aromatherapy Massage', 'Relaxing massage using essential oils to promote relaxation and well-being.', 1000, '99bcdad8edb7a284876d27b09e934fa11717492340.jpg', '2024-06-04 09:12:20'),
(14, 'Deep Conditioning Treatment', 'Intensive treatment to nourish and repair dry or damaged hair.', 1300, '0b5851550767f075194e88e34ff7a4501717492369.jpg', '2024-06-04 09:12:49'),
(15, 'Ear Piercing', 'Professional ear piercing services using sterile techniques and high-quality jewelry.', 800, '6018e7fea26d53a7c4360b561991ba951717492399.jpg', '2024-06-04 09:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(120) DEFAULT NULL,
  `LastName` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Pasindu', 'Dashan', 111111111, 'pasiya123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2024-06-04 07:04:02'),
(2, 'Supun', 'Aravinda', 123457896, 'supunaravinda8@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-06-04 09:39:17'),
(3, 'Nimal', 'Rathnayaka', 754567531, 'nimal2@gmail.com', 'b2023820a60123ef4e6869bacaf7d90c', '2024-06-04 09:40:56'),
(4, 'Darmasiri', 'Rathnayaka', 778529634, 'darmasiri66@gmail.com', '3683af9d6f6c06acee72992f2977f67e', '2024-06-04 09:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbook`
--
ALTER TABLE `tblbook`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

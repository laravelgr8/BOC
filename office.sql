-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 05:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `state_id`) VALUES
(1, 'Patna', 1),
(2, 'Danapur', 1),
(3, 'Kanpur', 2),
(4, 'Aagra', 2),
(5, 'Indore', 3),
(6, 'Bhopal', 3),
(7, 'Karachi city', 5),
(8, 'Lahor City', 6);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'India'),
(2, 'America'),
(3, 'Japan'),
(4, 'England'),
(5, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `od_media_owner_detail`
--

CREATE TABLE `od_media_owner_detail` (
  `did` int(11) NOT NULL,
  `OD_Media_Type` int(11) DEFAULT NULL,
  `OD_Media_ID` varchar(20) DEFAULT NULL,
  `Owner_ID` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `od_media_owner_detail`
--

INSERT INTO `od_media_owner_detail` (`did`, `OD_Media_Type`, `OD_Media_ID`, `Owner_ID`) VALUES
(1, 0, 'ODM100', 'OWN100');

-- --------------------------------------------------------

--
-- Table structure for table `od_media_work_done`
--

CREATE TABLE `od_media_work_done` (
  `wd_id` int(11) NOT NULL,
  `OD_Media_Type` int(11) DEFAULT NULL,
  `OD_Media_ID` varchar(20) DEFAULT NULL,
  `Line_No` int(11) DEFAULT NULL,
  `Work_Name` varchar(100) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL,
  `Qty_Of_Display_Duration` int(11) DEFAULT NULL,
  `Billing_Amount` decimal(38,20) DEFAULT NULL,
  `File_Name` varchar(50) DEFAULT NULL,
  `File_Uploaded` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `od_media_work_done`
--

INSERT INTO `od_media_work_done` (`wd_id`, `OD_Media_Type`, `OD_Media_ID`, `Line_No`, `Work_Name`, `Year`, `Qty_Of_Display_Duration`, `Billing_Amount`, `File_Name`, `File_Uploaded`) VALUES
(33, NULL, 'ODM100', NULL, NULL, '1991', NULL, NULL, '1642782137epfo pdf.pdf', NULL),
(34, NULL, 'ODM100', NULL, NULL, '1993', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `oid` int(11) NOT NULL,
  `Owner_ID` varchar(20) DEFAULT NULL,
  `Owner_Name` varchar(100) DEFAULT NULL,
  `Mobile_No_` varchar(10) DEFAULT NULL,
  `Email_ID` varchar(60) DEFAULT NULL,
  `Phone_No_` varchar(20) DEFAULT NULL,
  `Fax_No_` varchar(20) DEFAULT NULL,
  `Address_1` varchar(250) DEFAULT NULL,
  `Address_2` varchar(250) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `PIN_Code` varchar(10) DEFAULT NULL,
  `HO_Same_Address_as_DO` int(11) DEFAULT NULL,
  `DO_Address` varchar(250) DEFAULT NULL,
  `DO_Landline_No` varchar(15) DEFAULT NULL,
  `DO_Fax_No_` varchar(15) DEFAULT NULL,
  `DO_EMail` varchar(60) DEFAULT NULL,
  `DO_Mobile_No_` varchar(10) DEFAULT NULL,
  `DO_PIN_Code` varchar(10) DEFAULT NULL,
  `DO_City` varchar(50) DEFAULT NULL,
  `DO_State` varchar(10) DEFAULT NULL,
  `DO_District` varchar(50) DEFAULT NULL,
  `User_ID` varchar(20) DEFAULT NULL,
  `Group_Name` varchar(50) DEFAULT NULL,
  `Printed` varchar(10) DEFAULT NULL,
  `BR_Code` varchar(10) DEFAULT NULL,
  `Pay_Mode` int(11) DEFAULT NULL,
  `Account_No` varchar(20) DEFAULT NULL,
  `Account_Type` varchar(10) DEFAULT NULL,
  `MICR_Code` varchar(10) DEFAULT NULL,
  `MICR_City_Code` varchar(10) DEFAULT NULL,
  `Local` varchar(30) DEFAULT NULL,
  `RBI_AG_Code` varchar(10) DEFAULT NULL,
  `RBI_BR_Code` varchar(10) DEFAULT NULL,
  `State_Code` varchar(10) DEFAULT NULL,
  `STEPS_BR_Code` varchar(10) DEFAULT NULL,
  `STEPS_Account_NO` varchar(20) DEFAULT NULL,
  `GRP_Password` varchar(50) DEFAULT NULL,
  `STEPS_CoreBank` varchar(10) DEFAULT NULL,
  `AUTH_Sign_Name` varchar(50) DEFAULT NULL,
  `AUTH_Sign_Desgn` varchar(50) DEFAULT NULL,
  `IFSC_Code` varchar(15) DEFAULT NULL,
  `IFSC_Account_Name` varchar(80) DEFAULT NULL,
  `IFSC_Account_NO` varchar(20) DEFAULT NULL,
  `IFSC_Address` varchar(250) DEFAULT NULL,
  `IFSC_File` varchar(50) DEFAULT NULL,
  `Adwing_Pay_Mode` int(11) DEFAULT NULL,
  `PFMS_UniqueCode` varchar(20) DEFAULT NULL,
  `Group_New_Name` varchar(200) DEFAULT NULL,
  `Sanction_Payee` varchar(200) DEFAULT NULL,
  `Owner_Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`oid`, `Owner_ID`, `Owner_Name`, `Mobile_No_`, `Email_ID`, `Phone_No_`, `Fax_No_`, `Address_1`, `Address_2`, `City`, `District`, `State`, `PIN_Code`, `HO_Same_Address_as_DO`, `DO_Address`, `DO_Landline_No`, `DO_Fax_No_`, `DO_EMail`, `DO_Mobile_No_`, `DO_PIN_Code`, `DO_City`, `DO_State`, `DO_District`, `User_ID`, `Group_Name`, `Printed`, `BR_Code`, `Pay_Mode`, `Account_No`, `Account_Type`, `MICR_Code`, `MICR_City_Code`, `Local`, `RBI_AG_Code`, `RBI_BR_Code`, `State_Code`, `STEPS_BR_Code`, `STEPS_Account_NO`, `GRP_Password`, `STEPS_CoreBank`, `AUTH_Sign_Name`, `AUTH_Sign_Desgn`, `IFSC_Code`, `IFSC_Account_Name`, `IFSC_Account_NO`, `IFSC_Address`, `IFSC_File`, `Adwing_Pay_Mode`, `PFMS_UniqueCode`, `Group_New_Name`, `Sanction_Payee`, `Owner_Type`) VALUES
(1, 'OWN100', 'first publication', '4739487938', 'first@gmail.com', '43859487587435', '3232', 'danapur address', NULL, 'patna', 'Patna', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'US01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sole_medias_address`
--

CREATE TABLE `sole_medias_address` (
  `sm_id` int(11) NOT NULL,
  `OD_MediaType` int(11) DEFAULT NULL,
  `Sole_Media_ID` varchar(20) DEFAULT NULL,
  `Line_No` int(11) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `State` varchar(10) DEFAULT NULL,
  `District` varchar(40) DEFAULT NULL,
  `Zone` int(11) DEFAULT NULL,
  `Latitude` decimal(38,20) DEFAULT NULL,
  `Longitde` decimal(38,20) DEFAULT NULL,
  `Landmark` varchar(250) DEFAULT NULL,
  `Image_File_Name` varchar(50) DEFAULT NULL,
  `OD_Media_ID` varchar(20) DEFAULT NULL,
  `Display_Size` decimal(38,20) DEFAULT NULL,
  `Illumination_Type` int(11) DEFAULT NULL,
  `Availability_Start_Date` datetime DEFAULT NULL,
  `Availability_End_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sole_medias_address`
--

INSERT INTO `sole_medias_address` (`sm_id`, `OD_MediaType`, `Sole_Media_ID`, `Line_No`, `City`, `State`, `District`, `Zone`, `Latitude`, `Longitde`, `Landmark`, `Image_File_Name`, `OD_Media_ID`, `Display_Size`, `Illumination_Type`, `Availability_Start_Date`, `Availability_End_Date`) VALUES
(61, NULL, 'ODM100', NULL, 'patna', '1', 'Patna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, 'ODM100', NULL, 'indore', '3', 'Indore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `country_id`) VALUES
(1, 'Bihar', 1),
(2, 'UP', 1),
(3, 'MP', 1),
(4, 'Jharkhand', 1),
(5, 'Karachi', 5),
(6, 'Lahor', 5),
(7, 'Washingtan', 2),
(8, 'NewYork', 2),
(9, 'Hiroshima', 3),
(10, 'Nagashaki', 3),
(11, 'Southhall', 4);

-- --------------------------------------------------------

--
-- Table structure for table `umm_user`
--

CREATE TABLE `umm_user` (
  `u_id` int(11) NOT NULL,
  `UserType` int(11) DEFAULT NULL,
  `UserID` varchar(255) DEFAULT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umm_user`
--

INSERT INTO `umm_user` (`u_id`, `UserType`, `UserID`, `UserName`, `Email`, `Password`) VALUES
(1, NULL, 'US01', 'First', 'first@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_emp_od_media`
--

CREATE TABLE `vendor_emp_od_media` (
  `v_id` int(11) NOT NULL,
  `OD_Category` int(11) DEFAULT NULL,
  `OD_Media_ID` varchar(20) DEFAULT NULL,
  `PM_Agency_Name` varchar(50) DEFAULT NULL,
  `HO_Address` varchar(250) DEFAULT NULL,
  `HO_Landline_No_` varchar(15) DEFAULT NULL,
  `HO_Fax_No_` varchar(15) DEFAULT NULL,
  `HO_EMail` varchar(60) DEFAULT NULL,
  `HO_Mobile_No_` varchar(10) DEFAULT NULL,
  `BO_Address` varchar(250) DEFAULT NULL,
  `BO_Landline_No_` varchar(15) DEFAULT NULL,
  `BO_Fax_No_` varchar(15) DEFAULT NULL,
  `BO_EMail` varchar(60) DEFAULT NULL,
  `BO_Mobile_No_` varchar(10) DEFAULT NULL,
  `DO_Address` varchar(250) DEFAULT NULL,
  `DO_Landline_No_` varchar(15) DEFAULT NULL,
  `DO_Fax_No_` varchar(15) DEFAULT NULL,
  `DO_EMail` varchar(60) DEFAULT NULL,
  `DO_Mobile_No_` varchar(10) DEFAULT NULL,
  `Legal_Status_of_Company` int(11) DEFAULT NULL,
  `Other_Relevant_Information` varchar(200) DEFAULT NULL,
  `Authority_Which_granted_Media` varchar(200) DEFAULT NULL,
  `Amount_paid_to_Authority` decimal(38,20) DEFAULT NULL,
  `License_From` datetime DEFAULT NULL,
  `License_To` datetime DEFAULT NULL,
  `Media_Type` int(11) DEFAULT NULL,
  `Rental_Agreement` int(11) DEFAULT NULL,
  `Applying_For_OD_Media_Type` int(11) DEFAULT NULL,
  `Media_Display_size` varchar(20) DEFAULT NULL,
  `Illumination` int(11) DEFAULT NULL,
  `GST_No_` varchar(20) DEFAULT NULL,
  `TIN_TAN_VAT_No_` varchar(20) DEFAULT NULL,
  `DD_Date` datetime DEFAULT NULL,
  `DD_No_` varchar(10) DEFAULT NULL,
  `DD_Bank_Name` varchar(50) DEFAULT NULL,
  `DD_Bank_Branch_Name` varchar(50) DEFAULT NULL,
  `Application_Amount` decimal(38,20) DEFAULT NULL,
  `PAN` varchar(10) DEFAULT NULL,
  `Bank_Name` varchar(50) DEFAULT NULL,
  `Bank_Branch` varchar(50) DEFAULT NULL,
  `IFSC_Code` varchar(20) DEFAULT NULL,
  `Account_No_` varchar(20) DEFAULT NULL,
  `Company_Legal_Documents` int(11) DEFAULT NULL,
  `Notarized_Copy_Of_Agreement` int(11) DEFAULT NULL,
  `Photographs` int(11) DEFAULT NULL,
  `Affidavit_Of_Oath` int(11) DEFAULT NULL,
  `GST_Registration` int(11) DEFAULT NULL,
  `CA_Certified_Balance_Sheet` int(11) DEFAULT NULL,
  `Self_declaration` int(11) DEFAULT NULL,
  `Legal_Doc_File_Name` varchar(50) DEFAULT NULL,
  `Notarized_Copy_File_Name` varchar(50) DEFAULT NULL,
  `Photo_File_Name` varchar(50) DEFAULT NULL,
  `Affidavit_File_Name` varchar(50) DEFAULT NULL,
  `GST_File_Name` varchar(50) DEFAULT NULL,
  `Balance_Sheet_File_Name` varchar(50) DEFAULT NULL,
  `Authorized_Rep_Name` varchar(60) DEFAULT NULL,
  `AR_Address` varchar(200) DEFAULT NULL,
  `AR_Landline_No_` varchar(20) DEFAULT NULL,
  `AR_FAX_No_` varchar(20) DEFAULT NULL,
  `AR_Mobile_No_` varchar(10) DEFAULT NULL,
  `AR_Email` varchar(50) DEFAULT NULL,
  `Contract_No_` varchar(20) DEFAULT NULL,
  `Quantity_Of_Display` int(11) DEFAULT NULL,
  `License_Fees` decimal(38,20) DEFAULT NULL,
  `PAN_Attached` int(11) DEFAULT NULL,
  `PAN_File_Name` varchar(50) DEFAULT NULL,
  `User_ID` varchar(20) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `Global_Dimension1_Code` varchar(20) DEFAULT NULL,
  `Global_Dimension2_Code` varchar(20) DEFAULT NULL,
  `Sender_ID` varchar(25) DEFAULT NULL,
  `Receiver_ID` varchar(25) DEFAULT NULL,
  `Recommended_To_Committee` int(11) DEFAULT NULL,
  `Modification` int(11) DEFAULT NULL,
  `Media_Sub_Category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_emp_od_media`
--

INSERT INTO `vendor_emp_od_media` (`v_id`, `OD_Category`, `OD_Media_ID`, `PM_Agency_Name`, `HO_Address`, `HO_Landline_No_`, `HO_Fax_No_`, `HO_EMail`, `HO_Mobile_No_`, `BO_Address`, `BO_Landline_No_`, `BO_Fax_No_`, `BO_EMail`, `BO_Mobile_No_`, `DO_Address`, `DO_Landline_No_`, `DO_Fax_No_`, `DO_EMail`, `DO_Mobile_No_`, `Legal_Status_of_Company`, `Other_Relevant_Information`, `Authority_Which_granted_Media`, `Amount_paid_to_Authority`, `License_From`, `License_To`, `Media_Type`, `Rental_Agreement`, `Applying_For_OD_Media_Type`, `Media_Display_size`, `Illumination`, `GST_No_`, `TIN_TAN_VAT_No_`, `DD_Date`, `DD_No_`, `DD_Bank_Name`, `DD_Bank_Branch_Name`, `Application_Amount`, `PAN`, `Bank_Name`, `Bank_Branch`, `IFSC_Code`, `Account_No_`, `Company_Legal_Documents`, `Notarized_Copy_Of_Agreement`, `Photographs`, `Affidavit_Of_Oath`, `GST_Registration`, `CA_Certified_Balance_Sheet`, `Self_declaration`, `Legal_Doc_File_Name`, `Notarized_Copy_File_Name`, `Photo_File_Name`, `Affidavit_File_Name`, `GST_File_Name`, `Balance_Sheet_File_Name`, `Authorized_Rep_Name`, `AR_Address`, `AR_Landline_No_`, `AR_FAX_No_`, `AR_Mobile_No_`, `AR_Email`, `Contract_No_`, `Quantity_Of_Display`, `License_Fees`, `PAN_Attached`, `PAN_File_Name`, `User_ID`, `Status`, `Global_Dimension1_Code`, `Global_Dimension2_Code`, `Sender_ID`, `Receiver_ID`, `Recommended_To_Committee`, `Modification`, `Media_Sub_Category`) VALUES
(1, NULL, 'ODM100', NULL, 'head office', '85794578945', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'any', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsds', 'tin', NULL, '32323', 'HDFC', 'Indore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '16427813982021ticket.pdf', NULL, '1642781398ankita_ticket.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'US01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `od_media_owner_detail`
--
ALTER TABLE `od_media_owner_detail`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `od_media_work_done`
--
ALTER TABLE `od_media_work_done`
  ADD PRIMARY KEY (`wd_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `sole_medias_address`
--
ALTER TABLE `sole_medias_address`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umm_user`
--
ALTER TABLE `umm_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vendor_emp_od_media`
--
ALTER TABLE `vendor_emp_od_media`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `od_media_owner_detail`
--
ALTER TABLE `od_media_owner_detail`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `od_media_work_done`
--
ALTER TABLE `od_media_work_done`
  MODIFY `wd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sole_medias_address`
--
ALTER TABLE `sole_medias_address`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `umm_user`
--
ALTER TABLE `umm_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_emp_od_media`
--
ALTER TABLE `vendor_emp_od_media`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

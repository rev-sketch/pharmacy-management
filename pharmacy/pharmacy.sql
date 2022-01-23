-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2021 at 02:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `staff_id` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `phone_no`, `email`, `staff_id`, `address`, `date_registered`) VALUES
('1', 'candice', 'warner', '9999292929', 'candicewarner@gmail.com', 'cand12', 'australia', '2021-11-08 19:51:27'),
('2', 'lebron', 'james', '1234599999', 'lebronjames@gmail.com', 'leb123', 'newyork', '2014-11-12 18:53:01'),
('3', 'lionel', 'messi', '1000000000', 'lionelmessi@gmail.com', 'messi10', 'argentina', '2021-11-22 19:54:46'),
('4', 'harry', 'kane', '8888812345', 'harrykane@gmail.com', 'harry18', 'united kingdom', '2021-11-20 19:56:01'),
('admin', 'fname', 'lname', '9999999998', '99@gmail.com', 'A1', 'a,a,a,a', '2021-12-03 12:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL,
  `PHARMACY_NAME` varchar(50) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(10) COLLATE utf16_bin NOT NULL,
  `EMAIL` varchar(100) COLLATE utf16_bin NOT NULL,
  `USERNAME` varchar(255) COLLATE utf16_bin NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf16_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`ADDRESS`, `PHARMACY_NAME`, `CONTACT_NUMBER`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES
('Calicut, Kerala', 'Apollo Pharmacy', '8888899999', 'apollo@gmail.com', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` varchar(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `staff_id` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `first_name`, `last_name`, `phone_no`, `email`, `staff_id`, `address`, `date_registered`) VALUES
('C1', 'newfname', 'Redd', '7856785342', 'Georgereddy@gmail.co', 'asiufh3', 'FT-108,paradise,Andhra Prades', '2021-11-30 15:53:42'),
('tarun_chakith', 'Tarun', 'Tt', '1234567811', 't8@gmail.com', 'T55', 'Plot 760, Mallareddy Nagar Phase 2', '2021-12-01 17:45:34'),
('tarun_chakitha', 'Tarun', 'Tt', '1234567890', 't5@gmail.com', 'T1', 'Plot 760, Mallareddy Nagar Phase 2', '2021-12-01 17:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(10) COLLATE utf16_bin NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL,
  `DOCTOR_NAME` varchar(20) COLLATE utf16_bin NOT NULL,
  `DOCTOR_ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `NAME`, `CONTACT_NUMBER`, `ADDRESS`, `DOCTOR_NAME`, `DOCTOR_ADDRESS`) VALUES
(4, 'Kiran Suthar', '1234567690', 'Andheri East', 'Anshari', 'Andheri West'),
(6, 'Aditya', '7365687269', 'Virar West', 'Xyz', 'Virar West'),
(11, 'Shivam Tiwari', '6862369896', 'Dadar West', 'Dr Kapoor', 'Dadar East'),
(12, 'Kira', '1234567890', 'Bhbrbrsbrwb', 'Hbwrbhrh', 'Rhbrhbreb Dsdb'),
(13, 'Varsha Suthar', '7622369694', 'Rani Station', 'Dr Ramesh', 'Rani Station');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL,
  `INVOICE_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `TOTAL_DISCOUNT` int(11) NOT NULL,
  `NET_TOTAL` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`CUSTOMER_ID`, `INVOICE_NUMBER`, `INVOICE_DATE`, `TOTAL_AMOUNT`, `TOTAL_DISCOUNT`, `NET_TOTAL`) VALUES
(6, 1000, '2021-12-01', 30, 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','pharmacist','cashier','manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`) VALUES
('', '', 'pharmacist'),
('00', '00000000000000', 'pharmacist'),
('000', '0000000000000000000000', 'manager'),
('01', '0000000000000000000000', 'manager'),
('admin', 'admin22', 'admin'),
('B190610CS', 'efdwefsdfsdc', 'cashier'),
('C1', '11111111111111111111', 'cashier'),
('cashier', 'cashier123', 'cashier'),
('efisdcwksd', 'efsdkliwesdkws', 'pharmacist'),
('manager', 'manager123', 'manager'),
('pharmacist', 'pharmacist123', 'pharmacist'),
('tarun_chakith', 'efdjcklekldc', 'cashier'),
('tarun_chakitha', '11111111111111111', 'manager'),
('username', 'password', 'manager'),
('uuuu2', '123456789', 'manager'),
('uuuu3', '123445678546321', 'manager'),
('wes', '1234567854321', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` varchar(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `staff_id` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `first_name`, `last_name`, `phone_no`, `staff_id`, `email`, `address`, `date_registered`) VALUES
('000', 'Tarun', 'Tar', '9063172800', '000', '0@gmail.com', 'Plot 760, Mallareddy Nagar Phase 2', '2021-12-01 19:11:44'),
('01', 'Tarun', 'Tar', '9063172801', '01', '01@gmail.com', 'Plot 760, Mallareddy Nagar Phase 2', '2021-12-01 19:12:20'),
('1', 'Chinta', 'Srujan', '8997567897', 'yitio345', 'chintasrujan@gmail.com', '5-67,necklace road, vijayawada, Andhra Pradesh', '2021-11-30 15:40:39'),
('15', 'Ad', 'Sfd', '1234556788', 'T2', 'h@gmail.com', 'T,t,t,t', '2021-12-01 17:05:13'),
('2', 'John', 'Cena', '0000000000', 'invisible0', 'Johncena00@gmail.com', 'everywhere', '2021-11-30 15:42:05'),
('3', 'Siva', 'Krishna', '9238740978', 'cuioer25', 'siva123krishna@gmail.com', '34-384, New Delhi, India', '2021-11-30 15:44:48'),
('4', 'Chakravorty', 'Tanish', '8278956345', 'nyicrtv345', 'chakravorty_tanish@gmail.com', '56-9,Hyderabad, India', '2021-11-30 15:46:56'),
('5', 'Fn', 'Ln', '1234567895', 'S1', 't@gmail.com', 'T,t,t,t', '2021-12-01 12:56:51'),
('6', 'T', 'Tt', '1234567894', 'S2', 'r@gmail.com', 'T,t,t,t', '2021-12-01 12:59:13'),
('7', 'T', 'Tt', '1234567893', 'S3', '1@gmail.com', 'T,t,t,t', '2021-12-01 13:01:09'),
('8', 'Tttt', 'Tttt', '1234567896', 'T1', 'upparitarun729@gmail.com', '12,2,2,2', '2021-12-01 14:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `PACKING` varchar(20) COLLATE utf16_bin NOT NULL,
  `GENERIC_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `SUPPLIER_NAME` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`ID`, `NAME`, `PACKING`, `GENERIC_NAME`, `SUPPLIER_NAME`) VALUES
(1, 'Nicip', '10TAB', 'Paracetamole', 'BDPL PHARMA'),
(2, 'Crosin', '10tab', 'Hdsgvkvajkcbja', 'Kiran Pharma'),
(4, 'Dolo 650', '15tab', 'paracetamole', 'BDPL PHARMA'),
(5, 'Gelusil', '10tab', 'mint fla', 'Desai Pharma'),
(6, 'Tarun', '10 TAB', 'Bendakai', 'Tarun');

-- --------------------------------------------------------

--
-- Table structure for table `medicines_stock`
--

CREATE TABLE `medicines_stock` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `BATCH_ID` varchar(20) COLLATE utf16_bin NOT NULL,
  `EXPIRY_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `RATE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `medicines_stock`
--

INSERT INTO `medicines_stock` (`ID`, `NAME`, `BATCH_ID`, `EXPIRY_DATE`, `QUANTITY`, `MRP`, `RATE`) VALUES
(1, 'Crosin', 'CROS12', '12/34', 3, 2626, 26),
(2, 'Gelusil', 'G327', '12/42', 0, 15, 12),
(3, 'Dolo 650', 'DOLO32', '01/23', 1, 30, 24),
(4, 'Nicip Plus', 'NI325', '05/22', 3, 32.65, 28);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `pharmacist_id` varchar(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `staff_id` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`pharmacist_id`, `first_name`, `last_name`, `phone_no`, `staff_id`, `email`, `address`, `date_registered`) VALUES
('00', 'Tarun', 'Tar', '9063172800', '00', '00@gmail.com', 'Plot 760, Mallareddy Nagar Phase 2', '2021-12-01 19:14:13'),
('1', 'Popuri', 'Charan', '6793847945', 'singer45', 'popuricharan@gmail.com', '58-0873,iuasf,Andhra Pradesh', '2021-11-30 15:59:39'),
('2', 'Lanka', 'Jaswanth', '7843684387', 'ijlqwyu98', 'Lankajaswanth@gmail.com', '23-7,imuc,ayurpeta,Telangana', '2021-11-30 16:00:41'),
('3', 'Lucifer', 'Morningstar', '7777777777', 'evioloie', 'lucifermorningstar@gmail.com', '82149-34,uioasrh,New Delhi', '2021-11-30 16:01:54'),
('4', 'Sai', 'Vivek', '5763497861', 'jishue', 'saivivek@gmail.com', '39-i83,howru,Kadapa,Andhra Pradesh', '2021-11-30 16:03:15'),
('5', '', '', '', '', '', '', '2021-12-01 13:47:41'),
('efisdcwksd', 'Tarun', 'Asas', '9063172881', 'FF1', 'aa@gmail.com', 'Plot 760, Mallareddy Nagar Phase 2', '2021-12-01 19:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `customer_id`) VALUES
(5000, 4),
(5001, 4),
(5002, 4),
(5003, 4),
(5004, 4),
(5005, 4),
(5006, 4);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_detail`
--

CREATE TABLE `prescription_detail` (
  `id` int(11) NOT NULL,
  `strength` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `date_generated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription_detail`
--

INSERT INTO `prescription_detail` (`id`, `strength`, `dose`, `quantity`, `medicine_id`, `prescription_id`, `date_generated`) VALUES
(1, '500mg', '1x2', 10, 4, 5000, '2021-12-03 11:46:19'),
(7, '500 mg', '1x2', 12, 2, 5004, '2021-12-03 15:38:00'),
(8, '500 mg', '1x2', 12, 2, 5005, '2021-12-03 15:56:27'),
(15, '500 mg', '1x2', 12, 2, 5006, '2021-12-03 18:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `SUPPLIER_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL,
  `VOUCHER_NUMBER` int(11) NOT NULL,
  `PURCHASE_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `PAYMENT_STATUS` varchar(20) COLLATE utf16_bin NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`SUPPLIER_NAME`, `INVOICE_NUMBER`, `VOUCHER_NUMBER`, `PURCHASE_DATE`, `TOTAL_AMOUNT`, `PAYMENT_STATUS`, `supplier_id`) VALUES
('Desai ki ', 74356, 56234, '12-09-2020', 10000, 'total done', 1),
('iluwasl', 87634, 76524, '09-09-2020', 15000, 'total done', 11),
('kjlaef', 78254, 76834, '19-11-2019', 16000, 'total done', 15),
('89uevh', 2346, 87273, '12-09-2020', 20000, 'total done', 24),
('Bhaswanth', 64832, 473266, '13-06-2020', 12000, 'half done', 2),
('Kiran ravi', 78962, 692837, '25-05-2021', 9000, 'total done', 9),
('iulsddr', 585344, 984375, '12-09-2020', 5000, 'total done', 14);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL,
  `MEDICINE_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `BATCH_ID` varchar(20) COLLATE utf16_bin NOT NULL,
  `EXPIRY_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `DISCOUNT` int(11) NOT NULL,
  `TOTAL` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`CUSTOMER_ID`, `INVOICE_NUMBER`, `MEDICINE_NAME`, `BATCH_ID`, `EXPIRY_DATE`, `QUANTITY`, `MRP`, `DISCOUNT`, `TOTAL`) VALUES
(6, 1000, 'Dolo 650', 'DOLO32', '01/23', 1, 30, 0, 30),
(3, 64832, 'aceclophinac', '6344', '09-12-2024', 500, 120, 10, 110),
(1, 74356, 'Bleaching powder', '7634', '25-12-2023', 200, 70, 5, 65),
(2, 78962, 'paracetmol', '7823', '08-10-2025', 100, 50, 1, 49),
(4, 87634, 'montilakast hondacitrizine', '8743', '15-05-2022', 400, 20, 1, 19),
(5, 585344, 'phenol', '5782', '18-09-2025', 250, 60, 5, 55);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `EMAIL` varchar(100) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(10) COLLATE utf16_bin NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `NAME`, `EMAIL`, `CONTACT_NUMBER`, `ADDRESS`) VALUES
(1, 'Desai Pharma', 'desai@gmail.com', '9948724242', 'Mahim East'),
(2, 'BDPL PHARMA', 'bdpl@gmail.com', '8645632963', 'Santacruz West'),
(9, 'Kiran Pharma', 'kiranpharma@gmail.com', '7638683637', 'Andheri East'),
(10, 'Rsrnrnrndnn', 'ydj', '3737355538', '3fndfndfndndfnfdndfn'),
(11, 'Dfnsfndfndf', 'fnsn', '5475734385', 'Ndnss4yrhrhdhrdhrh'),
(12, 'SS Distributors', 'ssdis@gamil.com', '3867868752', 'Matunga West'),
(13, 'Avceve', 'ehh', '3466626226', 'Eteh266266262'),
(14, 'Hrshrhrjher', 'dzgdg', '4636347335', 'Rhrswjrnswjn'),
(15, 'Hmrxfmgtmt', 'trmtrm gm tr', '6553838835', '38ejtdjtdxetjdt'),
(20, 'Dtdxtkmtdshrrhhsrjrs', 'trmtrm gm tr', '6553838835', '38ejtdjtdxetjdt'),
(23, 'Fndn', 'nena ena', '3462462642', 'Ebsbsdbsdndsnsdfns'),
(24, 'Fndnbrwh', 'nena ena', '3462462642', 'Ebsbsdbsdndsnsdfns'),
(25, 'Jnentjrtj', 'nena ena', '3462462642', 'Ebsbsdbsdndsnsdfns'),
(26, 'Jerthjrtjtjr', 'nena ena', '3462462642', 'Ebsbsdbsdndsnsdfns'),
(28, 'Gahgkakbvkv', 'nena ena', '3462462642', 'Ebsbsdbsdndsnsdfns'),
(29, 'Hywhwhrhdw', 'nena ena', '3462462642', 'Ebsbsdbsdndsnsdfns'),
(30, 'Tarun', 'cccc@gmail.com', '1234567898', 'Hear,yaa Specifically Here Only');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `staff_id` (`staff_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`INVOICE_NUMBER`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `staff_id` (`staff_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NAME` (`NAME`);

--
-- Indexes for table `medicines_stock`
--
ALTER TABLE `medicines_stock`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `BATCH_ID` (`BATCH_ID`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`pharmacist_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `staff_id` (`staff_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `prescription_detail`
--
ALTER TABLE `prescription_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicine_id` (`medicine_id`),
  ADD KEY `prescription_id` (`prescription_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`VOUCHER_NUMBER`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`INVOICE_NUMBER`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `INVOICE_NUMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicines_stock`
--
ALTER TABLE `medicines_stock`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5007;

--
-- AUTO_INCREMENT for table `prescription_detail`
--
ALTER TABLE `prescription_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `VOUCHER_NUMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=984376;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customers` (`ID`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`ID`);

--
-- Constraints for table `prescription_detail`
--
ALTER TABLE `prescription_detail`
  ADD CONSTRAINT `prescription_detail_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`ID`),
  ADD CONSTRAINT `prescription_detail_ibfk_2` FOREIGN KEY (`prescription_id`) REFERENCES `prescription` (`prescription_id`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

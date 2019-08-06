-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 09:02 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obsoadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `header_title` varchar(255) NOT NULL,
  `header_description` text NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `middle_title` varchar(255) NOT NULL,
  `middle_description` text NOT NULL,
  `middle_image` varchar(255) NOT NULL,
  `middle_title_1` varchar(255) NOT NULL,
  `middle_description_1` text NOT NULL,
  `middle_image_1` varchar(255) NOT NULL,
  `middle_title_2` varchar(255) NOT NULL,
  `middle_description_2` text NOT NULL,
  `middle_image_2` varchar(255) NOT NULL,
  `middle_title_3` varchar(255) NOT NULL,
  `middle_description_3` text NOT NULL,
  `middle_image_3` varchar(255) NOT NULL,
  `middle_title_4` varchar(255) NOT NULL,
  `middle_description_4` text NOT NULL,
  `middle_image_4` varchar(255) NOT NULL,
  `middle_title_5` varchar(255) NOT NULL,
  `middle_description_5` text NOT NULL,
  `middle_image_5` varchar(255) NOT NULL,
  `footer_title` varchar(255) NOT NULL,
  `footer_description` text NOT NULL,
  `footer_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `header_title`, `header_description`, `header_image`, `middle_title`, `middle_description`, `middle_image`, `middle_title_1`, `middle_description_1`, `middle_image_1`, `middle_title_2`, `middle_description_2`, `middle_image_2`, `middle_title_3`, `middle_description_3`, `middle_image_3`, `middle_title_4`, `middle_description_4`, `middle_image_4`, `middle_title_5`, `middle_description_5`, `middle_image_5`, `footer_title`, `footer_description`, `footer_image`) VALUES
(1, 'asdfasd', 'asdfasd', 'asdfasdfsa', 'ASD', 'ASDF', 'ADSF', 'ASDF', 'ADSF', 'ADSF', 'ASDF', 'ASDF', 'ASDF', 'ADF', 'ASDF', 'ADSF', 'ASDF', 'ADSF', 'ADSF', 'ASDF', 'ADSF', 'ASDF', 'ASD', 'ADSF', 'ASDF');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `email`) VALUES
(1, '7644 Cedar Swamp St. <br> Logansport, IN 46947', '987456321', 'virendra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `status`) VALUES
(1, 'America (incl.Canada)', 1),
(2, 'LATAM', 1),
(3, 'Europe', 1),
(4, 'Middle East', 1),
(5, 'Asia (incl. Australasia)', 1),
(6, 'USA', 1),
(7, 'Canada', 1),
(8, 'Mexico', 1),
(9, 'Latam (Excl.MEX)\r\n', 1),
(10, 'England', 1),
(11, 'Scotland', 1),
(12, 'Ireland ', 1),
(13, 'Wales', 1),
(14, 'Germany', 1),
(15, 'Spain & Portugal', 1),
(16, 'France (incl. BENELUX)', 1),
(17, 'Sweden', 1),
(18, 'Denmark', 1),
(19, 'Norway', 1),
(26, 'Bulgaria', 1),
(27, 'Burkina Faso', 1),
(28, 'Burundi', 1),
(29, 'Cabo Verde', 1),
(30, 'Cambodia', 1),
(31, 'Cameroon', 1),
(32, 'Canada', 1),
(33, 'Central African Republic', 1),
(34, 'Chad', 1),
(35, 'Chile', 1),
(36, 'China', 1),
(37, 'Colombia', 1),
(38, 'Comoros', 1),
(39, 'Congo, Republic of the', 1),
(40, 'Congo, Democratic Republic of the', 1),
(41, 'Costa Rica', 1),
(42, 'Cote d Ivoire', 1),
(43, 'Croatia', 1),
(44, 'Cuba', 1),
(45, 'Cyprus', 1),
(46, 'Czech Republic', 1),
(47, 'Denmark', 1),
(48, 'Djibouti', 1),
(49, 'Dominica', 1),
(50, 'Dominican Republic', 1),
(51, 'Ecuador', 1),
(52, 'Egypt', 1),
(53, 'El Salvador', 1),
(54, 'Equatorial Guinea', 1),
(55, 'Eritrea', 1),
(56, 'Estonia', 1),
(57, 'Ethiopia', 1),
(58, 'Fiji', 1),
(59, 'Finland', 1),
(60, 'France', 1),
(61, 'Gabon', 1),
(62, 'Gambia', 1),
(63, 'Georgia', 1),
(64, 'Germany', 1),
(65, 'Ghana', 1),
(66, 'Greece', 1),
(67, 'Grenada', 1),
(68, 'Guatemala', 1),
(69, 'Guinea', 1),
(70, 'Guinea-Bissau', 1),
(71, 'Guyana', 1),
(72, 'Haiti', 1),
(73, 'Honduras', 1),
(74, 'Hungary', 1),
(75, 'Iceland', 1),
(76, 'India', 1),
(77, 'Indonesia', 1),
(78, 'Iran', 1),
(79, 'Iraq', 1),
(80, 'Ireland', 1),
(81, 'Italy', 1),
(82, 'Jamaica', 1),
(83, 'Japan', 1),
(84, 'Jordan', 1),
(85, 'Kazakhstan', 1),
(86, 'Kenya', 1),
(87, 'Kiribati', 1),
(88, 'Kosovo', 1),
(89, 'Kuwait', 1),
(90, 'Kyrgyzstan', 1),
(91, 'Laos', 1),
(92, 'Latvia', 1),
(93, 'Lebanon', 1),
(94, 'Lesotho', 1),
(95, 'Liberia', 1),
(96, 'Libya', 1),
(97, 'Liechtenstein', 1),
(98, 'Lithuania', 1),
(99, 'Luxembourg', 1),
(100, 'Macedonia', 1),
(101, 'Madagascar', 1),
(102, 'Malawi', 1),
(103, 'Malaysia', 1),
(104, 'Maldives', 1),
(105, 'Mali', 1),
(106, 'Malta', 1),
(107, 'Marshall Islands', 1),
(108, 'Mauritania', 1),
(109, 'Mauritius', 1),
(110, 'Mexico', 1),
(111, 'Micronesia', 1),
(112, 'Moldova', 1),
(113, 'Monaco', 1),
(114, 'Mongolia', 1),
(115, 'Montenegro', 1),
(116, 'Morocco', 1),
(117, 'Mozambique', 1),
(118, 'Myanmar (Burma)', 1),
(119, 'Namibia', 1),
(120, 'Nauru', 1),
(121, 'Nepal', 1),
(122, 'Netherlands', 1),
(123, 'New Zealand', 1),
(124, 'Nicaragua', 1),
(125, 'Niger', 1),
(126, 'Nigeria', 1),
(127, 'North Korea', 1),
(128, 'Norway', 1),
(129, 'Oman', 1),
(130, 'Pakistan', 1),
(131, 'Palau', 1),
(132, 'Palestine', 1),
(133, 'Panama', 1),
(134, 'Papua New Guinea', 1),
(135, 'Paraguay', 1),
(136, 'Peru', 1),
(137, 'Philippines', 1),
(138, 'Poland', 1),
(139, 'Portugal', 1),
(140, 'Qatar', 1),
(141, 'Romania', 1),
(142, 'Russia', 1),
(143, 'Rwanda', 1),
(144, 'St. Kitts and Nevis', 1),
(145, 'St. Lucia', 1),
(146, 'St. Vincent and The Grenadines', 1),
(147, 'Samoa', 1),
(148, 'San Marino', 1),
(149, 'Sao Tome and Principe', 1),
(150, 'Saudi Arabia', 1),
(151, 'Senegal', 1),
(152, 'Serbia', 1),
(153, 'Seychelles', 1),
(154, 'Sierra Leone', 1),
(155, 'Singapore', 1),
(156, 'Slovakia', 1),
(157, 'Slovenia', 1),
(158, 'Solomon Islands', 1),
(159, 'Somalia', 1),
(160, 'South Africa', 1),
(161, 'South Korea', 1),
(162, 'South Sudan', 1),
(163, 'Spain', 1),
(164, 'Sri Lanka', 1),
(165, 'Sudan', 1),
(166, 'Suriname', 1),
(167, 'Swaziland', 1),
(168, 'Sweden', 1),
(169, 'Switzerland', 1),
(170, 'Syria', 1),
(171, 'Taiwan', 1),
(172, 'Tajikistan', 1),
(173, 'Tanzania', 1),
(174, 'Thailand', 1),
(175, 'Timor-Leste', 1),
(176, 'Togo', 1),
(177, 'Tonga', 1),
(178, 'Trinidad and Tobago', 1),
(179, 'Tunisia', 1),
(180, 'Turkey', 1),
(181, 'Turkmenistan', 1),
(182, 'Tuvalu', 1),
(183, 'Uganda', 1),
(184, 'Ukraine', 1),
(185, 'United Arab Emirates', 1),
(186, 'United Kingdom (UK)', 1),
(187, 'United States of America (USA)', 1),
(188, 'Uruguay', 1),
(189, 'Uzbekistan', 1),
(190, 'Vanuatu', 1),
(191, 'Vatican City (Holy See)', 1),
(192, 'Venezuela', 1),
(193, 'Vietnam', 1),
(194, 'Yemen', 1),
(195, 'Zambia', 1),
(196, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`id`, `session_id`, `location`, `street_address`, `city`, `state`, `zip`, `country`, `address_type`, `creation_date`) VALUES
(1, '1843', '11C Dover Terrace', 'Ballygunge', 'Kolkata', 'West Bengal', '700019', 'india', 'AE', '2019-06-16 12:42:33'),
(2, '4292', '15D Andheri', 'Mumbai', 'Mumbai', 'Maharastra', '789456', 'usa', 'VI', '2019-06-16 13:10:39'),
(3, '5228', '16A Gariahat', 'Test Address', 'Kolkata', 'WB', '700029', 'india', 'AE', '2019-06-16 13:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(12) NOT NULL,
  `direct_dial` int(12) NOT NULL,
  `phone` int(12) NOT NULL,
  `key_personal_info` varchar(255) NOT NULL,
  `mkt_preferance` varchar(255) NOT NULL,
  `contact_status` varchar(255) NOT NULL,
  `mark_status` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contact`
--

INSERT INTO `customer_contact` (`id`, `company_id`, `session_id`, `fname`, `lname`, `gender`, `department`, `job_title`, `branch`, `email`, `mobile`, `direct_dial`, `phone`, `key_personal_info`, `mkt_preferance`, `contact_status`, `mark_status`, `status`, `creation_date`) VALUES
(1, 1, '1843', 'Yuvraj', 'Singh', 'male', 'Test Department', 'Test Job Title', 'Test Branch', 'yuvi@gmail.com', 2147483647, 2147483647, 0, 'Test Key Information', 'use_email', '', 1, '', '2019-06-16 12:43:52'),
(2, 1, '1843', 'Sachin', 'Tendulkar', 'male', 'Test Department Two', 'Batsman', 'Cricketer', 'sachin@gmail.com', 2147483647, 2147483647, 0, 'Test Key Details', 'use_sms', '', 0, '', '2019-06-16 12:52:26'),
(3, 2, '4292', 'Rahul', 'Dravid', 'male', 'Dravid', 'Cricketer', 'Batsman', 'rahul@gmail.com', 2147483647, 968574589, 0, 'Test Key Details1', 'use_email', '0', 0, '', '2019-06-16 13:16:02'),
(4, 3, '5228', 'Suresh', 'Raina', 'male', 'Cricketer', 'Batsman', 'test branch', 'raina@gmail.com', 2147483647, 2147483647, 0, 'Test Key', 'use_email', '', 1, '', '2019-06-16 13:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer_records`
--

CREATE TABLE `customer_records` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `trader_name` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `industry_sector` varchar(255) NOT NULL,
  `sector_free_tax` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `company_record` varchar(255) NOT NULL,
  `main_switchboard_number` varchar(255) NOT NULL,
  `estimated_frequency` varchar(255) NOT NULL,
  `estimated_spend` varchar(255) NOT NULL,
  `payment_terms` varchar(255) NOT NULL,
  `free_trade` varchar(255) NOT NULL,
  `payment_ref` varchar(255) NOT NULL,
  `manufacturer_use` varchar(255) NOT NULL,
  `other_manufacturer_used` text NOT NULL,
  `psl_information` text NOT NULL,
  `competitor_info` text NOT NULL,
  `discount_pricing_info` text NOT NULL,
  `mark_status` int(11) NOT NULL,
  `suspus` int(11) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_records`
--

INSERT INTO `customer_records` (`id`, `session_id`, `company_name`, `trader_name`, `about`, `industry_sector`, `sector_free_tax`, `url`, `company_record`, `main_switchboard_number`, `estimated_frequency`, `estimated_spend`, `payment_terms`, `free_trade`, `payment_ref`, `manufacturer_use`, `other_manufacturer_used`, `psl_information`, `competitor_info`, `discount_pricing_info`, `mark_status`, `suspus`, `creation_date`) VALUES
(1, '1843', 'Tapan Company', 'New Admin', 'Test About us1', 'Sales Industries One', 'Test Sector', 'http://www.google.com', 'lead_forensics', '98745623', 'lessthenoneyear', '500kplus', '7525_advance', 'trade2', 'Test Reference', 'Manufacturer Two,Manufacturer Three,Manufacturer Five', 'Test Manufacturer Used', 'Test PSL Information', 'Test Competitor Information', 'Test Discount & Pricing', 0, 0, '2019-06-16 12:42:33'),
(2, '4292', 'Viren Company', 'New Admin', 'Test Aboutus', 'Sales Industries Two', 'Test Free', 'http://www.google.com', 'facebook_lead', '987588', 'lessthenoneyear', '1mplus', 'eom', 'trade2', '9874569633', 'Manufacturer One,Manufacturer Five', 'ghjg', 'jhhj', 'jghj', 'gf', 0, 0, '2019-06-16 13:10:39'),
(3, '5228', 'Dhoni Company', 'New Admin', 'Test aboutus', 'Sales Industries Three', 'test sector', 'http://www.google.com', 'facebook_lead', '987488', 'daily', '100kplus', '90 Days DOI', 'trade2', 'Test Reference', 'Manufacturer Two,Manufacturer Four', 'Test 1', 'Test 2', 'Test 3', 'Test 4', 0, 1, '2019-06-16 13:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `sales_target` varchar(255) NOT NULL,
  `permission_access` varchar(255) NOT NULL,
  `idproof` varchar(255) NOT NULL,
  `emp_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `reg_status` int(11) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `company_name_front` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `lead1` varchar(255) DEFAULT NULL,
  `lead2` varchar(255) NOT NULL,
  `suspus` int(11) NOT NULL,
  `is_frontend` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `company_id`, `industry_id`, `contact_id`, `company_name_front`, `full_name`, `email`, `number`, `lead1`, `lead2`, `suspus`, `is_frontend`, `created_at`) VALUES
(12, 1, 1, 1, '', '', 'yuvi@gmail.com', '2147483647', '2019-06-25 09:29:15', 'test', 2, NULL, '2019-06-25 13:29:47'),
(13, 2, 2, 3, '', '', 'rahul@gmail.com', '2147483647', '2019-06-25', 'virendra testing', 1, NULL, '2019-06-26 00:38:04'),
(14, 3, 3, 4, '', '', 'raina@gmail.com', '2147483647', '2019-06-25', 'testing', 2, NULL, '2019-06-26 00:38:47'),
(15, 2, 2, 3, '', '', 'rahul@gmail.com', '2147483647', '2019-06-26', 'asdfsad', 0, NULL, '2019-06-26 13:49:51'),
(17, NULL, NULL, NULL, 'vee-dev software', 'virendra', 'virendrameshram60@gmail.com', '8888643096', NULL, 'test', 0, 1, '2019-06-26 19:16:09'),
(18, NULL, NULL, NULL, 'vee-dev software11', 'virendra', 'yuvi@gmail.com', '2147483647', NULL, 'test', 1, 1, '2019-06-27 00:42:27'),
(19, NULL, NULL, NULL, 'vee-dev software22', 'virendra', 'virendrameshram60@gmail.com', '9766947586', NULL, 'test', 0, NULL, '2019-06-27 00:55:05'),
(20, NULL, NULL, NULL, 'vee-dev software22333', 'virendraMMMM', 'virendrameshram60@gmail.com', '8888643096', NULL, 'testing', 0, 1, '2019-06-27 00:56:08'),
(21, NULL, NULL, NULL, 'vee-dev software225555', 'virendrakkkkk', 'virendrameshram60@gmail.com', '2147483647', NULL, 'testing', 0, 1, '2019-06-27 01:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_qty`
--

CREATE TABLE `enquiry_qty` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `part` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_qty`
--

INSERT INTO `enquiry_qty` (`id`, `enquiry_id`, `qty`, `part`, `created_at`) VALUES
(15, 7, '62', '100', '2019-06-22 20:18:19'),
(28, 7, '50', '100', '2019-06-22 21:22:28'),
(29, 8, '456465465', '12', '2019-06-25 01:18:37'),
(30, 8, '465456465', '13', '2019-06-25 01:18:37'),
(31, 9, '123132121', '1', '2019-06-25 01:24:03'),
(32, 10, '2', '5464646', '2019-06-25 01:24:36'),
(33, 10, '43', 'fsdfsadf', '2019-06-25 01:24:36'),
(34, 11, '15', '12345678', '2019-06-25 01:43:29'),
(35, 11, '16', '12345612', '2019-06-25 01:43:30'),
(36, 12, '1', '123 456-478', '2019-06-25 13:29:47'),
(37, 12, '2', '456 789-456', '2019-06-25 13:29:47'),
(38, 13, '1', '50', '2019-06-26 00:38:05'),
(39, 14, '15', '500', '2019-06-26 00:38:47'),
(40, 15, '15', '12345678', '2019-06-26 13:49:51'),
(41, 16, '15', '155 456-798', '2019-06-26 16:46:34'),
(42, 16, '20', '156 456-798', '2019-06-26 16:46:34'),
(43, 17, '15', '12345678', '2019-06-26 19:16:09'),
(44, 17, '50', '12345612', '2019-06-26 19:16:09'),
(45, 18, '345234234', '50', '2019-06-27 00:42:27'),
(46, 18, '45645634534', '789', '2019-06-27 00:42:27'),
(47, 19, '', '123456', '2019-06-27 00:55:05'),
(48, 20, '', '987456', '2019-06-27 00:56:08'),
(49, 21, '15', '987456', '2019-06-27 01:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `website_title` varchar(255) NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `website_keyword` varchar(255) NOT NULL,
  `website_description` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(11) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `industry`, `creation_date`, `status`) VALUES
(1, 'Sales Industries One', '2019-06-16 12:32:08', 0),
(2, 'Sales Industries Two', '2019-06-16 12:32:16', 0),
(3, 'Sales Industries Three', '2019-06-16 12:32:24', 0),
(4, 'Sales Industries Four', '2019-06-16 12:32:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer`, `creation_date`, `status`) VALUES
(1, 'Manufacturer One', '2019-06-16 12:30:14', 0),
(2, 'Manufacturer Two', '2019-06-16 12:30:26', 0),
(3, 'Manufacturer Three', '2019-06-16 12:30:34', 0),
(4, 'Manufacturer Four', '2019-06-16 12:30:42', 0),
(5, 'Manufacturer Five', '2019-06-16 12:30:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `part_number` varchar(255) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `range` varchar(255) NOT NULL,
  `tech_info` text NOT NULL,
  `description` text NOT NULL,
  `internal_part_notes` text NOT NULL,
  `licycle_status` varchar(255) NOT NULL,
  `lifecycle_date` varchar(255) NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `height` double NOT NULL,
  `weight_kg` double NOT NULL,
  `weight_lb` double NOT NULL,
  `country` varchar(255) NOT NULL,
  `qty_brand_new` varchar(255) NOT NULL,
  `qty_new_surplus` varchar(255) NOT NULL,
  `qty_pre_owned` varchar(255) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `lead_time` varchar(255) NOT NULL,
  `export_comm_code` varchar(255) NOT NULL,
  `brand_new_rrp` varchar(255) NOT NULL,
  `web_price` int(11) NOT NULL,
  `date_sheet_info` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `part_number`, `manufacturer_name`, `type`, `range`, `tech_info`, `description`, `internal_part_notes`, `licycle_status`, `lifecycle_date`, `length`, `width`, `height`, `weight_kg`, `weight_lb`, `country`, `qty_brand_new`, `qty_new_surplus`, `qty_pre_owned`, `total_qty`, `lead_time`, `export_comm_code`, `brand_new_rrp`, `web_price`, `date_sheet_info`, `status`, `creation_date`) VALUES
(1, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(2, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(3, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(4, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(5, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(6, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(7, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(8, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(9, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(10, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(11, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(12, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(13, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(14, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(15, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(16, '6897Penguins.jpg', '987456', 'Manufacturer Two', 'Test Type Two', 'Test Range Two', 'Test tech info 2', 'test desc 2', 'test part notes 2', 'Test Life Cycle2', '2019-06-15', 100, 300, 400, 500, 600, '3', '900', '800', '700', 2400, '600', '52', '85', 500, '688', 0, '2019-06-16 12:41:08'),
(17, '7679Tulips.jpg', '123456', 'Manufacturer One', 'Test Type', 'Test Range', 'Test tech info', 'test description', 'Test Part Notes', 'Test Life Cycle', '2019-06-16', 100, 200, 300, 50, 20, '14', '10', '15', '20', 45, '20', '30', '600', 500, '900', 0, '2019-06-16 12:38:46'),
(18, '26582', '', '1', 'yuvi@gmail.com', '25', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-06-22 12:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `productcondition`
--

CREATE TABLE `productcondition` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Codeigniter Admin Template'),
(2, 'system_title', 'Codeigniter Admin Template');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `creation_date`, `status`) VALUES
(1, 'slider1', 'Penguins.jpg', '2019-06-17 14:29:46', 0),
(2, 'slider2', 'Penguins.jpg', '2019-06-17 14:30:48', 0),
(3, 'slider3', 'Penguins.jpg', '2019-06-17 14:30:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `facebbok_url` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `instagram_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebbok_url`, `youtube_url`, `instagram_url`) VALUES
(1, 'htt://www.facebook.com', 'htt://www.youtube.com', 'htt://www.instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_address`
--

CREATE TABLE `supplier_address` (
  `id` int(11) NOT NULL,
  `session_id` int(5) NOT NULL,
  `location` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_address`
--

INSERT INTO `supplier_address` (`id`, `session_id`, `location`, `street_address`, `city`, `state`, `zip`, `country`, `address_type`, `creation_date`) VALUES
(1, 8219, 'jklj', 'jlk', 'lkjklj', 'kljlk', '89767', 'usa', 'AE', '2019-06-16 22:25:37'),
(2, 6205, 'asdfsad', 'asdfsa', 'asdf', 'sdsdfsad', 'sadfsad', 'india', 'AE', '2019-06-18 13:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_contact`
--

CREATE TABLE `supplier_contact` (
  `id` int(11) NOT NULL,
  `company_id` int(12) NOT NULL,
  `session_id` int(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(12) NOT NULL,
  `direct_dial` int(12) NOT NULL,
  `phone` int(12) NOT NULL,
  `key_personal_info` varchar(255) NOT NULL,
  `mkt_preferance` varchar(255) NOT NULL,
  `contact_status` varchar(255) NOT NULL,
  `mark_status` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_contact`
--

INSERT INTO `supplier_contact` (`id`, `company_id`, `session_id`, `fname`, `lname`, `gender`, `department`, `job_title`, `branch`, `email`, `mobile`, `direct_dial`, `phone`, `key_personal_info`, `mkt_preferance`, `contact_status`, `mark_status`, `status`, `creation_date`) VALUES
(1, 1, 8219, 'jlkjl', 'jhj', 'male', 'jkhjk', 'jkhjkh', 'hj', 'jj@kk.com', 677, 6664, 0, '664', 'use_sms', '', 0, '', '2019-06-16 19:58:35'),
(2, 2, 6205, 'Virendra', 'Meshram', 'male', 'asdfs', 'sdfas', 'asdf', 'virendrameshram60@gmail.com', 879797979, 2147483647, 0, 'sdfasdasdf', 'use_email', '', 0, '', '2019-06-18 13:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_industry`
--

CREATE TABLE `supplier_industry` (
  `id` int(11) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_industry`
--

INSERT INTO `supplier_industry` (`id`, `industry`, `creation_date`, `status`) VALUES
(1, 'Supplier Industries One', '2019-06-16 12:33:26', 0),
(2, 'Supplier Industries Two', '2019-06-16 12:33:41', 0),
(3, 'Supplier Industries Three', '2019-06-16 12:33:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_records`
--

CREATE TABLE `supplier_records` (
  `id` int(11) NOT NULL,
  `session_id` int(5) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `trader_name` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `industry_sector` varchar(255) NOT NULL,
  `sector_free_tax` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `generic_number` varchar(255) NOT NULL,
  `estimated_frequency` varchar(255) NOT NULL,
  `ordercutoff` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `ordercutoffdeliveryinfo` varchar(255) NOT NULL,
  `estimated_spend` varchar(255) NOT NULL,
  `main_switchboard_number` varchar(255) NOT NULL,
  `payment_terms` varchar(255) NOT NULL,
  `payment_ref` varchar(255) NOT NULL,
  `discount_pricing` varchar(255) NOT NULL,
  `mark_status` int(11) NOT NULL,
  `suspus` int(11) NOT NULL,
  `standard_delivery` varchar(255) NOT NULL,
  `product_condition` varchar(255) DEFAULT NULL,
  `other_manufacturer` varchar(255) NOT NULL,
  `lifecycle_status` varchar(255) NOT NULL,
  `manufacturer_use` varchar(255) NOT NULL,
  `programming` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_records`
--

INSERT INTO `supplier_records` (`id`, `session_id`, `company_name`, `trader_name`, `about`, `industry_sector`, `sector_free_tax`, `url`, `generic_number`, `estimated_frequency`, `ordercutoff`, `timezone`, `ordercutoffdeliveryinfo`, `estimated_spend`, `main_switchboard_number`, `payment_terms`, `payment_ref`, `discount_pricing`, `mark_status`, `suspus`, `standard_delivery`, `product_condition`, `other_manufacturer`, `lifecycle_status`, `manufacturer_use`, `programming`, `creation_date`) VALUES
(1, 8219, 'ldsfhkjdfhj', 'New Admin', 'ldsfuil hjasdjkf lkdsfj', 'Sales Industries Two', 'lhlj', 'http://www.google.com', 'kjhghkg', 'sameday', 'mgghgf', '(GMT-12:00) International Date Line West', 'mmn,mn', 'sameday', '', 'advance', 'ljkl;jl;k', 'bnmnb', 0, 0, 'lessthen50k', 'factorysealed,openbox,used', '.jkljl', 'obsolete', 'Manufacturer One,Manufacturer Two', '', '2019-06-16 19:57:44'),
(2, 6205, 'VEE-DEV Software 001', 'New Admin', 'test', 'Supplier Industries One', 'test', 'http://localhost/obsoadmin/admin/', 'asdfasdfasdf', 'pre9am', 'asdfsa', '-10', 'asdfasd', '', '', '5050 Advance', 'asdfs', 'sdfsdf', 0, 0, '2days', 'openbox,used', '', 'phaseout,obsolete', 'Manufacturer Two,Manufacturer Five,asdfasd', '', '2019-06-18 13:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `empid` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country` int(11) NOT NULL,
  `sales_target` varchar(255) NOT NULL,
  `permission_access` text NOT NULL,
  `idproof` varchar(255) NOT NULL,
  `emp_image` varchar(255) NOT NULL,
  `reg_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `verify_string` text,
  `status` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `empid`, `first_name`, `last_name`, `gender`, `designation`, `email`, `address`, `mobile`, `phone`, `password`, `country`, `sales_target`, `permission_access`, `idproof`, `emp_image`, `reg_status`, `created_at`, `verify_string`, `status`, `role`) VALUES
(1, 0, 'Super', 'Admin', '', '', 'admin1@admin.com', '', '0100 500 600', 0, '8d788385431273d11e8b43bb78f3aa41', 14, '', 'calender,sales,quote_pipeline,supplier_database,order_delivery,other,report_status,finance,cms', '', '', 0, '2018-03-02 14:51:38', NULL, 1, 'admin'),
(16, 0, 'Esther', 'User', '', '', 'teacher@teacher.com', '', '08053433', 0, '8d788385431273d11e8b43bb78f3aa41', 11, '', 'calender,sales,quote_pipeline,supplier_database,order_delivery,other,report_status,finance', '', '', 0, '2019-02-27 00:10:25', NULL, 0, 'user'),
(17, 0, 'New Admin', 'New Admin', '', '', 'admin@admin.com', '', '08053433', 0, '81dc9bdb52d04dc20036dbd8313ed055', 126, '', 'calender,sales,quote_pipeline,supplier_database,order_delivery,other,report_status,finance,cms', '', '', 0, '2019-02-27 23:51:25', NULL, 1, 'admin'),
(22, 58370, 'sunil', 'kumar', 'male', '2', 'cutesunilsingh@gmail.com', 'Gandhi nagar\r\nGandi nagar', '', 2147483647, '36ff1281b3b10aacbc09e55b5fde887f', 76, '5', 'sales,quote_pipeline,order_delivery,other,report_status', '71478ad-1.png', '93895ad-2.png', 1, '2019-06-06 02:38:08', NULL, 1, 'sales'),
(25, 56024, 'sunil', 'kumar', 'female', '1', 'sunildeveloper07@gmail.com', 'dsfklal', '', 2147483647, 'fb340d9e32f4502fe44223ead0570709', 1, '54', 'sales,quote_pipeline,supplier_database,order_delivery,other', '1315ad-1.png', '24660ad-3.png', 1, '2019-06-06 17:35:41', NULL, 1, 'purchase'),
(26, 71364, 'Tapan', 'Sethi', 'male', '2', 'sethitapan1@gmail.com', 'Kolkata', '', 2147483647, '630fa7fe4bacd205875765ccd4892235', 3, '500', 'sales', '18347', '51318', 1, '2019-06-16 12:35:38', '35d024e7e73d1ca73e7c35022ee21824', 0, 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `user_power`
--

CREATE TABLE `user_power` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `power_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_power`
--

INSERT INTO `user_power` (`id`, `name`, `power_id`) VALUES
(2, 'edit', 2),
(3, 'delete', 3),
(4, 'add', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `action`) VALUES
(1, 11, 1),
(2, 11, 3),
(3, 13, 2),
(4, 14, 1),
(5, 14, 3),
(6, 15, 1),
(7, 15, 3),
(11, 16, 1),
(12, 16, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_records`
--
ALTER TABLE `customer_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_qty`
--
ALTER TABLE `enquiry_qty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcondition`
--
ALTER TABLE `productcondition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_address`
--
ALTER TABLE `supplier_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_contact`
--
ALTER TABLE `supplier_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_industry`
--
ALTER TABLE `supplier_industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_records`
--
ALTER TABLE `supplier_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_power`
--
ALTER TABLE `user_power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_contact`
--
ALTER TABLE `customer_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_records`
--
ALTER TABLE `customer_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enquiry_qty`
--
ALTER TABLE `enquiry_qty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `productcondition`
--
ALTER TABLE `productcondition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier_address`
--
ALTER TABLE `supplier_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier_contact`
--
ALTER TABLE `supplier_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier_industry`
--
ALTER TABLE `supplier_industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_records`
--
ALTER TABLE `supplier_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_power`
--
ALTER TABLE `user_power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

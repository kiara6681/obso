-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 09:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
  `image` varchar(255) NOT NULL,
  `middle_title` varchar(255) NOT NULL,
  `middle_description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `middle_title_1` varchar(255) NOT NULL,
  `middle_description_1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `middle_title_2` varchar(255) NOT NULL,
  `middle_description_2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `middle_title_3` varchar(255) NOT NULL,
  `middle_description_3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `middle_title_4` varchar(255) NOT NULL,
  `middle_description_4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `middle_title_5` varchar(255) NOT NULL,
  `middle_description_5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `footer_title` varchar(255) NOT NULL,
  `footer_description` text NOT NULL,
  `image7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `header_title`, `header_description`, `image`, `middle_title`, `middle_description`, `image1`, `middle_title_1`, `middle_description_1`, `image2`, `middle_title_2`, `middle_description_2`, `image3`, `middle_title_3`, `middle_description_3`, `image4`, `middle_title_4`, `middle_description_4`, `image5`, `middle_title_5`, `middle_description_5`, `image6`, `footer_title`, `footer_description`, `image7`) VALUES
(1, 'We are a company that shares the frustrations of the engineering, maintenance and purchasing professionals; we are here to help.', ' <br> <br> \r\nWe have years of experience helping some of the world\'s leading and most recognisable brands when sourcing equipment for their industrial machinery.\r\n  <br> <br> \r\nManufacturing and production line machines often have components and equipment from multiple manufacturers. It is often the case that these machines also vary in age and condition. Budget and economical restraints do not always allow sites to be fully upgraded and keeping reliable and fully functioning machinery operating efficiently is a huge challenge.  If you do not have a reliable, quality purchase partner who specialises in this commodity it can become overbearing.\r\n  <br> <br> \r\nObso is built on a strong business ethos that focuses on helping manufacturing and purchasing professionals when it comes to sourcing solutions to the purchasing difficulties they face when trying to balance budgets whilst keeping sites running at optimum performance and uptime.\r\n  <br> <br> \r\nObso is a stockist and supplier of full lifecycle industrial automation equipment, meaning we stock and supply current line, rare and discontinued parts from the world\'s leading manufacturers. Obso also upcycles failing and failed parts to extend the life of your equipment.\r\n  <br> <br> \r\nWhen ordering equipment in personal life, companies concentrate on you as the consumer. Business to business purchases should be no different. Obso works tirelessly to make sure our customers receive a service that at the very least meets their expectations, and where possible exceeds them.\r\n  <br> <br> \r\nThe Manufacturing industry is the backbone of the world\'s economy and we are passionate about making sure manufacturing professionals are able to continue to do what they do best. Sourcing obsolete and hard to find parts need not be a headache and Obso people are here to help in any way we can. “Everything we do, every decision we make is about helping remove the headache caused by failing & hard to find parts”', 'IMG_0188.JPG', 'Your global, local supplier', 'We stock 1000\'s of items but should you need an item not stocked directly we have a global network of preferred suppliers who can deliver as early as the next day. ', 'FLat Location Icon.jpg', 'Assured quality', 'We only sell original equipment. Our stock goes through a rigorous quality check, as do our supplier partners making sure the equipment you order is of the highest quality.', 'thumb-up icon.png', 'Time critical enquiries', 'When you are in need of urgent equipment is when you need a reliable supplier most. Prices should be consistent regardless of urgency or situation. ', 'stop watch icon.png', 'Full Lifecycle Equipment', 'We offer current line, rare and obsolete equipment from the world\'s leading manufacturers in a variety of conditions from brand new to 24-month warrantied pre-owned equipment.', 'Recycle_256x256-32.png', 'Exchange & Upcycle', 'If a straight supply isn\'t the solution why not try part exchanging your equipment to obtain a discounted buy price or sending your equipment in to be reconditioned.', 'arrows_exchange-512.png', 'Warranty & Returns: ', 'Unfortunately, sometimes things do not work out as planned. When the unavoidable happens, Obso provides a no questions asked returns policy and a 24-month Obso warranty.', 'Warranty.png', 'Items ready to go', 'We have direct stock of 1000s of brand new and pre-owned obsolete and legacy automation equipment from the worlds leading brands.', 'IMG_4373.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `creation_date`, `status`) VALUES
(1, 'HMI\'s & Operator Displays', '2019-06-30', 0),
(2, 'Teach Pendants & Smartpad Controls', '2019-06-30', 0),
(3, 'PLC Equipment', '2019-07-02', 0),
(4, 'Drive Technology (AC | DC | Stepper & Servo)', '2019-07-03', 0),
(5, 'Motors (AC | DC | Stepper & Servo) & Encoders', '2019-07-08', 0),
(6, 'CNC Equipment', '2019-07-08', 0),
(7, 'Generic Electronic Components (incl. Push buttons | Sensors | Contactors | Relays | Thermostats)', '2019-07-08', 0),
(8, 'Safety Automation', '2019-07-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_type` int(11) NOT NULL COMMENT '1 for sales company and 2 for supplier company',
  `company_name` varchar(255) NOT NULL,
  `industry` int(11) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `dial_number` varchar(20) DEFAULT NULL,
  `competitor` varchar(100) DEFAULT NULL,
  `free_to_trade` varchar(100) DEFAULT NULL,
  `record_source` varchar(100) DEFAULT NULL,
  `information` longtext,
  `country` int(11) DEFAULT NULL COMMENT 'country id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_type`, `company_name`, `industry`, `website`, `dial_number`, `competitor`, `free_to_trade`, `record_source`, `information`, `country`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'hastag', 1, 'http://hastag.com', '9602947878', 'asd', 'Small select', 'E-mail', 'info', 1, 1, '2019-08-06 19:50:50', '2019-08-06 22:21:20'),
(4, 2, 'dexus', 4, 'https://www.hastagsoft.com', '8005609866', NULL, NULL, 'Self Generated / Outbound Call', 'information', 5, 1, '2019-08-06 19:51:20', '2019-08-06 22:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `heading`, `description`, `address`, `phone`, `email`) VALUES
(1, 'Get in touch', 'For any questions please don\'t hesitate to email or call us about anything. We are here to help', 'Obso ltd. Unit 2b, Staples Close   Redhill Business Park,  Stafford ST16 1WQ', '+44 (0) 800 36 888 1', 'info@obsoltd.com');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `flag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `flag`, `status`) VALUES
(1, 'America (incl.Canada)', NULL, 1),
(2, 'LATAM', NULL, 1),
(3, 'Europe', NULL, 1),
(4, 'Middle East', NULL, 1),
(5, 'Asia (incl. Australasia)', NULL, 1),
(6, 'USA', NULL, 1),
(7, 'Canada', NULL, 1),
(8, 'Mexico', NULL, 1),
(9, 'Latam (Excl.MEX)\r\n', NULL, 1),
(10, 'England', NULL, 1),
(11, 'Scotland', NULL, 1),
(12, 'Ireland ', NULL, 1),
(13, 'Wales', NULL, 1),
(14, 'Germany', NULL, 1),
(15, 'Spain & Portugal', NULL, 1),
(16, 'France (incl. BENELUX)', NULL, 1),
(17, 'Sweden', NULL, 1),
(18, 'Denmark', NULL, 1),
(19, 'Norway', NULL, 1),
(26, 'Bulgaria', NULL, 1),
(27, 'Burkina Faso', NULL, 1),
(28, 'Burundi', NULL, 1),
(29, 'Cabo Verde', NULL, 1),
(30, 'Cambodia', NULL, 1),
(31, 'Cameroon', NULL, 1),
(32, 'Canada', NULL, 1),
(33, 'Central African Republic', NULL, 1),
(34, 'Chad', NULL, 1),
(35, 'Chile', NULL, 1),
(36, 'China', NULL, 1),
(37, 'Colombia', NULL, 1),
(38, 'Comoros', NULL, 1),
(39, 'Congo, Republic of the', NULL, 1),
(40, 'Congo, Democratic Republic of the', NULL, 1),
(41, 'Costa Rica', NULL, 1),
(42, 'Cote d Ivoire', NULL, 1),
(43, 'Croatia', NULL, 1),
(44, 'Cuba', NULL, 1),
(45, 'Cyprus', NULL, 1),
(46, 'Czech Republic', NULL, 1),
(47, 'Denmark', NULL, 1),
(48, 'Djibouti', NULL, 1),
(49, 'Dominica', NULL, 1),
(50, 'Dominican Republic', NULL, 1),
(51, 'Ecuador', NULL, 1),
(52, 'Egypt', NULL, 1),
(53, 'El Salvador', NULL, 1),
(54, 'Equatorial Guinea', NULL, 1),
(55, 'Eritrea', NULL, 1),
(56, 'Estonia', NULL, 1),
(57, 'Ethiopia', NULL, 1),
(58, 'Fiji', NULL, 1),
(59, 'Finland', NULL, 1),
(60, 'France', NULL, 1),
(61, 'Gabon', NULL, 1),
(62, 'Gambia', NULL, 1),
(63, 'Georgia', NULL, 1),
(64, 'Germany', NULL, 1),
(65, 'Ghana', NULL, 1),
(66, 'Greece', NULL, 1),
(67, 'Grenada', NULL, 1),
(68, 'Guatemala', NULL, 1),
(69, 'Guinea', NULL, 1),
(70, 'Guinea-Bissau', NULL, 1),
(71, 'Guyana', NULL, 1),
(72, 'Haiti', NULL, 1),
(73, 'Honduras', NULL, 1),
(74, 'Hungary', NULL, 1),
(75, 'Iceland', NULL, 1),
(76, 'India', NULL, 1),
(77, 'Indonesia', NULL, 1),
(78, 'Iran', NULL, 1),
(79, 'Iraq', NULL, 1),
(80, 'Ireland', NULL, 1),
(81, 'Italy', NULL, 1),
(82, 'Jamaica', NULL, 1),
(83, 'Japan', NULL, 1),
(84, 'Jordan', NULL, 1),
(85, 'Kazakhstan', NULL, 1),
(86, 'Kenya', NULL, 1),
(87, 'Kiribati', NULL, 1),
(88, 'Kosovo', NULL, 1),
(89, 'Kuwait', NULL, 1),
(90, 'Kyrgyzstan', NULL, 1),
(91, 'Laos', NULL, 1),
(92, 'Latvia', NULL, 1),
(93, 'Lebanon', NULL, 1),
(94, 'Lesotho', NULL, 1),
(95, 'Liberia', NULL, 1),
(96, 'Libya', NULL, 1),
(97, 'Liechtenstein', NULL, 1),
(98, 'Lithuania', NULL, 1),
(99, 'Luxembourg', NULL, 1),
(100, 'Macedonia', NULL, 1),
(101, 'Madagascar', NULL, 1),
(102, 'Malawi', NULL, 1),
(103, 'Malaysia', NULL, 1),
(104, 'Maldives', NULL, 1),
(105, 'Mali', NULL, 1),
(106, 'Malta', NULL, 1),
(107, 'Marshall Islands', NULL, 1),
(108, 'Mauritania', NULL, 1),
(109, 'Mauritius', NULL, 1),
(110, 'Mexico', NULL, 1),
(111, 'Micronesia', NULL, 1),
(112, 'Moldova', NULL, 1),
(113, 'Monaco', NULL, 1),
(114, 'Mongolia', NULL, 1),
(115, 'Montenegro', NULL, 1),
(116, 'Morocco', NULL, 1),
(117, 'Mozambique', NULL, 1),
(118, 'Myanmar (Burma)', NULL, 1),
(119, 'Namibia', NULL, 1),
(120, 'Nauru', NULL, 1),
(121, 'Nepal', NULL, 1),
(122, 'Netherlands', NULL, 1),
(123, 'New Zealand', NULL, 1),
(124, 'Nicaragua', NULL, 1),
(125, 'Niger', NULL, 1),
(126, 'Nigeria', NULL, 1),
(127, 'North Korea', NULL, 1),
(128, 'Norway', NULL, 1),
(129, 'Oman', NULL, 1),
(130, 'Pakistan', NULL, 1),
(131, 'Palau', NULL, 1),
(132, 'Palestine', NULL, 1),
(133, 'Panama', NULL, 1),
(134, 'Papua New Guinea', NULL, 1),
(135, 'Paraguay', NULL, 1),
(136, 'Peru', NULL, 1),
(137, 'Philippines', NULL, 1),
(138, 'Poland', NULL, 1),
(139, 'Portugal', NULL, 1),
(140, 'Qatar', NULL, 1),
(141, 'Romania', NULL, 1),
(142, 'Russia', NULL, 1),
(143, 'Rwanda', NULL, 1),
(144, 'St. Kitts and Nevis', NULL, 1),
(145, 'St. Lucia', NULL, 1),
(146, 'St. Vincent and The Grenadines', NULL, 1),
(147, 'Samoa', NULL, 1),
(148, 'San Marino', NULL, 1),
(149, 'Sao Tome and Principe', NULL, 1),
(150, 'Saudi Arabia', NULL, 1),
(151, 'Senegal', NULL, 1),
(152, 'Serbia', NULL, 1),
(153, 'Seychelles', NULL, 1),
(154, 'Sierra Leone', NULL, 1),
(155, 'Singapore', NULL, 1),
(156, 'Slovakia', NULL, 1),
(157, 'Slovenia', NULL, 1),
(158, 'Solomon Islands', NULL, 1),
(159, 'Somalia', NULL, 1),
(160, 'South Africa', NULL, 1),
(161, 'South Korea', NULL, 1),
(162, 'South Sudan', NULL, 1),
(163, 'Spain', NULL, 1),
(164, 'Sri Lanka', NULL, 1),
(165, 'Sudan', NULL, 1),
(166, 'Suriname', NULL, 1),
(167, 'Swaziland', NULL, 1),
(168, 'Sweden', NULL, 1),
(169, 'Switzerland', NULL, 1),
(170, 'Syria', NULL, 1),
(171, 'Taiwan', NULL, 1),
(172, 'Tajikistan', NULL, 1),
(173, 'Tanzania', NULL, 1),
(174, 'Thailand', NULL, 1),
(175, 'Timor-Leste', NULL, 1),
(176, 'Togo', NULL, 1),
(177, 'Tonga', NULL, 1),
(178, 'Trinidad and Tobago', NULL, 1),
(179, 'Tunisia', NULL, 1),
(180, 'Turkey', NULL, 1),
(181, 'Turkmenistan', NULL, 1),
(182, 'Tuvalu', NULL, 1),
(183, 'Uganda', NULL, 1),
(184, 'Ukraine', NULL, 1),
(185, 'United Arab Emirates', NULL, 1),
(186, 'United Kingdom (UK)', NULL, 1),
(187, 'United States of America (USA)', NULL, 1),
(188, 'Uruguay', NULL, 1),
(189, 'Uzbekistan', NULL, 1),
(190, 'Vanuatu', NULL, 1),
(191, 'Vatican City (Holy See)', NULL, 1),
(192, 'Venezuela', NULL, 1),
(193, 'Vietnam', NULL, 1),
(194, 'Yemen', NULL, 1),
(195, 'Zambia', NULL, 1),
(196, 'Zimbabwe', NULL, 1),
(199, 'INDIA', '15.jpg', 0);

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
(3, '5228', '16A Gariahat', 'Test Address', 'Kolkata', 'WB', '700029', 'india', 'AE', '2019-06-16 13:18:46'),
(4, '9372', '', '', '', '', '', '', '', '2019-07-27 22:49:02');

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
(3, 2, '4292', 'Rahul', 'Dravid', 'male', 'Dravid', 'Cricketer', 'Batsman', 'virendrameshram60@gmail.com', 2147483647, 968574589, 0, 'Test Key Details1', '', '', 0, '', '2019-06-16 13:16:02'),
(4, 3, '5228', 'Suresh', 'Raina', 'male', 'Cricketer', 'Batsman', 'test branch', 'raina@gmail.com', 2147483647, 2147483647, 0, 'Test Key', 'use_email', '', 1, '', '2019-06-16 13:19:31'),
(5, 4, '9372', 'NEHA', 'MAJUMDER', 'female', 'Manager', 'software', 'India', 'to.neha16@gmail.com', 86777, 123456, 0, '', 'use_email', '', 0, '', '2019-07-27 22:50:06'),
(6, 4, '9372', 'Raj', 'MAJUMDER', 'male', '', '', 'India', 'to.neha16@gmail.com', 123, 0, 0, '', 'use_sms', '', 0, '', '2019-07-27 22:58:54');

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
(1, '1843', 'Tapan Company', 'New Admin', 'Test About us1', 'Sales Industries One', 'Test Sector', 'http://www.google.com', 'lead_forensics', '98745623', 'lessthenoneyear', '500kplus', '7525_advance', 'trade2', 'Test Reference', 'Manufacturer Two,Manufacturer Three,Manufacturer Five', 'Test Manufacturer Used', 'Test PSL Information', 'Test Competitor Information', 'Test Discount & Pricing', 0, 2, '2019-06-16 12:42:33'),
(2, '4292', 'Viren Company', 'New Admin', 'Test Aboutus', 'Sales Industries Two', 'Test Free', 'http://www.google.com', 'facebook_lead', '987588', 'lessthenoneyear', '1mplus', 'eom', 'trade2', '9874569633', 'Manufacturer One,Manufacturer Five', 'ghjg', 'jhhj', 'jghj', 'gf', 0, 1, '2019-06-16 13:10:39'),
(3, '5228', 'Dhoni Company', 'New Admin', 'Test aboutus', 'Sales Industries Three', 'test sector', 'http://www.google.com', 'facebook_lead', '987488', 'daily', '100kplus', '90 Days DOI', 'trade2', 'Test Reference', 'Manufacturer Two,Manufacturer Four', 'Test 1', 'Test 2', 'Test 3', 'Test 4', 0, 0, '2019-06-16 13:18:46'),
(4, '9372', 'Bitzenith Solutions PVT LTD', 'New Admin', '', 'Wood, Glass & Stone', '', '', '', '', 'lessthenoneyear', '50k', 'advance', 'trade1', '', 'ABB,Allen Bradley,Beijer,Bosch Rexroth,Control Techniques,Eaton,Elau,Emas,Emerson,Honeywel,Indramat', 'Test, test', '', '', '', 0, 2, '2019-07-27 22:49:02');

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
-- Table structure for table `employee_role`
--

CREATE TABLE `employee_role` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `permission` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_role`
--

INSERT INTO `employee_role` (`id`, `name`, `department`, `permission`, `created_at`) VALUES
(7, 'Account Development Manager', 'sales', 'calender,sales,quote_pipeline,supplier_database,order_delivery', '2019-07-11 06:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL COMMENT 'country ID',
  `ref_number` varchar(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `industry_name` varchar(255) NOT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `company_name_front` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `lead1` varchar(255) DEFAULT NULL,
  `lead2` varchar(255) NOT NULL,
  `suspus` int(11) NOT NULL,
  `status` enum('waiting','draft','confirm','complete') NOT NULL DEFAULT 'waiting',
  `is_frontend` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `company_id`, `country_id`, `ref_number`, `company_name`, `industry_id`, `industry_name`, `contact_id`, `company_name_front`, `full_name`, `email`, `number`, `lead1`, `lead2`, `suspus`, `status`, `is_frontend`, `created_at`) VALUES
(13, 4, NULL, 'REQ-190801-1', '', 4, 'Printing, Paper & Cardboard', 5, 'Bitzenith Solutions PVT LTD', NULL, 'to.neha16@gmail.com', '86777', '2019-08-01 01:53:24', '', 0, 'waiting', NULL, '2019-08-01 01:53:41'),
(14, 2, NULL, 'REQ-190801-2', '', 2, 'Wood, Glass & Stone', 3, 'Viren Company', NULL, 'virendrameshram60@gmail.com', '2147483647', '2019-08-01 01:55:08', '', 0, 'waiting', NULL, '2019-08-01 01:55:24'),
(15, NULL, 76, 'REQ-190801-3', '', NULL, '', NULL, 'HT1001', 'Prem Saini', 'premsaini9602@gmail.com', '7014432414', NULL, 'test', 0, 'waiting', 1, '2019-08-01 01:56:11'),
(16, NULL, 0, 'REQ-190801-4', '', NULL, '', NULL, '', '', '', '', NULL, '', 0, 'waiting', 1, '2019-08-01 12:17:34'),
(17, NULL, 28, 'REQ-190802-1', '', NULL, '', NULL, 'Obso Ltd.', 'Leroy Spence', 'leroy.spence@obsoparts.com', '07796858283', NULL, 'o', 0, 'waiting', 1, '2019-08-02 18:42:14'),
(18, NULL, 0, 'REQ-190802-2', '', NULL, '', NULL, 'Obso Ltd.', 'Leroy Spence', 'leroy.spence@obsoparts.com', '07796858283', NULL, 'not needed', 0, 'waiting', 1, '2019-08-02 18:47:57');

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
(17, 13, '2', '1747-L552-RR', '2019-08-01 02:23:41'),
(18, 14, '5', '1747-L552-MM', '2019-08-01 02:25:24'),
(19, 15, '3', '111', '2019-08-01 02:26:11'),
(20, 15, '6', '222', '2019-08-01 02:26:11'),
(21, 15, '9', '333', '2019-08-01 02:26:11'),
(22, 15, '13', '444', '2019-08-01 02:26:11'),
(23, 16, '1', '1747-KY1', '2019-08-01 12:47:34'),
(24, 17, '1', '1756-l551', '2019-08-02 19:12:14'),
(25, 18, '20', '986397253 26 40- 82947 ', '2019-08-02 19:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `website_title` varchar(255) NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `website_keyword` varchar(255) NOT NULL,
  `website_description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `admin_email`, `website_title`, `meta_tag`, `website_keyword`, `website_description`, `image`, `favicon`) VALUES
(1, 'leroy.spence@obsoltd.com', 'OBSO - global parts | Obsolete Industrial automation equipment', 'Obso suppliers for  Current Line, Phase out & Obsolete Industrial electronic equipment.   Mitsubishi | Beijer | Siemens | S5 | S7 | Allen Bradley | PLC5 | SLC500 | Control Techniques | Leroy Somer | Elau | Mo | Omron | Modicon / Telemecanique | ABB | Bosc', '', 'Obso are suppliers for  Current Line, Phase out & Obsolete Industrial electronic equipment.   Mitsubishi | Beijer | Siemens | S5 | S7 | Allen Bradley | PLC5 | SLC500 | Control Techniques | Leroy Somer | Elau | Mo | Omron | Modicon / Telemecanique | ABB | ', 'logo.png', 'Obs \'O\' - yellow.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_front`
--

CREATE TABLE `home_front` (
  `id` int(11) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `main_description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `description_1` text NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `description_2` text NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `part_title` varchar(255) NOT NULL,
  `part_description` varchar(255) NOT NULL,
  `part_cat_title` varchar(255) NOT NULL,
  `part_cat_description` varchar(255) NOT NULL,
  `part_cat_heading` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_front`
--

INSERT INTO `home_front` (`id`, `main_title`, `main_description`, `title`, `image`, `description`, `title_1`, `image_1`, `description_1`, `title_2`, `image_2`, `description_2`, `category_title`, `category_description`, `part_title`, `part_description`, `part_cat_title`, `part_cat_description`, `part_cat_heading`, `created_at`) VALUES
(1, 'Obso are stockists & suppliers of Current Line, Phase out & Obsolete Industrial electronic equipment.', '', 'Find It', 'obso_logo just O .png', 'We stock thousands of obsolete and time-critical spares. Hard to source current line equipment can be sourced and supplied as early as the next day from our large network of fantastic suppliers. With the ability to get costs and solution to you within an hour.', 'Fix it', 'obso_logo just O .png', 'We only provide original equipment to not only get you up and running but to keep your machines running. We respect your engineering expertise, providing you with the correct original equipment so you can work on getting your equipment back and working. ', 'Faster', 'obso_logo just O .png', 'Items are delivered quickly. We know this equipment can be vital to your business and downtime costs dear. We have excellent relations and specific SLA\'s with our network of trusted couriers around the world, helping ensure you receive your items when promised.', 'Select a Part Category', 'Select a category to than find an appropriate manufacturer to make your part enquiry', 'Urgent Part Request?', 'We will act quickly to get you back up and running', 'Obso\'s Most Popular Items', 'Obso\'s most popular items from all manufacturers by part type .', 'Industrial Eletronics', '0000-00-00');

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
(1, 'Metals & Metal Products', '2019-07-11 18:47:25', 0),
(2, 'Wood, Glass & Stone', '2019-07-11 18:47:39', 0),
(3, 'Plastic, Rubber, Chemicals & Petroleum', '2019-07-11 18:47:55', 0),
(4, 'Printing, Paper & Cardboard', '2019-07-11 18:48:09', 0),
(5, 'Textiles, Fabrics & Apparel', '2019-07-11 18:48:30', 0),
(6, 'Food, Drink & Tobacco', '2019-07-11 18:48:48', 0),
(7, 'Transportation (incl. Aerospace and Marine)', '2019-07-11 18:49:01', 0),
(8, 'Industrial Machinery', '2019-07-11 18:49:15', 0),
(9, 'Computers, Electronics & HVAC', '2019-07-11 18:49:30', 0),
(10, 'Furniture & Miscellaneous', '2019-07-11 18:49:42', 0),
(11, '3rd Parties (Resellers, Stockists & Repair)', '2019-07-11 18:49:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `prod_quentity` int(11) NOT NULL,
  `total_supplier` int(11) NOT NULL,
  `warranty` varchar(250) NOT NULL,
  `note` text NOT NULL,
  `total` float NOT NULL,
  `vat` varchar(250) NOT NULL,
  `vat_amount` float NOT NULL,
  `discount` float NOT NULL,
  `discount_amount` float NOT NULL,
  `net_total` float NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'waiting',
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `company_id`, `enquiry_id`, `prod_quentity`, `total_supplier`, `warranty`, `note`, `total`, `vat`, `vat_amount`, `discount`, `discount_amount`, `net_total`, `status`, `created_by`, `created_on`) VALUES
(1, 1, 34, 3535, 9, '6 Months', ' this is test                 ', 955841, '10', 95584.1, 4, 38233.6, 1013190, 'draft', 17, '2019-07-21 14:54:46'),
(2, 3, 38, 0, 0, '6 Months', ' ', 0, '0', 0, 0, 0, 0, 'waiting', 17, '2019-07-22 11:09:05'),
(3, 1, 39, 0, 1, '6 Months', '           ', 200, '0', 0, 0, 0, 200, 'waiting', 17, '2019-07-22 20:35:57'),
(4, 1, 40, 150, 2, '6 Months', ' asdfas', 13550, '10', 1355, 10, 1355, 13550, 'waiting', 17, '2019-07-22 21:09:59'),
(5, 2, 41, 0, 0, '6 Months', ' ', 0, '0', 0, 0, 0, 0, 'waiting', 17, '2019-07-23 09:48:28'),
(6, 1, 42, 0, 0, '6 Months', ' ', 0, '0', 0, 0, 0, 0, 'waiting', 17, '2019-07-23 15:57:31'),
(7, 2, 43, 10, 1, '6 Months', ' fsdfsd  ', 110, '5', 5.5, 10, 11, 104.5, 'draft', 17, '2019-07-23 22:10:31'),
(8, 2, 44, 100, 1, '6 Months', ' sadas  ', 10100, '5', 505, 10, 1010, 9595, 'draft', 17, '2019-07-23 22:14:26'),
(9, 2, 45, 50, 1, '6 Months', ' sadfasd          ', 2550, '5', 127.5, 5, 127.5, 2550, 'draft', 17, '2019-07-23 22:17:44'),
(10, 1, 47, 0, 0, '6 Months', ' ', 0, '0', 0, 0, 0, 0, 'draft', 17, '2019-07-25 21:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `supp_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `inqu_quentity_id` int(11) NOT NULL,
  `prod_code` varchar(250) NOT NULL,
  `quentity` int(11) NOT NULL,
  `unite_price` float NOT NULL,
  `delivery_time` varchar(150) NOT NULL,
  `selling_price` float NOT NULL,
  `delivery_fee` float NOT NULL,
  `total_price` float NOT NULL,
  `currency` varchar(150) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `invoice_id`, `supp_id`, `prod_id`, `inqu_quentity_id`, `prod_code`, `quentity`, `unite_price`, `delivery_time`, `selling_price`, `delivery_fee`, `total_price`, `currency`, `created_by`, `created_on`, `updated_at`) VALUES
(4, 1, 1, 36, 67, '123 456-789 Abcd', 210, 5003, 'Same Day', 211, 211, 44521, '$', 17, '2019-07-21 15:19:38', '0000-00-00 00:00:00'),
(5, 1, 1, 36, 67, '123 456-789 Abcd', 210, 5003, 'Same Day', 211, 211, 44521, '$', 17, '2019-07-21 15:29:38', '0000-00-00 00:00:00'),
(6, 1, 1, 36, 67, '123 456-789 Abcd', 120, 5003, 'Same Day', 211, 122, 25442, '$', 17, '2019-07-21 15:31:19', '0000-00-00 00:00:00'),
(7, 1, 1, 36, 67, '123 456-789 Abcd', 110, 5003, 'Same Day', 211, 212, 23422, '$', 17, '2019-07-21 15:37:08', '0000-00-00 00:00:00'),
(8, 1, 2, 36, 67, '123 456-789 Abcd', 15, 500, 'Same Day', 212, 212, 3392, '$', 17, '2019-07-21 15:38:20', '0000-00-00 00:00:00'),
(9, 1, 1, 36, 67, '123 456-789 Abcd', 210, 5003, 'Same Day', 212, 122, 44642, '$', 17, '2019-07-21 15:40:37', '0000-00-00 00:00:00'),
(10, 1, 1, 36, 67, '123 456-789 Abcd', 2330, 5003, 'Same Day', 323, 323, 752913, '$', 17, '2019-07-21 15:46:40', '0000-00-00 00:00:00'),
(11, 1, 1, 36, 67, '123 456-789 Abcd', 0, 5003, 'Same Day', 22, 323, 323, '$', 17, '2019-07-21 15:47:27', '0000-00-00 00:00:00'),
(12, 1, 1, 36, 67, '123 456-789 Abcd', 330, 5003, 'Same Day', 34, 5445, 16665, '$', 17, '2019-07-21 15:50:04', '0000-00-00 00:00:00'),
(13, 3, 1, 38, 72, '123 456-789 Abcd', 0, 5003, 'Same Day', 200, 200, 200, '$', 17, '2019-07-22 20:38:54', '0000-00-00 00:00:00'),
(14, 4, 1, 38, 73, '123 456-789 Abcd', 100, 5003, 'Same Day', 100, 1000, 11000, '$', 17, '2019-07-22 21:09:42', '0000-00-00 00:00:00'),
(15, 4, 1, 38, 73, '123 456-789 Abcd', 50, 5003, 'Same Day', 50, 50, 2550, '$', 17, '2019-07-22 21:09:51', '0000-00-00 00:00:00'),
(16, 7, 1, 38, 76, '123 456-789 Abcd', 10, 5003, 'Same Day', 10, 10, 110, '$', 17, '2019-07-23 22:11:59', '0000-00-00 00:00:00'),
(17, 8, 1, 38, 77, '123 456-789 Abcd', 100, 5003, 'Same Day', 100, 100, 10100, '$', 17, '2019-07-23 22:14:20', '0000-00-00 00:00:00'),
(18, 9, 1, 38, 78, '123 456-789 Abcd', 50, 5003, 'Same Day', 50, 50, 2550, '$', 17, '2019-07-23 22:17:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `featured` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer`, `creation_date`, `status`, `featured`) VALUES
(1, 'ABB', '2019-07-10 23:36:31', 0, 0),
(2, 'Allen Bradley', '2019-07-10 23:36:48', 0, 1),
(3, 'Beijer', '2019-07-10 23:37:00', 0, 1),
(4, 'Bosch Rexroth', '2019-07-10 23:37:25', 0, 1),
(5, 'Control Techniques', '2019-07-10 23:37:38', 0, 1),
(6, 'Eaton', '2019-07-10 23:37:53', 0, 0),
(7, 'Elau', '2019-07-10 23:38:07', 0, 0),
(8, 'Emas', '2019-07-10 23:38:28', 0, 0),
(9, 'Emerson', '2019-07-10 23:38:43', 0, 0),
(10, 'Honeywel', '2019-07-10 23:38:57', 1, 0),
(11, 'Indramat', '2019-07-10 23:39:18', 0, 1),
(12, 'Leroy Somer', '2019-07-10 23:39:35', 0, NULL),
(13, 'Lenze', '2019-07-10 23:39:49', 0, 1),
(14, 'Mitsubishi', '2019-07-10 23:40:04', 0, 1),
(15, 'Nidec', '2019-07-10 23:40:16', 0, NULL),
(16, 'Omron', '2019-07-10 23:40:27', 0, 1),
(17, 'Parker', '2019-07-10 23:40:39', 0, 0),
(18, 'Phoenix Contact', '2019-07-10 23:40:52', 1, NULL),
(19, 'Red Lion', '2019-07-10 23:41:04', 0, NULL),
(20, 'Schneider', '2019-07-10 23:41:19', 0, NULL),
(21, 'Siemens', '2019-07-10 23:41:38', 0, 1),
(23, 'Telemecanique', '2019-07-10 23:41:54', 0, 1),
(24, 'Yaskawa', '2019-07-10 23:42:05', 0, NULL),
(25, 'Yokogawa', '2019-07-10 23:42:20', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `description`) VALUES
(1, '<h5 class=\"page_title\">Private Policy</h5>\r\n    <h4 class=\"titles_head\"><span>1</span>   What is Lorem Ipsum?</h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>2</span>   Lorem Ipsum is simply dummy text of the printing and typesetting </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n    ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n     electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n    like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>3</span>   Lorem Ipsum passage, and going through the cites of the word </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>4 </span>  Lorem Ipsum available, but the majority have suffered alteration in some form</h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>5 </span>  Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n    ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n     electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n    like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>');

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
(1, '', '16GB SSD Disk SLC', 'Mitsubishi', '', '', '', '16GB Solid State Disk Drive SLC', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£182.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(2, '', '174-3GT-4-M434N4', 'Mitsubishi', '', '', '', 'Brake Belt RV-2 J5, J6', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£10.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(3, '', '186-3GT-4-M434N4', 'Mitsubishi', '', '', '', 'Drive Belt RV-2 J4', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£10.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(4, '', '1A-GR200-RP', 'Mitsubishi', '', '', '', 'Hand signal output cable RP-Series', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£174.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(5, '', '1A-HA01', 'Mitsubishi', '', '', '', 'Hand flange adapter', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£122.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(6, '', '1A-HC200-RP', 'Mitsubishi', '', '', '', 'Hand flange adapter', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£122.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(7, '', '1A-VD01E-RP', 'Mitsubishi', '', '', '', 'Hand signal input cable RP-Series', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£188.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(8, '', '1A-VD02E-RP', 'Mitsubishi', '', '', '', 'Pneumatic single valve set including noise-inferior (1 Valve AH series)', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£141.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(9, '', '1A-VD03E-RP', 'Mitsubishi', '', '', '', 'Pneumatic double valve set including noise-inferior (2 Valves AH series)', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£230.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(10, '', '1A-VD04E-RP', 'Mitsubishi', '', '', '', 'Pneumatic triple valve set including noise-inferior (3 Valves AH series)', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£292.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(11, '', '1E-ST0408C-300', 'Mitsubishi', '', '', '', 'Pneumatic quadruple valve set including noise-inferior (4 Valves AH series)', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£398.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(12, '', '1E-VD01E (Source)', 'Mitsubishi', '', '', '', 'Hand curl tube RH-3FH/RH-6FH', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£415.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(13, '', '1E-VD02E (Source)', 'Mitsubishi', '', '', '', 'RV-F Pneumatic single valve set incl. noise-inferior RV-2F', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£188.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(14, '', '1F-GR35S-02', 'Mitsubishi', '', '', '', 'RV-F Pneumatic double valve set incl. noise-inferior, RV-2F', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£292.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(15, '', '1F-GR60S-01', 'Mitsubishi', '', '', '', 'RV-4F/RV-7F/RV-13F//RV-20F Hand output cable', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£179.50 ', 0, '', 0, '2019-08-01 12:33:53'),
(16, '', '1F-HA01S-01', 'Mitsubishi', '', '', '', 'RH-FH Hand output cable (1050 mm)', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£200.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(17, '', '1F-HB01S-01', 'Mitsubishi', '', '', '', 'External wiring set 1 for the base RV-4F to RV-20F', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£540.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(18, '', '1F-HC35C-01', 'Mitsubishi', '', '', '', 'External wiring set 1 for the forearm RV-4F to RV-20F', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£540.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(19, '', '6SL3215-1SE31-0UA0', 'Siemens', '', 'Simatic Net', '', 'IWLAN RR ACCESS SCALANCE W784-1RR, IEEE 802.11B/G/A/H, INDUSTRIAL WIRELESS LAN MIT RAPID ROAMING (IWLAN RR) 2.4/5 GHZ, UP TO 54MBIT/S, WPA2/802.11I/11E, NOTE NATIONAL APPROVALS, 24VDC, IP30(-20-+60 DGR C) 2XEXT. ANTENNA CONNECTIONS 1 RADIO INTERFACE, POE, RJ45 (TWISTED PAIR) SOCKET SCOPE OF SUPPLY: 24VDC TERM. BLOCK, MANUALS ON CD ROM, GERMAN/ENGLISH;', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(20, '', '6SL3215-1SE31-8UA0', 'Siemens', '', 'Simatic Net', '', 'IWLAN ACCESS POINT SCALANCE W786-1PRO, IEEE 802.11B/G/A/H, INDUSTRIAL WIRELESS LAN (IWLAN) 2.4/5 GHZ, UP TO 54MBIT/S, WPA2/802.11I/11E, NOTE NATIONAL APPROVALS, 48VDC, IP65(-40-+70 DGR C) 2XEXT. ANTENNA CONNECTIONS 1 RADIO INTERFACE, POE, RJ45 (TWISTED PAIR) SOCKET SCOPE OF SUPPLY: MOUNT. MAT., MANUAL ON CD-ROM GERMAN/ENGLISH;', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(21, '', '6SL3217-0CE31-5UA0', 'Siemens', '', 'Simatic Net', '', 'IWLAN ACCESS POINT SCALANCE W786-1PRO, IEEE 802.11B/G/A/H, INDUSTRIAL WIRELESS LAN (IWLAN) 2.4/5 GHZ, UP TO 54MBIT/S, WPA2/802.11I/11E, NOTE NATIONAL APPROVALS, 48VDC, IP65(-40-+70 DGR C) 2XINTERNAL ANTENNAS 1 RADIO INTERFACE, POE, RJ45 (TWISTED PAIR) SOCKET SCOPE OF SUPPLY: MOUNT. MAT., MANUAL ON CD-ROM GERMAN/ENGLISH;', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(22, '', '6SL3217-0CE32-2UA0', 'Siemens', '', 'Simatic Net', '', 'IWLAN ACCESS POINT SCALANCE W786-2RR, IEEE 802.11B/G/A/H, INDUSTRIAL WIRELESS LAN WITH RAPID ROAMING (IWLAN RR) 2.4/5 GHZ, BIS 54MBIT/S, WPA2/802.11I/11E, NATIONAL APPROVALS REQUIRED, 48VDC, IP65(-40- 70 DGR C) 4XEXT. ANTENNA CONNECT., 2 RADIO NTERFACES, POE, RJ45 (TWISTED PAIR) SOCKET SCOPE OF SUPPLY.: MOUNT. MAT., MANUAL ON CD GERMAN / ENGLISH;', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(23, '', '6SL3217-0CE32-2UA1', 'Siemens', '', 'Simatic Net', '', 'IWLAN ACCESS POINT SCALANCE W786-2PRO, IEEE 802.11B/G/A/H, INDUSTRIAL WIRELESS LAN (IWLAN) 2.4/5 GHZ, UP TO 54MBIT/S, WPA2/802.11I/11E, NOTE NATIONAL APPROVALS, 48VDC, IP65(-40-+70 DGR C), 4XEXT. ANTENNA CONNECTIONS 2 RADIO INTERFACES, FO (GLAS-FO, MULTIMODE) SOCKET SCOPE OF SUPPLY: MOUNT. MAT., MANUAL ON CD ROM CD-ROM, GERMAN/ENGLISH; 48VDC TERMINAL BLOCK', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(24, '', '6SL3223-0DE21-5AA0', 'Siemens', '', 'Simatic Net', '', 'IWLAN ACCESS POINT SCALANCE W786-2HPW FOR USE WITH HIPATH WLAN CONTROLLER NOTE NATIONAL APPROVALS, 48VDC, IP65(-40-+70 DGR C) 4XINTERNAL ANTENNAS 2 RADIO INTERFACES, POE, RJ45 (TWISTED PAIR) SOCKET SCOPE OF SUPPLY: MOUNTING MATERIAL, MANUAL GERMAN / ENGLISH', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(25, '', '6SL3223-0DE31-1AA0', 'Siemens', '', 'Simatic Net', '', 'IWLAN ACCESS POINT SCALANCE W786-2PRO, IEEE 802.11B/G/A/H, INDUSTRIAL WIRELESS LAN (IWLAN) 2.4/5 GHZ, UP TO 54MBIT/S, WPA2/802.11I/11E, NOTE NATIONAL APPROVALS, 48VDC, IP65(-40-+70 DGR C) 4XINTERNAL ANTENNAS 2 RADIO INTERFACES, POE, RJ45 (TWISTED PAIR) SOCKET SCOPE OF SUPPLY: MOUNT. MAT., MANUAL ON CD-ROM GERMAN/ENGLISH;', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(26, '', '6SL3223-0DE31-5AA0', 'Siemens', '', 'Simatic Net', '', 'IWLAN ACCESS POINT SCALANCE W786-2RR, IEEE 802.11B/G/A/H, INDUSTRIAL WIRELESS LAN WITH RAPID ROAMING (IWLAN RR) 2.4/5 GHZ, BIS 54MBIT/S, WPA2/802.11I/11E, NOTE NATIONAL APPROVALS, 48VDC, IP65(-40-+70 DGR C), 4XINTERNAL ANTENNAS, 2 RADIO INTERFACES, POE, RJ45 (TWISTED PAIR) SOCKET SCOPE OF SUPPLY.: MOUNT. MAT., MANUAL ON CD GERMAN / ENGLISH;', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '', 0, '', 0, '2019-08-01 12:33:53'),
(27, '', 'P2CM-S', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.02, 0, 'CN', '', '', '', 0, '', '8536.4900.99', '€ 0.25', 0, '', 0, '2019-08-01 12:33:53'),
(28, '', 'PYCM-08S', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.07, 0, 'CN', '', '', '', 0, '', '8536.4900.99', '€ 0.40', 0, '', 0, '2019-08-01 12:33:53'),
(29, '', 'J74KN-P4871', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.02, 0, 'AT', '', '', '', 0, '', '8536.4900.99', '€ 0.45', 0, '', 0, '2019-08-01 12:33:53'),
(30, '', 'PYCM-14S', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.04, 0, 'CN', '', '', '', 0, '', '8536.4900.99', '€ 0.45', 0, '', 0, '2019-08-01 12:33:53'),
(31, '', 'PYC-P', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.014, 0, 'JP', '', '', '', 0, '', '8536.4900.99', '€ 0.60', 0, '', 0, '2019-08-01 12:33:53'),
(32, '', 'PYC-A1', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.0054, 0, 'JP', '', '', '', 0, '', '8536.4900.99', '€ 0.65', 0, '', 0, '2019-08-01 12:33:53'),
(33, '', 'PYC-E1', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.01, 0, 'JP', '', '', '', 0, '', '8536.4900.99', '€ 0.65', 0, '', 0, '2019-08-01 12:33:53'),
(34, '', 'P2RVM-020B', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.03, 0, 'DE', '', '', '', 0, '', '8538.9099.99', '€ 0.85', 0, '', 0, '2019-08-01 12:33:53'),
(35, '', 'P2RVM-020R', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.02, 0, 'DE', '', '', '', 0, '', '8538.9099.99', '€ 0.85', 0, '', 0, '2019-08-01 12:33:53'),
(36, '', 'P2RVM-020S', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.01, 0, 'DE', '', '', '', 0, '', '8538.9099.99', '€ 0.85', 0, '', 0, '2019-08-01 12:33:53'),
(37, '', 'J74KN-P2451', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.01, 0, 'AT', '', '', '', 0, '', '8536.4900.99', '€ 0.90', 0, '', 0, '2019-08-01 12:33:53'),
(38, '', 'PYC-1', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.08, 0, 'JP', '', '', '', 0, '', '3926.9097.90', '€ 0.90', 0, '', 0, '2019-08-01 12:33:53'),
(39, '', 'F03-03 SUS304', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.02, 0, 'JP', '', '', '', 0, '', '8538.9099.99', '€ 0.95', 0, '', 0, '2019-08-01 12:33:53'),
(40, '', 'F03-03 SUS316', 'Omron', '', '', '', '', '', '', '', 0, 0, 0, 0.02, 0, 'JP', '', '', '', 0, '', '8538.9099.99', '€ 0.95', 0, '', 0, '2019-08-01 12:33:53'),
(41, '', 'XBTG2330', 'Schneider', '', '', '', 'S6 EMC FOOTPRINT FILTER', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£341.22 ', 0, '', 0, '2019-08-01 12:33:53'),
(42, '', 'XBTG4320', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 329.43', 0, '', 0, '2019-08-01 12:33:53'),
(43, '', 'XBTG4330', 'Schneider', '', '', '', 'S7A EMC FOOTPRINT FILTER', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£392.19 ', 0, '', 0, '2019-08-01 12:33:53'),
(44, '', 'XBTG5230', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 470.00', 0, '', 0, '2019-08-01 12:33:53'),
(45, '', 'XBTG5330', 'Schneider', '', '', '', 'S7B 8 EMC FOOTPRINT FILTER', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£522.23 ', 0, '', 0, '2019-08-01 12:33:53'),
(46, '', 'XBTG6330', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 204.00', 0, '', 0, '2019-08-01 12:33:53'),
(47, '', 'XBTGC1100T', 'Schneider', '', '', '', '15KW EMC FOOTPRINT FILTER LOW LEA', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£252.79 ', 0, '', 0, '2019-08-01 12:33:53'),
(48, '', 'XBTGC1100U', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 552.86', 0, '', 0, '2019-08-01 12:33:53'),
(49, '', 'XBTGC2120T', 'Schneider', '', '', '', 'EMC INPUT FILTER 300A IP00', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£852.01 ', 0, '', 0, '2019-08-01 12:33:53'),
(50, '', 'XBTGC2120U', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 726.00', 0, '', 0, '2019-08-01 12:33:53'),
(51, '', 'XBTGC2230T', 'Schneider', '', '', '', 'EMC INPUT FILTER 600A IP00', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£1,121.44 ', 0, '', 0, '2019-08-01 12:33:53'),
(52, '', 'XBTGC2230U', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 935.57', 0, '', 0, '2019-08-01 12:33:53'),
(53, '', 'XBTGC2330T', 'Schneider', '', '', '', 'EMC INPUT FILTER 800A IP00', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£1,443.94 ', 0, '', 0, '2019-08-01 12:33:53'),
(54, '', 'XBTGC2330U', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 1,672.29', 0, '', 0, '2019-08-01 12:33:53'),
(55, '', 'XBTGCKIT03', 'Schneider', '', '', '', 'EMC INPUT FILTER 1200A IP00', '', '', '', 0, 0, 0, 0, 0, '', '1', '', '', 0, '', '', '£2,582.02 ', 0, '', 0, '2019-08-01 12:33:53'),
(56, '', 'XBTGH2460', 'Schneider', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '€ 142.57', 0, '', 0, '2019-08-01 12:33:53'),
(57, '', '1747-FC', 'Allen Bradley', '', '', '', '1 Pole 600V 400 A Fuse Block', '', 'Current', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£362.00 ', 0, '', 0, '2019-08-01 12:33:53'),
(58, '', '1747-KY1', 'Allen Bradley', '', '', '', 'Fuse Cover', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£35.20 ', 0, '', 0, '2019-08-01 12:33:53'),
(59, '', '1747-L511', 'Allen Bradley', '', '', '', 'Fuse Cover', 'Allen Bradley Preffered Product (= More readily available)', 'Current', '', 0, 0, 0, 0, 0, '', '', '', '', 0, '', '', '£35.40 ', 0, '', 0, '2019-08-01 12:33:53');

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
-- Table structure for table `return_policy`
--

CREATE TABLE `return_policy` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_policy`
--

INSERT INTO `return_policy` (`id`, `description`, `created_at`) VALUES
(1, '<h5 class=\"page_title\">Private Policy</h5>\r\n    <h4 class=\"titles_head\"><span>1</span>   What is Lorem Ipsum?</h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>2</span>   Lorem Ipsum is simply dummy text of the printing and typesetting </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n    ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n     electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n    like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>3</span>   Lorem Ipsum passage, and going through the cites of the word </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>4 </span>  Lorem Ipsum available, but the majority have suffered alteration in some form</h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>5 </span>  Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n    ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n     electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n    like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_contacts`
--

CREATE TABLE `sales_contacts` (
  `id` int(11) NOT NULL,
  `trader` int(11) NOT NULL COMMENT 'created_by',
  `company` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `personal_info` longtext,
  `branch` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `direct_dial` varchar(20) DEFAULT NULL,
  `payment_terms` varchar(255) DEFAULT NULL,
  `estimate_required` varchar(255) DEFAULT NULL,
  `estimate_spend` varchar(255) DEFAULT NULL,
  `manufacturers` int(11) DEFAULT NULL,
  `invoice_reference_number` varchar(255) DEFAULT NULL,
  `pls_information` text,
  `communication` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 for active and 2 for inactive and 3 for archieve',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
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
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `image`, `creation_date`, `status`) VALUES
(1, 'Find it, Fix it, Faster', 'Experts in legacy and obsolete industrial automation spares', 'home-carousel-Image.jpg', '2019-06-17 14:29:46', 0),
(2, 'Same day & Next Day deliveries', 'We have excellent relations with our courier partners so we can deliver fast', 'home-carousel-Image.jpg', '2019-06-17 14:30:48', 0),
(3, 'Ask about our Upcycle and Exchange options', 'Even further savings available with our exchange & upcycle options', 'home-carousel-Image.jpg', '2019-06-17 14:30:56', 0);

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
(1, 'https://www.linkedin.com/company/obsoltd/', 'htt://www.youtube.com', 'https://twitter.com/LtdObso');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `subcategories` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `categories_name`, `subcategories`, `creation_date`, `status`) VALUES
(6, 'HMI\'s & Operator Displays', 'Beijer E1101', '2019-07-08', 0),
(7, 'HMI\'s & Operator Displays', 'Siemens 6AV6644-0AA01-2AX0', '2019-07-08', 0),
(8, 'HMI\'s & Operator Displays', 'Beijer E300', '2019-07-08', 0),
(9, 'HMI\'s & Operator Displays', 'Schneider XBTGT6340', '2019-07-08', 0),
(10, 'HMI\'s & Operator Displays', 'Beijer E1151', '2019-07-08', 0),
(11, 'HMI\'s & Operator Displays', 'Beijer E410', '2019-07-08', 0),
(12, 'HMI\'s & Operator Displays', 'Siemens 6AV6643-0AA01-1AX0', '2019-07-08', 0),
(13, 'HMI\'s & Operator Displays', 'Siemens 6AV6545-0BC15-2AX0', '2019-07-08', 0),
(14, 'HMI\'s & Operator Displays', 'Allen Bradley 2711P-T10C22D9P', '2019-07-08', 0),
(15, 'HMI\'s & Operator Displays', 'Allen Bradley 2711P-T10C21D8S', '2019-07-08', 0),
(16, 'HMI\'s & Operator Displays', 'Allen Bradley 2711P-T10C22D9P', '2019-07-08', 0),
(17, 'HMI\'s & Operator Displays', 'Allen Bradley 2711P-T10C4D8', '2019-07-08', 0),
(18, 'Teach Pendants & Smartpad Controls', 'Bosch Indramat BTC06.1A-T-NN2-FW', '2019-07-08', 0),
(19, 'Teach Pendants & Smartpad Controls', 'Siemens 6AV6645-0AC01-0AX0', '2019-07-08', 0),
(20, 'Teach Pendants & Smartpad Controls', 'Kuka KRC4 Smartpad', '2019-07-08', 0),
(21, 'Teach Pendants & Smartpad Controls', 'Kuka KCP1', '2019-07-08', 0),
(22, 'Teach Pendants & Smartpad Controls', 'Fanuc A05B-2490-C176 RJ3IB', '2019-07-08', 0),
(23, 'Teach Pendants & Smartpad Controls', 'Fanuc A05B-2301-C370 ', '2019-07-08', 0),
(24, 'Teach Pendants & Smartpad Controls', 'Fanuc A05B-2301-C302', '2019-07-08', 0),
(25, 'Teach Pendants & Smartpad Controls', 'Allen-Bradley 8400 Series', '2019-07-08', 0),
(26, 'Teach Pendants & Smartpad Controls', 'Allen-Bradley 1771-HD', '2019-07-08', 0),
(27, 'Teach Pendants & Smartpad Controls', 'GE Fanuc A05B-2490-C200', '2019-07-08', 0),
(28, 'Teach Pendants & Smartpad Controls', 'Yaskawa JZRCR-NPP01-B1', '2019-07-08', 0),
(29, 'Teach Pendants & Smartpad Controls', 'Kuka KCP2', '2019-07-08', 0),
(30, 'PLC Equipment', 'Siemens 6ES7136-6BA00-0CA0', '2019-07-08', 0),
(31, 'PLC Equipment', 'Siemens 6ES7331-7KF02-0AB0', '2019-07-08', 0),
(32, 'PLC Equipment', 'Allen Bradley 1747-L551', '2019-07-08', 0),
(33, 'PLC Equipment', 'Allen Bradley 1747-L552', '2019-07-08', 0),
(35, 'PLC Equipment', 'Allen Bradley 1747-L553', '2019-07-08', 0),
(36, 'PLC Equipment', 'Omron CQM1H-CPU51', '2019-07-08', 0),
(37, 'PLC Equipment', 'Allen Bradley 1769-L36ERM', '2019-07-08', 0),
(38, 'PLC Equipment', 'Siemens 6ES5-951-7LB21', '2019-07-08', 0),
(39, 'PLC Equipment', 'Allen Bradley 1756-EN2T', '2019-07-08', 0),
(40, 'PLC Equipment', 'Mitsubishi FX2NC-4DA', '2019-07-08', 0),
(41, 'PLC Equipment', 'Schneider TSX-P57 Range', '2019-07-08', 0),
(42, 'PLC Equipment', 'Omron CQM1-OC222', '2019-07-08', 0),
(43, 'Drive Technology (AC | DC | Stepper & Servo)', 'Siemens 6SN1123-0AB00-0AA1', '2019-07-08', 0),
(44, 'Drive Technology (AC | DC | Stepper & Servo)', 'Siemens 6SN1145-1BA02-0CA1', '2019-07-08', 0),
(45, 'Drive Technology (AC | DC | Stepper & Servo)', 'Control Techniques UNI 1404', '2019-07-08', 0),
(46, 'Drive Technology (AC | DC | Stepper & Servo)', 'Control Techniques UNI 1403', '2019-07-08', 0),
(47, 'Drive Technology (AC | DC | Stepper & Servo)', 'Siemens 6SN1145-1BA01-0BA1', '2019-07-08', 0),
(48, 'Drive Technology (AC | DC | Stepper & Servo)', 'Control Techniques UD75-UMVCT', '2019-07-08', 0),
(49, 'Drive Technology (AC | DC | Stepper & Servo)', 'Allen Bradley 25B-D2P3N104', '2019-07-08', 0),
(50, 'Drive Technology (AC | DC | Stepper & Servo)', 'Allen Bradley 22A-D4P0N104', '2019-07-08', 0),
(51, 'Drive Technology (AC | DC | Stepper & Servo)', 'Control Techniques UD 73', '2019-07-08', 0),
(52, 'Drive Technology (AC | DC | Stepper & Servo)', 'Control Techniques UNI54CPOD', '2019-07-08', 0),
(53, 'Drive Technology (AC | DC | Stepper & Servo)', 'Allen Bradley 22A-D8P7N104', '2019-07-08', 0),
(54, 'Drive Technology (AC | DC | Stepper & Servo)', 'Allen Bradley 22B-D010N104', '2019-07-08', 0),
(55, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Bosch Indramat MKD071B-061-KG1-kKN', '2019-07-08', 0),
(56, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Siemens 1FK6040-6AK71-1AH0', '2019-07-08', 0),
(57, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Bosch Indramat MKD093C-058-KG1-AF', '2019-07-08', 0),
(58, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Siemens 1FT6084-1AF71-3EG1', '2019-07-08', 0),
(59, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Allen Bradley MPL-B230P-VJ72AA', '2019-07-08', 0),
(60, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Allen Bradley VPL-B0753E-PJ12AA', '2019-07-08', 0),
(61, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Elau SH100/40080/0/1/00/00/00/10/00', '2019-07-08', 0),
(62, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Allen Bradley VPL-B0753M-PK12AA', '2019-07-08', 0),
(63, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Mitsubishi HG-KR43K', '2019-07-08', 0),
(64, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'ABB 3GAA161101-ADC', '2019-07-08', 0),
(65, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Siemens 1FK2102-1AG10-0CA0', '2019-07-08', 0),
(66, 'Motors (AC | DC | Stepper & Servo) & Encoders', 'Leroy Somer LSK1604S05', '2019-07-08', 0);

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
(2, 6205, 'asdfsad', 'asdfsa', 'asdf', 'sdsdfsad', 'sadfsad', 'india', 'AE', '2019-06-18 13:02:53'),
(3, 4198, 'Unit 1 Summerhouse Place', 'Summerhouse Road', 'Moulton Park Industrail Estate', 'Northampton', 'NN3 6GL', 'uk', 'AE', '2019-07-03 22:49:24'),
(4, 2863, 'gewwfff', 'wfegeg', 'Stoke on Trent', '', 'ST4 2TE', '', '', '2019-07-03 23:40:14');

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
(2, 2, 6205, 'Virendra', 'Meshram', 'male', 'asdfs', 'sdfas', 'asdf', 'virendrameshram60@gmail.com', 879797979, 2147483647, 0, 'sdfasdasdf', 'use_email', '', 0, '', '2019-06-18 13:03:22'),
(3, 3, 4198, 'Dario', 'Amanovic', 'male', '', 'Account Manager', 'Northampton UK', 'uksales@unisgroup.com', 2147483647, 1604499777, 0, '', '', '', 0, '', '2019-07-03 22:52:21'),
(4, 4, 2863, 'gthgergg', 'gergegg', 'male', '', 'eggeeg', '', '', 383625583, 0, 0, '', 'use_email', '', 0, '', '2019-07-03 23:40:35');

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
(4, 'OEM Manufacturer', '2019-07-10 23:31:39', 0),
(5, 'Direct Official Distributor', '2019-07-10 23:31:54', 0),
(6, 'Indirect Official Distributor', '2019-07-10 23:32:14', 0),
(7, 'Repair with Stock & Supply (independent)', '2019-07-10 23:32:29', 0),
(8, 'Independent 3rd Party Stockist & Supplier', '2019-07-10 23:32:45', 0);

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
(2, 6205, 'VEE-DEV Software 001', 'New Admin', 'test', 'Supplier Industries One', 'test', 'http://localhost/obsoadmin/admin/', 'asdfasdfasdf', 'pre9am', 'asdfsa', '-10', 'asdfasd', '', '', '5050 Advance', 'asdfs', 'sdfsdf', 0, 2, '2days', 'openbox,used', '', 'phaseout,obsolete', 'Manufacturer Two,Manufacturer Five,asdfasd', '', '2019-06-18 13:02:53'),
(3, 4198, 'Unis', 'New Admin', 'Also known as EDMR.\r\n\r\nThis is our supplier for Upcycling.\r\n\r\nSpecialist in the repair of industrial electronics\r\nUNIS Group – established in 1984 – is an international service company that specializes in repairing and selling industrial electronics. The electronics are cleaned, repaired and tested in accordance with strict quality standards.\r\n\r\nBroad expertise\r\nTo respond effectively to problems, we employ a number of expert technicians supported by first-class measurement equipment and many test facilities. Our large stock of spares makes it possible to resolve defects even more quickly.\r\n\r\nFrom PLCs to drives, from HMIs to robot electronics. We are your partner in the repair and service of industrial electronics.\r\n', 'Independent Stockist ', '', 'https://www.unisgroup.co.uk/', '01604 499 777', 'nextday', '', '(GMT-12:00) International Date Line West', '', '', '', 'Advance', '', '25% ', 0, 2, '2days', 'factorysealed,openbox,used,exchange,repair', '', '', 'Allen Bradley,ABB,Bosch Rexroth,Fanuc,GE Fanuc,Lenze,Mitsubishi,Omron,Siemens,Schneider,Telemecanique', '', '2019-07-03 22:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_stock`
--

CREATE TABLE `supplier_stock` (
  `id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `local_stock_number` varchar(255) NOT NULL,
  `part_number` varchar(255) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `range` varchar(255) NOT NULL,
  `tech_info` text NOT NULL,
  `description` text NOT NULL,
  `internal_part_notes` text NOT NULL,
  `product_condition` varchar(255) NOT NULL,
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
  `cost_to_buy` int(11) NOT NULL,
  `min_obso_cost` int(11) NOT NULL,
  `bn_exchange_price` int(11) NOT NULL,
  `brand_new_quantity` int(11) NOT NULL,
  `brand_new_rrp` varchar(255) NOT NULL,
  `web_price` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date_sheet_info` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_stock`
--

INSERT INTO `supplier_stock` (`id`, `product_image`, `local_stock_number`, `part_number`, `manufacturer_name`, `type`, `range`, `tech_info`, `description`, `internal_part_notes`, `product_condition`, `licycle_status`, `lifecycle_date`, `length`, `width`, `height`, `weight_kg`, `weight_lb`, `country`, `qty_brand_new`, `qty_new_surplus`, `qty_pre_owned`, `total_qty`, `lead_time`, `export_comm_code`, `cost_to_buy`, `min_obso_cost`, `bn_exchange_price`, `brand_new_quantity`, `brand_new_rrp`, `web_price`, `location`, `date_sheet_info`, `supplier_name`, `status`, `creation_date`) VALUES
(1, 'Desert.jpg', '123456 132132', '123 456-789 Abcd', 'Allen Bradley', 'Type TBC', '5000', 'asdf', 'asdf', 'asdf', 'Brand New', 'Unknown', '2019-07-18', 12, 45, 45, 50, 50, 'Norway', '', '', '', 0, 'Same Day', '123456', 500, 500, 500, 500, 'asdfasdfa', 5003, 'Tumsar', 'Lighthouse.jpg', 'Virendra', 0, '2019-07-17 15:29:15'),
(2, 'Hydrangeas.jpg', '', '123 456-789 Abcd', 'ABB', 'Type TBC', '5000', 'asdf', 'asdf', 'asdf', '', 'Unknown', '2019-07-18', 12, 45, 45, 50, 50, 'Denmark', '5', '5', '5', 15, 'Same Day', '3434', 0, 0, 0, 0, '34', 500, '', 'Tulips.jpg', 'Viru', 0, '2019-07-17 16:58:48'),
(3, '', '1233', 'M735 03-A3201233', 'ABB', 'HMI Operator Displays', '', '', 'test', '', '', '', '', 0, 0, 0, 0, 0, 'Europe', '', '', '', 0, '', '', 200, 100, 0, 12, '1299', 0, '', '', 'Neha', 0, '2019-07-27 23:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `description`) VALUES
(1, '<h5 class=\"page_title\">Private Policy</h5>\r\n    <h4 class=\"titles_head\"><span>1</span>   What is Lorem Ipsum?</h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>2</span>   Lorem Ipsum is simply dummy text of the printing and typesetting </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n    ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n     electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n    like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>3</span>   Lorem Ipsum passage, and going through the cites of the word </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>4 </span>  Lorem Ipsum available, but the majority have suffered alteration in some form</h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n     ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n     scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n      electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n     of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n     like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>\r\n    <h4 class=\"titles_head\"><span>5 </span>  Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always </h4>\r\n    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the i\r\n    ndustry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and \r\n    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into\r\n     electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release \r\n    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software \r\n    like Aldus PageMaker including versions of Lorem Ipsum.\r\n    </p>');

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
  `department` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country` int(11) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `leaving_date` varchar(255) NOT NULL,
  `sales_target` varchar(255) NOT NULL,
  `sales_target1` varchar(255) NOT NULL,
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

INSERT INTO `user` (`id`, `empid`, `first_name`, `last_name`, `gender`, `department`, `email`, `address`, `mobile`, `phone`, `password`, `country`, `joining_date`, `leaving_date`, `sales_target`, `sales_target1`, `permission_access`, `idproof`, `emp_image`, `reg_status`, `created_at`, `verify_string`, `status`, `role`) VALUES
(1, 0, 'Super', 'Admin', '', '', 'admin1@admin.com', '', '0100 500 600', 0, '8d788385431273d11e8b43bb78f3aa41', 14, '', '', '', '', 'calender,sales,quote_pipeline,supplier_database,order_delivery,other,report_status,finance,cms,stock_search,supplier_stock', '', '', 0, '2018-03-02 14:51:38', NULL, 1, 'admin'),
(17, 0, 'New Admin', 'New Admin', '', '', 'admin@admin.com', '', '08053433', 0, '81dc9bdb52d04dc20036dbd8313ed055', 126, '', '', '', '', 'calender,sales,quote_pipeline,supplier_database,order_delivery,other,report_status,finance,cms,stock_search,supplier_stock', '', '', 0, '2019-02-27 23:51:25', NULL, 1, 'admin'),
(34, 86371, 'virendramm', 'Meshram', 'male', '1', 'virendrameshram60@gmail.com', 'sdsgdgg', '', 2147483647, 'bd46af2d2f6ffe0a5f523f085145b5ea', 2, '', '', 'dfadfgsdf', '', 'calender,sales,quote_pipeline', '16965download.png', '82233test.png', 1, '2019-07-09 11:33:10', NULL, 1, '4'),
(35, 89136, 'NEHA', 'MAJUMDER', 'female', '', 'to.neha16@gmail.com', 'S.N.Dey Road', '', 2147483647, '77109dbe4aa90023fd883634d6771fe6', 76, '', '', '100000', '', 'calender,sales,quote_pipeline,supplier_database', '44541', '48017', 1, '2019-07-09 19:06:18', NULL, 1, '6'),
(36, 72150, 'virendramm', 'Meshram', 'male', '2', 'virendrameshram60@gmail.com', 'sadfasdf', '', 2147483647, 'a82021f19ee97e2c03d08f85ffca549c', 2, '', '', 'updatefdfsdf', '', 'calender,sales,quote_pipeline,supplier_database,order_delivery', '63140', '33969', 1, '2019-07-09 19:14:19', NULL, 1, '4'),
(37, 89654, 'virendramm', 'mmmmmbbbb', 'male', 'Designation 1', 'virendrameshram60@gmail.com', 'asdfsad', '', 2147483647, 'aa6dfc6ee86d94566083636ddc2b0b58', 15, '', '', '5000', '', '', '61353Desert.jpg', '85893Jellyfish.jpg', 1, '2019-07-11 14:14:00', '49bda30e531e5ba6b465875d1785e372', 0, 'Sale Manager');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
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
-- Indexes for table `employee_role`
--
ALTER TABLE `employee_role`
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
-- Indexes for table `home_front`
--
ALTER TABLE `home_front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
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
-- Indexes for table `return_policy`
--
ALTER TABLE `return_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_contacts`
--
ALTER TABLE `sales_contacts`
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
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- Indexes for table `supplier_stock`
--
ALTER TABLE `supplier_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_contact`
--
ALTER TABLE `customer_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_records`
--
ALTER TABLE `customer_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_role`
--
ALTER TABLE `employee_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `enquiry_qty`
--
ALTER TABLE `enquiry_qty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_front`
--
ALTER TABLE `home_front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `productcondition`
--
ALTER TABLE `productcondition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_policy`
--
ALTER TABLE `return_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_contacts`
--
ALTER TABLE `sales_contacts`
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
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `supplier_address`
--
ALTER TABLE `supplier_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier_contact`
--
ALTER TABLE `supplier_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier_industry`
--
ALTER TABLE `supplier_industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier_records`
--
ALTER TABLE `supplier_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_stock`
--
ALTER TABLE `supplier_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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

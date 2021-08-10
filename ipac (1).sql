-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 10:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `country_id` varchar(55) NOT NULL,
  `state_id` varchar(55) NOT NULL,
  `district_id` varchar(55) NOT NULL,
  `tehsil_id` varchar(55) NOT NULL,
  `block_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`block_id`, `country_id`, `state_id`, `district_id`, `tehsil_id`, `block_name`, `created_at`) VALUES
(5, '3', '3', '8', '3', 'naugarh1', '2021-07-19 12:49:53'),
(6, '6', '6', '28', '5', 'Naugarh', '2021-07-20 17:54:03'),
(7, '6', '6', '82', '', 'update block', '2021-07-30 13:40:21'),
(8, '6', '30', '57', '', 'lucknow', '2021-07-30 13:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `poster`, `title`, `sub_title`, `created_at`) VALUES
(23, 'uploads/WhatsApp_Image_2021-08-03_at_4_20_11_PM.jpeg', '2019 AP CAMPAIGN', 'Vanchana Pai Garjana', '2021-08-04 16:15:36'),
(26, 'uploads/WhatsApp_Image_2021-07-28_at_4_46_27_PM.jpeg', '2021 JAN SAMPARK', 'Lucknow, UP, India', '2021-08-05 12:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_images`
--

CREATE TABLE `campaign_images` (
  `id` int(11) NOT NULL,
  `campaign_id` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign_images`
--

INSERT INTO `campaign_images` (`id`, `campaign_id`, `image`, `created_at`) VALUES
(4, '23', 'uploads/cd6fd70c224f480a970e24f4812b3031-0010.jpg', '2021-08-05 11:57:10'),
(5, '23', 'uploads/WhatsApp_Image_2021-08-03_at_5_40_37_PM.jpeg', '2021-08-05 12:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `created_at`) VALUES
(6, 'India', '2021-07-19 15:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `country_id` varchar(55) NOT NULL,
  `state_id` varchar(55) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `country_id`, `state_id`, `district_name`, `created_at`) VALUES
(10, '6', '30', 'Agra', '2021-07-19 15:14:15'),
(11, '6', '30', 'Aligarh', '2021-07-19 15:14:15'),
(12, '6', '30', 'Allahabad', '2021-07-19 15:14:15'),
(13, '6', '30', 'Ambedkar Nagar', '2021-07-19 15:14:15'),
(14, '6', '30', 'Amethi', '2021-07-19 15:14:15'),
(15, '6', '30', 'Auraiya', '2021-07-19 15:14:15'),
(16, '6', '30', 'Azamgarh', '2021-07-19 15:14:15'),
(17, '6', '30', 'Badaun', '2021-07-19 15:14:16'),
(18, '6', '30', 'Baghpat', '2021-07-19 15:14:16'),
(19, '6', '30', 'Bahraich', '2021-07-19 15:14:16'),
(20, '6', '30', 'Ballia', '2021-07-19 15:15:43'),
(21, '6', '30', 'Balrampur', '2021-07-19 15:15:43'),
(22, '6', '30', 'Banda', '2021-07-19 15:15:44'),
(23, '6', '30', 'Bara Banki', '2021-07-19 15:15:44'),
(24, '6', '30', 'Bareilly', '2021-07-19 15:15:44'),
(25, '6', '30', 'Basti', '2021-07-19 15:15:44'),
(26, '6', '30', 'Bijnor', '2021-07-19 15:15:44'),
(27, '6', '30', 'Bulandshahr', '2021-07-19 15:15:44'),
(28, '6', '30', 'Chandauli', '2021-07-19 15:15:44'),
(29, '6', '30', 'Deoria', '2021-07-19 15:15:44'),
(30, '6', '30', 'Etah', '2021-07-19 15:56:14'),
(31, '6', '30', 'Etawah', '2021-07-19 15:56:14'),
(32, '6', '30', 'Faizabad', '2021-07-19 15:56:14'),
(33, '6', '30', 'Farrukhabad', '2021-07-19 15:56:14'),
(34, '6', '30', 'Fatehpur', '2021-07-19 15:56:14'),
(35, '6', '30', 'Firozabad', '2021-07-19 15:56:14'),
(36, '6', '30', 'Gautam Budh Nagar', '2021-07-19 15:56:14'),
(37, '6', '30', 'Ghaziabad', '2021-07-19 15:56:14'),
(38, '6', '30', 'Ghazipur', '2021-07-19 15:56:14'),
(39, '6', '30', 'Gonda', '2021-07-19 15:56:14'),
(40, '6', '30', 'Gorakhpur', '2021-07-19 15:56:14'),
(41, '6', '30', 'Hamirpur', '2021-07-19 15:56:14'),
(42, '6', '30', 'Hapur', '2021-07-19 15:56:14'),
(43, '6', '30', 'Hardoi', '2021-07-19 15:56:14'),
(44, '6', '30', 'Hathras', '2021-07-19 15:56:14'),
(45, '6', '30', 'Jalaun', '2021-07-19 15:56:14'),
(46, '6', '30', 'Jaunpur', '2021-07-19 15:56:14'),
(47, '6', '30', 'Jhansi', '2021-07-19 15:56:14'),
(48, '6', '30', 'Jyotiba Phule Nagar', '2021-07-19 15:57:19'),
(49, '6', '30', 'Kannauj', '2021-07-19 15:57:19'),
(50, '6', '30', 'Kanpur Rural', '2021-07-19 15:57:19'),
(51, '6', '30', 'Kanpur Urban', '2021-07-19 15:57:19'),
(52, '6', '30', 'Kanshiram Nagar', '2021-07-19 15:57:19'),
(53, '6', '30', 'Kaushambi', '2021-07-19 15:57:19'),
(54, '6', '30', 'Kushinagar', '2021-07-19 15:57:19'),
(55, '6', '30', 'Lakhimpur', '2021-07-19 15:57:19'),
(56, '6', '30', 'Lalitpur', '2021-07-19 15:57:19'),
(57, '6', '30', 'Lucknow', '2021-07-19 15:57:19'),
(58, '6', '30', 'Maharajganj', '2021-07-19 15:57:19'),
(59, '6', '30', 'Mahoba', '2021-07-19 15:57:19'),
(60, '6', '30', 'Mainpuri', '2021-07-19 15:57:19'),
(61, '6', '30', 'Mathura', '2021-07-19 15:57:19'),
(62, '6', '30', 'Mau', '2021-07-19 15:57:19'),
(63, '6', '30', 'Meerut', '2021-07-19 15:57:19'),
(64, '6', '30', 'Mirzapur', '2021-07-19 15:57:19'),
(65, '6', '30', 'Moradabad', '2021-07-19 15:57:20'),
(66, '6', '30', 'Muzaffarnagar', '2021-07-19 15:57:20'),
(67, '6', '30', 'Pilibhit', '2021-07-19 15:58:43'),
(68, '6', '30', 'Pratapgarh', '2021-07-19 15:58:43'),
(69, '6', '30', 'Raebareli', '2021-07-19 15:58:43'),
(70, '6', '30', 'Rampur', '2021-07-19 15:58:43'),
(71, '6', '30', 'Saharanpur', '2021-07-19 15:58:43'),
(72, '6', '30', 'Sambhal', '2021-07-19 15:58:43'),
(73, '6', '30', 'Shamli', '2021-07-19 15:58:43'),
(74, '6', '30', 'Sant Kabir Nagar', '2021-07-19 15:58:43'),
(75, '6', '30', 'Sant Ravi Nagar', '2021-07-19 15:58:43'),
(76, '6', '30', 'Shahjahanpur', '2021-07-19 15:58:43'),
(77, '6', '30', 'Shravasti', '2021-07-19 15:58:43'),
(78, '6', '30', 'Siddharth Nagar', '2021-07-19 15:58:43'),
(79, '6', '30', 'Sitapur', '2021-07-19 15:58:43'),
(80, '6', '30', 'Sonbhadra', '2021-07-19 15:58:43'),
(81, '6', '30', 'Sultanpur', '2021-07-19 15:58:43'),
(82, '6', '30', 'Unnao', '2021-07-19 15:58:43'),
(83, '6', '30', 'Varanasi', '2021-07-19 15:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `impact`
--

CREATE TABLE `impact` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `impact`
--

INSERT INTO `impact` (`id`, `image`, `created_at`) VALUES
(1, 'uploads/WhatsApp_Image_2021-08-03_at_4_20_11_PM1.jpeg', '2021-08-05 12:38:04'),
(3, 'uploads/WhatsApp_Image_2021-08-03_at_3_00_16_PM.jpeg', '2021-08-05 12:58:41'),
(4, 'uploads/mantri3.jpg', '2021-08-05 12:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(11) NOT NULL,
  `sub_cat_id` varchar(11) NOT NULL,
  `responsibilies` text NOT NULL,
  `min_qualification` text NOT NULL,
  `preferred_qualification` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `short_note` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `cat_name`, `created_at`) VALUES
(9, 'gfrfghtrg', '2021-08-06 13:10:30'),
(10, 'retret5retye5rye', '2021-08-06 13:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `job_sub_category`
--

CREATE TABLE `job_sub_category` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(11) NOT NULL,
  `sub_cat_name` varchar(55) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_sub_category`
--

INSERT INTO `job_sub_category` (`id`, `cat_id`, `sub_cat_name`, `created_at`) VALUES
(5, '9', 'eewr', '2021-08-06 13:26:49'),
(6, '10', 'ewrfew', '2021-08-06 13:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `channel_logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `poster`, `channel_logo`, `title`, `short_description`, `link`, `created_at`) VALUES
(2, 'uploads/WhatsApp_Image_2021-07-13_at_5_27_43_PM.jpg', '', 'त्रिपुरा ने कोविड -19 टेस्ट के लिए भेजे111111111111', 'dfrfew', 'https://www.youtube.com/embed/3VYYTQm8rjA', '2021-08-05 14:32:18'),
(3, 'uploads/WhatsApp_Image_2021-07-13_at_5_28_41_PM.jpg', '', 'यूपी में आज से महंगी हुई शराब', 'Started as Citizens for Accountable Governance (CAG) in 2013, I-PAC has brought some of the best minds from diverse academic and professional backgrounds together and provided them with a unique opportunity to become a part of the election process and influence policy making in India.', 'https://www.youtube.com/embed/qgL95eEkobM', '2021-08-05 15:21:35'),
(4, 'uploads/WhatsApp_Image_2021-07-13_at_5_31_08_PM.jpg', '', '\'दीदी ओ दीदी\' का जनता ने दिया मुंहतोड़ जवाब- अखिलेश यादव का बीजेपी पर तंज, ', 'Indian Political Action Committee (I-PAC) is the platform of choice for students and young professionals to participate in and make meaningful contribution to political affairs and governance of the country, without necessarily being part of a political party.', 'https://www.youtube.com/embed/qgL95eEkobM', '2021-08-05 15:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` varchar(55) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`, `created_at`) VALUES
(5, '6', 'Andhra Pradesh', '2021-07-19 15:04:11'),
(6, '6', 'Arunachal Pradesh', '2021-07-19 15:04:25'),
(7, '6', 'Assam', '2021-07-19 15:04:36'),
(8, '6', 'Bihar', '2021-07-19 15:04:45'),
(9, '6', 'Chhattisgarh	', '2021-07-19 15:05:14'),
(10, '6', 'Goa', '2021-07-19 15:05:22'),
(11, '6', 'Gujarat', '2021-07-19 15:05:32'),
(12, '6', 'Haryana', '2021-07-19 15:05:41'),
(13, '6', 'Himachal Pradesh', '2021-07-19 15:05:49'),
(14, '6', 'Jharkhand', '2021-07-19 15:05:58'),
(15, '6', 'Karnataka', '2021-07-19 15:06:06'),
(16, '6', 'Kerala', '2021-07-19 15:06:13'),
(17, '6', 'Madhya Pradesh', '2021-07-19 15:06:20'),
(18, '6', 'Maharashtra', '2021-07-19 15:06:32'),
(19, '6', 'Manipur', '2021-07-19 15:06:42'),
(20, '6', 'Meghalaya', '2021-07-19 15:07:10'),
(21, '6', 'Mizoram', '2021-07-19 15:07:23'),
(22, '6', 'Nagaland', '2021-07-19 15:07:32'),
(23, '6', 'Odisha', '2021-07-19 15:07:40'),
(24, '6', 'Punjab', '2021-07-19 15:07:48'),
(25, '6', 'Rajasthan', '2021-07-19 15:08:03'),
(26, '6', 'Sikkim', '2021-07-19 15:08:11'),
(27, '6', 'Tamil Nadu', '2021-07-19 15:08:24'),
(28, '6', 'Telangana', '2021-07-19 15:08:43'),
(29, '6', 'Tripura', '2021-07-19 15:08:50'),
(30, '6', 'Uttar Pradesh', '2021-07-19 15:09:02'),
(31, '6', 'Uttarakhand', '2021-07-19 15:09:15'),
(32, '6', 'West Bengal', '2021-07-19 15:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `mobno` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `age` varchar(11) NOT NULL,
  `education` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `category` varchar(55) NOT NULL,
  `cost` varchar(55) NOT NULL,
  `country_id` varchar(55) NOT NULL,
  `state_id` varchar(55) NOT NULL,
  `district_id` varchar(55) NOT NULL,
  `block_id` varchar(55) NOT NULL,
  `tehsil` varchar(255) NOT NULL,
  `assembly` varchar(255) NOT NULL,
  `village_type` varchar(255) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `party_designation` varchar(255) NOT NULL,
  `support` varchar(255) NOT NULL,
  `help` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `work_category`
--

CREATE TABLE `work_category` (
  `id` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `state_name` varchar(55) NOT NULL,
  `year` varchar(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `short_description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_category`
--

INSERT INTO `work_category` (`id`, `poster`, `state_name`, `year`, `name`, `short_description`, `created_at`) VALUES
(3, 'uploads/WhatsApp_Image_2021-07-12_at_5_46_26_PM.jpeg', 'Uttarakhand', '2021', 'vivek', 'des', '2021-08-05 17:44:11'),
(4, 'uploads/3d-house-with-solar-pannels.jpg', 'Tripura', '2021', 'ewrewrew ', 'rfrewewewewewee', '2021-08-06 10:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `work_items`
--

CREATE TABLE `work_items` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_items`
--

INSERT INTO `work_items` (`id`, `cat_id`, `image`, `created_at`) VALUES
(4, '3', 'uploads/WhatsApp_Image_2021-08-03_at_3_00_14_PM.jpeg', '2021-08-06 12:01:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_images`
--
ALTER TABLE `campaign_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `impact`
--
ALTER TABLE `impact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_sub_category`
--
ALTER TABLE `job_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_category`
--
ALTER TABLE `work_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_items`
--
ALTER TABLE `work_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `campaign_images`
--
ALTER TABLE `campaign_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `impact`
--
ALTER TABLE `impact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_sub_category`
--
ALTER TABLE `job_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_category`
--
ALTER TABLE `work_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work_items`
--
ALTER TABLE `work_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

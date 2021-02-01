-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 08:07 AM
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
-- Database: `digihivelandingpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(6, 'digihive', 'developer@digihive.co.uk', '$2y$10$3OAYTVAM.rp63MAfGRQU2OywrdaoMXIMFYYIjG8jRx5imO77w/vYu', '1', '2020-09-23 12:39:34'),
(8, 'Basit Ansari', 'basitprince8001@gmail.com', '$2y$10$qk.oWqfjXXGe2zz/nEKg0.hVL5KbckxSZKsLwPxu7vRgZUyOLpMc.', '0', '2021-01-28 17:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown1`
--

CREATE TABLE `dropdown1` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dropdown1`
--

INSERT INTO `dropdown1` (`id`, `value`) VALUES
(34, 'lucknow'),
(35, 'kanpur'),
(36, 'delhi'),
(37, 'mumbai'),
(38, 'etc');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown2`
--

CREATE TABLE `dropdown2` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dropdown2`
--

INSERT INTO `dropdown2` (`id`, `value`) VALUES
(21, 'UX/UI Design and Development'),
(22, 'SEO'),
(23, 'Pay Per Click'),
(24, 'Social Media Marketing'),
(25, 'Design & Branding'),
(26, 'Content & Strategy'),
(27, 'Digital Events'),
(28, 'Digital Productions');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown3`
--

CREATE TABLE `dropdown3` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dropdown3`
--

INSERT INTO `dropdown3` (`id`, `value`) VALUES
(16, 'sddf');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `field1` varchar(255) NOT NULL,
  `field2` varchar(255) NOT NULL,
  `field3` varchar(255) NOT NULL,
  `field4` varchar(255) NOT NULL,
  `field5` varchar(255) NOT NULL,
  `field6` varchar(255) NOT NULL,
  `dropdown1` varchar(255) NOT NULL,
  `dropdown2` varchar(255) NOT NULL,
  `dropdown3` varchar(255) NOT NULL,
  `bg_image` longtext NOT NULL,
  `main_image` longtext NOT NULL,
  `disclaimer_heading` varchar(255) NOT NULL,
  `disclaimer_msg` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `date_of_updation` timestamp NOT NULL DEFAULT current_timestamp(),
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `seo_desc` varchar(255) NOT NULL,
  `og_title` varchar(255) NOT NULL,
  `og_desc` varchar(255) NOT NULL,
  `og_image` longtext NOT NULL,
  `google_tag_manager` varchar(255) NOT NULL,
  `facebook_pixel` varchar(255) NOT NULL,
  `main_email` varchar(255) NOT NULL,
  `base_color` varchar(255) NOT NULL,
  `text_color` varchar(255) NOT NULL,
  `border_color` varchar(255) NOT NULL,
  `btn_color` varchar(255) NOT NULL,
  `accent_color` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `dropdown1`, `dropdown2`, `dropdown3`, `bg_image`, `main_image`, `disclaimer_heading`, `disclaimer_msg`, `title`, `sub_title`, `date_of_updation`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `youtube_link`, `whatsapp`, `seo_title`, `seo_keyword`, `seo_desc`, `og_title`, `og_desc`, `og_image`, `google_tag_manager`, `facebook_pixel`, `main_email`, `base_color`, `text_color`, `border_color`, `btn_color`, `accent_color`, `bg_color`) VALUES
(1, 'Current City', '', '', '', '', '', '', 'Services', '', 'background.jpg', 'LANDING PAGE WEBSITE (3).jpg', 'Disclaimer', 'By submitting the above form, you are agreeing to our terms and conditions', 'Is your business online yet?', 'If not please provide your details below and we will make sure to bring you online.', '2021-01-21 07:15:01', 'facebook link', 'Twitter Link', 'Instagram Link', 'LinkedIn Link', 'YouTube Link', '9305514423', 'seo title', 'seo keyword', 'seo description', 'og title', 'og description', 'bg.jpg', 'google tag manager', 'facebook pixel', 'dev13dh@gmail.com', 'red', '#2C3693', 'fkkff', 'success', 'kjjjv', 'vv');

-- --------------------------------------------------------

--
-- Table structure for table `page_enquiry`
--

CREATE TABLE `page_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `field1` varchar(255) NOT NULL,
  `field2` varchar(255) NOT NULL,
  `field3` varchar(255) NOT NULL,
  `field4` varchar(255) NOT NULL,
  `field5` varchar(255) NOT NULL,
  `field6` varchar(255) NOT NULL,
  `dropdown1_value` varchar(255) NOT NULL,
  `dropdown2_value` varchar(255) NOT NULL,
  `dropdown3_value` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_enquiry`
--

INSERT INTO `page_enquiry` (`id`, `name`, `phone_number`, `email`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `dropdown1_value`, `dropdown2_value`, `dropdown3_value`, `status`) VALUES
(1, 'Mohd Faheem', '9305514423', 'faheem@gmail.com', 'Lucknow', '', '', '', '', '', '', 'Design & Branding', '', 1),
(2, 'Abdullah', '7398716634', 'basitprince8001@gmail.com', 'Lucknow', '', '', '', '', '', '', 'Design & Branding', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropdown1`
--
ALTER TABLE `dropdown1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropdown2`
--
ALTER TABLE `dropdown2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropdown3`
--
ALTER TABLE `dropdown3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_enquiry`
--
ALTER TABLE `page_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dropdown1`
--
ALTER TABLE `dropdown1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `dropdown2`
--
ALTER TABLE `dropdown2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dropdown3`
--
ALTER TABLE `dropdown3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_enquiry`
--
ALTER TABLE `page_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2021 at 03:31 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(6, 'digihive', 'developer@digihive.co.uk', '$2y$10$3OAYTVAM.rp63MAfGRQU2OywrdaoMXIMFYYIjG8jRx5imO77w/vYu', '1', '2020-09-23 12:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown1`
--

DROP TABLE IF EXISTS `dropdown1`;
CREATE TABLE IF NOT EXISTS `dropdown1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `dropdown2`;
CREATE TABLE IF NOT EXISTS `dropdown2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dropdown2`
--

INSERT INTO `dropdown2` (`id`, `value`) VALUES
(20, 'UX/UI Design and Development'),
(21, 'SEO'),
(22, 'Pay Per Click'),
(23, 'Social Media Marketing'),
(24, 'Design & Branding'),
(25, 'Content & Strategy'),
(26, 'Digital Events'),
(27, 'Digital Productions');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown3`
--

DROP TABLE IF EXISTS `dropdown3`;
CREATE TABLE IF NOT EXISTS `dropdown3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dropdown3`
--

INSERT INTO `dropdown3` (`id`, `value`) VALUES
(16, 'sddf');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

DROP TABLE IF EXISTS `home_page`;
CREATE TABLE IF NOT EXISTS `home_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `date_of_updation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `bg_color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `dropdown1`, `dropdown2`, `dropdown3`, `bg_image`, `main_image`, `disclaimer_heading`, `disclaimer_msg`, `title`, `sub_title`, `date_of_updation`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `youtube_link`, `whatsapp`, `seo_title`, `seo_keyword`, `seo_desc`, `og_title`, `og_desc`, `og_image`, `google_tag_manager`, `facebook_pixel`, `main_email`, `base_color`, `text_color`, `border_color`, `btn_color`, `accent_color`, `bg_color`) VALUES
(1, 'current city', 'Website URL', '', '', '', '', '', 'Services', '', 'background.jpg', 'LANDING PAGE WEBSITE (3).jpg', 'Disclaimer', 'By submitting the above form, you are agreeing to our terms and conditions', 'Is your business online yet', 'If not please provide your details below and we will make sure to bring you online', '2021-01-21 07:15:01', 'facebook link', 'Twitter Link', 'Instagram Link', 'LinkedIn Link', 'YouTube Link', '9305514423', 'seo title', 'seo keyword', 'seo description', 'og title', 'og description', 'bg.jpg', 'google tag manager', 'facebook pixel', 'dev13dh@gmail.com', 'dd', '#2C3693', 'fkkff', 'success', 'kjjjv', 'vv');

-- --------------------------------------------------------

--
-- Table structure for table `page_enquiry`
--

DROP TABLE IF EXISTS `page_enquiry`;
CREATE TABLE IF NOT EXISTS `page_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_enquiry`
--

INSERT INTO `page_enquiry` (`id`, `name`, `phone_number`, `email`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `dropdown1_value`, `dropdown2_value`, `dropdown3_value`, `status`) VALUES
(6, 'Basit', '9305514423', 'basitprince8001@gmail.com', 'Lucknow', '', '', '', '', '', '', 'Pay Per Click', '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

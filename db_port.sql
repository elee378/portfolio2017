-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 04:01 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_port`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_img` varchar(300) NOT NULL,
  `about_text` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_img`, `about_text`) VALUES
(1, 'fox_logo_profileshot.svg', 'I am a Graphic and Web Designer currently enrolled in a dual degree program at Western University and Fanshawe College. I hope to graduate by 2018 and apply my skills and traits to an industry setting.\r\n\r\nProficient in the extensive library of Adobe products, my main passion within my program was design. Web content, logos, marketing materials, mockups, and branding are all things I am familiar with.\r\n\r\nI also have an understanding of coding languages such as HTML5, CSS3, JAVASCRIPT, and PHP. Whether its in bootstrap or foundation mobile first responsive design is always a must.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_header`
--

CREATE TABLE `tbl_header` (
  `header_id` int(11) NOT NULL,
  `header_img` varchar(300) NOT NULL,
  `header_name` varchar(25) NOT NULL,
  `header_headline` varchar(75) NOT NULL,
  `header_nav` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_header`
--

INSERT INTO `tbl_header` (`header_id`, `header_img`, `header_name`, `header_headline`, `header_nav`) VALUES
(1, 'headerimg.png', 'Eric Lee', 'web development and graphic design', 'Branding, Marketing, Front-end, And more.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_title` varchar(25) NOT NULL,
  `portfolio_text` varchar(250) NOT NULL,
  `portfolio_headline` varchar(25) NOT NULL,
  `portfolio_images` varchar(300) NOT NULL,
  `portfolio_imagesLightbox` varchar(300) NOT NULL,
  `portfolio_imageDescription` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`portfolio_id`, `portfolio_title`, `portfolio_text`, `portfolio_headline`, `portfolio_images`, `portfolio_imagesLightbox`, `portfolio_imageDescription`) VALUES
(1, 'web', 'All my code', 'web', 'all_1.jpg', 'all_1LB.jpg', 'Lamborghini Website: Web Design, Web Development, and CINEMA4D. Contact me for a Live Preview!'),
(2, 'web', 'All my code', 'web', 'all_2.jpg', 'all_2LB.jpg', 'Pesci Fishing Site: Web Design, Web Development. Contact me for a Live Preview!'),
(3, 'design', 'All my designs', 'design', 'all_3.jpg', 'all_3LB.jpg', 'Ivey Ace Conference: Graphic Design, Branding, Marketing. Contact me for examples!'),
(4, 'design', 'All my designs', 'design', 'all_4.jpg', 'all_4LB.jpg', 'D&R Electricians: Graphic Design, Branding, Web Design. Contact me for examples!'),
(5, 'other', 'Personal projects', 'other', 'all_5.jpg', 'all_5LB.jpg', 'Pixel Studios: Graphic Design, a project done for fun.'),
(6, 'design', 'All my designs', 'design', 'all_6.jpg', 'all_6LB.jpg', 'Ecomo Water Bottle: Graphic Design, Branding, Marketing. Contact me for examples!'),
(7, 'other', 'Personal projects', 'other', 'all_7.jpg', 'all_7LB.jpg', 'Detailed Landscape: Graphic Design, a project done for fun.'),
(8, 'web', 'All my code', 'web', 'all_8.jpg', 'all_8LB.jpg', 'Organica Restaurant: Web Design, Web Development. Contact me for a Live Preview!'),
(9, 'other', 'Personal projects', 'other', 'all_9.jpg', 'all_9LB.jpg', 'Magazine Design: Graphic Design, a project done for fun.'),
(10, 'other', 'Personal projects', 'other', 'all_10.jpg', 'all_10LB.jpg', 'Dragon Illustration: Graphic Design, a project done for fun.'),
(11, 'all', 'Everything', 'all', 'all_1.jpg', 'all_1LB.jpg', 'Lamborghini Website: Web Design, Web Development, and CINEMA4D. Contact me for a Live Preview!'),
(12, 'all', 'Everything', 'all', 'all_2.jpg', 'all_2LB.jpg', 'Pesci Fishing Site: Web Design, Web Development. Contact me for a Live Preview!'),
(13, 'all', 'Everything', 'all', 'all_3.jpg', 'all_3LB.jpg', 'Ivey Ace Conference: Graphic Design, Branding, Marketing. Contact me for examples!'),
(14, 'all', 'Everything', 'all', 'all_4.jpg', 'all_4LB.jpg', 'D&R Electricians: Graphic Design, Branding, Web Design. Contact me for examples!'),
(15, 'all', 'Everything', 'all', 'all_5.jpg', 'all_5LB.jpg', 'Pixel Studios: Graphic Design, a project done for fun.'),
(16, 'all', 'Everything', 'all', 'all_6.jpg', 'all_6LB.jpg', 'Ecomo Water Bottle: Graphic Design, Branding, Marketing. Contact me for examples!'),
(17, 'all', 'Everything', 'all', 'all_7.jpg', 'all_7LB.jpg', 'Detailed Landscape: Graphic Design, a project done for fun.'),
(18, 'all', 'Everything', 'all', 'all_8.jpg', 'all_8LB.jpg', 'Organica Restaurant: Web Design, Web Development. ...'),
(19, 'all', 'Everything', 'all', 'all_9.jpg', 'all_9LB.jpg', 'Magazine Design: Graphic Design, a project done fo...'),
(20, 'all', 'Everything', 'all', 'all_10.jpg', 'all_10LB.jpg', 'Dragon Illustration: Graphic Design, a project done for fun.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_header`
--
ALTER TABLE `tbl_header`
  ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_header`
--
ALTER TABLE `tbl_header`
  MODIFY `header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

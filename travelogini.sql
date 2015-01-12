-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2015 at 04:02 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travelogini`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `page_setting` int(11) NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_title`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `page_setting`, `picture`, `status`, `created_at`, `updated_at`) VALUES
(5, 'testttt', 'sathish', 'UucVJFmw8uvw0iXPGFxqBU2eGvHkl1kv', '$2y$13$PSherj8jjvVuw2B6iIpAs.viaw/ScGufdXlcwZUBMu2tT13bJ9Dju', NULL, 'sathish.kumar1@mail.vinove.com', 10, 50, '', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pageDisplayTitle` varchar(100) NOT NULL,
  `pageTitle` varchar(150) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `pageContent` text NOT NULL,
  `pageMetaTitle` varchar(100) NOT NULL,
  `pageMetaKewords` varchar(150) NOT NULL,
  `pageMetaDescription` text NOT NULL,
  `pageStatus` enum('0','1','2') NOT NULL,
  `modifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `pageDisplayTitle`, `pageTitle`, `slug`, `pageContent`, `pageMetaTitle`, `pageMetaKewords`, `pageMetaDescription`, `pageStatus`, `modifiedDate`) VALUES
(2, 'ewrwerw', 'werwrw', '', '<p>AWAwAAEADADASSFSFSFSGGDSGQWEWRWARWARWEARWETRWRTRRSRFS</p>\r\n', 'asrewr', '123455', 'dsadasd', '1', '0000-00-00 00:00:00'),
(8, 'rwewewq', 'eweqew', 'rwarrr-rwar', '<p>eqwe eqw qwew eq eqweq weqe weqweqwe qeqwee w</p>', 'eqweweqwe', 'eqweqweqweqwe', 'eqwewqeweqwe', '0', '2014-12-12 10:50:22'),
(9, 'terer', 'rerewr', 'rewrwer', '<p>ewrw werw rwe rwerwe rwer wewr wer were wer werwe r ewr werwer</p>', 'rwerwerr', 'erere', 'rwerewr', '0', '2014-12-15 12:47:02'),
(10, 'terer', 'rerewr', 'rewrwer', '<p>ewrw werw rwe rwerwe rwer wewr wer were wer werwe r ewr werwer</p>', 'rwerwerr', 'erere', 'rwerewr', '0', '2014-12-15 12:49:00'),
(11, 'fdfdsf', 'fdsfdsf', 'fdsfdsf', '<p>dfdsf dsf sdf dsf dsfd fsfds fdsfddgfdsgf dgfgdfg g fg gfdfgg</p>', 'dfdsfdfd', 'fdf', 'fdsfdsf', '0', '2014-12-15 12:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `homeSlider`
--

CREATE TABLE IF NOT EXISTS `homeSlider` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `url` text,
  `status` enum('0','1') DEFAULT NULL COMMENT '0=>Inactive, 1=> Active',
  `addDate` datetime DEFAULT NULL,
  `updateDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Dumping data for table `homeSlider`
--

INSERT INTO `homeSlider` (`id`, `banner`, `url`, `status`, `addDate`, `updateDate`) VALUES
(1, 'terwer', 'rwerwrw', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `addDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=big5 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `addDate`) VALUES
(1, 'Support Management', '2014-12-11 17:10:57'),
(2, 'Account Management', '2014-12-12 17:11:19'),
(3, 'Orders Management', '2014-12-12 17:12:13'),
(4, 'Third Party Support', '2014-12-12 17:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `pkCmsID` int(11) NOT NULL AUTO_INCREMENT,
  `cmsDisplayTitle` varchar(255) NOT NULL,
  `cmsPageTitle` varchar(255) NOT NULL,
  `cmsSlug` varchar(255) NOT NULL,
  `cmsContent` text NOT NULL,
  `cmsMetaTitle` varchar(255) NOT NULL,
  `cmsMetaKeywords` text NOT NULL,
  `cmsMetaDescription` text NOT NULL,
  `cmsContentAvailable` enum('0','1') NOT NULL COMMENT '''0''=>No, ''1''=>Yes',
  `cmsBannerAvailable` enum('0','1') NOT NULL COMMENT '''0''=>No, ''1''=>Yes',
  `cmsIsPage` enum('0','1') NOT NULL,
  `cmsStatus` enum('0','1') NOT NULL COMMENT '0=Inactive | 1=Active',
  `cmsDateAdded` datetime NOT NULL,
  `cmsDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCmsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`pkCmsID`, `cmsDisplayTitle`, `cmsPageTitle`, `cmsSlug`, `cmsContent`, `cmsMetaTitle`, `cmsMetaKeywords`, `cmsMetaDescription`, `cmsContentAvailable`, `cmsBannerAvailable`, `cmsIsPage`, `cmsStatus`, `cmsDateAdded`, `cmsDateModified`) VALUES
(1, 'Home', 'Home', 'home', 'Home', 'Home', 'Home', 'Home', '0', '1', '0', '1', '2014-08-28 00:00:00', '2014-09-08 13:02:52'),
(2, 'About Us', 'About Us', 'about-us', '<p>\r\n    About Us</p>\r\n', 'About Us', 'About Us', 'About Us', '1', '0', '1', '1', '2014-06-11 15:33:46', '2014-09-08 13:02:52'),
(3, 'Terms & Conditions', 'Terms & Conditions', 'terms-conditions', '<p>\r\n    Terms &amp; Conditions</p>\r\n', 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', '1', '0', '1', '1', '2014-06-11 17:59:58', '2014-09-08 13:02:52'),
(4, 'Delivery Information', 'Delivery Information', 'delivery-information', '<p>\r\n    Delivery Information</p>\r\n', 'Delivery Information', 'Delivery Information', 'Delivery Information', '1', '0', '1', '1', '2014-06-11 18:02:50', '2014-09-08 13:02:52'),
(5, 'Privacy Policy', 'Privacy Policy', 'privacy-policy', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.</p>\r\n<h4 class="cms_heading">\r\n	Information we collect</h4>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris.</p>\r\n<h4 class="cms_heading">\r\n	Personally Identifiable Information</h4>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris.</p>\r\n', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '1', '0', '1', '0', '2014-08-28 00:00:00', '2014-09-09 07:18:39'),
(6, 'Sitemap', 'Sitemap', 'sitemap', '<p>\r\n Sitemap</p>\r\n', 'Sitemap', 'Sitemap', 'Sitemap', '1', '0', '1', '1', '2014-08-28 00:00:00', '2014-09-08 13:02:52'),
(7, 'Contact Us', 'Contact Us', 'contact-us', '<ul class="contact_inner">\r\n	<li>\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img1.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Customer Service &amp; Support:</h3>\r\n			<p>\r\n				Email us at <a class="mailto" href="mailto:support@xxxxxxx.com">support@xxxxxxx.com</a> or Call us at 07877321321 (Monday - Friday), 10am to 6pm</p>\r\n		</div>\r\n	</li>\r\n	<li>\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img2.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Business Opportunities &amp; Sales Enquiries:</h3>\r\n			<p>\r\n				Do get in touch with us at <a class="mailto" href="mailto:support@xxxxxxx.com">sales@xxxxxxx.com</a> Our representatives will contact you shortly to help you through.</p>\r\n		</div>\r\n	</li>\r\n	<li class="last">\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img3.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Our Official Coordinates:</h3>\r\n			<p>\r\n				Plot No. 426, Brokslow - Phase 3, Lagos, Nigeria</p>\r\n			<p>\r\n				Tel: XXXXXXXXXX</p>\r\n			<p>\r\n				E-mail : <a class="mailto" href="mailto:support@xxxxxxx.com">support@xxxxxxx.com</a></p>\r\n		</div>\r\n	</li>\r\n</ul>\r\n', 'Contact Us', 'Contact Us', 'Contact Us', '1', '0', '1', '0', '2014-08-28 00:00:00', '2014-09-09 07:18:29'),
(8, 'Search Page', 'Search Page', 'search', 'Fashion industry is always looking for the latest trend to absorb it and then spread it to the rest of the world. This behaviour is also common in web design. So, when the worlds of fashion and Internet collide, we can expect to see websites that blend together the latest visual and technological trends. ', 'Search Page', 'Search Page', 'Search Page', '1', '1', '0', '1', '2014-08-29 00:00:00', '2014-09-08 13:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `tpl_admin`
--

CREATE TABLE IF NOT EXISTS `tpl_admin` (
  `pkAdminID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authKey` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `passWordHash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passWordResetToken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adminEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminType` int(11) NOT NULL,
  `adminStatus` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`pkAdminID`),
  KEY `pkAdminID` (`pkAdminID`),
  KEY `pkAdminID_2` (`pkAdminID`),
  KEY `pkAdminID_3` (`pkAdminID`),
  KEY `pkAdminID_4` (`pkAdminID`),
  KEY `adminType` (`adminType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tpl_members`
--

CREATE TABLE IF NOT EXISTS `tpl_members` (
  `pkID` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberFirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authKey` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `passWordHash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passWordResetToken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memberDOB` date NOT NULL,
  `memberMobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberState` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberZip` int(10) NOT NULL,
  `memberEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memberType` enum('P','F') COLLATE utf8_unicode_ci NOT NULL COMMENT 'P=Paid F=Free',
  `memberStatus` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `memberRegistrationDate` datetime NOT NULL,
  `memberUpdateDate` datetime NOT NULL,
  `eWalletBalance` int(15) NOT NULL,
  `wishGiniBalance` int(15) NOT NULL,
  `paymentStatus` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `offerSupscription` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pkID`),
  UNIQUE KEY `memberID` (`memberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tpl_members`
--

INSERT INTO `tpl_members` (`pkID`, `memberID`, `memberFirstName`, `memberLastName`, `authKey`, `passWordHash`, `passWordResetToken`, `memberDOB`, `memberMobile`, `memberAddress`, `memberCity`, `memberState`, `memberCountry`, `memberZip`, `memberEmail`, `memberType`, `memberStatus`, `memberRegistrationDate`, `memberUpdateDate`, `eWalletBalance`, `wishGiniBalance`, `paymentStatus`, `offerSupscription`) VALUES
(5, '0', 'sathish', '', 'UucVJFmw8uvw0iXPGFxqBU2eGvHkl1kv', '$2y$13$JsNUJNF/MAcEGpt7Zn2xmeImnw/rBSw6Ijy/WCM/bSLo2IlLFHYve', NULL, '0000-00-00', '', '', '', '', '', 0, 'sathish.kumar1@mail.vinove.com', 'P', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tpl_partners`
--

CREATE TABLE IF NOT EXISTS `tpl_partners` (
  `pkPartnerID` int(11) NOT NULL AUTO_INCREMENT,
  `partnerUserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerBusinessName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authKey` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `passWordHash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passWordResetToken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `partnerMobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerOperationArea` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerState` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partnerWebsite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preferredContact` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '0=Mobile 1=Email 2=Both',
  `partnerCommission` int(15) NOT NULL,
  `partnerType` enum('P','C') COLLATE utf8_unicode_ci NOT NULL COMMENT 'P=Property C=City',
  `partnerStatus` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `partnerRegistrationDate` datetime NOT NULL,
  `partnerUpdateDate` datetime NOT NULL,
  `paymentStatus` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pkPartnerID`),
  UNIQUE KEY `partnerUserName` (`partnerUserName`),
  KEY `pkPartnerID` (`pkPartnerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tpl_partners`
--

INSERT INTO `tpl_partners` (`pkPartnerID`, `partnerUserName`, `partnerName`, `partnerBusinessName`, `authKey`, `passWordHash`, `passWordResetToken`, `partnerMobile`, `partnerCity`, `partnerOperationArea`, `partnerState`, `partnerCountry`, `partnerEmail`, `partnerWebsite`, `preferredContact`, `partnerCommission`, `partnerType`, `partnerStatus`, `partnerRegistrationDate`, `partnerUpdateDate`, `paymentStatus`) VALUES
(5, '', 'sathish', '', 'UucVJFmw8uvw0iXPGFxqBU2eGvHkl1kv', '$2y$13$JsNUJNF/MAcEGpt7Zn2xmeImnw/rBSw6Ijy/WCM/bSLo2IlLFHYve', NULL, '', '', '', '', '', 'sathish.kumar1@mail.vinove.com', '', '0', 0, 'P', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tpl_roles`
--

CREATE TABLE IF NOT EXISTS `tpl_roles` (
  `pkRoleID` int(15) NOT NULL,
  `roleName` varchar(255) NOT NULL,
  PRIMARY KEY (`pkRoleID`),
  KEY `pkRoleID` (`pkRoleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpl_sub_admin`
--

CREATE TABLE IF NOT EXISTS `tpl_sub_admin` (
  `pkSubAdminTypeID` int(15) NOT NULL,
  `subAdminName` varchar(255) NOT NULL,
  PRIMARY KEY (`pkSubAdminTypeID`),
  KEY `pkSubAdminTypeID` (`pkSubAdminTypeID`),
  KEY `pkSubAdminTypeID_2` (`pkSubAdminTypeID`),
  KEY `pkSubAdminTypeID_3` (`pkSubAdminTypeID`),
  KEY `pkSubAdminTypeID_4` (`pkSubAdminTypeID`),
  KEY `pkSubAdminTypeID_5` (`pkSubAdminTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpl_sub_admin_roles`
--

CREATE TABLE IF NOT EXISTS `tpl_sub_admin_roles` (
  `pkSubAdminRoleID` int(15) NOT NULL,
  `fkRoleID` int(11) NOT NULL,
  `fkSubAdminTypeID` int(11) NOT NULL,
  PRIMARY KEY (`pkSubAdminRoleID`),
  KEY `fkRoleID` (`fkRoleID`,`fkSubAdminTypeID`),
  KEY `fkAdminID` (`fkSubAdminTypeID`),
  KEY `fkRoleID_2` (`fkRoleID`),
  KEY `fkRoleID_3` (`fkRoleID`,`fkSubAdminTypeID`),
  KEY `fkSubAdminTypeID` (`fkSubAdminTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(3, 'sumit', 'P-zxLLnM1S1y0JNJ6ctPwi3WP2sr07Zn', '$2y$13$TF37JxSZDeELhEQzWuhm5eEtiR0/RoWEv0oizrA3GUZW/jBJde7jm', 'kKvMh9UlRU0oIhZxL2IVLkmbpRSQBIqA_1418715584', 'arun.thakur@mail.vinove.com', 10, 10, 1414488261, 1418715667),
(4, 'sumitk', '1xNCcWH6uqNyHbH0fY0W0o_hFp9CzGWQ', '$2y$13$kYv/fgv91.hJ/633thW95edr3YmovFNZf7SGBslhLX.4mXccm8A6G', NULL, 'kr.sumit340@gmail.com', 12, 10, 1414490167, 1414490167);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tpl_admin`
--
ALTER TABLE `tpl_admin`
  ADD CONSTRAINT `tpl_admin_ibfk_1` FOREIGN KEY (`adminType`) REFERENCES `tpl_sub_admin` (`pkSubAdminTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tpl_sub_admin_roles`
--
ALTER TABLE `tpl_sub_admin_roles`
  ADD CONSTRAINT `tpl_sub_admin_roles_ibfk_1` FOREIGN KEY (`fkRoleID`) REFERENCES `tpl_roles` (`pkRoleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tpl_sub_admin_roles_ibfk_2` FOREIGN KEY (`fkSubAdminTypeID`) REFERENCES `tpl_sub_admin` (`pkSubAdminTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

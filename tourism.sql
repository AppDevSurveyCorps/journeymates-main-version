-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 03:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `intCatId` int(11) NOT NULL,
  `Categories` varchar(255) NOT NULL,
  `Icon` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`intCatId`, `Categories`, `Icon`, `updated_at`, `created_at`) VALUES
(1, 'Hotels', 'fas fa-hotel', '2022-01-22 12:07:03', '2022-01-22 12:07:03'),
(2, 'Restaurants', 'fas fa-utensils', '2022-01-22 12:07:03', '2022-01-22 12:07:03'),
(3, 'Landmarks', 'fas fa-landmark', '2022-01-22 12:07:03', '2022-01-22 12:07:03'),
(4, 'Trending', 'fas fa-burn', '2022-01-22 12:07:03', '2022-01-22 12:07:03'),
(5, 'Cities', 'fas fa-city', '2022-01-22 12:07:03', '2022-01-22 12:07:03'),
(6, 'Add a Place', 'fas fa-map-marked-alt', '2022-01-22 12:07:03', '2022-01-22 12:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `type`, `detail`) VALUES
(1, 'terms', '																				<p align=\"justify\"><font size=\"2\"><strong><font color=\"#990000\">(1) ACCEPTANCE OF TERMS</font><br><br></strong>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <a href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</a>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n										\r\n										'),
(2, 'privacy', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>\r\n										'),
(3, 'aboutus', '																														<div><span style=\"color: rgb(0, 0, 0); font-family: Georgia; text-align: justify; font-weight: bold; font-size: large;\">Welcome to Tourism Management System!!!</span></div><p><span style=\"font-family: arial; font-size: medium;\"><span style=\"color: rgb(0, 0, 0); text-align: justify;\">Since then, our courteous and committed team members have always ensured a pleasant and enjoyable tour for the clients. This arduous effort has enabled MSO Tour &amp; Travels to be recognized as a dependable Travel Solutions provider with three offices in London.</span><span style=\"color: rgb(80, 80, 80);\">&nbsp;We have got packages to suit the discerning traveler\'s budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on holiday packages and customize them according to your plan.</span></span></p>\r\n										\r\n										'),
(11, 'contact', '																														<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address: UTM Johor Bahru</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblplaces`
--

CREATE TABLE `tblplaces` (
  `place_id` int(11) NOT NULL,
  `intCatId` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_description` varchar(255) NOT NULL,
  `place_ratings` varchar(255) NOT NULL,
  `place_image` varchar(255) NOT NULL,
  `page_viewer_count` int(11) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblplaces`
--

INSERT INTO `tblplaces` (`place_id`, `intCatId`, `place_name`, `place_description`, `place_ratings`, `place_image`, `page_viewer_count`, `updated_at`, `created_at`) VALUES
(1, 0, 'Kota Tua', 'Jakarta’s old town, Kota Tua centers on Fatahillah Square, a lively plaza with regular traditional dance shows. ', '4/5', 'kotatua.png', 12, '', ''),
(2, 0, 'Dunia Fantasi', 'Internationally themed amusement park offering roller coasters, interactive rides, flumes & shows.', '4/5', 'dufan.png', 3, '', ''),
(6, 0, 'China', 'Luas', '4', 'hlQqcekCRteur4JoajBH5YKahs4FamN3dEsgAAHq.jpg', 1, '2022-01-21 15:37:56', '2022-01-21 15:37:56'),
(7, 0, 'Afrika', 'Panas', '5', 'vkI8oQpgONfJkwoftb7hI1GhNkq7hT6iO7ihKguF.jpg', 1, '2022-01-21 15:40:29', '2022-01-21 15:40:29'),
(8, 0, 'Jakarta', 'mantap', '5', 'FSoYivf4gnguFttOX22GHT6y1YfSkv0uV91Sq9RF.jpg', 1, '2022-01-23 10:32:26', '2022-01-23 10:32:26'),
(9, 0, 'Jakarta', 'mantap', '4', 'fNcrGyeW3twpZgKzjrO8f146hP6axXajyT2PtMGZ.jpg', 1, '2022-01-23 10:42:54', '2022-01-23 10:42:54'),
(10, 0, 'Jakarta', 'mantap', '111', 'tZ1nL4zfzFP9rmIy31RJP5Lza1o4AsbVQakcA2eD.jpg', 1, '2022-01-23 10:46:45', '2022-01-23 10:46:45'),
(11, 0, 'test', 'oke', '4', 'VQNcu93zn0k9OHX2itmqRDhUQlyVlQWd2vRkT0hc.jpg', 1, '2022-01-23 10:53:04', '2022-01-23 10:53:04'),
(12, 0, 'Jakarta', 'oke', '3', 'WuVnVDvbWtfufDwbstGQr9DUJgvDtZxZnhyUNyJj.jpg', 1, '2022-01-23 10:54:17', '2022-01-23 10:54:17'),
(13, 0, 'test', 'mantap', '11', 'LK0ZIWsrsrwKoY29YvOfFH1Pngcg45Mf7oYNg9di.jpg', 1, '2022-01-23 10:59:21', '2022-01-23 10:59:21'),
(14, 0, 'Jakarta', 'mantap', '1', '1J6dQOMYVSiKfasyCJWNERIWdLsz05T6bjXVT14x.jpg', 1, '2022-01-23 11:02:37', '2022-01-23 11:02:37'),
(15, 0, 'Jakarta', 'oke', '1', 'd5KVMT6NXXtZhGEEhlaMLY5yMf7WqxstD9yEeM7n.jpg', 1, '2022-01-23 11:03:37', '2022-01-23 11:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `mnumber`, `email`, `password`, `RegDate`, `UpdationDate`, `updated_at`, `created_at`, `role`) VALUES
(17, 'Hilman Fikri', '032183218128213', 'test@kadal.com', '$2y$10$4M2kIGakEYtSJGKQ733C2ebIof60AxLTDgWXnB.p9d7n3utWsyvv2', '2022-01-06 17:00:00', '2022-01-18 09:46:05', '2022-01-07 13:45:47', '2022-01-07 13:45:47', 'ADMIN'),
(20, 'Rizal Pratomo Ananada', '08642342422', 'test@gmiasad1231321al.com', '$2y$10$PSeaEG0FKWsqEYZYRO.DvObPNBBfsY86grYMeh7az/K5p3I8c2zsq', '2022-01-09 17:00:00', '2022-01-23 09:54:11', '2022-01-10 14:24:38', '2022-01-10 14:24:38', 'ADMIN'),
(21, 'Labib', '0971673123', 'labib@emal.com', '$2y$10$0CqZU9tKQ8fHA3gtOMGqHurU1mH1p9/7cCFd3UYIeoHsRSW/2zurm', '2022-01-13 17:00:00', '2022-01-13 17:00:00', '2022-01-14 13:17:30', '2022-01-14 13:17:30', 'USER'),
(22, 'Bobi Bube', '0312387126361', 'bobibube@mail.com', '$2y$10$JO05LfJjMldJt6189e9oweQAnFSo9J5.xSgaDxm2u2IH0AdSasmRO', '2022-01-13 17:00:00', '2022-01-13 17:00:00', '2022-01-14 13:17:56', '2022-01-14 13:17:56', 'USER'),
(24, 'fikriansyah natsir', '0986832113', 'fikri@gmail.com', '$2y$10$ykUF3u/O21a2kAuVoIGNbOQThm5EPcCCDgi0OU/iAlPYlqs2Tv.li', '2022-01-13 17:00:00', '2022-01-14 13:19:10', '2022-01-14 13:18:48', '2022-01-14 13:18:48', 'ADMIN'),
(25, 'Ananda', '08937123111', 'test@fikri.com', '$2y$10$eDRrgMx4pXtL8fMRv1iE9uKStBcAWKCmzCS.H/AwI3GpsyiaPwKmm', '2022-01-21 17:00:00', '2022-01-22 12:07:34', '2022-01-22 12:07:03', '2022-01-22 12:07:03', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`intCatId`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tblplaces`
--
ALTER TABLE `tblplaces`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `EmailId` (`email`),
  ADD KEY `EmailId_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `intCatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblplaces`
--
ALTER TABLE `tblplaces`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

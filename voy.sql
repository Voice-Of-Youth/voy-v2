-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 11:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voy`
--

-- --------------------------------------------------------

--
-- Table structure for table `adregister`
--

CREATE TABLE `adregister` (
  `AdminId` int(32) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adregister`
--

INSERT INTO `adregister` (`AdminId`, `username`, `email`, `password`) VALUES
(1, 'Nahom', 'natnaelmenelik@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `anonymous_submittions`
--

CREATE TABLE `anonymous_submittions` (
  `Art_Id` int(11) NOT NULL,
  `Article_title` varchar(255) NOT NULL,
  `Article_content` text NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anonymous_submittions`
--

INSERT INTO `anonymous_submittions` (`Art_Id`, `Article_title`, `Article_content`, `Category`, `Created_At`) VALUES
(1, 'test3', '<p>Hello World</p>\r\n', 'test3', '2022-06-08 13:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BlogID` int(11) NOT NULL,
  `blogName` varchar(128) NOT NULL,
  `Content` text NOT NULL,
  `Category` varchar(128) NOT NULL,
  `Likes` int(11) DEFAULT NULL,
  `CommentID` int(11) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Author` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`BlogID`, `blogName`, `Content`, `Category`, `Likes`, `CommentID`, `Rating`, `Author`, `UserID`, `createdAt`) VALUES
(5, 'What is body image', 'Body image refers to how an individual sees their own body and how attractive they feel themselves to be.\r\n              Many people have concerns about their body image. These concerns often focus on weight, skin, hair, or the shape or size of a certain body part.\r\n              However, body image does not only stem from what we see in the mirror. According to some studies, a range of beliefs, experiences, and generalizations also contribute.\r\n              Throughout history, people have given importance to the beauty of the human body. Society, media, social media, and popular culture often shape these views, and this can affect how a person sees their own body. However, popular standards are not always helpful.\r\n              Constant bombardment by media images can cause people to feel uncomfortable about their body, leading to distress and ill health. It can also affect work, social life, and other aspects of life. This article will look at positive and negative body image and provide some tips on how to improve body image', '', NULL, NULL, NULL, '', 70, '2022-06-06 14:03:49'),
(6, 'Why sexual education is important', 'Adolescents in our country are growing up in a world where circumstances are quite different now ,concerning the benefits and risks in life, from those of their parents or grandparents. They need proper support not only to navigate the biological, social and cognitive transitions of their life but also to prevent cases of sexual harassment and abuse which are now increasing at an alarming rate.\r\n              Sex education is an essential tool to help them learn about a broad range of topics related to biological, psychological and sociocultural perspectives of individual beings as well as a key intervention to prevent and reduce sexual harassment, assault and abuse. It just needs to be delivered in an age-appropriate and engaging way based on science and facts.\r\n              However, this important subject is still taboo in our conservative society due to some misconceptions or lack of appropriate knowledge about sex ed. Here are some misconceptions that need to be addressed.', '', NULL, NULL, NULL, '', 71, '2022-06-06 14:03:31'),
(7, 'Test', 'Test', 'Test', NULL, NULL, NULL, '', 2, '2022-06-07 05:45:09'),
(8, 'test 2', '<p><em><strong>test</strong></em> this <u>paragraph</u></p>\r\n', ' any', NULL, NULL, NULL, '', 2, '2022-06-08 13:16:05'),
(9, 'Test', 'Test', 'Test', NULL, NULL, NULL, '', 2, '2022-06-08 13:18:48'),
(10, 'test4', '<p>hello again</p>\r\n', 'test4', NULL, NULL, NULL, '', 72, '2022-06-08 19:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BlogID` int(11) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `username`, `image`) VALUES
(18, 'nmktad', 'default_profile.png'),
(19, 'natishimelis', 'default_profile.png'),
(20, 'Selamu', 'default_profile.png'),
(21, 'Unknown', 'default_profile.png'),
(22, 'Unknown', 'default_profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submittions`
--

CREATE TABLE `submittions` (
  `SubID` int(11) NOT NULL,
  `Article_title` varchar(128) NOT NULL,
  `Article_content` text NOT NULL,
  `Category` varchar(128) NOT NULL,
  `Author` varchar(128) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submittions`
--

INSERT INTO `submittions` (`SubID`, `Article_title`, `Article_content`, `Category`, `Author`, `createdAt`, `UserID`) VALUES
(11, 'Nahom Temam', '', '', '', '2022-05-26 12:14:39', 2),
(12, 'Test', 'Test', 'Test', 'NahomTM', '2022-06-07 05:24:55', 2),
(13, 'test 2', '<p><em><strong>test</strong></em> this <u>paragraph</u></p>\r\n', ' any', 'NahomTM', '2022-06-07 11:33:29', 2),
(18, 'test4', '<p>hello again</p>\r\n', 'test4', 'Anonymous', '2022-06-08 15:49:43', 72);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `IsWriter` tinyint(1) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `IsWriter`, `createdAt`) VALUES
(2, 'Nahom', 'Temam', 'NahomTM', 'exopain2930@gmail.com', '$2y$10$x2J.FwKy7BvFi0H9Cskj5uJxtYi5MLmwYbbo3Cz3lpeHS.R6ZWKWG', 1, '2022-05-24 06:36:52'),
(4, 'Nati', 'mina', 'yared', 'natenael@email.com', '$2y$10$lIQ28cjs7PpZ31AR2x8UEO6FHtmhJefXKvFsiWqpBh3M4ovqWmN.a', 1, '2022-05-24 18:41:53'),
(70, 'Nathnael', 'Mekonnen', 'nmktad', 'nmktadesse@gmail.com', '$2y$10$.SY7k6E2cpnbH4L6eB8rE.c2HXyJptyTbPvjfZRaScSTpIDsvzu/W', 1, '2022-06-06 14:04:24'),
(71, 'Nathnael', 'Shimelis', 'natishimelis', 'natishimelisg@gmail.com', '$2y$10$8i7QuOrdP/pIIaqNyStgRuwfXk8HrQDZhZbfZdM94y0elC4WFQ0zK', 1, '2022-06-06 14:04:32'),
(72, 'Anonymous', 'Person', 'Unknown', 'anonymous@gmail.com', '$2y$10$t8dWVH3Kf6vZSJI3gI6ysOa5bXDcTNbOyR3OSPPlUyZTx1zPO5nrG', 0, '2022-06-08 15:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `validform`
--

CREATE TABLE `validform` (
  `FormID` int(11) NOT NULL,
  `FullName` varchar(128) NOT NULL,
  `Why` text NOT NULL,
  `CV` varchar(128) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validform`
--

INSERT INTO `validform` (`FormID`, `FullName`, `Why`, `CV`, `createdAt`, `UserID`) VALUES
(7, 'Nahom Temam', '\r\n          reason to be a writer      ', '../storage/validation_form_uploadsNahom TemamScreenshot (1).png', '2022-05-24 06:35:02', 2),
(8, 'Nati mina', '\r\n                sasdhghdgsadgkashd', '../storage/validation_form_uploads/Nati minaScreenshot (1).png', '2022-05-24 18:40:37', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adregister`
--
ALTER TABLE `adregister`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `anonymous_submittions`
--
ALTER TABLE `anonymous_submittions`
  ADD PRIMARY KEY (`Art_Id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`),
  ADD KEY `CommentID` (`CommentID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submittions`
--
ALTER TABLE `submittions`
  ADD PRIMARY KEY (`SubID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `validform`
--
ALTER TABLE `validform`
  ADD PRIMARY KEY (`FormID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adregister`
--
ALTER TABLE `adregister`
  MODIFY `AdminId` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `anonymous_submittions`
--
ALTER TABLE `anonymous_submittions`
  MODIFY `Art_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `submittions`
--
ALTER TABLE `submittions`
  MODIFY `SubID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `validform`
--
ALTER TABLE `validform`
  MODIFY `FormID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`CommentID`) REFERENCES `comment` (`CommentID`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `submittions`
--
ALTER TABLE `submittions`
  ADD CONSTRAINT `submittions_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `validform`
--
ALTER TABLE `validform`
  ADD CONSTRAINT `validform_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

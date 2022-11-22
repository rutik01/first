-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 22, 2022 at 04:49 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'furniture'),
(2, 'wallpaper'),
(3, 'nature'),
(4, 'branding');

-- --------------------------------------------------------

--
-- Table structure for table `classic`
--

CREATE TABLE `classic` (
  `c_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `tital` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `descripation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classic`
--

INSERT INTO `classic` (`c_id`, `r_id`, `tital`, `date`, `descripation`, `image`) VALUES
(1, 1, 'Rutik', '2004-12-31', 'I am Web Devloper....', 'WhatsApp Image 2022-06-20 at 9.51.30 PM.jpeg'),
(2, 1, 'Nitinbhai Thummar', '2022-11-06', 'I am Small Business Man', 'wp10331393.jpeg'),
(3, 1, 'Vipulbhai', '1999-02-16', 'Hello, Good Morning....', 'WhatsApp Image 2022-07-11 at 6.24.03 PM (2).jpeg'),
(4, 1, 'Darshan', '1990-02-06', 'I am Student...', 'WhatsApp Image 2022-07-11 at 6.25.02 PM (2).jpeg'),
(5, 1, 'Kajal Thummar', '2006-08-22', 'Hello, I am Devloper but as a freasher', 'WhatsApp Image 2022-07-11 at 6.26.02 PM.jpeg'),
(6, 1, 'Mehulbhai', '2001-02-12', 'I am Daimond Worker....', 'WhatsApp Image 2022-07-11 at 6.26.02 PM (1).jpeg'),
(7, 1, 'Dhruv Thummar ', '2005-02-12', 'I am 12th student', 'WhatsApp Image 2022-07-11 at 6.34.56 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `letest`
--

CREATE TABLE `letest` (
  `letest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tital` varchar(255) NOT NULL,
  `decripation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `letest`
--

INSERT INTO `letest` (`letest_id`, `user_id`, `tital`, `decripation`, `image`, `cat_id`) VALUES
(1, 1, 'Rutik Thummar', 'I am Big Business Man', 'IMG_20220705_154307_401.jpg', 1),
(2, 1, 'Nitinbhai Thummar', 'HELLO, Good Morning......', 'IMG_20220706_070508_230.webp', 2),
(3, 1, 'Hello', 'I am small Business Man', 'IMG20220409124340.jpg', 3),
(4, 1, 'Sanjay Bhai', 'I am Student...', 'Snapchat-1407762249.jpg', 4),
(5, 1, 'Lalo', 'I am Node js devloper', 'Snapchat-1898660401.jpg', 1),
(6, 1, 'Dhruv Thummar ', 'I am Science Student.........', 'IMG_0031.jpg', 2),
(7, 1, 'Kunj', 'child For Sanjaybhai Thummar', 'IMG20220412074115.jpg', 3),
(8, 1, 'Riya', 'Thummar', 'IMG_20220706_070215_536.webp', 4),
(9, 1, 'Kavya', 'Thummar', 'IMG20220706185306.jpg', 1),
(10, 1, 'Karshan Bhai Thummar', 'I am 60 year old man.......', 'IMG20211110171157.jpg', 2),
(11, 1, 'Lalo', 'Thummar', 'IMG20220409124223.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `o_id` int(11) NOT NULL,
  `tital` varchar(255) NOT NULL,
  `descripation` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`o_id`, `tital`, `descripation`, `city`, `country`, `r_id`) VALUES
(1, 'Rutik', 'Hyy, I am Webdevloper.......', 'Surat', 'India', 1),
(2, 'Sanjaybhai Thummar', 'I am King of Stock Market', 'Torento', 'Canada', 1),
(3, 'Nitinbhai', 'Thummar', 'Barlin', 'Gernmany', 1),
(4, 'Dhruv', 'I going to Surat', 'Surat', 'India', 1),
(5, 'Amit Paghdal', 'I am Daimond Worker...', 'Surat', 'India', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `r_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tital` varchar(255) NOT NULL,
  `decripation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`r_id`, `user_id`, `tital`, `decripation`, `image`) VALUES
(1, 1, 'Rutik Thummar', 'Good Morning', 'IMG-20220323-WA0010.jpg'),
(2, 1, 'Rutik Thummar', 'Good Morning', 'IMG-20220323-WA0011.jpg'),
(3, 1, 'Nitinbhai Thummar', 'Good Evening Every one......', 'IMG-20220323-WA0005.jpg'),
(4, 1, 'Vipulbhai Thummar', 'Hyy, Good Night........', 'IMG-20220323-WA0013.jpg'),
(5, 1, 'Hello', 'My Name is a R_N_Thummar', 'IMG-20220326-WA0013.jpg'),
(6, 2, 'Nitinbhai Thummar', 'hello,Good Morning..........', 'IMG-20220323-WA0003.jpg'),
(7, 2, 'Kajal Thummar', 'Good Evening Every one......', 'IMG-20220323-WA0009.jpg'),
(8, 2, 'Vipulbhai Thummar', 'May i help you?', 'IMG-20220323-WA0011.jpg'),
(9, 2, 'Kinjal Thummar ', 'Hello Good Morning.....', 'IMG_20220730_212400_425.webp');

-- --------------------------------------------------------

--
-- Table structure for table `Register_form`
--

CREATE TABLE `Register_form` (
  `Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Register_form`
--

INSERT INTO `Register_form` (`Id`, `Email`, `Password`, `City`, `Document`) VALUES
(1, 'rutikthummar123@gmail.com', 'rutik@123', 'Navsari', 'Income Tax Assessment Order'),
(2, 'sanju@gmail.com', 'san@123', 'Aanad', 'Certificate from Employe');

-- --------------------------------------------------------

--
-- Table structure for table `silder`
--

CREATE TABLE `silder` (
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tital` varchar(255) NOT NULL,
  `decripation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `silder`
--

INSERT INTO `silder` (`s_id`, `user_id`, `tital`, `decripation`, `image`) VALUES
(1, 1, 'Rutik Thummar', 'Good Morning', 'IMG-20220323-WA0012.jpg'),
(2, 1, 'Kajal Thummar', 'Thummar', 'IMG-20220404-WA0001.jpg'),
(3, 1, 'Vipulbhai Thummar', 'My Name is a Rutik Thummar ', 'IMG-20220326-WA0013.jpg'),
(4, 1, 'Nitinbhai', 'Thummar', 'IMG-20220326-WA0012.jpg'),
(6, 2, 'Rutik Thummar', 'Good Morning', 'IMG-20220323-WA0024.jpg'),
(7, 2, 'Hello', 'My Name is a Rutik Thummar ', 'IMG-20220323-WA0021.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classic`
--
ALTER TABLE `classic`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `letest`
--
ALTER TABLE `letest`
  ADD PRIMARY KEY (`letest_id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `recent`
--
ALTER TABLE `recent`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `Register_form`
--
ALTER TABLE `Register_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `silder`
--
ALTER TABLE `silder`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classic`
--
ALTER TABLE `classic`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `letest`
--
ALTER TABLE `letest`
  MODIFY `letest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Register_form`
--
ALTER TABLE `Register_form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `silder`
--
ALTER TABLE `silder`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

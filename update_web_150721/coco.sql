-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 08:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coco`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `message` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `section`, `message`) VALUES
(1, 1, 'Hello Sec 1'),
(2, 2, 'Hello Sec 2'),
(3, 3, 'Hello Sec 3'),
(4, 4, 'Hello Sec 4');

-- --------------------------------------------------------

--
-- Table structure for table `masterlogin`
--

CREATE TABLE `masterlogin` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(64) CHARACTER SET utf8 NOT NULL,
  `Lastname` varchar(64) CHARACTER SET utf8 NOT NULL,
  `nickname` varchar(64) CHARACTER SET utf8 NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `section` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterlogin`
--

INSERT INTO `masterlogin` (`id`, `Firstname`, `Lastname`, `nickname`, `email`, `password`, `section`, `role`, `start_date`) VALUES
(1, 'admin', 'one', '', 'admin01@gmail.com', '1234', 0, 0, '2021-07-05 17:21:26'),
(2, 'student', 'one', '', 'student01@gmail.com', '1234', 1, 1, '2021-07-05 17:21:26'),
(3, 'student', 'two', '', 'student02@gmail.com', '1234', 2, 1, '2021-07-06 08:00:00'),
(4, 'student', 'three', '', 'student03@gmail.com', '1234', 3, 1, '2021-07-06 08:25:40'),
(5, 'student', 'four', '', 'student04@gmail.com', '1234', 4, 1, '2021-07-06 08:25:40'),
(6, 'student', 'five', '', 'student05@gmail.com', '1234', 1, 1, '2021-07-07 08:25:40'),
(7, 'ณัชชา', 'ค้าเจริญ', 'จ๊ะจ๋า', 'kajaroennutcha@gmail.com', '0896484303', 2, 1, '2021-07-12 17:00:00'),
(8, 'วิมุตตานัง ', 'ถาวรภักดี', 'มุติ', 'mut16238@gmail.com', '0624955227', 1, 1, '2021-07-13 09:26:26'),
(9, 'เจมม่า', 'เจมม่า', 'เจมม่า', 'pinkhanvana@gmail.com', '08161785441', 1, 1, '2021-07-13 09:29:46'),
(10, 'พาวเวอร์', 'พาวเวอร์', 'พาวเวอร์', 'kn.silprachawong@gmail.com', '0635954949', 1, 1, '2021-07-13 09:29:46'),
(11, 'ไฮไลท์', 'ไฮไลท์', 'ไฮไลท์', 'n.hilight@gmail.com', '0626569999', 1, 1, '2021-07-13 09:35:11'),
(12, 'นภสร', 'ยงพิพัฒน์', 'นาน่า', 'yongpipat.napasorn@gmail.com', '0847188448', 2, 1, '2021-07-13 09:35:11'),
(13, 'เพชร', 'เพชร', 'เพชร', 'Petchphum2008@gmail.com', '08169357991', 3, 1, '2021-07-13 10:00:57'),
(14, 'กรสรวง', 'เอกธนาพิชัย', 'ต้นน้ำ', 'graceketkaew8@gmail.com', '0862783322', 3, 1, '2021-07-13 10:00:57'),
(15, 'ศิรเชษฐ์ ', 'ใบนำโชค', 'โปรตอน', 'proton.sirachet@gmail.com', '0819563551', 3, 1, '2021-07-13 10:02:09'),
(16, 'ติณติณ', 'ติณติณ', 'ติณติณ', 'getfuk8@gmail.com', '0813723427', 4, 1, '2021-07-13 10:02:09'),
(17, 'ภีม', 'โพธิพิชญกุล', 'ภีม', 'phopichayakul@gmail.com', '0878889900', 4, 1, '2021-07-13 10:04:14'),
(18, 'สิทธา', 'สรวงศิริ', 'ปอร์เช่', 'phoenixgodcreativethailand@gmail.com', '0841449565', 4, 1, '2021-07-13 10:05:43'),
(19, 'ธีรสิทธ์', 'ศรีเทพ', 'มดเอ็กซ์', 'Tsit.modx@gmail.com', '0895909572', 4, 1, '2021-07-13 10:05:43'),
(20, 'จักรพณธ์ ', 'ประภาส', 'โฟล์ค', 'prapasjakkapon@gmail.com', '0910368668', 4, 1, '2021-07-13 10:06:16'),
(21, 'เกียร์', 'เกียร์', 'เกียร์', 'phuripop.ratsameewichai@gmail.com', '0864870243', 2, 1, '2021-07-13 10:10:03'),
(22, 'coco', '03', 'mhee', 'cococodeclub03@gmail.com', 'coco03', 0, 0, '2021-07-14 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `topic` varchar(64) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_1`
--

CREATE TABLE `section_1` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(64) NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_1`
--

INSERT INTO `section_1` (`id`, `date`, `topic`, `teacher`) VALUES
(1, '2021-07-08', 'Overview', 1),
(2, '2021-07-09', 'Introduce ', 1),
(3, '2021-07-12', 'Variable', 1),
(4, '2021-07-14', 'Data type', 1),
(5, '2021-07-19', 'Operators', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_2`
--

CREATE TABLE `section_2` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_2`
--

INSERT INTO `section_2` (`id`, `date`, `topic`, `teacher`) VALUES
(1, '2021-07-05', 'Overviews', 1),
(2, '2021-07-14', 'Data type', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_3`
--

CREATE TABLE `section_3` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(64) CHARACTER SET utf8 NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_3`
--

INSERT INTO `section_3` (`id`, `date`, `topic`, `teacher`) VALUES
(1, '2021-07-07', 'Overviews', 3),
(2, '2021-07-15', 'Operators', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_4`
--

CREATE TABLE `section_4` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(64) CHARACTER SET utf8 NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_4`
--

INSERT INTO `section_4` (`id`, `date`, `topic`, `teacher`) VALUES
(1, '2021-07-12', 'Overviews', 3),
(2, '2021-07-15', 'Operators', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `Topic` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `Topic`) VALUES
(1, 'Overviews'),
(2, 'Introduction to python'),
(3, 'Variable'),
(4, 'Data type'),
(5, 'Operators'),
(6, 'Level 1'),
(7, 'Python List'),
(8, 'Python List 2'),
(9, 'Python Tuples'),
(10, 'Python Sets'),
(11, 'Python Dictionaries'),
(12, 'Conditions'),
(13, 'Level 2'),
(14, 'Level 5'),
(15, 'Level 6'),
(16, 'เจาะลึก String'),
(17, 'Level 7'),
(18, 'Loop'),
(19, 'Level 8'),
(20, 'Functions '),
(21, 'Level 9'),
(22, 'Module'),
(23, 'GUI'),
(24, 'Level 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterlogin`
--
ALTER TABLE `masterlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_1`
--
ALTER TABLE `section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_2`
--
ALTER TABLE `section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_3`
--
ALTER TABLE `section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_4`
--
ALTER TABLE `section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masterlogin`
--
ALTER TABLE `masterlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `section_1`
--
ALTER TABLE `section_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_2`
--
ALTER TABLE `section_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_3`
--
ALTER TABLE `section_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_4`
--
ALTER TABLE `section_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

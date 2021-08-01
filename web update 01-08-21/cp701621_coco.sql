-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2021 at 09:08 AM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp701621_coco`
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
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterlogin`
--

INSERT INTO `masterlogin` (`id`, `Firstname`, `Lastname`, `nickname`, `email`, `password`, `section`, `role`, `start_date`, `img`) VALUES
(1, 'admin', 'one', 'UNO', 'admin01@gmail.com', '1234', 0, 0, '2021-07-05 17:21:26', '518872bd417246eb09e84bd965237c1b.jpg'),
(2, 'student', 'one', 'ichigo', 'student01@gmail.com', '1234', 1, 1, '2021-07-05 17:21:26', '629374cd26467378cd27b48a9107b6d8.png'),
(3, 'student', 'two', 'meow', 'student02@gmail.com', '1234', 2, 1, '2021-07-06 08:00:00', '5ea4eda8ddb4b97f8a13588f6f9fdeb4.png'),
(4, 'student', 'three', '', 'student03@gmail.com', '1234', 3, 1, '2021-07-06 08:25:40', '90ca2066feb6a31d95ebbeeb7e2b7489.jpg'),
(5, 'student', 'four', '', 'student04@gmail.com', '1234', 4, 1, '2021-07-06 08:25:40', ''),
(6, 'student', 'five', '', 'student05@gmail.com', '1234', 1, 1, '2021-07-07 08:25:40', ''),
(7, 'ณัชชา', 'ค้าเจริญ', 'จ๊ะจ๋า', 'kajaroennutcha@gmail.com', '0896484303', 2, 1, '2021-07-12 17:00:00', ''),
(8, 'วิมุตตานัง ', 'ถาวรภักดี', 'มุติ', 'mut16238@gmail.com', '0624955227', 1, 1, '2021-07-13 09:26:26', ''),
(9, 'ระริน', 'หาญวนานนท์', 'เจมม่า', 'pinkhanvana@gmail.com', '08161785441', 1, 1, '2021-07-13 09:29:46', ''),
(10, 'Kijjanut', 'Silprachawong', 'Power', 'kn.silprachawong@gmail.com', '0635954949', 1, 1, '2021-07-13 09:29:46', ''),
(11, 'ณฐมณฑ์', 'ศีลประชาวงศ์', 'ไฮไลท์', 'n.hilight@gmail.com', '0626569999', 1, 1, '2021-07-13 09:35:11', ''),
(12, 'นภสร', 'ยงพิพัฒน์', 'นาน่า', 'yongpipat.napasorn@gmail.com', '0847188448', 2, 1, '2021-07-13 09:35:11', ''),
(13, 'ธนภูมิ ', 'ธีรสวัสดิ์', 'เพชร', 'petchphum2008@gmail.com', '08169357991', 3, 1, '2021-07-13 10:00:57', ''),
(14, 'กรสรวง', 'เอกธนาพิชัย', 'ต้นน้ำ', 'graceketkaew8@gmail.com', '0862783322', 3, 1, '2021-07-13 10:00:57', ''),
(15, 'ศิรเชษฐ์ ', 'ใบนำโชค', 'โปรตอน', 'proton.sirachet@gmail.com', '0819563551', 3, 1, '2021-07-13 10:02:09', ''),
(16, 'เทรเวอร์ กฤติน', 'เอเมอสัน', 'ติณติณ', 'getfuk8@gmail.com', '0813723427', 4, 1, '2021-07-13 10:02:09', ''),
(17, 'ภีม', 'โพธิพิชญกุล', 'ภีม', 'phopichayakul@gmail.com', '0878889900', 4, 1, '2021-07-13 10:04:14', ''),
(18, 'สิทธา', 'สรวงศิริ', 'ปอร์เช่', 'phoenixgodcreativethailand@gmail.com', '0841449565', 4, 1, '2021-07-13 10:05:43', ''),
(19, 'ธีรสิทธ์', 'ศรีเทพ', 'มดเอ็กซ์', 'tsit.modx@gmail.com', '0895909572', 4, 1, '2021-07-13 10:05:43', ''),
(20, 'จักรพณธ์ ', 'ประภาส', 'โฟล์ค', 'prapasjakkapon@gmail.com', '0910368668', 4, 1, '2021-07-13 10:06:16', ''),
(21, 'ภูริภพ', 'รัศมีวิชัย', 'เกียร์', 'phuripop.ratsameewichai@gmail.com', '0864870243', 2, 1, '2021-07-13 10:10:03', '');

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
  `teacher` int(11) NOT NULL,
  `link_video` varchar(254) NOT NULL,
  `passcode` varchar(48)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_1`
--

INSERT INTO `section_1` (`id`, `date`, `topic`, `teacher`,`link_video`,`passcode`) VALUES
(1, '2021-07-05', 'Overview', 1,'https://us02web.zoom.us/rec/share/-Nl3XUZUKTt73yj0eLxr8hu6ZT2be8atayX1wAGayZWBN1SBBHhMxQRkAJrpAQx-.QFPOoCQ0_IabWciV?startTime=1625478445000','H8e2#5fn'),
(2, '2021-07-07', 'Introduce ', 1, 'https://us02web.zoom.us/rec/share/_p72W6qa7cU-jzh58FEi9mI7DLD0qULqmXla9f-15WrePsFaTgZFbFy_OThTXoM4.QWeoPLJcEGMdLVdR?startTime=1625650632000','^2ha9eF$'),
(3, '2021-07-12', 'Variable', 1, 'https://drive.google.com/file/d/1p409wdXK_48jM_9s2k5ZY2IBRDlSstmY/view','-'),
(4, '2021-07-14', 'Data type', 1, 'https://us02web.zoom.us/rec/share/tHRTE-6UD2X7QJKy5aVCnZLJcZskkIJF_A8qUDetCo8H1jWm8WjgR9VOGPUL-G_z.QAey1NjlThXDOhkP', 'jxpQ1m2+'),
(5, '2021-07-19', 'Operators', 1, 'https://us02web.zoom.us/rec/share/3KPMxu9INA34LvL67A29PfkXz_1kzqey98DoLYNcupabZ-i52K19LQ_MLQPVaP5u.q-LbGpT1MBPnbyq4', 'h5$c%Qm8'),
(6, '2021-07-21', 'Level 1', 1, 'https://us02web.zoom.us/rec/share/oc-rC0CfddGsi4l6uZn0Efae2a1v-W0rGrFSU1tjAJbVSWiR8XIG9INgWEaLdmvw.t2mx9owwwFkccKtl', '@?9VFsFA'),
(7, '2021-07-26', 'Python List', 1, 'https://us02web.zoom.us/rec/share/C3RQAuX2e2F8v2gSoOn7zTRGxAeQwU-fkbwdcDRpqQKtRbU1vDABT3unAhF3seoD.A1HFooJvZMt5eB4R', '*1j6Ap+M'),
(8, '2021-07-28', 'Python List 2', 1, 'https://us02web.zoom.us/rec/share/lUouuBzNiksjZNsVQShSeQMJGCIu1zOw_wE9CmydM57SWEZMqns6Lr-c3qGnS4eD.iKcNChe_WfIHIdw6', '%L?RBZ5K');

-- --------------------------------------------------------

--
-- Table structure for table `section_2`
--

CREATE TABLE `section_2` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `teacher` int(11) NOT NULL,
  `link_video` varchar(254) NOT NULL,
  `passcode` varchar(48)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_2`
--

INSERT INTO `section_2` (`id`, `date`, `topic`, `teacher`,`link_video`,`passcode`) VALUES
(1, '2021-07-05', 'Overviews', 1, 'https://us02web.zoom.us/rec/share/-Nl3XUZUKTt73yj0eLxr8hu6ZT2be8atayX1wAGayZWBN1SBBHhMxQRkAJrpAQx-.QFPOoCQ0_IabWciV?startTime=1625483664000', 'H8e2#5fn'),
(2, '2021-07-07', 'Introduce', 1, 'https://us02web.zoom.us/rec/share/_p72W6qa7cU-jzh58FEi9mI7DLD0qULqmXla9f-15WrePsFaTgZFbFy_OThTXoM4.QWeoPLJcEGMdLVdR?startTime=1625656126000', '^2ha9eF$'),
(3, '2021-07-12', 'Variable', 1, 'https://drive.google.com/file/d/15NZXDxIkxwuDjV3y92J-5BO-N1EK733u/view', '-'),
(4, '2021-07-14', 'Data type', 1, 'https://us02web.zoom.us/rec/share/yX-eEejcJA5mkVJxGvDdPQ2S3a6d0xImRvZviuYZnOdTTf35HyhV3Oji1nsEDTJl.Q_SHyPmaqT6EAMps?startTime=1626260667000', 'jxpQ1m2+'),
(5, '2021-07-19', 'Operators', 1,'---พี่ลืมอัดต้องขอโทษด้วยครับ---', '-'),
(6, '2021-07-21', 'Level 1', 1, 'https://us02web.zoom.us/rec/share/R-CvrR2R4oAVtEgDIwjngLja9N1LBjW_wmVvXtT0B66Y8CygpxiTk2nnXs44B7X_.JA9ld9cRKW1YvrAl?startTime=1626865832000', '@?9VFsFA'),
(7, '2021-07-26', 'Python List', 1, 'https://us02web.zoom.us/rec/share/sDf-oa78UO0P-DIkQw41QJFCZj1vtEWpjgMret5MSd9f-LtYPQaizAFysJ5z8HvL.dhqbqC3ThMJ_ZgGa?startTime=1627297763000','*1j6Ap+M'),
(8, '2021-07-28', 'Python List 2', 1, 'https://us02web.zoom.us/rec/share/WuhJC3RrXBjW04w2D00n0J0-x_rg87KmgGW15yEh9Ln-Z3T3POqrZRxQEy45jMr4.UZfEK2oeSl5B2HoV?startTime=1627470608000', '*1j6Ap+M');

-- --------------------------------------------------------

--
-- Table structure for table `section_3`
--

CREATE TABLE `section_3` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(64) CHARACTER SET utf8 NOT NULL,
  `teacher` int(11) NOT NULL,
  `link_video` varchar(254) NOT NULL,
  `passcode` varchar(48)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_3`
--

INSERT INTO `section_3` (`id`, `date`, `topic`, `teacher`,`link_video`,`passcode`) VALUES
(1, '2021-07-01', 'Overviews', 1, 'https://us02web.zoom.us/rec/share/z8EF59o5knZyhmKoVHlkH5EF7kNC_QeDtFDtQC0RulLo40N7XonNihyBNxlzwNW2.IPWvZrpawGM-Cpgk?startTime=1625132386000', 'dV^w97^9'),
(2, '2021-07-06', 'Introduce', 1, 'https://us02web.zoom.us/rec/share/rXsYZsfKd2lRIyO2uohkdXvLYyMtgukijrJPN4KUeL21dmaln0TPdFGJRcVPyBsv.lxmxSjjS7ehbkvY_?startTime=1625563884000', '0&+SCF+9'),
(3, '2021-07-08', 'Variable', 1, 'https://us02web.zoom.us/rec/share/44WbT1BKDEq5jH9Oa8ICUqYFNfHGOHRE93apESf8EDn12XPV019XfHME63CtmiTD.zfLTQrrVDivVc6fI?startTime=1625736813000', 'u7&@0c!O'),
(4, '2021-07-13', 'Data type', 1, 'https://drive.google.com/file/d/1uM3xS0Sw3IsFlJ5aQiPdR8mNonmXEi1T/view', '-'),
(5, '2021-07-15', 'Operators', 1,'https://us02web.zoom.us/rec/share/eGo09HcRU_XBqhwAEojQcorOAwFoC5_auVhyJgFfpgQ6kKt6DuVQ52xbbRqjsNt4.S2lOi53gwKME2ORA', 'Xz*a1np6'),
(6, '2021-07-20', 'Level 1', 1, 'https://us02web.zoom.us/rec/share/VsfVDKvnNw_S_qdI-DhatAAaqrJ5f9_SyPMNhwSKTuVvstjcMt5VQBu_AiXXVMqX.GoU4UMx2OL6PXAGQ', 'eM=e^U6T'),
(7, '2021-07-22', 'Python List', 1, 'https://us02web.zoom.us/rec/share/fzNg5jX_pZkyoJKq85rKrZ2Xdt48S-e7M0pRzpeUZ1aK02pclbsAimju9eqPUh7w.arB5ixhQvlPxoQ9M','B4CV9*gG'),
(8, '2021-07-27', 'Python List 2', 1, 'https://us02web.zoom.us/rec/share/iFUq4UzuwBdUeKi2irAvMX4ZUAVUoVfbvqb0mwyPvghK-O6PSp7asQHc9ot4t6Ux.Qq4yLVf-PdF3H5J_', 'a!=?1Mg@');


-- --------------------------------------------------------

--
-- Table structure for table `section_4`
--

CREATE TABLE `section_4` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(64) CHARACTER SET utf8 NOT NULL,
  `teacher` int(11) NOT NULL,
  `link_video` varchar(254) NOT NULL,
  `passcode` varchar(48)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_4`
--

INSERT INTO `section_4` (`id`, `date`, `topic`, `teacher`,`link_video`,`passcode`) VALUES
(1, '2021-07-01', 'Overviews', 1, 'https://drive.google.com/file/d/1TfiMVHoV6T0-FKUc_lO-nyS1cp8z3ppk/view', '-'),
(2, '2021-07-06', 'Introduce', 1, 'https://us02web.zoom.us/rec/share/rXsYZsfKd2lRIyO2uohkdXvLYyMtgukijrJPN4KUeL21dmaln0TPdFGJRcVPyBsv.lxmxSjjS7ehbkvY_?startTime=1625569549000', '0&+SCF+9'),
(3, '2021-07-08', 'Variable', 1, 'https://us02web.zoom.us/rec/share/44WbT1BKDEq5jH9Oa8ICUqYFNfHGOHRE93apESf8EDn12XPV019XfHME63CtmiTD.zfLTQrrVDivVc6fI?startTime=1625742548000', 'u7&@0c!O'),
(4, '2021-07-13', 'Data type', 1, 'https://drive.google.com/file/d/1oHQVNUVWk6v-5CR0hDy337Er8o_1-2eN/view', '-'),
(5, '2021-07-15', 'Operators', 1, 'https://drive.google.com/file/d/1aFpNDQenHtm1NI1hcgywpi2fEL47cR0P/view', '-'),
(6, '2021-07-20', 'Level 1', 1, 'https://us02web.zoom.us/rec/share/4VdiGdDIuuLIF3w2lqJ8owVt2s4fYq-dkwvz4RlMjK5Yuelk6cHKCs1-RYWcwONO.XgxZvFC-3ui4VM7o?startTime=1626779192000', 'eM=e^U6T'),
(7, '2021-07-22', 'Python List', 1, 'https://us02web.zoom.us/rec/share/ig8F7ygjRKt3gvm9hvLeUrRbeojIplYPGpiDXMrUDVTAfjhD131oc3aKJxjdizXa.YV-0leku_xDkPdyn?startTime=1626951930000','B4CV9*gG'),
(8, '2021-07-27', 'Python List 2', 1, 'https://us02web.zoom.us/rec/share/zZXqSsJCZwNgD-1SJvhyWXJ1_8BdS30jxvqjEdB05jbC2g4j0_hDzvEuswP2Keky.PGmDYYmT5udGYLNk?startTime=1627384526000','a!=?1Mg@');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `section_2`
--
ALTER TABLE `section_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section_3`
--
ALTER TABLE `section_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section_4`
--
ALTER TABLE `section_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

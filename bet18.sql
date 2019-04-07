-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 05:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bet18`
--

-- --------------------------------------------------------

--
-- Table structure for table `debate`
--

CREATE TABLE `debate` (
  `id` int(11) NOT NULL,
  `id_peserta1` int(11) DEFAULT NULL,
  `id_peserta2` int(11) DEFAULT NULL,
  `id_peserta3` int(11) DEFAULT NULL,
  `nama_team` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debate`
--

INSERT INTO `debate` (`id`, `id_peserta1`, `id_peserta2`, `id_peserta3`, `nama_team`) VALUES
(8, 102, 103, 104, 'SMAIT AL HIKMAH BLITAR A');

-- --------------------------------------------------------

--
-- Table structure for table `debate_waitinglist`
--

CREATE TABLE `debate_waitinglist` (
  `id` int(11) NOT NULL,
  `id_peserta1` int(11) DEFAULT NULL,
  `id_peserta2` int(11) DEFAULT NULL,
  `id_peserta3` int(11) DEFAULT NULL,
  `nama_team` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(254) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'BET 2018 will have 2 category (High School and Varsity), what does that mean?', 'Both high school student and varsity student can register and compete in BET 2018 within their own respective category. High school and varsity will have a completely separated competition, each with their own adjudicator, prize pool, and awards. Varsity can only register and compete in Speech, Newscast, and Storytelling competition.'),
(2, 'What does institution mean?', 'Each participant or team must come from an institution, for high school category institution means the high school it self, but with varsity category an english club of a university will be counted as different institution than the university it self. Example : if there were 2 participants, 1 writes Universitas Brawijaya as his/her institution and the other writes Formasi Universitas Brawijaya as his/her institution, will be seen as having 2 different institution.'),
(3, 'What is main list and waiting list?', 'Main list means that your team will be accepted directly as participant of BET 2018 once you follows all the registration requirements, while the team that are registered as waiting list must wait till the registration date is over and if your team got a slot in the main list our committee will directly contact you, and your team will be accepted in the main list after paying the registration fee. ');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Debate'),
(2, 'Speech'),
(3, 'Storytelling'),
(4, 'Newscasting');

-- --------------------------------------------------------

--
-- Table structure for table `lvl`
--

CREATE TABLE `lvl` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lvl`
--

INSERT INTO `lvl` (`id`, `nama`) VALUES
(1, 'Varsity'),
(2, 'High school');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `nama_institusi` varchar(254) DEFAULT NULL,
  `alamat_institusi` varchar(254) DEFAULT NULL,
  `id_lvl` int(11) DEFAULT NULL,
  `pendamping` int(1) DEFAULT NULL,
  `nama_pendamping` varchar(254) DEFAULT NULL,
  `kontak_pendamping` varchar(254) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `upload` int(1) DEFAULT '0',
  `url_foto` varchar(254) DEFAULT NULL,
  `konfirmasi` int(1) DEFAULT '0',
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `username`, `password`, `email`, `nama_institusi`, `alamat_institusi`, `id_lvl`, `pendamping`, `nama_pendamping`, `kontak_pendamping`, `phone`, `upload`, `url_foto`, `konfirmasi`, `tgl_daftar`) VALUES
(36, 'larasayua', '7cfafe85aa425c5bcbd0fd299a9f890c', 'larasayua@gmail.com', 'UIN Sunan Ampel Surabaya', 'Jalan Ahmad Yani No. 117, Jemur Wonosari, Wonocolo, Jemur Wonosari, Wonocolo, Kota SBY', 1, 0, '', '', '082132267622', 1, 'IMG_20180103_231917.jpg', 1, '2018-01-05 13:09:26'),
(38, 'Gustav08', 'f1253e3ba5aff3adae1a0050257a826a', 'rgustavano@gmail.com', 'London School of public relations Jakarta', 'Sudirman Park Campus - Jl. K.H Mas Mansyur, Kav. 35, Jakarta Pusat 10220', 1, 0, '', '', '087770204222', 1, 'rsz_20171231_1046142.jpg', 1, '2018-01-03 15:28:02'),
(42, 'HILMI', '766e05dec32f4d6fd3e660a41e3f7e1d', 'hilmi1885@gmail.com', 'SMAIT AL HIKMAH BLITAR', 'Jl. Kh. Agus salim no10-11 garum blitar', 2, 0, '', '', '081216276414', 1, 'IMG-20180102-WA0008.jpg', 1, '2018-01-02 14:31:57'),
(45, 'elizabethm', '4ca1e624f4a3a79949be2e77f7e93b29', 'elizabethchristanti@gmail.com', 'Muhammadiyah Malang University', 'Jl. Tlogomas 246, Malang', 1, 0, '', '', '087755374743', 0, NULL, 0, '2018-01-01 16:18:40'),
(46, 'ramakevin', 'd22ab0e566349b52ed86adc3d94b37c7', 'ramakevin776@gmail.com', 'Airlangga University', 'Dharmawangsa Dalam', 1, 0, '', '', '087857845577', 0, NULL, 0, '2018-01-02 15:25:58'),
(47, 'cut.hasna', '155fb394d2aa8d1c4690adfd4febc651', 'chasna07@yahoo.com', 'Universitas Indonesia', 'Depok', 1, 0, '', '', '081574268423', 0, NULL, 0, '2018-01-03 19:43:31'),
(51, 'arasty', 'c30b67e1e520faf4421a3e9110bd8708', 'arasty15@gmail.com', 'SMAN TARUNA NALA JAWA TIMUR', 'Jl. Raya Tlogowaru, Tlogowaru, Kedungkandang, Kota Malang, Jawa Timur 65133', 2, 0, '', '', '0895605133321', 0, NULL, 0, '2018-01-04 07:38:58'),
(52, 'Jung Jaya ', 'f8a589e68b4c4edc48cf6683623ec808', 'j.j680@ymail.com', 'Brawijaya University ', 'Jalan Veteran , Malang , Jawa Timur', 1, 0, '-', '-', '6282237545935', 0, NULL, 0, '2018-01-04 10:02:14'),
(53, 'RAHMAN', 'ab6040a632c616044179360d962f9345', 'iamsarif.rahman@gmail.com', 'SMA NEGERI 1 KOTA BLITAR', 'JALAN AHMAD YANI 112 BLITAR', 2, 0, '', '', '085812718914', 0, NULL, 0, '2018-01-05 07:45:15'),
(55, 'test', '098f6bcd4621d373cade4e832627b4f6', 'dary.ardhar@gmail.com', '3', '4', 2, 0, '', '', '2', 0, NULL, 0, '2018-01-05 14:03:54'),
(56, 'Loveyou ', 'aca825344b168e22d4f76d742a99db00', 'zainulsouljah@gmail.com', 'UMM', 'Jl. Tlogomas ', 1, 0, '', '', '083876804154', 0, NULL, 0, '2018-01-05 14:16:34'),
(57, 'dnrfnd', '329669eeaff190ed8ae01698e9f545a2', 'danioke2273@gmail.com', 'Universitas Negeri Malang', 'Veteran St. No 15 Malang', 1, 0, '', '', '082138754324', 0, NULL, 0, '2018-01-06 02:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `id_username` int(11) DEFAULT NULL,
  `nama_peserta` varchar(254) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `alergi` varchar(254) DEFAULT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url_sc` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `id_username`, `nama_peserta`, `id_kategori`, `phone`, `alergi`, `tgl_daftar`, `url_sc`) VALUES
(101, 36, 'Laras Ayuningtyas Manggiasih', 2, '082132267622', 'no', '2018-01-04 02:35:49', '2018-01-04_09_35_42_1.jpg'),
(102, 42, 'Muhammad Harits Hilmi', 1, '081216276414', '', '2018-01-02 02:14:37', 'IMG-20180102-WA0002.jpg'),
(103, 42, 'Bidara Amaya Hasna', 1, '081333426999', '', '2018-01-02 02:14:37', 'IMG-20180102-WA0002.jpg'),
(104, 42, 'Faizah Diah Retnowati', 1, '081225754853', '', '2018-01-02 02:14:37', 'IMG-20180102-WA0002.jpg'),
(106, 38, 'Rinaka Gustavano', 2, '087770204222', '-', '2018-01-03 13:31:05', '15149864883191054269292.jpg'),
(141, 52, 'I Gusti Jaya Widya Istri Agung', 2, '6282237545935', 'Chicken ', '2018-01-04 10:04:04', 'IMG_2835.JPG'),
(142, 53, 'MUHAMAD ARIF RAHMAN HAKIM', 2, '085812718914', '-', '2018-01-05 07:45:53', '26177334_158819914759458_110161769_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(254) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL,
  `konfirmasi` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `konfirmasi`) VALUES
(2, 'sss', '9f6e6800cfae7749eb6c486619254b9c', 1),
(3, 'ddd', '77963b7a931377ad4ab5ad6a9cd718aa', 0),
(4, 'Bet', '58c48094ba58f4ae84cf7f685dcb150d', 1),
(5, 'bet', '58c48094ba58f4ae84cf7f685dcb150d', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `debate`
--
ALTER TABLE `debate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_peserta1` (`id_peserta1`),
  ADD KEY `id_peserta2` (`id_peserta2`),
  ADD KEY `id_peserta3` (`id_peserta3`);

--
-- Indexes for table `debate_waitinglist`
--
ALTER TABLE `debate_waitinglist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_peserta1` (`id_peserta1`),
  ADD KEY `id_peserta2` (`id_peserta2`),
  ADD KEY `id_peserta3` (`id_peserta3`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lvl`
--
ALTER TABLE `lvl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lvl` (`id_lvl`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_username` (`id_username`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `debate`
--
ALTER TABLE `debate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `debate_waitinglist`
--
ALTER TABLE `debate_waitinglist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lvl`
--
ALTER TABLE `lvl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `debate`
--
ALTER TABLE `debate`
  ADD CONSTRAINT `debate_ibfk_1` FOREIGN KEY (`id_peserta1`) REFERENCES `peserta` (`id`),
  ADD CONSTRAINT `debate_ibfk_2` FOREIGN KEY (`id_peserta2`) REFERENCES `peserta` (`id`),
  ADD CONSTRAINT `debate_ibfk_3` FOREIGN KEY (`id_peserta3`) REFERENCES `peserta` (`id`);

--
-- Constraints for table `debate_waitinglist`
--
ALTER TABLE `debate_waitinglist`
  ADD CONSTRAINT `debate_ibfk_4` FOREIGN KEY (`id_peserta1`) REFERENCES `peserta` (`id`),
  ADD CONSTRAINT `debate_ibfk_5` FOREIGN KEY (`id_peserta2`) REFERENCES `peserta` (`id`),
  ADD CONSTRAINT `debate_ibfk_6` FOREIGN KEY (`id_peserta3`) REFERENCES `peserta` (`id`);

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`id_lvl`) REFERENCES `lvl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

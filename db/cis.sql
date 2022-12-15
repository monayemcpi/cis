-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 09:22 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cis`
--

-- --------------------------------------------------------

--
-- Table structure for table `crimes`
--

CREATE TABLE `crimes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crimes`
--

INSERT INTO `crimes` (`id`, `name`) VALUES
(12, 'Murder Case'),
(13, 'Kidnaping Case'),
(14, 'Hijacks '),
(15, 'Theft'),
(16, 'Rape'),
(17, 'Terror');

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `identification` varchar(255) DEFAULT NULL,
  `crime_id` int(11) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `nid_no` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`id`, `name`, `present_address`, `permanent_address`, `mobile_no`, `photo`, `identification`, `crime_id`, `father_name`, `mother_name`, `age`, `gender`, `nid_no`, `other`) VALUES
(19, 'YASHIN ARAFAT  ', 'Banani, Dhaka', 'Hathazari, Chittagong', '01823949999', 'unnamed.png', 'eye-spot, long hair, skin color fair, Hair color Brown, Height 5ft 5 inch', 12, ' Abu Salek', ' Marium Akter', ' 30', 'Male', '969685852536123', 'N/A'),
(21, 'MUBARAK HOSEN ', 'Mirpur, Dhaka', 'Khulshi, Chittagong', '01835668195', '2.jpg', 'long hair, skin color vert, Hair color Black, Height 5ft 4 inch', 13, ' Muzaffar Hossain', ' Ruksana Begum', ' 24', 'Male', '19941524700075', 'He also attached another crime'),
(22, 'Titu Das ', 'Pahartali Railway School Coloney, Chittagong', 'Pashuram, Feni', '01925478452', '5.jpg', 'Short Hair, skin color Black, Height : 5ft 3 inch', 14, ' Anjon kumar Das', ' Bala Rani Das', ' 28', 'Male', '985475214521', 'N/A'),
(23, 'Jahangir Alam Noman   ', 'Alfala Goli, 2no gate, Chittagong', 'Rangunia , Chittagong', '01852475214', 'smith_man-512.png', 'Hair color brown, skin clor vert, height: 5ft 7 inch', 17, ' Alamgir ', ' Rohima', ' 25', 'Male', '1994151370000075', 'He has another case'),
(24, 'Kamal Hossain', 'CHITTAGONG', 'CHITTAGONG', '01823949999', '1.jpg', 'Hair color black, skin color black, height : 5ft 4 inch', 13, ' Abdul Malek', 'setara Begum', ' 26', 'Male', '2121545156565656565', 'N/A'),
(25, 'Faruk', 'Bashudhara,Dhaka', 'Chittagong', '01516780656', '3.jpg', 'eye-spot, long hair, skin color fair, Hair color Brown, Height 5ft 5 inch', 16, 'Md Rashed', 'Rokeya begum', '21', 'Male', '199752456554555', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `criminal_id` int(11) DEFAULT NULL,
  `crime_id` int(11) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`id`, `date`, `subject`, `name`, `address`, `mobile_no`, `criminal_id`, `crime_id`, `details`) VALUES
(5, '2018-05-01', 'Hijacked', 'MUBARAK HOSEN', 'chittagong', '01835668195', 22, 14, '                                                At least ï»¿8pm&nbsp; i went to my home'),
(7, '2018-05-02', 'Rape', 'Md Muzaffar Hossain', 'Hathazari, Chittagong', '01909501936', 25, 16, 'At 8.30pm a person came to the home                                            '),
(8, '2018-05-03', 'missing', 'Titu Das', 'Pahartali', '01852475214', 19, 12, '                                                                                            Friday my father missing from our house gate.'),
(9, '2018-05-15', 'uyhuhiufhi', 'fsfvfmlijo', 'jvkvjuidvjidojv', '012547955', 23, 16, 'kkljilcjhuisch usdhfuih udfhisuhf'),
(10, '2018-05-08', 'jhsjlmcidjj', 'jnkjhuyt6', 'njnhjguyguj', '012547855', 22, 15, 'gfty tgyg uyg tdjhjg'),
(11, '2018-05-07', 'buigyknyugyy', 'gybuyuyyb', 'jhukdhfisuh', '214525415855', 24, 17, 'hygyudguaydg yguyegfuda dgdeydg');

-- --------------------------------------------------------

--
-- Table structure for table `gd`
--

CREATE TABLE `gd` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `avidance` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gd`
--

INSERT INTO `gd` (`id`, `name`, `address`, `mobile_no`, `avidance`, `subject`, `date`, `details`) VALUES
(4, 'Hamid', 'VIP Tower, 3rd Floor 125, Kazirdowry Chittagong-4000 Chittagong, Bangladesh, Chatteswari Road, Chittagong , Bangladesh', '01823698974', '2.jpg', 'Phone Lose', '2018-05-04', '                                                                                                                                                                                                At least ï»¿8pm i went to my &#34;home&#34; &#39;by&#39;cng, at'),
(5, 'Ekias', 'Burischar, Hathazari, Chittagong', '01516780656', '5.jpg', 'Threat', '2018-05-01', 'At 30-04-2018 he gave me the threat, he told me he will kill me.'),
(6, 'Jakia Akter', 'Khulshi, Chittagong', '01915759591', 'matureman1-512.png', 'Certificate lost', '2018-05-02', '                                                In khulshi area the person lost her s s c certificate lost at 6.30pm.                                            '),
(7, 'Hashem Ali', 'Dhanmondi, Mirpur, Dhaka', '01909501936', 'bike.jpg', 'Bike lost', '2018-05-18', '                                                                                                Sunday i lost my bike at dhanmondi, at 5.30pm                                                                                        '),
(8, 'Kamal Hossain', 'Lalkhan bazar, khulshi, chittagong.', '017200004252', '3.jpg', 'Threat', '2018-05-30', '                                                                                                Yesterday night my neighbor gave me threat, He saw that he will kill me.                                                                                       '),
(9, ',km,', 'klmk', '0125', 'index.png', 'hfjhsdjk', '2018-05-16', '                                                                                                lkmlkm jnkjhkjkjk                                                                                        '),
(10, 'nkjsdhkjdnc', 'hnjdkcnknjksjdnckj', '01254875214', 'matureman1-512.png', 'iwioeijfkj', '2018-05-10', '                                                jjf jfidfj ijlifj                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(11, 'MUBARAK HOSSAIN', 'mubarak@cis.com', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator'),
(16, 'Md Erfan', 'erfan@cis.com', 'e10adc3949ba59abbe56e057f20f883e', 'Police'),
(17, 'Jahangir Alam Noman', 'jahangir@cis.com', 'e10adc3949ba59abbe56e057f20f883e', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crimes`
--
ALTER TABLE `crimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gd`
--
ALTER TABLE `gd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crimes`
--
ALTER TABLE `crimes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gd`
--
ALTER TABLE `gd`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

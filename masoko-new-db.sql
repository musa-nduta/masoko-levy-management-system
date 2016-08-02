-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2016 at 09:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(40) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Ilala'),
(2, 'Temeke'),
(3, 'Monduli'),
(4, 'Arumeru'),
(5, 'Dodoma Mjini'),
(6, 'Mpwapwa'),
(7, 'Chamwino'),
(8, 'Kondoa'),
(9, 'Kongwa'),
(10, 'Bahi');

-- --------------------------------------------------------

--
-- Table structure for table `district_admin`
--

CREATE TABLE `district_admin` (
  `id` int(10) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `mstatus` varchar(40) NOT NULL,
  `address` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_admin`
--

INSERT INTO `district_admin` (`id`, `fname`, `lname`, `gender`, `dob`, `mstatus`, `address`, `username`, `password`, `district_id`) VALUES
(12, 'SULEIMAN', 'JELLAH', 'Male', '02/04/1990', 'Single', 'P. O BOX 87', 'dadmin', '8b5f63eefa7d3ca3bb5ba5aa3dc8c40b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneurs`
--

CREATE TABLE `entrepreneurs` (
  `id` int(6) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mstatus` varchar(10) NOT NULL,
  `street` varchar(15) NOT NULL,
  `pobox` varchar(15) NOT NULL,
  `id_number` varchar(10) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `market_id` int(11) NOT NULL,
  `slot` int(50) NOT NULL,
  `paid` int(60) NOT NULL DEFAULT '0',
  `flag` varchar(15) NOT NULL DEFAULT 'deactivated',
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for entrepreneurs';

--
-- Dumping data for table `entrepreneurs`
--

INSERT INTO `entrepreneurs` (`id`, `fname`, `mname`, `sname`, `gender`, `dob`, `mstatus`, `street`, `pobox`, `id_number`, `phone`, `email`, `password`, `market_id`, `slot`, `paid`, `flag`, `reg_date`) VALUES
(19779, 'MUSA', 'DEDE', 'NDUTA', 'Male', '02/05/1976', 'married', 'Uhuru', '', '5320', '+255-(887) 782 772', 'nduta_msdjkjkdjkddjkdjusa@hotmail.com', 'e0bb9f757d0a6e252ffb148699aeb184', 22, 1832, 7449, 'activated', '2016-05-11'),
(19787, 'kjahfhweh', 'hhkjahhjh', 'hjkhjlkahjdh', 'male', '2016-05-09', 'single', 'nkuhungu', '87287452', '2884', '+255-', 'savedmoses@yahoo.com', 'eb7f9542101c6a94f27404fafc3efd53', 24, 1828, 0, 'deactivated', '2016-05-11'),
(19788, 'kjahfhweh', 'hhkjahhjh', 'hjkhjlkahjdh', 'male', '2016-05-09', 'single', 'nkuhungu', '87287452', '7655', '+255-(783) 737 892', 'savedmoses@yahoo.com', 'eb7f9542101c6a94f27404fafc3efd53', 24, 664, 0, 'deactivated', '2016-05-11'),
(19789, 'kjahfhwehj', 'hhkja', 'hjkhjlkahjdh', 'male', '2016-05-09', 'single', 'nkuhungu', '87287452', '6112', '+255-(783) 737 892', 'savedmoses@yahoo.com', 'f973f609428ddc917e6784ad04be21fd', 24, 1467, 0, 'deactivated', '2016-05-11'),
(19790, 'kjahfhwehj', 'hhkja', 'hjkhjlkahjdh', 'male', '2016-05-09', 'single', 'nkuhungu', '87287452', '6112', '+255-(783) 737 892', 'savedmoses@yahoo.com', 'f973f609428ddc917e6784ad04be21fd', 24, 1467, 0, 'deactivated', '2016-05-11'),
(19791, 'KLEMMIE', 'M', 'MAJAMBA', 'female', '1990-05-23', 'single', 'area D', '2736, Dodoma', '8352', '+255-(764) 464 746', 'ghadjadhkhk@yahoo.com', '7115940ff4e9c96e15c3b658bd14db52', 22, 2281, 0, 'activated', '2016-05-11'),
(19792, 'KLEMMIE', 'M', 'MAJAMBA', 'female', '1990-05-23', 'single', 'area c', '2736, Dodoma', '8352', '+255-(764) 464 746', 'ghadjadhkhk@yahoo.com', '7115940ff4e9c96e15c3b658bd14db52', 22, 2281, 0, 'activated', '2016-05-11'),
(19795, 'kjgjkg', 'jhoafhuhoauewua', 'hhalhdah', 'female', '1990-02-03', 'married', 'kjljkjcahda', '7661783, dodoma', '4595', '+255-(988) 839 483', 'kljkadakjd@gmail.com', '17ca5df3e030d9ecf1f5fd493e35b783', 24, 1732, 0, 'deactivated', '2016-05-11'),
(19796, 'kjgjkg', 'jhoafhuhoauewua', 'hhalhdah', 'female', '1990-02-03', 'married', 'kjljkjcahda', '7661783, dodoma', '4595', '+255-(988) 839 483', 'kljkadakjd@gmail.com', '17ca5df3e030d9ecf1f5fd493e35b783', 24, 1732, 0, 'deactivated', '2016-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `market_name` varchar(30) NOT NULL,
  `street` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  `occupied` int(11) NOT NULL DEFAULT '0',
  `free` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `market_name`, `street`, `description`, `image`, `capacity`, `occupied`, `free`, `district_id`) VALUES
(22, 'Mchikichini', 'Karume', 'Hapa ni Mchikichini.', '1503393823.jpeg', 3000, 3, 2997, 1),
(24, 'Soko kuu', 'Soko kuu', 'Soko kuu arusha.', '1302205275.jpeg', 2300, 6, 2294, 3),
(28, 'Majengo', 'Majengo', 'Ni town Utapata hela sana', '387965813.png', 3000, 0, 3000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `market_admin`
--

CREATE TABLE `market_admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `market_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_admin`
--

INSERT INTO `market_admin` (`id`, `fname`, `lname`, `gender`, `dob`, `mstatus`, `username`, `password`, `market_id`) VALUES
(9, 'ALLY', 'GAIDY', 'male', '02/05/1976', 'single', 'madmin', '70a9fbbce9d9e9eba70a972af51d6a4c', 22),
(11, 'JAMES', 'HERMAN', 'male', '08/13/1984', 'single', 'madmin1', '3d4ab46e41c250641d2c7549417895ae', 24),
(12, 'SAIDI', 'LOLILA', 'male', '1990/02/23', 'Married', 'saidi', '08ea4a7dd7b9b0edcc9d259c164519ad', 22),
(14, 'jkhalhdah', 'kjhkljhkjh', 'female', '1990/2/23', 'Married', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 28);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `flag` varchar(20) NOT NULL,
  `issues` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(60) NOT NULL,
  `lead` varchar(30) NOT NULL,
  `post_date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `post` mediumtext NOT NULL,
  `tittle` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `lead`, `post_date`, `time`, `image`, `post`, `tittle`) VALUES
(27, 'Muhimu sana!', '2016-04-13', '', '1048331901.jpg', 'Wale wote wanaohitaji vitalu katika masoko wanayohitaji, wanatakiwa kujisajili online. Lakini wale ambao watashindwa kufanya hivo wanaweza kufika kwenye soko husika kusajiliwa na bwana soko husika.', 'usajili wa kupata vitalu sokoni');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payer_id` int(6) NOT NULL,
  `pay_date` varchar(15) NOT NULL,
  `amount_paid` int(50) NOT NULL,
  `receipt_number` varchar(50) NOT NULL,
  `receipt_file` varchar(50) NOT NULL,
  `payer_market_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payer_id`, `pay_date`, `amount_paid`, `receipt_number`, `receipt_file`, `payer_market_id`) VALUES
(1, 19779, '2016-08-01', 6000, '674675555866675', '', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `category` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `category`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ALLY', 'G', 'ma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_admin`
--
ALTER TABLE `district_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `market_id` (`market_id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `market_admin`
--
ALTER TABLE `market_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `market_id` (`market_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payer_id` (`payer_id`),
  ADD KEY `payer_market_id` (`payer_market_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `district_admin`
--
ALTER TABLE `district_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19797;
--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `market_admin`
--
ALTER TABLE `market_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `district_admin`
--
ALTER TABLE `district_admin`
  ADD CONSTRAINT `district_admin_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD CONSTRAINT `entrepreneurs_ibfk_1` FOREIGN KEY (`market_id`) REFERENCES `market` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `market_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market_admin`
--
ALTER TABLE `market_admin`
  ADD CONSTRAINT `market_admin_ibfk_1` FOREIGN KEY (`market_id`) REFERENCES `market` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `entrepreneurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`payer_id`) REFERENCES `entrepreneurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`payer_market_id`) REFERENCES `market` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

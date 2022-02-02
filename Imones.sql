-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 02, 2022 at 12:01 AM
-- Server version: 10.3.32-MariaDB-1:10.3.32+maria~focal-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Imones`
--

CREATE TABLE `Imones` (
  `id` int(11) NOT NULL,
  `code` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pvm_code` int(10) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `work` varchar(255) NOT NULL,
  `boss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Imones`
--

INSERT INTO `Imones` (`id`, `code`, `name`, `pvm_code`, `adress`, `phone`, `email`, `work`, `boss`) VALUES
(4, 304068959, 'MB Ginadra', 123, 'Europos pr. 122, LT-46351 Kaunas', 863066677, 'kazkoks@ginadra.lt', 'Apzeldinimas', 'Gintautas Stankevicius'),
(3, 305583086, 'MB Daumasta', 123456, 'Partizanų g. 61-806, LT-49282 Kaunas', 860017458, 'daumantas.stankevicius@gmail.com', 'Statyba', 'Daumantas Stankevicius'),
(6, 157904, 'Daumantas Stankevicius', 55453453, 'Partizanų g. 61-806, LT-49282 Kaunas', 860017458, 'daumantas.stankevicius@gmail.com', 'Statyba', 'Devetas Drabuzis'),
(7, 157904, 'Daumantas Stankevicius', 55453453, 'Partizanų g. 61-806, LT-49282 Kaunas', 860017458, 'daumantas.stankevicius@gmail.com', 'Statyba', 'Devetas Drabuzis'),
(8, 157904, 'Daumantas Stankevicius', 55453453, 'Partizanų g. 61-806, LT-49282 Kaunas', 860017458, 'daumantas.stankevicius@gmail.com', 'Statyba', 'Devetas Drabuzis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Imones`
--
ALTER TABLE `Imones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Imones`
--
ALTER TABLE `Imones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

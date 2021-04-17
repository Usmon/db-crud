-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 17, 2021 at 09:32 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `maktab`
--

-- --------------------------------------------------------

--
-- Table structure for table `oqituvchilar`
--

CREATE TABLE `oqituvchilar` (
                                `id` int(11) NOT NULL,
                                `fio` varchar(100) NOT NULL,
                                `telefon` varchar(12) NOT NULL,
                                `manzil` varchar(120) NOT NULL,
                                `tugilgan_sana` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oqituvchilar`
--

INSERT INTO `oqituvchilar` (`id`, `fio`, `telefon`, `manzil`, `tugilgan_sana`) VALUES
(1, 'Akrom Yusupov', '998934567839', 'Urganch tuman, Chakkasholikor 45', '1990-05-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oqituvchilar`
--
ALTER TABLE `oqituvchilar`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oqituvchilar`
--
ALTER TABLE `oqituvchilar`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

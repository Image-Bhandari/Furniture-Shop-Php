-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2019 at 01:38 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'ram@ram.com', 'ram'),
(2, 'sita@sita.com', 'sita'),
(5, 'test@test.com', 'test'),
(6, 'man@man.com', 'man');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(8) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `offer_start_date` date NOT NULL,
  `valid_upto_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `topic`, `description`, `offer_start_date`, `valid_upto_date`) VALUES
(1, 'Sofa Sale', 'Various designs of sofa now in SALE !! \r\n AT 50 % off\r\nHurry UP !!', '2019-04-10', '2019-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Bed'),
(15, 'chair'),
(7, 'Cup Board'),
(4, 'Sofa'),
(5, 'Wardrobes');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `visibility` char(1) NOT NULL,
  `item_condition` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `name`, `description`, `price`, `categoryId`, `visibility`, `item_condition`) VALUES
(1, 'Four Poster', 'A beautiful four poster double bed.', '999.00', 2, 'S', 'Second Hand'),
(10, 'King', 'A king sized bed with a modern style', '659.00', 2, 'S', 'First Hand'),
(11, 'Corner Sofa', 'A modern styled corner sofa', '699.00', 4, 'H', 'First Hand'),
(12, 'Black Leather Sofa', 'A stylish classic. A black leather sofa, not out of place in any home!', '499.00', 4, 'S', 'Second Hand'),
(13, 'Oak Wardrobe', 'An Oak Wardrobe, two drawers and space to hang all your clothes', '399.00', 5, 'S', 'First Hand'),
(19, 'Chair', 'hjasd', '10.00', 15, 'S', 'First Hand'),
(21, 'ghj', 'ddghk', '34.00', 2, 'S', 'First Hand');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `id` int(8) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`first_name`, `surname`, `email`, `query`, `id`, `status`) VALUES
('Image', 'Bhandari', 'image.bhandari@gmail.com', 'i need a sofa,  a king sized bed as soon as practicable. \r\nthanks', 1, 'Completed'),
('Santosh', 'Subedi', 'subedi.santosh@gmail.com', 'i need a gaming chair', 2, 'Completed'),
('Ram', 'Sharma', 'Sharmaji@hotmail.com', 'I need a corner sofa really quick. my number is +977-9841000000. ', 3, 'In Process');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
